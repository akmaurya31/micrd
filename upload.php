<?php
// upload.php — COMPLETE WORKING FILE

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;

// Error reporting open (Development ke liye)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Heavy files ke liye limits badhayein
set_time_limit(600); 
ini_set('memory_limit', '512M');

/* ---------- DATABASE CONNECTION ---------- */
$host = 'localhost';
$db   = 'micr'; // Apne database ka naam yahan likhein
$user = 'root';          // Database username
$pass = 'root@123';              // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection Error : " . $e->getMessage());
}

/* ---------- SETTINGS & COUNTERS ---------- */
$chunkSize = 500; // Har 500 records ke baad DB me commit hoga
$errors    = [];
$stats     = ['inserted' => 0, 'duplicates' => 0, 'failed' => 0, 'total' => 0];

/* ---------- EXACT COLUMN MAPPING ---------- */
// Left side: Excel Header Name | Right side: Aapke Database Ka Exact Column Name
$headerMapping = [
    'Project Name'                      => 'project_name',
    'Bidder Firm'                       => 'bidder_firm',
    'Govt Department'                   => 'govt_department',
    'Gem Contract Number'               => 'gem_contract_number',
    'Gem Contract Date'                 => 'gem_contract_date',
    'LOA Reference'                     => 'loa_reference',
    'SCHOOL CATEGORY'                   => 'school_category',
    'Phase'                             => 'phase',
    'UDISE'                             => 'udise',
    'District'                          => 'district',
    'Block'                             => 'block_name',
    'SchoolName'                        => 'school_name',
    'PIN Code'                          => 'pin_code',
    'HMName'                            => 'hm_name',
    'HMNumber'                          => 'hm_number',
    'Alternate No'                      => 'alternate_no',
    'BEOName'                           => 'beo_name',
    'BEONumber'                         => 'beo_number',
    'BEO MIS/ Alternate Contact Number' => 'beo_alt_contact',
    'BSAName'                           => 'bsa_name',
    'BSANumber'                         => 'bsa_number',
    'BSA DCT Contact Number'            => 'bsa_dct_contact'
];

/* ---------- FORM SUBMISSION PROCESSING ---------- */
if (isset($_POST['upload']) && isset($_FILES['excel_file'])) {
    $file = $_FILES['excel_file'];
    
    if ($file['error'] != 0) {
        $errors[] = ['row' => '-', 'msg' => 'File upload karne me dikkat aayi hai.'];
    } else {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, ['xls', 'xlsx'])) {
            $errors[] = ['row' => '-', 'msg' => 'Sirf Excel files (.xls, .xlsx) allowed hain.'];
        } else {
            try {
                // Excel Load karein
                $spreadsheet = IOFactory::load($file['tmp_name']);
                $sheet       = $spreadsheet->getActiveSheet();
                $data        = $sheet->toArray(null, true, true, true);
                
                // --- 1. HEADER VALIDATION ---
                $excelHeaders = array_map('trim', $data[1]); // Pehli row headers hain
                $colMap = [];
                
                foreach ($headerMapping as $excelTitle => $dbCol) {
                    $foundKey = array_search($excelTitle, $excelHeaders);
                    if ($foundKey !== false) {
                        $colMap[$dbCol] = $foundKey; // Dynamic Column Map Index (e.g., 'A', 'B', 'C')
                    } else {
                        $errors[] = ['row' => 'Header', 'msg' => "Missing Required Column: '$excelTitle'"];
                    }
                }

                // Agar koi header missing nahi hai tabhi aage badhein
                if (empty($errors)) {
                    
                    // --- 2. SQL QUERY PREPARATION ---
                    $columns      = implode(', ', array_keys($colMap));
                    $placeholders = implode(', ', array_fill(0, count($colMap), '?'));
                    $sql          = "INSERT INTO schools_table ($columns) VALUES ($placeholders)";
                    $stmt         = $pdo->prepare($sql);

                    // --- 3. FAST DUPLICATE CHECK MEMORY CACHE ---
                    // Ek baar me saare existing UDISE fetch karke array flip kar rhe hain fast lookup ke liye
                    $existingUdise = $pdo->query("SELECT udise FROM schools_table")->fetchAll(PDO::FETCH_COLUMN, 0);
                    $existingUdise = array_flip($existingUdise);

                    // --- 4. START TRANSACTION FOR FIRST CHUNK ---
                    $pdo->beginTransaction();
                    $chunkCounter = 0;

                    foreach ($data as $rowNum => $row) {
                        if ($rowNum == 1) continue; // Skip header row
                        if (empty(trim(implode('', $row)))) continue; // Skip completely empty rows

                        $stats['total']++;
                        $udise = trim($row[$colMap['udise']] ?? '');

                        // Basic Validation
                        if (empty($udise)) {
                            $errors[] = ['row' => $rowNum, 'msg' => "UDISE Code khali nahi ho sakta."];
                            $stats['failed']++;
                            continue;
                        }

                        // Duplicate Check (Database + Current Excel Sheet ke andar dono check ho jayega)
                        if (isset($existingUdise[$udise])) {
                            $stats['duplicates']++;
                            continue; 
                        }

                        // --- 5. DATA PREPARATION & SANITIZATION ---
                        $values = [];
                        foreach ($colMap as $dbCol => $excelKey) {
                            $val = trim($row[$excelKey] ?? '');
                            
                            // Gem Contract Date formatting (Excel specific)
                            if ($dbCol == 'gem_contract_date' && !empty($val)) {
                                if (is_numeric($val)) {
                                    // Agar excel serial number format me hai
                                    $val = Date::excelToDateTimeObject($val)->format('Y-m-d');
                                } else {
                                    // Agar direct text format me hai
                                    $timestamp = strtotime($val);
                                    $val = ($timestamp) ? date('Y-m-d', $timestamp) : null;
                                }
                            }
                            
                            // Empty strings ko Database me properly NULL bhejen
                            $values[] = ($val === '') ? null : $val;
                        }

                        // --- 6. EXECUTE INSERT & CHUNK MANAGEMENT ---
                        try {
                            $stmt->execute($values);
                            $stats['inserted']++;
                            $chunkCounter++;
                            
                            // Naye inserted UDISE ko local cache me daalein taaki sheet ke aage ke duplicate handle ho sakein
                            $existingUdise[$udise] = true;

                            // Chunk size hit hone par data database me push karein aur naya transaction kholein
                            if ($chunkCounter >= $chunkSize) {
                                $pdo->commit();
                                $pdo->beginTransaction();
                                $chunkCounter = 0;
                            }
                        } catch (Exception $e) {
                            $stats['failed']++;
                            $errors[] = ['row' => $rowNum, 'msg' => "Database Insert Mismatch: " . $e->getMessage()];
                        }
                    }
                    
                    // Aakhiri chunk ko finalize karein
                    if ($pdo->inTransaction()) {
                        $pdo->commit();
                    }
                }
            } catch (Exception $e) {
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                $errors[] = ['row' => 'System', 'msg' => "Excel Reading Error: " . $e->getMessage()];
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robust Excel Data Importer</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f9; color: #333; padding: 40px; margin: 0; }
        .container { max-width: 1000px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        h2 { margin-top: 0; color: #2c3e50; border-bottom: 2px solid #ecf0f1; padding-bottom: 15px; }
        .upload-form { background: #fafbfc; border: 2px dashed #cbd5e1; padding: 30px; text-align: center; border-radius: 8px; margin-bottom: 30px; }
        .upload-form input[type="file"] { margin-bottom: 15px; font-size: 16px; }
        .btn { background: #007bff; color: white; border: none; padding: 10px 25px; font-size: 16px; border-radius: 5px; cursor: pointer; transition: 0.2s; }
        .btn:hover { background: #0056b3; }
        .stat-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; margin: 25px 0; }
        .stat-box { padding: 20px; border-radius: 8px; text-align: center; color: white; font-weight: bold; }
        .bg-blue { background: #3498db; } .bg-green { background: #2ecc71; } .bg-orange { background: #e67e22; } .bg-red { background: #e74c3c; }
        .stat-box span { display: block; font-size: 28px; margin-top: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 25px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); }
        th, td { text-align: left; padding: 12px 15px; border-bottom: 1px solid #e2e8f0; }
        th { background: #f8fafc; color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 12px; }
        tr:hover { background: #f8fafc; }
        .badge-row { background: #fee2e2; color: #991b1b; padding: 2px 8px; border-radius: 4px; font-size: 13px; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>School Data Excel Importer (Chunking & Safe-Mode)</h2>
    
    <form method="POST" enctype="multipart/form-data" class="upload-form">
        <p>Select Excel File (.xlsx or .xls) with precise columns layout:</p>
        <input type="file" name="excel_file" accept=".xls,.xlsx" required><br>
        <button type="submit" name="upload" class="btn">Process & Insert Data</button>
    </form>

    <?php if ($stats['total'] > 0 || $stats['failed'] > 0 || $stats['duplicates'] > 0): ?>
        <h3>Processing Summary</h3>
        <div class="stat-grid">
            <div class="stat-box bg-blue">Total Processed<span><?= $stats['total'] ?></span></div>
            <div class="stat-box bg-green">Successfully Inserted<span><?= $stats['inserted'] ?></span></div>
            <div class="stat-box bg-orange">Duplicates Skipped<span><?= $stats['duplicates'] ?></span></div>
            <div class="stat-box bg-red">Failed Rows<span><?= $stats['failed'] ?></span></div>
        </div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <h3 style="color: #e74c3c; margin-top: 40px;">Errors / System Warnings Log</h3>
        <table>
            <thead>
                <tr>
                    <th style="width: 120px;">Row Number</th>
                    <th>Issue Description / Database Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($errors as $error): ?>
                    <tr>
                        <td><span class="badge-row">Row #<?= htmlspecialchars($error['row']) ?></span></td>
                        <td style="color: #475569; font-size: 14px;"><?= htmlspecialchars($error['msg']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <?php if (isset($_POST['upload'])): ?>
            <div style="background: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 6px; font-weight: bold; text-align: center; margin-top: 20px;">
                🎉 Sabhi records perfectly aur safely bina kisi error ke process ho chuke hain!
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

</body>
</html>
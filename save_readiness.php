<?php
header('Content-Type: application/json');

// 1. Session चालू करें ताकि लॉग-इन कर्मचारी की ID मिल सके
session_start();

// मान लेते हैं कि लॉगिन के वक्त आपने $_SESSION['emp_code'] सेट किया था।
// अगर टेस्टिंग कर रहे हैं और सेशन सेट नहीं है, तो डिफ़ॉल्ट 'EMP101' मान लेगा।
$emp_code = isset($_SESSION['emp_code']) ? $_SESSION['emp_code'] : 'EMP_TEST_USER';

// 2. डेटाबेस कनेक्शन सेटिंग्स
$host = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit;
}

// 3. POST डेटा प्राप्त करना
$udise_code  = isset($_POST['udise_code']) ? trim($_POST['udise_code']) : '';
$school_name = isset($_POST['school_name']) ? trim($_POST['school_name']) : '';
$user_type   = isset($_POST['user_type']) ? trim($_POST['user_type']) : '';
$status      = isset($_POST['status']) ? trim($_POST['status']) : '';
$remark      = isset($_POST['remark']) ? trim($_POST['remark']) : '';

// वैलिडेशन चेक
if (empty($udise_code) || empty($school_name) || empty($user_type) || empty($status) || empty($remark)) {
    echo json_encode(["status" => "error", "message" => "All mandatory fields are required."]);
    exit;
}

// सुरक्षा जांच: गैर-HM यूजर के लिए SNR स्टेटस ब्लॉक करना
if ($user_type !== 'HM' && $status === 'SNR') {
    echo json_encode(["status" => "error", "message" => "Invalid status for selected user type."]);
    exit;
}

// 4. फाइल अपलोड हैंडलिंग
$file_path = null;
if (isset($_FILES['relevant_file']) && $_FILES['relevant_file']['error'] == 0) {
    $upload_dir = 'uploads/';
    
    // अगर फ़ोल्डर नहीं है तो बनाएं
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $file_name = time() . '_' . basename($_FILES['relevant_file']['name']);
    $target_file = $upload_dir . $file_name;
    
    if (move_uploaded_file($_FILES['relevant_file']['tmp_name'], $target_file)) {
        $file_path = $target_file;
    }
}

// 5. SQL में सुरक्षित रूप से डेटा इन्सर्ट करना (Prepared Statements)
$sql = "INSERT INTO site_readiness (udise_code, school_name, user_type, status, file_path, remark, created_by_emp, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $udise_code, $school_name, $user_type, $status, $file_path, $remark, $emp_code);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Record saved successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to save record: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
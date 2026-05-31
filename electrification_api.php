<?php
header('Content-Type: application/json');
session_start();

// वर्तमान लॉग-इन कर्मचारी का कोड (अगर सेशन में नहीं है तो डिफ़ॉल्ट)
$emp_code = isset($_SESSION['emp_code']) ? $_SESSION['emp_code'] : 'EMP_SYSTEM_USER';

// डेटाबेस कनेक्शन सेटिंग्स
$host = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit;
}

// ----------------------------------------------------
// कार्य 1: UDISE CODE के आधार पर स्कूल सर्च करना (GET Request)
// ----------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'search_udise') {
    $udise_code = isset($_GET['udise_code']) ? trim($_GET['udise_code']) : '';
    
    if (empty($udise_code)) {
        echo json_encode(["status" => "error", "message" => "UDISE code is empty"]);
        exit;
    }

    // मास्टर टेबल से स्कूल नाम ढूँढना
    $stmt = $conn->prepare("SELECT school_name FROM schools_master WHERE udise_code = ? LIMIT 1");
    $stmt->bind_param("s", $udise_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode(["status" => "success", "school_name" => $row['school_name']]);
    } else {
        echo json_encode(["status" => "error", "message" => "Not found"]);
    }
    $stmt->close();
    $conn->close();
    exit;
}

// ----------------------------------------------------
// कार्य 2: फॉर्म का सारा डेटा टेबल में सेव करना (POST Request)
// ----------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'save_data') {
    
    $udise_code             = isset($_POST['udise_code']) ? trim($_POST['udise_code']) : '';
    $school_name            = isset($_POST['school_name']) ? trim($_POST['school_name']) : '';
    $electrification_status = isset($_POST['electrification_status']) ? trim($_POST['electrification_status']) : '';
    $remark                 = isset($_POST['remark']) ? trim($_POST['remark']) : '';
    
    // अनिवार्य फ़ील्ड्स की जाँच
    if (empty($udise_code) || empty($school_name) || empty($electrification_status) || empty($remark)) {
        echo json_encode(["status" => "error", "message" => "Required fields missing."]);
        exit;
    }

    // फ़ाइल अपलोड प्रोसेस
    $file_path = null;
    if (isset($_FILES['relevant_file']) && $_FILES['relevant_file']['error'] == 0) {
        $upload_dir = 'uploads/electrification/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $file_name = time() . '_' . basename($_FILES['relevant_file']['name']);
        $target_file = $upload_dir . $file_name;
        
        if (move_uploaded_file($_FILES['relevant_file']['tmp_name'], $target_file)) {
            $file_path = $target_file;
        }
    }

    // डेटाबेस में सुरक्षित एंट्री (Prepared Statement)
    $sql = "INSERT INTO school_electrification (udise_code, school_name, electrification_status, remark, file_path, created_by_emp, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $udise_code, $school_name, $electrification_status, $remark, $file_path, $emp_code);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Data saved successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database insert error: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>
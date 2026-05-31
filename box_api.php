<?php
header('Content-Type: application/json');
session_start();

// वर्तमान कर्मचारी का सत्र (Session tracking)
$emp_code = isset($_SESSION['emp_code']) ? $_SESSION['emp_code'] : 'EMP_INVENTORY_USER';

// DB कनेक्शन
$host = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit;
}

$action = isset($_GET['action']) ? $_GET['action'] : (isset($_POST['action']) ? $_POST['action'] : '');

// ----------------------------------------------------
// कार्य 1: UDISE Code सर्च (GET)
// ----------------------------------------------------
if ($action === 'search_udise' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $udise_code = isset($_GET['udise_code']) ? trim($_GET['udise_code']) : '';
    
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
// कार्य 2: Box Number के आधार पर Box Code/ID फ़ेच करना (GET)
// ----------------------------------------------------
if ($action === 'get_box_code' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $box_type = isset($_GET['box_type']) ? trim($_GET['box_type']) : '';
    $box_number = isset($_GET['box_number']) ? trim($_GET['box_number']) : '';

    $stmt = $conn->prepare("SELECT box_code FROM box_master WHERE box_type = ? AND box_number = ? LIMIT 1");
    $stmt->bind_param("ss", $box_type, $box_number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode(["status" => "success", "box_code" => $row['box_code']]);
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid Box Number"]);
    }
    $stmt->close();
    $conn->close();
    exit;
}

// ----------------------------------------------------
// कार्य 3: फॉर्म डेटा सुरक्षित रूप से सेव करना (POST)
// ----------------------------------------------------
if ($action === 'save_box_data' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $udise_code           = isset($_POST['udise_code']) ? trim($_POST['udise_code']) : '';
    $school_name          = isset($_POST['school_name']) ? trim($_POST['school_name']) : '';
    $ifp_box_no           = isset($_POST['ifp_box_no']) ? trim($_POST['ifp_box_no']) : '';
    $ifp_box_code         = isset($_POST['ifp_box_code']) ? trim($_POST['ifp_box_code']) : '';
    $ups_box_no           = isset($_POST['ups_box_no']) ? trim($_POST['ups_box_no']) : '';
    $ups_box_code         = isset($_POST['ups_box_code']) ? trim($_POST['ups_box_code']) : '';
    $accessories_box_no   = isset($_POST['accessories_box_no']) ? trim($_POST['accessories_box_no']) : '';
    $accessories_box_code = isset($_POST['accessories_box_code']) ? trim($_POST['accessories_box_code']) : '';
    $remarks              = isset($_POST['remarks']) ? trim($_POST['remarks']) : '';

    if (empty($udise_code) || empty($ifp_box_no) || empty($ups_box_no) || empty($accessories_box_no) || empty($remarks)) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    // फ़ाइल अपलोड प्रबंधन
    $file_path = null;
    if (isset($_FILES['relevant_file']) && $_FILES['relevant_file']['error'] == 0) {
        $upload_dir = 'uploads/boxes/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $file_name = time() . '_' . basename($_FILES['relevant_file']['name']);
        $target_file = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['relevant_file']['tmp_name'], $target_file)) {
            $file_path = $target_file;
        }
    }

    // डेटाबेस में सुरक्षित इंसर्शन
    $sql = "INSERT INTO box_distribution (udise_code, school_name, ifp_box_no, ifp_box_code, ups_box_no, ups_box_code, accessories_box_no, accessories_box_code, file_path, remarks, created_by_emp, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $udise_code, $school_name, $ifp_box_no, $ifp_box_code, $ups_box_no, $ups_box_code, $accessories_box_no, $accessories_box_code, $file_path, $remarks, $emp_code);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Data saved"]);
    } else {
        echo json_encode(["status" => "error", "message" => "DB Error: " . $stmt->error]);
    }
    
    $stmt->close();
    $conn->close();
    exit;
}
?>
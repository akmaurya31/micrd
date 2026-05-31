<?php
// 1. Database Configuration Details
define('DB_SERVER', 'localhost'); // Agar live server hai toh mostly localhost hi rehta hai
define('DB_USER', 'root');        // Aapka database username (Default: root)
define('DB_PASS', 'root@123');            // Aapka database password (Default: khali/empty)
define('DB_NAME', 'micr'); // Apne real database ka naam yahan likhein

// 2. Error Reporting Enabler (Debugging ke liye zaroori hai)
// Yeh line kisi bhi MySQLi query ki galti ko screen par dikhayegi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // 3. Database se Connection banana
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
    // 4. Connection ka Character Set UTF-8 set karna (Taaki Hindi/Special characters me dikkat na aaye)
    mysqli_set_charset($conn, "utf8mb4");

} catch (Exception $e) {
    // Agar connection fail ho toh seedha error message dikhaye aur page rok de
    die("Database Connection Fail Ho Gaya: " . $e->getMessage());
}
?>
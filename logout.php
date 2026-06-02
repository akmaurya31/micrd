<?php
// Session ko start karna zaroori hai taaki use destroy kiya ja sake
session_start();

// 1. Saare session variables ko khali (clear) karein
$_SESSION = array();

// 2. Agar session cookie exist karti hai, toh use bhi browser se delete karein (Good Practice)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 3. Server par chal rahe session ko poori tarah destroy karein
session_destroy();

// 4. User ko wapas login page par redirect kar dein
header("location: index.php");
exit;
?>
<?php
session_start();

// Agar user pehle se logged in hai to dashboard par bhejien
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: dashboard.php");
    exit;
}

$error_message = "";

// Login form submit hone par
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {

    // Demo Credentials Fix kar diye hain
    $fixed_username = "demo_user";
    $fixed_password = "demo_pass";

    // Form se data fetch karna (HTML names ke mutabik)
    $user_type = isset($_POST['userType']) ? $_POST['userType'] : '';
    $project   = isset($_POST['project']) ? $_POST['project'] : '';
    $username  = isset($_POST['userId']) ? trim($_POST['userId']) : '';
    $password  = isset($_POST['password']) ? trim($_POST['password']) : '';

    if(empty($user_type) || empty($username) || empty($password)){
        $error_message = "User Type, User ID and Password are required!";
    }
    elseif($user_type != 'super_admin' && empty($project)){
        $error_message = "Project is required!";
    }
    
    // Username aur Password check
    elseif ($username === $fixed_username && $password === $fixed_password) {

        $random_names = ["Manish", "Avinash", "Sonam", "Luxmi", "Priya", "Dilip"];
        // 2. array_rand() se kisi bhi ek index ko randomly pick kiya
        $random_key = array_rand($random_names);
        $randname = $random_names[$random_key];

        // Session mein saari details store karna
        $_SESSION['loggedin']   = true;
        $_SESSION['username']   = $username;
        $_SESSION['user_type']  = $user_type; // Dropdown value saved
        $_SESSION['project']    = $project;   // Dropdown value saved
        $_SESSION['empname']    = $randname;   // Dropdown value saved


       // --- ROLE BASED REDIRECTION ---
        // User Type ke hisab se alag-alag dashboard par bhejna
        if ($user_type === 'super_admin' || $user_type === 'administrator') {
            header("location: dashboard-admin.php");
            exit;
        } 
        elseif ($user_type === 'coordinator') {
            header("location: dashboard-backoffice.php");
            exit;
        } 
        elseif ($user_type === 'logistics') {
            header("location: dashboard-logistics.php");
            exit;
        } 
        elseif (strpos($user_type, 'vendor') !== false) { // Agar value me 'vendor' word hai
            header("location: dashboard-vendor.php");
            exit;
        } 
        else {
            // Default agar kuch match na ho
            header("location: dashboard-default.php");
            exit;
        }

    } else {
        $error_message = "Invalid Username or Password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error-box { color: red; font-weight: bold; margin-bottom: 15px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
    </style>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #fcf8e3;
        }

        /* Main Container split into Left and Right */
        .main-container {
            display: flex;
            flex: 1;
            position: relative;
        }

        /* Left Section: Branding & Illustration */
        .left-section {
            flex: 1.1;
            background: linear-gradient(135deg, #fff9e6 0%, #f7ebb6 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 40px;
            text-align: center;
        }

        .header-logos {
            display: flex;
            gap: 20px;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        /* Placeholder styles for logos/images */
        .logo-placeholder {
            width: 80px;
            height: 80px;
            background-color: #e2d1a6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: #333;
            font-weight: bold;
        }

        .portal-title-area {
            margin-bottom: 30px;
        }

        .portal-title-area h2 {
            color: #d46a00;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .portal-title-area h1 {
            color: #0c3c78;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .portal-title-area p {
            color: #444;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Vector Illustration Placeholder Layout */
        .illustration-container {
            width: 100%;
            max-width: 500px;
            height: 300px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 12px;
            border: 2px dashed #d46a00;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d46a00;
            font-weight: bold;
        }

        /* Middle Floating Circle ("Instructions") */
        .instructions-badge {
            position: absolute;
            left: 52.3%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 65px;
            height: 65px;
            background-color: #b86214;
            border: 4px solid #fff;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: bold;
            cursor: pointer;
            z-index: 10;
        }

        /* Right Section: Login Form */
        .right-section {
            flex: 0.9;
            background-color: #fffbf0;
            /* Subtle mathematical background pattern simulation */
            background-image: radial-gradient(#f0e4cc 1px, transparent 1px);
            background-size: 24px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
        }

        .login-card h2 {
            color: #0c3c78;
            font-size: 26px;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            position: relative;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-size: 14px;
            font-weight: 500;
        }

        .form-group select, 
        .form-group input[type="text"], 
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #c8d3e3;
            border-radius: 6px;
            background-color: #eef4ff;
            color: #333;
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-group select:focus, 
        .form-group input:focus {
            border-color: #0c3c78;
            background-color: #fff;
        }

        /* Password field Eye-icon container */
        .password-wrapper {
            position: relative;
        }
        .password-wrapper input {
            padding-right: 40px;
        }
        .eye-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 16px;
        }

        /* Captcha Segment */
        .captcha-row {
            display: flex;
            gap: 15px;
            align-items: flex-end;
        }

        .captcha-box-container {
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
        }

        .captcha-visual {
            background: #e2e2e2;
            background-image: repeating-linear-gradient(45deg, #ccc, #ccc 2px, #e2e2e2 2px, #e2e2e2 10px);
            padding: 10px;
            font-weight: bold;
            font-size: 20px;
            letter-spacing: 4px;
            color: #111;
            border-radius: 4px;
            border: 1px solid #bbb;
            text-shadow: 2px 2px #fff;
            user-select: none;
            flex: 1;
            text-align: center;
        }

        .refresh-btn {
            background: none;
            border: none;
            font-size: 22px;
            color: #28a745;
            cursor: pointer;
            outline: none;
        }

        .captcha-input-field {
            flex: 1;
        }

        .captcha-input-field input {
            background-color: #fff !important;
            border: 1px solid #ccc !important;
        }

        .forgot-password {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            font-size: 13px;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            background-color: #0c3c78;
            color: white;
            border: none;
            padding: 14px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 25px;
            transition: background-color 0.2s;
        }

        .login-btn:hover {
            background-color: #082a54;
        }

        /* Footer */
        footer {
            background-color: #ffffff;
            border-top: 1px solid #e0e0e0;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #555;
            flex-wrap: wrap;
            gap: 10px;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        /* Responsive Layout adjustment */
        @media (max-width: 900px) {
            .main-container {
                flex-direction: column;
            }
            .instructions-badge {
                position: static;
                transform: none;
                margin: 20px auto;
            }
            .left-section, .right-section {
                flex: none;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="main-container">
        
        <div class="left-section">
            <div style="width:100%;">
                <div class="header-logos">
                    <div class="logo-placeholder">Project</div>
                    <div class="logo-placeholder">Execution</div>
                </div>

                <div class="portal-title-area">
                    <h2>Project Execution</h2>
                    <h1>DIGITAL INITIATIVE PORTAL</h1>
                    <p>Way to Manage Education and smart panels</p>
                </div>
            </div>

            <div class="illustration-container">
                 
            </div>
            
            <div></div> </div>

        <div class="instructions-badge">
            <span style="font-size: 16px;">📋</span>
            <span>Instructions</span>
        </div>

        <div class="right-section">
            <div class="login-card">
                <h2>Login</h2>
                
                <?php if(!empty($error_message)): ?>
        <div class="error-box"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form action="" method="POST">

    <div class="form-group" id="user-group">
        <select id="user-type" name="userType">
            <option value="">--Select--</option>
            <option value="super_admin">Super Administrator</option>
            <option value="administrator">Administrator</option>
            <option value="coordinator">Co-Ordinator/Back Office</option>
            <option value="logistics">Logistics</option>
        </select>
    </div>


<div class="form-group" id="project-group">
    <label for="project">Project</label>
    <select id="project" name="project">
        <option value="">--Select--</option>
        <option value="hello_world">Hello World</option>
        <option value="mirc">MIRC</option>
        <option value="cylkon">Cylkon</option>
    </select>
</div>
        <div class="form-group">
            <label for="user-id">User ID</label>
            <input type="text" id="user-id" name="userId" placeholder="Enter demo_user">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Enter demo_pass">
                <span class="eye-icon">👁️</span>
            </div>
        </div>

        <a href="#" class="forgot-password">Forgot Password?</a>
        <br><br>

        <button type="submit" name="login_submit" class="login-btn">Login</button>
    </form>
            </div>
        </div>

    </div>

    <footer>
        <div>Copyright © Project Execution, TEAM</div>
        <div>
            <strong>Technical Helpline :</strong> 
            Email ID: <a href="mailto:techsupport@upnbdi.in">techsupport@projectexecution.in</a> | 
            Phone: <a href="tel:+915224150500">+91 522 8493453</a>
        </div>
        <div>Powered by <a href="#" style="color:#333; font-weight:bold; text-decoration:underline;">LAP</a></div>
    </footer>

    <script>
document.getElementById('user-type').addEventListener('change', function () {
    let projectGroup = document.getElementById('project-group');

    if (this.value === 'super_admin') {
        projectGroup.style.display = 'none';
        document.getElementById('project').value = '';
    } else {
        projectGroup.style.display = 'block';
    }
});
</script>

</body>
</html>
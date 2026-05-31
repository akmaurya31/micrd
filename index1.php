<?php
session_start();

// Agar user pehle se logged in hai
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: dashboard.php");
    exit;
}

$error_message = "";

// Login form submit hone par
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {

    // Fixed credentials
    $fixed_username = "Ladmin";
    $fixed_password = "Pword123";

    // Form data
    $username = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation
    if(empty($username) || empty($password)){
        $error_message = "All fields are required!";
    }
    elseif ($username === $fixed_username && $password === $fixed_password) {

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("location: dashboard.php");
        exit;

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
    <title>Login Form</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .auth-card{
            width:100%;
            max-width:450px;
            border-radius:15px;
        }

        .btn-custom{
            background: linear-gradient(to right, #667eea, #764ba2);
            border:none;
            color:#fff;
        }

        .btn-custom:hover{
            opacity:0.9;
            color:#fff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card auth-card shadow p-4">

        <h2 class="text-center mb-4">Login</h2>

        <!-- Error Message -->
        <?php if(!empty($error_message)) : ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input 
                    type="text" 
                    name="email"
                    class="form-control"
                    placeholder="Enter Username"
                    value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input 
                    type="password" 
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                >
            </div>

            <button type="submit" name="login_submit" class="btn btn-custom w-100">
                Sign In
            </button>

        </form>

    </div>
</div>

</body>
</html>
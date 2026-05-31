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
    $username = ($_POST['email']);
    $password = ($_POST['password']);

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
    <title>Auth Page - Sign In & Sign Up</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .auth-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background: #ffffff;
            max-width: 450px;
            width: 100%;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
            border-color: #764ba2;
        }
        .btn-custom {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            opacity: 0.9;
            color: white;
        }
        .toggle-link {
            color: #764ba2;
            text-decoration: none;
            font-weight: 600;
        }
        .toggle-link:hover {
            text-decoration: underline;
        }
        /* Smooth transition for switching forms */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center">
    <div class="card auth-card p-4 p-sm-5">
        
        <!-- ================= SIGN IN FORM ================= -->
        <div id="signin-form" class="fade-in">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle text-primary" style="font-size: 3rem; color: #764ba2 !important;"></i>
                <h2 class="fw-bold mt-2 text-dark">Welcome Back</h2>
                <p class="text-muted">Please sign in to your account</p>
            </div>

             <!-- Error Message -->
        <?php if(!empty($error_message)) : ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
            
            <form action="index.php" method="POST">
                <div class="mb-3">
                    <label for="signin-email" class="form-label">Username / Email address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="text" class="form-control" id="signin-email" name="email" placeholder="name@example.com" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="signin-password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="signin-password"  name="password" placeholder="••••••••" required>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label text-muted" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="small text-decoration-none" style="color: #764ba2;">Forgot Password?</a>
                </div>
                <button type="submit" name="login_submit" class="btn btn-custom w-100 py-2 mb-3">Sign In</button>
            </form>
            
            <div class="text-center mt-3">
                <p class="mb-0 text-muted">Don't have an account? <a href="#" id="to-signup" class="toggle-link">Sign Up</a></p>
            </div>
        </div>

        <!-- ================= SIGN UP FORM (Initially Hidden) ================= -->
        <div id="signup-form" class="fade-in d-none">
            <div class="text-center mb-4">
                <i class="bi bi-person-plus-fill text-primary" style="font-size: 3rem; color: #764ba2 !important;"></i>
                <h2 class="fw-bold mt-2 text-dark">Create Account</h2>
                <p class="text-muted">Get started with your free account</p>
            </div>
            
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="signup-name" class="form-label">Full Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="signup-name" placeholder="John Doe" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="signup-email" class="form-label">Email address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="signup-email" placeholder="name@example.com" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="signup-password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="signup-password" placeholder="Minimum 6 characters" required>
                    </div>
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label text-muted small" for="terms">I agree to the Terms & Conditions</label>
                </div>
                <button type="submit" class="btn btn-custom w-100 py-2 mb-3">Sign Up</button>
            </form>
            
            <div class="text-center mt-3">
                <p class="mb-0 text-muted">Already have an account? <a href="#" id="to-signin" class="toggle-link">Sign In</a></p>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to toggle between Forms -->
<script>
    const signInForm = document.getElementById('signin-form');
    const signUpForm = document.getElementById('signup-form');
    const toSignUp = document.getElementById('to-signup');
    const toSignIn = document.getElementById('to-signin');

    // Switch to Sign Up
    toSignUp.addEventListener('click', function(e) {
        e.preventDefault();
        signInForm.classList.add('d-none');
        signUpForm.classList.remove('d-none');
    });

    // Switch to Sign In
    toSignIn.addEventListener('click', function(e) {
        e.preventDefault();
        signUpForm.classList.add('d-none');
        signInForm.classList.remove('d-none');
    });
</script>
</body>
</html>
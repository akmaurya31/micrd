<?php 
// 1. Sabse pehle session start karein
session_start(); 

// 2. Security Check: Agar user logged in nahi hai, toh use login page par bhaga do
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login.php");
    exit;
}

// 3. Baaki ka aapka page variables aur includes
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Class Project Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="jio_css.css">
</head>
<body>

    <main class="dashboard-container">
        <header>
            <h1 class="main-title">  <?php echo isset($_SESSION['user_type']) ? ucfirst($_SESSION['user_type']) : 'Coordinator'; ?>   Dashboard</h1>
        </header>

        <section class="cards-grid">
            <div class="card card-blue">
                <div class="card-icon"><i class="fa-solid fa-school-flag"></i></div>
                <div class="card-content">
                    <div class="card-metrics">
                        <div><strong>2963</strong><span>Total Site Delivery</span></div>
                    </div>
                </div>
            </div>

            <div class="card card-green">
                <div class="card-icon"><i class="fa-regular fa-file-lines"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>5866</strong>
                        <span>Total Site Readiness</span>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-icon"><i class="fa-regular fa-clipboard"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>60</strong>
                        <span>Total Electrification</span>
                    </div>
                </div>
            </div>

            <div class="card card-green">
                <div class="card-icon"><i class="fa-solid fa-file-signature"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>5907</strong>
                        <span>Total Installation</span>
                    </div>
                </div>
            </div>

            <div class="card card-blue">
                <div class="card-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>0</strong>
                        <span>Total Training</span>
                    </div>
                </div>
            </div>

           

          
 
 

          
        </section>

        <section class="table-section">
            <h2 class="table-title">  Details</h2>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>SI Name</th>
                            <th>Site Readiness  </th>
                            <th>Electrification</th>
                            <th>Instalation </th>
                            <th>Smart Class Setup Successfully</th>
                            <th>Training Session Held</th>
                            <th>Smart Class Setup Finalized</th>
                            <th>Contract Date</th>
                            <th>Days Exceeding Contract date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left font-medium">HELLO WORLD</td>
                            <td>5911</td>
                            <td>15</td>
                            <td>5907</td>
                            <td>5165</td>
                            <td>27</td>
                            <td>0</td>
                            <td>17/03/2025</td>
                            <td class="text-danger font-bold">345</td>
                        </tr>
                        <tr class="row-total">
                            <td class="text-left font-bold">Total</td>
                            <td>2963</td>
                            <td>5926</td>
                            <td>5911</td>
                            <td>15</td>
                            <td>5907</td>
                            <td>5165</td>
                            <td>27</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>




</body>
</html>
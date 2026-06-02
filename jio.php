<?php 
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
            <h1 class="main-title">Dashboard</h1>
        </header>

        <section class="cards-grid">
            <div class="card card-blue">
                <div class="card-icon"><i class="fa-solid fa-school-flag"></i></div>
                <div class="card-content">
                    <div class="card-metrics">
                        <div><strong>2963</strong><span>Total Schools</span></div>
                        <div><strong>5926</strong><span>Smart Class</span></div>
                    </div>
                </div>
            </div>

            <div class="card card-green">
                <div class="card-icon"><i class="fa-regular fa-file-lines"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>5866</strong>
                        <span>Total Site Readiness Received</span>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-icon"><i class="fa-regular fa-clipboard"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>60</strong>
                        <span>Total Site Readiness Pending</span>
                    </div>
                </div>
            </div>

            <div class="card card-green">
                <div class="card-icon"><i class="fa-solid fa-file-signature"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>5907</strong>
                        <span>Schools Ready for Equipment Installation</span>
                    </div>
                </div>
            </div>

            <div class="card card-blue">
                <div class="card-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>0</strong>
                        <span>Schools Pending for Equipment Installation</span>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-icon"><i class="fa-solid fa-hourglass-half"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <span>Schools where Equipment Installation is in Progress</span>
                        <strong class="metric-shift">755</strong>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-icon"><i class="fa-solid fa-server"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>5165</strong>
                        <span>Schools where Equipment are Installed</span>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-icon"><i class="fa-regular fa-pen-to-square"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>2960</strong>
                        <span>Training Sessions Scheduled</span>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>2960</strong>
                        <span>Training Sessions Organized</span>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-icon"><i class="fa-regular fa-clock"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>0</strong>
                        <span>Smart Class Setup Finalized</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="table-section">
            <h2 class="table-title">System Integrator Details</h2>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>SI Name</th>
                            <th>Smart Class to be Setup</th>
                            <th>Total SmartClass Rooms</th>
                            <th>Site Readiness Received</th>
                            <th>Site Readiness Pending</th>
                            <th>Site Readiness Approved</th>
                            <th>Smart Class Setup Successfully</th>
                            <th>Training Session Held</th>
                            <th>Smart Class Setup Finalized</th>
                            <th>Contract Date</th>
                            <th>Days Exceeding Contract date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left font-medium">MIRC Pvt. Ltd.</td>
                            <td>2963</td>
                            <td>5926</td>
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
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</body>
</html>
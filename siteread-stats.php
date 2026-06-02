<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">

    <!-- Tab Name Header -->
 <div class="flex items-center">
    <a href="siteread-stats.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
        Statistic Site Readiness
    </a>
    
    <a href="siteread.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
        Site Readiness
    </a>
    
    <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
</div>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="jio_css.css">

 <div class="p-4 md:p-6 w-full block">
    <main class="dashboard-container">
        
        <section class="cards-grid">
            <div class="card card-blue">
                <div class="card-icon"><i class="fa-solid fa-school-flag"></i></div>
                <div class="card-content">
                    <div class="card-metrics">
                        <div><strong>23</strong><span>Total Site Readiness</span></div>
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
                        <span>Total Site Readiness HM Level</span>
                    </div>
                </div>
            </div>

            <div class="card card-blue">
                <div class="card-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>0</strong>
                       <span>Total Site Readiness BEO Level</span>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-icon"><i class="fa-solid fa-hourglass-half"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                       <span>Total Site Readiness BSA Level</span>
                        <strong class="metric-shift">755</strong>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-icon"><i class="fa-solid fa-server"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>5165</strong>
                        <span>Total</span>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-icon"><i class="fa-regular fa-pen-to-square"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>2960</strong>
                        <span>Today</san>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>2960</strong>
                        <span>Yesterday</span>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-icon"><i class="fa-regular fa-clock"></i></div>
                <div class="card-content">
                    <div class="single-metric">
                        <strong>0</strong>
                        <span>SNR</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="table-section">
            <h2 class="table-title"> Details</h2>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>SI Name</th>
                            <th>Total HM</th>
                            <th>Total BEO</th>
                            <th>Total BSA</th>
                            <th>Site Readiness Pending</th>
                            <th>Site Readiness Approved</th>
                            <th>Is Exist</th>
                            <th>Total Done</th>
                            <th>Total Pending</th>
                            <th>Total SNR Pending</th>
                            <th>SNR Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left font-medium">HELLO WORLD</td>
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
</div>
</div> 
<?php 
include('includes/footer.php'); 
?>
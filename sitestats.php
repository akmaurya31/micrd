<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Readiness Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/留学/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background-color: #fdfbf7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        .dashboard-container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            padding: 25px;
            border: 1px solid #f1ece1;
        }
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 8px;
            border-bottom: 2px solid #f1ece1;
        }
        /* Top Cards Styling matching image layout */
        .stat-card {
            background: #fff;
            border: 1px dashed #4a777a; /* Dashed border like image */
            border-radius: 6px;
            padding: 15px;
            display: flex;
            align-items: center;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        /* Light background pattern effect for cards */
        .stat-card::after {
            content: "";
            position: absolute;
            right: -10px;
            bottom: -10px;
            width: 80px;
            height: 80px;
            background: rgba(235, 104, 76, 0.05);
            border-radius: 50%;
            z-index: 1;
        }
        .stat-icon {
            font-size: 32px;
            color: #4a777a;
            margin-right: 15px;
            z-index: 2;
        }
        .stat-data {
            z-index: 2;
        }
        .stat-number {
            font-size: 24px;
            font-weight: 700;
            color: #0c2340;
            line-height: 1.1;
        }
        .stat-label {
            font-size: 13px;
            color: #555;
            margin-top: 2px;
        }
        /* Table Styling */
        .custom-table-card {
            background: #fffdf6;
            border: 1px solid #e9dfc6;
            border-radius: 6px;
            padding: 15px;
            margin-top: 25px;
        }
        .table th {
            background-color: #ede4cc !important;
            color: #4a3b2c;
            font-weight: 600;
            font-size: 14px;
            border-bottom: 2px solid #dcd1b4;
        }
        .table td {
            font-size: 14px;
            vertical-align: middle;
        }
        /* SNR Section Styling */
        .snr-card {
            border: 1px dashed #d97706; /* Orange dashed border for SNR */
        }
        .snr-icon {
            color: #d97706;
        }
        .text-done { color: #16a34a; font-weight: 600; }
        .text-pending { color: #dc2626; font-weight: 600; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="dashboard-container">
        
        <div class="section-title">
            <i class="bi bi-speedometer2 me-2"></i>Overall Site Readiness Dashboard
        </div>
        
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-building-check"></i></div>
                    <div class="stat-data">
                        <div class="stat-number text-done">5,866</div>
                        <div class="stat-label">Total Done</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-building-exclamation"></i></div>
                    <div class="stat-data">
                        <div class="stat-number text-pending">60</div>
                        <div class="stat-label">Total Pending</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-calendar-check"></i></div>
                    <div class="stat-data">
                        <div class="stat-number">145</div>
                        <div class="stat-label">Today Done</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-calendar-x"></i></div>
                    <div class="stat-data">
                        <div class="stat-number text-pending">15</div>
                        <div class="stat-label">Today Pending</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-arrow-left-circle"></i></div>
                    <div class="stat-data">
                        <div class="stat-number text-muted">130</div>
                        <div class="stat-label">Yesterday Done</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-clock-history"></i></div>
                    <div class="stat-data">
                        <div class="stat-number">20</div>
                        <div class="stat-label">Yesterday Pending</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-table-card">
            <div class="fw-bold mb-3 text-secondary text-uppercase" style="font-size: 13px; letter-spacing: 0.5px;">
                Role-Wise Site Readiness Details
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover m-0 align-middle">
                    <thead>
                        <tr class="text-center">
                            <th class="text-start" style="width: 25%;">Officer / Role Level</th>
                            <th>Today Done</th>
                            <th>Today Pending</th>
                            <th>Yesterday Done</th>
                            <th>Yesterday Pending</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>HM</strong> (Head Master)</td>
                            <td class="text-center text-done">85</td>
                            <td class="text-center text-pending">5</td>
                            <td class="text-center text-muted">70</td>
                            <td class="text-center text-muted">8</td>
                        </tr>
                        <tr>
                            <td><strong>BEO</strong> (Block Education Officer)</td>
                            <td class="text-center text-done">40</td>
                            <td class="text-center text-pending">7</td>
                            <td class="text-center text-muted">45</td>
                            <td class="text-center text-muted">6</td>
                        </tr>
                        <tr>
                            <td><strong>BSA</strong> (Basic Shiksha Adhikari)</td>
                            <td class="text-center text-done">20</td>
                            <td class="text-center text-pending">3</td>
                            <td class="text-center text-muted">15</td>
                            <td class="text-center text-muted">6</td>
                        </tr>
                        <tr class="table-light font-weight-bold" style="background-color: #f8f9fa;">
                            <td><strong>Total</strong></td>
                            <td class="text-center font-weight-bold text-done">145</td>
                            <td class="text-center font-weight-bold text-pending">15</td>
                            <td class="text-center font-weight-bold text-muted">130</td>
                            <td class="text-center font-weight-bold text-muted">20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="section-title mt-5" style="border-bottom: 2px solid #fde68a;">
            <i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>SNR (Site Not Ready) Status
        </div>
        
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <div class="stat-card snr-card">
                    <div class="stat-icon snr-icon"><i class="bi bi-x-circle-fill"></i></div>
                    <div class="stat-data">
                        <div class="stat-number">450</div>
                        <div class="stat-label">Total SNR Reported</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stat-card snr-card">
                    <div class="stat-icon snr-icon"><i class="bi bi-question-diamond"></i></div>
                    <div class="stat-data">
                        <div class="stat-number text-danger">120</div>
                        <div class="stat-label">Is Exist SNR (Active)</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stat-card snr-card">
                    <div class="stat-icon snr-icon"><i class="bi bi-hourglass-split"></i></div>
                    <div class="stat-data">
                        <div class="stat-number text-warning">80</div>
                        <div class="stat-label">Pending SNR Resolution</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
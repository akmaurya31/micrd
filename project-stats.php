<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">

    <div class="flex items-center">
        <a href="project-stats.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            Statistic Project
        </a>
        <a href="project.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
            Project
        </a>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="jio_css.css">

    <div class="p-4 md:p-6 w-full block">
        <main class="dashboard-container space-y-6">
            
            <section class="bg-slate-50 border border-gray-200 p-4 rounded-xl shadow-sm">
                <div class="flex items-center gap-2 mb-3 text-[#1e3e62] font-semibold text-sm">
                    <i class="fa-solid fa-filter"></i> Analytics Filters
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Upload Date Range</label>
                        <select id="dateFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Time Data</option>
                            <option value="today">Uploaded Today</option>
                            <option value="yesterday">Uploaded Yesterday</option>
                            <option value="custom">Custom Date Range</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Project Name (Bidder Firm)</label>
                        <select id="projectFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Projects (MIRC, etc.)</option>
                            <option value="mirc">MIRC</option>
                            <option value="uplc">UPLC</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Project Phase</label>
                        <select id="phaseFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Phases</option>
                            <option value="phase1">Phase-1</option>
                            <option value="phase2">Phase-2</option>
                            <option value="phase3">Phase-3</option>
                            <option value="phase4">Phase-4</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Specific Date Select</label>
                        <input type="date" id="customDateInput" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]" />
                    </div>
                </div>
            </section>

            <section class="cards-grid">
                <div class="card card-blue">
                    <div class="card-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <div class="card-content">
                        <div class="single-metric">
                            <strong id="metricTotalAllocated">5,165</strong>
                            <span>Total Allocated Projects</span>
                        </div>
                    </div>
                </div>

                <div class="card card-green">
                    <div class="card-icon"><i class="fa-solid fa-calendar-day"></i></div>
                    <div class="card-content">
                        <div class="single-metric">
                            <strong id="metricTodayUpload">2,960</strong>
                            <span>Uploaded Today</span>
                        </div>
                    </div>
                </div>

                <div class="card card-orange">
                    <div class="card-icon"><i class="fa-solid fa-calendar-minus"></i></div>
                    <div class="card-content">
                        <div class="single-metric">
                            <strong id="metricYesterdayUpload">2,205</strong>
                            <span>Uploaded Yesterday</span>
                        </div>
                    </div>
                </div>

                <div class="card card-pink">
                    <div class="card-icon"><i class="fa-solid fa-school"></i></div>
                    <div class="card-content">
                        <div class="single-metric">
                            <strong id="metricActivePhases">4</strong>
                            <span>Total Active Phases</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="table-section bg-slate-50/50 p-4 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="table-title !mb-0 text-[#1e3e62] flex items-center gap-2">
                        <i class="fa-solid fa-chart-pie"></i> Project vs Phase Wise Summary Matrix
                    </h2>
                    <span class="text-xs bg-blue-100 text-[#1e3e62] px-2.5 py-1 rounded-full font-medium">Auto-Calculated</span>
                </div>
                <div class="table-responsive shadow-sm rounded-lg bg-white">
                    <table class="w-full text-center border-collapse">
                        <thead>
                            <tr class="bg-slate-100 text-[#1e3e62] text-xs font-bold border-b border-gray-200">
                                <th class="p-3 text-left">Project / Bidder Firm</th>
                                <th class="p-3">Phase-1 Count</th>
                                <th class="p-3">Phase-2 Count</th>
                                <th class="p-3">Phase-3 Count</th>
                                <th class="p-3">Phase-4 Count</th>
                                <th class="p-3 bg-blue-50 font-bold text-[#1e3e62]">Total Allotment</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs text-gray-700 divide-y divide-gray-100">
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">MIRC</td>
                                <td class="p-3">1,200</td>
                                <td class="p-3">850</td>
                                <td class="p-3">450</td>
                                <td class="p-3">150</td>
                                <td class="p-3 font-bold bg-blue-50/50 text-[#1e3e62]">2,650</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">UPLC</td>
                                <td class="p-3">1,000</td>
                                <td class="p-3">900</td>
                                <td class="p-3">400</td>
                                <td class="p-3">215</td>
                                <td class="p-3 font-bold bg-blue-50/50 text-[#1e3e62]">2,515</td>
                            </tr>
                            <tr class="bg-slate-100 font-bold text-gray-900 border-t-2 border-gray-300">
                                <td class="p-3 text-left">Grand Total</td>
                                <td class="p-3">2,200</td>
                                <td class="p-3">1,750</td>
                                <td class="p-3">850</td>
                                <td class="p-3">365</td>
                                <td class="p-3 bg-blue-100 text-[#1e3e62] font-black">5,165</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="table-section">
                <h2 class="table-title">Site Readiness Detailed Reports</h2>
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
                                <th>Upload Date</th>
                                <th>SNR Done</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left font-medium">MIRC SMART CLASS</td>
                                <td>2963</td>
                                <td>5926</td>
                                <td>5911</td>
                                <td>15</td>
                                <td>5907</td>
                                <td>5165</td>
                                <td>27</td>
                                <td>0</td>
                                <td>05/06/2026</td>
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
                                <td>345</td>
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
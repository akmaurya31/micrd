<?php 
$page_title = "Employee Dashboard Analytics - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>
 
<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">

    <!-- Tab Navigation -->
    <div class="flex items-center">
        <a href="employee-stats.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            Statistic Employee
        </a>
        <a href="employee.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
            Employee Form
        </a>
        <a href="employee-credentials.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            Manage Credentials & Status
        </a>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="p-4 md:p-6 w-full block">
        <main class="dashboard-container space-y-6">
            
            <!-- SECTION 1: ANALYTICS FILTERS -->
            <section class="bg-slate-50 border border-gray-200 p-4 rounded-xl shadow-sm">
                <div class="flex items-center gap-2 mb-3 text-[#1e3e62] font-semibold text-sm">
                    <i class="fa-solid fa-user-gear"></i> Employee Workforce Filters
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Filter by Role</label>
                        <select id="roleFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Roles Workforce</option>
                            <option value="superadmin">Superadmin</option>
                            <option value="subadmin">Subadmin</option>
                            <option value="vendor">Vendor</option>
                            <option value="coordinator">Team Coordinator</option>
                            <option value="field">Field Team</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Filter by City / Region</label>
                        <select id="cityFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Locations</option>
                            <option value="lucknow">Lucknow</option>
                            <option value="delhi">Delhi</option>
                            <option value="kanpur">Kanpur</option>
                            <option value="prayagraj">Prayagraj</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Document Verification Status</label>
                        <select id="docFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Employees</option>
                            <option value="verified">Fully Verified (Photo + Aadhaar)</option>
                            <option value="pending">Pending Document Attachments</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Joining / Registration Date</label>
                        <input type="date" id="empDateInput" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]" />
                    </div>
                </div>
            </section>

            <!-- SECTION 2: METRIC METERS (CARDS) -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1: Total Workforce -->
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-blue-500/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-users"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricTotalEmp">428</strong>
                        <span class="text-xs text-blue-100 font-medium">Total Active Employees</span>
                    </div>
                </div>

                <!-- Card 2: Field Strength -->
                <div class="bg-gradient-to-r from-emerald-600 to-emerald-700 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-emerald-500/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-person-digging"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricFieldTeam">312</strong>
                        <span class="text-xs text-emerald-100 font-medium">On-Field Executives</span>
                    </div>
                </div>

                <!-- Card 3: Coordinators & Vendors -->
                <div class="bg-gradient-to-r from-orange-500 to-amber-600 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-orange-400/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-network-wired"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricCoordinators">84</strong>
                        <span class="text-xs text-orange-100 font-medium">Coordinators & Vendors</span>
                    </div>
                </div>

                <!-- Card 4: Missing Documentation Alert -->
                <div class="bg-gradient-to-r from-rose-600 to-red-700 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-rose-500/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricPendingDocs">32</strong>
                        <span class="text-xs text-rose-100 font-medium">Missing Aadhaar/Photo</span>
                    </div>
                </div>
            </section>

            <!-- SECTION 3: ROLE VS REGION WISE CROSS SUMMARY MATRIX -->
            <section class="bg-slate-50/50 p-4 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="text-sm font-semibold text-[#1e3e62] flex items-center gap-2">
                        <i class="fa-solid fa-chart-pie"></i> Designation Matrix & Role Wise Summary Count
                    </h2>
                    <span class="text-xs bg-blue-100 text-[#1e3e62] px-2.5 py-1 rounded-full font-medium">Realtime Strength</span>
                </div>
                <div class="overflow-x-auto shadow-sm rounded-lg bg-white border border-gray-200">
                    <table class="w-full text-center border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-100 text-[#1e3e62] font-bold border-b border-gray-200">
                                <th class="p-3 text-left">Primary Role Designation</th>
                                <th class="p-3">Lucknow Hub</th>
                                <th class="p-3">Delhi NCR</th>
                                <th class="p-3">Kanpur Region</th>
                                <th class="p-3">Prayagraj Zone</th>
                                <th class="p-3 bg-blue-50 text-[#1e3e62] font-bold">Total Strength</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 divide-y divide-gray-100">
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Field Team Executive</td>
                                <td class="p-3">120</td>
                                <td class="p-3">85</td>
                                <td class="p-3">62</td>
                                <td class="p-3">45</td>
                                <td class="p-3 font-bold bg-blue-50/50 text-[#1e3e62]">312</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Team Coordinator</td>
                                <td class="p-3">22</td>
                                <td class="p-3">18</td>
                                <td class="p-3">14</td>
                                <td class="p-3">10</td>
                                <td class="p-3 font-bold bg-blue-50/50 text-[#1e3e62]">64</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Registered Vendor</td>
                                <td class="p-3">5</td>
                                <td class="p-3">7</td>
                                <td class="p-3">4</td>
                                <td class="p-3">4</td>
                                <td class="p-3 font-bold bg-blue-50/50 text-[#1e3e62]">20</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Subadmin Control</td>
                                <td class="p-3">12</td>
                                <td class="p-3">8</td>
                                <td class="p-3">6</td>
                                <td class="p-3">4</td>
                                <td class="p-3 font-bold bg-blue-50/50 text-[#1e3e62]">30</td>
                            </tr>
                            <tr class="bg-slate-100 font-bold text-gray-900 border-t-2 border-gray-300">
                                <td class="p-3 text-left">Grand Total</td>
                                <td class="p-3">161</td>
                                <td class="p-3">118</td>
                                <td class="p-3">86</td>
                                <td class="p-3">67</td>
                                <td class="p-3 bg-blue-100 text-[#1e3e62] font-black">428</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- SECTION 4: ATTACHMENT COMPLIANCE DETAILED REPORTS -->
            <section class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
                <h2 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <i class="fa-solid fa-folder-open text-orange-500"></i> Document Compliance & Account Verification Audit
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-center text-xs border border-gray-200 rounded-lg">
                        <thead>
                            <tr class="bg-[#eae2d8] text-gray-800 font-semibold border-b border-gray-300">
                                <th class="p-3 text-left">Zone / City Group</th>
                                <th class="p-3">Total Profiles</th>
                                <th class="p-3">Photo Uploaded</th>
                                <th class="p-3">Aadhaar Attached</th>
                                <th class="p-3">Highest Qualification Records</th>
                                <th class="p-3 text-rose-600">Pending Docs Blocked</th>
                                <th class="p-3 text-emerald-600">Active Login Credentials</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-gray-600">
                            <tr>
                                <td class="p-3 text-left font-medium text-gray-900">Lucknow Cluster</td>
                                <td class="p-3 font-semibold">161</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 155</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 150</td>
                                <td class="p-3">161</td>
                                <td class="p-3 font-bold text-red-500">11</td>
                                <td class="p-3 font-semibold text-gray-800">161 Usernames</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-left font-medium text-gray-900">Delhi Cluster</td>
                                <td class="p-3 font-semibold">118</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 115</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 109</td>
                                <td class="p-3">118</td>
                                <td class="p-3 font-bold text-red-500">9</td>
                                <td class="p-3 font-semibold text-gray-800">118 Usernames</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-left font-medium text-gray-900">Kanpur Cluster</td>
                                <td class="p-3 font-semibold">86</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 80</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 79</td>
                                <td class="p-3">86</td>
                                <td class="p-3 font-bold text-red-500">7</td>
                                <td class="p-3 font-semibold text-gray-800">86 Usernames</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-left font-medium text-gray-900">Prayagraj Cluster</td>
                                <td class="p-3 font-semibold">67</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 65</td>
                                <td class="p-3 text-green-600"><i class="fa-solid fa-circle-check"></i> 62</td>
                                <td class="p-3">67</td>
                                <td class="p-3 font-bold text-red-500">5</td>
                                <td class="p-3 font-semibold text-gray-800">67 Usernames</td>
                            </tr>
                            <tr class="bg-gray-50 font-bold text-gray-900">
                                <td class="p-3 text-left">Total Balance</td>
                                <td class="p-3">428</td>
                                <td class="p-3 text-emerald-700">415</td>
                                <td class="p-3 text-emerald-700">400</td>
                                <td class="p-3">428</td>
                                <td class="p-3 text-rose-600">32 Due</td>
                                <td class="p-3 text-blue-900">428 Active Account</td>
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
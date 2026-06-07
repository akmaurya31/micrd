<?php 
$page_title = "Superadmin - Coordinator & District Allocation Analytics";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>
 
<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">

    <div class="flex items-center">
        <a href="coordinator-stats.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            <i class="fa-solid fa-chart-line text-orange-500 mr-1"></i> Allocation Statistics
        </a>
        <a href="coordinator-manage.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
            <i class="fa-solid fa-user-check mr-1"></i> Allot Districts & Projects
        </a>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="p-4 md:p-6 w-full block">
        <main class="dashboard-container space-y-6">
            
            <section class="bg-slate-50 border border-gray-200 p-4 rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-3 border-b border-gray-200 pb-2">
                    <div class="flex items-center gap-2 text-[#1e3e62] font-semibold text-sm">
                        <i class="fa-solid fa-sliders"></i> Coordinator & Territory Master Filters
                    </div>
                    <div class="flex gap-1.5 text-[11px]">
                        <button type="button" onclick="setDatePreset('today')" class="bg-white hover:bg-gray-100 text-gray-700 border border-gray-300 px-2.5 py-1 rounded transition shadow-xs font-medium">Today</button>
                        <button type="button" onclick="setDatePreset('yesterday')" class="bg-white hover:bg-gray-100 text-gray-700 border border-gray-300 px-2.5 py-1 rounded transition shadow-xs font-medium">Yesterday</button>
                        <button type="button" onclick="setDatePreset('7days')" class="bg-white hover:bg-gray-100 text-gray-700 border border-gray-300 px-2.5 py-1 rounded transition shadow-xs font-medium">Last 7 Days</button>
                        <button type="button" onclick="setDatePreset('month')" class="bg-white hover:bg-gray-100 text-gray-700 border border-gray-300 px-2.5 py-1 rounded transition shadow-xs font-medium">This Month</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-xs">
                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Allotted District</label>
                        <select id="districtFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Districts (UP)</option>
                            <option value="lucknow">Lucknow</option>
                            <option value="kanpur_nagar">Kanpur Nagar</option>
                            <option value="prayagraj">Prayagraj</option>
                            <option value="varanasi">Varanasi</option>
                            <option value="gorakhpur">Gorakhpur</option>
                            <option value="bareilly">Bareilly</option>
                            <option value="meerut">Meerut</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Team Coordinator</label>
                        <select id="coordinatorFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Active Coordinators</option>
                            <option value="coord_amit">Amit Kumar (Central Zone)</option>
                            <option value="coord_rahul">Rahul Singh (Eastern Zone)</option>
                            <option value="coord_priya">Priya Sharma (Western Zone)</option>
                            <option value="coord_vikas">Vikas Yadav (Bundelkhand Zone)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Project Scheme / Type</label>
                        <select id="projectFilter" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                            <option value="all">All Project Schemes</option>
                            <option value="ict_lab">ICT Lab Setup</option>
                            <option value="smart_class">Smart Classroom Proj</option>
                            <option value="infrastructure">School Infra Development</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">GeM Contract / Order Code</label>
                        <input type="text" id="gemCodeFilter" placeholder="e.g. GEM-2026-X98" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]" />
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Allotment From</label>
                        <input type="date" id="startDateInput" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]" />
                    </div>

                    <div>
                        <label class="block font-medium text-gray-600 mb-1">Allotment To</label>
                        <input type="date" id="endDateInput" class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]" />
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-3 pt-3 border-t border-gray-200/60">
                    <button type="button" onclick="resetMasterFilters()" class="px-4 py-1.5 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded text-xs transition">Reset</button>
                    <button type="button" onclick="applySuperadminAnalytics()" class="px-4 py-1.5 bg-[#1e3e62] hover:bg-[#152c46] text-white font-medium rounded text-xs transition"><i class="fa-solid fa-magnifying-glass mr-1"></i> Search & Filter</button>
                </div>
            </section>

            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gradient-to-r from-slate-700 to-slate-800 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-slate-600/40 p-3 rounded-lg text-2xl"><i class="fa-solid fa-map-location-dot"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricAllottedDistricts">45 / 75</strong>
                        <span class="text-xs text-slate-200 font-medium">Districts Covered</span>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-orange-500 to-amber-600 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-orange-400/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-user-tie"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricActiveCoordinators">24</strong>
                        <span class="text-xs text-orange-100 font-medium">On-Field Coordinators</span>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-600 to-cyan-700 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-blue-500/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricGemContracts">18 Live</strong>
                        <span class="text-xs text-blue-100 font-medium">GeM Orders Running</span>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-rose-600 to-red-700 text-white p-4 rounded-xl shadow-md flex items-center gap-4">
                    <div class="bg-rose-500/30 p-3 rounded-lg text-2xl"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <div>
                        <strong class="block text-xl font-bold" id="metricUnassignedDistricts">7 Districts</strong>
                        <span class="text-xs text-rose-100 font-medium">No Coordinator Mapped</span>
                    </div>
                </div>
            </section>

            <section class="bg-slate-50/50 p-4 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="text-sm font-semibold text-[#1e3e62] flex items-center gap-2">
                        <i class="fa-solid fa-table-cells-large"></i> Coordinator Zone Assignment & Project Matrix
                    </h2>
                    <span class="text-xs bg-orange-100 text-orange-800 px-2.5 py-1 rounded-full font-medium">Master Mapping View</span>
                </div>
                <div class="overflow-x-auto shadow-sm rounded-lg bg-white border border-gray-200">
                    <table class="w-full text-center border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-100 text-[#1e3e62] font-bold border-b border-gray-200">
                                <th class="p-3 text-left">Coordinator Name</th>
                                <th class="p-3 text-left">Assigned Districts (Zila)</th>
                                <th class="p-3">ICT Lab Projects</th>
                                <th class="p-3">Smart Class Projects</th>
                                <th class="p-3">Active GeM Codes Attached</th>
                                <th class="p-3 bg-orange-50 text-orange-900 font-bold">Total Assigned Sites</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 divide-y divide-gray-100">
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Amit Kumar</td>
                                <td class="p-3 text-left">Lucknow, Unnao, Rae Bareli</td>
                                <td class="p-3 font-medium">14 Sites</td>
                                <td class="p-3 font-medium">20 Sites</td>
                                <td class="p-3 text-blue-600 font-medium">GEM-2026-N01, GEM-2026-N02</td>
                                <td class="p-3 font-bold bg-orange-50/40 text-orange-950">34</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Rahul Singh</td>
                                <td class="p-3 text-left">Prayagraj, Varanasi, Mirzapur</td>
                                <td class="p-3 font-medium">25 Sites</td>
                                <td class="p-3 font-medium">18 Sites</td>
                                <td class="p-3 text-blue-600 font-medium">GEM-2026-E45</td>
                                <td class="p-3 font-bold bg-orange-50/40 text-orange-950">43</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Priya Sharma</td>
                                <td class="p-3 text-left">Meerut, Ghaziabad, Hapur</td>
                                <td class="p-3 font-medium">12 Sites</td>
                                <td class="p-3 font-medium">30 Sites</td>
                                <td class="p-3 text-blue-600 font-medium">GEM-2026-W12, GEM-2026-W19</td>
                                <td class="p-3 font-bold bg-orange-50/40 text-orange-950">42</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="p-3 text-left font-semibold text-gray-900">Vikas Yadav</td>
                                <td class="p-3 text-left">Jhansi, Lalitpur, Jalaun</td>
                                <td class="p-3 font-medium">8 Sites</td>
                                <td class="p-3 font-medium">12 Sites</td>
                                <td class="p-3 text-blue-600 font-medium">GEM-2026-B88</td>
                                <td class="p-3 font-bold bg-orange-50/40 text-orange-950">20</td>
                            </tr>
                            <tr class="bg-slate-100 font-black text-gray-900 border-t-2 border-gray-300">
                                <td class="p-3 text-left" colspan="2">Grand Master Total</td>
                                <td class="p-3">59 Labs</td>
                                <td class="p-3">80 Classes</td>
                                <td class="p-3 text-blue-900">6 Active GeM Contracts</td>
                                <td class="p-3 bg-orange-100 text-orange-900">139 Total Sites</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>
</div> 

<script>
function setDatePreset(preset) {
    const today = new Date().toISOString().split('T')[0];
    let start = today;
    let end = today;

    if (preset === 'yesterday') {
        const yesterday = new Date();
        yesterday.setDate(yesterday.getDate() - 1);
        start = yesterday.toISOString().split('T')[0];
        end = start;
    } else if (preset === '7days') {
        const sevenDaysAgo = new Date();
        sevenDaysAgo.setDate(sevenDaysAgo.getDate() - 7);
        start = sevenDaysAgo.toISOString().split('T')[0];
    } else if (preset === 'month') {
        const firstDay = new Date(new Date().getFullYear(), new Date().getMonth(), 1);
        const offset = firstDay.getTimezoneOffset();
        const adjustedFirstDay = new Date(firstDay.getTime() - (offset*60*1000));
        start = adjustedFirstDay.toISOString().split('T')[0];
    }

    document.getElementById('startDateInput').value = start;
    document.getElementById('endDateInput').value = end;
}

function resetMasterFilters() {
    document.getElementById('districtFilter').value = 'all';
    document.getElementById('coordinatorFilter').value = 'all';
    document.getElementById('projectFilter').value = 'all';
    document.getElementById('gemCodeFilter').value = '';
    document.getElementById('startDateInput').value = '';
    document.getElementById('endDateInput').value = '';
}

function applySuperadminAnalytics() {
    const filterData = {
        district: document.getElementById('districtFilter').value,
        coordinator: document.getElementById('coordinatorFilter').value,
        project_scheme: document.getElementById('projectFilter').value,
        gem_code: document.getElementById('gemCodeFilter').value,
        start_date: document.getElementById('startDateInput').value,
        end_date: document.getElementById('endDateInput').value
    };
    
    console.log("Superadmin Executing Search Queries: ", filterData);
    alert("Fetching data for selected District / Coordinator / GeM Code!");
}
</script>

<?php 
include('includes/footer.php'); 
?>
<div class="md:hidden fixed top-0 left-0 right-0 h-14 bg-white border-b border-gray-200 flex items-center px-4 z-30 justify-between">
    <button class="text-gray-700 text-xl" id="toggleSidebar">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="font-bold text-gray-800 tracking-wide text-sm">NBDIUP PORTAL</div>
    <div class="w-6"></div> </div>

<aside id="sidebarMenu" class="fixed top-0 bottom-0 left-0 w-64 bg-[#1e3e62] text-white transition-transform -translate-x-full md:translate-x-0 z-40 md:z-10 shadow-xl flex flex-col pt-14 md:pt-0">
    <div class="p-5 border-b border-slate-700/50 flex items-center gap-3">
        <i class="fa-solid fa-layer-group text-2xl text-orange-400"></i>
        <div>
            <h3 class="font-bold tracking-wide text-base">NBDIUP</h3>
            <p class="text-xs text-gray-300">Smart Class (2024-25)</p>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto p-3 text-sm">
        <ul class="space-y-1">
            <li class="rounded hover:bg-slate-700/40">
                <a href="#" class="flex items-center gap-3 px-3 py-2.5"><i class="fa-solid fa-circle-info w-5"></i> <span>INSTRUCTIONS</span></a>
            </li>
            <li class="rounded hover:bg-slate-700/40">
                <a href="dashboard.php" class="flex items-center gap-3 px-3 py-2.5"><i class="fa-solid fa-gauge w-5"></i> <span>DASHBOARD</span></a>
            </li>

            <li class="rounded hover:bg-slate-700/40">
                <a href="siteread.php" class="flex items-center gap-3 px-3 py-2.5"><i class="fa-solid fa-gauge w-5"></i> <span>Site Readiness</span></a>
            </li>

              <li class="rounded hover:bg-slate-700/40">
                <a href="electrification.php" class="flex items-center gap-3 px-3 py-2.5"><i class="fa-solid fa-gauge w-5"></i> <span>Electrification</span></a>
            </li>

                <li class="rounded hover:bg-slate-700/40">
                <a href="box.php" class="flex items-center gap-3 px-3 py-2.5"><i class="fa-solid fa-gauge w-5"></i> <span>Box Number</span></a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0);" class="dropdown-toggle flex items-center justify-between px-3 py-2.5 rounded hover:bg-slate-700/40 cursor-pointer">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-cubes w-5"></i> MASTERS</span>
                    <i class="fa-solid fa-chevron-down arrow text-xs transition-transform duration-200"></i>
                </a>
                <ul class="sidebar-submenu hidden pl-9 pr-3 py-1 space-y-1 bg-slate-900/20 rounded mt-1">
                    <li><a href="#" class="block py-1.5 text-gray-300 hover:text-white">User Master</a></li>
                    <li><a href="#" class="block py-1.5 text-gray-300 hover:text-white">School Master</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);" class="dropdown-toggle flex items-center justify-between px-3 py-2.5 rounded hover:bg-slate-700/40 cursor-pointer">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-chart-line w-5"></i> TRANSACTIONS</span>
                    <i class="fa-solid fa-chevron-down arrow text-xs transition-transform duration-200"></i>
                </a>
                <ul class="sidebar-submenu hidden pl-9 pr-3 py-1 space-y-1 bg-slate-900/20 rounded mt-1">
                    <li><a href="schedule-training.php" class="block py-1.5 text-gray-300 hover:text-white">Schedule Training</a></li>
                    <li><a href="#" class="block py-1.5 text-gray-300 hover:text-white">Installation Report</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
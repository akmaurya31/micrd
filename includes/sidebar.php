<div class="md:hidden fixed top-0 left-0 right-0 h-14 bg-white border-b border-gray-200 flex items-center px-4 z-30 justify-between">
    <button class="text-gray-700 text-xl" id="toggleSidebar">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="font-bold text-gray-800 tracking-wide text-sm">Project Execution</div>
    <div class="w-6"></div> </div>

<aside id="sidebarMenu" class="fixed top-0 bottom-0 left-0 w-64 bg-[#1e3e62] text-white transition-transform duration-300 -translate-x-full md:translate-x-0 z-40 md:z-10 shadow-xl flex flex-col pt-14 md:pt-0">
    <div class="p-5 border-b border-slate-700/50 flex items-center gap-3">
        <i class="fa-solid fa-layer-group text-2xl text-orange-400"></i>
        <div>
            <h3 class="font-bold tracking-wide text-base">Project Execution</h3>
            <p class="text-xs text-gray-300">Smart Class (2024-25)</p>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto p-3 text-sm">
    <ul class="space-y-1">
        
        <?php
        
        // Pre-checking session roles (safeguard)
        $user_role = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';
        
        // 1. COMMON MENU: Instructions (Sabhi Roles ko dikhega)
        ?>
        <li class="rounded hover:bg-slate-700/40">
            <a href="#" class="flex items-center gap-3 px-3 py-2.5">
                <i class="fa-solid fa-circle-info w-5"></i> <span>INSTRUCTIONS</span>
            </a>
        </li>

        <?php 
        // 2. DYNAMIC DASHBOARD LINK: Role ke hisab se sahi page par bhejega
        $dashboard_url = "login.php"; // Default fallback
        if ($user_role === 'super_admin' || $user_role === 'administrator') {
            $dashboard_url = "dashboard-admin.php";
        } elseif ($user_role === 'coordinator' || $user_role === 'logistics') {
            $dashboard_url = "dashboard-backoffice.php";
        } elseif (strpos($user_role, 'vendor') !== false) {
            $dashboard_url = "dashboard-vendor.php";
        }
        ?>
        <li class="rounded hover:bg-slate-700/40">
            <a href="<?php echo $dashboard_url; ?>" class="flex items-center gap-3 px-3 py-2.5">
                <i class="fa-solid fa-gauge w-5"></i> <span>DASHBOARD</span>
            </a>
        </li>

        <?php 
        // 3. STATS & PAGES: Admin aur Backoffice ke liye, Vendors ke liye restricted ya specific
        if ($user_role === 'super_admin' || $user_role === 'administrator' || $user_role === 'coordinator' || $user_role === 'logistics'): 
        ?>
            <li class="rounded hover:bg-slate-700/40">
                <a href="siteread-stats.php" class="flex items-center gap-3 px-3 py-2.5">
                    <i class="fa-solid fa-chart-simple w-5"></i> <span>Site Readiness</span>
                </a>
            </li>

            <li class="rounded hover:bg-slate-700/40">
                <a href="electrification.php" class="flex items-center gap-3 px-3 py-2.5">
                    <i class="fa-solid fa-bolt w-5"></i> <span>Electrification</span>
                </a>
            </li>

            <li class="rounded hover:bg-slate-700/40">
                <a href="box.php" class="flex items-center gap-3 px-3 py-2.5">
                    <i class="fa-solid fa-box w-5"></i> <span>Box Number</span>
                </a>
            </li>
        <?php elseif (strpos($user_role, 'vendor') !== false): ?>
            <li class="rounded hover:bg-slate-700/40">
                <a href="vendor-ins.php" class="flex items-center gap-3 px-3 py-2.5">
                    <i class="fa-solid fa-chart-simple w-5"></i> <span>Instalation Status</span>
                </a>
            </li>
        <?php endif; ?>


        <?php 
        // 4. MASTERS DROPDOWN: Sirf aur sirf Admin ke liye visible hoga
        if ($user_role === 'super_admin' || $user_role === 'administrator'): 
        ?>
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
        <?php endif; ?>


        <?php 
        // 5. TRANSACTIONS DROPDOWN: Role wise sub-menus toggle honge
        if ($user_role !== ''): // Ensure user logged in hai
        ?>
            <li class="nav-item">
                <a href="javascript:void(0);" class="dropdown-toggle flex items-center justify-between px-3 py-2.5 rounded hover:bg-slate-700/40 cursor-pointer">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-chart-line w-5"></i> TRANSACTIONS</span>
                    <i class="fa-solid fa-chevron-down arrow text-xs transition-transform duration-200"></i>
                </a>
                <ul class="sidebar-submenu hidden pl-9 pr-3 py-1 space-y-1 bg-slate-900/20 rounded mt-1">
                    
                    <?php // Schedule Training sirf Admin aur Backoffice dekh sakte hain
                    if ($user_role === 'super_admin' || $user_role === 'administrator' || $user_role === 'coordinator' || $user_role === 'logistics'): ?>
                        <li><a href="schedule-training.php" class="block py-1.5 text-gray-300 hover:text-white">Schedule Training</a></li>
                    <?php endif; ?>

                    <?php // Installation Report Admin aur Vendor dono dekh sakte hain (Backoffice ke liye skip kiya hai)
                    if ($user_role === 'super_admin' || $user_role === 'administrator' || strpos($user_role, 'vendor') !== false): ?>
                        <li><a href="#" class="block py-1.5 text-gray-300 hover:text-white">Installation Report</a></li>
                    <?php endif; ?>
                    
                </ul>
            </li>
        <?php endif; ?>

    </ul>
</nav>
</aside>
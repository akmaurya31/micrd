<aside id="sidebarMenu" class="fixed top-0 bottom-0 left-0 w-64 bg-[#1e3e62] text-white transition-transform duration-300 transform -translate-x-full z-40 shadow-xl flex flex-col pt-14 md:pt-14">
    <div class="p-5 border-b border-slate-700/50 flex items-center gap-3">
        <i class="fa-solid fa-layer-group text-2xl text-orange-400"></i>
        <div>
            <h3 class="font-bold tracking-wide text-base">Project Execution</h3>
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

 

<script>
 document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebarMenu");
    const mainContent = document.getElementById("mainContent");

    toggleBtn.addEventListener("click", function (e) {
        // Event ko rokne ke liye taaki koi doosra click conflict na kare
        e.stopPropagation(); 
        
        // 1. Sidebar ko On/Off (Slide In/Out) karein
        sidebar.classList.toggle("-translate-x-full");

        // 2. Desktop Mode (md screen) me Main Content ko shift ya reset karein
        if (window.innerWidth >= 768) {
            if (sidebar.classList.contains("-translate-x-full")) {
                // Agar sidebar OFF ho gaya hai, toh content ko poori screen do
                mainContent.style.paddingLeft = "0px";
            } else {
                // Agar sidebar ON hai, toh content ko 256px (w-64) right push karo
                mainContent.style.paddingLeft = "256px";
            }
        }
    });

    // Mobile me agar user sidebar ke bahar kahin bhi click kare, toh sidebar automatic OFF ho jaye
    document.addEventListener("click", function (e) {
        if (window.innerWidth < 768) {
            if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                sidebar.classList.add("-translate-x-full");
            }
        }
    });

    // Dropdown (Masters / Transactions) ko handle karne ke liye
    const dropdowns = document.querySelectorAll(".dropdown-toggle");
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener("click", function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            const arrow = this.querySelector(".arrow");

            if (submenu) submenu.classList.toggle("hidden");
            if (arrow) arrow.classList.toggle("rotate-180");
        });
    });
});
    </script>

    
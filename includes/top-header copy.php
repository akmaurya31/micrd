<div id="wrapper" class="flex flex-col min-h-screen transition-all duration-300 ease-in-out md:pl-64 sidebar-open">
    
    <header class="bg-white border-b border-gray-200 shadow-sm pt-14 md:pt-0 z-20">
        <div class="px-6 py-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <button class="text-gray-700 text-xl focus:outline-none p-2 rounded hover:bg-gray-100" id="toggleSidebar">
                    <i class="fa-solid fa-bars"></i>
                </button>
                
                <div id="clock" class="bg-amber-600 text-white p-2 rounded font-bold text-xs"></div>
                <div>
                    <h1 class="text-gray-800 font-bold text-sm md:text-base leading-tight">PROJECT EXECUTION - HELLO WORLD</h1>
                    <p class="text-xs text-orange-600 font-semibold">Coordinator - Manish </p>
                </div>
            </div>
        </div>
    </header>
    
    <main class="p-4 md:p-6 flex-1 bg-gray-50">
        
 <style>

    @media (min-width: 768px) {
  /* When sidebar is closed, remove the left padding so header/main expand */
  #wrapper:not(.sidebar-open) {
    padding-left: 0px;
  }
}
 </style>

    <style>
  @media (min-width: 768px) {
    /* When sidebar is closed, remove the left padding so header/main expand */
    #wrapper:not(.sidebar-open) {
      padding-left: 0px;
    }
  }
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggleSidebar");
    const wrapper = document.getElementById("wrapper");
    const sidebar = document.getElementById("sidebarMenu"); // Sahi ID yahan lagayi hai

    if (toggleBtn && wrapper && sidebar) {
        toggleBtn.addEventListener("click", () => {
            // 1. Wrapper ki class toggle karega (badi screen par padding handle karne ke liye)
            wrapper.classList.toggle("sidebar-open");
            
            // 2. Sidebar ko on/off (hide/show) karne ke liye classes toggle karega
            if (sidebar.classList.contains("-translate-x-full")) {
                // Sidebar kholne ke liye
                sidebar.classList.remove("-translate-x-full");
                sidebar.classList.add("translate-x-0");
            } else {
                // Sidebar band karne ke liye
                sidebar.classList.remove("translate-x-0");
                sidebar.classList.add("-translate-x-full");
            }
        });
    }

    // Live Clock Logic
    function updateClock() {
        const clockEl = document.getElementById('clock');
        if (!clockEl) return;
        const now = new Date();
        const options = {
            day: '2-digit', month: '2-digit', year: 'numeric',
            hour: '2-digit', minute: '2-digit', second: '2-digit'
        };
        clockEl.innerText = now.toLocaleString('en-IN', options);
    }
    updateClock();
    setInterval(updateClock, 1000);
});
</script>
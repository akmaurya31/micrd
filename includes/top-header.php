<div class="flex-1 md:pl-64 flex flex-col min-h-screen">
    <header class="bg-white border-b border-gray-200 shadow-sm pt-14 md:pt-0 z-20">
        
        <div class="px-6 py-3 flex flex-row items-center justify-between gap-3">
            
            <div class="flex items-center gap-3">
                <button class="text-gray-700 text-xl focus:outline-none p-2 rounded hover:bg-gray-100" id="toggleSidebar" type="button">
                    <i class="fa-solid fa-bars"></i> 
                </button>
                
                <div id="clock" class="bg-amber-600 text-white p-2 rounded font-bold text-xs"></div>
                
                <div>
                    <h1 class="text-gray-800 font-bold text-sm md:text-base leading-tight uppercase">
                        PROJECT EXECUTION - <?php echo isset($_SESSION['project']) ? str_replace('_', ' ', $_SESSION['project']) : 'HELLO WORLD'; ?>
                    </h1>
                    <p class="text-xs text-orange-600 font-semibold">
                        <?php echo isset($_SESSION['user_type']) ? ucfirst($_SESSION['user_type']) : 'Coordinator'; ?> - 
                        <?php echo isset($_SESSION['empname']) ? $_SESSION['empname'] : 'Manish'; ?>
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <a href="logout.php" class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium text-xs md:text-sm transition-colors shadow-sm">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>

        </div>
    </header>
    
    <main class="p-4 md:p-6 flex-1">

    <script>
function updateClock() {
    const now = new Date();

    const options = {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    };

    document.getElementById('clock').innerText =
        now.toLocaleString('en-IN', options);
}

updateClock();
setInterval(updateClock, 1000);
</script>
<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
?>

<style>
/* Desktop View (768px aur usse upar) */
@media (min-width: 768px) {
    /* Jab sidebar open ho tab left padding do */
    #wrapper.sidebar-open {
        padding-left: 16rem !important; /* w-64 ke barabar padding */
    }
    #wrapper:not(.sidebar-open) {
        padding-left: 0px !important;
    }
    /* Jab class 'sidebar-open' na ho, toh desktop par sidebar ko chhupao */
    #wrapper:not(.sidebar-open) #sidebarMenu {
        transform: translateX(-100%) !important;
    }
    #wrapper.sidebar-open #sidebarMenu {
        transform: translateX(0) !important;
    }
}

/* Mobile View (767px aur usse neeche) */
@media (max-width: 767px) {
    /* Mobile par default roop se closed rahega */
    #sidebarMenu {
        transform: translateX(-100%) !important;
    }
    /* Jab toggle click ho aur class add ho, tab dikhe */
    #wrapper.sidebar-open #sidebarMenu {
        transform: translateX(0) !important;
    }
}
</style>

<div id="wrapper" class="flex flex-col min-h-screen transition-all duration-300 ease-in-out sidebar-open">

    <?php include('includes/sidebar.php'); ?> 
    <?php include('includes/top-header.php'); ?> 

    <main class="p-4 md:p-6 flex-1 bg-gray-50">
        <h2 class="text-2xl font-bold">Training Schedule Content</h2>
        <p class="text-gray-600 mt-2">Agar abhi bhi nahi chal raha, toh niche diye gaye steps se inspect kijiye.</p>
    </main>

</div>

<script>
(function() {
    function initSidebar() {
        const toggleBtn = document.getElementById("toggleSidebar");
        const wrapper = document.getElementById("wrapper");
        const sidebar = document.getElementById("sidebarMenu");

        // Agar elements mil gaye hain tabhi click event lagao
        if (toggleBtn && wrapper && sidebar) {
            
            toggleBtn.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Sirf wrapper par class toggle karenge, baaki kaam CSS sambhal legi
                wrapper.classList.toggle("sidebar-open");
                
                console.log("Sidebar Toggled! Current classes:", wrapper.className);
            });

        } else {
            // Agar koi element missing hai toh console mein error dikhega
            console.error("Dhyan dein! Elements nahi mile:", {
                button: !!toggleBtn,
                wrapper: !!wrapper,
                sidebar: !!sidebar
            });
        }
    }

    // Isko check karne ke liye ki DOM fully loaded hai
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initSidebar);
    } else {
        initSidebar();
    }

    // Clock Logic
    function updateClock() {
        const clockEl = document.getElementById('clock');
        if (!clockEl) return;
        const now = new Date();
        clockEl.innerText = now.toLocaleString('en-IN', {
            day: '2-digit', month: '2-digit', year: 'numeric',
            hour: '2-digit', minute: '2-digit', second: '2-digit'
        });
    }
    setInterval(updateClock, 1000);
    updateClock();
})();
</script>

<?php include('includes/footer.php'); ?>
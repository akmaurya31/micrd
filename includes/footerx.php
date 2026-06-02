<!-- STYLES: Wrapper aur Sidebar transitions ke liye -->
<style>
@media (min-width: 768px) {
    /* Desktop par jab sidebar closed ho, tab padding zero karo */
    #wrapper:not(.sidebar-open) {
        padding-left: 0px !important;
    }
    /* Desktop par closed hone par sidebar ko chhupao */
    #wrapper:not(.sidebar-open) #sidebarMenu {
        transform: translateX(-100%) !important;
    }
}
@media (max-width: 767px) {
    /* Mobile par toggle hone par sidebar show karne ke liye */
    #wrapper.sidebar-open #sidebarMenu {
        transform: translateX(0) !important;
    }
}
</style>

<!-- JAVASCRIPT: Jo different files ke elements ko connect karega -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggleSidebar");
    const wrapper = document.getElementById("wrapper");
    const sidebar = document.getElementById("sidebarMenu");

    // Check karega ki saari files ke elements load ho chuke hain ya nahi
    if (toggleBtn && wrapper && sidebar) {
        toggleBtn.addEventListener("click", (e) => {
            e.preventDefault(); // Kisi bhi default form/link action ko rokne ke liye
            
            // 1. Wrapper toggle (For Desktop Padding)
            wrapper.classList.toggle("sidebar-open");
            
            // 2. Sidebar Translate Toggle (For Mobile & Desktop views)
            if (sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.remove("-translate-x-full");
                sidebar.classList.add("translate-x-0");
            } else {
                sidebar.classList.remove("translate-x-0");
                sidebar.classList.add("-translate-x-full");
            }
        });
    } else {
        console.error("Sidebar, Button ya Wrapper mein se koi ek element nahi mila!");
    }

    // Live Clock Code
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
</body>
</html>
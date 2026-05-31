</main>
    
    <footer class="bg-white border-t border-gray-200 text-center py-3 text-xs text-gray-500 mt-auto">
        Copyright © Department of Basic Education, Government of Uttar Pradesh
    </footer>
</div> <script>
    // Mobile Navigation Sidebar Toggle Drawer
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebarMenu = document.getElementById('sidebarMenu');

    if(toggleSidebar && sidebarMenu) {
        toggleSidebar.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebarMenu.classList.toggle('-translate-x-full');
        });
        document.addEventListener('click', (e) => {
            if (!sidebarMenu.contains(e.target) && e.target !== toggleSidebar) {
                sidebarMenu.classList.add('-translate-x-full');
            }
        });
    }

    // Expanding sub-menus when clicking categories
    document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            e.preventDefault();
            const parent = this.parentElement;
            const submenu = parent.querySelector('.sidebar-submenu');
            
            // Toggle Visibility
            if(submenu) {
                submenu.classList.toggle('hidden');
                parent.classList.toggle('open');
            }
        });
    });
</script>
</body>
</html>
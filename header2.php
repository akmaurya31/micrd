<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBDIUP Responsive Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <header class="main-header">
        
        <div class="header-left">
            <button class="mobile-menu-btn" id="menuToggleBtn">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="gov-logo">
                <img src="https://via.placeholder.com/70" alt="UP Govt Logo">
            </div>
            <div class="portal-titles">
                <div class="layer-icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="titles-text">
                    <h1>NIPUN BHARAT DIGITAL INITIATIVE UNIFIED PORTAL (NBDIUP)</h1>
                    <p class="sub-title">Smart Class -7409 Room (2024-25)</p>
                </div>
            </div>
        </div>

        <div class="header-right">
            <div class="notification-badge">
                <i class="fa-solid fa-bell"></i>
                <span class="badge-count">2</span>
            </div>
            
            <div class="user-profile">
                <div class="user-details">
                    <span class="user-name">MIRC Limited</span>
                    <span class="user-role">(SYSTEM INTEGRATOR (SI))</span>
                </div>
                <div class="user-avatar">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar" id="navbarMenu">
        <div class="sidebar-mobile-header">
            <span>NBDIUP MENU</span>
            <button class="close-sidebar-btn" id="menuCloseBtn"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <ul class="menu-list">
            <li class="menu-item instructions">
                <a href="#"><i class="fa-solid fa-circle-info"></i> INSTRUCTIONS</a>
            </li>
            
            <li class="menu-item dashboard">
                <a href="#"><i class="fa-solid fa-gauge"></i> DASHBOARD</a>
            </li>
            
            <li class="menu-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle"><i class="fa-solid fa-cubes"></i> MASTERS <i class="fa-solid fa-caret-down arrow"></i></a>
                <ul class="submenu">
                    <li><a href="#">User Master</a></li>
                    <li><a href="#">School Master</a></li>
                    <li><a href="#">Device Master</a></li>
                </ul>
            </li>
            
            <li class="menu-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle"><i class="fa-solid fa-chart-line"></i> TRANSACTIONS <i class="fa-solid fa-caret-down arrow"></i></a>
                <ul class="submenu">
                    <li><a href="#">Stock Entry</a></li>
                    <li><a href="#">Installation Report</a></li>
                    <li><a href="#">Verification</a></li>
                </ul>
            </li>
            
            <li class="menu-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle"><i class="fa-solid fa-file-lines"></i> REPORT <i class="fa-solid fa-caret-down arrow"></i></a>
                <ul class="submenu">
                    <li><a href="#">Daily Progress Report</a></li>
                    <li><a href="#">Summary Report</a></li>
                    <li><a href="#">Pending Installation</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- <main style="padding: 20px;">
        <h2>Dashboard Content Area</h2>
        <p>आपका बाकी का पेज डेटा यहाँ लोड होगा...</p>
    </main> -->

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <script>
        const menuToggleBtn = document.getElementById('menuToggleBtn');
        const menuCloseBtn = document.getElementById('menuCloseBtn');
        const navbarMenu = document.getElementById('navbarMenu');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        // Sidebar Open (Burger Button)
        menuToggleBtn.addEventListener('click', () => {
            navbarMenu.classList.add('active');
            sidebarOverlay.classList.add('active');
        });

        // Sidebar Close (X Button or Clicking outside)
        const closeSidebar = () => {
            navbarMenu.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        };
        menuCloseBtn.addEventListener('click', closeSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);

        // Mobile Dropdown Toggle Click Event
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                if(window.innerWidth <= 768) {
                    e.preventDefault();
                    this.parentElement.classList.toggle('open');
                }
            });
        });
    </script>
</body>
</html>
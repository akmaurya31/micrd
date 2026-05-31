<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
    <div class="flex items-center">
        <div class="bg-white px-6 py-3 font-semibold text-gray-800 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm">
            Schedule Equipment Operation Training
        </div>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>

    <div class="p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div class="text-sm font-medium">
                <span class="text-orange-500 hover:underline cursor-pointer">Dashboard</span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-gray-600">Schedule Equipment Operation Training</span>
            </div>
            <button id="openDrawerBtn" class="bg-[#0056b3] hover:bg-[#004085] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition cursor-pointer">
                <i class="fa-solid fa-plus text-xs"></i> Schedule
            </button>
        </div>

        <p class="text-gray-600"> <div class="max-w-[98%] mx-auto bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
        
        <div class="flex items-center">
            <div class="bg-white px-6 py-3 font-semibold text-gray-800 border-t-4 border-orange-500 rounded-t-lg shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] text-sm z-10">
                Schedule Equipment Operation Training
            </div>
            <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
        </div>

        <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div class="text-sm font-medium">
                    <span class="text-orange-500 hover:underline cursor-pointer">Dashboard</span>
                    <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                    <span class="text-orange-500 hover:underline cursor-pointer">Transactions</span>
                    <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                    <span class="text-gray-600">Schedule Equipment Operation Training</span>
                </div>
                
                <div class="flex items-center gap-2">
                    <button class="bg-[#2c5282] hover:bg-[#2a4365] text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition shadow">
                        <i class="fa-solid fa-cloud-arrow-down"></i>
                        <i class="fa-solid fa-caret-down text-[10px]"></i>
                    </button>
                    <button id="openDrawerBtn" class="bg-[#0056b3] hover:bg-[#004085] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
                        <i class="fa-solid fa-plus text-xs"></i> Schedule
                    </button>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-4 text-sm text-gray-700">
                <div class="flex items-center gap-1.5">
                    Show 
                    <select id="entriesPerPage" class="border border-gray-300 rounded px-2 py-1 bg-white focus:outline-none focus:border-blue-500">
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                    </select> 
                    entries
                </div>
                <div class="flex items-center gap-1.5">
                    Search: 
                    <input type="search" id="searchInput" class="border border-gray-300 rounded px-2 py-1 w-48 md:w-64 focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <div class="overflow-x-auto border border-gray-200 rounded">
                <table class="w-full text-left border-collapse text-[13px]" id="myTable">
                    <thead>
                        <tr class="bg-[#eae2d8] text-gray-800 font-semibold border-b border-gray-300 select-none">
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[60px]" data-column="0">
                                <div class="flex items-center justify-center gap-1">S.No. <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 cursor-pointer min-w-[200px]" data-column="1">
                                <div class="flex items-center justify-center gap-1">School Name <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[120px]" data-column="2">
                                <div class="flex items-center justify-center gap-1">District Name <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[110px]" data-column="3">
                                <div class="flex items-center justify-center gap-1">Class Rooms <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[120px]" data-column="4">
                                <div class="flex items-center justify-center gap-1">Training Scheduled On <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[110px]" data-column="5">
                                <div class="flex items-center justify-center gap-1">File Relevent <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[110px]" data-column="6">
                                <div class="flex items-center justify-center gap-1">Training Date <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[160px]" data-column="7">
                                <div class="flex items-center justify-center gap-1">Comment <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[180px]" data-column="8">
                                <div class="flex items-center justify-center gap-1">Training Venue <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[110px]" data-column="9">
                                <div class="flex items-center justify-center gap-1">Approved UPLC <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center cursor-pointer min-w-[110px]" data-column="10">
                                <div class="flex items-center justify-center gap-1">Remark UPLC <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 border-r border-gray-300 text-center min-w-[110px]">Uploaded Photos</th>
                            <th class="p-3 border-r border-gray-300 text-center min-w-[100px]" data-column="12">
                                <div class="flex items-center justify-center gap-1">Uploaded By <i class="fa-solid fa-arrows-up-down text-[10px] text-gray-400"></i></div>
                            </th>
                            <th class="p-3 text-center min-w-[150px] text-[#b45309]">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="text-gray-700 divide-y divide-gray-200">
                        </tbody>
                </table>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-4 text-sm text-gray-600">
                <div id="tableInfo">Showing 0 to 0 of 0 entries</div>
                <div class="flex items-center gap-1" id="paginationControls">
                    </div>
            </div>
            
        </div>
    </div></p>
    </div>
</div>

<div id="drawerOverlay" class="fixed inset-0 bg-black/40 hidden z-40 transition-opacity duration-300 opacity-0"></div>
<div id="sideDrawer" class="fixed top-0 right-0 h-full w-full max-w-[550px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <div class="flex items-center justify-between px-6 py-4 bg-slate-50 border-b border-gray-200">
        <h2 class="text-[#1e3e62] font-semibold text-lg">Create Grievance Form</h2>
        <button id="closeDrawerBtn" class="text-gray-400 text-xl"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="p-6">फॉर्म इनपुट्स...</div>
</div>




<script>
    // आपके इस विशिष्ट पेज की स्लाइडिंग ड्रावर स्क्रिप्ट यहाँ आ जाएगी
    const openDrawerBtn = document.getElementById('openDrawerBtn');
    const closeDrawerBtn = document.getElementById('closeDrawerBtn');
    const sideDrawer = document.getElementById('sideDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');

    if(openDrawerBtn) {
        openDrawerBtn.addEventListener('click', () => {
            sideDrawer.classList.remove('translate-x-full');
            drawerOverlay.classList.remove('hidden');
            setTimeout(() => drawerOverlay.classList.add('opacity-100'), 10);
        });
    }
    if(closeDrawerBtn) {
        closeDrawerBtn.addEventListener('click', () => {
            sideDrawer.classList.add('translate-x-full');
            drawerOverlay.classList.remove('opacity-100');
            setTimeout(() => drawerOverlay.classList.add('hidden'), 300);
        });
    }
</script>

<?php 
// फुटर इन्क्लूड करें जिसमें ग्लोबल जावास्क्रिप्ट लोड होगी
include('includes/footer.php'); 
?>
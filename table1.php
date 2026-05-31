<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Equipment Operation Training</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fcf8f5;
        }
        th.sort-asc i::before { content: "\f0de"; color: #1a202c; }
        th.sort-desc i::before { content: "\f0dd"; color: #1a202c; }
    </style>
</head>
<body class="p-6 relative overflow-x-hidden">

    <div class="max-w-[98%] mx-auto bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
        
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
                            <th class="p-3 border-r border-gray-300 text-center min-w-[110px]">Uploaded Photos</th>
                            <th class="p-3 border-r border-gray-300 text-center min-w-[100px]">Uploaded By</th>
                            <th class="p-3 text-center min-w-[150px] text-[#b45309]">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="text-gray-700 divide-y divide-gray-200">
                        </tbody>
                </table>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-4 text-sm text-gray-600">
                <div id="tableInfo">Showing 0 to 0 of 0 entries</div>
                <div class="flex items-center gap-1" id="paginationControls"></div>
            </div>
        </div>
    </div>


    <div id="drawerOverlay" class="fixed inset-0 bg-black/40 hidden z-40 transition-opacity duration-300 opacity-0"></div>


    <div id="sideDrawer" class="fixed top-0 right-0 h-full w-full max-w-[550px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
        
        <div class="flex items-center justify-between px-6 py-4 bg-slate-50 border-b border-gray-200">
            <h2 class="text-[#1e3e62] font-semibold text-lg">Create Grievance</h2>
            <button id="closeDrawerBtn" class="text-gray-400 hover:text-gray-600 text-xl font-medium focus:outline-none cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto p-6 space-y-4 text-sm text-gray-700">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium mb-1">Select District <span class="text-red-500">*</span></label>
                    <select class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400">
                        <option>--Select--</option>
                    </select>
                </div>
                <div>
                    <label class="block font-medium mb-1">Select School <span class="text-red-500">*</span></label>
                    <select class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400">
                        <option>--Select--</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium mb-1">Class Rooms <span class="text-red-500">*</span></label>
                    <select class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400">
                        <option>--Select--</option>
                    </select>
                </div>
                <div>
                    <label class="block font-medium mb-1">Select Equipment <span class="text-red-500">*</span></label>
                    <select class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400">
                        <option>--Select--</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium mb-1">Equipment Serial No. <span class="text-red-500">*</span></label>
                    <input type="text" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400">
                </div>
                <div>
                    <label class="block font-medium mb-1">Alternate Mobile No.</label>
                    <input type="text" class="w-full border border-gray-200 rounded px-3 py-2 focus:outline-none focus:border-blue-400">
                </div>
            </div>

            <div>
                <label class="block font-medium mb-1">Grievance <span class="text-red-500">*</span></label>
                <textarea rows="3" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400 resize-none"></textarea>
            </div>

            <div>
                <label class="block font-medium mb-1">Upload Relevant File</label>
                <div class="flex items-center border border-blue-100 bg-[#f4f9fd] rounded overflow-hidden max-w-md">
                    <label class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 text-xs font-medium cursor-pointer border-r border-gray-300 whitespace-nowrap">
                        Choose File
                        <input type="file" class="hidden">
                    </label>
                    <span class="px-3 text-gray-400 text-xs truncate">No file chosen</span>
                </div>
                <p class="text-[11px] text-red-500 mt-1">Format:PDF | Max Size:2 MB</p>
            </div>

            <div class="pt-2">
                <a href="#" class="text-red-700 font-semibold underline text-xs">Create Grievance Reply</a>
            </div>

            <div>
                <label class="block font-medium mb-1">Grievance Reply<span class="text-red-500">*</span></label>
                <textarea rows="3" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400 resize-none"></textarea>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-[#004e92] hover:bg-[#00396b] text-white font-medium px-6 py-2 rounded text-xs tracking-wide shadow transition-all cursor-pointer">
                    Submit
                </button>
            </div>
        </div>
    </div>


    <script>
        // डमी डेटा लिस्ट
        const tableData = [
            { id: 1, school: "COMPOSIT SCHOOL BELWA HASANPUR\n(9732202502)", district: "AMETHI", by: "SI" },
            { id: 2, school: "COMPOSIT SCHOOL PURE LANGDA\n(9732201505)", district: "AMETHI", by: "SI" }
        ];

        let filteredData = [...tableData];
        let currentPage = 1;
        let entriesPerPage = 10;

        const tableBody = document.getElementById('tableBody');

        function renderTable() {
            tableBody.innerHTML = "";
            filteredData.forEach(row => {
                let tr = document.createElement('tr');
                tr.className = "hover:bg-gray-50 transition";
                tr.innerHTML = `
                    <td class="p-3 border-r border-gray-200 text-center">${row.id}</td>
                    <td class="p-3 border-r border-gray-200 text-center leading-relaxed whitespace-pre-line">${row.school}</td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.district}</td>
                    <td class="p-3 border-r border-gray-200 text-center">
                        <button class="bg-[#00bcd4] text-white p-1.5 rounded"><i class="fa-solid fa-eye text-xs px-1"></i></button>
                    </td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.by}</td>
                    <td class="p-3 text-center text-red-500 font-medium hover:underline cursor-pointer">Upload</td>
                `;
                tableBody.appendChild(tr);
            });
            document.getElementById('tableInfo').innerText = `Showing 1 to ${filteredData.length} of ${filteredData.length} entries`;
        }

        // --- DRAWER OPEN/CLOSE INTERACTION CODE ---
        const openDrawerBtn = document.getElementById('openDrawerBtn');
        const closeDrawerBtn = document.getElementById('closeDrawerBtn');
        const sideDrawer = document.getElementById('sideDrawer');
        const drawerOverlay = document.getElementById('drawerOverlay');

        function openDrawer() {
            sideDrawer.classList.remove('translate-x-full');
            drawerOverlay.classList.remove('hidden');
            setTimeout(() => drawerOverlay.classList.add('opacity-100'), 10);
            document.body.classList.add('overflow-hidden'); // पीछे का पेज स्क्रॉल न हो
        }

        function closeDrawer() {
            sideDrawer.classList.add('translate-x-full');
            drawerOverlay.classList.remove('opacity-100');
            setTimeout(() => drawerOverlay.classList.add('hidden'), 300);
            document.body.classList.remove('overflow-hidden');
        }

        // इवेंट लिस्टनर्स जोड़ना
        openDrawerBtn.addEventListener('click', openDrawer);
        closeDrawerBtn.addEventListener('click', closeDrawer);
        drawerOverlay.addEventListener('click', closeDrawer); // बाहर ब्लैक एरिया पर क्लिक करने से बंद होगा

        // इनिशियल लोड
        renderTable();
    </script>
</body>
</html>
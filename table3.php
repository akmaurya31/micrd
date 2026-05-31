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
<body class="p-6">

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
        // डमी डेटा लिस्ट (testing के लिए मैंने 5 रोज़ बना दी हैं ताकि पेजिनेशन दिखे)
        const tableData = [
            { id: 1, school: "COMPOSIT SCHOOL BELWA HASANPUR\n(9732202502)", district: "AMETHI", classroom: "Smart Classroom - 1", scheduled: "16/04/2026", file: "NA", date: "10/02/2026", comment: "OK", venue: "DIET VIVEKNAGAR NEAR RAILWAY STATION SULTANPUR , UTTARPRADESH", approved: "NA", remark: "NA", by: "SI" },
            { id: 2, school: "COMPOSIT SCHOOL PURE LANGDA\n(9732201505)", district: "AMETHI", classroom: "Smart Classroom - 1", scheduled: "16/04/2026", file: "NA", date: "10/02/2026", comment: "OK", venue: "DIET VIVEKNAGAR NEAR RAILWAY STATION SULTANPUR", approved: "NA", remark: "NA", by: "SI" },
            { id: 3, school: "GOVT JUNIOR HIGH SCHOOL\n(9732201999)", district: "LUCKNOW", classroom: "Smart Classroom - 2", scheduled: "18/04/2026", file: "NA", date: "12/02/2026", comment: "GOOD", venue: "DIET LUCKNOW CAMPUS", approved: "YES", remark: "APPROVED", by: "MI" },
            { id: 4, school: "PRIMARY SCHOOL RAMPUR\n(9732203444)", district: "KANPUR", classroom: "Smart Classroom - 1", scheduled: "20/04/2026", file: "NA", date: "15/02/2026", comment: "OK", venue: "DIET KANPUR NEAR STATION", approved: "NA", remark: "NA", by: "SI" },
            { id: 5, school: "COMPOSIT SCHOOL GYANPUR\n(9732205555)", district: "VARANASI", classroom: "Smart Classroom - 3", scheduled: "22/04/2026", file: "NA", date: "18/02/2026", comment: "EXCELLENT", venue: "DIET VARANASI", approved: "YES", remark: "DONE", by: "AI" }
        ];

        let filteredData = [...tableData];
        let currentPage = 1;
        let entriesPerPage = parseInt(document.getElementById('entriesPerPage').value);
        let currentSort = { column: null, direction: 'asc' };

        // एलिमेंट्स को सेलेक्ट करना
        const tableBody = document.getElementById('tableBody');
        const searchInput = document.getElementById('searchInput');
        const entriesSelect = document.getElementById('entriesPerPage');
        const tableInfo = document.getElementById('tableInfo');
        const paginationControls = document.getElementById('paginationControls');

        // रेंडर टेबल फंक्शन
        function renderTable() {
            tableBody.innerHTML = "";
            
            // पेजिनेशन कैलकुलेशन
            let start = (currentPage - 1) * entriesPerPage;
            let end = start + entriesPerPage;
            let paginatedItems = filteredData.slice(start, end);

            if(paginatedItems.length === 0) {
                tableBody.innerHTML = `<tr><td colspan="14" class="p-4 text-center text-gray-500">No matching records found</td></tr>`;
                updateFooter(0, 0, 0);
                return;
            }

            paginatedItems.forEach(row => {
                let tr = document.createElement('tr');
                tr.className = "hover:bg-gray-50 transition";
                tr.innerHTML = `
                    <td class="p-3 border-r border-gray-200 text-center">${row.id}</td>
                    <td class="p-3 border-r border-gray-200 text-center leading-relaxed whitespace-pre-line">${row.school}</td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.district}</td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.classroom}</td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.scheduled}</td>
                    <td class="p-3 border-r border-gray-200 text-center text-gray-500">${row.file}</td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.date}</td>
                    <td class="p-3 border-r border-gray-200 text-center font-medium">${row.comment}</td>
                    <td class="p-3 border-r border-gray-200 text-center text-xs leading-normal">${row.venue}</td>
                    <td class="p-3 border-r border-gray-200 text-center text-gray-500">${row.approved}</td>
                    <td class="p-3 border-r border-gray-200 text-center text-gray-500">${row.remark}</td>
                    <td class="p-3 border-r border-gray-200 text-center">
                        <button class="bg-[#00bcd4] hover:bg-[#00acc1] text-white p-1.5 rounded transition shadow-sm"><i class="fa-solid fa-eye text-xs px-1"></i></button>
                    </td>
                    <td class="p-3 border-r border-gray-200 text-center">${row.by}</td>
                    <td class="p-3 text-center text-red-500 font-medium hover:underline cursor-pointer">Upload</td>
                `;
                tableBody.appendChild(tr);
            });

            updateFooter(start + 1, Math.min(end, filteredData.length), filteredData.length);
            renderPagination();
        }

        // फुटर अपडेट (Showing X to Y of Z entries)
        function updateFooter(start, end, total) {
            tableInfo.innerText = `Showing ${start} to ${end} of ${total} entries`;
        }

        // पेजिनेशन बटन जनरेट करना
        function renderPagination() {
            paginationControls.innerHTML = "";
            let totalPages = Math.ceil(filteredData.length / entriesPerPage);
            if(totalPages <= 1) return;

            // Previous Button
            let prevBtn = document.createElement('button');
            prevBtn.className = `px-3 py-1 border border-gray-300 rounded text-xs transition ${currentPage === 1 ? 'opacity-50 cursor-not-allowed bg-gray-100' : 'hover:bg-gray-100 bg-white'}`;
            prevBtn.innerText = "Previous";
            prevBtn.disabled = currentPage === 1;
            prevBtn.onclick = () => { currentPage--; renderTable(); };
            paginationControls.appendChild(prevBtn);

            // Page Numbers
            for(let i=1; i<=totalPages; i++) {
                let pageBtn = document.createElement('button');
                pageBtn.className = `px-3 py-1 border text-xs transition rounded ${currentPage === i ? 'bg-[#0056b3] text-white border-[#0056b3]' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-300'}`;
                pageBtn.innerText = i;
                pageBtn.onclick = () => { currentPage = i; renderTable(); };
                paginationControls.appendChild(pageBtn);
            }

            // Next Button
            let nextBtn = document.createElement('button');
            nextBtn.className = `px-3 py-1 border border-gray-300 rounded text-xs transition ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed bg-gray-100' : 'hover:bg-gray-100 bg-white'}`;
            nextBtn.innerText = "Next";
            nextBtn.disabled = currentPage === totalPages;
            nextBtn.onclick = () => { currentPage++; renderTable(); };
            paginationControls.appendChild(nextBtn);
        }

        // 1. लाइव सर्च फंक्शनैलिटी
        searchInput.addEventListener('input', (e) => {
            let term = e.target.value.toLowerCase();
            filteredData = tableData.filter(item => 
                item.school.toLowerCase().includes(term) ||
                item.district.toLowerCase().includes(term) ||
                item.venue.toLowerCase().includes(term) ||
                item.comment.toLowerCase().includes(term)
            );
            currentPage = 1; 
            renderTable();
        });

        // 2. शो एंट्रीज ड्रॉपडाउन फंक्शनैलिटी
        entriesSelect.addEventListener('change', (e) => {
            entriesPerPage = parseInt(e.target.value);
            currentPage = 1;
            renderTable();
        });

        // 3. कॉलम सॉर्टिंग फंक्शनैलिटी
        document.querySelectorAll('th[data-column]').forEach(th => {
            th.addEventListener('click', () => {
                let colIndex = th.getAttribute('data-column');
                let keys = ['id', 'school', 'district', 'classroom', 'scheduled', 'file', 'date', 'comment', 'venue', 'approved', 'remark', '', 'by'];
                let key = keys[colIndex];
                
                if(!key) return;

                // डायरेक्शन सेट करना
                if (currentSort.column === key) {
                    currentSort.direction = currentSort.direction === 'asc' ? 'desc' : 'asc';
                } else {
                    currentSort.column = key;
                    currentSort.direction = 'asc';
                }

                // CSS क्लास हैंडल करना आइकॉन बदलने के लिए
                document.querySelectorAll('th').forEach(h => h.classList.remove('sort-asc', 'sort-desc'));
                th.classList.add(currentSort.direction === 'asc' ? 'sort-asc' : 'sort-desc');

                // सॉर्ट लॉजिक
                filteredData.sort((a, b) => {
                    let valA = a[key].toString().toLowerCase();
                    let valB = b[key].toString().toLowerCase();
                    
                    if(!isNaN(a[key]) && !isNaN(b[key])) { // अगर नंबर है तो
                        return currentSort.direction === 'asc' ? a[key] - b[key] : b[key] - a[key];
                    }
                    
                    return currentSort.direction === 'asc' ? valA.localeCompare(valB) : valB.localeCompare(valA);
                });

                renderTable();
            });
        });

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


        // इनिशियल लोड पर रेंडर करें
        renderTable();
    </script>
</body>
</html>
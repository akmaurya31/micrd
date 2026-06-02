<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<!-- ================= MAIN CORE CONTENT CARD ================= -->
<!-- यहाँ overflow-visible किया है ताकि अंदर की टेबल स्क्रॉल हो सके -->
<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">
    
    <!-- Tab Name Header -->
    <div class="flex items-center">
        <div class="bg-white px-6 py-3 font-semibold text-gray-800 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm">
            Schedule Equipment Operation Training
        </div>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>

    <div class="p-4 md:p-6 w-full block">
        <!-- Breadcrumbs & Control Top Buttons -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div class="text-sm font-medium">
                <span class="text-orange-500 hover:underline cursor-pointer">Dashboard</span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-orange-500 hover:underline cursor-pointer">Transactions</span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-gray-600">Schedule Electrification Operation Training</span>
            </div>
            
            <div class="flex items-center gap-2 self-end md:self-auto">
                <button class="bg-[#2c5282] hover:bg-[#2a4365] text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition shadow cursor-pointer">
                    <i class="fa-solid fa-cloud-arrow-down"></i>
                    <i class="fa-solid fa-caret-down text-[10px]"></i>
                </button>
                <button id="openDrawerBtn" class="bg-[#0056b3] hover:bg-[#004085] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i> Schedule
                </button>
            </div>
        </div>

        <!-- Table Filters Controls -->
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

        <!-- FIXED RESPONSIVE WRAPPER (w-0 min-w-full ज़िद्दी स्क्रॉल को एक्टिव करता है) -->
        <div class="w-0 min-w-full overflow-x-auto border border-gray-200 rounded shadow-inner block">
            <table class="min-w-[1500px] w-full text-left border-collapse text-[13px]" id="myTable" style="table-layout: fixed;">
                <thead>
                    <tr class="bg-[#eae2d8] text-gray-800 font-semibold border-b border-gray-300 select-none">
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 60px;" data-column="0">S.No.</th>
                        <th class="p-3 border-r border-gray-300 cursor-pointer" style="width: 250px;" data-column="1">School Name</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 120px;" data-column="2">District Name</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 140px;" data-column="3">Class Rooms</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 150px;" data-column="4">Training Scheduled On</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 110px;" data-column="5">File Relevant</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 110px;" data-column="6">Training Date</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 120px;" data-column="7">Comment</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 260px;" data-column="8">Training Venue</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 110px;" data-column="9">Approved UPLC</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 110px;" data-column="10">Remark UPLC</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width: 120px;">Uploaded Photos</th>
                        <th class="p-3 border-r border-gray-300 text-center cursor-pointer" style="width: 110px;" data-column="12">Uploaded By</th>
                        <th class="p-3 text-center text-[#b45309]" style="width: 90px;">Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody" class="text-gray-700 divide-y divide-gray-200 bg-white">
                    <!-- JS Rows Load Here -->
                </tbody>
            </table>
        </div>

        <!-- Table Footer Pagination Display -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-4 text-sm text-gray-600">
            <div id="tableInfo">Showing 0 to 0 of 0 entries</div>
            <div class="flex items-center gap-1" id="paginationControls"></div>
        </div>
    </div>
</div>

<!-- ================= BACKGROUND DARK OVERLAY ================= -->
<div id="drawerOverlay" class="fixed inset-0 bg-black/40 hidden z-40 transition-opacity duration-300 opacity-0"></div>

<div id="sideDrawer" class="fixed top-0 right-0 h-full w-full max-w-[550px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <div class="flex items-center justify-between px-6 py-4 bg-slate-50 border-b border-gray-200">
        <h2 class="text-[#1e3e62] font-semibold text-lg">Box Number & Inventory Tracking</h2>
        <button id="closeDrawerBtn" class="text-gray-400 hover:text-gray-600 text-xl font-medium focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
    <form id="boxForm" enctype="multipart/form-data" class="flex-1 overflow-y-auto p-6 space-y-4 text-sm text-gray-700">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">Search UDISE CODE <span class="text-red-500">*</span></label>
                <input type="text" id="udiseCode" name="udise_code" required class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter UDISE Code">
            </div>
            <div>
                <label class="block font-medium mb-1">School Name</label>
                <div id="schoolNameLabel" class="w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-500 min-h-[38px] flex items-center">
                    -- Enter UDISE Code --
                </div>
                <input type="hidden" id="schoolNameHidden" name="school_name">
            </div>
        </div>

        <hr class="border-gray-100">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">IFP Box Number <span class="text-red-500">*</span></label>
                <input type="text" id="ifpBoxNo" name="ifp_box_no" required class="box-input w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400" data-type="IFP" placeholder="e.g. B-101">
            </div>
            <div>
                <label class="block font-medium mb-1 text-gray-500">IFP BoxCode / ID</label>
                <input type="text" id="ifpBoxCode" name="ifp_box_code" readonly class="w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-600 font-mono focus:outline-none" placeholder="Auto fetched...">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">UPS Box Number <span class="text-red-500">*</span></label>
                <input type="text" id="upsBoxNo" name="ups_box_no" required class="box-input w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400" data-type="UPS" placeholder="e.g. U-201">
            </div>
            <div>
                <label class="block font-medium mb-1 text-gray-500">UPS BoxCode / ID</label>
                <input type="text" id="upsBoxCode" name="ups_box_code" readonly class="w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-600 font-mono focus:outline-none" placeholder="Auto fetched...">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">Accessories Box Number <span class="text-red-500">*</span></label>
                <input type="text" id="accBoxNo" name="accessories_box_no" required class="box-input w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400" data-type="ACCESSORIES" placeholder="e.g. A-301">
            </div>
            <div>
                <label class="block font-medium mb-1 text-gray-500">Accessories BoxCode / ID</label>
                <input type="text" id="accBoxCode" name="accessories_box_code" readonly class="w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-600 font-mono focus:outline-none" placeholder="Auto fetched...">
            </div>
        </div>

        <hr class="border-gray-100">

        <div>
            <label class="block font-medium mb-1">Upload Relevant File</label>
            <div class="flex items-center border border-blue-100 bg-[#f4f9fd] rounded overflow-hidden max-w-md">
                <label class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 text-xs font-medium cursor-pointer border-r border-gray-300 whitespace-nowrap">
                    Choose File <input type="file" id="fileInput" name="relevant_file" class="hidden">
                </label>
                <span id="fileName" class="px-3 text-gray-400 text-xs truncate">No file chosen</span>
            </div>
        </div>

        <div>
            <label class="block font-medium mb-1">Remarks <span class="text-red-500">*</span></label>
            <textarea name="remarks" rows="3" required class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-400 resize-none" placeholder="Enter your remarks here..."></textarea>
        </div>

        <div class="pt-4">
            <button type="submit" class="bg-[#004e92] hover:bg-[#00396b] text-white font-medium px-6 py-2 rounded text-xs tracking-wide shadow transition-all cursor-pointer">Submit</button>
        </div>
    </form>
</div>

<script>
// 1. UDISE Code से स्कूल का नाम खोजना
document.getElementById('udiseCode').addEventListener('input', function() {
    const code = this.value.trim();
    const label = document.getElementById('schoolNameLabel');
    const hiddenInput = document.getElementById('schoolNameHidden');
    
    if(code.length >= 8) {
        label.textContent = "Searching...";
        fetch(`box_api.php?action=search_udise&udise_code=${code}`)
        .then(res => res.json())
        .then(data => {
            if(data.status === 'success') {
                label.textContent = data.school_name;
                label.className = "w-full bg-green-50 border border-green-200 rounded px-3 py-2 text-green-700 min-h-[38px] flex items-center font-medium";
                hiddenInput.value = data.school_name;
            } else {
                label.textContent = "School Not Found!";
                label.className = "w-full bg-red-50 border border-red-200 rounded px-3 py-2 text-red-600 min-h-[38px] flex items-center";
                hiddenInput.value = "";
            }
        });
    } else {
        label.textContent = "-- Enter UDISE Code --";
        label.className = "w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-500 min-h-[38px] flex items-center";
        hiddenInput.value = "";
    }
});

// 2. Multi-Field Auto Fetch Logic (IFP, UPS, Accessories के लिए कॉमन कोड)
document.querySelectorAll('.box-input').forEach(inputField => {
    inputField.addEventListener('blur', function() { // Input से बाहर (Focus out) क्लिक करते ही API हिट होगी
        const boxNumber = this.value.trim();
        const boxType = this.getAttribute('data-type');
        const targetOutputField = this.closest('.grid').querySelector('input[readonly]');
        
        if (boxNumber === "") {
            targetOutputField.value = "";
            return;
        }

        targetOutputField.value = "Fetching ID...";

        // API से Box Code प्राप्त करना
        fetch(`box_api.php?action=get_box_code&box_type=${boxType}&box_number=${encodeURIComponent(boxNumber)}`)
        .then(res => res.json())
        .then(data => {
            if(data.status === 'success') {
                targetOutputField.value = data.box_code;
            } else {
                targetOutputField.value = "Not Found / Invalid";
            }
        })
        .catch(() => {
            targetOutputField.value = "Error fetching";
        });
    });
});

// File input custom name update
document.getElementById('fileInput').addEventListener('change', function() {
    document.getElementById('fileName').textContent = this.files[0] ? this.files[0].name : "No file chosen";
});

// 3. Form Submit Logic
document.getElementById('boxForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    if(!document.getElementById('schoolNameHidden').value) {
        alert("Please enter a valid UDISE Code first.");
        return;
    }

    // सुनिश्चित करें कि कोई इनवैलिड Box ID न सबमिट हो रही हो
    const ifpId = document.getElementById('ifpBoxCode').value;
    const upsId = document.getElementById('upsBoxCode').value;
    const accId = document.getElementById('accBoxCode').value;

    if(ifpId.includes("Not Found") || upsId.includes("Not Found") || accId.includes("Not Found") || !ifpId || !upsId || !accId) {
        alert("Please ensure all Box Numbers are valid and their IDs are auto-fetched successfully.");
        return;
    }

    const formData = new FormData(this);
    formData.append('action', 'save_box_data');

    fetch('box_api.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if(data.status === 'success') {
            alert('Box records saved successfully!');
            document.getElementById('boxForm').reset();
            document.getElementById('schoolNameLabel').textContent = "-- Enter UDISE Code --";
            document.getElementById('schoolNameLabel').className = "w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-500 min-h-[38px] flex items-center";
            document.getElementById('fileName').textContent = "No file chosen";
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(err => alert('Submission Error!'));
});
</script>

 

<!-- ================= INTERACTIVE PAGE LOGIC SCRIPT ================= -->
<script>
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

    const tableBody = document.getElementById('tableBody');
    const searchInput = document.getElementById('searchInput');
    const entriesSelect = document.getElementById('entriesPerPage');
    const tableInfo = document.getElementById('tableInfo');
    const paginationControls = document.getElementById('paginationControls');

    function renderTable() {
        tableBody.innerHTML = "";
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
            tr.className = "hover:bg-gray-50 transition border-b border-gray-200";
            tr.innerHTML = `
                <td class="p-3 border-r border-gray-200 text-center">${row.id}</td>
                <td class="p-3 border-r border-gray-200 text-left leading-relaxed whitespace-pre-line">${row.school}</td>
                <td class="p-3 border-r border-gray-200 text-center">${row.district}</td>
                <td class="p-3 border-r border-gray-200 text-center">${row.classroom}</td>
                <td class="p-3 border-r border-gray-200 text-center">${row.scheduled}</td>
                <td class="p-3 border-r border-gray-200 text-center text-gray-500">${row.file}</td>
                <td class="p-3 border-r border-gray-200 text-center">${row.date}</td>
                <td class="p-3 border-r border-gray-200 text-center font-medium">${row.comment}</td>
                <td class="p-3 border-r border-gray-200 text-left text-xs leading-normal">${row.venue}</td>
                <td class="p-3 border-r border-gray-200 text-center text-gray-500">${row.approved}</td>
                <td class="p-3 border-r border-gray-200 text-center text-gray-500">${row.remark}</td>
                <td class="p-3 border-r border-gray-200 text-center">
                    <button class="bg-[#00bcd4] hover:bg-[#00acc1] text-white p-1.5 rounded transition shadow-sm cursor-pointer"><i class="fa-solid fa-eye text-xs px-1"></i></button>
                </td>
                <td class="p-3 border-r border-gray-200 text-center">${row.by}</td>
                <td class="p-3 text-center text-red-500 font-medium hover:underline cursor-pointer">Upload</td>
            `;
            tableBody.appendChild(tr);
        });

        updateFooter(start + 1, Math.min(end, filteredData.length), filteredData.length);
        renderPagination();
    }

    function updateFooter(start, end, total) {
        tableInfo.innerText = `Showing ${start} to ${end} of ${total} entries`;
    }

    function renderPagination() {
        paginationControls.innerHTML = "";
        let totalPages = Math.ceil(filteredData.length / entriesPerPage);
        if(totalPages <= 1) return;

        let prevBtn = document.createElement('button');
        prevBtn.className = `px-3 py-1 border border-gray-300 rounded text-xs transition cursor-pointer ${currentPage === 1 ? 'opacity-50 cursor-not-allowed bg-gray-100' : 'hover:bg-gray-100 bg-white'}`;
        prevBtn.innerText = "Previous";
        prevBtn.disabled = currentPage === 1;
        prevBtn.onclick = () => { currentPage--; renderTable(); };
        paginationControls.appendChild(prevBtn);

        for(let i=1; i<=totalPages; i++) {
            let pageBtn = document.createElement('button');
            pageBtn.className = `px-3 py-1 border text-xs transition rounded cursor-pointer ${currentPage === i ? 'bg-[#0056b3] text-white border-[#0056b3]' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-300'}`;
            pageBtn.innerText = i;
            pageBtn.onclick = () => { currentPage = i; renderTable(); };
            paginationControls.appendChild(pageBtn);
        }

        let nextBtn = document.createElement('button');
        nextBtn.className = `px-3 py-1 border border-gray-300 rounded text-xs transition cursor-pointer ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed bg-gray-100' : 'hover:bg-gray-100 bg-white'}`;
        nextBtn.innerText = "Next";
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.onclick = () => { currentPage++; renderTable(); };
        paginationControls.appendChild(nextBtn);
    }

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

    entriesSelect.addEventListener('change', (e) => {
        entriesPerPage = parseInt(e.target.value);
        currentPage = 1;
        renderTable();
    });

    // Side Drawer Open-Close Events
    const openDrawerBtn = document.getElementById('openDrawerBtn');
    const closeDrawerBtn = document.getElementById('closeDrawerBtn');
    const sideDrawer = document.getElementById('sideDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');

    if(openDrawerBtn) openDrawerBtn.addEventListener('click', () => {
        sideDrawer.classList.remove('translate-x-full');
        drawerOverlay.classList.remove('hidden');
        setTimeout(() => drawerOverlay.classList.add('opacity-100'), 10);
    });

    if(closeDrawerBtn) closeDrawerBtn.addEventListener('click', () => {
        sideDrawer.classList.add('translate-x-full');
        drawerOverlay.classList.remove('opacity-100');
        setTimeout(() => drawerOverlay.classList.add('hidden'), 300);
    });

    renderTable();
</script>

<?php 
include('includes/footer.php'); 
?>
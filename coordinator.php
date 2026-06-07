<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">
    <div class="flex items-center">
        <a href="coordinator-stats.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
             Statistic Coordinator
        </a>
        <a href="coordinator.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
           Coordinator
        </a>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>

    <div class="p-4 md:p-6 w-full block">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div class="text-sm font-medium">
                <span class="text-orange-500 hover:underline cursor-pointer">Super Admin </span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-orange-500 hover:underline cursor-pointer">Dashboard</span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-gray-600">Project</span>
            </div>
            
            <div class="flex items-center gap-2 self-end md:self-auto">
                <button class="bg-[#2c5282] hover:bg-[#2a4365] text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition shadow cursor-pointer">
                    <i class="fa-solid fa-cloud-arrow-down"></i>
                    <i class="fa-solid fa-caret-down text-[10px]"></i>
                </button>

                <button id="openAllocDrawerBtn" class="bg-[#e65c00] hover:bg-[#cc5200] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
                    <i class="fa-solid fa-user-plus text-xs"></i> Allot District Coordinator (Excel)
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
                <input type="search" id="searchInput" class="border border-gray-300 rounded px-2 py-1 w-48 md:w-64 focus:outline-none focus:border-blue-500" placeholder="Search school, project...">
            </div>
        </div>

        <div class="w-0 min-w-full overflow-x-auto border border-gray-200 rounded shadow-inner block">
            <table class="min-w-[3400px] w-full text-left border-collapse text-[13px]" id="myTable" style="table-layout: fixed;">
                <thead>
                    <tr class="bg-[#eae2d8] text-gray-800 font-semibold border-b border-gray-300 select-none">
                        <th class="p-3 border-r border-gray-300 text-center" style="width:70px;">S.No.</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">Project Name</th>
                        <th class="p-3 border-r border-gray-300" style="width:140px;">Bidder Firm</th>
                        <th class="p-3 border-r border-gray-300" style="width:140px;">Govt Department</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">GeM Contract No.</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:130px;">Contract Date</th>
                        <th class="p-3 border-r border-gray-300" style="width:160px;">LOA Ref.</th>
                        <th class="p-3 border-r border-gray-300" style="width:150px;">School Category</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:100px;">Phase</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">UDISE</th>
                        <th class="p-3 border-r border-gray-300 bg-orange-50 font-bold text-orange-900" style="width:220px;">Back Office Coordinator Name</th>
                        <th class="p-3 border-r border-gray-300 bg-orange-50 font-bold text-orange-900" style="width:180px;">Back Office Coordinator Mobile</th>
                        <th class="p-3 border-r border-gray-300" style="width:120px;">District</th>
                        <th class="p-3 border-r border-gray-300" style="width:120px;">Block</th>
                        <th class="p-3 border-r border-gray-300" style="width:200px;">School Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:100px;">PIN Code</th>
                        <th class="p-3 border-r border-gray-300" style="width:160px;">HM Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">HM Number</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">Alt Contact</th>
                        <th class="p-3 border-r border-gray-300" style="width:160px;">BEO Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">BEO Number</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">BEO Alt Number</th>
                        <th class="p-3 border-r border-gray-300" style="width:160px;">BSA Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">BSA Number</th>
                        <th class="p-3 text-center" style="width:120px;">BSA DCT Number</th>
                    </tr>
                </thead>
                <tbody id="tableBody" class="text-gray-700 divide-y divide-gray-200 bg-white"></tbody>
            </table>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-4 text-sm text-gray-600">
            <div id="tableInfo">Showing 0 to 0 of 0 entries</div>
            <div class="flex items-center gap-1" id="paginationControls"></div>
        </div>
    </div>
</div>

<div id="drawerOverlay" class="fixed inset-0 bg-black/40 hidden z-40 transition-opacity duration-300 opacity-0"></div>

<div id="allocCoordinatorDrawer" class="fixed top-0 right-0 h-full w-full max-w-[550px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <div class="flex items-center justify-between px-6 py-4 bg-orange-50 border-b border-orange-200 shrink-0">
        <h2 class="text-orange-800 font-semibold text-lg flex items-center gap-2">
            <i class="fa-solid fa-users-gear text-orange-600"></i> District Wise Coordinator Allocation
        </h2>
        <button id="closeAllocDrawerBtn" class="text-gray-400 hover:text-gray-600 text-xl font-medium focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
    <form id="coordinatorAllocForm" class="flex-1 overflow-y-auto p-6 space-y-5 text-sm text-gray-700">
        <div class="bg-orange-50/40 border border-dashed border-orange-300 rounded-xl p-5 text-center relative group">
            <div class="flex flex-col items-center justify-center space-y-2">
                <div class="p-3 bg-orange-100 text-orange-700 rounded-full">
                    <i class="fa-solid fa-file-excel text-2xl"></i>
                </div> 
                <p class="font-medium text-gray-800 text-xs">Bulk District Allocation via Excel / CSV</p>
                <p class="text-[11px] text-gray-500 px-4">Upload bulk file. Format must match the columns specified in sample.</p>
                
                <div class="flex gap-2 mt-2">
                    <input type="file" id="excelUploadInput" accept=".csv, .xlsx, .xls" class="block w-full text-xs text-gray-500 file:mr-4 file:py-1.5 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 cursor-pointer"/>
                </div>

                <button type="button" id="downloadSampleBtn" class="mt-2 text-xs text-blue-600 font-medium hover:underline flex items-center gap-1">
                    <i class="fa-solid fa-circle-down"></i> Download Sample Excel Format
                </button>
            </div>
        </div>

        <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-gray-200"></div>
            <span class="flex-shrink mx-4 text-gray-400 text-xs uppercase font-semibold">OR Manual Entry</span>
            <div class="flex-grow border-t border-gray-200"></div>
        </div>

        <div class="space-y-4">
            <div>
                <label class="block font-medium mb-1">Select GeM Contract / School <span class="text-red-500">*</span></label>
                <select id="allocContractSelect" class="w-full border border-gray-300 bg-white rounded px-3 py-2 focus:outline-none focus:border-orange-500" required>
                    <option value="">-- Choose Contract --</option>
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4 bg-gray-50 p-3 rounded border border-gray-200">
                <div>
                    <label class="block text-xs font-medium text-gray-500">Mapped District</label>
                    <input type="text" id="allocDistrictVal" readonly class="w-full bg-gray-100 border border-gray-200 rounded px-2 py-1.5 text-gray-600 cursor-not-allowed">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500">UDISE Code</label>
                    <input type="text" id="allocUdiseVal" readonly class="w-full bg-gray-100 border border-gray-200 rounded px-2 py-1.5 text-gray-600 cursor-not-allowed">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium mb-1">Back Office Coordinator Name <span class="text-red-500">*</span></label>
                    <input type="text" name="alloc_coordinator_name" id="manualCoordName" required placeholder="e.g. Amit Kumar" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-orange-500">
                </div>
                <div>
                    <label class="block font-medium mb-1">Back Office Coordinator Mobile <span class="text-red-500">*</span></label>
                    <input type="text" name="alloc_coordinator_mobile" id="manualCoordMobile" required placeholder="10 Digit Number" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-orange-500">
                </div>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-200 flex items-center justify-end gap-3 sticky bottom-0 bg-white">
            <button type="button" id="cancelAllocBtn" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition cursor-pointer">
                Cancel
            </button>
            <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 rounded shadow transition cursor-pointer">
                Save Allocation
            </button>
        </div>
    </form>
</div>

<script>
// Master Mock Database Array
const tableData = [
    {
        project_name: "ICT LAB PROJECT UP",
        bidder_firm: "ACME INFRA PVT LTD",
        govt_department: "UPLC",
        gem_contract_number: "GEM-2026-99102",
        gem_contract_date: "2026-02-15",
        loa_reference: "NBDIUP/LOA/1022",
        school_category: "Basic Elementary",
        phase: "Phase-1",
        udise: "226102",
        allotted_coordinator: "SURESH KUMAR RAWAT",
        coordinator_mobile: "9876112233",
        district: "LUCKNOW",
        block: "CHINHAT",
        school_name: "UPS CHINHAT CHHOTA",
        pin_code: "226028",
        hm_name: "RAJESH VERMA",
        hm_number: "9876543210",
        alternate_no: "9123456780",
        beo_name: "ANITA SINGH",
        beo_number: "9456781234",
        beo_alt_number: "9415000000",
        bsa_name: "VIVEK TRIPATHI",
        bsa_number: "9000001111",
        bsa_dct_number: "9555554444"
    },
    {
        project_name: "ICT LAB PROJECT UP",
        bidder_firm: "ACME INFRA PVT LTD",
        govt_department: "UPLC",
        gem_contract_number: "GEM-2026-99105",
        gem_contract_date: "2026-03-10",
        loa_reference: "NBDIUP/LOA/1054",
        school_category: "Senior Secondary",
        phase: "Phase-2",
        udise: "221004",
        allotted_coordinator: "", 
        coordinator_mobile: "",
        district: "VARANASI",
        block: "KASHI",
        school_name: "GIC VARANASI MAIN",
        pin_code: "221001",
        hm_name: "ALOK TRIPATHI",
        hm_number: "9988776655",
        alternate_no: "9450011223",
        beo_name: "SANJAY KUMAR",
        beo_number: "9456780001",
        beo_alt_number: "9415000002",
        bsa_name: "DR. J.P. SINGH",
        bsa_number: "9000002222",
        bsa_dct_number: "9555553333"
    }
];

// DOM Element mapping
const tableBody = document.getElementById('tableBody');
const searchInput = document.getElementById('searchInput');
const entriesSelect = document.getElementById('entriesPerPage');
const tableInfo = document.getElementById('tableInfo');
const paginationControls = document.getElementById('paginationControls');

let filteredData = [...tableData];
let currentPage = 1;
let entriesPerPage = parseInt(entriesSelect.value);

// Render Main Table Logic
function renderTable() {
    tableBody.innerHTML = "";
    let start = (currentPage - 1) * entriesPerPage;
    let end = start + entriesPerPage;
    let paginatedItems = filteredData.slice(start, end);

    if(paginatedItems.length === 0) {
        tableBody.innerHTML = `<tr><td colspan="25" class="p-4 text-center text-gray-500">No matching records found</td></tr>`;
        updateFooter(0, 0, 0);
        return;
    }

    paginatedItems.forEach((row, index) => {
        let tr = document.createElement('tr');
        tr.className = "hover:bg-gray-50 transition border-b border-gray-200";
        tr.innerHTML = `
            <td class="p-3 border-r border-gray-200 text-center">${start + index + 1}</td>
            <td class="p-3 border-r border-gray-200">${row.project_name}</td>
            <td class="p-3 border-r border-gray-200">${row.bidder_firm}</td>
            <td class="p-3 border-r border-gray-200">${row.govt_department}</td>
            <td class="p-3 border-r border-gray-200">${row.gem_contract_number}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.gem_contract_date}</td>
            <td class="p-3 border-r border-gray-200">${row.loa_reference}</td>
            <td class="p-3 border-r border-gray-200">${row.school_category}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.phase}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.udise}</td>
            <td class="p-3 border-r border-gray-200 bg-orange-50/60 font-medium text-gray-900">${row.allotted_coordinator || '<span class="text-red-500 font-normal italic">Not Allotted</span>'}</td>
            <td class="p-3 border-r border-gray-200 bg-orange-50/60 text-center font-medium">${row.coordinator_mobile || '-'}</td>
            <td class="p-3 border-r border-gray-200">${row.district}</td>
            <td class="p-3 border-r border-gray-200">${row.block}</td>
            <td class="p-3 border-r border-gray-200">${row.school_name}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.pin_code}</td>
            <td class="p-3 border-r border-gray-200">${row.hm_name}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.hm_number}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.alternate_no}</td>
            <td class="p-3 border-r border-gray-200">${row.beo_name}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.beo_number}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.beo_alt_number}</td>
            <td class="p-3 border-r border-gray-200">${row.bsa_name}</td>
            <td class="p-3 border-r border-gray-200 text-center">${row.bsa_number}</td>
            <td class="p-3 text-center">${row.bsa_dct_number}</td>
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
    prevBtn.className = `px-3 py-1 border border-gray-300 rounded text-xs transition ${currentPage === 1 ? 'opacity-50 cursor-not-allowed bg-gray-100' : 'hover:bg-gray-100 bg-white'}`;
    prevBtn.innerText = "Previous";
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => { currentPage--; renderTable(); };
    paginationControls.appendChild(prevBtn);

    for(let i=1; i<=totalPages; i++) {
        let pageBtn = document.createElement('button');
        pageBtn.className = `px-3 py-1 border text-xs transition rounded ${currentPage === i ? 'bg-[#0056b3] text-white border-[#0056b3]' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-300'}`;
        pageBtn.innerText = i;
        pageBtn.onclick = () => { currentPage = i; renderTable(); };
        paginationControls.appendChild(pageBtn);
    }

    let nextBtn = document.createElement('button');
    nextBtn.className = `px-3 py-1 border border-gray-300 rounded text-xs transition ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed bg-gray-100' : 'hover:bg-gray-100 bg-white'}`;
    nextBtn.innerText = "Next";
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => { currentPage++; renderTable(); };
    paginationControls.appendChild(nextBtn);
}

// Global Filter Search
searchInput.addEventListener('input', (e) => {
    let term = e.target.value.toLowerCase();
    filteredData = tableData.filter(item => 
        item.school_name.toLowerCase().includes(term) ||
        item.project_name.toLowerCase().includes(term) ||
        item.district.toLowerCase().includes(term) ||
        item.udise.toLowerCase().includes(term)
    );
    currentPage = 1; 
    renderTable();
});

entriesSelect.addEventListener('change', (e) => {
    entriesPerPage = parseInt(e.target.value);
    currentPage = 1;
    renderTable();
});

// Drawer display setup
const drawerOverlay = document.getElementById('drawerOverlay');
function toggleDrawer(drawerId, open = true) {
    const drawer = document.getElementById(drawerId);
    if(open) {
        drawer.classList.remove('translate-x-full');
        drawerOverlay.classList.remove('hidden');
        setTimeout(() => drawerOverlay.classList.add('opacity-100'), 10);
    } else {
        drawer.classList.add('translate-x-full');
        drawerOverlay.classList.remove('opacity-100');
        setTimeout(() => drawerOverlay.classList.add('hidden'), 300);
    }
}

document.getElementById('openAllocDrawerBtn').addEventListener('click', () => {
    populateContractDropdown();
    toggleDrawer('allocCoordinatorDrawer', true);
});
document.getElementById('closeAllocDrawerBtn').addEventListener('click', () => toggleDrawer('allocCoordinatorDrawer', false));
document.getElementById('cancelAllocBtn').addEventListener('click', () => toggleDrawer('allocCoordinatorDrawer', false));
drawerOverlay.addEventListener('click', () => toggleDrawer('allocCoordinatorDrawer', false));

function populateContractDropdown() {
    const dropdown = document.getElementById('allocContractSelect');
    dropdown.innerHTML = `<option value="">-- Choose Contract --</option>`;
    tableData.forEach(item => {
        let opt = document.createElement('option');
        opt.value = item.gem_contract_number;
        opt.innerText = `${item.gem_contract_number} (${item.school_name})`;
        dropdown.appendChild(opt);
    });
}

document.getElementById('allocContractSelect').addEventListener('change', function() {
    const selectedContract = this.value;
    const match = tableData.find(item => item.gem_contract_number === selectedContract);
    if(match) {
        document.getElementById('allocDistrictVal').value = match.district;
        document.getElementById('allocUdiseVal').value = match.udise;
    } else {
        document.getElementById('allocDistrictVal').value = "";
        document.getElementById('allocUdiseVal').value = "";
    }
});

// Manual Allocation Handler
document.getElementById('coordinatorAllocForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const targetGem = document.getElementById('allocContractSelect').value;
    const coordName = document.getElementById('manualCoordName').value;
    const coordMobile = document.getElementById('manualCoordMobile').value;

    if(!targetGem) {
        alert("Please select a valid GeM Contract!");
        return;
    }

    const dataIndex = tableData.findIndex(item => item.gem_contract_number === targetGem);
    if(dataIndex !== -1) {
        tableData[dataIndex].allotted_coordinator = coordName;
        tableData[dataIndex].coordinator_mobile = coordMobile;
        filteredData = [...tableData];
        renderTable();
        alert('Coordinator mapped successfully!');
    }
    this.reset();
    toggleDrawer('allocCoordinatorDrawer', false);
});

// --- NEW FUNCTIONALITY: DYNAMIC SAMPLE CSV EXCEL GENERATION & DOWNLOAD ---
document.getElementById('downloadSampleBtn').addEventListener('click', function() {
    // Header schema standard matches user input layout specs
    const headers = ["DISTRICT", "SCHOOL CATEGORY", "PHASE", "UDISE", "LOA REFERENCE", "BACK OFFICE COORDINATOR NAME", "BACK OFFICE COORDINATOR MOBILE NUMBER"];
    
    // Default system templates mock samples row inside excel mapping
    const sampleRows = [
        ["VARANASI", "Senior Secondary", "Phase-2", "221004", "NBDIUP/LOA/1054", "RAMESH KUMAR PAL", "9415778899"],
        ["LUCKNOW", "Basic Elementary", "Phase-1", "226102", "NBDIUP/LOA/1022", "ANIL KUMAR SHARMA", "9889554411"]
    ];

    let csvContent = "data:text/csv;charset=utf-8," 
        + headers.join(",") + "\n"
        + sampleRows.map(e => e.join(",")).join("\n");

    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "Coordinator_Allocation_Sample_Template.csv");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});

// --- NEW FUNCTIONALITY: BULK UPLOAD FILE PARSER ENGINE (CSV / SHEET PARSE) ---
document.getElementById('excelUploadInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(evt) {
        const text = evt.target.result;
        const lines = text.split('\n').map(line => line.trim()).filter(line => line.length > 0);
        
        if(lines.length <= 1) {
            alert("The uploaded excel sheet template is empty!");
            return;
        }

        // Skipping headers indices, process standard structural array loops
        let uploadCount = 0;
        for (let i = 1; i < lines.length; i++) {
            const columns = lines[i].split(',').map(col => col.replace(/^"|"$/g, '').trim());
            
            // Expected CSV structure mapping array keys length check
            if(columns.length >= 7) {
                const csvDistrict    = columns[0].toUpperCase();
                const csvCategory    = columns[1];
                const csvPhase       = columns[2];
                const csvUdise       = columns[3];
                const csvLoaRef      = columns[4];
                const csvCoordName   = columns[5];
                const csvCoordMobile = columns[6];

                // UDISE code matrix match criteria logic wrapper
                const matchIndex = tableData.findIndex(item => item.udise === csvUdise);
                if(matchIndex !== -1) {
                    tableData[matchIndex].allotted_coordinator = csvCoordName;
                    tableData[matchIndex].coordinator_mobile = csvCoordMobile;
                    
                    // Optional fallback to update secondary variables safely if provided
                    if(csvDistrict) tableData[matchIndex].district = csvDistrict;
                    if(csvLoaRef) tableData[matchIndex].loa_reference = csvLoaRef;
                    
                    uploadCount++;
                }
            }
        }

        // UI view reset logic parameters sequence triggered
        filteredData = [...tableData];
        renderTable();
        alert(`Bulk Import finished successfully! Allocated values for ${uploadCount} school units.`);
        toggleDrawer('allocCoordinatorDrawer', false);
        document.getElementById('excelUploadInput').value = ""; // clear selector scope
    };
    
    reader.readAsText(file);
});

// Initialize system standard
renderTable();
</script>

<?php 
include('includes/footer.php'); 
?>
<?php 
$page_title = "Schedule Equipment Operation Training - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">
    
    <div class="flex items-center">
        <a href="project-stats.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
             Statistic Project
        </a>
        <a href="project.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
           Project
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

                <button id="openProjectDrawerBtn" class="bg-[#1e3e62] hover:bg-[#142a42] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i> Upload New Project
                </button>

                <button id="openProjectDrawerBtn" class="bg-[#1e3e62] hover:bg-[#142a42] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i> Add Project
                </button>
                <button id="openReadinessDrawerBtn" class="bg-[#0056b3] hover:bg-[#004085] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
                    <i class="fa-solid fa-school text-xs"></i> Update HM/BEO/BSA
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

        <div class="w-0 min-w-full overflow-x-auto border border-gray-200 rounded shadow-inner block">
            <table class="min-w-[3000px] w-full text-left border-collapse text-[13px]" id="myTable" style="table-layout: fixed;">
                <thead>
                    <tr class="bg-[#eae2d8] text-gray-800 font-semibold border-b border-gray-300 select-none">
                        <th class="p-3 border-r border-gray-300 text-center" style="width:70px;">S.No.</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">Project Name</th>
                        <th class="p-3 border-r border-gray-300" style="width:140px;">Bidder Firm</th>
                        <th class="p-3 border-r border-gray-300" style="width:140px;">Govt Department</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">GeM Contract No.</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:130px;">Contract Date</th>
                        <th class="p-3 border-r border-gray-300" style="width:120px;">LOA Ref.</th>
                        <th class="p-3 border-r border-gray-300" style="width:120px;">Category</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:100px;">Phase</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:120px;">UDISE</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">District</th>
                        <th class="p-3 border-r border-gray-300" style="width:120px;">Block</th>
                        <th class="p-3 border-r border-gray-300" style="width:250px;">School Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:100px;">PIN Code</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">HM Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:130px;">HM Number</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:130px;">Alt Number</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">BEO Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:130px;">BEO Number</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:150px;">BEO Alt Contact</th>
                        <th class="p-3 border-r border-gray-300" style="width:180px;">BSA Name</th>
                        <th class="p-3 border-r border-gray-300 text-center" style="width:130px;">BSA Number</th>
                        <th class="p-3 text-center" style="width:150px;">BSA DCT Contact</th>
                    </tr>
                </thead>
                <tbody id="tableBody" class="text-gray-700 divide-y divide-gray-200 bg-white">
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


<button id="openProjectDrawerBtn" class="bg-[#1e3e62] hover:bg-[#142a42] text-white px-4 py-1.5 rounded text-sm font-medium flex items-center gap-1.5 transition shadow cursor-pointer">
    <i class="fa-solid fa-plus text-xs"></i> Upload New Project
</button>

<div id="projectDrawer" class="fixed top-0 right-0 h-full w-full max-w-[600px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    
    <div class="flex items-center justify-between px-6 py-4 bg-slate-50 border-b border-gray-200">
        <h2 class="text-[#1e3e62] font-semibold text-lg">Create / Upload Project</h2>
        <button id="closeProjectDrawerBtn" class="text-gray-400 hover:text-gray-600 text-xl font-medium focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
    <form id="projectForm" class="flex-1 overflow-y-auto p-6 space-y-6 text-sm text-gray-700">
        
        <div class="bg-blue-50/50 border border-dashed border-blue-300 rounded-xl p-5 text-center">
            <div class="flex flex-col items-center justify-center space-y-2">
                <div class="p-3 bg-blue-100 text-[#1e3e62] rounded-full">
                    <i class="fa-solid fa-file-excel text-2xl"></i>
                </div>
                <p class="font-medium text-[#1e3e62]">Bulk Upload via Excel</p>
                <p class="text-xs text-gray-500">Drag & drop your .xlsx file here or click to browse</p>
                
                <input type="file" id="excelFile" accept=".xlsx, .xls" class="hidden" />
                <label for="excelFile" class="mt-2 bg-[#1e3e62] hover:bg-[#142a42] text-white text-xs px-4 py-2 rounded font-medium cursor-pointer transition">
                    Choose Excel File
                </label>
            </div>
        </div>

        <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-gray-200"></div>
            <span class="flex-shrink mx-4 text-gray-400 text-xs uppercase font-semibold tracking-wider">OR Fill Manually</span>
            <div class="flex-grow border-t border-gray-200"></div>
        </div>

        <div class="space-y-4">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Project & Authority Details</h3>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Project Name</label>
                    <input type="text" placeholder="e.g., Smart Class Room" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Bidder Firm</label>
                    <input type="text" placeholder="e.g., MIRC" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Govt Department</label>
                    <input type="text" placeholder="e.g., UPLC" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">LOA Reference</label>
                    <input type="text" placeholder="e.g., LOA 2963" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">GeM Contract Number</label>
                    <input type="text" placeholder="GEMC-511687..." class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">GeM Contract Date</label>
                    <input type="date" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>
        </div>

        <hr class="border-gray-100" />

        <div class="space-y-4">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider">School Information</h3>
            
            <div class="grid grid-cols-3 gap-3">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">School Category</label>
                    <input type="text" placeholder="e.g., Basic" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Phase</label>
                    <input type="text" placeholder="Phase-1" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">UDISE Code</label>
                    <input type="text" placeholder="9730204006" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>

            <div>
                <label class="block text-xs font-medium text-gray-600 mb-1">School Name</label>
                <input type="text" placeholder="COMPOSIT SCHOOL GADERI" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
            </div>

            <div class="grid grid-cols-3 gap-3">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">District</label>
                    <input type="text" placeholder="AMETHI" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Block</label>
                    <input type="text" placeholder="AMETHI" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">PIN Code</label>
                    <input type="text" placeholder="227405" class="w-full border border-gray-300 rounded px-3 py-2 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>
        </div>

        <hr class="border-gray-100" />

        <div class="space-y-4">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Contact & Administration Details</h3>
            
            <div class="grid grid-cols-3 gap-3 bg-gray-50 p-3 rounded border border-gray-200">
                <div class="col-span-3 font-medium text-xs text-gray-500">Head Master (HM)</div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">HM Name</label>
                    <input type="text" placeholder="AWDESH KUMAR" class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">HM Number</label>
                    <input type="text" placeholder="63883..." class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">Alternate No</label>
                    <input type="text" placeholder="63883..." class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>

            <div class="grid grid-cols-3 gap-3 bg-gray-50 p-3 rounded border border-gray-200">
                <div class="col-span-3 font-medium text-xs text-gray-500">Block Education Officer (BEO)</div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">BEO Name</label>
                    <input type="text" placeholder="POOJA CHAUHAN" class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">BEO Number</label>
                    <input type="text" placeholder="99360..." class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">MIS / Alt Contact</label>
                    <input type="text" placeholder="93360..." class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>

            <div class="grid grid-cols-3 gap-3 bg-gray-50 p-3 rounded border border-gray-200">
                <div class="col-span-3 font-medium text-xs text-gray-500">Basic Shiksha Adhikari (BSA)</div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">BSA Name</label>
                    <input type="text" placeholder="SHREE SANJAY TIWARI" class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">BSA Number</label>
                    <input type="text" placeholder="94530..." class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
                <div>
                    <label class="block text-[11px] font-medium text-gray-500 mb-1">DCT Contact</label>
                    <input type="text" placeholder="94151..." class="w-full bg-white border border-gray-300 rounded px-2 py-1.5 outline-none focus:border-[#1e3e62]" />
                </div>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-200 flex items-center justify-end gap-3 sticky bottom-0 bg-white">
            <button type="button" id="cancelBtn" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition cursor-pointer">
                Cancel
            </button>
            <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-[#1e3e62] hover:bg-[#142a42] rounded shadow transition cursor-pointer">
                Save Project
            </button>
        </div>
    </form>
</div>


<div id="projectDrawer" class="fixed top-0 right-0 h-full w-full max-w-[550px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <div class="flex items-center justify-between px-6 py-4 bg-slate-50 border-b border-gray-200">
        <h2 class="text-[#1e3e62] font-semibold text-lg">Create Project</h2>
        <button id="closeProjectDrawerBtn" class="text-gray-400 hover:text-gray-600 text-xl font-medium focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
   <form id="projectForm" class="flex-1 overflow-y-auto p-6 space-y-4 text-sm text-gray-700">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block font-medium mb-1">Project Name <span class="text-red-500">*</span></label>
            <input type="text" name="project_name" required class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">Bidder Firm</label>
            <input type="text" name="bidder_firm" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">Government Department</label>
            <input type="text" name="govt_department" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">GeM Contract Number</label>
            <input type="text" name="gem_contract_number" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">GeM Contract Date</label>
            <input type="date" name="gem_contract_date" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">LOA Reference</label>
            <input type="text" name="loa_reference" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">School Category</label>
            <input type="text" name="school_category" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">Phase</label>
            <select name="phase" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
                <option value="">-- Select Phase --</option>
                <option value="Phase-1">Phase-1</option>
                <option value="Phase-2">Phase-2</option>
                <option value="Phase-3">Phase-3</option>
                <option value="Phase-4">Phase-4</option>
                <option value="Phase-5">Phase-5</option>
                <option value="Phase-6">Phase-6</option>
            </select>
        </div>

        <div>
            <label class="block font-medium mb-1">UDISE Code</label>
            <input type="text" name="udise" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">District</label>
            <input type="text" name="district" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">Block</label>
            <input type="text" name="block" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">School Name</label>
            <input type="text" name="school_name" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium mb-1">PIN Code</label>
            <input type="text" name="pin_code" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2">
        </div>
    </div>

    <div class="pt-4">
        <button type="submit" class="bg-[#004e92] hover:bg-[#00396b] text-white font-medium px-6 py-2 rounded text-xs tracking-wide shadow transition-all">
            Save Project
        </button>
    </div>
</form>
</div>

<div id="readinessDrawer" class="fixed top-0 right-0 h-full w-full max-w-[550px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    
    <div class="flex items-center justify-between px-6 py-4 bg-slate-50 border-b border-gray-200 shrink-0">
        <h2 class="text-[#0056b3] font-semibold text-lg">Update HM/BEO/BSA</h2>
        <button id="closeReadinessDrawerBtn" class="text-gray-400 hover:text-gray-600 text-xl font-medium focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
    <form id="contactUpdateForm" class="flex-1 overflow-y-auto p-6 space-y-4 text-sm text-gray-700">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-blue-50/50 p-3 rounded-lg border border-blue-100/70">
            <div class="md:col-span-2">
                <label class="block font-medium mb-1">
                    GeM Contract Number <span class="text-red-500">*</span>
                </label>
                <input type="text" id="searchGemNumber" name="gem_contract_number" required placeholder="Enter GeM Contract Number" class="w-full border border-blue-100 bg-white rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex items-end">
                <button type="button" id="searchContractBtn" class="w-full bg-[#004e92] text-white px-5 py-2 rounded hover:bg-[#00396b] transition font-medium text-xs tracking-wide cursor-pointer h-[38px]">
                    Search
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1 text-gray-500">Project Name</label>
                <input type="text" id="drawerProjectName" readonly value="" class="w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-600 cursor-not-allowed">
            </div>

            <div>
                <label class="block font-medium mb-1 text-gray-500">School Name</label>
                <input type="text" id="drawerSchoolName" readonly value="" class="w-full bg-gray-100 border border-gray-200 rounded px-3 py-2 text-gray-600 cursor-not-allowed">
            </div>
        </div>

        <h3 class="font-semibold text-[#004e92] border-b pb-1.5 mt-6 flex items-center gap-1.5">
            <i class="fa-solid fa-user-tie text-xs"></i> HM Details
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">HM Name</label>
                <input type="text" name="hm_name" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block font-medium mb-1">HM Number</label>
                <input type="text" name="hm_number" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="md:col-span-2">
                <label class="block font-medium mb-1">Alternate Number</label>
                <input type="text" name="alternate_no" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
        </div>

        <h3 class="font-semibold text-[#004e92] border-b pb-1.5 mt-6 flex items-center gap-1.5">
            <i class="fa-solid fa-user-shield text-xs"></i> BEO Details
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">BEO Name</label>
                <input type="text" name="beo_name" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block font-medium mb-1">BEO Number</label>
                <input type="text" name="beo_number" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="md:col-span-2">
                <label class="block font-medium mb-1">
                    BEO MIS / Alternate Contact
                </label>
                <input type="text" name="beo_alt_number" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
        </div>

        <h3 class="font-semibold text-[#004e92] border-b pb-1.5 mt-6 flex items-center gap-1.5">
            <i class="fa-solid fa-user-gradient text-xs"></i> BSA Details
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">BSA Name</label>
                <input type="text" name="bsa_name" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block font-medium mb-1">BSA Number</label>
                <input type="text" name="bsa_number" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="md:col-span-2">
                <label class="block font-medium mb-1">
                    BSA DCT Contact Number
                </label>
                <input type="text" name="bsa_dct_number" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
        </div>

        <div class="pt-6 pb-2 border-t border-gray-100 sticky bottom-0 bg-white">
            <button type="submit" class="bg-[#004e92] hover:bg-[#00396b] text-white font-medium px-6 py-2 rounded text-xs tracking-wide shadow transition-all cursor-pointer">
                Update Contacts
            </button>
        </div>

    </form>
</div>


<script>
const tableData = [
    {
        project_name: "Smart Class Room",
        bidder_firm: "MIRC",
        govt_department: "UPLC",
        gem_contract_number: "GEMC-511687767848083",
        gem_contract_date: "03-04-2025",
        loa_reference: "LOA 2963",
        school_category: "Basic",
        phase: "Phase-1",
        udise: "09010100101",
        district: "AMETHI - CSM NAGAR",
        block: "AMETHI",
        school_name: "COMPOSIT SCHOOL GADERI",
        pin_code: "227405",
        hm_name: "AWDESH KUMAR",
        hm_number: "6388370684",
        alternate_no: "6388370684",
        beo_name: "POOJA CHAUHAN",
        beo_number: "9936058875",
        beo_alt_number: "9336042264",
        bsa_name: "SHREE SANJAY TIWARI",
        bsa_number: "9453004069",
        bsa_dct_number: "9415135850"
    },
    {
        project_name: "ICT Lab Setup",
        bidder_firm: "ABC Technologies",
        govt_department: "UPDESCO",
        gem_contract_number: "GEMC-778899445566",
        gem_contract_date: "15-05-2025",
        loa_reference: "LOA 3125",
        school_category: "Secondary",
        phase: "Phase-2",
        udise: "09010100102",
        district: "LUCKNOW",
        block: "MALIHABAD",
        school_name: "GOVT INTER COLLEGE MALIHABAD",
        pin_code: "226102",
        hm_name: "RAJESH VERMA",
        hm_number: "9876543210",
        alternate_no: "9123456780",
        beo_name: "ANITA SINGH",
        beo_number: "9456781234",
        beo_alt_number: "9415000000",
        bsa_name: "VIVEK TRIPATHI",
        bsa_number: "9000001111",
        bsa_dct_number: "9555554444"
    }
];

// DOM Variables
const tableBody = document.getElementById('tableBody');
const searchInput = document.getElementById('searchInput');
const entriesSelect = document.getElementById('entriesPerPage');
const tableInfo = document.getElementById('tableInfo');
const paginationControls = document.getElementById('paginationControls');

// Setup Pagination Variables
let filteredData = [...tableData];
let currentPage = 1;
let entriesPerPage = parseInt(entriesSelect.value);

// Render Main Table Function
function renderTable() {
    tableBody.innerHTML = "";
    let start = (currentPage - 1) * entriesPerPage;
    let end = start + entriesPerPage;
    let paginatedItems = filteredData.slice(start, end);

    if(paginatedItems.length === 0) {
        tableBody.innerHTML = `<tr><td colspan="23" class="p-4 text-center text-gray-500">No matching records found</td></tr>`;
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

// Search Filter Logic
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

// MULTI-DRAWER (OPEN/CLOSE) LOGIC
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

// Event Listeners for Drawers
document.getElementById('openProjectDrawerBtn').addEventListener('click', () => toggleDrawer('projectDrawer', true));
document.getElementById('closeProjectDrawerBtn').addEventListener('click', () => toggleDrawer('projectDrawer', false));

document.getElementById('openReadinessDrawerBtn').addEventListener('click', () => toggleDrawer('readinessDrawer', true));
document.getElementById('closeReadinessDrawerBtn').addEventListener('click', () => toggleDrawer('readinessDrawer', false));

drawerOverlay.addEventListener('click', () => {
    toggleDrawer('projectDrawer', false);
    toggleDrawer('readinessDrawer', false);
});

// GeM Contract Search Object Mapping Logic
document.getElementById('searchContractBtn').addEventListener('click', function() {
    const searchVal = document.getElementById('searchGemNumber').value.trim();
    const match = tableData.find(item => item.gem_contract_number === searchVal);
    
    const form = document.getElementById('contactUpdateForm');

    if(match) {
        document.getElementById('drawerProjectName').value = match.project_name;
        document.getElementById('drawerSchoolName').value = match.school_name;
        
        form.elements['hm_name'].value = match.hm_name;
        form.elements['hm_number'].value = match.hm_number;
        form.elements['alternate_no'].value = match.alternate_no;
        form.elements['beo_name'].value = match.beo_name;
        form.elements['beo_number'].value = match.beo_number;
        form.elements['beo_alt_number'].value = match.beo_alt_number;
        form.elements['bsa_name'].value = match.bsa_name;
        form.elements['bsa_number'].value = match.bsa_number;
        form.elements['bsa_dct_number'].value = match.bsa_dct_number;
    } else {
        alert("No records found for this Contract Number!");
        document.getElementById('drawerProjectName').value = "";
        document.getElementById('drawerSchoolName').value = "";
        form.reset();
        document.getElementById('searchGemNumber').value = searchVal;
    }
});

// Form Submissions
document.getElementById('projectForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Project Data saved successfully!');
    this.reset();
    toggleDrawer('projectDrawer', false);
});

document.getElementById('contactUpdateForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Contact Details updated successfully!');
    this.reset();
    document.getElementById('drawerProjectName').value = "";
    document.getElementById('drawerSchoolName').value = "";
    toggleDrawer('readinessDrawer', false);
});

// Initial Table Render
renderTable();
</script>

<?php 
include('includes/footer.php'); 
?>
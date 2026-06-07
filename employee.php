<?php 
$page_title = "Employee Management - NBDIUP";
include('includes/head.php'); 
include('includes/sidebar.php'); 
include('includes/top-header.php'); 
?>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-visible w-full block">
    
    <!-- Tab Navigation -->
    <div class="flex items-center">
        <a href="employee-stats.php" class="bg-gray-100 px-6 py-3 font-medium text-gray-500 border-b border-gray-200 rounded-t-lg text-sm z-0 hover:bg-gray-50 hover:text-gray-700 no-underline transition-all">
            Statistic Employee
        </a>
        <a href="employee.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            Employee Form
        </a>

         <a href="employee-credentials.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            Manage Credentials & Status
        </a>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>

    <div class="p-4 md:p-6 w-full block">
        <!-- Breadcrumb & Buttons Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div class="text-sm font-medium">
                <span class="text-orange-500 hover:underline cursor-pointer">Super Admin </span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-orange-500 hover:underline cursor-pointer">Dashboard</span>
                <i class="fa-solid fa-caret-right mx-2 text-gray-400 text-xs"></i>
                <span class="text-gray-600">Add New Employee</span>
            </div>
        </div>

        <!-- MAIN FORM START -->
        <form id="employeeForm" action="process-employee.php" method="POST" enctype="multipart/form-data" class="space-y-6 text-sm text-gray-700">
            
            <!-- Section 1: Personal Details -->
            <div class="bg-gray-50/50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-user text-blue-500"></i> Personal Information
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Employee Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="emp_name" required placeholder="e.g., Rahul Kumar" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Date of Birth (DOB) <span class="text-red-500">*</span></label>
                        <input type="date" name="emp_dob" required class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Height (in cm/ft)</label>
                        <input type="text" name="emp_height" placeholder="e.g., 175 cm or 5.9 ft" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Mobile Number <span class="text-red-500">*</span></label>
                        <input type="tel" name="emp_mobile" required placeholder="e.g., 98765XXXXX" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" name="emp_email" required placeholder="name@company.com" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Highest Qualification</label>
                        <input type="text" name="emp_qualification" placeholder="e.g., B.Tech, MBA, MCA" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>

                    <div class="md:col-span-3">
                        <label class="block font-medium mb-1 text-gray-600">City / Current Location</label>
                        <input type="text" name="emp_city" placeholder="e.g., Lucknow, Delhi" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Section 2: Work & Role Hierarchy -->
            <div class="bg-gray-50/50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-briefcase text-orange-500"></i> Role & Designation
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Employee Role <span class="text-red-500">*</span></label>
                        <select name="emp_role" required class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                            <option value="">-- Select Role --</option>
                            <option value="Superadmin">Superadmin</option>
                            <option value="Subadmin">Subadmin</option>
                            <option value="Vendor">Vendor</option>
                            <option value="Team Coordinator">Team Coordinator</option>
                            <option value="Field Team">Field Team</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Designation / Job Title</label>
                        <input type="text" name="emp_designation" placeholder="e.g., Senior Coordinator, Field Executive" class="w-full border border-blue-100 bg-[#f4f9fd] rounded px-3 py-2 outline-none focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Section 3: Credentials / Login Account -->
            <div class="bg-gray-50/50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-lock text-red-500"></i> Account Credentials
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Username <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400"><i class="fa-solid fa-user-tag text-xs"></i></span>
                            <input type="text" name="emp_username" required placeholder="e.g., rahul123" class="w-full border border-blue-100 bg-[#f4f9fd] rounded pl-9 pr-3 py-2 outline-none focus:border-blue-500">
                        </div>
                    </div>

                    <div>
                        <label class="block font-medium mb-1 text-gray-600">Password <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400"><i class="fa-solid fa-key text-xs"></i></span>
                            <input type="password" name="emp_password" required placeholder="••••••••" class="w-full border border-blue-100 bg-[#f4f9fd] rounded pl-9 pr-3 py-2 outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Document Attachments (File Uploads) -->
            <div class="bg-gray-50/50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-paperclip text-green-500"></i> Attachments & Documents
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Photo Upload -->
                    <div class="border border-dashed border-gray-300 rounded-lg p-3 bg-white text-center">
                        <label class="block font-medium text-xs text-gray-500 mb-2 uppercase tracking-wide">Employee Photo</label>
                        <div class="flex flex-col items-center justify-center space-y-1">
                            <i class="fa-solid fa-image text-gray-400 text-xl mb-1"></i>
                            <input type="file" name="emp_photo" accept="image/*" class="text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer w-full" />
                        </div>
                    </div>

                    <!-- Aadhaar Card Attachment -->
                    <div class="border border-dashed border-gray-300 rounded-lg p-3 bg-white text-center">
                        <label class="block font-medium text-xs text-gray-500 mb-2 uppercase tracking-wide">Aadhaar Card Attachment</label>
                        <div class="flex flex-col items-center justify-center space-y-1">
                            <i class="fa-solid fa-id-card text-gray-400 text-xl mb-1"></i>
                            <input type="file" name="emp_aadhar" accept=".pdf,image/*" class="text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 cursor-pointer w-full" />
                        </div>
                    </div>

                    <!-- General Document Upload -->
                    <div class="border border-dashed border-gray-300 rounded-lg p-3 bg-white text-center">
                        <label class="block font-medium text-xs text-gray-500 mb-2 uppercase tracking-wide">Other Documents (Resume/Certificates)</label>
                        <div class="flex flex-col items-center justify-center space-y-1">
                            <i class="fa-solid fa-file-pdf text-gray-400 text-xl mb-1"></i>
                            <input type="file" name="emp_documents" accept=".pdf,.doc,.docx" class="text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer w-full" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Action Buttons -->
            <div class="pt-4 border-t border-gray-200 flex items-center justify-end gap-3 sticky bottom-0 bg-white py-2 z-10">
                <button type="button" onclick="window.location.href='employee-stats.php'" class="px-5 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition cursor-pointer">
                    Cancel
                </button>
                <button type="submit" class="bg-[#004e92] hover:bg-[#00396b] text-white font-medium px-6 py-2 rounded text-sm tracking-wide shadow transition-all cursor-pointer flex items-center gap-2">
                    <i class="fa-solid fa-floppy-disk"></i> Save Employee Details
                </button>
            </div>

        </form>
        <!-- MAIN FORM END -->

    </div>
</div>

<?php 
include('includes/footer.php'); 
?>
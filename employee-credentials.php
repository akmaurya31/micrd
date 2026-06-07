<?php 
$page_title = "Account Credentials Manager - NBDIUP";
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
        <a href="employee-credentials.php" class="bg-white px-6 py-3 font-semibold text-gray-900 border-t-4 border-orange-500 rounded-t-lg text-sm z-10 shadow-sm no-underline transition-all">
            Manage Credentials & Status
        </a>
        <div class="flex-1 bg-gray-50 py-5 border-b border-gray-200"></div>
    </div>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="p-4 md:p-6 w-full block">
        <main class="dashboard-container space-y-6">
            
            <!-- SUPER ADMIN ALERT BADGE -->
            <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded-r-xl flex items-start gap-3 shadow-sm">
                <div class="text-amber-600 text-lg mt-0.5"><i class="fa-solid fa-shield-halved"></i></div>
                <div>
                    <h3 class="text-sm font-bold text-amber-900 m-0">Super Admin Security Zone</h3>
                    <p class="text-xs text-amber-700 m-0 mt-0.5">Aapke paas live portal passwords badalne, credential review karne aur employee login accessibility ko immediate block/unblock karne ke exclusive rights hain.</p>
                </div>
            </div>

            <!-- FILTERS & SEARCH SEARCH BAR -->
            <section class="bg-slate-50 border border-gray-200 p-4 rounded-xl shadow-sm grid grid-cols-1 md:grid-cols-4 gap-4 text-xs">
                <div class="md:col-span-2">
                    <label class="block font-medium text-gray-600 mb-1">Search Employee (Name, Username, Email)</label>
                    <div class="relative">
                        <input type="text" placeholder="Type username or search name..." class="w-full bg-white border border-gray-300 rounded p-2 pl-8 outline-none focus:border-[#1e3e62]" />
                        <i class="fa-solid fa-magnifying-glass absolute left-2.5 top-3 text-gray-400"></i>
                    </div>
                </div>
                <div>
                    <label class="block font-medium text-gray-600 mb-1">Account Status</label>
                    <select class="w-full bg-white border border-gray-300 rounded p-2 outline-none focus:border-[#1e3e62]">
                        <option value="all">All Statuses</option>
                        <option value="active">Active (Access Allowed)</option>
                        <option value="inactive">Inactive (Suspended)</option>
                    </select>
                </div>
                <div>
                    <label class="block font-medium text-gray-600 mb-1">Quick Action Filter</label>
                    <button class="w-full bg-[#1e3e62] text-white font-semibold rounded p-2 hover:bg-[#152c46] transition flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-filter"></i> Apply Matrix Filter
                    </button>
                </div>
            </section>

            <!-- CREDENTIALS MANAGEMENT MASTER TABLE -->
            <section class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-gray-100 flex items-center justify-between bg-slate-50/50">
                    <h2 class="text-sm font-semibold text-gray-800 flex items-center gap-2">
                        <i class="fa-solid fa-key text-amber-500"></i> Live Identity & Access Control Roster
                    </h2>
                    <span class="text-[11px] font-medium bg-gray-200 text-gray-700 px-2 py-0.5 rounded">Showing 428 Registered Users</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-slate-100 text-gray-700 font-bold border-b border-gray-200 uppercase text-[10px] tracking-wider text-center">
                                <th class="p-3 text-left">Employee Details</th>
                                <th class="p-3 text-left">Assigned Role</th>
                                <th class="p-3">Portal Username</th>
                                <th class="p-3">System Password</th>
                                <th class="p-3">Login Status</th>
                                <th class="p-3 text-center">Super-Admin Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-600 align-middle text-center">
                            
                            <!-- Row 1: Active Field Executive Example -->
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="p-3 text-left flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold flex items-center justify-center">AK</div>
                                    <div>
                                        <div class="font-bold text-gray-900">Amit Kumar</div>
                                        <div class="text-[10px] text-gray-400">ID: EMP-2026-092</div>
                                    </div>
                                </td>
                                <td class="p-3 text-left">
                                    <span class="bg-emerald-50 text-emerald-700 border border-emerald-200 px-2 py-0.5 rounded-full font-medium text-[10px]">Field Executive</span>
                                </td>
                                <td class="p-3 font-mono font-bold text-blue-900">amit_field92</td>
                                <td class="p-3 font-mono">
                                    <div class="flex items-center justify-center gap-2">
                                        <input type="password" value="Amit@9274" class="bg-transparent border-none text-center outline-none w-20 font-bold tracking-widest text-gray-700" readonly id="pass1" />
                                        <button type="button" onclick="togglePasswordVisibility('pass1', this)" class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-eye text-xs"></i></button>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Active
                                    </span>
                                </td>
                                <td class="p-3 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="triggerPasswordReset('amit_field92')" class="bg-amber-500 hover:bg-amber-600 text-white font-medium px-2 py-1 rounded flex items-center gap-1 transition shadow-sm"><i class="fa-solid fa-rotate"></i> Reset Pass</button>
                                        <button onclick="toggleUserStatus('EMP-2026-092', 'block')" class="bg-red-50 hover:bg-red-100 text-red-600 font-medium px-2 py-1 rounded border border-red-200 transition">Suspend</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2: Inactive/Suspended Vendor Example -->
                            <tr class="hover:bg-slate-50/80 transition bg-rose-50/30">
                                <td class="p-3 text-left flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-orange-100 text-orange-700 font-bold flex items-center justify-center">VS</div>
                                    <div>
                                        <div class="font-bold text-gray-900">Vikram Singh</div>
                                        <div class="text-[10px] text-gray-400">ID: EMP-2026-114</div>
                                    </div>
                                </td>
                                <td class="p-3 text-left">
                                    <span class="bg-orange-50 text-orange-700 border border-orange-200 px-2 py-0.5 rounded-full font-medium text-[10px]">Registered Vendor</span>
                                </td>
                                <td class="p-3 font-mono font-bold text-blue-900">vikram_is_vendor</td>
                                <td class="p-3 font-mono">
                                    <div class="flex items-center justify-center gap-2">
                                        <input type="password" value="Vkr#Sec991" class="bg-transparent border-none text-center outline-none w-20 font-bold tracking-widest text-gray-700" readonly id="pass2" />
                                        <button type="button" onclick="togglePasswordVisibility('pass2', this)" class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-eye text-xs"></i></button>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-rose-600 bg-rose-50 px-2.5 py-1 rounded-full">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Suspended
                                    </span>
                                </td>
                                <td class="p-3 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="triggerPasswordReset('vikram_is_vendor')" class="bg-amber-500 hover:bg-amber-600 text-white font-medium px-2 py-1 rounded flex items-center gap-1 transition shadow-sm"><i class="fa-solid fa-rotate"></i> Reset Pass</button>
                                        <button onclick="toggleUserStatus('EMP-2026-114', 'activate')" class="bg-green-600 hover:bg-green-700 text-white font-medium px-2 py-1 rounded shadow-sm transition">Activate Access</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3: Team Coordinator Example -->
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="p-3 text-left flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-700 font-bold flex items-center justify-center">PS</div>
                                    <div>
                                        <div class="font-bold text-gray-900">Pooja Sharma</div>
                                        <div class="text-[10px] text-gray-400">ID: EMP-2026-004</div>
                                    </div>
                                </td>
                                <td class="p-3 text-left">
                                    <span class="bg-purple-50 text-purple-700 border border-purple-200 px-2 py-0.5 rounded-full font-medium text-[10px]">Team Coordinator</span>
                                </td>
                                <td class="p-3 font-mono font-bold text-blue-900">pooja_coord_lko</td>
                                <td class="p-3 font-mono">
                                    <div class="flex items-center justify-center gap-2">
                                        <input type="password" value="PjLko*2026" class="bg-transparent border-none text-center outline-none w-20 font-bold tracking-widest text-gray-700" readonly id="pass3" />
                                        <button type="button" onclick="togglePasswordVisibility('pass3', this)" class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-eye text-xs"></i></button>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Active
                                    </span>
                                </td>
                                <td class="p-3 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="triggerPasswordReset('pooja_coord_lko')" class="bg-amber-500 hover:bg-amber-600 text-white font-medium px-2 py-1 rounded flex items-center gap-1 transition shadow-sm"><i class="fa-solid fa-rotate"></i> Reset Pass</button>
                                        <button onclick="toggleUserStatus('EMP-2026-004', 'block')" class="bg-red-50 hover:bg-red-100 text-red-600 font-medium px-2 py-1 rounded border border-red-200 transition">Suspend</button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</div>

<!-- JAVASCRIPT FOR EYE-TOGGLE AND RESET ALERTS -->
<script>
function togglePasswordVisibility(inputId, btn) {
    const input = document.getElementById(inputId);
    const icon = btn.querySelector('i');
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
        btn.classList.add('text-blue-600');
    } else {
        input.type = "password";
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
        btn.classList.remove('text-blue-600');
    }
}

function triggerPasswordReset(username) {
    let newPass = prompt("Enter new password for " + username + ":");
    if (newPass != null && newPass.trim() !== "") {
        alert("Success: Password for '" + username + "' has been changed to: " + newPass);
        // Yahan aap apna AJAX call initialize kar sakte hain to update database.
    }
}

function toggleUserStatus(empId, action) {
    if(confirm("Kya aap sach me is account ka status change karna chahte hain?")) {
        alert("Account " + empId + " updated successfully via Super-Admin routing.");
        // Database update logic goes here.
    }
}
</script>

<?php 
include('includes/footer.php'); 
?>
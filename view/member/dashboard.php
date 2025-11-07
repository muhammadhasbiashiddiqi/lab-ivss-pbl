<?php 
ob_start();

// Get user info
$userName = $_SESSION['user']['name'] ?? $_SESSION['name'] ?? 'Member';
$userNIM = $_SESSION['user']['nim'] ?? $_SESSION['nim'] ?? '-';
$userAngkatan = $_SESSION['user']['angkatan'] ?? $_SESSION['angkatan'] ?? '-';
?>

<!-- Welcome Banner -->
<div class="mb-6 bg-gradient-to-r from-blue-900 to-blue-800 rounded-xl p-6 text-white shadow-lg">
    <div class="flex items-start justify-between">
        <div>
            <h1 class="text-2xl font-bold mb-2">👋 Halo, <?= htmlspecialchars(explode(' ', $userName)[0]) ?>!</h1>
            <p class="text-blue-100 text-sm mb-1">Selamat datang di Dashboard Member Lab IVSS</p>
            <div class="flex items-center gap-4 text-xs text-blue-200 mt-3">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                    </svg>
                    NIM: <?= htmlspecialchars($userNIM) ?>
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Angkatan <?= htmlspecialchars($userAngkatan) ?>
                </span>
            </div>
        </div>
        <div class="hidden md:block">
            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                <span class="text-2xl font-bold"><?= strtoupper(substr($userName, 0, 1)) ?></span>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    
    <!-- Card 1: Riset Saya -->
    <div class="bg-white border border-slate-200 rounded-xl p-4 hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between mb-3">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
            </div>
            <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2.5 py-1 rounded-full">Active</span>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-0.5"><?= $totalMyResearch ?? 0 ?></h3>
        <p class="text-xs text-slate-600 font-medium">Riset yang Diikuti</p>
    </div>
    
    <!-- Card 2: Publikasi -->
    <div class="bg-white border border-slate-200 rounded-xl p-4 hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between mb-3">
            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <span class="text-xs font-semibold text-purple-600 bg-purple-50 px-2.5 py-1 rounded-full">Total</span>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-0.5"><?= $totalMyPublications ?? 0 ?></h3>
        <p class="text-xs text-slate-600 font-medium">Publikasi Saya</p>
    </div>
    
    <!-- Card 3: Status Member -->
    <div class="bg-white border border-slate-200 rounded-xl p-4 hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between mb-3">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2.5 py-1 rounded-full">Verified</span>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-0.5 capitalize"><?= $currentMemberStatus ?? 'Aktif' ?></h3>
        <p class="text-xs text-slate-600 font-medium">Status Keanggotaan</p>
    </div>
    
</div>

<!-- Main Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    
    <!-- Riset Kamu -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden border border-slate-100">
        <div class="bg-gradient-to-r from-slate-50 to-white p-4 border-b border-slate-200">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-slate-800 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Riset Kamu
                    </h3>
                    <p class="text-xs text-slate-500 mt-0.5">Daftar riset yang sedang kamu ikuti</p>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <?php if (empty($myResearches)): ?>
                <!-- Empty State -->
                <div class="p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-slate-100 to-slate-200 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-slate-700 mb-1.5">Belum Ada Riset</h4>
                    <p class="text-xs text-slate-500 mb-3">Kamu belum terdaftar di riset manapun</p>
                    <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-indigo-600 text-white text-xs rounded-lg hover:bg-indigo-700 transition-colors shadow-md hover:shadow-lg">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Jelajahi Riset
                    </a>
                </div>
            <?php else: ?>
                <!-- Table -->
                <table class="w-full text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="text-left px-3 py-2 font-medium text-slate-600 text-xs">Judul Riset</th>
                            <th class="text-left px-3 py-2 font-medium text-slate-600 text-xs hidden md:table-cell">Kategori</th>
                            <th class="text-left px-3 py-2 font-medium text-slate-600 text-xs hidden sm:table-cell">Leader</th>
                            <th class="text-center px-3 py-2 font-medium text-slate-600 text-xs">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        <?php foreach ($myResearches as $research): ?>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-3 py-2 text-slate-800 font-medium text-xs"><?= htmlspecialchars($research['title']) ?></td>
                            <td class="px-3 py-2 text-slate-600 hidden md:table-cell">
                                <span class="inline-block px-2 py-0.5 bg-indigo-100 text-indigo-700 text-xs rounded-full font-medium">
                                    <?= htmlspecialchars($research['category'] ?? '-') ?>
                                </span>
                            </td>
                            <td class="px-3 py-2 text-slate-600 hidden sm:table-cell text-xs"><?= htmlspecialchars($research['leader_name'] ?? '-') ?></td>
                            <td class="px-3 py-2 text-center">
                                <?php if ($research['status'] === 'active'): ?>
                                    <span class="inline-block px-2 py-0.5 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">Active</span>
                                <?php else: ?>
                                    <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-700 text-xs font-medium rounded-full">Completed</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Aksi Cepat -->
    <div class="space-y-4">
        <!-- Quick Actions Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-slate-100">
            <div class="bg-gradient-to-r from-slate-50 to-white p-4 border-b border-slate-200">
                <h3 class="text-base font-bold text-slate-800 flex items-center gap-2">
                    <svg class="w-4 h-4 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Aksi Cepat
                </h3>
                <p class="text-sm text-slate-500 mt-1">Menu yang sering digunakan</p>
            </div>
            
            <div class="p-6 space-y-3">
                <!-- Upload Laporan -->
                <a href="index.php?page=member-upload" class="group relative bg-gradient-to-r from-blue-600 to-indigo-600 p-4 rounded-xl text-white overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 block">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white opacity-10 rounded-full -mr-12 -mt-12"></div>
                    <div class="relative flex items-center gap-3">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold">Upload Laporan</p>
                            <p class="text-xs text-blue-50">Upload dokumen riset kamu</p>
                        </div>
                        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
                
                <!-- Lihat Absensi -->
                <a href="index.php?page=member-attendance" class="group relative bg-gradient-to-r from-violet-600 to-purple-600 p-4 rounded-xl text-white overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 block">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white opacity-10 rounded-full -mr-12 -mt-12"></div>
                    <div class="relative flex items-center gap-3">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold">Lihat Absensi</p>
                            <p class="text-xs text-purple-50">Riwayat kehadiran kamu</p>
                        </div>
                        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
                
                <!-- Edit Profil -->
                <a href="index.php?page=member-profile" class="group relative bg-gradient-to-r from-teal-600 to-cyan-600 p-4 rounded-xl text-white overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 block">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white opacity-10 rounded-full -mr-12 -mt-12"></div>
                    <div class="relative flex items-center gap-3">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold">Edit Profil</p>
                            <p class="text-xs text-teal-50">Ubah data diri kamu</p>
                        </div>
                        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</div>

<?php
$content = ob_get_clean();
$title = "Dashboard Member";
include __DIR__ . "/../layouts/member.php";
?>

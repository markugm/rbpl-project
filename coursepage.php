<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Course</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-60 bg-blue-900 text-white flex flex-col justify-between p-4">
            <div>
                <div class="text-2xl font-bold mb-10 text-center">🚲 JAGO SEPEDA</div>
                <nav class="space-y-2">
                    <a href="homepage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                    <a href="coursepage.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
                        <i class="bi bi-book"></i> Kursus
                    </a>
                    <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-bar-chart-line"></i> Hasil Kuis
                    </a>
                    <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-person"></i> Profil
                    </a>
                </nav>
            </div>
            <div class="space-y-2">
                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                <i class="bi bi-gear"></i> Pengaturan
                </a>
                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-red-600 rounded">
                <i class="bi bi-box-arrow-right"></i> Keluar
                </a>
            </div>
        </aside>

    <!-- Konten Utama -->
    <main class="flex-1 overflow-y-auto">
        <!-- TOP BAR -->
        <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
            <!-- Kiri: Hamburger Menu -->
            <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <!-- Kanan: Megaphone + Profil -->
            <div class="flex items-center gap-4">
                <!-- Tombol Megaphone -->
                <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="alert('Notifikasi atau pengumuman di sini')">
                    <i class="bi bi-megaphone"></i>
                </button>
                <!-- Info Pengguna -->
                <div class="flex items-center gap-3">
                    <div class="text-right">
                    <p class="font-semibold text-gray-900">Ajuy Sutiyo</p>
                    <p class="text-sm text-gray-500">Pegawai Training</p>
                    </div>
                    <img src="foto-ajuy.jpg" alt="Ajuy Sutiyo" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover">
                </div>
            </div>
        </div>
        
        <!-- KONTEN KURSUS -->
        <div class="px-6 py-6">
            <h2 class="text-2xl font-bold mb-4">Kursus</h2>
            <div class="flex gap-6 mb-6">
                <button class="font-semibold border-b-2 border-black pb-1">Semua</button>
                <button class="text-gray-400">Tuntas</button>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card Item -->
            <div class="bg-gray-100 rounded-xl shadow px-4 py-3 flex gap-4 items-start">
                <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#1</div>
                </div>
                    <div class="flex-1">
                    <h3 class="font-semibold text-sm mb-1">Pengenalan Sepeda</h3>
                    <p class="text-xs text-gray-600 leading-snug mb-2">Jenis-jenis Sepeda • Anatomi Sepeda • Ukuran dan Geometri Sepeda</p>
                    <p class="text-xs text-gray-500 mb-2">3 Materi | 1 Kuis</p>
                    <button class="bg-blue-900 text-white text-sm px-4 py-1 rounded">Mulai</button>
                </div>
            </div>
                <!-- Duplikasi di bawah ini untuk card #2 sampai #6 -->
            </div>
        </div>
    </main>
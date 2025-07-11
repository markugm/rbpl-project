<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Profile</title>
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
                            <a href="coursepage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                                <i class="bi bi-book"></i> Kursus
                            </a>
                            <a href="resultpage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                                <i class="bi bi-bar-chart-line"></i> Hasil Kuis
                            </a>
                            <a href="profilepage.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
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
                        <div class="p-8">
                            <h1 class="text-2xl font-bold text-gray-900 mb-6">Edit Profil</h1>
                            <form action="profilepage.php" method="POST" class="bg-gray-200 rounded-lg shadow p-6 flex flex-col lg:flex-row gap-6">
                                <!-- Form Kiri -->
                                <div class="flex-1 space-y-4">
                                    <!-- Nama Lengkap -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-900 mb-1">Nama Lengkap</label>
                                        <input type="text" name="nama" class="w-full bg-gray-300 text-gray-900 px-4 py-2 rounded-md" value="Ajuy Sutiyo" readonly>
                                    </div>

                    <!-- Grid Tanggal Lahir & Jenis Kelamin -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-1">Tanggal Lahir</label>
                            <div class="relative">
                            <input type="text" name="tanggal_lahir" class="w-full px-4 py-2 rounded-md" value="12/09/2002">
                            <i class="bi bi-calendar absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-1">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="w-full px-4 py-2 rounded-md" value="Laki-laki">
                        </div>
                    </div>

                    <!-- Grid Telepon & Alamat -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-1">Telepon</label>
                            <input type="text" name="telepon" class="w-full px-4 py-2 rounded-md" value="080000000001">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-1">Alamat</label>
                            <input type="text" name="alamat" class="w-full px-4 py-2 rounded-md truncate" value="Jl. Kudus Jepara, Prambatan Lor, Kab. Kudus">
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="flex gap-4 pt-4">
                        <a href="profilepage.php" class="bg-blue-800 text-white px-6 py-2 rounded-md font-medium hover:bg-blue-900">Batalkan</a>
                        <button type="submit" class="bg-blue-800 text-white px-6 py-2 rounded-md font-medium hover:bg-blue-900">Simpan</button>
                    </div>
                </div>

                <!-- Foto -->
                <div class="flex flex-col items-center justify-start border-l pl-6">
                    <img src="foto-ajuy.jpg" class="w-24 h-24 rounded-full border-4 border-blue-900 object-cover mb-4">
                    <button type="button" class="text-blue-900 border border-blue-900 px-4 py-2 rounded hover:bg-blue-50 transition">
                    Unggah Foto
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>

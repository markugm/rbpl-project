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
          <a href="homepage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-house-door"></i> Beranda
          </a>
          <a href="coursepage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-book"></i> Kursus
          </a>
          <a href="progresspage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-bar-chart-line"></i> Progres
          </a>
          <a href="profilepage-mnj.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-person"></i> Profil
          </a>
        </nav>
      </div>
      <div class="space-y-2">
        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
          <i class="bi bi-gear"></i> Pengaturan
        </a>
        <a href="logoutpage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
            <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="window.location.href='reportpage-mnj.php'">
            <i class="bi bi-megaphone"></i>
            </button>
          <!-- Info Pengguna -->
          <div class="flex items-center gap-3">
            <div class="text-right">
              <p class="font-semibold text-gray-900">Jamal Mulyadi</p>
              <p class="text-sm text-gray-500">Manajer</p>
            </div>
            <img src="foto-jamal.jpg" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover">
          </div>
        </div>
      </div>

      <!-- Konten Profil -->
      <div class="p-6 space-y-6">

        <!-- Header Profil -->
        <div class="bg-white rounded-lg shadow flex flex-col md:flex-row items-start md:items-center justify-between p-4">
            <div class="flex items-center gap-4">
                <img src="foto-jamal.jpg" alt="Foto Profil" class="w-16 h-16 rounded-full border-2 border-blue-800 object-cover">
                <div>
                    <h2 class="font-bold text-lg text-gray-800">Jamal Mulyadi</h2>
                    <p class="text-gray-600 text-sm">jamal.mulyadi@gmail.com</p>
                    <p class="text-blue-800 font-semibold text-sm">Manajer</p>
                </div>
                </div>
            </div>

            <!-- 2 Kolom: Info Pribadi & Riwayat Aktivitas -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Informasi Pribadi -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="font-bold text-lg text-gray-800 mb-3">Informasi Pribadi</h3>
                    <div class="space-y-3 text-sm text-gray-700">
                        <!-- Jenis Kelamin -->
                        <div class="flex items-start gap-2 border-b pb-2">
                            <i class="bi bi-person text-xl text-gray-800 mt-1"></i>
                            <div>
                                <p class="font-medium text-sm text-black">Jenis Kelamin</p>
                                <p class="text-sm">Laki-laki</p>
                            </div>
                        </div>
                        <!-- Tanggal Lahir -->
                        <div class="flex items-start gap-2 border-b pb-2">
                            <i class="bi bi-calendar text-xl text-gray-800 mt-1"></i>
                            <div>
                                <p class="font-medium text-sm text-black">Tanggal Lahir</p>
                                <p class="text-sm">14/01/1995</p>
                            </div>
                        </div>
                        <!-- Telepon -->
                        <div class="flex items-start gap-2 border-b pb-2">
                            <i class="bi bi-telephone text-lg text-gray-800 mt-1"></i>
                            <div>
                                <p class="font-medium text-sm text-black">Telepon</p>
                                <p class="text-sm">080000000001</p>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="flex items-start gap-2">
                            <i class="bi bi-geo-alt text-lg text-gray-800 mt-1"></i>
                            <div>
                                <p class="font-medium text-sm text-black">Alamat</p>
                                <p class="text-sm leading-snug">Jl. Kudus Jepara, Prambatan Lor, Kab. Kudus</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <a href="editprofile-mnj.php" class="bg-blue-800 hover:bg-blue-900 text-white px-10 py-2 mt-4 rounded-md text-sm font-medium transition duration-200 text-center">
                            Edit
                        </a>
                    </div>
                </div>

                <!-- Riwayat Aktivitas -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-lg text-gray-800 mb-4">Riwayat Aktivitas</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-gray-100 p-3 rounded">
                            <div>
                                <p class="font-medium">Pengenalan Sepeda</p>
                                <p class="text-sm text-gray-600">Ukuran dan Geometri Sepeda</p>
                            </div>
                            <p class="text-sm text-gray-500">07/04/2025</p>
                        </div>
                        <div class="flex items-center justify-between bg-gray-100 p-3 rounded">
                            <div>
                                <p class="font-medium">Pengenalan Sepeda</p>
                                <p class="text-sm text-gray-600">Anatomi Sepeda</p>
                            </div>
                            <p class="text-sm text-gray-500">07/04/2025</p>
                        </div>
                        <div class="flex items-center justify-between bg-gray-100 p-3 rounded">
                            <div>
                                <p class="font-medium text-gray-400 italic">Aktivitas lainnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hasil Kuis -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="font-bold text-lg text-gray-800 mb-4">Hasil Kuis</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-100 p-4 rounded text-center">
                        <div class="text-xl font-semibold text-gray-800 mb-1">Anatomi Sepeda<span class="text-sm"></span></div>
                        <p class="text-xs text-gray-500 mb-2">06/04/2025</p>
                        <button class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-1 rounded text-sm">Review</button>
                    </div>
                    <div class="bg-gray-100 p-4 rounded text-center">
                        <div class="text-xl font-semibold text-gray-800 mb-1">Sadel dan Seatposts<span class="text-sm"></span></div>
                        <p class="text-xs text-gray-500 mb-2">06/04/2025</p>
                        <button class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-1 rounded text-sm">Review</button>
                    </div>
                    <div class="bg-gray-100 p-4 rounded text-center">
                        <div class="text-xl font-semibold text-gray-800 mb-1">Rantai dan Pemeliharaan<span class="text-sm"></span></div>
                        <p class="text-xs text-gray-500 mb-2">06/04/2025</p>
                        <button class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-1 rounded text-sm">Review</button>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="text-center text-sm text-gray-500 pt-6 pb-2">
                Copyright © <a href="https://jagosepeda.com" class="hover:underline text-blue-700">jagosepeda.com</a> 2025
            </footer>
        </div>
    </main>
  </div>
</body>
</html>

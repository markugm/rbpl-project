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

      <!-- Konten Profil -->
      <div class="p-6 space-y-6">
        
        <!-- Header Profil -->
        <div class="bg-white rounded-lg shadow flex items-center justify-between p-4">
          <div class="flex items-center gap-4">
            <img src="foto-ajuy.jpg" alt="Foto Profil" class="w-16 h-16 rounded-full border-2 border-blue-800 object-cover">
            <div>
              <h2 class="font-bold text-lg text-gray-800">Ajuy Sutiyo</h2>
              <p class="text-gray-600 text-sm">ajuys1209@gmail.com</p>
              <p class="text-blue-800 font-semibold text-sm">Pegawai Training</p>
            </div>
          </div>
          <div class="space-y-2">
                <div class="bg-gray-100 px-4 py-2 rounded flex items-center gap-2">
                    <i class="bi bi-book text-lg"></i>
                    <p class="text-sm"><strong>10/16</strong> Kursus</p>
                </div>
                <div class="bg-gray-100 px-4 py-2 rounded flex items-center gap-2">
                    <i class="bi bi-bar-chart-line text-lg"></i>
                    <p class="text-sm"><strong>4/7</strong> Kuis</p>
                </div>
            </div>
        </div>

        <!-- 2 Kolom: Info Pribadi & Riwayat Aktivitas -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
          <!-- Informasi Pribadi -->
          <div class="bg-white rounded-lg shadow p-6 space-y-4">
            <h3 class="font-bold text-lg text-gray-800">Informasi Pribadi</h3>
            <div class="space-y-2 text-sm text-gray-700">
              <p><i class="bi bi-gender-male mr-2"></i> Jenis Kelamin: <strong>Laki-laki</strong></p>
              <p><i class="bi bi-calendar mr-2"></i> Tanggal Lahir: <strong>12/09/2002</strong></p>
              <p><i class="bi bi-telephone mr-2"></i> Telepon: <strong>0812-3456-7891</strong></p>
              <p><i class="bi bi-geo-alt mr-2"></i> Alamat: <strong>Jl. Kudus Jepara, Prambatan Lor, Kab. Kudus</strong></p>
            </div>
            <button class="bg-blue-800 hover:bg-blue-900 text-white px-20 py-2 rounded mt-4">
              Edit
            </button>
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
              <p class="text-xl font-bold text-gray-800">80<span class="text-sm">/100</span></p>
              <p class="text-sm mb-2">Anatomi Sepeda</p>
              <p class="text-xs text-gray-500 mb-2">06/04/2025</p>
              <button class="bg-blue-800 text-white px-4 py-1 rounded text-sm">Review</button>
            </div>
            <div class="bg-gray-100 p-4 rounded text-center">
              <p class="text-xl font-bold text-gray-800">85<span class="text-sm">/100</span></p>
              <p class="text-sm mb-2">Sadel dan Seatposts</p>
              <p class="text-xs text-gray-500 mb-2">06/04/2025</p>
              <button class="bg-blue-800 text-white px-4 py-1 rounded text-sm">Review</button>
            </div>
            <div class="bg-gray-100 p-4 rounded text-center">
              <p class="text-xl font-bold text-gray-800">80<span class="text-sm">/100</span></p>
              <p class="text-sm mb-2">Rantai dan Pemeliharaan</p>
              <p class="text-xs text-gray-500 mb-2">06/04/2025</p>
              <button class="bg-blue-800 text-white px-4 py-1 rounded text-sm">Review</button>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer class="text-center text-sm text-gray-500 pt-6 pb-2">
          Copyright © jagosepeda.com 2025
        </footer>
      </div>
    </main>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Edit Profil</title>
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
      <!-- Top Bar -->
      <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
        <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="toggleSidebar()">
          <i class="bi bi-list"></i>
        </button>
        <div class="flex items-center gap-4">
          <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="alert('Notifikasi atau pengumuman di sini')">
            <i class="bi bi-megaphone"></i>
          </button>
          <div class="flex items-center gap-3">
            <div class="text-right">
              <p class="font-semibold text-gray-900">Ajuy Sutiyo</p>
              <p class="text-sm text-gray-500">Pegawai Training</p>
            </div>
            <img src="foto-ajuy.jpg" alt="Ajuy Sutiyo" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover">
          </div>
        </div>
      </div>

      <!-- Form Edit Profil -->
      <div class="p-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Profil</h1>
        <form action="profilepage.php" method="POST" class="bg-white p-6 rounded-lg shadow grid grid-cols-1 lg:grid-cols-3 gap-6 items-center">
          <!-- Kolom Form -->
          <div class="lg:col-span-2 space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
              <input type="text" name="nama" class="mt-1 w-full border-gray-300 rounded-md px-4 py-2" value="Ajuy Sutiyo">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="mt-1 w-full border-gray-300 rounded-md px-4 py-2" value="2002-09-12">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="mt-1 w-full border-gray-300 rounded-md px-4 py-2" value="Laki-laki">
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700">Telepon</label>
                <input type="text" name="telepon" class="mt-1 w-full border-gray-300 rounded-md px-4 py-2" value="080000000001">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" class="mt-1 w-full border-gray-300 rounded-md px-4 py-2" value="Jl. Kudus Jepara, Prambatan Lor, Kab. Kudus">
              </div>
            </div>

            <div class="flex justify-start gap-4 pt-4">
              <a href="profilepage.php" class="bg-blue-800 hover:bg-blue-900 text-white px-6 py-2 rounded">Batal</a>
              <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white px-6 py-2 rounded">Simpan</button>
            </div>
          </div>

          <!-- Kolom Foto -->
          <div class="flex flex-col items-center justify-center gap-4">
            <img src="foto-ajuy.jpg" alt="Foto Profil" class="w-28 h-28 rounded-full border-2 border-blue-800 object-cover">
            <button type="button" class="px-4 py-2 border border-blue-800 text-blue-800 rounded hover:bg-blue-50 transition">Unggah Foto</button>
          </div>
        </form>

        <!-- Footer -->
        <footer class="text-center text-sm text-gray-500 pt-6 pb-2">
          Copyright © <a href="https://jagosepeda.com" class="hover:underline text-blue-700">jagosepeda.com</a> 2025
        </footer>
      </div>
    </main>
  </div>
</body>
</html>

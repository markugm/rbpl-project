<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Progres - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
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
          <a href="progresspage-mnj.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-bar-chart-line"></i> Progres
          </a>
          <a href="profilepage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
      <!-- Top Bar -->
      <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
        <div class="flex items-center gap-4 w-full">
          <button class="text-gray-700 hover:text-blue-700 text-xl">
            <i class="bi bi-list"></i>
          </button>
          <div class="flex-1 relative">
            <input
              type="text"
              placeholder="Cari"
              class="border border-gray-300 rounded-md pl-10 pr-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-600"
            />
            <i class="bi bi-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
          </div>
        </div>
        <div class="flex items-center gap-4">
          <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="window.location.href='reportpage-mnj.php'">
            <i class="bi bi-megaphone"></i>
          </button>
          <div class="flex items-center gap-3">
            <div class="text-right">
              <p class="font-semibold text-gray-900">Jamal Mulyadi</p>
              <p class="text-sm text-gray-500">Manajer</p>
            </div>
            <img src="foto-jamal.jpg" alt="Jamal Mulyadi" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover" />
          </div>
        </div>
      </div>

      <!-- Konten Progres -->
      <div class="px-6 py-6">
        <h2 class="text-2xl font-bold mb-4">Progres</h2>

        <!-- Tabs -->
        <div class="flex gap-6 border-b border-gray-300 mb-6">
          <button class="pb-2 text-sm font-medium text-black border-b-2 border-black focus:outline-none">Semua</button>
          <button class="pb-2 text-sm font-medium text-gray-400 border-b-2 border-transparent focus:outline-none">Hasil Kuis</button>
        </div>

        <!-- Daftar Progres -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          <!-- Kartu Progres -->
          <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <img src="foto-ajuy.jpg" alt="Ajuy Sutiyo" class="w-16 h-16 rounded-full border-2 border-blue-800 object-cover mb-3" />
            <p class="font-semibold text-center mb-2">Ajuy Sutiyo</p>
            <button class="border border-blue-900 text-blue-900 px-3 py-1 rounded text-sm hover:bg-blue-900 hover:text-white transition">
              Progres 65%
            </button>
          </div>

          <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <img src="foto-tegar.jpg" alt="Tegar Adi" class="w-16 h-16 rounded-full border-2 border-blue-800 object-cover mb-3" />
            <p class="font-semibold text-center mb-2">Tegar Adi</p>
            <button class="border border-blue-900 text-blue-900 px-3 py-1 rounded text-sm hover:bg-blue-900 hover:text-white transition">
              Progres 40%
            </button>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>

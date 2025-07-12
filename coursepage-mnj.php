<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Kursus - Jago Sepeda</title>
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
          <a href="coursepage-mnj.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-book"></i> Kursus
          </a>
          <a href="progresspage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
        <button class="text-gray-700 hover:text-blue-700 text-xl">
          <i class="bi bi-list"></i>
        </button>
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

      <!-- Konten Kursus -->
      <div class="px-6 py-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-2xl font-bold">Kursus</h2>
          <a href="newchapter-step1-mnj.php" class="flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition">
            <i class="bi bi-plus-circle"></i> Bab Baru
          </a>
        </div>
        <div class="flex gap-4 mb-6 border-b border-gray-300">
          <button class="pb-2 px-4 text-sm font-medium text-black border-b-2 border-black focus:outline-none">Semua</button>
          <button class="pb-2 px-4 text-sm font-medium text-gray-400 border-b-2 border-transparent focus:outline-none">Tuntas</button>
        </div>

        <!-- Daftar Kursus -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <!-- Kartu Kursus -->
          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#1</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Pengenalan Sepeda</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Jenis-jenis Sepeda • Anatomi Sepeda • Ukuran dan Geometri Sepeda</p>
                  <p class="text-xs text-gray-500">3 Materi | 1 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#2</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Sistem Penggerak</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Crankset dan Bottom Bracket • Casette dan Freewheel • Derailleur dan Shifter</p>
                  <p class="text-xs text-gray-500">4 Materi | 2 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#3</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Sistem Pengereman dan Keselamatan</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Jenis-jenis Rem Sepeda • Cara Kerja dan Perawatan Rem • Aksesori Keselamatan</p>
                  <p class="text-xs text-gray-500">3 Materi | 1 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#4</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Sistem Suspensi dan Kenyamanan Berkendara</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Suspensi Depan dan Belakang • Sadel dan Seatposts</p>
                  <p class="text-xs text-gray-500">0 Materi | 0 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#5</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Roda dan Ban Sepeda</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Wheelset dan Hubs • Ban dan Tekanan Udara</p>
                  <p class="text-xs text-gray-500">2 Materi | 1 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>

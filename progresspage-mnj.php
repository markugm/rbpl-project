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
        <!-- TOP BAR -->
        <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
            <!-- Kiri: Hamburger + Search -->
            <div class="flex items-center gap-4">
                <!-- Hamburger -->
                <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="toggleSidebar()">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Search Box -->
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Cari"
                        class="pl-4 pr-10 py-1.5 border border-gray-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-72"
                    />
                    <i class="bi bi-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>

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
                    <img src="foto-jamal.jpg" alt="Jamal Mulyadi" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover" />
                </div>
            </div>
        </div>

    <!-- Konten Progres -->
    <div class="px-6 py-6">
            <h2 class="text-2xl font-bold mb-4">Progres</h2>

            <!-- Tabs -->
            <div class="flex gap-6 border-b border-gray-300 mb-6">
                <button id="tabSemua" class="pb-2 text-sm font-medium text-black border-b-2 border-black focus:outline-none" onclick="tampilkan('semua')">Semua</button>
                <button id="tabKuis" class="pb-2 text-sm font-medium text-gray-400 border-b-2 border-transparent focus:outline-none" onclick="tampilkan('kuis')">Hasil Kuis</button>
            </div>

            <!-- Konten SEMUA -->
            <div id="kontenSemua" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
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

        <!-- Konten HASIL KUIS -->
        <div id="kontenKuis" class="hidden">
            <h3 class="font-semibold text-md mb-3">Pengenalan Sepeda</h3>
            <div class="flex justify-end items-center text-sm text-gray-700 mt-3">
                <button class="mr-3 text-lg">&lt;</button>
                    <span>1/4 Konten</span>
                <button class="ml-3 text-lg">&gt;</button>
            </div>
            <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700">
                <thead class="border-b border-gray-300">
                <tr class="text-sm font-semibold text-gray-800">
                    <th class="py-2 px-4">Nama Lengkap</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-2">No.1</th>
                    <th class="py-2 px-2">No.2</th>
                    <th class="py-2 px-2">No.3</th>
                    <th class="py-2 px-2">No.4</th>
                    <th class="py-2 px-2">No.5</th>
                    <th class="py-2 px-2">No.6</th>
                    <th class="py-2 px-2">No.7</th>
                    <th class="py-2 px-2">No.8</th>
                    <th class="py-2 px-2">No.9</th>
                    <th class="py-2 px-2">No.10</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <tr class="bg-gray-100 rounded">
                    <td class="py-4 px-4">
                        <div class="flex items-center gap-3">
                            <img src="foto-ajuy.jpg" class="w-8 h-8 rounded-full border-2 border-blue-800 object-cover" />
                            <div>
                                <p class="font-semibold text-sm text-gray-800">Ajuy Sutiyo</p>
                                <p class="text-xs text-gray-500">Pegawai Training</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-4">Sudah Mulai</td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                </tr>

                <tr class="bg-gray-100 rounded">
                    <td class="py-4 px-4">
                        <div class="flex items-center gap-3">
                            <img src="foto-tegar.jpg" class="w-8 h-8 rounded-full border-2 border-blue-800 object-cover" />
                            <div>
                                <p class="font-semibold text-sm text-gray-800">Tegar Adi</p>
                                <p class="text-xs text-gray-500">Pegawai Training</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-4">Belum Mulai</td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-red-600"><i class="bi bi-x-circle-fill"></i></td>
                    <td class="text-center text-green-600"><i class="bi bi-check-circle-fill"></i></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    </main>
  </div>

    <script>
        function tampilkan(tab) {
            const semua = document.getElementById("kontenSemua");
            const kuis = document.getElementById("kontenKuis");
            const tabSemua = document.getElementById("tabSemua");
            const tabKuis = document.getElementById("tabKuis");

            if (tab === "semua") {
            semua.classList.remove("hidden");
            kuis.classList.add("hidden");
            tabSemua.classList.add("text-black", "border-black");
            tabSemua.classList.remove("text-gray-400", "border-transparent");
            tabKuis.classList.add("text-gray-400", "border-transparent");
            tabKuis.classList.remove("text-black", "border-black");
            } else {
            semua.classList.add("hidden");
            kuis.classList.remove("hidden");
            tabKuis.classList.add("text-black", "border-black");
            tabKuis.classList.remove("text-gray-400", "border-transparent");
            tabSemua.classList.add("text-gray-400", "border-transparent");
            tabSemua.classList.remove("text-black", "border-black");
            }
        }
    </script>

</body>
</html>

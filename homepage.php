<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Dashboard</title>
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
          <a href="homepage.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-house-door"></i> Beranda
          </a>
          <a href="coursepage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-book"></i> Kursus
          </a>
          <a href="resultpage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-bar-chart-line"></i> Hasil Kuis
          </a>
          <a href="profilepage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-person"></i> Profil
          </a>
        </nav>
      </div>
      <div class="space-y-2">
        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
          <i class="bi bi-gear"></i> Pengaturan
        </a>
        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
          <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="window.location.href='reportpage.php'">
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

      <!-- Isi konten utama -->
      <div class="p-6">
        <!-- Header -->
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 flex flex-col md:flex-row justify-between items-center gap-6 mb-6">
        <!-- Kiri -->
        <div class="flex items-center gap-4">
          <img src="foto-ajuy.jpg" alt="Ajuy Sutiyo" class="w-20 h-20 rounded-full border-4 border-blue-700" />
          <div>
            <h2 class="text-xl font-bold">Selamat Pagi, Ajuy Sutiyo</h2>
            <p class="text-gray-600">Hari ini adalah hari ke-7 pelatihanmu</p>
            <a href="profilepage.php" class="mt-2 text-sm text-blue-800 border border-blue-800 px-3 py-1 rounded hover:bg-blue-50 transition">
              Buka Akun Kamu &gt;
            </a>
          </div>
        </div>
        <!-- Kanan -->
        <div class="flex gap-4">
          <div class="flex items-center gap-2 border border-black rounded-lg px-4 py-2 min-w-[100px] justify-center text-center">
            <i class="bi bi-book text-xl text-gray-800 mt-1"></i>
            <div>
              <p class="font-bold">2/16</p>
              <p class="text-sm text-gray-600">Kursus</p>
            </div>
          </div>
          <div class="flex items-center gap-2 border border-black rounded-lg px-4 py-2 min-w-[100px] justify-center text-center">
            <i class="bi bi-bar-chart-line text-xl text-gray-800 mt-1"></i>
            <div>
              <p class="font-bold">4/7</p>
              <p class="text-sm text-gray-600">Kuis</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Bagian Kursus -->
      <div class="max-w-6xl mx-auto p-4 bg-white rounded-xl shadow mb-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-semibold">Kursus</h2>
          <a href="coursepage.php" class="text-blue-700 text-sm hover:underline">Selengkapnya &gt;</a>
        </div>
        <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"></div>
      </div>

      <!-- Bagian Hasil Kuis -->
      <div class="max-w-6xl mx-auto p-4 bg-white rounded-xl shadow">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-semibold">Hasil Kuis Kamu</h2>
          <a href="resultpage.php" class="text-blue-700 text-sm hover:underline">Selengkapnya &gt;</a>
        </div>
        <div id="daftarHasilKuis" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"></div>
      </div>

      <script>
        const kursusList = [
          { judul: "Pengenalan Sepeda", materi: 3, kuis: 1 },
          { judul: "Sistem Penggerak", materi: 4, kuis: 2 },
          { judul: "Sistem Pengereman dan Keselamatan", materi: 3, kuis: 1 },
          { judul: "Sistem Suspensi dan Kenyamanan Berkendara", materi: 2, kuis: 1 },
        ];

        const hasilKuisList = [
          { nilai: 80, judul: "Anatomi Sepeda", tanggal: "06/04/2025" },
          { nilai: 90, judul: "Rem dan Keselamatan", tanggal: "09/04/2025" },
          { nilai: 75, judul: "Suspensi", tanggal: "12/04/2025" },
          { nilai: 88, judul: "Sistem Penggerak", tanggal: "14/04/2025" },
        ];

        const kursusContainer = document.getElementById("daftarKursus");
        const kuisContainer = document.getElementById("daftarHasilKuis");

        kursusList.forEach((item, index) => {
          kursusContainer.innerHTML += `
            <div class="border rounded-lg p-4 shadow-sm">
              <div class="relative h-24 bg-gray-100 rounded mb-3">
                <span class="absolute top-2 right-2 bg-black text-white text-sm px-2 py-1 rounded-full">#${index + 1}</span>
              </div>
              <h3 class="font-semibold text-sm mb-2">${item.judul}</h3>
              <div class="text-xs text-gray-600 mb-2">
                📄 ${item.materi} Materi &nbsp;&nbsp; 📊 ${item.kuis} Kuis
              </div>
              <button class="w-full bg-blue-700 text-white text-sm py-1 rounded hover:bg-blue-800 transition">Lihat</button>
            </div>
          `;
        });

        hasilKuisList.forEach((item) => {
          kuisContainer.innerHTML += `
            <div class="border rounded-lg p-4 text-center shadow-sm">
              <div class="text-2xl font-bold mb-1">${item.nilai}<span class="text-sm font-normal">/100</span></div>
              <p class="text-sm font-medium mb-1">${item.judul}</p>
              <p class="text-xs text-gray-500 mb-2">📅 ${item.tanggal}</p>
              <button class="w-full bg-blue-700 text-white text-sm py-1 rounded hover:bg-blue-800 transition">Review</button>
            </div>
          `;
        });
      </script>
      <footer class="border-t text-center text-sm text-gray-600 py-4 mt-6">
        Copyright © <a href="https://jagosepeda.com" class="hover:underline text-blue-700">jagosepeda.com</a> 2025
      </footer>
    </main>
  </div>
</body>
</html>

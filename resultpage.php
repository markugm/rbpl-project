<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Kuis - Jago Sepeda</title>
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
          <a href="resultpage.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
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
    <main class="flex-1 overflow-y-auto relative">
      <!-- TOP BAR -->
      <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
        <button class="text-gray-700 hover:text-blue-700 text-xl">
          <i class="bi bi-list"></i>
        </button>
        <div class="flex items-center gap-4">
          <button class="text-gray-700 hover:text-blue-700 text-xl">
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

      <!-- Konten Hasil Kuis -->
      <div class="px-6 py-6">
        <h2 class="text-2xl font-bold mb-6">Hasil Kuis</h2>
        
        <!-- Grid Kartu Kuis -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              <!-- Card Template -->
              <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between h-48">
                <!-- Nilai -->
                <div class="flex items-center gap-3">
                  <div class="bg-gray-100 border rounded-md px-2 py-1 text-center">
                    <p class="text-xl font-bold text-gray-900 leading-none">80</p>
                    <p class="text-xs text-gray-500">/ 100</p>
                  </div>
                  <p class="text-base font-semibold text-gray-800">Anatomi Sepeda</p>
                </div>

                <!-- Tanggal -->
                <div class="text-sm text-gray-500 mt-4 flex items-center gap-1">
                  <i class="bi bi-calendar-event"></i> 06/04/2025
                </div>

                <!-- Tombol Review -->
                <button class="bg-blue-800 hover:bg-blue-900 text-white w-full mt-3 py-2 rounded-md text-sm font-medium">
                  Review
                </button>
              </div>

              <!-- Copy & sesuaikan untuk card lainnya -->
              <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between h-48">
                <div class="flex items-center gap-3">
                  <div class="bg-gray-100 border rounded-md px-2 py-1 text-center">
                    <p class="text-xl font-bold text-gray-900 leading-none">85</p>
                    <p class="text-xs text-gray-500">/ 100</p>
                  </div>
                  <p class="text-base font-semibold text-gray-800">Sistem Penggerak</p>
                </div>
                <div class="text-sm text-gray-500 mt-4 flex items-center gap-1">
                  <i class="bi bi-calendar-event"></i> 06/04/2025
                </div>
                <button class="bg-blue-800 hover:bg-blue-900 text-white w-full mt-3 py-2 rounded-md text-sm font-medium">
                  Review
                </button>
              </div>

              <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between h-48">
                <div class="flex items-center gap-3">
                  <div class="bg-gray-100 border rounded-md px-2 py-1 text-center">
                    <p class="text-xl font-bold text-gray-900 leading-none">80</p>
                    <p class="text-xs text-gray-500">/ 100</p>
                  </div>
                  <p class="text-base font-semibold text-gray-800">Rantai dan Pemeliharaannya</p>
                </div>
                <div class="text-sm text-gray-500 mt-4 flex items-center gap-1">
                  <i class="bi bi-calendar-event"></i> 07/04/2025
                </div>
                <button class="bg-blue-800 hover:bg-blue-900 text-white w-full mt-3 py-2 rounded-md text-sm font-medium">
                  Review
                </button>
              </div>

              <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between h-48">
                <div class="flex items-center gap-3">
                  <div class="bg-gray-100 border rounded-md px-2 py-1 text-center">
                    <p class="text-xl font-bold text-gray-900 leading-none">90</p>
                    <p class="text-xs text-gray-500">/ 100</p>
                  </div>
                  <p class="text-base font-semibold text-gray-800">Sistem Pengereman dan Keselamatan</p>
                </div>
                <div class="text-sm text-gray-500 mt-4 flex items-center gap-1">
                  <i class="bi bi-calendar-event"></i> 08/04/2025
                </div>
                <button class="bg-blue-800 hover:bg-blue-900 text-white w-full mt-3 py-2 rounded-md text-sm font-medium">
                  Review
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Fungsi untuk tombol review
    document.querySelectorAll('button').forEach(button => {
      if (button.textContent.includes('Review')) {
        button.addEventListener('click', function() {
          const quizTitle = this.closest('.bg-white').querySelector('h3').textContent;
          alert(`Membuka review untuk kuis: ${quizTitle}`);
          // Di sini bisa diarahkan ke halaman review atau menampilkan modal
        });
      }
    });
  </script>
</body>
</html>
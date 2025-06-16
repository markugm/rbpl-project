<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Kuis - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .progress-ring__circle {
      transition: stroke-dashoffset 0.5s;
      transform: rotate(-90deg);
      transform-origin: 50% 50%;
    }
  </style>
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
        
        <!-- Ringkasan Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
          <!-- Kartu Nilai Rata-rata Kursus -->
          <div class="bg-white rounded-xl shadow p-6 flex items-center gap-4">
            <div class="relative w-16 h-16">
              <svg class="w-full h-full" viewBox="0 0 36 36">
                <path
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                  fill="none"
                  stroke="#e6e6e6"
                  stroke-width="3"
                />
                <path
                  class="progress-ring__circle"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                  fill="none"
                  stroke="#3b82f6"
                  stroke-width="3"
                  stroke-dasharray="80 100"
                />
              </svg>
              <div class="absolute inset-0 flex items-center justify-center">
                <span class="font-bold text-blue-600">80</span>
              </div>
            </div>
            <div>
              <p class="text-gray-500 text-sm">Kursus</p>
              <p class="font-bold text-lg">80%</p>
            </div>
          </div>
          
          <!-- Kartu Nilai Rata-rata Kuis -->
          <div class="bg-white rounded-xl shadow p-6 flex items-center gap-4">
            <div class="relative w-16 h-16">
              <svg class="w-full h-full" viewBox="0 0 36 36">
                <path
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                  fill="none"
                  stroke="#e6e6e6"
                  stroke-width="3"
                />
                <path
                  class="progress-ring__circle"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                  fill="none"
                  stroke="#10b981"
                  stroke-width="3"
                  stroke-dasharray="86 100"
                />
              </svg>
              <div class="absolute inset-0 flex items-center justify-center">
                <span class="font-bold text-green-600">86</span>
              </div>
            </div>
            <div>
              <p class="text-gray-500 text-sm">Hasil Kuis</p>
              <p class="font-bold text-lg">86%</p>
            </div>
          </div>
          
          <!-- Kartu Tanggal Review -->
          <div class="bg-white rounded-xl shadow p-6 flex items-center gap-4">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
              <i class="bi bi-calendar-check text-2xl"></i>
            </div>
            <div>
              <p class="text-gray-500 text-sm">Review</p>
              <p class="font-bold text-lg">09/06/2025</p>
            </div>
          </div>
        </div>
        
        <!-- Daftar Hasil Kuis -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
          <!-- Header Tabel -->
          <div class="grid grid-cols-12 bg-gray-100 p-4 font-semibold text-gray-700">
            <div class="col-span-5">Materi</div>
            <div class="col-span-2 text-center">Nilai</div>
            <div class="col-span-2 text-center">Progress</div>
            <div class="col-span-3 text-center">Review</div>
          </div>
          
          <!-- Baris Hasil Kuis -->
          <div class="grid grid-cols-12 p-4 border-b border-gray-200 items-center">
            <div class="col-span-5 font-medium">Sistem Penggerak</div>
            <div class="col-span-2 text-center font-bold text-blue-600">85</div>
            <div class="col-span-2">
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
              </div>
            </div>
            <div class="col-span-3 text-center text-sm text-gray-500">06/04/2025</div>
          </div>
          
          <div class="grid grid-cols-12 p-4 border-b border-gray-200 items-center">
            <div class="col-span-5 font-medium">Rantai dan Pemeliharaannya</div>
            <div class="col-span-2 text-center font-bold text-blue-600">80</div>
            <div class="col-span-2">
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
              </div>
            </div>
            <div class="col-span-3 text-center text-sm text-gray-500">07/04/2025</div>
          </div>
          
          <div class="grid grid-cols-12 p-4 items-center">
            <div class="col-span-5 font-medium">Sistem Pengereman dan Keselamatan</div>
            <div class="col-span-2 text-center font-bold text-blue-600">90</div>
            <div class="col-span-2">
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
              </div>
            </div>
            <div class="col-span-3 text-center text-sm text-gray-500">08/04/2025</div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Animasi progress ring
    document.addEventListener('DOMContentLoaded', function() {
      const circles = document.querySelectorAll('.progress-ring__circle');
      circles.forEach(circle => {
        const radius = circle.r.baseVal.value;
        const circumference = radius * 2 * Math.PI;
        const percent = parseIntcircle.getAttribute('stroke-dasharray').split(' ')[0];
        
        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        circle.style.strokeDashoffset = circumference - (percent / 100) * circumference;
      });
    });
  </script>
</body>
</html>
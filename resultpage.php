<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Kuis - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex min-h-screen">
    
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
    <main class="flex-1 overflow-y-auto">
      <!-- Topbar -->
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

        <?php
        // Simulasi data kuis
        $kuis = [
          ["judul" => "Anatomi Sepeda", "nilai" => 80, "tanggal" => "06/04/2025"],
          ["judul" => "Sistem Penggerak", "nilai" => 85, "tanggal" => "06/04/2025"],
          ["judul" => "Rantai dan Pemeliharaannya", "nilai" => 80, "tanggal" => "07/04/2025"],
          ["judul" => "Sistem Pengereman dan Keselamatan", "nilai" => 90, "tanggal" => "08/04/2025"],
          ["judul" => "Roda dan Ban Sepeda", "nilai" => 95, "tanggal" => "10/04/2025"]
        ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
          <?php foreach ($kuis as $item): ?>
            <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between min-h-[220px]">
              <div class="flex-1 flex flex-col items-center justify-center">
                <p class="text-3xl font-extrabold text-gray-900 leading-none">
                  <?= $item['nilai'] ?><span class="text-sm font-normal text-gray-500">/100</span>
                </p>
                <p class="text-base font-semibold text-gray-800 mt-2 text-center">
                  <?= $item['judul'] ?>
                </p>
              </div>
              <div class="text-sm text-gray-500 mt-4 flex items-center gap-1 justify-center">
                <i class="bi bi-calendar-event"></i> <?= $item['tanggal'] ?>
              </div>
              <button class="bg-blue-800 hover:bg-blue-900 text-white w-full mt-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">
                Review
              </button>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </main>
  </div>
</body>
</html>

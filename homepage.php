<!-- index.php -->
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
          <a href="#" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-house-door"></i> Beranda
          </a>
          <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-book"></i> Kursus
          </a>
          <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
    <main class="flex-1 p-6 overflow-y-auto">
      <!-- Header -->
      <div class="top-dashboard">
        <div class="left-section">
          <img src="foto-ajuy.jpg" alt="Ajuy Sutiyo" class="profile-img">
          <div class="greeting">
            <h2>Selamat Pagi, <strong>Ajuy Sutiyo</strong></h2>
            <p>Hari ini adalah hari ke-7 pelatihanmu</p>
            <button class="btn-akun">Buka Akun Kamu &gt;</button>
          </div>
        </div>
        <div class="right-section">
          <div class="stat-box">
            <div class="icon">📖</div>
            <div><strong>2/16</strong><br><span>Kursus</span></div>
          </div>
          <div class="stat-box">
            <div class="icon">📈</div>
            <div><strong>4/7</strong><br><span>Kuis</span></div>
          </div>
        </div>
      </div>

      <!-- Kartu Kursus -->
      <h3 class="text-lg font-bold mb-2">Kursus</h3>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <?php
        $kursus = [
          ["judul" => "Pengenalan Sepeda", "materi" => 3, "kuis" => 1],
          ["judul" => "Sistem Penggerak", "materi" => 4, "kuis" => 2],
          ["judul" => "Sistem Pengereman dan Keselamatan", "materi" => 3, "kuis" => 1],
          ["judul" => "Sistem Suspensi dan Kenyamanan Berkendara", "materi" => 2, "kuis" => 1],
        ];
        $no = 1;
        foreach ($kursus as $k) {
          echo "
            <div class='bg-white p-4 rounded-lg shadow'>
              <div class='text-sm text-right mb-1'>#{$no}</div>
              <h4 class='font-bold mb-2'>{$k['judul']}</h4>
              <p class='text-sm text-gray-500'>📄 {$k['materi']} Materi</p>
              <p class='text-sm text-gray-500'>🧪 {$k['kuis']} Kuis</p>
              <button class='mt-2 bg-blue-700 text-white px-4 py-1 rounded'>Lihat</button>
            </div>
          ";
          $no++;
        }
        ?>
      </div>

      <!-- Hasil Kuis -->
      <h3 class="text-lg font-bold mb-2">Hasil Kuis Kamu</h3>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <?php
        $kuis = [
          ["judul" => "Anatomi Sepeda", "skor" => 80, "tanggal" => "06/04/2025"],
          ["judul" => "Sistem Penggerak", "skor" => 85, "tanggal" => "06/04/2025"],
          ["judul" => "Rantai dan Pemeliharaannya", "skor" => 80, "tanggal" => "07/04/2025"],
          ["judul" => "Sistem Pengereman dan Keselamatan", "skor" => 90, "tanggal" => "08/04/2025"],
        ];
        foreach ($kuis as $k) {
          echo "
            <div class='bg-white p-4 rounded-lg shadow'>
              <div class='text-xl font-bold'>{$k['skor']}/100</div>
              <p class='text-sm'>{$k['judul']}</p>
              <p class='text-xs text-gray-500'>{$k['tanggal']}</p>
              <button class='mt-2 bg-blue-700 text-white px-4 py-1 rounded'>Review</button>
            </div>
          ";
        }
        ?>
      </div>
    </main>
  </div>
</body>
</html>

<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
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

    <div class="content">
  <div class="header">
    <div class="greeting">
      <h2>Selamat Pagi, Ajuy Sutiyo</h2>
      <p>Hari ini adalah hari ke-7 pelatihanmu</p>
      <a href="#" class="btn-cta">Buka Akun Kamu ></a>
    </div>
    <div class="stats">
      <div class="stat-box">📚<br> 2/16<br>Kursus</div>
      <div class="stat-box">📈<br> 4/7<br>Kuis</div>
    </div>
  </div>

  <div class="section">
    <h3>Kursus</h3>
    <div class="card-container">
      <div class="course-card">
        <h4>Pengenalan Sepeda</h4>
        <p>📄 3 Materi | 📝 1 Kuis</p>
        <a href="#">Lihat</a>
      </div>
      <!-- Tambahkan card lainnya -->
    </div>
  </div>

  <div class="section">
    <h3>Hasil Kuis Kamu</h3>
    <div class="card-container">
      <div class="quiz-card">
        <h4>80/100</h4>
        <p>Anatomi Sepeda</p>
        <p>📅 06/04/2025</p>
        <a href="#">Review</a>
      </div>
      <!-- Tambahkan card lainnya -->
    </div>
  </div>
</div>

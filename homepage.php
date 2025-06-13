<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-60 bg-blue-900 text-white p-4">
      <div class="text-2xl font-bold mb-10">🚲 JAGO SEPEDA</div>
      <nav class="space-y-4">
        <a href="#" class="block px-4 py-2 bg-white/10 rounded">🏠 Beranda</a>
        <a href="#" class="block px-4 py-2 hover:bg-white/10 rounded">📘 Kursus</a>
        <a href="#" class="block px-4 py-2 hover:bg-white/10 rounded">📝 Hasil Kuis</a>
        <a href="#" class="block px-4 py-2 hover:bg-white/10 rounded">👤 Profil</a>
        <a href="#" class="block px-4 py-2 hover:bg-white/10 rounded">⚙️ Pengaturan</a>
        <a href="#" class="block px-4 py-2 hover:bg-red-600 rounded">🚪 Keluar</a>
      </nav>
    </aside>

    <!-- Konten Utama -->
    <main class="flex-1 p-6">
      <!-- Header -->
      <div class="bg-white rounded-lg p-6 mb-6 shadow flex justify-between items-center">
        <div>
          <h2 class="text-xl font-bold">Selamat Pagi, Ajuy Sutiyo</h2>
          <p class="text-gray-500">Hari ini adalah hari ke-7 pelatihanmu</p>
          <a href="#" class="text-blue-600 text-sm underline">Buka Akun Kamu</a>
        </div>
        <div class="text-center">
          <p class="font-semibold">📚 2/16 Kursus</p>
          <p class="font-semibold">🧠 4/7 Kuis</p>
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

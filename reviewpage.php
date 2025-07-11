<?php
// Simulasi data soal untuk tampilan review
$judulKuis = $_GET['judul'] ?? 'Sistem Suspensi dan Kenyamanan Berkendara';
$nilai = 80;
$jumlahSoal = 15;
$benar = 12;
$salah = 3;

// Simulasi daftar jawaban
$jawaban = [
  [
    "pertanyaan" => "Seorang pengendara sepeda gunung aktif ...",
    "pilihan" => [
      "Rear shock coil", 
      "Dropper seatpost", 
      "Suspensi rigid", 
      "Seatpost konvensional"
    ],
    "jawaban_benar" => "Dropper seatpost",
    "jawaban_user" => "Dropper seatpost"
  ],
  [
    "pertanyaan" => "Seorang pelanggan pemula menanyakan alasan ...",
    "pilihan" => [
      "Agar sepeda tetap terlihat seimbang secara visual", 
      "Untuk memastikan performa suspensi optimal dalam menyerap guncangan sesuai beban", 
      "Supaya sepeda lebih ringan saat dikayuh"
    ],
    "jawaban_benar" => "Untuk memastikan performa suspensi optimal dalam menyerap guncangan sesuai beban",
    "jawaban_user" => "Untuk memastikan performa suspensi optimal dalam menyerap guncangan sesuai beban"
  ],
  // Tambah soal lainnya...
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Review Kuis - <?= htmlspecialchars($judulKuis) ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
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
          <a href="resultpage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-bar-chart-line"></i> Hasil Kuis
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
    <main class="flex-1 p-6 space-y-6">
      <h2 class="text-2xl font-bold mb-4">Hasil Kuis</h2>

      <!-- Bagian Kanan -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-4">
          <?php foreach ($jawaban as $soal): ?>
            <div class="bg-white p-4 rounded-lg shadow">
              <p class="font-medium mb-3">Pertanyaan</p>
              <p class="mb-4"><?= htmlspecialchars($soal['pertanyaan']) ?></p>
              <div class="space-y-2">
                <?php foreach ($soal['pilihan'] as $opsi): 
                  $isBenar = $opsi === $soal['jawaban_benar'];
                  $isJawabanUser = $opsi === $soal['jawaban_user'];
                  $warna = $isBenar ? 'bg-green-500 text-white' : ($isJawabanUser ? 'bg-gray-300' : 'bg-gray-200');
                ?>
                  <div class="px-4 py-2 rounded <?= $warna ?>">
                    <?= htmlspecialchars($opsi) ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Ringkasan Kanan -->
        <div class="bg-white p-6 rounded-lg shadow h-fit">
          <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($judulKuis) ?></h3>
          <p class="text-lg font-semibold">Nilai <span class="text-black"><?= $nilai ?></span></p>
          <p class="text-sm text-gray-600 mb-4">Terjawab <?= $jumlahSoal ?>/<?= $jumlahSoal ?></p>

          <div class="grid grid-cols-5 gap-2 mb-4">
            <?php for ($i = 1; $i <= $jumlahSoal; $i++): ?>
              <?php $warna = $i > $benar ? 'bg-red-500' : 'bg-green-500'; ?>
              <div class="<?= $warna ?> text-white text-sm font-semibold rounded-full w-8 h-8 flex items-center justify-center">
                <?= $i ?>
              </div>
            <?php endfor; ?>
          </div>

          <div class="flex items-center gap-2 text-sm">
            <span class="w-3 h-3 bg-red-500 rounded-full inline-block"></span> <?= $salah ?> soal
            <span class="ml-4 w-3 h-3 bg-green-500 rounded-full inline-block"></span> <?= $benar ?> soal
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>

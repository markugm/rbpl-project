<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pusat Pelaporan - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
  <!-- Header -->
  <div class="bg-white shadow-sm p-4 flex justify-between items-center border-b">
    <div class="text-xl font-semibold text-center w-full">Pusat Pelaporan</div>
    <div class="absolute right-6 flex items-center gap-3">
      <div class="text-right hidden sm:block">
        <p class="font-semibold text-gray-900">Ajuy Sutiyo</p>
        <p class="text-sm text-gray-500">Pegawai Training</p>
      </div>
      <img src="foto-ajuy.jpg" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover" />
    </div>
  </div>

  <!-- Konten Utama -->
  <div class="p-8 max-w-5xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 mb-2">Buat Laporan</h1>
    <p class="text-gray-700 mb-6">Laporkan permasalahan yang kamu temukan pada web JagoPedia</p>

    <div class="bg-gray-200 rounded-lg p-6">
      <!-- Progress -->
      <div class="flex justify-center items-center gap-4 mb-6">
        <div class="flex flex-col items-center">
          <div class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center font-bold">1</div>
          <p class="text-xs text-center mt-1">Kategori</p>
        </div>
        <div class="h-px w-10 bg-gray-400"></div>
        <div class="flex flex-col items-center">
          <div class="w-8 h-8 rounded-full border-2 border-blue-900 text-blue-900 flex items-center justify-center font-bold">2</div>
          <p class="text-xs text-center mt-1">Identitas</p>
        </div>
        <div class="h-px w-10 bg-gray-400"></div>
        <div class="flex flex-col items-center">
          <div class="w-8 h-8 rounded-full border-2 border-blue-900 text-blue-900 flex items-center justify-center font-bold">3</div>
          <p class="text-xs text-center mt-1">Detail</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
        <!-- Pertanyaan -->
        <div>
          <p class="text-xl font-semibold text-gray-800">Adakah yang dapat kami bantu?</p>
        </div>

        <!-- Pilihan Kategori -->
        <div class="space-y-2">
          <label class="flex items-center justify-between bg-white p-3 rounded shadow-sm hover:bg-gray-50 cursor-pointer">
            <span class="flex items-center gap-2">
              <input type="radio" name="kategori" class="accent-blue-900" />
              Masalah Teknis
            </span>
            <i class="bi bi-chevron-right text-gray-400"></i>
          </label>
          <label class="flex items-center justify-between bg-white p-3 rounded shadow-sm hover:bg-gray-50 cursor-pointer">
            <span class="flex items-center gap-2">
              <input type="radio" name="kategori" class="accent-blue-900" />
              Masalah Konten
            </span>
            <i class="bi bi-chevron-right text-gray-400"></i>
          </label>
          <label class="flex items-center justify-between bg-white p-3 rounded shadow-sm hover:bg-gray-50 cursor-pointer">
            <span class="flex items-center gap-2">
              <input type="radio" name="kategori" class="accent-blue-900" />
              Fitur dan Pengaturan
            </span>
            <i class="bi bi-chevron-right text-gray-400"></i>
          </label>
          <label class="flex items-center justify-between bg-white p-3 rounded shadow-sm hover:bg-gray-50 cursor-pointer">
            <span class="flex items-center gap-2">
              <input type="radio" name="kategori" class="accent-blue-900" />
              Akses dan Akun
            </span>
            <i class="bi bi-chevron-right text-gray-400"></i>
          </label>
          <label class="flex items-center justify-between bg-white p-3 rounded shadow-sm hover:bg-gray-50 cursor-pointer">
            <span class="flex items-center gap-2">
              <input type="radio" name="kategori" class="accent-blue-900" />
              Masukan dan Saran
            </span>
            <i class="bi bi-chevron-right text-gray-400"></i>
          </label>
          <label class="flex items-center justify-between bg-white p-3 rounded shadow-sm hover:bg-gray-50 cursor-pointer">
            <span class="flex items-center gap-2">
              <input type="radio" name="kategori" class="accent-blue-900" />
              Lainnya
            </span>
            <i class="bi bi-chevron-right text-gray-400"></i>
          </label>
        </div>
      </div>

      <!-- Tombol Navigasi -->
      <div class="flex justify-end gap-4 mt-6">
        <a href="homepage.php" class="bg-blue-900 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-800">Batalkan</a>
        <a href="#" class="bg-blue-900 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-800">Selanjutnya</a>
      </div>
    </div>
  </div>
</body>
</html>

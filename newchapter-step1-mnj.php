<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Bab Baru - Langkah 1</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white p-6 font-sans">
  <div class="max-w-xl mx-auto">
    <div class="text-xl font-bold mb-4">Bab Baru</div>
    <p class="text-sm text-gray-600 mb-2">Kursus > Bab Baru > Tambah Bab Baru</p>

    <form action="newchapter-step2.php" method="post">
      <div class="border rounded-xl p-4 bg-gray-100 mb-6">
        <input name="judul_bab" type="text" placeholder="Masukkan judul Bab ..." class="w-full bg-white p-2 rounded mb-3" required>

        <textarea name="deskripsi_bab" rows="4" maxlength="200" class="w-full bg-white p-2 rounded" placeholder="Tuliskan penjelasan singkat ..." required></textarea>

        <div class="text-right text-sm text-gray-500 mt-1">Max 200 karakter</div>
      </div>
      <div class="text-right">
        <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded">Lanjut</button>
      </div>
    </form>
  </div>
</body>
</html>

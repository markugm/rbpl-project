<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Login - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="relative min-h-screen flex items-center justify-center bg-gray-100">
  <!-- Background -->
  <div class="absolute inset-0">
    <img src="toko-sepeda.jpeg" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-white bg-opacity-70"></div>
  </div>

  <!-- Login Card -->
  <div class="relative z-10 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg w-full max-w-md p-8">
    <div class="flex flex-col items-center mb-6">
      <img src="jago-sepeda.jpeg" alt="Jago Sepeda" class="h-24 mb-3" />
      <h1 class="text-2xl font-semibold text-blue-900">Masuk Akun</h1>
      <p class="text-gray-600 text-sm">Silakan login untuk melanjutkan</p>
    </div>

    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') : ?>
      <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm text-center">
        Email atau kata sandi salah!
      </div>
    <?php endif; ?>

    <form method="POST" action="checklogin.php" class="space-y-4">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required class="mt-1 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email">
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
        <input type="password" id="password" name="password" required class="mt-1 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan kata sandi">
      </div>
      <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded transition">
        Masuk
      </button>
    </form>

    <p class="mt-6 text-xs text-gray-500 text-center">© 2025 Jago Sepeda</p>
  </div>
</body>
</html>

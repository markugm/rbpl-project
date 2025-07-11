<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'manager') {
    header("Location: loginpage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Manajer - Jago Sepeda</title>
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
          <a href="homepage-mnj.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-house-door"></i> Beranda
          </a>
          <a href="coursepage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-book"></i> Kursus
          </a>
          <a href="resultpage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-bar-chart-line"></i> Progres
          </a>
          <a href="profilepage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-person"></i> Profil
          </a>
        </nav>
      </div>
      <div class="space-y-2">
        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
          <i class="bi bi-gear"></i> Pengaturan
        </a>
        <a href="logoutpage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
          <i class="bi bi-box-arrow-right"></i> Keluar
        </a>
      </div>
    </aside>

    <!-- Konten Utama -->
    <main class="flex-1 overflow-y-auto">
      <!-- Top Bar -->
      <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
        <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="toggleSidebar()">
          <i class="bi bi-list"></i>
        </button>
        <div class="flex items-center gap-4">
          <div class="flex items-center gap-3">
            <div class="text-right">
              <p class="font-semibold text-gray-900">Jamal Mulyadi</p>
              <p class="text-sm text-gray-500">Manajer</p>
            </div>
            <img src="foto-jamal.jpg" alt="Jamal Mulyadi" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover">
          </div>
        </div>
      </div>

      <!-- Konten -->
      <div class="p-6">
        <!-- Header -->
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 flex flex-col md:flex-row justify-between items-center gap-6 mb-6">
          <div class="flex items-center gap-4">
            <img src="foto-jamal.jpg" alt="Jamal Mulyadi" class="w-20 h-20 rounded-full border-4 border-blue-700" />
            <div>
              <h2 class="text-xl font-bold">Selamat Pagi, Jamal Mulyadi</h2>
              <p class="text-gray-600">Hari ini mau melakukan apa?</p>
              <a href="profilepage-mnj.php" class="mt-2 text-sm text-blue-800 border border-blue-800 px-3 py-1 rounded hover:bg-blue-50 transition">
                Buka Akun Kamu &gt;
              </a>
            </div>
          </div>
          <a href="create-chapter.php" class="flex items-center gap-2 bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">
            <i class="bi bi-plus-circle"></i> Bab Baru
          </a>
        </div>

        <!-- Bagian Kursus -->
        <div class="max-w-6xl mx-auto p-4 bg-white rounded-xl shadow mb-6">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Kursus</h2>
            <a href="coursepage-mnj.php" class="text-blue-700 text-sm hover:underline">Selengkapnya &gt;</a>
          </div>
          <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"></div>
        </div>

        <!-- Bagian Progres Pegawai -->
        <div class="max-w-6xl mx-auto p-4 bg-white rounded-xl shadow">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Progres</h2>
            <a href="resultpage-mnj.php" class="text-blue-700 text-sm hover:underline">Selengkapnya &gt;</a>
          </div>
          <div id="daftarProgres" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"></div>
        </div>
      </div>

      <script>
        const kursusList = [
          { judul: "Pengenalan Sepeda", tugas: 3, edit: "6 hari lalu" },
          { judul: "Sistem Penggerak", tugas: 2, edit: "6 hari lalu" },
          { judul: "Sistem Pengereman dan Keselamatan", tugas: 3, edit: "6 hari lalu" },
          { judul: "Sistem Suspensi dan Kenyamanan Berkendara", tugas: 4, edit: "5 hari lalu" },
        ];

        const progresList = [
          { nama: "Ajuy Sutiyo", tanggal: "06/04/2025", foto: "foto-ajuy.jpg" },
          { nama: "Tegar Adi", tanggal: "06/04/2025", foto: "foto-tegar.jpg" },
        ];

        const kursusContainer = document.getElementById("daftarKursus");
        const progresContainer = document.getElementById("daftarProgres");

        kursusList.forEach((item, index) => {
            kursusContainer.innerHTML += `
                <div class="border rounded-lg p-4 shadow-sm flex flex-col">
                <div class="relative h-24 bg-gray-100 rounded mb-3">
                    <span class="absolute top-2 right-2 bg-black text-white text-sm px-2 py-1 rounded-full">#${index + 1}</span>
                </div>
                <h3 class="font-semibold text-sm mb-2">${item.judul}</h3>
                <!-- Wrapper ini yang akan terdorong ke bawah -->
                <div class="mt-auto flex flex-col gap-2">
                    <button class="w-full bg-blue-700 text-white text-sm py-1 rounded hover:bg-blue-800 transition">
                    ${item.tugas} Ditugaskan
                    </button>
                    <div class="text-xs text-gray-600">
                    Diedit ${item.edit}
                    </div>
                </div>
                </div>
            `;
        });


        progresList.forEach((item) => {
          progresContainer.innerHTML += `
            <div class="border rounded-lg p-4 shadow-sm flex items-center gap-3">
              <img src="${item.foto}" alt="${item.nama}" class="w-10 h-10 rounded-full object-cover">
              <div>
                <p class="font-semibold">${item.nama}</p>
                <div class="flex items-center text-gray-500 text-sm">
                  <i class="bi bi-calendar mr-1"></i> ${item.tanggal}
                </div>
                <a href="#" class="text-blue-700 text-sm mt-1 inline-block">Lihat</a>
              </div>
            </div>
          `;
        });
      </script>
      <footer class="border-t text-center text-sm text-gray-600 py-4 mt-6">
        Copyright © <a href="https://jagosepeda.com" class="hover:underline text-blue-700">jagosepeda.com</a> 2025
      </footer>
    </main>
  </div>
</body>
</html>

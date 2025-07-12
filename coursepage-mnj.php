<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Kursus - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-60 bg-blue-900 text-white flex flex-col justify-between p-4">
      <div>
        <div class="text-2xl font-bold mb-10 text-center">🚲 JAGO SEPEDA</div>
        <nav class="space-y-2">
          <a href="homepage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
            <i class="bi bi-house-door"></i> Beranda
          </a>
          <a href="coursepage-mnj.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
            <i class="bi bi-book"></i> Kursus
          </a>
          <a href="progresspage-mnj.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
        <button class="text-gray-700 hover:text-blue-700 text-xl">
          <i class="bi bi-list"></i>
        </button>
        <div class="flex items-center gap-4">
          <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="window.location.href='reportpage-mnj.php'">
            <i class="bi bi-megaphone"></i>
          </button>
          <div class="flex items-center gap-3">
            <div class="text-right">
              <p class="font-semibold text-gray-900">Jamal Mulyadi</p>
              <p class="text-sm text-gray-500">Manajer</p>
            </div>
            <img src="foto-jamal.jpg" alt="Jamal Mulyadi" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover" />
          </div>
        </div>
      </div>

      <!-- Konten Kursus -->
      <div class="px-6 py-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-2xl font-bold">Kursus</h2>
          <button onclick="openModalStep1()" class="flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition">
            <i class="bi bi-plus-circle"></i> Bab Baru
          </button>
        </div>
        <div class="flex gap-4 mb-6 border-b border-gray-300">
          <button class="pb-2 px-4 text-sm font-medium text-black border-b-2 border-black focus:outline-none">Semua</button>
          <button class="pb-2 px-4 text-sm font-medium text-gray-400 border-b-2 border-transparent focus:outline-none">Tuntas</button>
        </div>

        <!-- Daftar Kursus -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <!-- Kartu Kursus -->
          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#1</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Pengenalan Sepeda</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Jenis-jenis Sepeda • Anatomi Sepeda • Ukuran dan Geometri Sepeda</p>
                  <p class="text-xs text-gray-500">3 Materi | 1 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#2</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Sistem Penggerak</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Crankset dan Bottom Bracket • Casette dan Freewheel • Derailleur dan Shifter</p>
                  <p class="text-xs text-gray-500">4 Materi | 2 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#3</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Sistem Pengereman dan Keselamatan</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Jenis-jenis Rem Sepeda • Cara Kerja dan Perawatan Rem • Aksesori Keselamatan</p>
                  <p class="text-xs text-gray-500">3 Materi | 1 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#4</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Sistem Suspensi dan Kenyamanan Berkendara</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Suspensi Depan dan Belakang • Sadel dan Seatposts</p>
                  <p class="text-xs text-gray-500">0 Materi | 0 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>

          <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-gray-100">
            <div class="flex gap-4 flex-1">
              <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#5</div>
              </div>
              <div class="flex-1 flex flex-col justify-between overflow-hidden">
                <div>
                  <h3 class="font-semibold text-sm mb-1 truncate">Roda dan Ban Sepeda</h3>
                  <p class="text-xs leading-snug mb-2 line-clamp-2">Wheelset dan Hubs • Ban dan Tekanan Udara</p>
                  <p class="text-xs text-gray-500">2 Materi | 1 Kuis</p>
                </div>
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded mt-2 w-fit">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Modal Step 1 -->
  <div id="modalStep1" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 hidden">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-2xl relative">
      <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 text-xl">&times;</button>
      <h2 class="text-xl font-bold mb-1">Bab Baru</h2>
      <p class="text-sm text-gray-500 mb-4">Kursus > Bab Baru > Tambah Bab Baru</p>

      <form id="formStep1" onsubmit="return gotoStep2(event)">
        <div class="border rounded-xl p-4 bg-gray-100 mb-6">
          <input name="judul_bab" type="text" placeholder="Masukkan judul Bab ..." class="w-full bg-white p-2 rounded mb-3" required>
          <textarea name="deskripsi_bab" rows="3" maxlength="200" class="w-full bg-white p-2 rounded" placeholder="Tuliskan penjelasan singkat ..." required></textarea>
          <div class="text-right text-sm text-gray-500 mt-1">Max 200 karakter</div>
        </div>
        <div class="text-right">
          <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded">Lanjut</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Step 2 -->
  <div id="modalStep2" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 hidden">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-2xl relative">
      <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 text-xl">&times;</button>
      <h2 class="text-xl font-bold mb-1">Bab Baru</h2>
      <p class="text-sm text-gray-500 mb-4">Kursus > Bab Baru > Ringkasan</p>

      <div class="border rounded-xl p-4 bg-gray-100 mb-6">
        <p class="text-sm font-semibold mb-2">Bab <span id="previewJudul"></span></p>
        <p class="text-sm text-gray-600 mb-4" id="previewDeskripsi"></p>
        <div class="flex gap-4">
          <button onclick="openModalUploadPDF()" class="bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded">PDF</button>
          <button onclick="openModalUploadVideo()" class="bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded">Video</button>
          <button onclick="window.location.href='newquiz-mnj.php'" class="bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded">Kuis</button>
        </div>
      </div>
      <div class="text-right">
        <button onclick="closeModal()" class="text-sm px-4 py-2 mr-2 rounded border border-gray-400 text-gray-600">Batal</button>
      </div>
    </div>
  </div>

  <!-- Modal Upload PDF -->
  <div id="modalUploadPDF" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 hidden">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-xl relative">
      <button onclick="closeModalUploadPDF()" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 text-xl">&times;</button>
      <h2 class="text-xl font-bold mb-1">Unggah Materi PDF</h2>
      <p class="text-sm text-gray-500 mb-4">Tambahkan materi berformat PDF untuk bab ini.</p>

      <form action="#" method="post" enctype="multipart/form-data">
        <div class="space-y-3">
          <input type="text" name="judul_pdf" placeholder="Judul materi PDF" class="w-full bg-white border border-gray-300 rounded p-2" required>
          <input type="file" name="file_pdf" accept="application/pdf" class="w-full bg-white border border-gray-300 rounded p-2" required>
        </div>
        <div class="text-right mt-4">
          <button type="button" onclick="closeModalUploadPDF()" class="text-sm px-4 py-2 mr-2 rounded border border-gray-400 text-gray-600">Batal</button>
          <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded text-sm">Unggah</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Upload Video -->
  <div id="modalUploadVideo" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 hidden">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-xl relative">
      <button onclick="closeModalUploadVideo()" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 text-xl">&times;</button>
      <h2 class="text-xl font-bold mb-1">Tambahkan Materi Video</h2>
      <p class="text-sm text-gray-500 mb-4">Masukkan link video (YouTube, Vimeo, atau lainnya) sebagai materi bab.</p>

      <form action="#" method="post">
        <div class="space-y-3">
          <input type="text" name="judul_video" placeholder="Judul materi video" class="w-full bg-white border border-gray-300 rounded p-2" required>
          <input type="url" name="link_video" placeholder="https://contoh.com/video" class="w-full bg-white border border-gray-300 rounded p-2" required>
        </div>
        <div class="text-right mt-4">
          <button type="button" onclick="closeModalUploadVideo()" class="text-sm px-4 py-2 mr-2 rounded border border-gray-400 text-gray-600">Batal</button>
          <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded text-sm">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function openModalStep1() {
      document.getElementById("modalStep1").classList.remove("hidden");
    }
    function closeModal() {
      document.getElementById("modalStep1").classList.add("hidden");
      document.getElementById("modalStep2").classList.add("hidden");
      document.getElementById("modalUploadPDF").classList.add("hidden");
    }
    function gotoStep2(e) {
      e.preventDefault();
      const judul = e.target.judul_bab.value;
      const deskripsi = e.target.deskripsi_bab.value;
      sessionStorage.setItem("judul_bab", judul);
      sessionStorage.setItem("deskripsi_bab", deskripsi);
      document.getElementById("modalStep1").classList.add("hidden");
      document.getElementById("previewJudul").innerText = judul;
      document.getElementById("previewDeskripsi").innerText = deskripsi;
      document.getElementById("modalStep2").classList.remove("hidden");
      return false;
    }
    function openModalUploadPDF() {
      document.getElementById("modalUploadPDF").classList.remove("hidden");
    }
    function closeModalUploadPDF() {
      document.getElementById("modalUploadPDF").classList.add("hidden");
    }
     function openModalUploadVideo() {
    document.getElementById("modalUploadVideo").classList.remove("hidden");
    }
    function closeModalUploadVideo() {
      document.getElementById("modalUploadVideo").classList.add("hidden");
    }
  </script>
</body>
</html>

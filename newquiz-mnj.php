<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Editor Kuis - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-white">
  <div class="flex h-screen">
    <!-- Sidebar soal -->
    <aside class="w-64 bg-gray-100 border-r p-4 overflow-y-auto">
      <button onclick="tambahPertanyaan()" class="w-full bg-blue-900 text-white py-2 rounded mb-4 flex items-center justify-center gap-2">
        <span class="text-lg">＋</span> Tambah
      </button>
      <div id="daftarPertanyaan" class="space-y-2 text-sm">
        <!-- Daftar soal akan ditambahkan secara dinamis -->
      </div>
    </aside>

    <!-- Konten utama -->
    <main class="flex-1 p-8 overflow-y-auto">
      <div class="flex justify-between items-center mb-6">
        <input type="text" id="judulBab" placeholder="Masukkan judul bab..." class="text-xl font-semibold border border-gray-300 p-2 rounded w-full max-w-lg">
        <button onclick="kembaliKeCourse()" class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800">Simpan</button>
      </div>

      <!-- Editor pertanyaan -->
      <div id="editorPertanyaan" class="hidden bg-white shadow-md rounded-xl p-6">
        <h2 class="font-semibold text-center mb-4" id="judulPertanyaan">Pertanyaan</h2>
        <textarea id="teksPertanyaan" rows="3" class="w-full border border-gray-300 p-3 rounded text-sm mb-6" placeholder="Tulis pertanyaan di sini..."></textarea>
        <div id="opsiJawaban" class="space-y-3">
          <!-- Opsi jawaban pertama -->
          <div class="flex items-center gap-3">
            <input type="radio" name="jawaban" class="accent-blue-900">
            <input type="text" placeholder="Opsi jawaban..." class="flex-1 border border-gray-300 p-2 rounded">
            <button onclick="hapusOpsi(this)" class="text-blue-900 hover:text-red-600 text-lg">&times;</button>
          </div>
        </div>
        <button onclick="tambahOpsi()" class="text-sm text-blue-700 hover:underline mt-3">+ Tambah Opsi Jawaban</button>
      </div>
    </main>
  </div>

  <script>
    let jumlahPertanyaan = 0;
    // Ambil judul bab dari sessionStorage
    const judulBab = sessionStorage.getItem("judul_bab");
    if (judulBab) {
      document.getElementById("judulBab").value = judulBab;
    }
    
    function tambahPertanyaan() {
      jumlahPertanyaan++;
      const daftar = document.getElementById("daftarPertanyaan");
      const tombol = document.createElement("button");
      tombol.className = "block w-full text-left bg-white hover:bg-gray-200 p-2 rounded";
      tombol.textContent = `${jumlahPertanyaan}  Pertanyaan baru`;
      tombol.onclick = () => editPertanyaan(jumlahPertanyaan);
      daftar.appendChild(tombol);

      editPertanyaan(jumlahPertanyaan);
    }

    function editPertanyaan(nomor) {
      document.getElementById("editorPertanyaan").classList.remove("hidden");
      document.getElementById("judulPertanyaan").textContent = `Pertanyaan ${nomor}`;
      document.getElementById("teksPertanyaan").value = "";

      const container = document.getElementById("opsiJawaban");
      container.innerHTML = "";
      tambahOpsi();
    }

    function tambahOpsi() {
      const container = document.getElementById("opsiJawaban");
      const opsi = document.createElement("div");
      opsi.className = "flex items-center gap-3";
      opsi.innerHTML = `
        <input type="radio" name="jawaban" class="accent-blue-900">
        <input type="text" placeholder="Opsi jawaban..." class="flex-1 border border-gray-300 p-2 rounded">
        <button onclick="hapusOpsi(this)" class="text-blue-900 hover:text-red-600 text-lg">&times;</button>
      `;
      container.appendChild(opsi);
    }

    function hapusOpsi(el) {
      el.parentElement.remove();
    }

    function kembaliKeCourse() {
      window.location.href = "coursepage-mnj.php";
    }
  </script>
</body>
</html>

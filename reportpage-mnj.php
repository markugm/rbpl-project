<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Buat Laporan - Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    summary::-webkit-details-marker {
      display: none;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Header -->
  <div class="bg-white shadow-sm p-4 flex justify-between items-center border-b">
    <div class="text-xl font-semibold text-center w-full">Pusat Pelaporan</div>
    <div class="absolute right-6 flex items-center gap-3">
      <div class="text-right hidden sm:block">
        <p class="font-semibold text-gray-900">Jamal Mulyadi</p>
        <p class="text-sm text-gray-500">Manajer</p>
      </div>
      <img src="foto-jamal.jpg" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover" />
    </div>
  </div>

  <!-- Konten Utama -->
  <div class="p-8 max-w-5xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 mb-2">Buat Laporan</h1>
    <p class="text-gray-700 mb-6">Laporkan permasalahan yang kamu temukan pada web JagoPedia</p>

    <form id="reportForm" onsubmit="return false;">
      <div class="bg-gray-200 rounded-lg p-6">
        <!-- Progress -->
        <div class="flex justify-center items-center gap-4 mb-6">
          <template id="step-template">
            <div class="flex flex-col items-center">
              <div class="w-8 h-8 rounded-full bg-gray-400 text-white flex items-center justify-center font-bold step-circle">1</div>
              <p class="text-xs text-center mt-1 step-label">Langkah</p>
            </div>
          </template>
          <div id="steps" class="flex justify-center items-center gap-4"></div>
        </div>

        <!-- STEP 1: KATEGORI -->
        <div id="step-1" class="step-section">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div>
              <p class="text-xl font-semibold text-gray-800">Adakah yang dapat kami bantu?</p>
            </div>
            <div class="space-y-3">
              <details class="group bg-white p-3 rounded shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center list-none">
                  <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="kategori[]" value="Masalah Teknis" class="accent-blue-900" />
                    Masalah Teknis
                  </label>
                  <i class="bi bi-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <ul class="mt-2 ml-6 text-sm text-gray-600 list-disc">
                  <li>Tidak bisa login / logout</li>
                  <li>Halaman tidak bisa diakses</li>
                  <li>Error saat mengakses kursus</li>
                  <li>Bug pada form atau navigasi</li>
                </ul>
              </details>

              <details class="group bg-white p-3 rounded shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center list-none">
                  <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="kategori[]" value="Masalah Konten" class="accent-blue-900" />
                    Masalah Konten
                  </label>
                  <i class="bi bi-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <ul class="mt-2 ml-6 text-sm text-gray-600 list-disc">
                  <li>Materi salah atau tidak relevan</li>
                  <li>Video/audio tidak bisa diputar</li>
                  <li>Gambar/ilustrasi rusak</li>
                  <li>Modul tidak lengkap</li>
                </ul>
              </details>

              <details class="group bg-white p-3 rounded shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center list-none">
                  <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="kategori[]" value="Fitur dan Pengaturan" class="accent-blue-900" />
                    Fitur dan Pengaturan
                  </label>
                  <i class="bi bi-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <ul class="mt-2 ml-6 text-sm text-gray-600 list-disc">
                  <li>Kesulitan menggunakan fitur tertentu</li>
                  <li>Progress tidak tersimpan</li>
                  <li>Tidak bisa mengunduh materi</li>
                </ul>
              </details>

              <details class="group bg-white p-3 rounded shadow-sm cursor-pointer">
                <summary class="flex justify-between items-center list-none">
                  <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="kategori[]" value="Akses dan Akun" class="accent-blue-900" />
                    Akses dan Akun
                  </label>
                  <i class="bi bi-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <ul class="mt-2 ml-6 text-sm text-gray-600 list-disc">
                  <li>Tidak bisa login / logout</li>
                  <li>Halaman tidak bisa diakses</li>
                  <li>Error saat mengakses kursus</li>
                  <li>Bug pada form atau navigasi</li>
                </ul>
              </details>

              <label class="flex items-center gap-2 bg-white p-3 rounded shadow-sm cursor-pointer">
                <input type="checkbox" name="kategori[]" value="Masukan dan Saran" class="accent-blue-900" />
                Masukan dan Saran
              </label>

              <label class="flex items-center gap-2 bg-white p-3 rounded shadow-sm cursor-pointer">
                <input type="checkbox" name="kategori[]" value="Lainnya" class="accent-blue-900" />
                Lainnya
              </label>
            </div>
          </div>
        </div>

        <!-- STEP 2: IDENTITAS -->
        <div id="step-2" class="step-section hidden">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block font-semibold mb-1">Nama Lengkap</label>
              <input type="text" name="nama" class="w-full rounded-md px-3 py-2 text-sm border border-gray-300" value="Jamal Mulyadi" required>
            </div>
            <div>
              <label class="block font-semibold mb-1">Telepon</label>
              <input type="text" name="telepon" class="w-full rounded-md px-3 py-2 text-sm border border-gray-300" value="080000000001" required>
            </div>
            <div class="md:col-span-2">
              <label class="block font-semibold mb-1">Email</label>
              <input type="email" name="email" class="w-full rounded-md px-3 py-2 text-sm border border-gray-300" value="jamal.mulyadi@gmail.com" required>
            </div>
          </div>
        </div>

        <!-- STEP 3: DETAIL -->
        <div id="step-3" class="step-section hidden">
          <div class="space-y-4">
            <div>
              <label class="block font-semibold mb-1">Judul</label>
              <input type="text" name="judul" class="w-full rounded-md px-3 py-2 text-sm border border-gray-300" placeholder="Masukkan Judul" required>
            </div>
            <div>
              <label class="block font-semibold mb-1">Deskripsi</label>
              <textarea name="deskripsi" rows="5" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm" placeholder="Deskripsi..." required></textarea>
            </div>
            <div>
              <label for="gambar" class="flex items-center gap-2 text-blue-800 cursor-pointer">
                <i class="bi bi-image fs-5"></i>
                <span class="underline">Unggah Gambar</span>
              </label>
              <input type="file" name="gambar" id="gambar" class="hidden" accept="image/*">
            </div>
          </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between mt-6">
          <button type="button" id="backBtn" class="bg-blue-900 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-800">Batalkan</button>
          <button type="button" id="nextBtn" class="bg-blue-900 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-800">Selanjutnya</button>
        </div>
      </div>
    </form>
  </div>

  <div id="popupSuccess" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-8 max-w-md text-center">
      <div class="text-green-600 text-3xl mb-2"><i class="bi bi-check-circle-fill"></i></div>
      <h2 class="text-xl font-bold mb-2">Laporan Telah Berhasil Dikirim</h2>
      <p class="mb-6 text-gray-700">Terima kasih atas partisipasi Anda dalam menjaga kualitas layanan JagoPedia</p>
      <div class="flex justify-between">
        <a href="#" onclick="resetForm()" class="text-blue-900 font-medium">&lt; Buat Laporan</a>
        <a href="homepage-mnj.php" class="text-blue-900 font-medium">Kembali &gt;</a>
      </div>
    </div>
  </div>

  <script>
    const steps = ['Kategori', 'Identitas', 'Detail'];
    let currentStep = 1;

    const stepsEl = document.getElementById('steps');
    steps.forEach((label, i) => {
      const template = document.getElementById('step-template').content.cloneNode(true);
      template.querySelector('.step-circle').textContent = i + 1;
      template.querySelector('.step-label').textContent = label;
      template.querySelector('.step-circle').classList.add(i === 0 ? 'bg-blue-900' : 'bg-gray-400');
      stepsEl.appendChild(template);
      if (i < steps.length - 1) {
        const line = document.createElement('div');
        line.className = 'h-px w-10 bg-gray-400';
        stepsEl.appendChild(line);
      }
    });

    function updateSteps() {
      document.querySelectorAll('.step-section').forEach((section, i) => {
        section.classList.toggle('hidden', i + 1 !== currentStep);
      });
      document.querySelectorAll('.step-circle').forEach((circle, i) => {
        circle.classList.toggle('bg-blue-900', i + 1 === currentStep);
        circle.classList.toggle('bg-gray-400', i + 1 !== currentStep);
      });

      document.getElementById('backBtn').textContent = currentStep === 1 ? "Batalkan" : "Sebelumnya";
      document.getElementById('nextBtn').textContent = currentStep === steps.length ? "Kirim" : "Selanjutnya";
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
      if (currentStep < steps.length) {
        currentStep++;
        updateSteps();
      } else {
       document.getElementById('popupSuccess').classList.remove('hidden');
      }
    });

    document.getElementById('backBtn').addEventListener('click', () => {
      if (currentStep === 1) {
        window.location.href = "homepage.php";
      } else {
        currentStep--;
        updateSteps();
      }
    });

    updateSteps();
  </script>

    <script>
    function resetForm() {
        document.getElementById('reportForm').reset();
        currentStep = 1;
        updateSteps();
        document.getElementById('popupSuccess').classList.add('hidden');
    }
    </script>

</body>
</html>

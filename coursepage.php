<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jago Sepeda Course</title>
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
                    <a href="homepage.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                    <a href="coursepage.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
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

    <!-- Konten Utama -->
    <main class="flex-1 overflow-y-auto relative">
        <!-- TOP BAR -->
        <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
            <!-- Kiri: Hamburger Menu -->
            <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <!-- Kanan: Megaphone + Profil -->
            <div class="flex items-center gap-4">
                <!-- Tombol Megaphone -->
                <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="alert('Notifikasi atau pengumuman di sini')">
                    <i class="bi bi-megaphone"></i>
                </button>
                <!-- Info Pengguna -->
                <div class="flex items-center gap-3">
                    <div class="text-right">
                    <p class="font-semibold text-gray-900">Ajuy Sutiyo</p>
                    <p class="text-sm text-gray-500">Pegawai Training</p>
                    </div>
                    <img src="foto-ajuy.jpg" alt="Ajuy Sutiyo" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover">
                </div>
            </div>
        </div>

        <!-- Side Panel Detail Kursus -->
        <div id="panelDetail" class="fixed right-0 top-0 h-full w-[400px] bg-white shadow-xl p-6 transition-transform transform translate-x-full z-50">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-lg" id="judulDetail">Judul Kursus</h3>
                <button onclick="tutupPanel()"><i class="bi bi-x text-xl"></i></button>
            </div>
            <ol class="space-y-6 text-sm" id="materiList">
                <!-- Materi akan diisi secara dinamis -->
            </ol>
        </div>

        <!-- Overlay -->
        <div id="overlayDetail" class="fixed inset-0 bg-black/30 z-40 hidden" onclick="tutupPanel()"></div>

        <!-- KONTEN KURSUS -->
        <div class="px-6 py-6">
            <h2 class="text-2xl font-bold mb-4">Kursus</h2>
            <div class="flex gap-4 mb-6 border-b border-gray-300">
                <button id="btnSemua" class="pb-2 px-4 text-sm font-medium text-gray-600 hover:text-blue-800 border-b-2 border-transparent focus:outline-none transition">Semua</button>
                <button id="btnTuntas" class="pb-2 px-4 text-sm font-medium text-gray-600 hover:text-blue-800 border-b-2 border-transparent focus:outline-none transition">Tuntas</button>
            </div>

            <!-- Cards -->
            <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>
            <script>
                // Data Kursus (diperbarui dengan contoh pertanyaan kuis)
                const kursusList = [
                    { 
                        judul: "Sistem Suspensi dan Kenyamanan Berkendara", 
                        deskripsi: "Suspensi Depan dan Belakang • Sadel dan Seatposts", 
                        materi: 2, 
                        kuis: 1, 
                        tuntas: false, 
                        materiTuntas: 0,
                        materiDetail: [
                            { 
                                type: "video", 
                                judul: "Suspensi Depan dan Belakang", 
                                content: "https://youtube.com/embed/abc123" 
                            },
                            { 
                                type: "kuis", 
                                judul: "Kuis Sistem Suspensi", 
                                content: "kuis_suspensi",
                                totalQuestions: 15,
                                questions: [
                                    {
                                        question: "Seorang pelanggan pemula menanyakan alasan mengapa suspensi perlu disesuaikan berdasarkan berat badan pengendara. Perjelasan yang paling tepat secara teknis adalah...",
                                        options: [
                                            "Agar sepeda tetap terlihat seimbang secara visual",
                                            "Untuk memastikan performa suspensi optimal dalam menyerap guncangan sesuai beban",
                                            "Supaya sepeda lebih ringan saat dikayuh",
                                            "Karena semua suspensi sudah memiliki pengaturan standar pabrik yang tidak perlu diubah"
                                        ],
                                        answer: 1
                                    }
                                ]
                            }
                        ]
                    }
                    // Data kursus lainnya...
                ];

                // Variabel untuk kuis
                let currentKuis = null;
                let currentQuestionIndex = 0;

                // Fungsi bukaMateri yang diperbarui (tambahkan parameter indexKursus)
                function bukaMateri(type, content, judul, indexKursus) {
                    if (type === 'video') {
                        window.open(content, '_blank');
                    } else if (type === 'dokumen') {
                        window.open(content, '_blank');
                    } else if (type === 'kuis') {
                        // Dapatkan data kuis lengkap
                        const [kursusIdx, materiIdx] = indexKursus.split('-').map(Number);
                        currentKuis = kursusList[kursusIdx].materiDetail[materiIdx];
                        currentQuestionIndex = 0;
                        
                        // Tampilkan modal kuis
                        tampilkanModalKuis();
                    }
                }

                // Fungsi untuk menampilkan modal kuis (BARU)
                function tampilkanModalKuis() {
                    const question = currentKuis.questions[currentQuestionIndex];
                    
                    const modalHTML = `
                    <div id="kuisModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                        <div class="bg-white rounded-lg p-6 w-full max-w-2xl mx-4">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-bold">${currentKuis.judul}</h3>
                                <button onclick="tutupModalKuis()" class="text-gray-500 hover:text-gray-700">
                                    <i class="bi bi-x"></i>
                                </button>
                            </div>
                            
                            <div class="mb-6">
                                <p class="text-sm text-gray-600 mb-2">${currentKuis.totalQuestions} Soal • 0 Terjawab</p>
                                <p class="font-medium">${question.question}</p>
                            </div>
                            
                            <div class="space-y-3 mb-6">
                                ${question.options.map((option, idx) => `
                                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="quizOption" value="${idx}" class="form-radio h-4 w-4 text-blue-600">
                                        <span>${option}</span>
                                    </label>
                                `).join('')}
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                    ${Array.from({length: currentKuis.totalQuestions}, (_, i) => `
                                        <span class="w-6 h-6 flex items-center justify-center text-xs border rounded 
                                            ${i === currentQuestionIndex ? 'bg-blue-900 text-white border-blue-900' : 'bg-white border-gray-300'}">
                                            ${i + 1}
                                        </span>
                                    `).join('')}
                                </div>
                                
                                <div class="flex gap-2">
                                    <button onclick="tutupModalKuis()" class="px-4 py-2 text-gray-600 hover:text-gray-800">
                                        Batalkan
                                    </button>
                                    <button onclick="selanjutnyaPertanyaan()" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded">
                                        ${currentQuestionIndex === currentKuis.questions.length - 1 ? 'Selesai' : 'Selanjutnya'}
                                    </button>
                                </div>
                            </div>
                            
                            <div class="mt-6 pt-4 border-t text-sm text-gray-500 flex justify-between">
                                <span>Ajuy Sutiyo</span>
                                <span>Pegawai Training</span>
                            </div>
                        </div>
                    </div>
                    `;
                    
                    document.body.insertAdjacentHTML('beforeend', modalHTML);
                }

                // Fungsi untuk pertanyaan selanjutnya (BARU)
                function selanjutnyaPertanyaan() {
                    if (currentQuestionIndex < currentKuis.questions.length - 1) {
                        currentQuestionIndex++;
                        document.getElementById('kuisModal').remove();
                        tampilkanModalKuis();
                    } else {
                        alert('Kuis selesai!');
                        tutupModalKuis();
                    }
                }

                // Fungsi untuk menutup modal kuis (BARU)
                function tutupModalKuis() {
                    const modal = document.getElementById('kuisModal');
                    if (modal) modal.remove();
                }

                // Pada fungsi bukaPanel, update bagian render materi (perubahan kecil):
                function bukaPanel(judul, index) {
                    document.getElementById('judulDetail').textContent = judul;
                    const kursus = kursusList[index];
                    
                    materiList.innerHTML = '';
                    
                    kursus.materiDetail.forEach((materi, idx) => {
                        materiList.innerHTML += `
                            <li class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-100 cursor-pointer" 
                                onclick="bukaMateri('${materi.type}', '${materi.content}', '${materi.judul}', '${index}-${idx}')">
                                <span class="w-6 h-6 rounded-full bg-blue-900 text-white flex items-center justify-center text-xs font-bold">${idx + 1}</span>
                                <div>
                                    <p class="font-semibold capitalize">${materi.type}</p>
                                    <p>${materi.judul}</p>
                                </div>
                                <i class="bi bi-chevron-right text-gray-400 ml-auto"></i>
                            </li>
                        `;
                    });
                    
                    document.getElementById('panelDetail').classList.remove('translate-x-full');
                    document.getElementById('overlayDetail').classList.remove('hidden');
                }
            </script>
        </div>
    </main>
</div>
</body>
</html>
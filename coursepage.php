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

        <!-- Modal Kuis -->
        <div id="kuisModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg p-6 w-full max-w-2xl mx-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold" id="kuisTitle">Kuis Sistem Suspensi</h3>
                    <button onclick="tutupModalKuis()" class="text-gray-500 hover:text-gray-700">
                        <i class="bi bi-x"></i>
                    </button>
                </div>
                
                <div class="mb-6">
                    <p class="text-sm text-gray-600 mb-2" id="kuisInfo">15 Soal • 0 Terjawab</p>
                    <p class="font-medium" id="kuisQuestion">Pertanyaan akan muncul di sini</p>
                </div>
                
                <div class="space-y-3 mb-6" id="optionsContainer">
                    <!-- Opsi jawaban akan diisi dinamis -->
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex flex-wrap gap-1" id="questionNumbers">
                        <!-- Nomor soal akan diisi dinamis -->
                    </div>
                    
                    <div class="flex gap-2">
                        <button onclick="tutupModalKuis()" class="px-4 py-2 text-gray-600 hover:text-gray-800">
                            Batalkan
                        </button>
                        <button onclick="selanjutnyaPertanyaan()" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded">
                            Selanjutnya
                        </button>
                    </div>
                </div>
                
                <div class="mt-6 pt-4 border-t text-sm text-gray-500 flex justify-between">
                    <span>Ajuy Sutiyo</span>
                    <span>Pegawai Training</span>
                </div>
            </div>
        </div>

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
                const kursusList = [
                    { 
                        judul: "Pengenalan Sepeda", 
                        deskripsi: "Jenis-jenis Sepeda • Anatomi Sepeda • Ukuran dan Geometri Sepeda", 
                        materi: 3, 
                        kuis: 1, 
                        tuntas: true, 
                        materiTuntas: 3,
                        materiDetail: [
                            { 
                                type: "video", 
                                judul: "Pengenalan Sepeda", 
                                content: "https://www.youtube.com/embed/VIDEO_ID_1" 
                            },
                            { 
                                type: "video", 
                                judul: "Anatomi Sepeda", 
                                content: "https://www.youtube.com/embed/VIDEO_ID_2" 
                            },
                            { 
                                type: "dokumen", 
                                judul: "Panduan Ukuran Sepeda", 
                                content: "panduan_ukuran.pdf" 
                            },
                            { 
                                type: "kuis", 
                                judul: "Kuis Pengenalan Sepeda", 
                                questions: [
                                    {
                                        question: "Apa jenis sepeda yang cocok untuk medan off-road?",
                                        options: ["Sepeda Balap", "Sepeda Gunung", "Sepeda Kota"],
                                        answer: 1
                                    }
                                ]
                            }
                        ]
                    },
                    { 
                        judul: "Sistem Suspensi dan Kenyamanan Berkendara", 
                        deskripsi: "Suspensi Depan dan Belakang • Sadel dan Seatposts", 
                        materi: 3, 
                        kuis: 1, 
                        tuntas: false, 
                        materiTuntas: 0,
                        materiDetail: [
                            { 
                                type: "video", 
                                judul: "Suspensi Depan dan Belakang", 
                                content: "https://www.youtube.com/embed/VIDEO_ID_4" 
                            },
                            { 
                                type: "video", 
                                judul: "Sadel dan Seatposts", 
                                content: "https://www.youtube.com/embed/VIDEO_ID_5" 
                            },
                            { 
                                type: "dokumen", 
                                judul: "Panduan Sadel", 
                                content: "panduan_sadel.pdf" 
                            },
                            { 
                                type: "kuis", 
                                judul: "Kuis Sistem Suspensi dan Kenyamanan Berkendara", 
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
                ];

                const btnSemua = document.getElementById('btnSemua');
                const btnTuntas = document.getElementById('btnTuntas');
                const daftarKursus = document.getElementById('daftarKursus');
                const materiList = document.getElementById('materiList');
                
                // Variabel untuk kuis
                let currentKuis = null;
                let currentQuestionIndex = 0;
                let currentKursusIndex = -1;
                let currentMateriIndex = -1;

                function renderKursus(filter) {
                    daftarKursus.innerHTML = '';
                    kursusList
                        .filter(k => {
                            if(filter === 'tuntas') {
                                return k.materiTuntas > 0;
                            }
                            return true;
                        })
                        .forEach((item, index) => {
                            const isTuntasFilter = filter === 'tuntas';
                            daftarKursus.innerHTML += `
                                <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] ${isTuntasFilter ? 'bg-gray-200 text-gray-600' : 'bg-gray-100'}">
                                    <div class="flex gap-4 flex-1">
                                        <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                                            <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#${index + 1}</div>
                                        </div>
                                        <div class="flex-1 flex flex-col justify-between overflow-hidden">
                                            <div class="overflow-hidden">
                                                <h3 class="font-semibold text-sm mb-1 truncate w-full">${item.judul}</h3>
                                                <p class="text-xs leading-snug mb-2 line-clamp-2">${item.deskripsi}</p>
                                                <p class="text-xs ${isTuntasFilter ? 'text-gray-500' : 'text-gray-500'}">
                                                    ${isTuntasFilter ? `${item.materiTuntas} dari ${item.materi} Materi Dituntaskan` : `${item.materi} Materi | ${item.kuis} Kuis`}
                                                </p>
                                            </div>
                                            <button onclick="bukaPanel('${item.judul}', ${index})" class="${isTuntasFilter ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-900 hover:bg-blue-800'} text-white text-sm px-4 py-1 rounded transition mt-2 w-fit" ${isTuntasFilter ? 'disabled' : ''}>
                                                Mulai
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                }

                function bukaPanel(judul, index) {
                    currentKursusIndex = index;
                    document.getElementById('judulDetail').textContent = judul;
                    const kursus = kursusList[index];
                    
                    // Kosongkan daftar materi
                    materiList.innerHTML = '';
                    
                    // Isi daftar materi
                    kursus.materiDetail.forEach((materi, idx) => {
                        const icon = materi.type === 'video' ? 'bi-play-circle' : 
                                     materi.type === 'dokumen' ? 'bi-file-text' : 
                                     'bi-question-circle';
                        
                        materiList.innerHTML += `
                            <li class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-100 cursor-pointer" 
                                onclick="bukaMateri('${materi.type}', ${index}, ${idx}, '${materi.judul}')">
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

                function bukaMateri(type, kursusIndex, materiIndex, judul) {
                    currentMateriIndex = materiIndex;
                    
                    if (type === 'video') {
                        // Buka video YouTube di tab baru
                        window.open(kursusList[kursusIndex].materiDetail[materiIndex].content, '_blank');
                    } else if (type === 'dokumen') {
                        // Buka PDF di tab baru
                        window.open(kursusList[kursusIndex].materiDetail[materiIndex].content, '_blank');
                    } else if (type === 'kuis') {
                        // Tampilkan modal kuis
                        currentKuis = kursusList[kursusIndex].materiDetail[materiIndex];
                        currentQuestionIndex = 0;
                        tampilkanModalKuis();
                    }
                }

                function tampilkanModalKuis() {
                    const question = currentKuis.questions[currentQuestionIndex];
                    
                    document.getElementById('kuisTitle').textContent = currentKuis.judul;
                    document.getElementById('kuisInfo').textContent = `${currentKuis.questions.length} Soal • ${currentQuestionIndex} Terjawab`;
                    document.getElementById('kuisQuestion').textContent = question.question;
                    
                    // Isi opsi jawaban
                    const optionsContainer = document.getElementById('optionsContainer');
                    optionsContainer.innerHTML = '';
                    question.options.forEach((option, idx) => {
                        optionsContainer.innerHTML += `
                            <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="quizOption" value="${idx}" class="form-radio h-4 w-4 text-blue-600">
                                <span>${option}</span>
                            </label>
                        `;
                    });
                    
                    // Isi nomor soal
                    const questionNumbers = document.getElementById('questionNumbers');
                    questionNumbers.innerHTML = '';
                    currentKuis.questions.forEach((_, idx) => {
                        questionNumbers.innerHTML += `
                            <span class="w-6 h-6 flex items-center justify-center text-xs border rounded 
                                ${idx === currentQuestionIndex ? 'bg-blue-900 text-white border-blue-900' : 'bg-white border-gray-300'}">
                                ${idx + 1}
                            </span>
                        `;
                    });
                    
                    // Update tombol selanjutnya jika pertanyaan terakhir
                    const nextBtn = document.querySelector('#kuisModal button:last-child');
                    if (currentQuestionIndex === currentKuis.questions.length - 1) {
                        nextBtn.textContent = 'Selesai';
                    } else {
                        nextBtn.textContent = 'Selanjutnya';
                    }
                    
                    // Tampilkan modal
                    document.getElementById('kuisModal').classList.remove('hidden');
                }

                function selanjutnyaPertanyaan() {
                    if (currentQuestionIndex < currentKuis.questions.length - 1) {
                        currentQuestionIndex++;
                        tampilkanModalKuis();
                    } else {
                        // Kuis selesai
                        alert('Kuis telah selesai!');
                        tutupModalKuis();
                    }
                }

                function tutupModalKuis() {
                    document.getElementById('kuisModal').classList.add('hidden');
                }

                function tutupPanel() {
                    document.getElementById('panelDetail').classList.add('translate-x-full');
                    document.getElementById('overlayDetail').classList.add('hidden');
                }

                function setTab(active) {
                    if(active === 'semua') {
                        btnSemua.classList.add('font-semibold', 'border-b-2', 'border-black', 'text-black');
                        btnSemua.classList.remove('text-gray-400');
                        btnTuntas.classList.remove('font-semibold', 'border-b-2', 'border-black', 'text-black');
                        btnTuntas.classList.add('text-gray-400');
                    } else {
                        btnTuntas.classList.add('font-semibold', 'border-b-2', 'border-black', 'text-black');
                        btnTuntas.classList.remove('text-gray-400');
                        btnSemua.classList.remove('font-semibold', 'border-b-2', 'border-black', 'text-black');
                        btnSemua.classList.add('text-gray-400');
                    }
                }

                btnSemua.onclick = () => {
                    setTab('semua');
                    renderKursus('semua');
                };

                btnTuntas.onclick = () => {
                    setTab('tuntas');
                    renderKursus('tuntas');
                };

                // Inisialisasi awal
                setTab('semua');
                renderKursus('semua');

                function toggleSidebar() {
                    alert('Sidebar toggle logic bisa ditambahkan di sini');
                }
            </script>
        </div>
    </main>
</div>
</body>
</html>
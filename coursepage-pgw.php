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
                    <a href="homepage-pgw.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                    <a href="coursepage-pgw.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold">
                        <i class="bi bi-book"></i> Kursus
                    </a>
                    <a href="resultpage-pgw.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-bar-chart-line"></i> Hasil Kuis
                    </a>
                    <a href="profilepage-pgw.php" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                        <i class="bi bi-person"></i> Profil
                    </a>
                </nav>
            </div>
            <div class="space-y-2">
                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
                <i class="bi bi-gear"></i> Pengaturan
                </a>
                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded">
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
                    <button class="text-gray-700 hover:text-blue-700 text-xl" onclick="window.location.href='reportpage.php'">
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
                                    questions: [] 
                                }
                            ]
                        },
                        { 
                            judul: "Sistem Penggerak", 
                            deskripsi: "Crankset dan Bottom Bracket • Casette dan Freewheel • Derailleur dan Shifter", 
                            materi: 4, 
                            kuis: 1, 
                            tuntas: true, 
                            materiTuntas: 2,
                            materiDetail: [
                                { 
                                    type: "video", 
                                    judul: "Sistem Penggerak", 
                                    content: "https://www.youtube.com/embed/VIDEO_ID_3" 
                                },
                                { 
                                    type: "dokumen", 
                                    judul: "Panduan Perawatan Rantai", 
                                    content: "perawatan_rantai.pdf" 
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
                                    questions: [] 
                                }
                            ]
                        },
                        { 
                            judul: "Sistem Pengereman dan Keselamatan", 
                            deskripsi: "Jenis-jenis Rem Sepeda • Cara Kerja dan Perawatan Rem • Aksesori Keselamatan", 
                            materi: 4, 
                            kuis: 1, 
                            tuntas: true, 
                            materiTuntas: 2,
                            materiDetail: [
                                { 
                                    type: "video", 
                                    judul: "Sistem Pengereman dan Keselamatan", 
                                    content: "https://www.youtube.com/embed/VIDEO_ID_3" 
                                },
                                { 
                                    type: "dokumen", 
                                    judul: "Sistem Pengereman dan Keselamatan", 
                                    content: "perawatan_rantai.pdf" 
                                },
                                { 
                                    type: "kuis", 
                                    judul: "Sistem Pengereman dan Keselamatan", 
                                    questions: [] 
                                }
                            ]
                        },
                        { 
                            judul: "Roda dan Ban Sepeda", 
                            deskripsi: "Wheelset dan Hubs • Ban dan Tekanan Udara • Perawatan Roda", 
                            materi: 3, 
                            kuis: 1, 
                            tuntas: false, 
                            materiTuntas: 0,
                            materiDetail: [
                                { 
                                    type: "video", 
                                    judul: "Wheelset dan Hubs", 
                                    content: "https://www.youtube.com/embed/VIDEO_ID_6" 
                                },
                                { 
                                    type: "dokumen", 
                                    judul: "Ban dan Tekanan Udara", 
                                    content: "panduan_perawatan.pdf" 
                                },
                                { 
                                    type: "kuis", 
                                    judul: "Kuis Roda dan Ban Sepeda", 
                                    questions: [] 
                                }
                            ]
                        }
                    ];

                    const btnSemua = document.getElementById('btnSemua');
                    const btnTuntas = document.getElementById('btnTuntas');
                    const daftarKursus = document.getElementById('daftarKursus');
                    const materiList = document.getElementById('materiList');

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
                                    onclick="bukaMateri('${materi.type}', '${materi.content}', '${materi.judul}')">
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

                    function bukaMateri(type, content, judul) {
                        if (type === 'video') {
                            // Buka video YouTube di tab baru
                            window.open(content, '_blank');
                        } else if (type === 'dokumen') {
                            // Buka PDF di tab baru (asumsi content adalah URL/lokasi file PDF)
                            window.open(content, '_blank');
                        } else if (type === 'kuis') {
                            // Tampilkan kuis (bisa diimplementasikan sesuai kebutuhan)
                            alert(`Membuka kuis: ${judul}`);
                        }
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

            <!-- Kuis -->
            <div id="kuisContainer" class="hidden px-6 py-6">
                <div class="bg-white rounded-xl shadow p-6 max-w-3xl mx-auto">
                    <h2 class="text-2xl font-bold mb-6" id="judulKuis">Sistem Suspensi dan Kenyamanan Berkendara</h2>
                    
                    <div class="mb-8">
                        <p class="font-semibold mb-4">Pertanyaan <span id="nomorPertanyaan">1</span></p>
                        <p id="pertanyaanKuis">Seorang pengendara sepeda gunung aktif yang sering melalui lintasan turunan curam menginginkan efisiensi saat berganti posisi duduk secara cepat tanpa menghentikan laju sepeda. Komponen yang paling sesuai untuk memenuhi kebutuhan tersebut adalah...</p>
                        
                        <div class="mt-6 space-y-3" id="opsiJawaban">
                            <!-- Opsi jawaban akan diisi secara dinamis -->
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                        <button onclick="tutupKuis()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">Batal</button>
                        <button onclick="kirimKuis()" class="px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition">Lanjut</button>
                    </div>
                </div>
            </div>

            <!-- Popup Hasil Kuis -->
            <div id="popupHasil" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-xl p-6 max-w-sm w-full mx-4">
                    <div class="text-center">
                        <h3 class="text-xl font-bold mb-1">Hasil Kuis</h3>
                        <p class="text-lg mb-4">Skor Anda:</p>
                        
                        <div class="bg-blue-50 rounded-lg p-4 mb-5">
                            <p class="font-semibold text-blue-800" id="hasilSkor">
                                Anda menjawab benar 0 dari 0 pertanyaan
                            </p>
                        </div>
                        
                        <button onclick="tutupPopupHasil()" class="px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition w-full">
                            Selesai
                        </button>
                    </div>
                </div>
            </div>

            <script>
                // Data kuis
                const kuisData = {
                    judul: "Sistem Suspensi dan Kenyamanan Berkendara",
                    pertanyaan: [
                        {
                            pertanyaan: "Seorang pengendara sepeda gunung aktif yang sering melalui lintasan turunan curam menginginkan efisiensi saat berganti posisi duduk secara cepat tanpa menghentikan laju sepeda. Komponen yang paling sesuai untuk memenuhi kebutuhan tersebut adalah...",
                            opsi: [
                                "Rear shock coil",
                                "Dropper seatpost",
                                "Suspensi rigid",
                                "Seatpost konvensional"
                            ],
                            jawabanBenar: 1 // Index dimulai dari 0
                        },
                        {
                            pertanyaan: "Fungsi utama dari suspensi depan (fork suspension) pada sepeda gunung adalah...",
                            opsi: [
                                "Meningkatkan kecepatan maksimal sepeda",
                                "Menyerap guncangan dari permukaan jalan",
                                "Mengurangi berat total sepeda",
                                "Mempercantik tampilan sepeda"
                            ],
                            jawabanBenar: 1
                        },
                        {
                            pertanyaan: "Komponen suspensi yang memungkinkan pengendara mengatur kekakuan suspensi sesuai berat badan dan preferensi berkendara disebut...",
                            opsi: [
                                "Preload adjuster",
                                "Lockout lever",
                                "Rebound damper",
                                "Air spring"
                            ],
                            jawabanBenar: 0
                        },
                        {
                            pertanyaan: "Apa keuntungan utama menggunakan dropper seatpost dibanding seatpost konvensional?",
                            opsi: [
                                "Lebih murah dan mudah dipasang",
                                "Memungkinkan perubahan tinggi sadel tanpa turun dari sepeda",
                                "Lebih ringan dari seatpost konvensional",
                                "Tidak memerlukan perawatan khusus"
                            ],
                            jawabanBenar: 1
                        },
                        {
                            pertanyaan: "Sistem suspensi full-suspension pada sepeda gunung memiliki kelebihan utama yaitu...",
                            opsi: [
                                "Lebih murah dibanding hardtail",
                                "Lebih ringan karena menggunakan material khusus",
                                "Kenyamanan dan traksi yang lebih baik di medan kasar",
                                "Tidak memerlukan perawatan berkala"
                            ],
                            jawabanBenar: 2
                        }
                    ],
                    jawabanUser: [],
                    pertanyaanAktif: 0
                };

                // Fungsi untuk menampilkan kuis
                function bukaKuis() {
                    // Tutup sidebar detail jika terbuka
                    tutupPanel();
                    
                    // Sembunyikan konten kursus dan tampilkan kuis
                    document.querySelector('.px-6.py-6').classList.add('hidden');
                    document.getElementById('kuisContainer').classList.remove('hidden');
                    
                    // Tampilkan pertanyaan pertama
                    tampilkanPertanyaan(0);
                }

                function tampilkanPertanyaan(index) {
                    const pertanyaan = kuisData.pertanyaan[index];
                    kuisData.pertanyaanAktif = index;
                    
                    // Update nomor pertanyaan
                    document.getElementById('nomorPertanyaan').textContent = `${index + 1}/${kuisData.pertanyaan.length}`;
                    
                    // Set pertanyaan
                    document.getElementById('pertanyaanKuis').textContent = pertanyaan.pertanyaan;
                    
                    // Set opsi jawaban
                    const opsiContainer = document.getElementById('opsiJawaban');
                    opsiContainer.innerHTML = '';
                    
                    pertanyaan.opsi.forEach((opsi, i) => {
                        const isChecked = kuisData.jawabanUser[index] === i ? 'checked' : '';
                        opsiContainer.innerHTML += `
                            <div class="flex items-center gap-3 p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                <input type="radio" name="jawaban" id="jawaban${i}" value="${i}" ${isChecked} class="w-4 h-4">
                                <label for="jawaban${i}" class="cursor-pointer flex-1">${opsi}</label>
                            </div>
                        `;
                    });
                }

                function tutupKuis() {
                    document.querySelector('.px-6.py-6').classList.remove('hidden');
                    document.getElementById('kuisContainer').classList.add('hidden');
                    kuisData.jawabanUser = [];
                    kuisData.pertanyaanAktif = 0;
                }

                function kirimKuis() {
                    const jawabanTerpilih = document.querySelector('input[name="jawaban"]:checked');
                    if (!jawabanTerpilih) {
                        alert('Silakan pilih jawaban terlebih dahulu');
                        return;
                    }

                    kuisData.jawabanUser[kuisData.pertanyaanAktif] = parseInt(jawabanTerpilih.value);

                    // Jika masih ada pertanyaan selanjutnya
                    if (kuisData.pertanyaanAktif < kuisData.pertanyaan.length - 1) {
                        tampilkanPertanyaan(kuisData.pertanyaanAktif + 1);
                    } else {
                        tampilkanHasilKuis();
                    }
                }

                function tampilkanHasilKuis() {
                // Hitung jawaban benar
                let jawabanBenar = 0;
                kuisData.pertanyaan.forEach((pertanyaan, index) => {
                    if (kuisData.jawabanUser[index] === pertanyaan.jawabanBenar) {
                        jawabanBenar++;
                    }
                });

                // Update skor
                document.getElementById('hasilSkor').textContent = 
                    `Anda menjawab benar ${jawabanBenar} dari ${kuisData.pertanyaan.length} pertanyaan`;

                // Tutup kuis dan tampilkan popup hasil
                tutupKuis();
                document.getElementById('popupHasil').classList.remove('hidden');
            }

                function tutupPopupHasil() {
                    document.getElementById('popupHasil').classList.add('hidden');
                }

                // Modifikasi fungsi bukaMateri untuk menangani kuis
                function bukaMateri(type, content, judul) {
                    if (type === 'video') {
                        window.open(content, '_blank');
                    } else if (type === 'dokumen') {
                        window.open(content, '_blank');
                    } else if (type === 'kuis') {
                        bukaKuis();
                    }
                }
            </script>
        </main>
    </div>
</body>
</html>
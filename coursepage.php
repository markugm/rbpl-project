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

        <!-- Breadcrumb -->
        <div class="px-6 pt-4 pb-2 flex items-center text-sm text-gray-600" id="breadcrumb">
            <a href="coursepage.php" class="hover:text-blue-800">Kursus</a>
            <span class="mx-2">/</span>
            <span id="currentCourse">Semua Kursus</span>
        </div>

        <!-- Side Panel Detail Kursus -->
        <div id="panelDetail" class="fixed right-0 top-0 h-full w-[400px] bg-white shadow-xl p-6 transition-transform transform translate-x-full z-50 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-lg" id="judulDetail">Judul Kursus</h3>
                <button onclick="tutupPanel()"><i class="bi bi-x text-xl"></i></button>
            </div>
            
            <!-- Progress Bar -->
            <div class="mb-6">
                <div class="flex justify-between text-sm mb-1">
                    <span>Progress</span>
                    <span id="progressPercentage">0%</span>
                </div>
                <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
                    <div id="progressFill" class="h-full bg-blue-900 transition-all duration-300" style="width: 0%"></div>
                </div>
            </div>
            
            <ol class="space-y-4 text-sm" id="materiList">
                <!-- Materi akan diisi secara dinamis -->
            </ol>
        </div>

        <!-- Overlay -->
        <div id="overlayDetail" class="fixed inset-0 bg-black/30 z-40 hidden" onclick="tutupPanel()"></div>

        <!-- KONTEN KURSUS -->
        <div class="px-6 py-4" id="mainContent">
            <h2 class="text-2xl font-bold mb-4">Kursus</h2>
            <div class="flex gap-4 mb-6 border-b border-gray-300">
                <button id="btnSemua" class="pb-2 px-4 text-sm font-medium text-blue-800 border-b-2 border-blue-800 focus:outline-none">Semua</button>
                <button id="btnTuntas" class="pb-2 px-4 text-sm font-medium text-gray-600 hover:text-blue-800 border-b-2 border-transparent focus:outline-none">Tuntas</button>
            </div>

            <!-- Cards -->
            <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>
            
            <!-- Konten Materi (akan muncul ketika materi dipilih) -->
            <div id="materiContent" class="hidden">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-lg" id="materiTitle">Judul Materi</h3>
                        <button onclick="kembaliKeDaftarMateri()" class="text-blue-800 hover:text-blue-600">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </button>
                    </div>
                    
                    <div id="videoContent" class="hidden mb-6">
                        <div class="aspect-w-16 aspect-h-9 bg-black rounded-lg overflow-hidden">
                            <!-- Video akan ditampilkan di sini -->
                            <div class="w-full h-full flex items-center justify-center text-white">
                                <i class="bi bi-play-circle text-5xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded flex items-center gap-2">
                                <i class="bi bi-check-circle"></i> Tandai Selesai
                            </button>
                        </div>
                    </div>
                    
                    <div id="dokumenContent" class="hidden mb-6">
                        <div class="border border-gray-200 rounded-lg p-4 flex flex-col items-center">
                            <i class="bi bi-file-earmark-pdf text-5xl text-red-500 mb-2"></i>
                            <p class="text-sm text-gray-600 mb-4">Dokumen PDF</p>
                            <button class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded flex items-center gap-2">
                                <i class="bi bi-download"></i> Unduh Dokumen
                            </button>
                        </div>
                        <div class="mt-4">
                            <button class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded flex items-center gap-2">
                                <i class="bi bi-check-circle"></i> Tandai Selesai
                            </button>
                        </div>
                    </div>
                    
                    <div id="kuisContent" class="hidden">
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h4 class="font-semibold mb-4">Kuis: <span id="kuisTitle"></span></h4>
                            <div class="space-y-4">
                                <!-- Pertanyaan kuis akan ditampilkan di sini -->
                                <div class="bg-white p-4 rounded shadow">
                                    <p class="font-medium mb-2">1. Apa fungsi utama suspensi depan pada sepeda?</p>
                                    <div class="space-y-2">
                                        <label class="flex items-center gap-2">
                                            <input type="radio" name="quiz1" class="form-radio">
                                            <span>Meningkatkan kecepatan</span>
                                        </label>
                                        <label class="flex items-center gap-2">
                                            <input type="radio" name="quiz1" class="form-radio">
                                            <span>Menyerap guncangan</span>
                                        </label>
                                        <label class="flex items-center gap-2">
                                            <input type="radio" name="quiz1" class="form-radio">
                                            <span>Mempercantik tampilan</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-6 bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded w-full">
                                Kirim Jawaban
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Data Kursus
    const kursusList = [
        { 
            id: 1,
            judul: "Pengenalan Sepeda", 
            deskripsi: "Jenis-Jenis Sepeda • Anatomi Sepeda • Ukuran dan Geometri Sepeda", 
            materi: 3, 
            kuis: 1, 
            tuntas: false,
            materiTuntas: 1,
            materiDetail: [
                { type: "video", judul: "Jenis-Jenis Sepeda", selesai: true, content: "video_jenis_sepeda.mp4" },
                { type: "dokumen", judul: "Anatomi Sepeda", selesai: false, content: "anatomi_sepeda.pdf" },
                { type: "video", judul: "Ukuran dan Geometri Sepeda", selesai: false, content: "ukuran_geometri.mp4" },
                { type: "kuis", judul: "Kuis Pengenalan Sepeda", selesai: false, questions: [
                    { question: "Apa jenis sepeda yang cocok untuk medan off-road?", options: ["Sepeda Balap", "Sepeda Gunung", "Sepeda Kota"], answer: 1 }
                ]}
            ]
        },
        { 
            id: 4,
            judul: "Sistem Suspensi dan Kenyamanan Berkendara", 
            deskripsi: "Suspensi Depan dan Belakang • Sadel dan Seatposts", 
            materi: 2, 
            kuis: 1, 
            tuntas: false,
            materiTuntas: 0,
            materiDetail: [
                { type: "video", judul: "Suspensi Depan dan Belakang", selesai: false, content: "suspensi.mp4" },
                { type: "video", judul: "Sadel dan Seatposts", selesai: false, content: "sadel_seatposts.mp4" },
                { type: "dokumen", judul: "Sadel dan Seatposts", selesai: false, content: "sadel_seatposts.pdf" },
                { type: "kuis", judul: "Kuis Sistem Suspensi", selesai: false, questions: [
                    { question: "Apa fungsi utama suspensi depan pada sepeda?", options: ["Meningkatkan kecepatan", "Menyerap guncangan", "Mempercantik tampilan"], answer: 1 },
                    { question: "Bagaimana cara memilih sadel yang tepat?", options: ["Berdasarkan warna", "Berdasarkan kenyamanan dan ukuran tulang duduk", "Berdasarkan merek"], answer: 1 }
                ]}
            ]
        }
    ];

    // State aplikasi
    let currentCourseId = null;
    let currentMateriIndex = null;

    // Elemen DOM
    const btnSemua = document.getElementById('btnSemua');
    const btnTuntas = document.getElementById('btnTuntas');
    const daftarKursus = document.getElementById('daftarKursus');
    const mainContent = document.getElementById('mainContent');
    const materiContent = document.getElementById('materiContent');
    const breadcrumb = document.getElementById('breadcrumb');
    const currentCourseSpan = document.getElementById('currentCourse');

    // Render daftar kursus
    function renderKursus(filter) {
        daftarKursus.innerHTML = '';
        kursusList
            .filter(k => {
                if(filter === 'tuntas') {
                    return k.materiTuntas > 0;
                }
                return true;
            })
            .forEach((item) => {
                const progressPercentage = item.materi > 0 ? Math.round((item.materiTuntas / item.materi) * 100) : 0;
                const isTuntas = item.materiTuntas === item.materi;
                
                daftarKursus.innerHTML += `
                    <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] bg-white hover:shadow-md transition-all duration-200">
                        <div class="flex gap-4 flex-1">
                            <div class="w-1/4 bg-gray-100 aspect-[3/4] rounded-md flex items-center justify-center">
                                <i class="bi bi-book text-2xl text-blue-900"></i>
                            </div>
                            <div class="flex-1 flex flex-col justify-between overflow-hidden">
                                <div class="overflow-hidden">
                                    <h3 class="font-semibold text-sm mb-1">${item.judul}</h3>
                                    <p class="text-xs text-gray-600 line-clamp-3 mb-2">${item.deskripsi}</p>
                                    <div class="flex justify-between text-xs text-gray-500">
                                        <span>${item.materi} Materi • ${item.kuis} Kuis</span>
                                        ${isTuntas ? '<span class="text-green-600 font-medium">Tuntas</span>' : ''}
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>Progress</span>
                                        <span>${progressPercentage}%</span>
                                    </div>
                                    <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-blue-900" style="width: ${progressPercentage}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="bukaPanel(${item.id})" class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-4 py-1 rounded transition mt-2 w-full">
                            ${isTuntas ? 'Lihat' : 'Mulai'}
                        </button>
                    </div>
                `;
            });
    }

    // Buka panel detail kursus
    function bukaPanel(kursusId) {
        currentCourseId = kursusId;
        const kursus = kursusList.find(k => k.id === kursusId);
        if (!kursus) return;
        
        document.getElementById('judulDetail').textContent = kursus.judul;
        currentCourseSpan.textContent = kursus.judul;
        
        // Hitung progress
        const totalMateri = kursus.materiDetail.filter(m => m.type !== 'kuis').length;
        const materiSelesai = kursus.materiDetail.filter(m => m.selesai && m.type !== 'kuis').length;
        const progressPercentage = totalMateri > 0 ? Math.round((materiSelesai / totalMateri) * 100) : 0;
        
        document.getElementById('progressPercentage').textContent = `${progressPercentage}%`;
        document.getElementById('progressFill').style.width = `${progressPercentage}%`;
        
        // Render materi
        const materiList = document.getElementById('materiList');
        materiList.innerHTML = '';
        
        kursus.materiDetail.forEach((materi, index) => {
            const icon = materi.type === 'video' ? 'bi-play-circle' : 
                         materi.type === 'dokumen' ? 'bi-file-text' : 
                         'bi-question-circle';
            
            materiList.innerHTML += `
                <li class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-100 cursor-pointer ${materi.selesai ? 'opacity-60' : ''}" 
                    onclick="bukaMateri(${kursusId}, ${index})">
                    <span class="w-6 h-6 rounded-full ${materi.selesai ? 'bg-green-500' : 'bg-blue-900'} text-white flex items-center justify-center text-xs font-bold">${index + 1}</span>
                    <div class="flex-1">
                        <p class="font-semibold capitalize">${materi.type}</p>
                        <p>${materi.judul}</p>
                        ${materi.selesai ? '<p class="text-green-600 text-xs mt-1 flex items-center gap-1"><i class="bi bi-check-circle"></i> Selesai</p>' : ''}
                    </div>
                    <i class="bi bi-chevron-right text-gray-400"></i>
                </li>
            `;
        });
        
        document.getElementById('panelDetail').classList.remove('translate-x-full');
        document.getElementById('overlayDetail').classList.remove('hidden');
    }

    // Buka konten materi spesifik
    function bukaMateri(kursusId, materiIndex) {
        currentCourseId = kursusId;
        currentMateriIndex = materiIndex;
        const kursus = kursusList.find(k => k.id === kursusId);
        if (!kursus || !kursus.materiDetail[materiIndex]) return;
        
        const materi = kursus.materiDetail[materiIndex];
        
        // Sembunyikan panel detail dan tampilkan konten materi
        tutupPanel();
        mainContent.classList.add('hidden');
        materiContent.classList.remove('hidden');
        
        // Update breadcrumb
        currentCourseSpan.innerHTML = `Sistem Suspensi dan Kenyamanan Berkendara <span class="mx-2">/</span> ${materi.judul}`;
        
        // Tampilkan konten sesuai jenis materi
        document.getElementById('videoContent').classList.add('hidden');
        document.getElementById('dokumenContent').classList.add('hidden');
        document.getElementById('kuisContent').classList.add('hidden');
        document.getElementById('materiTitle').textContent = materi.judul;
        
        if (materi.type === 'video') {
            document.getElementById('videoContent').classList.remove('hidden');
            // Di sini bisa ditambahkan pemutar video dengan materi.content
        } else if (materi.type === 'dokumen') {
            document.getElementById('dokumenContent').classList.remove('hidden');
        } else if (materi.type === 'kuis') {
            document.getElementById('kuisContent').classList.remove('hidden');
            document.getElementById('kuisTitle').textContent = materi.judul;
            // Render pertanyaan kuis bisa ditambahkan di sini
        }
    }

    // Kembali ke daftar materi
    function kembaliKeDaftarMateri() {
        mainContent.classList.remove('hidden');
        materiContent.classList.add('hidden');
        currentCourseSpan.textContent = "Semua Kursus";
        bukaPanel(currentCourseId);
    }

    // Tutup panel detail
    function tutupPanel() {
        document.getElementById('panelDetail').classList.add('translate-x-full');
        document.getElementById('overlayDetail').classList.add('hidden');
    }

    // Tab functionality
    function setTab(active) {
        if (active === 'semua') {
            btnSemua.classList.add('text-blue-800', 'border-blue-800', 'font-semibold');
            btnSemua.classList.remove('text-gray-600', 'border-transparent', 'font-medium');
            btnTuntas.classList.remove('text-blue-800', 'border-blue-800', 'font-semibold');
            btnTuntas.classList.add('text-gray-600', 'border-transparent', 'font-medium');
        } else {
            btnTuntas.classList.add('text-blue-800', 'border-blue-800', 'font-semibold');
            btnTuntas.classList.remove('text-gray-600', 'border-transparent', 'font-medium');
            btnSemua.classList.remove('text-blue-800', 'border-blue-800', 'font-semibold');
            btnSemua.classList.add('text-gray-600', 'border-transparent', 'font-medium');
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

    function toggleSidebar() {
        alert('Sidebar toggle logic bisa ditambahkan di sini');
    }

    // Inisialisasi awal
    setTab('semua');
    renderKursus('semua');
</script>
</body>
</html>
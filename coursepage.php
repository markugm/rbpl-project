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
            
            <ol class="space-y-6 text-sm" id="materiList">
                <!-- Materi akan diisi secara dinamis -->
            </ol>
            
            <!-- Tombol untuk Manajer -->
            <div id="managerControls" class="mt-8 hidden space-y-2">
                <button class="w-full bg-blue-900 hover:bg-blue-800 text-white py-2 rounded flex items-center justify-center gap-2" onclick="tambahMateri()">
                    <i class="bi bi-plus"></i> Tambah Materi
                </button>
                <button class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 rounded flex items-center justify-center gap-2" onclick="editKursus()">
                    <i class="bi bi-pencil"></i> Edit Kursus
                </button>
            </div>
        </div>

        <!-- Overlay -->
        <div id="overlayDetail" class="fixed inset-0 bg-black/30 z-40 hidden" onclick="tutupPanel()"></div>

        <!-- KONTEN KURSUS -->
        <div class="px-6 py-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Kursus</h2>
                <!-- Tombol untuk Manajer -->
                <button id="btnTambahKursus" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded text-sm hidden flex items-center gap-2" onclick="tambahKursus()">
                    <i class="bi bi-plus"></i> Tambah Kursus
                </button>
            </div>
            
            <div class="flex gap-4 mb-6 border-b border-gray-300">
                <button id="btnSemua" class="pb-2 px-4 text-sm font-medium text-blue-800 border-b-2 border-blue-800 focus:outline-none">Semua</button>
                <button id="btnTuntas" class="pb-2 px-4 text-sm font-medium text-gray-600 hover:text-blue-800 border-b-2 border-transparent focus:outline-none">Tuntas</button>
            </div>

            <!-- Cards -->
            <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>
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
                { type: "video", judul: "Jenis-Jenis Sepeda", selesai: true },
                { type: "dokumen", judul: "Anatomi Sepeda", selesai: false },
                { type: "video", judul: "Ukuran dan Geometri Sepeda", selesai: false },
                { type: "kuis", judul: "Kuis Pengenalan Sepeda", selesai: false }
            ]
        },
        { 
            id: 2,
            judul: "Sistem Penggerak", 
            deskripsi: "Crankset dan Bottom Bracket • Casette dan Freewheel • Derailleur dan Shifter • Rantai dan Pemeliharaannya", 
            materi: 4, 
            kuis: 2, 
            tuntas: false,
            materiTuntas: 2,
            materiDetail: [
                { type: "video", judul: "Crankset dan Bottom Bracket", selesai: true },
                { type: "dokumen", judul: "Casette dan Freewheel", selesai: true },
                { type: "video", judul: "Derailleur dan Shifter", selesai: false },
                { type: "dokumen", judul: "Rantai dan Pemeliharaannya", selesai: false },
                { type: "kuis", judul: "Kuis Sistem Penggerak 1", selesai: false },
                { type: "kuis", judul: "Kuis Sistem Penggerak 2", selesai: false }
            ]
        },
        { 
            id: 3,
            judul: "Sistem Pengereman dan Keselamatan", 
            deskripsi: "Jenis-Jenis Rem Sepeda • Cara Kerja dan Perawatan Rem • Aksesori Keselamatan", 
            materi: 3, 
            kuis: 1, 
            tuntas: false,
            materiTuntas: 1,
            materiDetail: [
                { type: "video", judul: "Jenis-Jenis Rem Sepeda", selesai: true },
                { type: "dokumen", judul: "Cara Kerja dan Perawatan Rem", selesai: false },
                { type: "video", judul: "Aksesori Keselamatan", selesai: false },
                { type: "kuis", judul: "Kuis Sistem Pengereman", selesai: false }
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
                { type: "video", judul: "Suspensi Depan dan Belakang", selesai: false },
                { type: "dokumen", judul: "Sadel dan Seatposts", selesai: false },
                { type: "kuis", judul: "Kuis Sistem Suspensi", selesai: false }
            ]
        }
    ];

    // Role pengguna (ubah ini sesuai kebutuhan)
    const userRole = "manager"; // bisa "user" atau "manager"

    // Elemen DOM
    const btnSemua = document.getElementById('btnSemua');
    const btnTuntas = document.getElementById('btnTuntas');
    const daftarKursus = document.getElementById('daftarKursus');
    const btnTambahKursus = document.getElementById('btnTambahKursus');
    const managerControls = document.getElementById('managerControls');

    // Inisialisasi berdasarkan role
    if (userRole === "manager") {
        btnTambahKursus.classList.remove('hidden');
        managerControls.classList.remove('hidden');
    }

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
        const kursus = kursusList.find(k => k.id === kursusId);
        if (!kursus) return;
        
        document.getElementById('judulDetail').textContent = kursus.judul;
        
        // Hitung progress
        const totalMateri = kursus.materiDetail.length;
        const materiSelesai = kursus.materiDetail.filter(m => m.selesai).length;
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
                <li class="flex items-start gap-4 ${materi.selesai ? 'opacity-60' : ''}">
                    <span class="w-6 h-6 rounded-full ${materi.selesai ? 'bg-green-500' : 'bg-blue-900'} text-white flex items-center justify-center text-xs font-bold">${index + 1}</span>
                    <div class="flex-1">
                        <p class="font-semibold capitalize">${materi.type}</p>
                        <p>${materi.judul}</p>
                        ${materi.selesai ? '<p class="text-green-600 text-xs mt-1 flex items-center gap-1"><i class="bi bi-check-circle"></i> Selesai</p>' : ''}
                    </div>
                    ${userRole === 'manager' ? `
                    <div class="flex gap-2">
                        <button class="text-gray-500 hover:text-blue-800" onclick="editMateri(${kursusId}, ${index})">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="text-gray-500 hover:text-red-600" onclick="hapusMateri(${kursusId}, ${index})">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    ` : ''}
                </li>
            `;
        });
        
        document.getElementById('panelDetail').classList.remove('translate-x-full');
        document.getElementById('overlayDetail').classList.remove('hidden');
    }

    // Tutup panel detail
    function tutupPanel() {
        document.getElementById('panelDetail').classList.add('translate-x-full');
        document.getElementById('overlayDetail').classList.add('hidden');
    }

    // Fungsi untuk manajer
    function tambahKursus() {
        const judul = prompt("Masukkan judul kursus baru:");
        if (judul) {
            const deskripsi = prompt("Masukkan deskripsi kursus:");
            const id = kursusList.length > 0 ? Math.max(...kursusList.map(k => k.id)) + 1 : 1;
            
            kursusList.push({
                id,
                judul,
                deskripsi: deskripsi || "Deskripsi kursus",
                materi: 0,
                kuis: 0,
                tuntas: false,
                materiTuntas: 0,
                materiDetail: []
            });
            
            renderKursus('semua');
            alert("Kursus berhasil ditambahkan!");
        }
    }

    function tambahMateri() {
        const judulDetail = document.getElementById('judulDetail').textContent;
        const kursus = kursusList.find(k => k.judul === judulDetail);
        if (!kursus) return;
        
        const type = prompt("Jenis materi (video/dokumen/kuis):");
        if (!['video', 'dokumen', 'kuis'].includes(type)) {
            alert("Jenis materi harus video, dokumen, atau kuis");
            return;
        }
        
        const judul = prompt(`Masukkan judul ${type}:`);
        if (judul) {
            kursus.materiDetail.push({
                type,
                judul,
                selesai: false
            });
            
            // Update jumlah materi
            if (type === 'kuis') {
                kursus.kuis += 1;
            } else {
                kursus.materi += 1;
            }
            
            bukaPanel(kursus.id);
            renderKursus('semua');
        }
    }

    function editKursus() {
        const judulDetail = document.getElementById('judulDetail').textContent;
        const kursus = kursusList.find(k => k.judul === judulDetail);
        if (!kursus) return;
        
        const newJudul = prompt("Edit judul kursus:", kursus.judul);
        if (newJudul) {
            kursus.judul = newJudul;
            const newDeskripsi = prompt("Edit deskripsi kursus:", kursus.deskripsi);
            if (newDeskripsi) {
                kursus.deskripsi = newDeskripsi;
            }
            
            bukaPanel(kursus.id);
            renderKursus('semua');
        }
    }

    function editMateri(kursusId, materiIndex) {
        const kursus = kursusList.find(k => k.id === kursusId);
        if (!kursus || !kursus.materiDetail[materiIndex]) return;
        
        const materi = kursus.materiDetail[materiIndex];
        const newJudul = prompt("Edit judul materi:", materi.judul);
        if (newJudul) {
            materi.judul = newJudul;
            bukaPanel(kursusId);
        }
    }

    function hapusMateri(kursusId, materiIndex) {
        if (confirm("Apakah Anda yakin ingin menghapus materi ini?")) {
            const kursus = kursusList.find(k => k.id === kursusId);
            if (!kursus || !kursus.materiDetail[materiIndex]) return;
            
            const materi = kursus.materiDetail[materiIndex];
            
            // Update jumlah materi/kuis
            if (materi.type === 'kuis') {
                kursus.kuis -= 1;
            } else {
                kursus.materi -= 1;
                if (materi.selesai) {
                    kursus.materiTuntas -= 1;
                }
            }
            
            kursus.materiDetail.splice(materiIndex, 1);
            bukaPanel(kursusId);
            renderKursus('semua');
        }
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
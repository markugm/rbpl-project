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
            
            <ol class="space-y-4 text-sm" id="materiList">
                <!-- Materi akan diisi secara dinamis -->
            </ol>
        </div>

        <!-- Overlay -->
        <div id="overlayDetail" class="fixed inset-0 bg-black/30 z-40 hidden" onclick="tutupPanel()"></div>

        <!-- KONTEN UTAMA -->
        <div class="px-6 py-4" id="mainContent">
            <!-- Tampilan Daftar Kursus -->
            <div id="daftarKursusContainer">
                <h2 class="text-2xl font-bold mb-4">Kursus</h2>
                <div class="flex gap-4 mb-6 border-b border-gray-300">
                    <button id="btnSemua" class="pb-2 px-4 text-sm font-medium text-blue-800 border-b-2 border-blue-800 focus:outline-none">Semua</button>
                    <button id="btnTuntas" class="pb-2 px-4 text-sm font-medium text-gray-600 hover:text-blue-800 border-b-2 border-transparent focus:outline-none">Tuntas</button>
                </div>
                <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>
            </div>
            
            <!-- Tampilan Kuis (Awalnya Disembunyikan) -->
            <div id="kuisContainer" class="hidden">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-bold text-lg" id="kuisTitle">Kuis Sistem Suspensi dan Kenyamanan Berkendara</h3>
                            <p class="text-sm text-gray-600">15 Soal • 0 Terjawab</p>
                        </div>
                        <button onclick="kembaliKeDaftarMateri()" class="text-blue-800 hover:text-blue-600 flex items-center gap-1">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </button>
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-lg mb-6">
                        <p class="font-medium text-blue-900">Petunjuk:</p>
                        <ul class="list-disc list-inside text-sm text-gray-700 mt-2">
                            <li>Kuis terdiri dari 15 pertanyaan pilihan ganda</li>
                            <li>Anda harus menjawab semua pertanyaan</li>
                            <li>Waktu pengerjaan tidak dibatasi</li>
                        </ul>
                    </div>
                    
                    <button onclick="mulaiKuis()" class="w-full bg-blue-900 hover:bg-blue-800 text-white py-3 rounded-lg font-medium">
                        Mulai Kuis
                    </button>
                </div>
            </div>
            
            <!-- Tampilan Pertanyaan Kuis (Awalnya Disembunyikan) -->
            <div id="pertanyaanContainer" class="hidden">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-bold text-lg" id="currentQuestionTitle">Pertanyaan 1/15</h3>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div id="progressKuis" class="bg-blue-900 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        <button onclick="batalkanKuis()" class="text-red-600 hover:text-red-800 flex items-center gap-1">
                            <i class="bi bi-x-circle"></i> Batalkan
                        </button>
                    </div>
                    
                    <div class="mb-6">
                        <p class="font-medium mb-4" id="questionText">Apa fungsi utama suspensi depan pada sepeda?</p>
                        <div class="space-y-3" id="optionsContainer">
                            <!-- Opsi jawaban akan diisi dinamis -->
                        </div>
                    </div>
                    
                    <div class="flex justify-between">
                        <button onclick="sebelumnya()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded">
                            Sebelumnya
                        </button>
                        <button onclick="selanjutnya()" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded">
                            Selanjutnya
                        </button>
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
                { 
                    type: "kuis", 
                    judul: "Kuis Sistem Suspensi dan Kenyamanan Berkendara", 
                    selesai: false,
                    totalQuestions: 15,
                    questions: [
                        {
                            question: "Apa fungsi utama suspensi depan pada sepeda?",
                            options: ["Meningkatkan kecepatan", "Menyerap guncangan", "Mempercantik tampilan"],
                            answer: 1
                        },
                        {
                            question: "Bagaimana cara memilih sadel yang tepat?",
                            options: ["Berdasarkan warna", "Berdasarkan kenyamanan dan ukuran tulang duduk", "Berdasarkan merek"],
                            answer: 1
                        }
                        // Pertanyaan lainnya bisa ditambahkan di sini
                    ]
                }
            ]
        }
        // Kursus lainnya...
    ];

    // State Kuis
    let currentKuis = null;
    let currentQuestionIndex = 0;
    let userAnswers = [];

    // Elemen DOM
    const btnSemua = document.getElementById('btnSemua');
    const btnTuntas = document.getElementById('btnTuntas');
    const daftarKursus = document.getElementById('daftarKursus');
    const daftarKursusContainer = document.getElementById('daftarKursusContainer');
    const kuisContainer = document.getElementById('kuisContainer');
    const pertanyaanContainer = document.getElementById('pertanyaanContainer');
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
            .forEach((item, index) => {
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
        currentCourseSpan.textContent = kursus.judul;
        
        // Render materi
        const materiList = document.getElementById('materiList');
        materiList.innerHTML = '';
        
        kursus.materiDetail.forEach((materi, index) => {
            const icon = materi.type === 'video' ? 'bi-play-circle' : 
                         materi.type === 'dokumen' ? 'bi-file-text' : 
                         'bi-question-circle';
            
            materiList.innerHTML += `
                <li class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-100 cursor-pointer" 
                    onclick="bukaMateri(${kursus.id}, ${index})">
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

    // Buka materi
    function bukaMateri(kursusId, materiIndex) {
        const kursus = kursusList.find(k => k.id === kursusId);
        if (!kursus || !kursus.materiDetail[materiIndex]) return;
        
        const materi = kursus.materiDetail[materiIndex];
        
        if (materi.type === 'video') {
            window.open(materi.content, '_blank');
        } else if (materi.type === 'dokumen') {
            window.open(materi.content, '_blank');
        } else if (materi.type === 'kuis') {
            // Sembunyikan panel detail dan tampilkan kuis
            tutupPanel();
            daftarKursusContainer.classList.add('hidden');
            kuisContainer.classList.remove('hidden');
            
            // Set data kuis
            currentKuis = materi;
            document.getElementById('kuisTitle').textContent = materi.judul;
            document.getElementById('currentCourse').innerHTML = `Kursus > ${kursus.judul} <span class="mx-2">/</span> ${materi.judul}`;
        }
    }

    // Mulai kuis
    function mulaiKuis() {
        kuisContainer.classList.add('hidden');
        pertanyaanContainer.classList.remove('hidden');
        
        // Reset state kuis
        currentQuestionIndex = 0;
        userAnswers = [];
        
        // Tampilkan pertanyaan pertama
        tampilkanPertanyaan();
    }

    // Tampilkan pertanyaan
    function tampilkanPertanyaan() {
        if (!currentKuis || currentQuestionIndex >= currentKuis.questions.length) return;
        
        const question = currentKuis.questions[currentQuestionIndex];
        const progressPercentage = ((currentQuestionIndex + 1) / currentKuis.totalQuestions) * 100;
        
        document.getElementById('currentQuestionTitle').textContent = `Pertanyaan ${currentQuestionIndex + 1}/${currentKuis.totalQuestions}`;
        document.getElementById('progressKuis').style.width = `${progressPercentage}%`;
        document.getElementById('questionText').textContent = question.question;
        
        const optionsContainer = document.getElementById('optionsContainer');
        optionsContainer.innerHTML = '';
        
        question.options.forEach((option, index) => {
            const isChecked = userAnswers[currentQuestionIndex] === index;
            
            optionsContainer.innerHTML += `
                <label class="flex items-center gap-3 p-3 border ${isChecked ? 'border-blue-500 bg-blue-50' : 'border-gray-200'} rounded-lg cursor-pointer">
                    <input type="radio" name="quizOption" value="${index}" ${isChecked ? 'checked' : ''} 
                        onchange="pilihJawaban(${index})" class="form-radio h-4 w-4 text-blue-600">
                    <span>${option}</span>
                </label>
            `;
        });
        
        // Sembunyikan tombol sebelumnya jika di pertanyaan pertama
        document.querySelector('#pertanyaanContainer button:first-child').style.visibility = 
            currentQuestionIndex === 0 ? 'hidden' : 'visible';
    }

    // Pilih jawaban
    function pilihJawaban(index) {
        userAnswers[currentQuestionIndex] = index;
    }

    // Pertanyaan sebelumnya
    function sebelumnya() {
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            tampilkanPertanyaan();
        }
    }

    // Pertanyaan selanjutnya
    function selanjutnya() {
        if (currentQuestionIndex < currentKuis.questions.length - 1) {
            currentQuestionIndex++;
            tampilkanPertanyaan();
        } else {
            // Submit kuis jika sudah di pertanyaan terakhir
            submitKuis();
        }
    }

    // Submit kuis
    function submitKuis() {
        // Hitung skor
        let score = 0;
        currentKuis.questions.forEach((question, index) => {
            if (userAnswers[index] === question.answer) {
                score++;
            }
        });
        
        // Tandai kuis selesai
        currentKuis.selesai = true;
        
        // Tampilkan hasil
        alert(`Kuis selesai! Skor Anda: ${score}/${currentKuis.questions.length}`);
        
        // Kembali ke daftar materi
        batalkanKuis();
    }

    // Batalkan kuis
    function batalkanKuis() {
        pertanyaanContainer.classList.add('hidden');
        kuisContainer.classList.add('hidden');
        daftarKursusContainer.classList.remove('hidden');
        currentCourseSpan.textContent = "Semua Kursus";
    }

    // Kembali ke daftar materi
    function kembaliKeDaftarMateri() {
        kuisContainer.classList.add('hidden');
        daftarKursusContainer.classList.remove('hidden');
        currentCourseSpan.textContent = "Semua Kursus";
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

    // Inisialisasi awal
    setTab('semua');
    renderKursus('semua');

    function toggleSidebar() {
        alert('Sidebar toggle logic bisa ditambahkan di sini');
    }
</script>
</body>
</html>
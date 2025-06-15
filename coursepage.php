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
    // Data Kursus (sama seperti sebelumnya)
    const kursusList = [
        { 
            judul: "Sistem Suspensi dan Kenyamanan Berkendara", 
            deskripsi: "Suspensi Depan dan Belakang • Sadel dan Seatposts", 
            materi: 2, 
            kuis: 1, 
            tuntas: false, 
            materiTuntas: 0,
            materiDetail: [
                { type: "video", judul: "Suspensi Depan dan Belakang", content: "https://youtube.com/embed/abc123" },
                { type: "video", judul: "Sadel dan Seatposts", content: "https://youtube.com/embed/xyz456" },
                { type: "dokumen", judul: "Panduan Sadel", content: "panduan_sadel.pdf" },
                { 
                    type: "kuis", 
                    judul: "Kuis Sistem Suspensi", 
                    content: "kuis_suspensi",
                    totalQuestions: 15,
                    questions: [
                        {
                            question: "Apa fungsi utama suspensi depan pada sepeda?",
                            options: ["Meningkatkan kecepatan", "Menyerap guncangan", "Mempercantik tampilan"],
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
    let userAnswers = [];

    // Fungsi bukaMateri yang diperbarui
    function bukaMateri(type, content, judul, index) {
        if (type === 'video') {
            window.open(content, '_blank');
        } else if (type === 'dokumen') {
            window.open(content, '_blank');
        } else if (type === 'kuis') {
            // Dapatkan data kuis lengkap
            const kursusIndex = parseInt(index.split('-')[0]);
            const materiIndex = parseInt(index.split('-')[1]);
            currentKuis = kursusList[kursusIndex].materiDetail[materiIndex];
            
            // Tampilkan modal kuis
            tampilkanModalKuis();
        }
    }

    // Fungsi untuk menampilkan modal kuis
    function tampilkanModalKuis() {
        // Buat modal kuis
        const modalHTML = `
        <div id="kuisModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg p-6 w-full max-w-2xl">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">${currentKuis.judul}</h3>
                    <button onclick="tutupModalKuis()" class="text-gray-500 hover:text-gray-700">
                        <i class="bi bi-x"></i>
                    </button>
                </div>
                
                <div class="mb-4">
                    <p class="text-sm text-gray-600">15 Soal • 0 Terjawab</p>
                </div>
                
                <div class="bg-blue-50 p-4 rounded mb-6">
                    <p class="font-medium text-blue-800">Petunjuk:</p>
                    <ul class="list-disc list-inside text-sm mt-1">
                        <li>Kuis terdiri dari 15 pertanyaan pilihan ganda</li>
                        <li>Anda harus menjawab semua pertanyaan</li>
                        <li>Waktu pengerjaan tidak dibatasi</li>
                    </ul>
                </div>
                
                <button onclick="mulaiKuis()" class="w-full bg-blue-900 hover:bg-blue-800 text-white py-2 rounded">
                    Mulai Kuis
                </button>
            </div>
        </div>
        `;
        
        // Tambahkan modal ke body
        document.body.insertAdjacentHTML('beforeend', modalHTML);
    }

    // Fungsi untuk memulai kuis
    function mulaiKuis() {
        // Hapus modal awal
        document.getElementById('kuisModal').remove();
        
        // Buat modal pertanyaan
        currentQuestionIndex = 0;
        userAnswers = [];
        tampilkanPertanyaanKuis();
    }

    // Fungsi untuk menampilkan pertanyaan kuis
    function tampilkanPertanyaanKuis() {
        const question = currentKuis.questions[currentQuestionIndex];
        const progress = Math.round(((currentQuestionIndex + 1) / currentKuis.totalQuestions) * 100);
        
        const questionModalHTML = `
        <div id="questionModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg p-6 w-full max-w-2xl">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h3 class="text-lg font-bold">Pertanyaan ${currentQuestionIndex + 1}/${currentKuis.totalQuestions}</h3>
                        <div class="w-full bg-gray-200 rounded h-2 mt-1">
                            <div class="bg-blue-900 h-2 rounded" style="width: ${progress}%"></div>
                        </div>
                    </div>
                    <button onclick="batalkanKuis()" class="text-red-600 hover:text-red-800">
                        <i class="bi bi-x-circle"></i> Batalkan
                    </button>
                </div>
                
                <p class="font-medium mb-4">${question.question}</p>
                
                <div class="space-y-2 mb-6" id="optionsContainer">
                    ${question.options.map((option, idx) => `
                        <label class="flex items-center gap-2 p-2 border border-gray-200 rounded hover:bg-gray-50">
                            <input type="radio" name="quizAnswer" value="${idx}" class="form-radio">
                            <span>${option}</span>
                        </label>
                    `).join('')}
                </div>
                
                <div class="flex justify-between">
                    <button onclick="sebelumnyaPertanyaan()" ${currentQuestionIndex === 0 ? 'disabled' : ''} 
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded ${currentQuestionIndex === 0 ? 'opacity-50 cursor-not-allowed' : ''}">
                        Sebelumnya
                    </button>
                    <button onclick="selanjutnyaPertanyaan()" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded">
                        ${currentQuestionIndex === currentKuis.questions.length - 1 ? 'Selesai' : 'Selanjutnya'}
                    </button>
                </div>
            </div>
        </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', questionModalHTML);
    }

    // Fungsi navigasi kuis
    function sebelumnyaPertanyaan() {
        if (currentQuestionIndex > 0) {
            simpanJawaban();
            currentQuestionIndex--;
            document.getElementById('questionModal').remove();
            tampilkanPertanyaanKuis();
        }
    }

    function selanjutnyaPertanyaan() {
        simpanJawaban();
        
        if (currentQuestionIndex < currentKuis.questions.length - 1) {
            currentQuestionIndex++;
            document.getElementById('questionModal').remove();
            tampilkanPertanyaanKuis();
        } else {
            selesaikanKuis();
        }
    }

    function simpanJawaban() {
        const selectedOption = document.querySelector('input[name="quizAnswer"]:checked');
        if (selectedOption) {
            userAnswers[currentQuestionIndex] = parseInt(selectedOption.value);
        }
    }

    function selesaikanKuis() {
        document.getElementById('questionModal').remove();
        
        // Hitung skor
        let score = 0;
        currentKuis.questions.forEach((q, idx) => {
            if (userAnswers[idx] === q.answer) {
                score++;
            }
        });
        
        alert(`Kuis selesai! Skor Anda: ${score}/${currentKuis.questions.length}`);
    }

    function batalkanKuis() {
        if (confirm('Apakah Anda yakin ingin membatalkan kuis?')) {
            document.getElementById('questionModal').remove();
        }
    }

    function tutupModalKuis() {
        document.getElementById('kuisModal').remove();
    }

    // Pada fungsi bukaPanel, update bagian materiList.innerHTML
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
</script>
</body>
</html>
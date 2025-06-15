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
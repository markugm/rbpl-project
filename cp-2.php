<!-- Popup Hasil Kuis -->

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
                jawabanBenar: 1
            },
            // ... (pertanyaan lainnya tetap sama)
        ],
        jawabanUser: [],
        pertanyaanAktif: 0
    };

    // Fungsi untuk menampilkan hasil kuis
    function tampilkanHasilKuis() {
        // Hitung jawaban benar
        let jawabanBenar = 0;
        kuisData.pertanyaan.forEach((pertanyaan, index) => {
            if (kuisData.jawabanUser[index] === pertanyaan.jawabanBenar) {
                jawabanBenar++;
            }
        });
        
        // Update teks hasil
        document.getElementById('hasilSkor').textContent = 
            `Anda menjawab benar ${jawabanBenar} dari ${kuisData.pertanyaan.length} pertanyaan`;
        
        // Tampilkan popup
        document.getElementById('popupHasil').classList.remove('hidden');
    }

    // Fungsi kirimKuis yang diperbaiki
    function kirimKuis() {
        const jawabanTerpilih = document.querySelector('input[name="jawaban"]:checked');
        if (!jawabanTerpilih) {
            alert('Silakan pilih jawaban terlebih dahulu');
            return;
        }
        
        // Simpan jawaban user
        kuisData.jawabanUser[kuisData.pertanyaanAktif] = parseInt(jawabanTerpilih.value);
        
        // Cek apakah sudah menjawab semua pertanyaan
        if (kuisData.jawabanUser.length < kuisData.pertanyaan.length) {
            // Lanjut ke pertanyaan berikutnya
            tampilkanPertanyaan(kuisData.pertanyaanAktif + 1);
        } else {
            // Tampilkan hasil
            tampilkanHasilKuis();
        }
    }

    // Fungsi untuk menutup popup
    function tutupPopupHasil() {
        document.getElementById('popupHasil').classList.add('hidden');
        // Kembali ke halaman kursus
        document.querySelector('.px-6.py-6').classList.remove('hidden');
        document.getElementById('kuisContainer').classList.add('hidden');
    }

    // Pastikan fungsi ini dipanggil saat membuka kuis
    function bukaKuis() {
        // Reset jawaban user
        kuisData.jawabanUser = [];
        kuisData.pertanyaanAktif = 0;
        
        // Sembunyikan halaman kursus
        document.querySelector('.px-6.py-6').classList.add('hidden');
        // Tampilkan kuis
        document.getElementById('kuisContainer').classList.remove('hidden');
        // Tampilkan pertanyaan pertama
        tampilkanPertanyaan(0);
    }
</script>
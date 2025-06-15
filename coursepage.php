<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Kursus | Jago Sepeda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100 font-sans">

<!-- LAYOUT 2‑KOLOM (sidebar + konten) -->
<div class="flex h-screen">

  <!-- —— SIDEBAR —————————————————— -->
  <aside class="w-60 bg-blue-900 text-white flex flex-col justify-between p-4">
    <div>
      <h1 class="text-2xl font-bold mb-10 text-center">🚲 JAGO SEPEDA</h1>
      <nav class="space-y-2">
        <a href="homepage.php"  class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded"><i class="bi bi-house-door"></i> Beranda</a>
        <a href="coursepage.php" class="flex items-center gap-2 px-4 py-2 bg-white/10 rounded font-semibold"><i class="bi bi-book"></i> Kursus</a>
        <a href="#"                class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded"><i class="bi bi-bar-chart-line"></i> Hasil Kuis</a>
        <a href="#"                class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded"><i class="bi bi-person"></i> Profil</a>
      </nav>
    </div>
    <div class="space-y-2">
      <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-white/10 rounded"><i class="bi bi-gear"></i> Pengaturan</a>
      <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-red-600 rounded"><i class="bi bi-box-arrow-right"></i> Keluar</a>
    </div>
  </aside>

  <!-- —— KONTEN ——————————————————— -->
  <main class="flex-1 overflow-y-auto relative">

    <!-- TOP‑BAR -->
    <div class="bg-white px-6 py-4 shadow-sm flex justify-between items-center">
      <button class="text-gray-700 hover:text-blue-700 text-xl"><i class="bi bi-list"></i></button>
      <div class="flex items-center gap-4">
        <button class="text-gray-700 hover:text-blue-700 text-xl"><i class="bi bi-megaphone"></i></button>
        <div class="flex items-center gap-3">
          <div class="text-right">
            <p class="font-semibold text-gray-900">Ajuy Sutiyo</p>
            <p class="text-sm text-gray-500">Pegawai Training</p>
          </div>
          <img src="foto-ajuy.jpg" alt="Ajuy" class="w-10 h-10 rounded-full border-2 border-blue-800 object-cover">
        </div>
      </div>
    </div>

    <!-- PANEL DETAIL KURSUS (slide‑in) -->
    <div id="panelDetail" class="fixed right-0 top-0 h-full w-[400px] bg-white shadow-xl p-6 transition-transform translate-x-full z-50 overflow-y-auto">
      <div class="flex justify-between items-center mb-6">
        <h3 id="judulDetail" class="font-bold text-lg">Judul Kursus</h3>
        <button onclick="tutupPanel()"><i class="bi bi-x text-xl"></i></button>
      </div>
      <ol id="listModul" class="space-y-6 text-sm"></ol>
    </div>

    <!-- OVERLAY -->
    <div id="overlayDetail" class="fixed inset-0 bg-black/30 z-40 hidden" onclick="tutupPanel()"></div>

    <!-- DAFTAR KURSUS -->
    <section class="px-6 py-6">
      <h2 class="text-2xl font-bold mb-4">Kursus</h2>

      <!-- tab -->
      <div class="flex gap-4 mb-6 border-b border-gray-300">
        <button id="btnSemua"  class="pb-2 px-4 text-sm font-medium border-b-2 border-transparent">Semua</button>
        <button id="btnTuntas" class="pb-2 px-4 text-sm font-medium border-b-2 border-transparent">Tuntas</button>
      </div>

      <div id="daftarKursus" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>
    </section>
  </main>
</div>

<script>
/* ========== DATA KURSUS & MODUL ========================================= */
const courses = [
  {
    title : "Pengenalan Sepeda",
    desc  : "Jenis-jenis Sepeda • Anatomi Sepeda • Ukuran dan Geometri",
    materi: 3, kuis:1, tuntas:true, materiTuntas:3,
    modules:[
      {type:"video",   title:"Jenis-jenis Sepeda",     src:"https://www.youtube.com/embed/ZbZSe6N_BXs"},
      {type:"video",   title:"Anatomi Sepeda",         src:"https://www.youtube.com/embed/aqz-KE-bpKQ"},
      {type:"document",title:"Ukuran & Geometri",      src:"materi/geometri.pdf"},
      {type:"quiz",    title:"Kuis Pengenalan",        src:"quiz?id=1"}
    ]
  },
  {
    title : "Sistem Suspensi dan Kenyamanan Berkendara",
    desc  : "Suspensi Depan dan Belakang • Tips Berkendara Nyaman",
    materi: 2, kuis:1, tuntas:false, materiTuntas:0,
    modules:[
      {type:"video",   title:"Suspensi Depan dan Belakang", src:"https://www.youtube.com/embed/oHg5SJYRHA0"},
      {type:"video",   title:"Sadel dan Seatspots",         src:"https://www.youtube.com/embed/dQw4w9WgXcQ"},
      {type:"document",title:"Dokumen Seatspots",           src:"materi/seatspots.pdf"},
      {type:"quiz",    title:"Kuis Suspensi",               src:"quiz?id=4"}
    ]
  },
  // tambahkan course lain…
];

/* ========== UI DAFTAR KURSUS =========================================== */
const daftarKursusEl = document.getElementById('daftarKursus');
const btnSemua  = document.getElementById('btnSemua');
const btnTuntas = document.getElementById('btnTuntas');

function renderCourses(filter='semua'){
  daftarKursusEl.innerHTML='';
  courses.filter(c=> filter==='semua' ? true : c.materiTuntas>0)
         .forEach((c,idx)=>{
            const isDone = (filter==='tuntas');
            daftarKursusEl.innerHTML += `
              <div class="rounded-xl shadow px-4 py-3 flex flex-col justify-between h-[170px] ${isDone?'bg-gray-200 text-gray-600':'bg-gray-100'}">
                <div class="flex gap-4 flex-1">
                  <div class="w-1/4 bg-white aspect-[3/4] rounded-md flex items-center justify-center">
                    <div class="bg-black text-white rounded-full text-xs px-2 py-1 font-semibold">#${idx+1}</div>
                  </div>
                  <div class="flex-1 flex flex-col justify-between overflow-hidden">
                    <div>
                      <h3 class="font-semibold text-sm mb-1 truncate">${c.title}</h3>
                      <p class="text-xs line-clamp-2">${c.desc}</p>
                      <p class="text-xs text-gray-500 mt-1">
                        ${isDone? `${c.materiTuntas} dari ${c.materi} Materi Dituntaskan`
                                : `${c.materi} Materi | ${c.kuis} Kuis`}
                      </p>
                    </div>
                    <button ${isDone?'disabled':''}
                      onclick="openPanel(${idx})"
                      class="${isDone?'bg-gray-400 cursor-not-allowed':'bg-blue-900 hover:bg-blue-800'} text-white text-sm px-4 py-1 rounded mt-2 w-fit">
                      Mulai
                    </button>
                  </div>
                </div>
              </div>`;
         });
}
renderCourses();

/* ========== TAB ======================================================= */
function setTab(tab){
  const active = ['text-blue-800','border-blue-800','font-semibold'];
  const inactive= ['text-gray-600','border-transparent','font-medium'];
  if(tab==='semua'){
    btnSemua .classList.add(...active);   btnSemua .classList.remove(...inactive);
    btnTuntas.classList.add(...inactive); btnTuntas.classList.remove(...active);
  }else{
    btnTuntas.classList.add(...active);   btnTuntas.classList.remove(...inactive);
    btnSemua .classList.add(...inactive); btnSemua .classList.remove(...active);
  }
  renderCourses(tab);
}
btnSemua.onclick = ()=> setTab('semua');
btnTuntas.onclick = ()=> setTab('tuntas');

/* ========== PANEL DETAIL + LIST MODUL ================================== */
function openPanel(courseIdx){
  const course = courses[courseIdx];
  document.getElementById('judulDetail').textContent = course.title;

  // isi modul
  const listEl = document.getElementById('listModul');
  listEl.innerHTML='';
  course.modules.forEach((m,i)=>{
    listEl.innerHTML += `
      <li class="flex items-start gap-4 cursor-pointer group"
          onclick="gotoModule(${courseIdx},${i})">
        <span class="w-6 h-6 rounded-full bg-blue-900 text-white flex items-center justify-center text-xs font-bold group-hover:bg-blue-700">${i+1}</span>
        <div>
          <p class="font-semibold">${m.type.charAt(0).toUpperCase()+m.type.slice(1)}</p>
          <p>${m.title}</p>
        </div>
      </li>`;
  });

  document.getElementById('panelDetail').classList.remove('translate-x-full');
  document.getElementById('overlayDetail').classList.remove('hidden');
}
function tutupPanel(){
  document.getElementById('panelDetail').classList.add('translate-x-full');
  document.getElementById('overlayDetail').classList.add('hidden');
}

/* ========== NAVIGASI KE HALAMAN MODUL ================================= */
function gotoModule(cIdx,mIdx){
  // simpan data sementara di localStorage
  localStorage.setItem('courseData', JSON.stringify(courses[cIdx]));
  localStorage.setItem('moduleIndex', mIdx);
  window.location.href = 'modulepage.php';
}
</script>
</body>
</html>
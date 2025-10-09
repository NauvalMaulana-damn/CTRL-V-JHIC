<x-layout title="Pendaftaran - SMK" >
<div class="bg-white text-gray-800">

  <!-- Hero Section -->
  <section class="relative h-[60vh] bg-black">
    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1600&q=80"
         alt="Hero"
         class="absolute inset-0 w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/70"></div>
    <div class="relative h-full flex flex-col justify-center items-center text-center text-white px-4">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">DAFTAR SEKARANG!</h1>
      <div class="flex gap-4 mt-2">
        <button class="bg-white text-black px-5 py-2 rounded-full font-medium hover:bg-gray-100 transition">&lt; OFFLINE</button>
        <button class="bg-customOrange bg-orange-500 text-white px-5 py-2 rounded-full font-medium hover:bg-orange-600 transition">ONLINE &gt;</button>
      </div>
    </div>
  </section>

  <!-- Grafik Section -->
  <section class="py-10 px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Pendaftar -->
    <div class="bg-white rounded-2xl shadow p-5">
      <h2 class="text-xl font-semibold mb-4">Data Pendaftar</h2>
      <canvas id="chartPendaftar"></canvas>
    </div>
    <!-- Peserta Diterima -->
    <div class="bg-white rounded-2xl shadow p-5">
      <h2 class="text-xl font-semibold mb-4">Data Peserta Diterima</h2>
      <canvas id="chartDiterima"></canvas>
    </div>
  </section>

  <!-- Daftar Offline -->
<!-- Alur Pendaftaran OFFLINE -->
<section class="py-12 bg-gray-100">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Alur Pendaftaran Offline</h2>

    <div class="relative overflow-x-auto">
      <div class="min-w-[1000px] relative">

        <!-- Garis Oranye Melengkung -->
        <svg class="absolute top-0 left-0 w-full h-72" viewBox="0 0 1000 280" fill="none" preserveAspectRatio="none">
          <path d="M 50 200 Q 250 50, 500 160 Q 750 260, 950 120"
                stroke="url(#orangeGradient)"
                stroke-width="10"
                fill="transparent"/>
          <defs>
            <linearGradient id="orangeGradient" x1="0" y1="0" x2="1000" y2="0" gradientUnits="userSpaceOnUse">
              <stop stop-color="#FFA500"/>
              <stop offset="1" stop-color="#FF6B00"/>
            </linearGradient>
          </defs>
        </svg>

        <!-- Step Items -->
        <div class="absolute top-0 left-0 w-full h-72 flex justify-between px-10">

          <!-- Step 1 -->
          <div class="flex flex-col items-center mt-[180px]">
            <div class="bg-orange-500 text-white w-14 h-14 flex items-center justify-center rounded-full font-bold shadow-lg mb-2">
              1
            </div>
            <p class="text-center text-sm font-semibold w-28">Datang ke Sekolah</p>
          </div>

          <!-- Step 2 -->
          <div class="flex flex-col items-center mt-[40px]">
            <div class="bg-orange-500 text-white w-14 h-14 flex items-center justify-center rounded-full font-bold shadow-lg mb-2">
              2
            </div>
            <p class="text-center text-sm font-semibold w-28">Pembuatan Akun</p>
          </div>

          <!-- Step 3 -->
          <div class="flex flex-col items-center mt-[200px]">
            <div class="bg-orange-500 text-white w-14 h-14 flex items-center justify-center rounded-full font-bold shadow-lg mb-2">
              3
            </div>
            <p class="text-center text-sm font-semibold w-28">Cek Fisik</p>
          </div>

          <!-- Step 4 -->
          <div class="flex flex-col items-center mt-[80px]">
            <div class="bg-orange-500 text-white w-14 h-14 flex items-center justify-center rounded-full font-bold shadow-lg mb-2">
              4
            </div>
            <p class="text-center text-sm font-semibold w-28">Mengisi Form</p>
          </div>

          <!-- Step 5 -->
          <div class="flex flex-col items-center mt-[140px]">
            <div class="bg-orange-500 text-white w-14 h-14 flex items-center justify-center rounded-full font-bold shadow-lg mb-2">
              5
            </div>
            <p class="text-center text-sm font-semibold w-28">Pengumuman</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>



<!-- Alur Pendaftaran ONLINE -->
<section class="relative mt-12">
  <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1600&q=80"
       class="w-full h-36 object-cover opacity-80">
  <div class="absolute inset-0 flex items-center justify-center">
    <h2 class="text-3xl font-bold text-white">Daftar Online</h2>
  </div>
</section>

<section class="py-10 px-4">
  <div class="max-w-4xl mx-auto bg-orange-500 rounded-3xl p-8 flex flex-col gap-8">

    <div class="flex flex-col md:flex-row items-center justify-between text-white gap-6 relative">

      <!-- STEP 1 -->
      <div class="flex flex-col items-center text-center">
        <div class="bg-white text-orange-500 font-bold w-10 h-10 rounded-full flex items-center justify-center mb-2">1</div>
        <img src="https://cdn-icons-png.flaticon.com/512/483/483947.png" class="w-12 mb-2" alt="Telp">
        <p class="font-semibold">Hubungi 0821-3300-0370</p>
      </div>

      <div class="hidden md:block flex-1 h-1 bg-white/50"></div>

      <!-- STEP 2 -->
      <div class="flex flex-col items-center text-center">
        <div class="bg-white text-orange-500 font-bold w-10 h-10 rounded-full flex items-center justify-center mb-2">2</div>
        <img src="https://cdn-icons-png.flaticon.com/512/2584/2584604.png" class="w-12 mb-2" alt="Salam">
        <p class="font-semibold">Salam & Tujuan</p>
      </div>

      <div class="hidden md:block flex-1 h-1 bg-white/50"></div>

      <!-- STEP 3 -->
      <div class="flex flex-col items-center text-center">
        <div class="bg-white text-orange-500 font-bold w-10 h-10 rounded-full flex items-center justify-center mb-2">3</div>
        <img src="https://cdn-icons-png.flaticon.com/512/1057/1057097.png" class="w-12 mb-2" alt="Staff">
        <p class="font-semibold">Staff Akan Membalas</p>
      </div>

    </div>

    <div class="text-center mt-5">
      <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-full shadow">
        Call Center
      </button>
    </div>
  </div>
</section>


  <script>
    const labels = ['2021','2022','2023','2024','2025'];

    const chartOptions = {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: { beginAtZero: true }
      },
      elements: {
        line: { tension: 0.4 } // bikin kurva smooth
      }
    };

    const pendaftarData = {
      labels,
      datasets: [{
        label: 'Pendaftar',
        data: [200, 350, 400, 500, 620],
        borderColor: '#f97316',
        backgroundColor: '#f97316',
        fill: false
      }]
    };

    const diterimaData = {
      labels,
      datasets: [{
        label: 'Peserta Diterima',
        data: [150, 300, 320, 450, 560],
        borderColor: '#3b82f6',
        backgroundColor: '#3b82f6',
        fill: false
      }]
    };

    new Chart(document.getElementById('chartPendaftar'), {
      type: 'line',
      data: pendaftarData,
      options: chartOptions
    });

    new Chart(document.getElementById('chartDiterima'), {
      type: 'line',
      data: diterimaData,
      options: chartOptions
    });
  </script>
</div>
</x-layout>

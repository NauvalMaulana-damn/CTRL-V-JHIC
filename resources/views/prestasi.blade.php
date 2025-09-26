<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@section('title', 'SMK PGRI 3 MALANG')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Scrollbar untuk kartu jawara (jika overflow) */
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <x-back2top></x-back2top>

    <x-header></x-header>

  <!-- Hero Section -->
  <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10">
    <!-- Hero text & button -->
    <div class="flex flex-col justify-center space-y-6">
      <h2 class="text-3xl font-bold leading-tight">
        SKARIGA, Sekolahnya <br />
        Sang Juara! <br />
        Gabung Skariga untuk <br />
        Menjadi Sang Juara Selanjutnya!
      </h2>
      <button
        class="w-max bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition"
        onclick="alert('Daftar Sekarang clicked!')"
      >
        Daftar Sekarang
      </button>
    </div>

    <!-- Hero images grid -->
  <div class="grid grid-cols-2 gap-4">
  <!-- Kiri atas -->
  <img src="{{ asset('assets/skariga pres.jpeg') }}" class="rounded-lg shadow-md" />

  <!-- Kanan (foto tinggi) -->
  <img src="{{ asset('assets/robot-manu.jpg') }}" class="rounded-lg shadow-md row-span-2" />

  <!-- Kiri bawah -->
  <img src="{{ asset('assets/skariga prestasi.jpg') }}" class="rounded-lg shadow-md" />
</div>


</div>

  </section>

  <!-- Para Jawara Section -->
  <div class="max-w-6xl mx-auto px-4 py-8">
  <!-- Container utama -->
  <div class="bg-white rounded-xl shadow-lg p-8">
    <!-- Header (titik + title) -->
    <div class="bg-gray-100 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center">
  <!-- Titik di kiri -->
  <div class="flex space-x-2">
    <span class="w-4 h-4 rounded-full bg-red-500"></span>
    <span class="w-4 h-4 rounded-full bg-yellow-500"></span>
    <span class="w-4 h-4 rounded-full bg-green-500"></span>
  </div>

  <!-- Judul di tengah -->
  <h2 class="text-2xl font-bold text-center">PARA JAWARA!</h2>

  <!-- Kolom kanan kosong biar judul tetap center -->
  <div></div>
</div>



    <div></div>

    <!-- Isi juara -->

    <div class="space-y-8 mt-6">
      <!-- Baris 1: 2 foto -->
      <div class="grid grid-cols-2 gap-6 justify-center">
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/robot-manu.jpg') }}" alt="Juara 1" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Syahril Faisal Ramadani</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DikMen Jawa Timur ke 33, dibidang Industrial Control</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/electronics.png') }}" alt="Juara 2" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Yohan Aldi Pratama</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Electronics</p>
        </div>
      </div>

      <!-- Baris 2: 3 foto -->
      <div class="grid grid-cols-3 gap-6">
        <div class="bg-white shadow-xl rounded-lg p-4">
          <img src="{{ asset('assets/robot manufac.png') }}" alt="Juara 3" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Azriel & Celvin</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Robot Manufacturing System</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="foto4.jpg" alt="Juara 4" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="{{ asset('assets/web techn.jpeg') }}">Arif Kurniawan</p>
          <p class="text-sm text-gray-500">Pemenang Juara 2 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Web Technology</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/car paint.jpeg') }}" alt="Juara 5" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Tegar Reyhan</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Car Painting</p>
        </div>
      </div>

      <!-- Baris 3: 2 foto -->
      <div class="grid grid-cols-2 gap-6 justify-center">
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/uiux.jpg') }}" alt="Juara 6" class="w-full max-h-60 object-contain rounded-lg mb-4">
          <p class="font-semibold">Sopo e iki gakenal</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Sistem Informasi Festival 2024, dibidang UI/UX Desain</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/it software.png') }}" alt="Juara 7" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Edsel Param Mustapa</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang IT Software Solution For Business</p>
        </div>
      </div>

      <!-- Baris 4: 3 foto -->
      <div class="grid grid-cols-3 gap-6">
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/prototype model.png') }}" alt="Juara 8" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Iza Aska </p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Prototype Modeling</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/marketing.jpeg') }}" alt="Juara 9" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Ayu Dewi</p>
          <p class="text-sm text-gray-500">Pemenang Juara 3 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Marketing Online</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
          <img src="{{ asset('assets/manufac system.jpg') }}" alt="Juara 10" class="w-full h-48 object-cover rounded-lg mb-4">
          <p class="font-semibold">Rafif & Novaldi</p>
          <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DIKMEN Jawa Timur 33, dibidang Robot Manufacturing System</p>
        </div>
      </div>
    </div>
</div>
</div>



      <!-- Teruskan membuat kartu untuk jawara lain seperti Tegar Reyhan, Sopo e iki gakenal, Edsel Param Mustopa, Iza Aska, Ayu Dewi, Rafit & Novaldi -->





  <x-sidebar></x-sidebar>

    <!-- Footer -->
    <x-footer></x-footer>

    <script>
    window.addEventListener('DOMContentLoaded', () => {
        document.querySelector('header').classList.remove('bg-white', 'text-[#313131]', 'shadow-md');
    });

    window.addEventListener('scroll', () => {
        window.scrollY > 50 ? document.querySelector('header').classList.add('bg-white', 'text-[#313131]',
            'shadow-md') : document.querySelector('header').classList.remove('bg-white', 'text-[#313131]',
            'shadow-md');
    });

    setTimeout(() => {
        window.scrollTo(0, 0);
    }, 0);
    </script>
</body>
</html>

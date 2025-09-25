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
{{--
  <!-- Header -->
  <header class="flex items-center justify-between px-8 py-4 bg-white shadow-sm sticky top-0 z-50">
    <div class="flex items-center space-x-2">
      <img src="https://i.ibb.co/8zhPKHg/logo-pakhi.png" alt="Logo SKARIGA" class="h-10 w-10" />
      <div>
        <h1 class="text-xl font-semibold">SMK PGRI 2 MALANG</h1>
        <p class="text-xs text-gray-600">Success By Discipline</p>
      </div>
    </div>
    <nav class="space-x-6 text-gray-700 font-medium text-sm">
      <a href="#" class="hover:text-blue-600">Beranda</a>
      <a href="#" class="hover:text-blue-600">Prestasi</a>
      <a href="#" class="hover:text-blue-600">Program</a>
      <a href="#" class="hover:text-blue-600">Alumni</a>
      <a href="#" class="hover:text-blue-600">Pendaftaran</a>
    </nav>
  </header> --}}

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
      <img
        src="https://i.ibb.co/3fps5Rz/image1.jpg"
        alt="Indonesia Skills Competition"
        class="rounded-lg shadow-md"
      />
      <img
        src="https://i.ibb.co/VQDrMsR/image2.jpg"
        alt="Juara Robot Manufacturing"
        class="rounded-lg shadow-md"
      />
      <img
        src="https://i.ibb.co/qk50Xg7/image3.jpg"
        alt="Group Photo"
        class="rounded-lg shadow-md col-span-2"
      />
    </div>
  </section>

  <!-- Para Jawara Section -->
    <!-- Para Jawara Section -->
  <section class="max-w-7xl mx-auto px-6 py-12 bg-white rounded-xl shadow-lg">
    <div class="mb-8 text-center">
      <h3 class="text-3xl font-extrabold bg-gray-200 rounded-full inline-block px-8 py-3">PARA JAWARA!</h3>
    </div>

    <!-- Baris 1 (2 card) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 1" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-red-600">JUARA 1</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 1</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 2" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-blue-600">JUARA 1</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 2</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
    </div>

    <!-- Baris 2 (3 card) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 3" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-green-600">JUARA 1</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 3</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 4" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-teal-600">JUARA 2</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 4</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 5" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-purple-600">JUARA 3</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 5</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
    </div>

    <!-- Baris 3 (2 card) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 6" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-orange-600">JUARA 1</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 6</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 7" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-pink-600">JUARA 2</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 7</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
    </div>

    <!-- Baris 4 (3 card) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 8" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-indigo-600">JUARA 1</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 8</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 9" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-lime-600">JUARA 2</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 9</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-5 border border-gray-200">
        <img src="https://via.placeholder.com/400x250" alt="Jawara 10" class="rounded-md mb-4" />
        <h4 class="text-xl font-bold mb-1 text-cyan-600">JUARA 3</h4>
        <p class="font-semibold text-gray-900">Nama Jawara 10</p>
        <p class="text-gray-700 text-sm mt-1">Deskripsi prestasi singkat.</p>
      </div>
    </div>
  </section>


      <!-- Teruskan membuat kartu untuk jawara lain seperti Tegar Reyhan, Sopo e iki gakenal, Edsel Param Mustopa, Iza Aska, Ayu Dewi, Rafit & Novaldi -->

    </div>
  </section>




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

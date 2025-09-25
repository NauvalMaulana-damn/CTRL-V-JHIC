<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni SMK PGRI 3 Malang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in { animation: fadeIn 1s ease-in-out forwards; }
  </style>
</head>
<body class="bg-[#F8F8F8] font-sans text-gray-800">

  <x-back2top></x-back2top>

  <x-header></x-header>

  <!-- Hero -->
  <section class="relative h-[400px] md:h-[500px] rounded-xl overflow-hidden m-6">
    <img src="https://placehold.co/1920x1080" alt="Hero Image" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/20"></div>
  </section>

  <!-- Alumni Section -->
  <section class="py-12 md:py-16 animate-fade-in">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">PARA JAWARA!</h2>

      <!-- Alumni Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        <!-- Card -->
        <div class="relative bg-[#FF885B] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Khoko Rama Viera"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Khoko Rama Viera</h3>
          <p class="mt-3 text-sm">Alumni 2018. Bekerja di Hitachi Construction Machinery Jepang</p>
        </div>

        <div class="relative bg-[#FF4D4D] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Aditya Tantra"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Aditya Tantra</h3>
          <p class="mt-3 text-sm">Alumni TKR 2018. Sekarang bekerja di Daihatsu Motor CO.LTD Jepang</p>
        </div>

        <div class="relative bg-[#4DA6FF] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Reza Abi Utomo"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Reza Abi Utomo</h3>
          <p class="mt-3 text-sm">Alumni TP 2017. Bekerja di PT. JIAEC</p>
        </div>

        <div class="relative bg-[#FFD84D] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Choiriatul Aulia"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Choiriatul Aulia</h3>
          <p class="mt-3 text-sm">Alumni El 2017. Bekerja di PT. Surabaya AutoComp Indonesia</p>
        </div>

        <div class="relative bg-[#2ECC71] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Febrianto Nugroho"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Febrianto Nugroho</h3>
          <p class="mt-3 text-sm">Alumni TP 2016. Bekerja di Eagle Industry</p>
        </div>

        <div class="relative bg-[#9B59B6] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Ahmad Fauzan"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Ahmad Fauzan</h3>
          <p class="mt-3 text-sm">Alumni El 2017. Bekerja di Rekavisitama</p>
        </div>

        <div class="relative bg-[#FF5C8D] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Tiyyo Fahmi"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Tiyyo Fahmi</h3>
          <p class="mt-3 text-sm">Alumni TKJ 2017. Bekerja di PT. Inovasi Tjaraka Buana (MYNET)</p>
        </div>

        <div class="relative bg-[#3498DB] rounded-2xl shadow-lg p-6 text-center text-white">
          <div class="flex justify-center -mt-20">
            <img src="https://placehold.co/150" alt="Ximent Sultan"
                 class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
          </div>
          <h3 class="mt-6 text-xl font-bold">Ximent Sultan</h3>
          <p class="mt-3 text-sm">Alumni TKR 2024. Bekerja di PT. Bagong Dekaka Makmur</p>
        </div>
      </div>

      <!-- Button -->
      <div class="text-center mt-12">
        <button class="bg-gradient-to-r from-[#FF885B] to-[#FF4D4D] text-white py-3 px-10 rounded-full font-medium shadow hover:scale-105 transition">
          Lihat Alumni Lainnya
        </button>
      </div>
    </div>
  </section>

    <x-sidebar></x-sidebar>

    <!-- Footer -->
    <x-footer></x-footer>
</body>
</html>

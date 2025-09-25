<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title', 'Profil - SMK PGRI 3 Malang')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="preload" as="font">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <x-back2top></x-back2top>

    <x-header transparent="true"></x-header>

    <!-- Hero SKARIGA -->
    <section class="relative w-full h-screen flex items-end z-10">
        <!-- Wrapper gambar -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('assets/supporteran.jpg') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">

            <!-- Gradient overlay hanya bagian bawah -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>

        <!-- Teks tetap di atas -->
        <div class="relative z-10 p-8 md:p-16">
            <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg">SKARIGA!</h1>
        </div>
    </section>

    <!-- Profil -->
    <section class="max-w-6xl mx-auto px-4 py-16 grid md:grid-cols-2 gap-10 items-center">
        <div class="grid grid-cols-2 gap-4">
            <img src="https://placehold.co/400x250" class="rounded-xl shadow-md" alt="Gedung 1">
            <img src="https://placehold.co/400x250" class="rounded-xl shadow-md" alt="Gedung 2">
            <img src="https://placehold.co/800x250" class="rounded-xl shadow-md col-span-2" alt="Gedung 3">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4">Profil</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                SMK PGRI 3 Malang didirikan sejak tahun 1965 atas prakarsa tokoh-tokoh di bidang pendidikan dengan
                tujuan
                mencetak generasi bangsa yang terampil dan berkarakter.
            </p>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-orange-500 text-white rounded-full text-sm font-medium">Sekolah
                    Terakreditasi A</span>
                <span class="px-4 py-2 bg-gray-800 text-white rounded-full text-sm font-medium">Success By
                    Discipline</span>
            </div>
        </div>
    </section>

    <!-- Visi -->
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="bg-orange-500 rounded-2xl shadow-lg overflow-hidden">
            <div class="grid md:grid-cols-2 gap-6 items-center">
                <div class="p-8 text-white">
                    <h2 class="text-3xl font-bold mb-4">Visi</h2>
                    <p>Mewujudkan lulusan yang unggul, berkarakter, dan mampu bersaing di dunia kerja serta melanjutkan
                        pendidikan ke jenjang lebih tinggi.</p>
                </div>
                <img src="https://placehold.co/600x400" alt="Visi" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Misi -->
    <section class="max-w-6xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Misi</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-blue-500 text-white rounded-xl p-6 shadow-md hover:scale-105 transition text-center">
                <img src="https://placehold.co/50x50/ffffff/000000?text=👊" alt="Ikon 1" class="mx-auto mb-3">
                <p>Mendidik siswa agar disiplin, jujur, dan bertanggung jawab.</p>
            </div>
            <div class="bg-green-500 text-white rounded-xl p-6 shadow-md hover:scale-105 transition text-center">
                <img src="https://placehold.co/50x50/ffffff/000000?text=📖" alt="Ikon 2" class="mx-auto mb-3">
                <p>Meningkatkan kompetensi siswa sesuai kebutuhan dunia kerja.</p>
            </div>
            <div class="bg-orange-500 text-white rounded-xl p-6 shadow-md hover:scale-105 transition text-center">
                <img src="https://placehold.co/50x50/ffffff/000000?text=🙏" alt="Ikon 3" class="mx-auto mb-3">
                <p>Membentuk lulusan berkarakter dan berakhlak mulia.</p>
            </div>
            <div class="bg-red-500 text-white rounded-xl p-6 shadow-md hover:scale-105 transition text-center">
                <img src="https://placehold.co/50x50/ffffff/000000?text=❤️" alt="Ikon 4" class="mx-auto mb-3">
                <p>Meningkatkan keimanan dan ketakwaan siswa.</p>
            </div>
        </div>
    </section>

    <!-- Profil Lengkap -->
    <section class="mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-8">Profil Lengkap SKARIGA</h2>

        <!-- Responsive square container -->
        <div class="relative w-full max-w-[1100px] h-full max-h-[600px] aspect-square mx-auto rounded-2xl overflow-hidden shadow-lg">
            <iframe src="https://www.youtube.com/embed/FAwdUR9SFRU?si=JYpD_LbCAMgLP_zM&vq=hd1080&modestbranding=1&rel=0&playsinline=1" title="PROFIL SMK PGRI 3 MALANG"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                class="absolute inset-0 w-full h-[600px] object-cover rounded-2xl">
            </iframe>
        </div>
    </section>

    <!-- Sponsor -->
    <section class="max-w-6xl mx-auto px-4 py-12">
        <div class="flex flex-wrap justify-center items-center gap-8">
            <img src="https://placehold.co/150x80" alt="Sponsor 1">
            <img src="https://placehold.co/150x80" alt="Sponsor 2">
            <img src="https://placehold.co/150x80" alt="Sponsor 3">
            <img src="https://placehold.co/150x80" alt="Sponsor 4">
            <img src="https://placehold.co/150x80" alt="Sponsor 5">
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Berita Terbaru</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://placehold.co/400x200" alt="Berita 1" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold">KCS 3B DI PUSBIDK ARHANUD</h3>
                        <p class="text-sm text-gray-600 mt-2">Kegiatan siswa dalam latihan bela negara dan disiplin
                            militer.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://placehold.co/400x200" alt="Berita 2" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold">JUARA 1 LKS NASIONAL 2025</h3>
                        <p class="text-sm text-gray-600 mt-2">Prestasi membanggakan dari siswa dalam ajang kompetisi
                            tingkat nasional.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://placehold.co/400x200" alt="Berita 3" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold">dr. Gamal ke SKARIGA</h3>
                        <p class="text-sm text-gray-600 mt-2">Kunjungan inspiratif dari tokoh nasional yang memberi
                            motivasi siswa.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://placehold.co/400x200" alt="Berita 4" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold">School Visit Futsal Series</h3>
                        <p class="text-sm text-gray-600 mt-2">Event olahraga tahunan yang mempererat persaudaraan antar
                            sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sidebar></x-sidebar>

    <x-footer></x-footer>

</body>

</html>

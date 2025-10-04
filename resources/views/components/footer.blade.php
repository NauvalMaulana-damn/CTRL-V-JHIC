<footer class="bg-[#1A1A1A] text-white py-12 mt-12 font-[Poppins]">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 justify-between">
            <!-- School Info -->
            <div class="w-full md:w-1/4">
                <img class="h-16 mb-4" src="{{ asset('assets/skariga logo 1.png') }}" alt="School Logo">
                <p class="text-[#B9B9B9] text-lg font-bold mb-2">Success By Discipline</p>
                <div class="h-px w-full bg-gray-700 mb-4"></div>

                <div class="flex items-start mb-3">
                    <i class="fas fa-phone-alt text-gray-500 mt-1 mr-2"></i>
                    <span class="text-[#828282] text-sm">(0341) 554383</span>
                </div>

                <div class="flex items-start mb-3">
                    <i class="fab fa-whatsapp text-gray-500 mt-1 mr-2"></i>
                    <a href="https://wa.me/6282133000370" class="text-[#828282] text-sm underline">+62 821-3300-0370</a>
                </div>

                <div class="flex items-start">
                    <i class="fas fa-envelope text-gray-500 mt-1 mr-2"></i>
                    <a href="mailto:mail.smkpgri3malang@gmail.com" class="text-[#828282] text-sm underline">
                        mail.smkpgri3malang@gmail.com
                    </a>
                </div>
            </div>

            <!-- About School -->
            <div class="w-full md:w-1/4">
                <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Tentang Sekolah</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Beranda</a></li>
                    <li><a href="/profil" class="text-[#828282] hover:text-white transition">Profil Sekolah</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Jurusan</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Prestasi</a></li>
                </ul>
            </div>

            <!-- Information & Services -->
            <div class="w-full md:w-1/4">
                <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Informasi & Layanan</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Ekstrakurikuler</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Alumni</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Pendaftaran</a></li>
                </ul>
            </div>

            <!-- Social Media & Map -->
            <div class="w-full md:w-1/4 flex flex-col md:flex-row md:justify-end gap-4 md:grid-cols-2">
                <!-- Ikon Sosial (vertikal di kiri map) -->
                {{-- <div class="flex flex-col items-center space-y-5"> --}}
                <!-- Social Media Icons -->
                <div class="flex flex-col items-center space-y-4">
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-youtube text-lg text-gray-300"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-customInsta transition">
                        <i class="fab fa-instagram text-lg text-gray-300"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                        <i class="fab fa-facebook-f text-lg text-gray-300"></i>
                    </a>
                    <a href="https://www.tiktok.com/@skariga"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-black transition">
                        <i class="fa-brands fa-tiktok text-lg text-gray-300"></i>
                    </a>
                </div>


                <!-- Google Maps -->
                <div class="w-[320px] h-[220px] rounded-lg overflow-hidden flex-shrink-0">
                    <iframe title="SMK PGRI 3 MALANG" width="100%" height="100%"
                        style="border:1px; border-radius: 12px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?width=320&amp;height=220&amp;hl=en&amp;q=smk pgri 3 malang&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Logo Penting -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-500 text-sm">
            <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                src="{{ asset('assets/logojhic.jpg') }}" alt="Yamaha Logo">
            <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                src="{{ asset('assets/logokomdigi.jpg') }}" alt="Yamaha Logo">
            <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                src="{{ asset('assets/logomaspionit.jpg') }}" alt="Yamaha Logo">
            <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                src="{{ asset('assets/logo1000.jpg') }}" alt="Yamaha Logo">
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-500 text-sm">
            <p>&copy; 2025 SMK PGRI 3 Malang. All rights reserved.</p>
        </div>
    </div>
</footer>

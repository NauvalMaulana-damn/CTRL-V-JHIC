<x-layout>
    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <section class="w-full relative h-[600px] mt-2 rounded-xl overflow-hidden">
            <div class="absolute inset-0 max-w-full mx-auto h-full hover-scale rounded-2xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/70"></div>
                <img src="{{ asset('assets/alumni.png') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            </div>

            <!-- Progress Bar -->
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[90%] inset-x-4">
                <div class="mb-4 h-2 md:h-3 relative max-w-full mx-auto bg-white/40 rounded-full">
                    <div class="h-full bg-white rounded-full" style="width:40%"></div>
                    <div class="absolute bottom-4 inset-x-4 md:inset-x-12 lg:inset-x-24">
                    </div>
                </div>

                <!-- Controls -->
                <div class="flex justify-center items-center space-x-4 md:space-x-6 text-xl md:text-2xl">
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-shuffle"></i></button>
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-backward-step"></i></button>
                    <button
                        class="p-3 md:p-4 rounded-full bg-orange-500 text-white shadow-lg hover:bg-orange-600 transition"><i
                            class="fa-solid fa-pause"></i></button>
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-forward-step"></i></button>
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-repeat"></i></button>
                </div>
            </div>

        </section>

        <!-- Alumni Section -->
        <section class=" py-12 md:py-16 animate-fade-in">
            <div class=" max-w-full container mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">PARA JAWARA!</h2>

                <!-- Alumni Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">

                    <!-- Card 1 -->
                    <div class="relative bg-[#FF885B] rounded-2xl shadow-lg p-6 mb-12 text-center text-white ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Khoko Rama Viera"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Khoko Rama Viera</h3>
                        <p class="mt-3 text-base">
                            Alumni 2018. Bekerja di Hitachi Construction Machinery Jepang
                        </p>
                    </div>


                    <!-- Card 2 -->
                    <div class="relative bg-[#FF4D4D] rounded-2xl shadow-lg p-6 mb-12 text-center text-white ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Aditya Tantra"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Aditya Tantra</h3>
                        <p class="mt-3 text-base">
                            Alumni TKR 2018. Sekarang bekerja di Daihatsu Motor CO.LTD Jepang
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative bg-[#4DA6FF] rounded-2xl shadow-lg p-6 mb-12 text-center text-white ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Reza Abi Utomo"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Reza Abi Utomo</h3>
                        <p class="mt-3 text-base">
                            Alumni TP 2017. Bekerja di PT. JIAEC
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="relative bg-[#FFD84D] rounded-2xl shadow-lg p-6 mb-12 text-center text-black ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Choiriatul Aulia"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Choiriatul Aulia</h3>
                        <p class="mt-3 text-base">
                            Alumni El 2017. Bekerja di PT. Surabaya AutoComp Indonesia
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div class="relative bg-[#2ECC71] rounded-2xl shadow-lg p-6 mb-12 text-center text-white ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Febrianto Nugroho"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Febrianto Nugroho</h3>
                        <p class="mt-3 text-base">
                            Alumni TP 2016. Bekerja di Eagle Industry
                        </p>
                    </div>

                    <!-- Card 6 -->
                    <div class="relative bg-[#9B59B6] rounded-2xl shadow-lg p-6 mb-12 text-center text-white ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Ahmad Fauzan"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Ahmad Fauzan</h3>
                        <p class="mt-3 text-base">
                            Alumni El 2017. Bekerja di Rekavisitama
                        </p>
                    </div>

                    <!-- Card 7 -->
                    <div class="relative bg-[#FF5C8D] rounded-2xl shadow-lg p-6 mb-12 text-center text-white ">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Tiyyo Fahmi"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Tiyyo Fahmi</h3>
                        <p class="mt-3 text-base">
                            Alumni TKJ 2017. Bekerja di PT. Inovasi Tjaraka Buana (MYNET)
                        </p>
                    </div>

                    <!-- Card 8 -->
                    <div class="relative bg-[#3498DB] rounded-2xl shadow-lg p-6 mb-12 text-center text-white overflow-">
                        <div class="flex justify-center -mt-20">
                            <img src="https://placehold.co/150" alt="Ximent Sultan"
                                class="w-32 h-32 rounded-full shadow-lg border-4 border-white object-cover">
                        </div>
                        <h3 class="mt-6 text-xl md:text-2xl font-bold">Ximent Sultan</h3>
                        <p class="mt-3 text-base">
                            Alumni TKR 2024. Bekerja di PT. Bagong Dekaka Makmur
                        </p>
                    </div>
                </div>

                <!-- Button -->
                <div class="text-center mt-12">
                    <button
                        class="bg-[#FF885B] text-white py-2 px-8 rounded-full font-medium hover:bg-[#4496FB] transition">
                        Lihat Alumni Lainnya
                    </button>
                </div>
            </div>
        </section>
    </div>

</x-layout>

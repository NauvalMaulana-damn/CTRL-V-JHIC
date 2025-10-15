<x-layout title="{{ $berita->title }} - SMK PGRI 3 Malang">
    <div class="bg-gray-50">
        <!-- Header Statis -->
        <section class="bg-gradient-to-r from-customBlue to-blue-800 text-white py-12 mt-8">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl">
                    <h1 class="text-4xl font-bold mb-4 break-words">{{ $berita->title }}</h1>
                    <p class="text-lg mb-6 break-words">{{ Str::limit($berita->deskripsi, 150) }}</p>
                    <div class="flex space-x-4">
                        <a href="/berita">
                            <button class="bg-customOrange hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Berita
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Content -->
                <div class="w-full lg:w-3/4">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <!-- Gambar Utama -->
                        <div class="relative">
                            <img src="{{ $berita->gambar_url }}" alt="{{ $berita->title }}" class="w-full h-96 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-customBlue text-white px-3 py-1 rounded-full text-xs font-medium">
                                    {{ $berita->type }}
                                </span>
                            </div>
                        </div>

                        <!-- Info Berita -->
                        <div class="p-8">
                            <div class="flex flex-wrap justify-between items-center text-sm text-gray-500 mb-6 gap-2">
                                <div class="flex items-center space-x-4 flex-wrap">
                                    <span><i class="far fa-calendar-alt mr-1"></i> {{ $berita->created_at->format('d F Y') }}</span>
                                    <span><i class="far fa-eye mr-1"></i> {{ $berita->views }} dilihat</span>
                                </div>
                            </div>

                            <!-- Konten Berita -->
                            <article class="max-w-none">
                                <div class="text-gray-700 leading-relaxed whitespace-pre-line break-words overflow-hidden">
                                    {!! $berita->content !!}
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-1/4">
                    <!-- Berita Terbaru -->
                    <div class="bg-white p-5 rounded-xl shadow-md mb-6">
                        <h3 class="font-bold text-xl mb-4 border-b-2 border-customOrange pb-2 break-words">Berita Terbaru</h3>
                        <div class="space-y-4">
                            @foreach($beritaTerbaru as $item)
                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-b-0">
                                <img src="{{ $item->gambar_url }}" alt="{{ $item->title }}" class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                                <div class="min-w-0 flex-1">
                                    <a href="{{ route('berita.show', $item->slug) }}" class="font-medium text-sm hover:text-customBlue transition-colors line-clamp-2 break-words">
                                        {{ $item->title }}
                                    </a>
                                    <p class="text-xs text-gray-500 mt-1">
                                        {{ $item->created_at->format('d M Y') }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="bg-white p-5 rounded-xl shadow-md">
                        <h3 class="font-bold text-xl mb-4 border-b-2 border-customBlue pb-2 break-words">Lainnya</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="http://117.102.78.163/student/" class="text-blue-600 hover:underline flex items-center break-words">
                                    <i class="fas fa-link mr-2 text-sm"></i>OCS (One Click Service)
                                </a>
                            </li>
                            <li>
                                <a href="http://117.102.78.163/ocscbt/" class="text-blue-600 hover:underline flex items-center break-words">
                                    <i class="fas fa-link mr-2 text-sm"></i>CBT (Computer Based Test)
                                </a>
                            </li>
                            <li>
                                <a href="https://bki-skariga.web.id/kerjasama-industri/" class="text-blue-600 hover:underline flex items-center break-words">
                                    <i class="fas fa-link mr-2 text-sm"></i>Bidang Kerja Sama Industri
                                </a>
                            </li>
                            <li>
                                <a href="http://117.102.78.163/portalakademik/" class="text-blue-600 hover:underline flex items-center break-words">
                                    <i class="fas fa-link mr-2 text-sm"></i>Portal Akademik
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <style>
        /* Style untuk konten berita */
        .max-w-none {
            max-width: none;
        }

        .break-words {
            word-wrap: break-word;
            word-break: break-word;
            overflow-wrap: break-word;
        }

        /* Style untuk konten HTML dari berita */
        .text-gray-700 p {
            margin-bottom: 1.5rem;
            line-height: 1.75;
            word-wrap: break-word;
        }

        .text-gray-700 img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin: 2rem 0;
        }

        .text-gray-700 h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 2rem 0 1rem 0;
            color: #1e40af;
            word-wrap: break-word;
        }

        .text-gray-700 h3 {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 1.5rem 0 1rem 0;
            color: #1e40af;
            word-wrap: break-word;
        }

        .text-gray-700 ul,
        .text-gray-700 ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }

        .text-gray-700 li {
            margin-bottom: 0.5rem;
        }

        .text-gray-700 table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
        }

        .text-gray-700 table,
        .text-gray-700 th,
        .text-gray-700 td {
            border: 1px solid #e5e7eb;
            padding: 0.75rem;
        }

        .text-gray-700 th {
            background-color: #f9fafb;
            font-weight: bold;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .text-gray-700 h2 {
                font-size: 1.25rem;
            }

            .text-gray-700 h3 {
                font-size: 1.1rem;
            }

            .flex-wrap {
                flex-wrap: wrap;
            }
        }
    </style>
</x-layout>

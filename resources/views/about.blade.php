@extends('layouts.main')

@section('title', 'Tentang Kami - Indonesia AI Website')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6" style="color: #1a202c !important;">Tentang Kami</h1>
        <p class="text-xl md:text-2xl text-gray-900 max-w-3xl mx-auto" style="color: #1a202c !important;">
            Pusat unggulan teknologi Artificial Intelligence untuk transformasi digital Indonesia
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Misi Kami</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Kami hadir sebagai pusat unggulan yang mendorong penerapan teknologi Artificial Intelligence (AI) dalam berbagai sektor industri dan kehidupan sehari-hari. Misi kami adalah membantu individu, bisnis, dan organisasi memahami dan memanfaatkan potensi penuh AI untuk menciptakan solusi inovatif dan mempercepat transformasi digital.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Dengan komitmen untuk memberikan pendidikan berkualitas tinggi dan akses ke teknologi terdepan, kami berusaha menjadi jembatan antara teori dan praktik dalam dunia AI.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">1000+</div>
                        <div class="text-gray-600">Siswa Aktif</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                        <div class="text-gray-600">Kursus AI</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="w-full h-96 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                    <svg viewBox="0 0 300 200" class="w-72 h-48">
                        <!-- AI Network illustration -->
                        <circle cx="150" cy="100" r="60" fill="rgba(255,255,255,0.1)" stroke="white" stroke-width="2"/>
                        <circle cx="80" cy="60" r="25" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="220" cy="60" r="25" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="80" cy="140" r="25" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="220" cy="140" r="25" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        
                        <!-- Center node -->
                        <circle cx="150" cy="100" r="20" fill="white"/>
                        <text x="150" y="105" text-anchor="middle" fill="#4F46E5" font-size="12" font-weight="bold">AI</text>
                        
                        <!-- Connecting lines -->
                        <line x1="130" y1="85" x2="100" y2="70" stroke="white" stroke-width="2"/>
                        <line x1="170" y1="85" x2="200" y2="70" stroke="white" stroke-width="2"/>
                        <line x1="130" y1="115" x2="100" y2="130" stroke="white" stroke-width="2"/>
                        <line x1="170" y1="115" x2="200" y2="130" stroke="white" stroke-width="2"/>
                        
                        <text x="150" y="180" text-anchor="middle" fill="white" font-size="14" font-weight="bold">AI Learning Network</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platform Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Indonesia AI in BoX</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Mesin pembelajaran AI kami dirancang khusus untuk mendukung proses pendidikan dalam bidang Artificial Intelligence. Mesin ini berperan sebagai platform komputasi kuat yang memungkinkan siswa, mahasiswa, dan tenaga pengajar mengembangkan, melatih, dan menguji berbagai model AI dengan efisiensi tinggi.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Machine Learning</h3>
                <p class="text-gray-600">
                    Platform untuk mengembangkan dan melatih model machine learning dengan berbagai algoritma terdepan.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Natural Language Processing</h3>
                <p class="text-gray-600">
                    Teknologi pemrosesan bahasa alami untuk memahami dan menganalisis teks dengan AI.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Computer Vision</h3>
                <p class="text-gray-600">
                    Sistem penglihatan komputer untuk analisis gambar dan video menggunakan deep learning.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tim Kami</h2>
            <p class="text-lg text-gray-600">
                Dipimpin oleh para ahli AI dan teknologi terdepan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">WK</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Wayan Krishna</h3>
                <p class="text-gray-600 mb-4">Lead AI Researcher</p>
                <p class="text-sm text-gray-500">
                    Spesialis dalam machine learning dan deep learning dengan pengalaman 10+ tahun.
                </p>
            </div>

            <!-- Team Member 2 -->
            <div class="text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">AI</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">AI Expert Team</h3>
                <p class="text-gray-600 mb-4">Research & Development</p>
                <p class="text-sm text-gray-500">
                    Tim ahli yang berdedikasi dalam pengembangan teknologi AI terdepan.
                </p>
            </div>

            <!-- Team Member 3 -->
            <div class="text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">ED</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Education Team</h3>
                <p class="text-gray-600 mb-4">Learning & Development</p>
                <p class="text-sm text-gray-500">
                    Tim pendidik berpengalaman dalam merancang kurikulum AI yang efektif.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Kolaborasi</h2>
        <p class="text-lg text-gray-600 mb-12">
            Kolaborasi PT. Epsido Prima Solusi dan Gunadarma AI-CoE
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">PT. Epsido Prima Solusi</h3>
                <p class="text-gray-600">
                    Partner teknologi yang menyediakan infrastruktur dan platform untuk pengembangan AI.
                </p>
                <a href="https://www.epsindo.co.id" target="_blank" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">
                    www.epsindo.co.id →
                </a>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Gunadarma AI-CoE</h3>
                <p class="text-gray-600">
                    Center of Excellence untuk penelitian dan pengembangan AI di lingkungan akademis.
                </p>
                <a href="https://ai-coe.gunadarma.ac.id" target="_blank" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">
                    ai-coe.gunadarma.ac.id →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" style="color: #1a202c !important;">Bergabunglah dengan Kami</h2>
        <p class="text-xl text-gray-900 mb-8" style="color: #1a202c !important;">
            Mulai perjalanan AI Anda bersama platform pembelajaran terdepan
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300">
                Daftar Sekarang
            </a>
            <a href="{{ route('services') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-600 hover:text-white transition duration-300">
                Lihat Layanan
            </a>
        </div>
    </div>
</section>
@endsection

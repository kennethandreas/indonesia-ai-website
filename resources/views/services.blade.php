@extends('layouts.main')

@section('title', 'Layanan - Indonesia AI Website')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6" style="color: #1a202c !important;">Layanan Kami</h1>
        <p class="text-xl md:text-2xl text-gray-900 max-w-3xl mx-auto" style="color: #1a202c !important;">
            Berbagai macam layanan penggunaan GPU yang dapat membantu menjadi seorang Developer Machine Learning Profesional
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: Cancer Detection -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center relative">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="50" r="25" fill="rgba(255,255,255,0.3)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="50" r="10" fill="white"/>
                        <path d="M35 35 L65 65 M65 35 L35 65" stroke="white" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded font-semibold">Education</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Cancer Detection</h3>
                    <p class="text-gray-600 mb-4">
                        Sistem deteksi kanker menggunakan deep learning dan computer vision untuk analisis citra medis dengan akurasi tinggi.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">📚 0 Episode</span>
                        <span class="mr-4">👥 0 Member</span>
                        <span>⭐ 0 Review</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-500 line-through text-sm mr-2">Rp0</span>
                            <span class="text-2xl font-bold text-green-600">Rp0</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">FREE</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">by Wayan Krishna</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                            Mulai Belajar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 2: Object Detection -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center relative">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <rect x="20" y="30" width="60" height="40" rx="5" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <rect x="25" y="35" width="15" height="10" fill="white"/>
                        <rect x="45" y="35" width="15" height="10" fill="white"/>
                        <rect x="65" y="35" width="10" height="10" fill="white"/>
                        <rect x="25" y="50" width="50" height="3" fill="white"/>
                        <rect x="25" y="55" width="35" height="3" fill="white"/>
                        <rect x="25" y="60" width="40" height="3" fill="white"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded font-semibold">Data Visualization</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Object Detection</h3>
                    <p class="text-gray-600 mb-4">
                        Teknologi deteksi objek real-time menggunakan YOLO dan CNN untuk identifikasi dan klasifikasi objek dalam gambar dan video.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">📚 0 Episode</span>
                        <span class="mr-4">👥 0 Member</span>
                        <span>⭐ 0 Review</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-500 line-through text-sm mr-2">Rp400.000</span>
                            <span class="text-2xl font-bold text-green-600">Rp280.000</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">30% OFF</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">by Wayan Krishna</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                            Mulai Belajar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 3: Face Recognition -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-red-500 flex items-center justify-center relative">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <circle cx="50" cy="40" r="25" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="42" cy="35" r="3" fill="white"/>
                        <circle cx="58" cy="35" r="3" fill="white"/>
                        <path d="M45 45 Q50 50 55 45" stroke="white" stroke-width="2" fill="none"/>
                        <path d="M35 70 Q50 80 65 70" stroke="white" stroke-width="2" fill="none"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded font-semibold">Large Language Model</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Face Recognition</h3>
                    <p class="text-gray-600 mb-4">
                        Sistem pengenalan wajah menggunakan deep learning untuk identifikasi dan verifikasi identitas dengan tingkat akurasi tinggi.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">📚 0 Episode</span>
                        <span class="mr-4">👥 0 Member</span>
                        <span>⭐ 0 Review</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-500 line-through text-sm mr-2">Rp2.000.000</span>
                            <span class="text-2xl font-bold text-green-600">Rp1.000.000</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">50% OFF</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">by Wayan Krishna</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                            Mulai Belajar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 4: Natural Language Processing -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center relative">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <rect x="20" y="25" width="60" height="50" rx="5" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <rect x="25" y="35" width="20" height="3" fill="white"/>
                        <rect x="25" y="42" width="35" height="3" fill="white"/>
                        <rect x="25" y="49" width="25" height="3" fill="white"/>
                        <rect x="25" y="56" width="40" height="3" fill="white"/>
                        <circle cx="70" cy="45" r="8" fill="white"/>
                        <path d="M66 45 L70 49 L74 41" stroke="#4F46E5" stroke-width="2" fill="none"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold">NLP</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Natural Language Processing</h3>
                    <p class="text-gray-600 mb-4">
                        Pemrosesan bahasa alami untuk analisis sentimen, chatbot, dan pemahaman teks menggunakan transformer dan BERT.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">📚 12 Episode</span>
                        <span class="mr-4">👥 45 Member</span>
                        <span>⭐ 4.8 Review</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-500 line-through text-sm mr-2">Rp1.500.000</span>
                            <span class="text-2xl font-bold text-green-600">Rp900.000</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">40% OFF</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">by AI Expert Team</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                            Mulai Belajar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 5: Deep Learning Fundamentals -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="h-48 bg-gradient-to-br from-teal-400 to-blue-500 flex items-center justify-center relative">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <circle cx="25" cy="30" r="8" fill="rgba(255,255,255,0.3)" stroke="white" stroke-width="2"/>
                        <circle cx="25" cy="50" r="8" fill="rgba(255,255,255,0.3)" stroke="white" stroke-width="2"/>
                        <circle cx="25" cy="70" r="8" fill="rgba(255,255,255,0.3)" stroke="white" stroke-width="2"/>
                        
                        <circle cx="50" cy="25" r="8" fill="rgba(255,255,255,0.4)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="45" r="8" fill="rgba(255,255,255,0.4)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="65" r="8" fill="rgba(255,255,255,0.4)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="75" r="8" fill="rgba(255,255,255,0.4)" stroke="white" stroke-width="2"/>
                        
                        <circle cx="75" cy="40" r="8" fill="white" stroke="white" stroke-width="2"/>
                        <circle cx="75" cy="60" r="8" fill="white" stroke="white" stroke-width="2"/>
                        
                        <!-- Connection lines -->
                        <line x1="33" y1="30" x2="42" y2="25" stroke="white" stroke-width="1"/>
                        <line x1="33" y1="50" x2="42" y2="45" stroke="white" stroke-width="1"/>
                        <line x1="58" y1="45" x2="67" y2="40" stroke="white" stroke-width="1"/>
                        <line x1="58" y1="65" x2="67" y2="60" stroke="white" stroke-width="1"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="bg-teal-100 text-teal-800 text-xs px-2 py-1 rounded font-semibold">Deep Learning</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Deep Learning Fundamentals</h3>
                    <p class="text-gray-600 mb-4">
                        Dasar-dasar deep learning, neural networks, backpropagation, dan implementasi menggunakan TensorFlow dan PyTorch.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">📚 20 Episode</span>
                        <span class="mr-4">👥 120 Member</span>
                        <span>⭐ 4.9 Review</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-500 line-through text-sm mr-2">Rp1.200.000</span>
                            <span class="text-2xl font-bold text-green-600">Rp720.000</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">40% OFF</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">by Education Team</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                            Mulai Belajar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 6: AI Ethics & Governance -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="h-48 bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center relative">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <circle cx="50" cy="50" r="30" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <path d="M35 45 L45 55 L65 35" stroke="white" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <circle cx="50" cy="25" r="5" fill="white"/>
                        <rect x="47" y="30" width="6" height="15" fill="white"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded font-semibold">Ethics</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">AI Ethics & Governance</h3>
                    <p class="text-gray-600 mb-4">
                        Memahami aspek etika dalam AI, bias algoritma, privasi data, dan tata kelola AI yang bertanggung jawab.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">📚 8 Episode</span>
                        <span class="mr-4">👥 65 Member</span>
                        <span>⭐ 4.7 Review</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-500 line-through text-sm mr-2">Rp800.000</span>
                            <span class="text-2xl font-bold text-green-600">Rp560.000</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">30% OFF</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">by AI Expert Team</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                            Mulai Belajar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Layanan Kami?</h2>
            <p class="text-lg text-gray-600">
                Platform pembelajaran AI terlengkap dengan teknologi terdepan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">GPU Cloud</h3>
                <p class="text-gray-600 text-sm">Akses GPU cloud berkinerja tinggi untuk training model AI</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Kurikulum Terstruktur</h3>
                <p class="text-gray-600 text-sm">Pembelajaran step-by-step dari basic hingga advanced</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Mentor Expert</h3>
                <p class="text-gray-600 text-sm">Bimbingan langsung dari praktisi AI berpengalaman</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Sertifikasi</h3>
                <p class="text-gray-600 text-sm">Dapatkan sertifikat yang diakui industri</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" style="color: #1a202c !important;">Siap Memulai Perjalanan AI Anda?</h2>
        <p class="text-xl text-gray-900 mb-8" style="color: #1a202c !important;">
            Bergabunglah dengan ribuan developer yang telah mempercayai platform kami
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300">
                Daftar Sekarang
            </a>
            <a href="{{ route('about') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-600 hover:text-white transition duration-300">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</section>
@endsection

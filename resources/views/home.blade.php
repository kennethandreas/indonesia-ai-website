@extends('layouts.main')

@section('title', 'Indonesia AI Website - Pusat Pembelajaran AI')

@section('content')
<!-- Hero Section -->
<section class="bg-white min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <div class="text-gray-900">
                <h1 class="text-4xl md:text-6xl font-bold mb-6" style="color: #1a202c !important;">
                    Layanan Indonesia-AI
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto" style="color: #1a202c !important;">
                    Penggunaan AI untuk pembelajaran kecerdasan artifisial seperti: Modeling, Natural Language Processing (NLP), Large Language Model, Image Segmentation dan lain-lain.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('services') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-center">
                        Lihat Layanan
                    </a>
                    <a href="#showcase" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300 text-center">
                        Lihat Showcase
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="w-full h-64 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                    <svg viewBox="0 0 200 150" class="w-48 h-36">
                        <!-- Server/GPU illustration -->
                        <rect x="20" y="30" width="160" height="90" rx="10" fill="rgba(255,255,255,0.9)" stroke="#4F46E5" stroke-width="2"/>
                        <rect x="30" y="45" width="20" height="8" rx="2" fill="#4F46E5"/>
                        <rect x="55" y="45" width="20" height="8" rx="2" fill="#4F46E5"/>
                        <rect x="80" y="45" width="20" height="8" rx="2" fill="#4F46E5"/>
                        <rect x="30" y="65" width="20" height="8" rx="2" fill="#7C3AED"/>
                        <rect x="55" y="65" width="20" height="8" rx="2" fill="#7C3AED"/>
                        <rect x="80" y="65" width="20" height="8" rx="2" fill="#7C3AED"/>
                        <text x="100" y="100" text-anchor="middle" fill="#4F46E5" font-size="12" font-weight="bold">GPU Server</text>
                    </svg>
                </div>
            </div>
            <div>
                <p class="text-lg text-gray-600 mb-6">
                    Kami hadir sebagai pusat unggulan yang mendorong penerapan teknologi Artificial Intelligence (AI) dalam berbagai sektor industri dan kehidupan sehari-hari. Misi kami adalah membantu individu, bisnis, dan organisasi memahami dan memanfaatkan potensi penuh AI untuk menciptakan solusi inovatif dan mempercepat transformasi digital.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Indonesia AI in BoX. Mesin pembelajaran AI kami dirancang khusus untuk mendukung proses pendidikan dalam bidang Artificial Intelligence. Mesin ini berperan sebagai platform komputasi kuat yang memungkinkan siswa, mahasiswa, dan tenaga pengajar mengembangkan, melatih, dan menguji berbagai model AI dengan efisiensi tinggi.
                </p>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    Tentang Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">PRODUK LAYANAN</h2>
            <p class="text-lg text-gray-600">
                Kami menyediakan berbagai macam layanan penggunaan GPU yang dapat membantu menjadi seorang Developer Machine Learning Profesional.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="50" r="25" fill="rgba(255,255,255,0.3)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="50" r="10" fill="white"/>
                        <text x="50" y="85" text-anchor="middle" fill="white" font-size="8" font-weight="bold">Education</text>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Education</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Cancer Detection</h3>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>0 Episode • 0 Member • 0 Review</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 line-through">Rp0</span>
                            <span class="text-xl font-bold text-green-600 ml-2">Rp0</span>
                        </div>
                        <span class="text-sm text-gray-500">Discount %</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Wayan Krishna</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <rect x="20" y="30" width="60" height="40" rx="5" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <rect x="25" y="35" width="15" height="10" fill="white"/>
                        <rect x="45" y="35" width="15" height="10" fill="white"/>
                        <rect x="65" y="35" width="10" height="10" fill="white"/>
                        <text x="50" y="85" text-anchor="middle" fill="white" font-size="8" font-weight="bold">Data Viz</text>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Data Visualization</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Object Detection</h3>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>0 Episode • 0 Member • 0 Review</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 line-through">Rp400.000</span>
                            <span class="text-xl font-bold text-green-600 ml-2">Rp280.000</span>
                        </div>
                        <span class="text-sm text-green-600">Discount 30%</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Wayan Krishna</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-red-500 flex items-center justify-center">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
                        <circle cx="30" cy="40" r="15" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="70" cy="40" r="15" fill="rgba(255,255,255,0.2)" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="65" r="20" fill="rgba(255,255,255,0.3)" stroke="white" stroke-width="2"/>
                        <text x="50" y="90" text-anchor="middle" fill="white" font-size="8" font-weight="bold">LLM</text>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Large Language Model</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Face Recognition</h3>
                    <div class="text-sm text-gray-600 mb-4">
                        <p>0 Episode • 0 Member • 0 Review</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 line-through">Rp2.000.000</span>
                            <span class="text-xl font-bold text-green-600 ml-2">Rp1.000.000</span>
                        </div>
                        <span class="text-sm text-green-600">Discount 50%</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Wayan Krishna</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                Lihat Semua Produk Layanan
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" style="color: #1a202c !important;">TUNGGU APA LAGI ?</h2>
        <p class="text-xl text-gray-900 mb-8" style="color: #1a202c !important;">
            Pemakaian GPU cloud mempermudah pembelajaran machine learning, AI
        </p>
        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300">
            Daftar Gratis!
        </a>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
            <p class="text-lg text-gray-600">
                Punya pertanyaan? Kami siap membantu Anda!
            </p>
        </div>
        <div class="max-w-2xl mx-auto">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('subject') border-red-500 @enderror">
                        @error('subject')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Telepon (Opsional)</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('phone') border-red-500 @enderror">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                    <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

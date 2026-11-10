<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Ensure text visibility -->
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: #1a202c;
        }

        .text-white {
            color: #ffffff !important;
        }

        .text-gray-100 {
            color: #f7fafc !important;
        }

        .text-gray-900 {
            color: #1a202c !important;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                            Indonesia-AI
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:ml-10 md:flex md:space-x-8">
                        <a href="{{ route('home') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('services') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                            Layanan
                        </a>
                        <a href="{{ route('about') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                            Tentang Kami
                        </a>
                        <a href="#contact" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">
                            Kontak
                        </a>
                    </div>
                </div>

                <!-- Auth Links -->
                <div class="hidden md:flex md:items-center md:space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Register
                        </a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="mobile-menu-button text-gray-900 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Home</a>
                <a href="{{ route('services') }}" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Layanan</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Tentang Kami</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Kontak</a>
                @auth
                    <a href="{{ route('dashboard') }}" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-3 py-2 text-base font-medium text-red-600 hover:text-red-800">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Login</a>
                    <a href="{{ route('register') }}" class="block px-3 py-2 text-base font-medium text-blue-600 hover:text-blue-800">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-lg font-semibold mb-4">Indonesia-AI</h3>
                    <p class="text-gray-300 mb-4">
                        Kami hadir sebagai pusat unggulan yang mendorong penerapan teknologi Artificial Intelligence (AI) dalam berbagai sektor industri dan kehidupan sehari-hari.
                    </p>
                </div>
                <div>
                    <h4 class="text-md font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition duration-300">Layanan</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Tim Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-md font-semibold mb-4">Komunitas</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Ulasan Member</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Grup Telegram</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Komunitas Discord</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; {{ date('Y') }} Indonesia-AI. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>

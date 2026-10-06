<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0">
            <div>
                <h2 class="font-bold text-2xl text-gray-900 dark:text-white leading-tight">
                    {{ __('Welcome back, ') . Auth::user()->name }}! 👋
                </h2>
                <p class="text-gray-600 dark:text-gray-400 mt-1">Here's what's happening with your account today.</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium">
                    {{ now()->format('l, M d, Y') }}
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Welcome Card -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-800 dark:to-gray-900 overflow-hidden shadow-xl rounded-2xl border border-blue-200 dark:border-gray-700">
                <div class="p-8">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="h-16 w-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center shadow-lg">
                                <span class="text-2xl font-bold text-white">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Welcome back, {{ Auth::user()->name }}!</h3>
                                <p class="text-blue-600 dark:text-blue-400 mt-1 font-medium">
                                    You're successfully logged in to your dashboard.
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                    Last login: {{ now()->format('M d, Y \a\t H:i') }}
                                </p>
                            </div>
                        </div>
                        <div class="text-right bg-white dark:bg-gray-800 rounded-lg p-4 shadow-md">
                            <p class="text-sm text-gray-600 dark:text-gray-400">Member since</p>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">{{ Auth::user()->created_at->format('F Y') }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ Auth::user()->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Profile Completion -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-gray-800 dark:to-gray-900 overflow-hidden shadow-xl rounded-2xl border border-green-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-green-600 dark:text-green-400 truncate">Profile Completion</dt>
                                    <dd class="text-2xl font-bold text-green-900 dark:text-green-100">100%</dd>
                                    <dd class="text-xs text-green-500 dark:text-green-400 mt-1">All fields completed</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="bg-green-200 dark:bg-green-800 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Status -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-900 overflow-hidden shadow-xl rounded-2xl border border-blue-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-blue-600 dark:text-blue-400 truncate">Account Status</dt>
                                    <dd class="text-2xl font-bold text-blue-900 dark:text-blue-100">Active</dd>
                                    <dd class="text-xs text-blue-500 dark:text-blue-400 mt-1">Verified account</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <div class="flex-1">
                                <div class="flex items-center text-xs text-blue-600 dark:text-blue-400">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                                    Online now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Role -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-gray-800 dark:to-gray-900 overflow-hidden shadow-xl rounded-2xl border border-purple-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-purple-600 dark:text-purple-400 truncate">Role</dt>
                                    <dd class="text-2xl font-bold text-purple-900 dark:text-purple-100 capitalize">{{ Auth::user()->role ?? 'User' }}</dd>
                                    <dd class="text-xs text-purple-500 dark:text-purple-400 mt-1">Standard permissions</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-purple-400 to-purple-500 text-white">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                Member
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Quick Actions
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Access your most used features</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <a href="{{ route('profile.edit') }}" class="group flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:from-blue-100 hover:to-blue-200 dark:hover:from-gray-600 dark:hover:to-gray-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg border border-blue-200 dark:border-gray-600">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-blue-900 dark:text-blue-100 mt-3 text-center">Edit Profile</span>
                            <span class="text-xs text-blue-600 dark:text-blue-400 mt-1 text-center">Update your information</span>
                        </a>

                        <a href="{{ route('home') }}" class="group flex flex-col items-center p-6 bg-gradient-to-br from-green-50 to-green-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:from-green-100 hover:to-green-200 dark:hover:from-gray-600 dark:hover:to-gray-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg border border-green-200 dark:border-gray-600">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-green-900 dark:text-green-100 mt-3 text-center">Visit Website</span>
                            <span class="text-xs text-green-600 dark:text-green-400 mt-1 text-center">Go to homepage</span>
                        </a>

                        <a href="{{ route('services') }}" class="group flex flex-col items-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:from-purple-100 hover:to-purple-200 dark:hover:from-gray-600 dark:hover:to-gray-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg border border-purple-200 dark:border-gray-600">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-purple-900 dark:text-purple-100 mt-3 text-center">Our Services</span>
                            <span class="text-xs text-purple-600 dark:text-purple-400 mt-1 text-center">Explore our offerings</span>
                        </a>

                        <a href="{{ route('about') }}" class="group flex flex-col items-center p-6 bg-gradient-to-br from-orange-50 to-orange-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:from-orange-100 hover:to-orange-200 dark:hover:from-gray-600 dark:hover:to-gray-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg border border-orange-200 dark:border-gray-600">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-orange-900 dark:text-orange-100 mt-3 text-center">About Us</span>
                            <span class="text-xs text-orange-600 dark:text-orange-400 mt-1 text-center">Learn more about us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

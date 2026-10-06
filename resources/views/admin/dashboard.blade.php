<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-bold text-2xl text-gray-900 leading-tight">
                    {{ __('Admin Dashboard') }}
                </h2>
                <p class="text-gray-600 mt-1">Welcome back, {{ Auth::user()->name }}! Here's what's happening today.</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium">
                    {{ now()->format('M d, Y') }}
                </div>
            </div>
        </div>
    </x-slot>

    <div class="space-y-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Users -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 overflow-hidden shadow-lg rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-blue-600 truncate">Total Users</dt>
                                <dd class="text-2xl font-bold text-blue-900" data-counter="{{ $totalUsers }}">0</dd>
                                <dd class="text-xs text-blue-500 mt-1">+12% from last month</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Admins -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 border border-green-200 overflow-hidden shadow-lg rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-green-600 truncate">Admins</dt>
                                <dd class="text-2xl font-bold text-green-900" data-counter="{{ $totalAdmins }}">0</dd>
                                <dd class="text-xs text-green-500 mt-1">Active administrators</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regular Users -->
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 border border-yellow-200 overflow-hidden shadow-lg rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-yellow-600 truncate">Regular Users</dt>
                                <dd class="text-2xl font-bold text-yellow-900" data-counter="{{ $totalRegularUsers }}">0</dd>
                                <dd class="text-xs text-yellow-500 mt-1">Standard members</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Messages -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 border border-purple-200 overflow-hidden shadow-lg rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-purple-600 truncate">Contact Messages</dt>
                                <dd class="text-2xl font-bold text-purple-900" data-counter="{{ $totalContacts }}">0</dd>
                                <dd class="text-xs text-purple-500 mt-1">Pending responses</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Users and Contacts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Users -->
            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                    <h3 class="text-lg font-bold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                        Recent Users
                    </h3>
                </div>
                <div class="p-6">
                    <div class="flow-root">
                        <ul role="list" class="space-y-3">
                            @forelse($recentUsers as $user)
                                <li class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors duration-200">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-md">
                                                <span class="text-sm font-bold text-white">{{ substr($user->name, 0, 1) }}</span>
                                            </div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $user->name }}</p>
                                            <p class="text-xs text-gray-500 truncate">{{ $user->email }}</p>
                                            <p class="text-xs text-gray-400">{{ $user->created_at->diffForHumans() }}</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $user->isAdmin() ? 'bg-gradient-to-r from-green-400 to-green-500 text-white' : 'bg-gradient-to-r from-blue-400 to-blue-500 text-white' }}">
                                                {{ $user->role ?? 'user' }}
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="text-center py-8">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                    <p class="text-sm text-gray-500 mt-2">No users found.</p>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('admin.users') }}" class="w-full flex justify-center items-center px-4 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-200 shadow-md hover:shadow-lg">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            View all users
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Contacts -->
            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 px-6 py-4">
                    <h3 class="text-lg font-bold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Recent Contact Messages
                    </h3>
                </div>
                <div class="p-6">
                    <div class="flow-root">
                        <ul role="list" class="space-y-3">
                            @forelse($recentContacts as $contact)
                                <li class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors duration-200">
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0">
                                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center shadow-md">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $contact->name ?? 'N/A' }}</p>
                                            <p class="text-xs text-gray-500 truncate">{{ $contact->email ?? 'N/A' }}</p>
                                            <p class="text-sm text-gray-600 mt-1 line-clamp-2">{{ Str::limit($contact->message ?? 'N/A', 80) }}</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="text-xs text-gray-400 bg-gray-200 px-2 py-1 rounded-full">
                                                {{ $contact->created_at ? $contact->created_at->diffForHumans() : 'N/A' }}
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="text-center py-8">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-sm text-gray-500 mt-2">No contact messages found.</p>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('admin.contacts') }}" class="w-full flex justify-center items-center px-4 py-3 bg-gradient-to-r from-purple-500 to-purple-600 text-white font-semibold rounded-lg hover:from-purple-600 hover:to-purple-700 transition-all duration-200 shadow-md hover:shadow-lg">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            View all messages
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #111827;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="min-h-screen">
        <nav class="bg-gray-800 shadow-lg border-b border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-3 group">
                            <img src="{{ asset('Logo.png') }}" alt="ZeroDay Fan Shop Logo" class="h-12 w-auto transform transition duration-300 group-hover:scale-110">
                            <span class="font-bold text-white text-xl group-hover:text-blue-400 transition duration-300">ZeroDay Fan Shop</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Home</a>
                        <a href="/products" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Products</a>
                        <a href="/cart" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Cart</a>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        @auth
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                    {{ __('auth.logout') }}
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                {{ __('auth.login') }}
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @yield('content')
        </main>
    </div>

    <footer class="bg-gray-800 border-t border-gray-700 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">About Us</h3>
                    <p class="mt-4 text-base text-gray-300">Your one-stop shop for cybersecurity merchandise and tools.</p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Quick Links</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="/" class="text-base text-gray-300 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="/products" class="text-base text-gray-300 hover:text-white transition duration-300">Products</a></li>
                        <li><a href="/cart" class="text-base text-gray-300 hover:text-white transition duration-300">Cart</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Contact</h3>
                    <p class="mt-4 text-base text-gray-300">Email: support@zerodayfanshop.com</p>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8">
                <p class="text-center text-gray-400">&copy; 2024 ZeroDay Fan Shop. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

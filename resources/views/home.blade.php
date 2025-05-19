@extends('layouts.app')

@section('content')
<div class="space-y-16">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 rounded-2xl overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Welcome to ZeroDay Fan Shop</h1>
                <p class="mt-6 text-xl text-blue-100 max-w-3xl mx-auto">Your ultimate destination for cybersecurity merchandise and tools. Gear up with the best security-themed products.</p>
                <div class="mt-10">
                    <a href="/products" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-900">Featured Categories</h2>
        <p class="mt-4 text-lg text-gray-600">Explore our most popular product categories</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden transform transition duration-300 hover:scale-105">
            <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                <span class="text-white text-2xl font-bold">Apparel</span>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Hacker Fashion</h3>
                <p class="text-gray-600">Stylish clothing for the modern security professional</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden transform transition duration-300 hover:scale-105">
            <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                <span class="text-white text-2xl font-bold">Tools</span>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Security Tools</h3>
                <p class="text-gray-600">Essential tools for penetration testing and security research</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden transform transition duration-300 hover:scale-105">
            <div class="h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                <span class="text-white text-2xl font-bold">Accessories</span>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Gadgets & More</h3>
                <p class="text-gray-600">Cool accessories for tech enthusiasts</p>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-gray-50 rounded-2xl p-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900">Stay Updated</h2>
            <p class="mt-4 text-lg text-gray-600">Subscribe to our newsletter for the latest products and security news</p>
            <div class="mt-8 flex max-w-md mx-auto">
                <input type="email" class="min-w-0 flex-auto rounded-l-lg border-0 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-blue-600" placeholder="Enter your email">
                <button type="submit" class="flex-none rounded-r-lg bg-blue-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
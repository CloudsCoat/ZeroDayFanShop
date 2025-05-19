@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="md:flex">
        <div class="md:w-1/2">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover">
            @else
                <div class="w-full h-96 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                    <span class="text-gray-400">No image available</span>
                </div>
            @endif
        </div>
        <div class="p-8 md:w-1/2">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-6 text-lg">{{ $product->description }}</p>
            <div class="mb-6">
                <span class="text-3xl font-bold text-gray-900">€{{ number_format($product->price, 2) }}</span>
                @if($product->stock > 0)
                    <span class="ml-4 text-sm text-green-600">In Stock: {{ $product->stock }} available</span>
                @else
                    <span class="ml-4 text-sm text-red-600">Out of Stock</span>
                @endif
            </div>
            <div class="space-y-4">
                <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition duration-300 hover:scale-105">
                    Add to Cart
                </button>
                <button class="w-full border border-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transform transition duration-300 hover:scale-105">
                    Add to Wishlist
                </button>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Product Details</h3>
                <ul class="space-y-2 text-gray-600">
                    <li>• High-quality materials</li>
                    <li>• Secure packaging</li>
                    <li>• Fast shipping</li>
                    <li>• 30-day return policy</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

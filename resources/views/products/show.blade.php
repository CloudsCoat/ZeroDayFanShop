@extends('layouts.app')

@section('content')
<div class="bg-gray-800 rounded-xl shadow-sm overflow-hidden">
    <div class="md:flex">
        <div class="md:w-1/2">
            @if($product->image)
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover">
            @else
                <div class="w-full h-96 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                    <span class="text-gray-400">No image available</span>
                </div>
            @endif
        </div>
        <div class="p-8 md:w-1/2">
            <h1 class="text-3xl font-bold text-white mb-4">{{ $product->name }}</h1>
            <p class="text-gray-300 mb-6 text-lg">{{ $product->description }}</p>
            <div class="mb-6">
                <span class="text-3xl font-bold text-white">€{{ number_format($product->price, 2) }}</span>
                @if($product->stock > 0)
                    <span class="ml-4 text-sm text-green-400">In Stock: {{ $product->stock }} available</span>
                @else
                    <span class="ml-4 text-sm text-red-400">Out of Stock</span>
                @endif
            </div>
            <div class="space-y-4">
                @if($product->stock > 0)
                    <form action="{{ route('cart.add', $product) }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition duration-300 hover:scale-105">
                            Add to Cart
                        </button>
                    </form>
                @else
                    <button disabled class="w-full bg-gray-600 text-gray-400 px-6 py-3 rounded-lg cursor-not-allowed">
                        Out of Stock
                    </button>
                @endif
                <button class="w-full border border-gray-600 text-gray-300 px-6 py-3 rounded-lg hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transform transition duration-300 hover:scale-105">
                    Add to Wishlist
                </button>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700">
                <h3 class="text-lg font-semibold text-white mb-4">Product Details</h3>
                <ul class="space-y-2 text-gray-300">
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

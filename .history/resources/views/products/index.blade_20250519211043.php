@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Our Products</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our collection of cybersecurity merchandise and tools. Perfect for hackers, security professionals, and tech enthusiasts.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
        <div class="bg-white rounded-xl shadow-sm overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
            @if($product->image)
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-56 object-cover">
            @else
                <div class="w-full h-56 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                    <span class="text-gray-400">No image available</span>
                </div>
            @endif
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-900">{{ $product->name }}</h2>
                <p class="text-gray-600 mb-4">{{ Str::limit($product->description, 100) }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-bold text-gray-900">€{{ number_format($product->price, 2) }}</span>
                    <a href="{{ route('products.show', $product) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        View Details
                    </a>
                </div>
                @if($product->stock > 0)
                    <div class="mt-4 text-sm text-green-600">
                        In Stock: {{ $product->stock }} available
                    </div>
                @else
                    <div class="mt-4 text-sm text-red-600">
                        Out of Stock
                    </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

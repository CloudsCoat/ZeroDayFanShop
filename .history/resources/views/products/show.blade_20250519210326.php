@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="md:flex">
        <div class="md:w-1/2">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover">
            @else
                <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-400">No image available</span>
                </div>
            @endif
        </div>
        <div class="p-8 md:w-1/2">
            <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-6">{{ $product->description }}</p>
            <div class="mb-6">
                <span class="text-2xl font-bold text-gray-900">€{{ number_format($product->price, 2) }}</span>
                <span class="text-gray-500 ml-2">(In stock: {{ $product->stock }})</span>
            </div>
            <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 w-full">
                Add to Cart
            </button>
        </div>
    </div>
</div>
@endsection

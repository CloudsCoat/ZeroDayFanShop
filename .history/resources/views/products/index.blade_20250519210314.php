@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($products as $product)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
        @else
            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                <span class="text-gray-400">No image available</span>
            </div>
        @endif
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-600 mb-4">{{ Str::limit($product->description, 100) }}</p>
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-gray-900">€{{ number_format($product->price, 2) }}</span>
                <a href="{{ route('products.show', $product) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

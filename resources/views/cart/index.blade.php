@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Shopping Cart</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Review your items and proceed to checkout</p>
    </div>

    @if(session('success'))
        <div class="bg-green-500/20 border border-green-500 text-green-400 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(count($cart) > 0)
        <div class="bg-gray-800 rounded-xl shadow-sm overflow-hidden">
            <div class="p-6">
                <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-700">
                        @foreach($cart as $item)
                            <li class="py-6 flex">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md">
                                    @if($item['image'])
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="h-full w-full object-cover object-center">
                                    @else
                                        <div class="h-full w-full bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                                            <span class="text-gray-400">No image</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-white">
                                            <h3>{{ $item['name'] }}</h3>
                                            <p class="ml-4">€{{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        <div class="flex items-center space-x-4">
                                            <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="flex items-center">
                                                @csrf
                                                <label for="quantity" class="text-gray-300 mr-2">Qty:</label>
                                                <input type="number" name="quantity" id="quantity" value="{{ $item['quantity'] }}" min="1" class="w-16 bg-gray-700 border border-gray-600 rounded-md text-white px-2 py-1">
                                                <button type="submit" class="ml-2 text-blue-400 hover:text-blue-300">Update</button>
                                            </form>
                                        </div>

                                        <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-red-400 hover:text-red-300">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 px-6 py-6">
                <div class="flex justify-between text-base font-medium text-white">
                    <p>Subtotal</p>
                    <p>€{{ number_format($total, 2) }}</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-400">Shipping and taxes calculated at checkout.</p>
                <div class="mt-6 space-y-4">
                    <a href="/checkout" class="flex w-full items-center justify-center rounded-md border border-transparent bg-blue-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-blue-700">
                        Checkout
                    </a>
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex w-full items-center justify-center rounded-md border border-gray-600 bg-transparent px-6 py-3 text-base font-medium text-gray-300 shadow-sm hover:bg-gray-700">
                            Clear Cart
                        </button>
                    </form>
                </div>
                <div class="mt-6 text-center">
                    <a href="/products" class="text-sm font-medium text-blue-400 hover:text-blue-300">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-12">
            <h3 class="text-2xl font-medium text-gray-300">Your cart is empty</h3>
            <p class="mt-4 text-gray-400">Add some products to your cart to see them here.</p>
            <div class="mt-6">
                <a href="/products" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                    Browse Products
                </a>
            </div>
        </div>
    @endif
</div>
@endsection
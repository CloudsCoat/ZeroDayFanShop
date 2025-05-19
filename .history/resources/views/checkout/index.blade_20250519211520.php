@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Order Summary -->
        <div class="bg-gray-800 rounded-xl shadow-sm p-6">
            <h2 class="text-2xl font-bold text-white mb-6">{{ __('checkout.order_summary') }}</h2>

            <div class="space-y-4">
                @foreach($cart as $item)
                    <div class="flex items-center justify-between py-4 border-b border-gray-700">
                        <div class="flex items-center">
                            <div class="h-16 w-16 flex-shrink-0 overflow-hidden rounded-md">
                                @if($item['image'])
                                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="h-full w-full object-cover">
                                @else
                                    <div class="h-full w-full bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                                        <span class="text-gray-400">No image</span>
                                    </div>
                                @endif
                            </div>
                            <div class="ml-4">
                                <h3 class="text-white">{{ $item['name'] }}</h3>
                                <p class="text-gray-400">Qty: {{ $item['quantity'] }}</p>
                            </div>
                        </div>
                        <p class="text-white">€{{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 space-y-4">
                <div class="flex justify-between text-white">
                    <span>{{ __('checkout.subtotal') }}</span>
                    <span>€{{ number_format($total, 2) }}</span>
                </div>
                <div class="flex justify-between text-white">
                    <span>{{ __('checkout.shipping') }}</span>
                    <span>€0.00</span>
                </div>
                <div class="flex justify-between text-white font-bold text-lg pt-4 border-t border-gray-700">
                    <span>{{ __('checkout.total') }}</span>
                    <span>€{{ number_format($total, 2) }}</span>
                </div>
            </div>
        </div>

        <!-- Checkout Form -->
        <div class="bg-gray-800 rounded-xl shadow-sm p-6">
            <h2 class="text-2xl font-bold text-white mb-6">{{ __('checkout.shipping_details') }}</h2>

            <form action="{{ route('checkout.process') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">{{ __('checkout.email') }}</label>
                    <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300">{{ __('checkout.name') }}</label>
                    <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-gray-300">{{ __('checkout.address') }}</label>
                    <input type="text" name="address" id="address" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-300">{{ __('checkout.city') }}</label>
                        <input type="text" name="city" id="city" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="postal_code" class="block text-sm font-medium text-gray-300">{{ __('checkout.postal_code') }}</label>
                        <input type="text" name="postal_code" id="postal_code" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                </div>

                <div>
                    <label for="country" class="block text-sm font-medium text-gray-300">{{ __('checkout.country') }}</label>
                    <select name="country" id="country" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="NL">Netherlands</option>
                        <option value="BE">Belgium</option>
                        <option value="DE">Germany</option>
                        <option value="FR">France</option>
                    </select>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition duration-300 hover:scale-105">
                        {{ __('checkout.place_order') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

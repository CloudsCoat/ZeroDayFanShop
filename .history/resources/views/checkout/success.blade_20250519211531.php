@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-center">
    <div class="bg-gray-800 rounded-xl shadow-sm p-8">
        <div class="mb-6">
            <svg class="mx-auto h-16 w-16 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-white mb-4">{{ __('checkout.order_success') }}</h1>
        <p class="text-gray-300 mb-8">{{ __('checkout.thank_you') }}</p>

        <div class="space-y-4">
            <a href="{{ route('products.index') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition duration-300 hover:scale-105">
                {{ __('checkout.continue_shopping') }}
            </a>
        </div>
    </div>
</div>
@endsection

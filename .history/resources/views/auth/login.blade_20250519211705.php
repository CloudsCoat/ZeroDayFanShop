@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-gray-800 rounded-xl shadow-sm p-8">
        <h2 class="text-2xl font-bold text-white mb-6">{{ __('auth.login') }}</h2>

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">{{ __('auth.email') }}</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">{{ __('auth.password') }}</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition duration-300 hover:scale-105">
                    {{ __('auth.login_button') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-gray-800 rounded-xl shadow-sm p-8 text-center">
        @if($isAdmin)
            <h1 class="text-3xl font-bold text-white mb-4">Admin Dashboard</h1>
            <p class="text-gray-300 mb-8">Welkom, admin! Hier kun je geheime CTF hints of statistieken tonen.</p>
            <div class="mt-8">
                <span class="inline-block bg-blue-700 text-white px-4 py-2 rounded-lg font-semibold">Je bent ingelogd als: <span class="text-blue-300">{{ $user->email }}</span></span>
            </div>
        @else
            <h1 class="text-3xl font-bold text-white mb-4">Geen toegang tot admin dashboard</h1>
            <p class="text-gray-300 mb-8">Hallo {{ $user->email }}, je bent ingelogd maar je bent geen admin.</p>
        @endif
    </div>
</div>
@endsection

@push(' domready')
<script>
// You can add admin-specific JS here
</script>
@endpush

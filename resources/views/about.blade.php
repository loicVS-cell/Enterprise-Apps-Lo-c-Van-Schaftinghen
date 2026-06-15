@extends('layouts.app')

@section('title', 'Over ons')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-black">Over ons</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="rounded-lg border border-gray-200 bg-white p-6 space-y-4">
            <div>
                <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Adres</h2>
                <p class="text-gray-800">Quai de l'Industrie 170<br>1070 Anderlecht</p>
            </div>

            <div>
                <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Contact</h2>
                <p class="text-gray-800">info@anderlechtse-ngo.be</p>
                <p class="text-gray-800">+32 (0)2 520 00 00</p>
            </div>
        </div>

        <div class="rounded-lg border border-gray-200 bg-white p-6">
            <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Omschrijving</h2>
            <p class="text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
@endsection
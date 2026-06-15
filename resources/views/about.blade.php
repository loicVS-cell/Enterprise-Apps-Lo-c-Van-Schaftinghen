@extends('layouts.app')

@section('title', 'Over ons')

@section('content')

    <div class="page-heading">
        <h1>Over ons</h1>
        <p>Meer informatie over de Anderlechtse NGO</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

        {{-- Contact info --}}
        <div class="card p-6 space-y-5">
            <div>
                <p class="section-label">Adres</p>
                <p class="text-gray-800 text-sm leading-relaxed">
                    Quai de l'Industrie 170<br>
                    1070 Anderlecht
                </p>
            </div>
            <div class="border-t border-gray-100 pt-5">
                <p class="section-label">Contact</p>
                <div class="space-y-1 text-sm">
                    <a href="mailto:info@anderlechtse-ngo.be"
                       class="flex items-center gap-2 text-yellow-600 hover:text-yellow-700 font-medium transition">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        info@anderlechtse-ngo.be
                    </a>
                    <a href="tel:+3225200000"
                       class="flex items-center gap-2 text-gray-600 hover:text-gray-900 transition">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +32 (0)2 520 00 00
                    </a>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="card p-6">
            <p class="section-label">Over de organisatie</p>
            <p class="text-gray-700 leading-relaxed text-sm mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="mt-5 pt-5 border-t border-gray-100">
                <a href="{{ route('contact') }}" class="btn-primary">
                    Neem contact op
                </a>
            </div>
        </div>

    </div>

@endsection

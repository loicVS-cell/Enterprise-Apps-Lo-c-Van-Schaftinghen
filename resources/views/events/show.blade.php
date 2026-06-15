@extends('layouts.app')

@section('title', $event->title)

@section('content')

    {{-- Back link --}}
    <div class="mb-6">
        <a href="{{ route('events.index') }}" class="btn-ghost inline-flex items-center gap-1.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Terug naar overzicht
        </a>
    </div>

    {{-- Event card --}}
    <div class="card overflow-hidden">

        {{-- Header strip --}}
        <div class="bg-[#0a0a0a] px-6 py-6">
            <p class="text-yellow-400 text-xs font-semibold uppercase tracking-widest mb-2">{{ $event->organization }}</p>
            <h1 class="text-2xl font-bold text-white leading-snug" style="font-family:'Syne',sans-serif">{{ $event->title }}</h1>
        </div>

        {{-- Body --}}
        <div class="px-6 py-6 space-y-6">

            @if ($event->description)
                <div>
                    <p class="section-label">Beschrijving</p>
                    <p class="text-gray-700 leading-relaxed text-sm">{{ $event->description }}</p>
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">

                @if ($event->tijdstip)
                    <div class="flex gap-3 items-start">
                        <span class="mt-0.5 w-8 h-8 rounded-lg bg-yellow-50 border border-yellow-200 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="section-label">Tijdstip</p>
                            <p class="text-gray-900 text-sm font-medium">{{ \Carbon\Carbon::parse($event->tijdstip)->format('d/m/Y — H:i') }}</p>
                        </div>
                    </div>
                @endif

                @if ($event->location)
                    <div class="flex gap-3 items-start">
                        <span class="mt-0.5 w-8 h-8 rounded-lg bg-yellow-50 border border-yellow-200 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="section-label">Locatie</p>
                            <p class="text-gray-900 text-sm font-medium">{{ $event->location->name }}</p>
                            <p class="text-gray-500 text-xs mt-0.5">{{ $event->location->address }}</p>
                            <p class="text-gray-400 text-xs">Capaciteit: {{ $event->location->capacity }} personen</p>
                        </div>
                    </div>
                @endif

                @if ($event->email_contactpersoon)
                    <div class="flex gap-3 items-start">
                        <span class="mt-0.5 w-8 h-8 rounded-lg bg-yellow-50 border border-yellow-200 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="section-label">Contactpersoon</p>
                            <a href="mailto:{{ $event->email_contactpersoon }}" class="text-yellow-600 hover:text-yellow-700 text-sm font-medium transition">
                                {{ $event->email_contactpersoon }}
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('title', $event->title)

@section('content')
    <div class="mb-8">
        <a href="{{ route('events.index') }}" class="text-gray-600 hover:text-black transition text-sm">&larr; Terug naar overzicht</a>
    </div>

    <div class="rounded-lg border border-gray-200 bg-white overflow-hidden">
        <div class="bg-black px-6 py-4">
            <h1 class="text-2xl font-bold text-white">{{ $event->title }}</h1>
            <p class="text-yellow-400 text-sm mt-1">{{ $event->organization }}</p>
        </div>

        <div class="px-6 py-6 space-y-4">
            @if ($event->description)
                <div>
                    <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Beschrijving</h2>
                    <p class="text-gray-800">{{ $event->description }}</p>
                </div>
            @endif

            <div class="grid grid-cols-2 gap-6">
                @if ($event->tijdstip)
                    <div>
                        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Tijdstip</h2>
                        <p class="text-gray-800">{{ \Carbon\Carbon::parse($event->tijdstip)->format('d/m/Y H:i') }}</p>
                    </div>
                @endif
                @if ($event->location)
                    <div>
                        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Locatie</h2>
                        <p class="text-gray-800 font-medium">{{ $event->location->name }}</p>
                        <p class="text-gray-600 text-sm">{{ $event->location->address }}</p>
                        <p class="text-gray-600 text-sm">Capaciteit: {{ $event->location->capacity }} personen</p>
                    </div>
                @endif
                @if ($event->email_contactpersoon)
                    <div>
                        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Mail contactpersoon</h2>
                        <p class="text-gray-800">{{ $event->email_contactpersoon }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
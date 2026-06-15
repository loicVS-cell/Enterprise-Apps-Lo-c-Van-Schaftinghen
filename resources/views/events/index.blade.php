@extends('layouts.app')

@section('title', 'Evenementen')

@section('content')

    {{-- Page header --}}
    <div class="page-heading flex items-start justify-between">
        <div>
            <h1>Evenementen</h1>
            <p>Overzicht van alle geplande evenementen</p>
        </div>
        <a href="{{ route('events.create') }}" class="btn-primary">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
            Nieuw evenement
        </a>
    </div>

    {{-- Table card --}}
    <div class="card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="data-table">
                <thead class="bg-[#0a0a0a]">
                    <tr>
                        <th class="!text-gray-400 px-5 py-3.5 text-left text-xs font-semibold uppercase tracking-wider">Titel</th>
                        <th class="!text-gray-400 px-5 py-3.5 text-left text-xs font-semibold uppercase tracking-wider">Organisatie / Locatie</th>
                        <th class="!text-gray-400 px-5 py-3.5 text-right text-xs font-semibold uppercase tracking-wider">Actie</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @forelse ($events as $event)
                        <tr class="hover:bg-yellow-50/60 transition">
                            <td class="px-5 py-4">
                                <span class="text-sm font-semibold text-gray-900">{{ $event->title }}</span>
                            </td>
                            <td class="px-5 py-4">
                                <span class="text-sm text-gray-600">{{ $event->organization }}</span>
                                @if($event->location)
                                    <span class="text-gray-300 mx-1.5">·</span>
                                    <span class="text-xs text-gray-400">{{ $event->location->name }}</span>
                                @endif
                            </td>
                            <td class="px-5 py-4 text-right">
                                <a href="{{ route('events.show', $event) }}" class="btn-primary py-1.5 px-3.5 text-xs">
                                    Bekijken
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-5 py-16 text-center">
                                <p class="text-gray-400 text-sm">Nog geen evenementen gevonden.</p>
                                <a href="{{ route('events.create') }}" class="btn-primary mt-4">Eerste evenement toevoegen</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

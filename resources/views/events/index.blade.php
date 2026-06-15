@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-black">Evenementen</h1>
        <p class="text-gray-600 mt-1">Overzicht van de laatste evenementen</p>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-black text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Titel</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Organisatie</th>
                    <th class="px-6 py-3 text-right text-sm font-semibold uppercase tracking-wider">Details</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse ($events as $event)
                    <tr class="hover:bg-yellow-50 transition">
                        <td class="px-6 py-4 text-sm font-medium text-black">{{ $event->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $event->organization }}@if($event->location) — {{ $event->location->name }}@endif</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('events.show', $event) }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1.5 rounded text-sm transition">Openen</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-12 text-center text-gray-500">Nog geen evenementen.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="{{ route('events.create') }}" class="inline-block bg-black hover:bg-gray-800 text-white font-semibold px-6 py-2.5 rounded transition">Nieuw evenement</a>
    </div>
@endsection
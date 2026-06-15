@extends('layouts.app')

@section('title', 'Nieuw evenement')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-black">Nieuw evenement</h1>
        <p class="text-gray-600 mt-1">Voeg een nieuw evenement toe</p>
    </div>

    <div class="max-w-2xl">
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-400 bg-red-50 p-4">
                <p class="font-semibold text-red-800 text-sm">Er zijn fouten opgetreden:</p>
                <ul class="mt-2 list-disc list-inside text-sm text-red-700 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('events.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-semibold text-black mb-1">Titel</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('title') border-red-500 @enderror">
                @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="organization" class="block text-sm font-semibold text-black mb-1">Organisatie</label>
                <input type="text" name="organization" id="organization" value="{{ old('organization') }}" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('organization') border-red-500 @enderror">
                @error('organization') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-black mb-1">Beschrijving</label>
                <textarea name="description" id="description" rows="4" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="tijdstip" class="block text-sm font-semibold text-black mb-1">Tijdstip</label>
                    <input type="datetime-local" name="tijdstip" id="tijdstip" value="{{ old('tijdstip') }}" required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('tijdstip') border-red-500 @enderror">
                    @error('tijdstip') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="location_id" class="block text-sm font-semibold text-black mb-1">Locatie</label>
                    <select name="location_id" id="location_id" required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('location_id') border-red-500 @enderror">
                        <option value="">Kies een locatie</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                                {{ $location->name }} ({{ $location->address }})
                            </option>
                        @endforeach
                    </select>
                    @error('location_id') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="email_contactpersoon" class="block text-sm font-semibold text-black mb-1">Mail contactpersoon</label>
                <input type="email" name="email_contactpersoon" id="email_contactpersoon" value="{{ old('email_contactpersoon') }}" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('email_contactpersoon') border-red-500 @enderror">
                @error('email_contactpersoon') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2.5 rounded transition">Opslaan</button>
                <a href="{{ route('events.index') }}" class="text-gray-600 hover:text-black transition text-sm">Annuleren</a>
            </div>
        </form>
    </div>
@endsection
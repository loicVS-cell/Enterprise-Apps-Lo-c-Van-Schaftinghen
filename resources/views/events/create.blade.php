@extends('layouts.app')

@section('title', 'Nieuw evenement')

@section('content')

    {{-- Page header --}}
    <div class="page-heading">
        <h1>Nieuw evenement</h1>
        <p>Vul de gegevens in om een evenement aan te maken</p>
    </div>

    <div class="max-w-2xl">

        @if ($errors->any())
            <div class="alert-error mb-6">
                <p class="font-semibold text-red-800 text-sm mb-1">Er zijn fouten opgetreden:</p>
                <ul class="list-disc list-inside text-sm text-red-600 space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card p-6">
            <form action="{{ route('events.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="title" class="field-label">Titel</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        placeholder="Naam van het evenement"
                        class="field-input @error('title') error @enderror">
                    @error('title') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="organization" class="field-label">Organisatie</label>
                    <input type="text" name="organization" id="organization" value="{{ old('organization') }}" required
                        placeholder="Naam van de organisatie"
                        class="field-input @error('organization') error @enderror">
                    @error('organization') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="description" class="field-label">Beschrijving</label>
                    <textarea name="description" id="description" rows="4" required
                        placeholder="Korte omschrijving van het evenement…"
                        class="field-input @error('description') error @enderror">{{ old('description') }}</textarea>
                    @error('description') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="tijdstip" class="field-label">Tijdstip</label>
                        <input type="datetime-local" name="tijdstip" id="tijdstip" value="{{ old('tijdstip') }}" required
                            class="field-input @error('tijdstip') error @enderror">
                        @error('tijdstip') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="location_id" class="field-label">Locatie</label>
                        <select name="location_id" id="location_id" required
                            class="field-input @error('location_id') error @enderror">
                            <option value="">Kies een locatie</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                                    {{ $location->name }} ({{ $location->address }})
                                </option>
                            @endforeach
                        </select>
                        @error('location_id') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="email_contactpersoon" class="field-label">E-mail contactpersoon</label>
                    <input type="email" name="email_contactpersoon" id="email_contactpersoon" value="{{ old('email_contactpersoon') }}" required
                        placeholder="naam@voorbeeld.be"
                        class="field-input @error('email_contactpersoon') error @enderror">
                    @error('email_contactpersoon') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 pt-2 border-t border-gray-100">
                    <button type="submit" class="btn-primary">Opslaan</button>
                    <a href="{{ route('events.index') }}" class="btn-ghost">Annuleren</a>
                </div>

            </form>
        </div>
    </div>

@endsection

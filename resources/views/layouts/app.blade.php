@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <div class="page-heading">
        <h1>Contact</h1>
        <p>Stuur een bericht naar de administrators</p>
    </div>

    @if (session('success'))
        <div class="alert-success mb-6 flex items-center gap-2">
            <svg class="w-4 h-4 text-green-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
            {{ session('success') }}
        </div>
    @endif

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
            <form action="{{ route('contact') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="field-label">Naam</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        placeholder="Uw volledige naam"
                        class="field-input @error('name') error @enderror">
                    @error('name') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="field-label">E-mail</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        placeholder="naam@voorbeeld.be"
                        class="field-input @error('email') error @enderror">
                    @error('email') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="subject" class="field-label">Onderwerp</label>
                    <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                        placeholder="Waar gaat het over?"
                        class="field-input @error('subject') error @enderror">
                    @error('subject') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="message" class="field-label">Bericht</label>
                    <textarea name="message" id="message" rows="6" required
                        placeholder="Uw bericht…"
                        class="field-input @error('message') error @enderror">{{ old('message') }}</textarea>
                    @error('message') <p class="field-error">{{ $message }}</p> @enderror
                </div>

                <div class="pt-2 border-t border-gray-100">
                    <button type="submit" class="btn-primary">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Verzenden
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection

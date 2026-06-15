@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-black">Contact</h1>
        <p class="text-gray-600 mt-1">Stuur een bericht naar de administrators</p>
    </div>

    @if (session('success'))
        <div class="mb-6 rounded-lg border border-green-400 bg-green-50 p-4">
            <p class="text-green-800 text-sm font-semibold">{{ session('success') }}</p>
        </div>
    @endif

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

        <form action="{{ route('contact') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-black mb-1">Naam</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('name') border-red-500 @enderror">
                @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-black mb-1">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('email') border-red-500 @enderror">
                @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="subject" class="block text-sm font-semibold text-black mb-1">Onderwerp</label>
                <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('subject') border-red-500 @enderror">
                @error('subject') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-semibold text-black mb-1">Bericht</label>
                <textarea name="message" id="message" rows="6" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 outline-none transition @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                @error('message') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2.5 rounded transition">Verzenden</button>
            </div>
        </form>
    </div>
@endsection
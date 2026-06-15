<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('location')->latest()->take(10)->get();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        $locations = \App\Models\Location::all();

        return view('events.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'organization' => 'required|max:255',
            'description' => 'required',
            'tijdstip' => 'required|date',
            'location_id' => 'required|exists:locations,id',
            'email_contactpersoon' => 'required|email:filter|max:255',
        ]);

        Event::create($validated);

        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {
        $event->load('location');

        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        //
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }
}

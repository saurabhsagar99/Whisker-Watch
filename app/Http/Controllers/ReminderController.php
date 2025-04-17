<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $pets = auth()->user()->pets;
        $reminders = Reminder::whereIn('pet_id', $pets->pluck('id'))->get();

        return view('reminders.index', compact('reminders', 'pets'));
    }

    public function create()
    {
        $pets = auth()->user()->pets;
        return view('reminders.create', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'required|exists:pets,id',
            'type' => 'required|string',
            'time' => 'required',
            'other_description' => 'nullable|string|required_if:type,Other',
        ]);

        Reminder::create($request->all());

        return redirect()->route('reminders.index')->with('success', 'Reminder added successfully.');
    }

    public function edit(Reminder $reminder)
    {
        $pets = auth()->user()->pets;
        return view('reminders.edit', compact('reminder', 'pets'));
    }

    public function update(Request $request, Reminder $reminder)
    {
        $request->validate([
            'pet_id' => 'required|exists:pets,id',
            'type' => 'required|string',
            'time' => 'required',
            'other_description' => 'nullable|string|required_if:type,Other',
        ]);

        $reminder->update($request->all());

        return redirect()->route('reminders.index')->with('success', 'Reminder updated successfully.');
    }

    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return redirect()->route('reminders.index')->with('success', 'Reminder deleted successfully.');
    }

    public function destroyAndReturn(Reminder $reminder)
    {
        // Same deletion logic as your original destroy method
        $reminder->delete();
        
        // Return to the previous page
        return redirect()->back()->with('success', 'Reminder deleted successfully');
    }
}


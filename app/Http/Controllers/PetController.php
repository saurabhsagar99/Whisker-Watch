<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function index()
    {
        $pets = Auth::user()->pets;
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'species' => 'required|string',
            'age' => 'required|integer',
        ]);

        Auth::user()->pets()->create($request->all());

        return redirect()->route('pets.index')->with('success', 'Pet added successfully.');
    }

    public function edit(Pet $pet)
    {
      
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
      

        $request->validate([
            'name' => 'required|string',
            'species' => 'required|string',
            'age' => 'required|integer',
            
        ]);

        $pet->update($request->all());

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully.');
    }

    public function destroy(Pet $pet)
    {
       

        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
    }
}


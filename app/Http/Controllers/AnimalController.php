<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animales = Animal::all();
        return view('animales.index', compact('animales'));
    }

    public function create()
    {
        return view('animales.create');        
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'url' => 'required|string'
        ]);

        Animal::create($request->all());

        return redirect()->route('animales.index')->with('success', 'Animal guardado correctamente.');
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animales.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animales.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'url' => 'required|string',
        ]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return redirect()->route('animales.index')->with('success', 'Animal actualizado correctamente.');
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('animales.index')->with('success', 'Animal eliminado correctamente.');
    }
}

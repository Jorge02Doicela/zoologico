<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animales=Animal::all();
        return view('animales.index',compact('animales'));
    }

    public function create()
    {
        return view('animales.create');        
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:255',
            'especie'=>'required|string|max:255',
            'url'=>'required|string'
        ]);
        //$animal=new Animal();
        //$animal->nombre=$request->nombre;
        //$animal->especie=$request->especie;
        //$animal->url=$request->url;
        //$aniaml->save();

        //Animal::create([
        //'nombre'=>$request->nombre,
        //'especie'=>$request->especie,
        //'url'=>$request->url,
        //])

        Animal::create($request->all());
        return redirect()->route('animales.index')->with('success','Animal guardado correctamente');
    }

    public function show($id)
    {
        $animal=Animal::find($id);
        return view('animales.show',compact('animal'));
    }

    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('animales.edit', compact('animal'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'url' => 'required|string',
        ]);

        $animal = Animal::find($id);
        
        if (!$animal) {
            return redirect()->route('animales.index')->with('error', 'Animal not found.');
        }

        $animal->update($request->all());

        return redirect()->route('animales.index')->with('success', 'Animal updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);
        
        if (!$animal) {
            return redirect()->route('animales.index')->with('error', 'Animal not found.');
        }

        $animal->delete();

        return redirect()->route('animales.index')->with('success', 'Animal deleted successfully.');
    }
}

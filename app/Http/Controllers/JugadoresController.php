<?php

namespace App\Http\Controllers;

use App\Models\Jugadores;
use App\Models\Categoria;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $busqueda = $request->busqueda;
        $jugadores = jugadores::where('nombre','like','%'.$busqueda.'%')->get();
        return view('jugadores.index')->with(compact('busqueda', 'jugadores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('jugadores.create')->with(compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nombre' => 'required',
            'id_categoria' => 'required',
            'fecha_nacimiento' => 'required',
            'nom_dorsal' => 'required',
            'num_dorsal' => 'required|interger',
        ],
        [
           'nombre.required' => 'Debes llenar el campo',
           'nombre.unique' => 'El nombre ya existe',
           'id_categoria.required' => 'Debes llenar el campo',
           'nom_dorsal.required' => 'Debes llenar el campo',
           'num_dorsal.required' => 'Debes llenar el campo',
        ]
    );

        $jugadores = new Jugadores;
        $jugadores->nombre = $request->nombre;
        $jugadores->fecha_nacimiento = $request->fecha_nacimiento;
        $jugadores->nom_dorsal = $request->nom_dorsal;
        $jugadores->num_dorsal = $request->num_dorsal;      
        $jugadores->id_categoria = $request->categoria;      
        $jugadores->save();

        return redirect(route('jugador.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Jugadores $jugadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugadores $id)
    {
        //
        $jugador = jugadores::find($id);
        return view('jugadores.edit')->with(compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugadores $id)
    {
        //
        $jugador = jugadores::find($id);
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->fecha_nacimiento;
        $jugador->posicion = $request->nom_dorsal;
        $jugador->save();
        return redirect()->route('jugadores.index')->with('success', 'Jugador modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugadores $jugadores)
    {
        //
    }

    //indexREST
    public function indexREST()
    {
        //
        $jugadores = jugadores::all();
        return $jugadores;
    }
}

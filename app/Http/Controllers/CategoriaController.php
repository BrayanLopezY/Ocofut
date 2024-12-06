<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $busqueda = $request->busqueda;
        $lista = Categoria::where('nombre','like','%' . $busqueda. '%')->get();
        return view('categorias.index')->with(compact('lista','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nombre' => 'required|unique:categorias|max:255',
        ], ['nombre.required' => 'Debes llenar el campo', 'nombre.unique' => 'Nombre ya existe',
        'nombre.max' => 'No debes exeder los caracteres especificados']
    );

        $cat = new Categoria;
        $cat->nombre = $request->nombre;
        $cat->save();

        return redirect(route('cats.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cat= Categoria::find($id);
        return view('categorias.edit')->with(compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nombre' => ['required',\Illuminate\Validation\Rule::unique('Categorias') ],
        ], ['nombre.required' => 'Debes llenar el campo', 'nombre.unique' => 'Nombre ya existe',
        'nombre.max' => 'No debes exeder los caracteres especificados']
    );

        $cats = Categoria::find($id);
        $cats->nombre = $request->nombre;
        $cats->save();  

        return redirect(route('cats.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $cat = Categoria::find($id);
        if ( $cat != null ){
            $cat->delete();
        }
        return redirect(route('cats.index'));
    }
    public function indexREST()
    {
        //
        $lista = Categoria::all();
        return  $lista;
        //return view('categorias.index')->with(compact('lista'));
    }

    public function showREST($id)
    {
        //
        $cat = Categoria::find($id);
        return $cat;
    }

    public function storeREST(Request $request)
    {

        if ($request->nombre){
            $cat = new Categoria;
            $cat->nombre = $request->nombre;
            $cat->save();
            $response['mensaje']= 'ok';
        }else{
            $response ['mensaje'] = 'Falta el campo NOMBRE';
        }
        return $response;
    }

    public function updateREST(Request $request, $id)
    {
        if ($request->nombre){
            $cats = Categoria::find($id);
            if ($cats !== null ){
                $cats->nombre = $request->nombre;
                $cats->save(); 
                
                $response['mensaje'] = 'ok';
            }else{
                $response ['mensaje'] = 'Esta categoria con id '.$id.' No existe';

                }
        }else {
            $response ['mensaje'] = 'Le falta el campo NOMBRE';
        }

        return $response;
    }

    public function destroyREST($id)
{
    $cat = Categoria::find($id);
    if ( $cat != null ){
        $cat->delete();
        $response ['mensaje']='ok';
    } else {
        $response ['mensaje']='Categoría no encontrada';
    }
    return $response;
}

}

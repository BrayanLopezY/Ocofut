<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $club = club::all();
        return view('club.index')->with(compact('club'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('club.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //
        
        $club = new club;
        $club->nombre = $request->nombre;
        $club->save();

        return redirect(route('club.index'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(club $club)
    {
        //
    }

    public function indexREST()
    {
        //
        $lista = Club::all();
        return  $lista;
    }

    public function showREST($id)
    {
        //
        $club = Club::find($id);
        return $club;
    }

    public function storeREST(Request $request)
    {
        if ($request->nombre){
            $club = new club;
            $club->nombre = $request->nombre;
            $club->save();
            $response['mensaje']= 'ok';
        }else{
            $response ['mensaje'] = 'Falta el campo NOMBRE';
        }
        return $response;
    }
    public function updateREST(Request $request, $id)
    {
        if ($request->nombre){
            $cats = Club::find($id);
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

    public function destroyREST($id_club)
    {
        //
        $club = club::find($id_club);
        if ( $club != null ){
            $club->delete();
            $response['mensaje'] = 'ok';
        } else {
            $response ['mensaje'] = 'Esta categoria con id '.$id_club.' No existe';
             return $response;
            }
    }


}

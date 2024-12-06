<?php

namespace App\Http\Controllers;

use App\Models\transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jugadores = transaccion::all();
        return view('transacciones.index')->with(compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(transaccion $transaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaccion $transaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transaccion $transaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaccion $transaccion)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\cantante;
use Illuminate\Http\Request;

class CantanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cantanti = cantante::where("genere","popo");
        //$cantanti = cantante::all();
        return view("musica.cantanti", compact("cantanti"));
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
        cantante::create($request->all());
        return redirect("/cantante");
    }

    /**
     * Display the specified resource.
     */
    public function show(cantante $cantante)
    {
        return view("musica.cantante", compact("cantante"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cantante $cantante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cantante $cantante)
    {
        $cantante->update($request->all());
        return redirect("/cantante");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cantante $cantante)
    {
        $cantante->delete();
        return redirect("/cantante");
    }
}

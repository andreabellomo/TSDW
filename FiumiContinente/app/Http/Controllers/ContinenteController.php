<?php

namespace App\Http\Controllers;

use App\Models\continente;
use Illuminate\Http\Request;

class ContinenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $continenti = continente::all();
        return view("index_continente", compact("continenti"));
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
        continente::create($request->all());
        return redirect("/continentes");
    }

    /**
     * Display the specified resource.
     */
    public function show(continente $continente)
    {
        return view("about_continente", compact("continente"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(continente $continente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, continente $continente)
    {
        $continente->update($request->all());
        return redirect("/continentes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(continente $continente)
    {
        $continente->delete();
        return redirect("/continentes");
    }
}

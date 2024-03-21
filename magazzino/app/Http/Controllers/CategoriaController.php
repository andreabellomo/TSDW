<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = categoria::all();
        return view("magazzino.index_categoria" , compact("categorie"));
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
        categoria::create($request->all());
        return redirect("/categoria");
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categorium)
    {
        dump($categorium->id);
        return view("magazzino.about_categoria", compact("categorium"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categorium)
    {
        $categorium->update($request->all());
        return redirect("/categoria");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categorium)
    {
        $categorium->delete();
        return redirect("/categoria");
    }
}

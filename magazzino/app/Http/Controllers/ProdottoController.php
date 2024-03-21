<?php

namespace App\Http\Controllers;

use App\Models\prodotto;
use App\Models\categoria;
use Illuminate\Http\Request;
Use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProdottoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodotti = prodotto::all();
        return view("magazzino.index_prodotto",compact("prodotti"));
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

        try{
            categoria::findOrFail(request("categoria_id"));
        }catch(ModelNotFoundException $e){
            return response("<h2> Invalid categoria_id </h2> <a href='/'>Torna alla home</a>");
        }
        prodotto::create($request->all());
        return redirect("/prodotto");
    }

    /**
     * Display the specified resource.
     */
    public function show(prodotto $prodotto)
    {
        return view("magazzino.about_prodotto", compact("prodotto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prodotto $prodotto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prodotto $prodotto)
    {
        try{
            categoria::findOrFail(request("categoria_id"));
        }catch(ModelNotFoundException $e){
            return response("<h2> Invalid categoria_id </h2> <a href='/'>Torna alla home</a>");
        }
        $prodotto->update($request->all());
        return redirect("/prodotto");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodotto $prodotto)
    {
        $prodotto->delete();
        return redirect("/prodotto");
    }
}

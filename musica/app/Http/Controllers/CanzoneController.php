<?php

namespace App\Http\Controllers;

use App\Models\canzone;
use App\Models\cantante;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CanzoneController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$canzoni = canzone::all();
        
        return view("musica.canzoni", compact("canzoni"));
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
            
            cantante::findOrFail(request("cantante_id"));
        }catch(ModelNotFoundException $e){
            return response("<h1> ID CANTANTE NON VALIDO. Inserisci un ID_cantante valido. <a href='/canzone'> Torna all'inserimento </a>");
        }
        canzone::create($request->all());
        return redirect("/canzone");
    }

    /**
     * Display the specified resource.
     */
    public function show(canzone $canzone)
    {
        return view("musica.canzone", compact("canzone"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(canzone $canzone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, canzone $canzone)
    {
        try{
            cantante::findOrFail(request("cantante_id"));
        }catch(ModelNotFoundException $e){
            return response("<h1> ID CANTANTE NON VALIDO. Inserisci un ID_cantante valido. <a href='/canzone'> Torna alla modifica </a>");
        }
        $canzone->update($request->all());
        return redirect("/canzone");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(canzone $canzone)
    {
        $canzone->delete();
        return redirect("/canzone");
    }
}

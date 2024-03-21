<?php

namespace App\Http\Controllers;

use App\Models\dipendente;
use App\Models\azienda;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DipendenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dipendenti = dipendente::all();
        return view("lavoro.index_dipendente", compact("dipendenti"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            azienda::findOrFail(request("azienda_id"));


        }catch(ModelNotFoundException $e){

            return response("<h2> Invalid azienda id </h2> <a href='/'> Torna alla home </a>");

        }

        dipendente::create($request->all());
        return redirect("/dipendente");
    }

    /**
     * Display the specified resource.
     */
    public function show(dipendente $dipendente)
    {
        return view("lavoro.about_dipendente", compact("dipendente"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dipendente $dipendente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dipendente $dipendente)
    {
        try{

            azienda::findOrFail(request("azienda_id"));

        }catch(ModelNotFoundException $e){

            return response("<h2> Invalid azienda id </h2> <a href='/'> Torna alla home </a>");

        }

        $dipendente->update($request->all());
        return redirect("/dipendente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dipendente $dipendente)
    {
        $dipendente->delete();
        return redirect("/dipendente");
    }
}

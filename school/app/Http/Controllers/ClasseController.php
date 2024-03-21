<?php

namespace App\Http\Controllers;

use App\Models\classe;
use App\Models\studente;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classi = classe::all();
        return view("scuola.index_classe", compact("classi"));
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
        classe::create($request->all());
        return redirect("/classe");
    }

    /**
     * Display the specified resource.
     */
    public function show(classe $classe)
    {
        //$classe = classe::find($classe);
        return view("scuola.classe_about", compact("classe"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, classe $classe)
    {
        $classe->update($request->all());
        return redirect("/classe");
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classe $classe)
    {
        $classe->delete();
        return redirect("/classe");

    }
}

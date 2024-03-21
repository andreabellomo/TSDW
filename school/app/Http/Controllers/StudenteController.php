<?php

namespace App\Http\Controllers;

use App\Models\studente;
use App\Models\classe;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StudenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studenti = studente::all();
        return view("scuola.index_studente", compact("studenti"));
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
            classe::findOrFail($request->input("class_id"));
        }catch(ModelNotFoundException $e){
            return response("<h1> Invalid classe id </h1> <a href='/'> Home </a>");
        }

        studente::create($request->all());
        return redirect("/studente");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(studente $studente)
    {
        return view("scuola.studente_about" , compact("studente"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(studente $studente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, studente $studente)
    {

        try{
            classe::findOrFail(request("class_id"));
        }catch(ModelNotFoundException $e ){
            return response("<h1> class id non valid </h1> <a href='/'> Home </a>");
        }
        
        $studente->update($request->all());
        return redirect("/studente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(studente $studente)
    {
        $studente->delete();
        return redirect("/studente");
    }
}

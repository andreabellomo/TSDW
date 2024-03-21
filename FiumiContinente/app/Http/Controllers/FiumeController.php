<?php

namespace App\Http\Controllers;

use App\Models\fiume;
use App\Models\continente;
use Illuminate\Http\Request;

class FiumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $continenti = continente::all();
        $fiumi = fiume::all();

        return view("index_fiume", compact("continenti", "fiumi"));
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
        fiume::create($request->all());
        return redirect("/fiumes");
    }

    /**
     * Display the specified resource.
     */
    public function show(fiume $fiume)
    {
        $continenti = continente::all();
        return view("about_fiume", compact("fiume", "continenti"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fiume $fiume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fiume $fiume)
    {
        $fiume->update($request->all());
        return redirect("/fiumes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fiume $fiume)
    {
        $fiume->delete();
        return redirect("/fiumes");
    }
}

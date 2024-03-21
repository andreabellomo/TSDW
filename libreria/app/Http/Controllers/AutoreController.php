<?php

namespace App\Http\Controllers;

use App\Models\autore;
use Illuminate\Http\Request;

class AutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autori = autore::all();
        return view("libreria.index_autore", compact("autori"));

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
        autore::create($request->all());
        return redirect("/autore");
    }

    /**
     * Display the specified resource.
     */
    public function show(autore $autore)
    {
        return view("libreria.about_autore", compact("autore"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autore $autore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, autore $autore)
    {
        $autore->update($request->all());
        return redirect("/autore");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autore $autore)
    {
        $autore->delete();
        return redirect("/autore");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\azienda;
use Illuminate\Http\Request;

class AziendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aziende = azienda::all();
        return view("lavoro.index_azienda", compact("aziende"));
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
        azienda::create($request->all());
        return redirect("/azienda");
    }

    /**
     * Display the specified resource.
     */
    public function show(azienda $azienda)
    {
        return view("lavoro.about_azienda", compact("azienda"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(azienda $azienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, azienda $azienda)
    {
        $azienda->update($request->all());
        return redirect("/azienda");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(azienda $azienda)
    {
        $azienda->delete();
        return redirect("/azienda");
    }
}

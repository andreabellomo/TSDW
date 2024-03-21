<?php

namespace App\Http\Controllers;

use App\Models\player;
use App\Models\team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = player::all();
        return view("squadra.index_player",compact("players"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view("player.create",compact("players"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        team::findOrFail($request->input("team_id"));
        player::create($request->all());
        return redirect("/player");
    }

    /**
     * Display the specified resource.
     */
    public function show(player $player)
    {
        return view("squadra.about_player",compact("player"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, player $player)
    {
        team::findOrFail($request->input("team_id"));
        $player->update($request->all());
        return redirect("/player");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player $player)
    {
        $player->delete();
        return redirect("/player");
    }
}

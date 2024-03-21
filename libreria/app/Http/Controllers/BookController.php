<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\autore;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view("libreria.index_book", compact("books"));
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
            autore::findOrFail(request("author_id"));
        }catch(ModelNotFoundException $e){

            return response("<h1> autore_id non valid </h1> <a href='/'> HOME</a>");

        }

        book::create($request->all());
        return redirect("/book");
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        return view("libreria.about_book", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $book->update($request->all());
        return redirect("/book");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect("/book");
    }
}

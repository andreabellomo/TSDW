@extends("layout")
@section("content")

<h2> Modifica book <h2>

<form action = "/book/{{$book->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value = "{{$book->id}}"/>
    title : <input type = "text" name = "nome" value = "{{$book->titolo}}"/><br>
    prezzo : <input type = "text" name = "cognome" value = "{{$book->prezzo}}"/><br>
    autore : <input type = "text" name = "cognome" value = "{{$book->author_id}}"/><br>
    <button> Modifica book </button>
</form>

<form action = "/book/{{$book->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> Elimina book </button>
</form>

@endsection
@extends("layout")
@section("content")

<h2> Modifica Autore <h2>

<form action = "/autore/{{$autore->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value = "{{$autore->id}}"/>
    Nome : <input type = "text" name = "nome" value = "{{$autore->nome}}"/><br>
    Cognome : <input type = "text" name = "cognome" value = "{{$autore->cognome}}"/><br>
    <button> Modifica autore </button>
</form>

<form action = "/autore/{{$autore->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> Elimina autore </button>
</form>

@endsection
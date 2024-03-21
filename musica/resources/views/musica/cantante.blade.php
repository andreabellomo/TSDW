@extends("layout")
@section("content")

<h2> Modifica cantante </h2>

<form action = "/cantante/{{$cantante->id}}" method = "post">
    @csrf
    @method("PUT")
        <input type = "hidden" name = "id" value = "{{$cantante->id}}" required />
    Nome : <input type = "text" name = "nome" value = "{{$cantante->nome}}" required />
    Genere : <input type = "text" name = "genere" value = "{{$cantante->genere}}" required />
    <button> Modifica Cantante </button>
</form>

<form action = "/cantante/{{$cantante->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> Elimina Cantante </button>
</form>



@endsection
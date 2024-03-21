@extends("layout")
@section("content")

<h2> Modifica Canzone </h2>

<form action = "/canzone/{{$canzone->id}}" method = "post">
    @csrf
    @method("PUT")
    Titolo : <input type = "text" name = "titolo" value="{{$canzone->titolo}}" required />
    Duarata : <input type = "text" name = "durata" value="{{$canzone->durata}}" required />
    Cantante : <input type = "text" name = "cantante_id" value="{{$canzone->cantante_id}}" required />
    <button> Modifica canzone </button>
</form>

<form action = "/canzone/{{$canzone->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> Elimina canzone </button>
</form>

@endsection
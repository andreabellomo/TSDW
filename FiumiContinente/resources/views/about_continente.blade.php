@extends("layout")
@section("content")


<h2> Modifica o elimina continente </h2>


<form action="/continentes/{{$continente->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" required value = "{{$continente->id}}">
    Nome : <input type = "text" name = "nome" required value = "{{$continente->nome}}">
    Area : <input type = "text" name = "area" required value = "{{$continente->area}}">

    <button>Modifica continente </button>
</form>

<form action="/continentes/{{$continente->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button>Delete continente </button>
</form>


<h2> Lista dei  fiumi </h2>
@foreach($continente->fiumes as $fiume)

Nome : {{$fiume->nome}} <br>ID : [<a href = "fiumes/{{$fiume->id}} ">{{$fiume->id}} </a>] <br>Lunghezza : {{$fiume->lunghezza}}  <br>Foce : {{$fiume->foce}}
<br>Continente id : {{$fiume->continente_id}}
<br><br>
@endforeach


<br><br>
<a href="/"> Torna alla Home </a>
@endsection
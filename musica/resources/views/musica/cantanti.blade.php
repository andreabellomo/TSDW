@extends("layout")
@section("content")

<h2> Lista dei cantanti </h2>

@foreach($cantanti as $cantante)

<h4> Id  : <a href="/cantante/{{$cantante->id}}"> {{$cantante->id}}</a>  Nome : {{$cantante->nome}} Genere : {{$cantante->genere}} </h4>

@endforeach

<form action = "/cantante" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome" required />
    Genere : <input type = "text" name = "genere" required />
    <button> Inserisci Cantante </button>
</form>



@endsection
@extends("layout")
@section("content")

<h2> Modifica categoria </h2>

<form action="/categoria/{{$categorium->id}}" method = "post">
    @csrf
    @method("PUT")
    Nome <input type = "text" name = "nome" value ="{{$categorium->nome}}" required />
    <button>Modifica Categoria</button>
</form>

<form action="/categoria/{{$categorium->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button>Elimina Categoria</button>
</form>

<h2> Lista dei prodotti di questa categoria </h2>

@if(count($categorium->prodottos)>0)
@foreach($categorium->prodottos as $prodotto)

<h4> [<a href="/prodotto/{{$prodotto->id}}">{{$prodotto->id}}</a>]    -{{$prodotto->nome}}    -Giacenza : {{$prodotto->giacenza}}     -Categoria {{$prodotto->categoria_id}}  </h4>

@endforeach
@endif



@endsection
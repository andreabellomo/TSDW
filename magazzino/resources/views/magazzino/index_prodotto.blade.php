@extends("layout")
@section("content")

<h2> Lista prodotti </h2>

@foreach($prodotti as $prodotto)

<h4> [<a href="/prodotto/{{$prodotto->id}}">{{$prodotto->id}}</a>]    -{{$prodotto->nome}}    -Giacenza : {{$prodotto->giacenza}}     -Categoria {{$prodotto->categoria_id}}  </h4>

@endforeach

<form action="/prodotto" method = "post">
    @csrf
    Nome <input type = "text" name = "nome" required /><br>
    Giacenza <input type = "text" name = "giacenza" required /><br>
    Categoria_id <input type = "text" name = "categoria_id" required /><br>
    <button>Inserisci prodotto</button>
</form>

@endsection
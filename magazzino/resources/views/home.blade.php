@extends("layout")
@section("content")

<h2> benvenuti nel magazzino </h2>

<form action="/prodotto" method = "get">
    <button>Vedi Prodotti</button>
</form>

<form action="/categoria" method = "get">
    <button>Vedi Categorie</button>
</form>

@endsection
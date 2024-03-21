@extends("layout")
@section("content")

<h2> benvenuti in musica </h2>

<form action = "/cantante" method = "get">
    <button> vedi Cantanti </button>
</form>

<form action = "/canzone" method = "get">
    <button> vedi Canzoni </button>
</form>


@endsection
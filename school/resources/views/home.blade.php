@extends("layout")
@section("content")

<h2> Benvenuti a scuola <h2>

<form action = "/classe" method = "get">
    <button> Vedi lista di tutte le classi </button>
</form>

<form action = "/studente" method = "get">
    <button> Vedi lista di tutti gli studenti </button>
</form>

@endsection
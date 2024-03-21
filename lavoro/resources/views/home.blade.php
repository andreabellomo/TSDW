@extends("layout")
@section("content")

<h2> Benvenuti a lavoro </h2>

<form action = "/dipendente" method = "get">
    <button> Vedi Dipendenti </button>
</form>

<form action = "/azienda" method = "get">
    <button> Vedi Aziende </button>
</form>

@endsection
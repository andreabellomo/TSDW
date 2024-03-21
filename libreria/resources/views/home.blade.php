@extends("layout")
@section("content")
<h2> Libreria Film </h2>

<form action = "/book" method = "get">
    <button> Vedi Libri </button>
</form>

<form action = "/autore" method = "get">
    <button> Vedi autori </button>
</form>

<br>

@endsection
@extends("layout")
@section("content")

<h2> Bnevenuto </h2>
<form action="/fiumes" method = "get">
    <button>Vedi fiumi</button>
</form>
<br>

<form action="/continentes" method = "get">
    <button>Vedi continenti </button>
</form>



@endsection
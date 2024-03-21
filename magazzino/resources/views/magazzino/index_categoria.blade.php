@extends("layout")
@section("content")

<h2> Lista categorie </h2>

@foreach($categorie as $categoria)

<h4> [<a href="/categoria/{{$categoria->id}}">{{$categoria->id}}</a>] - {{$categoria->nome}} </h4>



@endforeach

<form action="/categoria" method = "post">
    @csrf
    Nome <input type = "text" name = "nome" required />
    <button>Inserisci Categoria</button>
</form>

@endsection
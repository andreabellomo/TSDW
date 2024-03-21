@extends("layout")
@section("content")

<h2> lista Autori <h2>

@foreach($autori as $autore)
    <h4> [<a href="/autore/{{$autore->id}}"> {{$autore->id}}</a>] - {{$autore->nome}} -  {{$autore->cognome}} </h4>

@endforeach

<form action = "/autore" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome"/><br>
    Cognome : <input type = "text" name = "cognome"/><br>
    <button> Inserisci autore </button>
</form>

@endsection
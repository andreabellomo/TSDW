@extends("layout")
@section("content")

<h2> Lista degli studenti </h2>

    @foreach($studenti as $studente)
        <h4><a href="/studente/{{$studente->id}}"> {{$studente->id}} </a>- {{$studente->nome}} - {{$studente->cognome}} - {{$studente->class_id}} </h4>
    @endforeach


<form action = "/studente" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome"/> <br>
    Cognome : <input type = "text" name = "cognome"/> <br>
    Eta : <input type = "text" name = "eta"/> <br>
    class_id : <input type = "text" name = "class_id"/> <br>
    <button> Inserisci Studente </button>
</form>

@endsection
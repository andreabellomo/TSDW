@extends("layout")
@section("content")

<h2> Lista dei Dipendenti</h2>

@foreach($dipendenti as $dipendente)

    <h4> [<a href="/dipendente/{{$dipendente->id}}">{{$dipendente->id}}</a>] -  {{$dipendente->nome}} - {{$dipendente->ruolo}} - [Azienda id {{$dipendente->azienda_id}}] </h4>

@endforeach

<form action = "/dipendente" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome" ><br>
    Ruolo : <input type = "text" name = "ruolo" ><br>
    Azienda Id : <input type = "text" name = "azienda_id" ><br>
    <button> Inserisci dipendenti </button>
</form>

@endsection
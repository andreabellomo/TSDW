@extends("layout")
@section("content")

<h2> Lista delle Aziende </h2>

@foreach($aziende as $azienda)

    <h4> [<a href="/azienda/{{$azienda->id}}">{{$azienda->id}}</a>] -  {{$azienda->nome}} - {{$azienda->settore}} </h4>

@endforeach

<form action = "/azienda" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome" ><br>
    Settore : <input type = "text" name = "settore" ><br>
    <button> Inserisci Azienda </button>
</form>

@endsection
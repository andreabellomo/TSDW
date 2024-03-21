@extends("layout")
@section("content")

<h2> Modifica azienda</h2>

<form action = "/azienda/{{$azienda->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value ="{{$azienda->id}}" >
    Nome : <input type = "text" name = "nome" value ="{{$azienda->nome}}" ><br>
    Settore : <input type = "text" name = "settore" value ="{{$azienda->settore}}"  ><br>
    <button> Modifica azienda </button>
</form>

<form action = "/azienda/{{$azienda->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> Elimina azienda </button>
</form>

<h2> Lista di tutti i dipendenti. Numero dei dipendenti : [count($azienda->dipendentes)]</h2>

@foreach($azienda->dipendentes as $dipendente)


<h4> [<a href="/dipendente/{{$dipendente->id}}">{{$dipendente->id}}</a>] -  {{$dipendente->nome}} - {{$dipendente->ruolo}}  </h4>

@endforeach

@endsection
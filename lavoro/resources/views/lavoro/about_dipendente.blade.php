@extends("layout")
@section("content")

<h2> Modifica Dipendente</h2>

<form action = "/dipendente/{{$dipendente->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value ="{{$dipendente->id}}" >
    Nome : <input type = "text" name = "nome" value ="{{$dipendente->nome}}" ><br>
    Ruolo : <input type = "text" name = "ruolo" value ="{{$dipendente->ruolo}}"  ><br>
    Azienda Id : <input type = "text" name = "azienda_id" value ="{{$dipendente->azienda_id}}"  ><br>

    <button> Modifica dipendente </button>
</form>

<form action = "/dipendente/{{$dipendente->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> Elimina dipendente </button>
</form>



@endsection
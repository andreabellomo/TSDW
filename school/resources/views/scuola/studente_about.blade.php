@extends("layout")
@section("content")

<h2> Dettagli dello studente <h2>


<form action = "/studente/{{$studente->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value = "{{$studente->id}}"/>
    nome : <input type = "text" name = "scuola" value = "{{$studente->nome}}"/> <br>
    cognome : <input type = "text" name = "anno" value = "{{$studente->cognome}}" /> <br>
    eta : <input type = "text" name = "materia" value = "{{$studente->eta}}" /> <br>
    class_id : <input type = "text" name = "class_id" value = "{{$studente->class_id}}" /> <br>
    <button> modifica studente </button>
</form>

<form action = "/studente/{{$studente->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> elimina studente </button>
</form>


@endsection
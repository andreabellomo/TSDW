@extends("layout")
@section("content")

<h2> Dettagli della classe <h2>


<form action = "/classe/{{$classe->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value = "{{$classe->id}}"/>
    scuola : <input type = "text" name = "scuola" value = "{{$classe->scuola}}"/> <br>
    anno : <input type = "text" name = "anno" value = "{{$classe->anno}}" /> <br>
    materia : <input type = "text" name = "materia" value = "{{$classe->materia}}" /> <br>
    <button> modifica classe </button>
</form>

<form action = "/classe/{{$classe->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button> elimina classe </button>
</form>


<h2> Studenti della classe <h2>

@foreach($classe->studentes as $studente)
    <h4>  {{$studente->id}} - {{$studente->nome}} - {{$studente->cognome}} - {{$studente->eta}} </h4>
@endforeach



@endsection
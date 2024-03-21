@extends("layout")
@section("content")

<h2> Lista delle classi <h2>

    @foreach($classi as $classe)
        <h4> <a href="/classe/{{$classe->id}}"> {{$classe->id}} </a>- {{$classe->scuola}} - {{$classe->anno}} - {{$classe->materia}} </h4>
    @endforeach


<form action = "/classe" method = "post">
    @csrf
    scuola : <input type = "text" name = "scuola"/> <br>
    anno : <input type = "text" name = "anno"/> <br>
    materia : <input type = "text" name = "materia"/> <br>
    <button> Inserisci classe </button>
</form>

@endsection
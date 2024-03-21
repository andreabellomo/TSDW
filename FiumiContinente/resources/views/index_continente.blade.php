@extends("layout")
@section("content")


<h2> Lista continenti </h2>
@foreach($continenti as $continente)

Nome : {{$continente->nome}} <br>ID : [<a href = "continentes/{{$continente->id}} ">{{$continente->id}} </a>] <br>Area : {{$continente->area}} 
<br><br>

@endforeach

<form action="/continentes" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome" required><br>
    Area : <input type = "text" name = "area" required><br>

    <button>INSERISCI CONTINENTE </button>
</form>

<br><br>
<a href="/"> Torna alla Home </a>
@endsection
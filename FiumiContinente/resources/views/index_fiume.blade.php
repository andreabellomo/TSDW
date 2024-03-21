@extends("layout")
@section("content")


<h2> Lista fiumi </h2>
@foreach($fiumi as $fiume)

Nome : {{$fiume->nome}} <br>ID : [<a href = "fiumes/{{$fiume->id}} ">{{$fiume->id}} </a>] <br>Lunghezza : {{$fiume->lunghezza}}  <br>Foce : {{$fiume->foce}}
<br>Continente id : {{$fiume->continente_id}}
<br><br>

@endforeach

<form action="/fiumes" method = "post">
    @csrf
    Nome : <input type = "text" name = "nome" required><br>
    lunghezza : <input type = "number" name = "lunghezza" required><br>
    foce : <input type = "text" name = "foce" required><br>

    continente id : <select name = "continente_id">
        @foreach($continenti as $continente)
            <option type = "text" value = "{{$continente->id}}" > {{$continente->nome}}</option>
        @endforeach
        <select><br>
    <button>INSERISCI FIUME </button>
</form>

<br><br>
<a href="/"> Torna alla Home </a>
@endsection
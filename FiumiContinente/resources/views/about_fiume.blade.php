@extends("layout")
@section("content")


<form action="/fiumes/{{$fiume->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" required value = "{{$fiume->id}}"><br>
    Nome : <input type = "text" name = "nome" required value = "{{$fiume->nome}}"><br>
    lunghezza : <input type = "number" name = "lunghezza" required value = "{{$fiume->lunghezza}}"><br>
    foce : <input type = "text" name = "foce" required value = "{{$fiume->foce}}"><br>

    continente <select name="continente_id">
            @foreach($continenti as $continente)
                <option value="{{$continente->id}}">{{$continente->nome}}</option>
            @endforeach
        </select>
        <br>
    <button>Modifica fiume </button>
</form>

<form action="/fiumes/{{$fiume->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button>Elimina fiume </button>
</form>

<br><br>
<a href="/"> Torna alla Home </a>
@endsection
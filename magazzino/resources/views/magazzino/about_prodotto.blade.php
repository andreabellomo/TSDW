@extends("layout")
@section("content")

<h2> Modifica prodotto </h2>

<form action="/prodotto/{{$prodotto->id}}" method = "post">
    @csrf
    @method("PUT")
    <input type = "hidden" name = "id" value = "{{$prodotto->id}}" required />
    Nome <input type = "text" name = "nome" value = "{{$prodotto->nome}}" required /><br>
    Giacenza <input type = "text" name = "giacenza" value = "{{$prodotto->giacenza}}" required /><br>
    Categoria_id <input type = "text" name = "categoria_id" value = "{{$prodotto->categoria_id}}"  required /><br>
    <button>Modifica prodotto</button>
</form>

<form action="/prodotto/{{$prodotto->id}}" method = "post">
    @csrf
    @method("DELETE")
    <button>Elmina prodotto</button>
</form>



@endsection
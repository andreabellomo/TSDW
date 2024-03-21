@extends("layout")
@section("content")

<h2> lista Libri <h2>

@foreach($books as $book)
    <h4> [<a href="/book/{{$book->id}}"> {{$book->id}}</a>]  {{$book->titolo}} -  {{$book->id}}  -{{$book->athor_id}}</h4>
@endforeach

<form action = "/book" method = "post">
    @csrf
    titolo : <input type = "text" name = "titolo"/><br>
    prezzo : <input type = "text" name = "prezzo"/><br>
    autore : <input type = "text" name = "author_id"/><br>
    <button> Inserisci book </button>
</form>
@endsection
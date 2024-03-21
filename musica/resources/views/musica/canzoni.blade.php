@extends("layout")
@section("content")

<h2> Lista delle canzoni </h2>

@foreach($canzoni as $canzone)

<h4> Id  : <a href="/canzone/{{$canzone->id}}"> {{$canzone->id}}</a>  Titolo : {{$canzone->titolo}} Durata : {{$canzone->durata}} 
 cantante : {{$canzone->cantante_id}}
</h4>

@endforeach

<form action = "/canzone" method = "post">
    @csrf
    Titolo : <input type = "text" name = "titolo" required />
    Duarata : <input type = "text" name = "durata" required />
    Cantante : <input type = "text" name = "cantante_id" required />
    <button> Inserisci canzone </button>
</form>



@endsection
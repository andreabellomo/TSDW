@extends('layout')
@section('content')

    @if(count($lettere) >0 )
        <h2> elenco lettere </h2>
        <br>
        @foreach ($lettere as $lettera)
            <h4> <a href="letteras/{{$lettera->id}}"> NOME : {{$lettera->name}} </a></h4>
            <h4> QUANTITA : {{$lettera->quantity}} </h4>
            <form method = "post" action = "letteras/{{$lettera->id}}">
                @csrf
                @method("DELETE")
                <button type = "submit">DELETE </button>
            </form>
            

        @endforeach
    @else
        <h3> nessuna lettera </h3>
    @endif
    <br><br>

    <h3> aggiungi una lettera </h3>
    <form method = "post" action = "/letteras">
        @csrf
        NOME <input type = "text" name = "name"/><br>
        QUANTITA <input type = "text" name = "quantity"/><br>
        <button type = "submit">Inserisci nuova lettera</button>
    </form>

@endsection
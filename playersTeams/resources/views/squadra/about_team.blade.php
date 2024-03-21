@extends("layout")
@section("content")

    <h2> Modifica team</h2>

    <form method = "post" action ="/team/{{$team->id}}">
        @csrf
        @method("PATCH")
        <input type = "hidden" name = "id" value = "{{$team->id}}"/><br>
        Nome : <input type = "text" name = "nome" value = "{{$team->nome}}"/><br>
        Citta : <input type = "text" name = "cognome" value = "{{$team->citta}}"/><br>
        Anno Fondazione : <input type = "text" name = "anno_fondazione" value = "{{$team->anno_fondazione}}" /><br>
        <button type = "submit">modifica teams</button>
    </form>

    <h2> Lista giocatori in squadra</h2>
    @if(count($team->players)>0)

        @foreach($team->players as $player)
            <h4> {{$player->nome}} </h4>
        @endforeach
    
    @endif


@endsection
@extends("layout")
@section("content")

    <h2> Lista player</h2>

    @foreach ($players as $player)
   
        <h4><a href = "player/{{$player->id}}"> Nome: {{$player->nome}} </a></h4>
        <h4>cognome: {{$player->cognome}}</h4>
        <h4>id : {{$player->id}}</h4>
        <h4>eta: {{$player->eta}}</h4>


        <form method = "post" action ="/player/{{$player->id}}">
            @csrf
            @method("DELETE")
            <button type = "submit"> Elimina Players</button>
        </form>

        <br><br>


    @endforeach

    <form method = "post" action ="/player">
        @csrf
        Nome : <input type = "text" name = "nome"/><br>
        Cognome : <input type = "text" name = "cognome"/><br>
        eta : <input type = "text" name = "eta"/><br>
        team Id : <input type = "text" name = "team_id"/><br>
        <button type = "submit">Aggiungi Players</button>
    </form>


@endsection
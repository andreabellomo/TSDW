@extends("layout")
@section("content")

    <h2> Modifica player</h2>

    <form method = "post" action ="/player/{{$player->id}}">
        @csrf
        @method("PATCH")
        <input type = "hidden" name = "id" value = "{{$player->id}}"/><br>
        Nome : <input type = "text" name = "nome" value = "{{$player->nome}}"/><br>
        Cognome : <input type = "text" name = "cognome" value = "{{$player->cognome}}"/><br>
        eta : <input type = "text" name = "eta" value = "{{$player->eta}}" /><br>
        team Id : <input type = "text" name = "team_id" value = "{{$player->team_id}}" /><br>
        <button type = "submit">modifica Players</button>
    </form>


@endsection
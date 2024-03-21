@extends("layout")
@section("content")

    <form method = "get" action ="/team">
        @csrf
        <button type = "submit"> Vedi lista Teams</button>
    </form>

    <form method = "get" action ="/player">
    @csrf
        <button type = "submit"> Vedi lista Players</button>
    </form>

@endsection
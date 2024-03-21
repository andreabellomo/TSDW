@extends("layout")
@section("content")

    <h2> Lista teams</h2>

    @foreach ($teams as $team)
   
    
        <h4><a href = "/team/{{$team->id}}">Nome: {{$team->nome}} </a></h4>
        <h4>Citta: {{$team->citta}}</h4>
        <h4>anno : {{$team->anno_fondazione}}</h4>
        <br><br>

        <form method = "post" action ="/team/{{$team->id}}">
        @csrf
        @method("DELETE")
        <button type = "submit"> Elimina team</button>
    </form>

    @endforeach

    <form method = "post" action ="/team">
        @csrf
        Nome : <input type = "text" name = "nome"/><br>
        citta : <input type = "text" name = "citta"/><br>
        anno_fondazione : <input type = "text" name = "anno_fondazione"/><br>
        <button type = "submit">Aggiungi team</button>
    </form>


@endsection


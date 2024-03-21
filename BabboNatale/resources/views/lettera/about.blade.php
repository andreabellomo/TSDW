
@extends('layout')
@section('content')
    @if(isset($lettera))
        <h2>About Page</h2>
        
        <form method="post" action="/letteras/{{$lettera->id}}">
            @csrf
            @method('PUT')
            NOME <input type="text" name="name" value="{{$lettera->name}}"/>
            QUANTITY <input type="text" name="quantity" value="{{$lettera->quantity}}"/>
            <button type="submit">UPDATE</button>
        </form>
    @endif
@endsection

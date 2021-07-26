@extends('layouts.app')

@section('title', $team->name)

@section('content')
<h1>{{$team->name}}</h1>
<h3>{{$team->city}}</h3>

<p>Address: <b>{{$team->address}}</b></p>
<p>Email: <b>{{$team->email}}</b></p>

<div>
    <h3>Players:</h3>
    <ul>
        @foreach($team->players as $player)
        <li><a href="/players/{{$player->id}}">{{$player->full_name}}</a></li>
        @endforeach
    </ul>
</div>
@endsection

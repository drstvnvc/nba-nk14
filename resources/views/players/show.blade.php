@extends('layouts.app')

@section('title', $player->full_name)

@section('content')
<h1>Player: {{$player->full_name}}</h1>
<h3>Team: <a href="/teams/{{$player->team->id}}">{{$player->team->name}}</a></h3>
<p>Email: <b>{{$player->email}}</b></p>
@endsection

@extends('layouts.app')

@section('title', 'Nba')

@section('content')
<h1>Nba Teams:</h1>
@foreach($teams as $team)
<div>
    <a href="teams/{{$team->id}}">{{$team->name}} {{$team->city}}</a>
</div>
@endforeach
@endsection
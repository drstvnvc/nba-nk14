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

<hr />

<div>
    <h3>Comments:</h3>
    @foreach($team->comments as $comment)
    <div>
        <h4>{{$comment->user->name}}:</h4>
        <blockquote>
            {{$comment->content}}
        </blockquote>
    </div>
    @endforeach

    @auth
    <form method="POST" action="{{route('team.comment', ['team'=>$team])}}">
        @csrf
        <div class="form-group">
            <label for="content">Comment</label>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Write your comment here..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endauth
</div>
@endsection
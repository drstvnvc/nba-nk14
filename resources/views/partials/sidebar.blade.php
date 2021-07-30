<div>
    <h3>Teams that people are writing about:</h3>
    <ul>
        @foreach($teamsWithNews as $team)
        <li>
            <a href="{{route('newsForTeam', [ 'teamName' => $team->name])}}">
                {{$team->name}}
            </a>
        </li>
        @endforeach
    </ul>

</div>
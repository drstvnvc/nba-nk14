<html>

<body>
    <h3>Comment received</h3>
    <p>
        The user {{$comment->user->name}} has posted a comment on your <a href="/teams/{{$team->id}}">team page</a>.
    </p>
    <blockquote>{{$comment->content}}</blockquote>
</body>

</html>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            Nba
        </a>
        <ul class="navbar-nav mr-auto">

            @auth
            <li class="nav-item">
                <a class="nav-link" href="/">Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news/create">Publish article</a>
            </li>
            <li class="nav-item">
                <strong> Username: {{ auth()->user()->name }} </strong>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-link nav-link" type="submit">Logout</button>
                </form>
            </li>
            @endauth

            @guest
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            @endguest
        </ul>
    </div>
</nav>
<style>
    .navbar-nav {
        flex-direction: row !important;
        align-items: center;
    }

    .nav-item {
        display: flex;
        align-items: center;
        margin-left: 15px;
        text-transform: capitalize
    }
</style>
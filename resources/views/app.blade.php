<!DOCTYPE html>
<html>
<head>
    <title>Scrabble Club</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('members.index') }}">Members</a>
            <a href="{{ route('leaderboard.index') }}">Leaderboard</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
@extends('layouts.app')

@section('content')
<h1>{{ $member->name }}</h1>
<p>Email: {{ $member->email }}</p>
<p>Phone: {{ $member->phone }}</p>
<p>Date Joined: {{ $member->joined_date }}</p>
<p>Average Score: {{ $member->average_score }}</p>
<p>Highest Score: {{ $member->highest_score->pivot->score }} ({{ $member->highest_score->game_name }})</p>

<h2>Recent Games</h2>
<ul>
    @foreach ($recentGames as $game)
        <li>{{ $game->game_name }} - Score: {{ $game->pivot->score }}</li>
    @endforeach
</ul>

<a href="{{ route('members.edit', $member->id) }}">Edit</a>
@endsection
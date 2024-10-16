@extends('layouts.app')

@section('content')
<h1>Leaderboard</h1>
<ul>
    @foreach ($topMembers as $member)
        <li>{{ $member->name }} - Average Score: {{ $member->average_score }}</li>
    @endforeach
</ul>
@endsection
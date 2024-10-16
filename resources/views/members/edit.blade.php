@extends('layouts.app')

@section('content')
    <h1>Edit Member</h1>
    
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $member->email) }}" required>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $member->phone) }}" required>
        </div>

        <div>
            <label for="joined_date">Joined Date:</label>
            <input type="date" id="joined_date" name="joined_date" value="{{ old('joined_date', $member->joined_date) }}" required>
        </div>

        <button type="submit">Update Member</button>
    </form>

    <a href="{{ route('members.index') }}">Back to Members List</a>
@endsection

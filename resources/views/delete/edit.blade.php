<!-- resources/views/profile/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Profile</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>
        </div>
        <button type="submit">Update</button>
    </form>

    <form action="{{ route('account.delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Account</button>
    </form>
@endsection

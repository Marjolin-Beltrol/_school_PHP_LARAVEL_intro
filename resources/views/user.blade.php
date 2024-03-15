@extends('layouts.app')

@section('content')
    <div>
        <h2>User {{ $user->id }}</h2>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Joined: {{ $user->created_at }}</p>
    </div>
    <div>
        <a href="{{ route('messages') }}">Back to messages</a>
    </div>
@endsection

@extends('layout')
@section('content')

    <h3>Show friend detail</h3>
    <p>
        <li>{{ $friend->first_name }}</li>
    </p>

    <p>
        <a href="{{ route('friends.index') }}">All Friends</a>
    </p>
@endsection

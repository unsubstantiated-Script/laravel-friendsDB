@extends('layout')
@section('content')
    <h3>Friends</h3>
    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($friends as $friend)
                <tr>
                    <td>{{ $friend->first_name }}</td>
                    <td>{{ $friend->last_name }}</td>
                    <td>{{ $friend->age }}</td>
                    <td><a href="{{ route('friends.show', $friend->id) }}">{{ $friend->first_name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

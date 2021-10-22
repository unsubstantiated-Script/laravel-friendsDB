@extends('layout')
@section('content')

    {{-- Making use of the router helper --}}
    <a href="{{ route('friends.create') }}" class="btn btn-primary">Add a Friend</a>
    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($friends as $friend)
                <tr>
                    <td>{{ $friend->first_name }}</td>
                    <td>{{ $friend->last_name }}</td>
                    <td>{{ $friend->age }}</td>
                    <td><a href="{{ route('friends.show', $friend->id) }}">Show Detail</a></td>
                    <td><a href="{{ route('friends.edit', $friend->id) }}">Edit Friend</a></td>
                    <td>
                        <form action="{{ route('friends.destroy', $friend->id) }}" method="POST"
                            onSubmit="return confirm('Are you sure you want to delete this?')">
                            {{-- Changing the method to delete to suit Laravel --}}
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-error" type="submit">Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

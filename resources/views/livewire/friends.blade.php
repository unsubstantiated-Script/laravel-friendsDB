@section('title')
    Fremedes
@endsection
<div>
    <input wire:model="search" type="text" placeholder="Search Friends" size="50">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    <h5>
                        <a href="#" wire:click="doSort('first_name', 'asc')">&uarr;</a>
                        First Name
                        <a href="#" wire:click="doSort('first_name', 'desc')">&darr;</a>
                    </h5>
                </th>
                <th>
                    <h5>
                        <a href=" #" wire:click="doSort('last_name', 'asc')">&uarr;</a>
                        Last Name
                        <a href="#" wire:click="doSort('last_name', 'desc')">&darr;</a>
                    </h5>
                </th>
                <th>
                    <h5>
                        <a href=" #" wire:click="doSort('age', 'asc')">&uarr;</a>
                        Age
                        <a href="#" wire:click="doSort('age', 'desc')">&darr;</a>
                    </h5>
                </th>
                <th></th>

                {{-- <th></th>
                <th></th> --}}

            </tr>
        </thead>
        <tbody>
            @foreach ($friends as $friend)
                <tr>
                    <td>{{ $friend->first_name }}</td>
                    <td>{{ $friend->last_name }}</td>
                    <td>{{ $friend->age }}</td>
                    <td><a href="{{ route('friends.show', $friend->id) }}">Show Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

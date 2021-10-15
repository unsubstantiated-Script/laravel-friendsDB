<h1>Friends</h1>

<ul>
    @foreach ($friends as $friend)
        <li>{{ $friend->first_name }}</li>
    @endforeach
</ul>

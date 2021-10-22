@extends('layout')

@section('content')
    <div class="column col-3">
        <h3>Make a Friend</h3>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="toast toast-error">
                    <span> {{ $error }}</span>
                </div>
            @endforeach
        @endif
        <form method="POST" action={{ route('friends.store') }}>
            @csrf
            <div class="form-group">
                {{-- Componentizing the form --}}
                @include('friends.form')
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Store Friend</button>
                <a class="btn btn-error" href="{{ route('friends.index') }}">Cancel</a>
            </div>
        </form>

    </div>
@endsection

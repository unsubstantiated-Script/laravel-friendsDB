@section('title')
    Plazgrawnd
@endsection
<div>
    <div> <button wire:click="increment">+</button>
        {{ $count }}
        <button wire:click="decrement">-</button>
    </div>
    <br>
    <div>
        <div>{{ $message }}</div>
        <br>
        <input type="text" wire:model="message">
    </div>
</div>

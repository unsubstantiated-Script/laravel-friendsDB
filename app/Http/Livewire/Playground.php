<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Playground extends Component
{
    public $count = 0;
    public $message = "";

    protected $queryString = ["message" => ['except' => '']];

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {

        return view('livewire.playground');
    }
}

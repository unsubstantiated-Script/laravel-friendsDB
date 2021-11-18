<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Friends extends Component
{
    public $search = '';

    public $sortBy = 'first_name';
    public $direction = 'asc';

    //Populates a query in the url with livewire magic

    protected $queryString = [
        "search" => ['except' => ''],
        "sortBy" => ['except' => ''],
        "direction" => ['except' => ''],
    ];

    public function doSort($field, $direction)
    {
        $this->sortBy = $field;
        $this->direction = $direction;
    }

    public function render()
    {
        $friends = \App\Models\Friend::where('first_name', 'like', "%$this->search%")
            ->orWhere('last_name', 'like', "%$this->search%")
            ->orderBy($this->sortBy, $this->direction);

        return view('livewire.friends', ['friends' => $friends->get()]);
    }
}

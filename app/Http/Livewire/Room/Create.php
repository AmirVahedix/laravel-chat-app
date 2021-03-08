<?php

namespace App\Http\Livewire\Room;

use Livewire\Component;

class Create extends Component
{
    public string $name = '';

    protected $rules = [
        'name' => 'required|min:2|string|unique:rooms,name'
    ];

    public function create()
    {
        $this->validate();
        auth()->user()->rooms()->create([
            'name' => $this->name,
            'slug' => slugify($this->name)
        ]);

        $this->emit('room.added');
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.room.create');
    }
}

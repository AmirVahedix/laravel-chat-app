<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    public $rooms;

    public function render()
    {
        $this->rooms = Room::latest()->get();
        return view('livewire.room.index');
    }
}

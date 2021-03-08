<?php

namespace App\Http\Livewire\Room;

use App\Models\Message;
use App\Models\Room;
use Livewire\Component;

class NewMessage extends Component
{
    public $message;
    public Room $room;

    protected $rules = [
        'message' => 'required'
    ];

    public function sendMessage(){
        $this->validate();

        $message = Message::create([
            'message' => $this->message,
            'room_id' => $this->room->id,
            'user_id' => auth()->user()->id
        ]);

        $this->emit('message.added', $message->id);
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.room.new-message');
    }
}

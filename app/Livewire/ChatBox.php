<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatBox extends Component
{
    public $messages = [];
    public $message;
    public $chat_id;
    public $receiver_id;
    public $name;

    public function render()
    {
        return view('livewire.chat-box');
    }
    
    #[On("chatt")]
    public function chatbox_listen($id){
        $this->chat_id=$id;
        $this->messages = Message::where("chat_id",$id)->get();
        $chat = Chat::find($id);
        if (auth()->user()->role === "trainer") {
            # code...
            $this->receiver_id = $chat->user_id;
            $this->name = $chat->member->name;
            
        }
        else{
            $this->receiver_id = $chat->trainer_id;
            $this->name = $chat->trainer->name;
        }
    }

    public function sendMessage(){
        // $this->validate([
        //     "message" => "required"
        // ]);

        Message::create([
            "chat_id" =>$this->chat_id, 
            "sender_id" => auth()->user()->id,
            "receiver_id" => $this->receiver_id,
            "message" => $this->message,
        ]);

        $this->reset("message");
    }
}

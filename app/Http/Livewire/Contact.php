<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
class Contact extends Component
{
    public $message;
    public $name;
    public $email;
    public function render()
    {
        return view('livewire.contact')->layout('layouts.frontend');
    }
    protected function rules()
    {
        return [
          'message' => 'required',
          'name' => 'required',
          'email' => 'required'
        ];
    }
    public function submit()
    {
        $this->validate();

        Message::create([
            'message' => $this->message,
           'name' => $this->name,
           'email' => $this->email
        ]);

        $this->resetVars();
    }

    public function resetVars()
    {
        $this->message = null;
        $this->name = null;
        $this->email = null;
    }
}

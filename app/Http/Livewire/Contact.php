<?php

namespace App\Http\Livewire;
use Livewire\Component;
class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'subject' => 'required|max:100',
        'message' => 'required|max:1000|min:10',
    ];
    public function submit(){
       $data=$this->validate();
        \App\Models\Contact::create($data);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}

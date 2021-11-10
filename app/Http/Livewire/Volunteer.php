<?php

namespace App\Http\Livewire;
use App\Models\Voluntier;
use Livewire\Component;
class Volunteer extends Component
{
public $name;
public $email;
public $tel;
public $city;
public $subject;
public $message;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'tel' => 'required',
        'city' => 'required',
        'subject' => 'required|max:100',
        'message' => 'required|max:1000|min:10',
    ];
    public function submit(){
        $data=$this->validate();
      Voluntier::create($data);

    }


    public function render()
    {
        return view('livewire.volunteer');
    }
}

<?php

namespace App\Http\Livewire;
use App\Models\Contact;
use App\Models\Voluntier;
use Livewire\Component;

class Messages extends Component
{

    public function delete_voluntier($id){
        Voluntier::find($id)->delete();
    }
    public function delete_contact($id){
        Contact::find($id)->delete();
    }
    public function render()
    {
        $contacts=Contact::all();
        $voluntiers=Voluntier::all();
        return view('livewire.messages',compact('contacts','voluntiers'));
    }
}

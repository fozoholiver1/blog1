<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Newsletter\Newsletter;

class Subscription extends Component
{
    public $email;

    //validation
    protected $rules = [
        'email' => 'required|email'
    ];

    //this function will send an email to mailchimp once the is a subscription
    public function submit()
    {
        $this->validate();
//        (new \Spatie\Newsletter\Newsletter)->subscribe($this->email);
//        (new \Spatie\Newsletter\Newsletter)->subscribe(  $this->email,['FNAME'=>'ENTER_FIRST_NAME', 'LNAME'=>'ENTER_LAST_NAME'] );

//        (new \Spatie\Newsletter\Newsletter)->Subscribe($this->email,[]);
//        if (!Newsletter::isSubscribed($this->email) ) {
//            Newsletter::Subscribe($this->email);
//            return('success');
//        }
//        return 'failed';
////
//        if (! (new Newsletter)->isSubscribed($this->email) ) {
//            (new Newsletter)->Subscribe($this->email);
//            return('success');
//        }
//        return 'failed';
        (new Newsletter)->subscribe($this->email);
//        Newsletter::subscribe('rincewind@discworld.com');
//        if (!Newsletter::isSubscribed($this->email)) {
//
//            Newsletter::subscribe($this->email);
//            return back()->with('success', 'Thanks For Subscribe');
//        }
        return back()->with('failure', 'Sorry! You have already subscribed ');
    }

    public function render()
    {

        return view('livewire.subscription');
    }
}

<?php

namespace App\Http\Livewire;

use Jorenvh\Share\Share;
use Livewire\Component;

class SocialShareButton extends Component
{
    public $post;
    public function render()
    {
        $data=\Share::page( $this->post->summary,$this->post->title )
            ->facebook()
            ->twitter()
            ->linkedin('Extra linkedin summary can be passed here')
            ->whatsapp();


        return view('livewire.social-share-button', compact('data'))->layout('layouts.blog');
    }
}

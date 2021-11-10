<?php

namespace App\Http\Livewire\Blog;

use Canvas\Models\Post;
use Livewire\Component;

class Show extends Component
{
    public Post $post; //we load a single row of post from the database


    public function render()
    {
//        event(new Canvas\Events\PostViewed($this->post));

        return view('livewire.blog.show')->layout('layouts.blog');
    }
}

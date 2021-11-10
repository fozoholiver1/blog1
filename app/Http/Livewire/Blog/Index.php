<?php

namespace App\Http\Livewire\Blog;

use Canvas\Models\Post;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.blog.index',[
            'posts' => Post::latest()->paginate(4),
        ]);
    }
}

<?php

namespace App\Http\Livewire\Blog;

use Canvas\Models\Tag;
use Livewire\Component;

class Tags extends Component
{
    public function render()
    {
        return view('livewire.blog.tags',[
            'tags' => Tag::all(),
        ]);
    }
}

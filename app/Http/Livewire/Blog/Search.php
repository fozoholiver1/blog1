<?php

namespace App\Http\Livewire\Blog;

use Canvas\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    Use WithPagination;
    public $search = '';



    public function render()
    {


        return view('livewire.blog.search',  [
            'posts' => Post::where('title', 'like', '%'.$this->search.'%')->paginate(4)
        ]);
    }
}

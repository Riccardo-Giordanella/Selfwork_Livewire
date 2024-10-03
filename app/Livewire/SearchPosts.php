<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $search = "";

    public function render()
    {
        if(!$this->search){
            $posts = Post::all();
        }else{
            $posts = Post::where('title', 'like', '%'. $this->search. '%')->exists();
        }
        return view('livewire.search-posts', compact('posts'));
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;

class Dropdown extends Component
{
    public $posts;
    public $comments = [];

    public $selectedPost = NULL;
    
    public function mount(){
        $this->posts    = Post::all();
        $this->comments = collect();
    }
    
    public function render(){
        return view('livewire.dropdown');
    }

    public function updateSelected($id){
        if(!is_null($id)){
            $this->comments = Comment::where('post_id', $id)->get();
        }
    }
}

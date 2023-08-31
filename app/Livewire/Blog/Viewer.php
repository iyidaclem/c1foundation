<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class Viewer extends Component
{
    public $post;
    public function mount($id)
    {
       $this->post = Post::find($id);
       if(!$this->post)
       {
        return redirect("/");
       }
    }
    public function render()
    {
        return view('livewire.blog.viewer')
        ->extends("layouts.app");
    }
}

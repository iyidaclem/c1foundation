<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class Blogs extends Component
{
    public $posts;
    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.blog.blogs')
        ->extends("layouts.app");
    }
}

<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $blog;
    public function mount($id){
        $this->blog = auth()->user()->posts()->firstWhere("id", $id);
        if(!$this->blog)
        {
            return redirect("/dashboard");
        }
        
    }

    public function render()
    {
        return view('livewire.blog.edit')
        ->extends("layouts.dashboard");
    }
}

<?php

namespace App\Livewire\Blog;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $body;
    public $pdf;
    public $blog_type = "text";

    public function createBlog()
    {
        $this->validate([
            "title" => "required",
            "body" => "string",
            "pdf" => "mimes:pdf"
        ]);
        dd($this->body.$this->title);

    }
    public function render()
    {
        return view('livewire.blog.create')
        ->extends("layouts.dashboard");
    }
}

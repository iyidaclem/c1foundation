<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Dashboard extends Component
{
    public $posts;
    public function mount()
    {
        $this->posts = auth()->user()->posts()->get();
    }

    public function deletePost($id)
    {
        dd($id);
    }

    public function render()
    {

        return view('livewire.home.dashboard')
            ->extends("layouts.dashboard");
    }
}

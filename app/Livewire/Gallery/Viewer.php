<?php

namespace App\Livewire\Gallery;

use App\Models\Gallery;
use Livewire\Component;

class Viewer extends Component
{
    
    public $albums = [];
    
    public function mount()
    {
        $this->getAlbums();
    }

    public function getAlbums()
    {
        $this->albums = Gallery::all();
    }
    
    public function render()
    {
        return view('livewire.gallery.viewer')
        ->extends("layouts.app");
    }
}

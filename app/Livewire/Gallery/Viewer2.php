<?php

namespace App\Livewire\Gallery;

use App\Models\Gallery as MGallery;
use Livewire\Component;

class Viewer2 extends Component
{ 
    
    public $gallery;

    public function mount($gallery_id)
    {
        $this->fetchGallery($gallery_id);
    }

    public function fetchGallery($gallery_id)
    {
        
        $this->gallery = \App\Models\Gallery::find($gallery_id);
        if (!$this->gallery) {
            return redirect("/");
        }
    }
    public function render()
    {
        return view('livewire.gallery.viewer2')
        ->extends("layouts.app");
    }
}

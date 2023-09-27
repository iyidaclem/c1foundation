<?php

namespace App\Livewire\Gallery;

use App\Models\Gallery as ModelsGallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    use WithFileUploads;

    public $isCreating = false;
    public $name;
    public $albums = [];
    public $album_cover;
    public $album_id;
    public $isReady = false;

    public function mount()
    {
        $this->getAlbums();
    }

    public function changeId($id)
    {
        $this->album_id = $id;
    }

    public function uploadCover()
    {
        $this->validate([
            "album_cover" => "required|mimes:jpg,png,jpeg,gif"
        ]);

        $path = $this->album_cover->store("public/photos");
        $path = explode("public", $path)[1];
        $album = ModelsGallery::find($this->album_id);
        $this->isReady = false;
        try {
            if ($album->avatar) {
                Storage::delete($album->avatar);
            }
            $album->avatar = $path;
            $album->save();
            $this->getAlbums();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function setIsReady()
    {
        $this->isReady = true;
    }

    public function getAlbums()
    {
        $this->albums = ModelsGallery::all();
    }

    public function createAlbum()
    {
        $this->validate([
            "name" => "required|unique:galleries"
        ]);

        $gallery = new ModelsGallery();
        $gallery->name = $this->name;
        $gallery->save();
        $this->name = "";
        $this->getAlbums();
        $this->toggleCreating();
    }

    public function toggleCreating()
    {
        $this->isCreating = !$this->isCreating;
        $this->name = "";
    }
    public function render()
    {
        return view('livewire.gallery.gallery')
            ->extends("layouts.dashboard");
    }
}

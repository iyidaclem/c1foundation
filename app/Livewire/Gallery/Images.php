<?php

namespace App\Livewire\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class Images extends Component
{
    use WithFileUploads;

    public $uploadMode = 'file'; // 'file' or 'url'
    public $imageFiles = [];
    public $imageUrls = [];
    public $gallery;
    public $isUploading = false;

    public function mount($gallery_id)
    {
        $this->fetchGallery($gallery_id);
    }

    public function fetchGallery($gallery_id)
    {
        $this->gallery = Gallery::find($gallery_id);
        if (!$this->gallery) {
            return redirect("/");
        }
    }

    public function toggleIsuploading()
    {
        $this->isUploading = !$this->isUploading;
    }



    public function toggleUploadMode($mode)
    {
        $this->uploadMode = $mode;
        $this->clearInputs();
    }

    public function addImageFile()
    {
        $this->imageFiles[] = null;
    }

    public function addImageUrl()
    {
        $this->imageUrls[] = null;
    }

    public function removeImageFile($index)
    {
        unset($this->imageFiles[$index]);
        $this->imageFiles = array_values($this->imageFiles);
    }
    public function removeImageUrl($index)
    {
        unset($this->imageUrls[$index]);
        $this->imageUrls = array_values($this->imageUrls);
    }
    public function clearInputs()
    {
        $this->imageFiles = [];
        $this->imageUrls = [];
        $this->toggleIsuploading();
    }

    function uploadImages()
    {
        if ($this->uploadMode == "file") {
         
            $photos = [];
            foreach ($this->imageFiles as $image) {
                $path = $image->store("public/photos");
                $photos[] = [
                    "url" => url("storage/".explode("public/", $path)[1]),
                    "user_id" => auth()->user()->id
                ];
            }
            
            $this->gallery->image()->createMany($photos);

            $this->fetchGallery($this->gallery->id);

            $this->clearInputs();
        } else {
            $photos = [];
            foreach ($this->imageUrls as $url) {
                $photos[] = [
                    "url" => $url,
                    "user_id" => auth()->user()->id
                ];
            }
            
            $this->gallery->image()->createMany($photos);

            $this->fetchGallery($this->gallery->id);

            $this->clearInputs();
        }
    }

    public function render()
    {
        return view('livewire.gallery.images')
            ->extends("layouts.dashboard");
    }
}

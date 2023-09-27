<div>
    @if($isUploading)
    <div>
        <div class="text-center">
            <div class="mb-3">
                <button class="btn btn-primary" wire:click="toggleUploadMode('file')">Upload Images</button>
                <button class="btn btn-primary" wire:click="toggleUploadMode('url')">Enter Image URLs</button>
            </div>

            @if ($uploadMode === 'file')
            <div>
                <button class="btn btn-success" wire:click="addImageFile">Add Image</button>
                @foreach($imageFiles as $index => $image)
                <div class="mt-3">
                    <input type="file" wire:model="imageFiles.{{ $index }}" accept="image/*">
                    <button class="btn btn-danger" wire:click="removeImageFile({{ $index }})">Remove</button>
                </div>
                @endforeach
            </div>
            @else
            <div>
                <button class="btn btn-success" wire:click="addImageUrl">Add URL</button>
                @foreach($imageUrls as $index => $url)
                <div class="mt-3">
                    <input type="text" class="w-50" wire:model="imageUrls.{{ $index }}" placeholder="Enter Image URL">
                    <button class="btn btn-danger" wire:click="removeImageUrl({{ $index }})">Remove</button>
                </div>
                @endforeach
            </div>
            @endif

            <div class="">
                <h3>Image Thumbnails</h3>
                <div class="container">
                    <div class="row">
                        @foreach ($imageFiles as $index => $image)
                        <div class="col-3" style="height: 200px; overflow:hidden">
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="Image {{ $index + 1 }}" class="img-thumbnail">
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($imageUrls as $index => $url)
                        <div class="col-3" style="height: 200px; overflow:hidden">
                            @if ($url)
                            <img src="{{ $url }}" alt="Image {{ $index + 1 }}" class="img-thumbnail">
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary mt-2" wire:click="uploadImages">Upload Image</button>
    </div>
    @else
    <div>
        <div class="w-100 text-right">
            <button class="btn btn-primary" wire:click="toggleIsuploading"><i class="fa fa-image"></i> Upload Image</button>
        </div>
        <h1>{{ucfirst($gallery->name)}}</h1>
        @if(count($gallery->image()->get()) < 1) <p>No image available</p>
            @endif
            @foreach($gallery->image()->get() as $image)
            <div class="col-md-3 m-2">

                <div class="card" style="
                    width: 100%;
                    background: url('{{url($image->url)}}');
                    background-size:cover;
                    height: 300px;
                    ">
                </div>
            </div>
            @endforeach
    </div>
    @endif
</div>
<div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                @if($isCreating)
                <form wire:submit.prevent="createAlbum">
                    <input wire:model="name" type="text" placeholder="Enter name" class="w-100 m-2 alert border">
                    @error("name")
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <button class="btn btn-primary">Save</button>
                </form>
                @endif
            </div>
            <div class="col-4">
                @if(!$isCreating)
                <button wire:click="toggleCreating" class="btn btn-primary"><i class="fa fa-plus"></i> Create Album</button>
                @else
                <button wire:click="toggleCreating" class="btn btn-danger"><i class="fa fa-plus"></i> Cancel</button>
                @endif
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row" style="overflow-x: scroll">
            @if(count($albums) > 0)
            <div class="col-12">
                <h2>Albums</h2>
            </div>
            @endif
            @foreach($albums as $album)
           
            <div class="col-md-3 m-2">
                
            <h2 class="card-title">{{$album->name}}</h2>
                <div class="card" style="
                width: 100%;
                background: url('{{$album->avatar ? asset('storage'.$album->avatar) : '/images/no-bg.png'}}');
                background-size:cover;
                height: 300px;
                ">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        @if($isReady && $album_id == $album->id)
                        <button class="btn btn-danger position-absolute top-0 end-0" wire:click="uploadCover"> <i class="fa fa-image"></i> Upload new cover</button>
                        @else
                        <button class="btn btn-muted position-absolute top-0 end-0" onclick="document.getElementById('album{{$album->id}}').click()"> <i class="fa fa-image"></i> Change Cover</button>
                        @endif
                        <input wire:click="changeId({{$album->id}})" wire:change="setIsReady" wire:model="album_cover" class="d-none" id="album{{$album->id}}" type="file" accept="image/*">
                        <!-- <img class="card-img-top" src="{{$album->avatar ? asset('storage'.$album->avatar) : '/images/no-bg.png'}}" alt="{{$album->name}} cover image"> -->
                    </div>
                    <div class="card-body text-center">
                        <div style="
                        position: absolute;
                        bottom: 0px;
                        text-align:center;
                        background-color:grey;
                        width: 98%;
                        padding: 10px;
                       ">
                            <a href="/home/gallery/{{$album->id}}" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
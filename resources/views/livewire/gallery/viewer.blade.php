<div>
    <br><br>
    <div class="container mt-5">
        <div class="row mt-5">

            <h2 class="display-4 text-muted">Photo Gallery</h2>
            @foreach($albums as $album)

            <div class="col-md-3 mb-3">
                <div class="card" style="
       width: 100%;
       background: url('{{$album->avatar ? asset('storage'.$album->avatar) : '/images/no-bg.png'}}');
       background-size:cover;
       height: 300px;
       ">

                    <div class="card-body text-center">

                        <div style="
               position: absolute;
               bottom: 0px;
               text-align:center;
               background-color:grey;
               width: 98%;
               padding: 10px;
              ">
                            <p class="card-title">{{$album->name}}</p>
                            <a href="/gallery/viewer/{{$album->id}}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br><br>
</div>
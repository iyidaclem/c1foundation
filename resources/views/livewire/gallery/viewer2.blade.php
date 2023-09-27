<div>
    <div class="mt-3 mb-3">
        <br><br>
        @if(count($gallery->image()->get()) < 1) <p>No image available</p>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h1 class="display-3">{{ucfirst($gallery->name)}}</h1>
                    </div>
                    @foreach($gallery->image()->get() as $image)
                    <div class="col-md-6">

                        <div class="card" style="
                    width: 100%;
                    background: url('{{url($image->url)}}');
                    background-size:cover;
                    height: fit-content;
                    ">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
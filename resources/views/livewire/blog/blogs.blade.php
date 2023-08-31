<div>
    <div class="fugu--inner-section dark-version">
        <div class="container">
            <div class="fugu--breadcrumbs-section">
                <div class="fugu--breadcrumbs-data center-content">
                    <h1 class="wow fadeInUpX" data-wow-delay="0s">Blog & Resources</h1>
                    <p class="wow fadeInUpX" data-wow-delay=".10s">Exlore our blogs and resources to be informed abnout important news and events in C1 foundations ecosystem</p>
                    <!-- <div class="fugu--newsletter fugu--search wow fadeInUpX" data-wow-delay=".30s">
                        <input type="email" placeholder="Search...">
                        <button type="submit" id="fugu--submit-btn">Search</button>
                        <button id="fugu--search-btn"><img src="assets/images/svg2/search.svg" alt=""></button>
                    </div> -->
                </div>
            </div>
            <!-- End breadcrumb -->
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">My posts</li>
                @foreach($posts as $post)
                <li class="list-group-item d-flex justify-content-between">
                    <p>{{$post->title ?? ""}}</p>

                    <div>
                        @if($post->pdf)
                        <a href="{{asset('storage/pdfs/'.$post->pdf)}}" class="btn bg-secondary text-light">View as Pdf</a>
                        @endif
                        <a href="/blogs/{{$post->id}}/viewer" class="btn bg-secondary text-light">View</a>
                    </div>


                </li>
                @endforeach
                @if(count($posts) < 1) <li class="list-group-item">No posts available</li>
                    @endif
            </ul>
        </div>
    </div>


</div>
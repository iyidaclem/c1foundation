<div>

    <div class="d-flex flex-row-reverse">
        <a class="btn btn primary mb-3" href="/home/blogs/create">+ Create Post</a>
    </div>


    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">My posts</li>
        @foreach($posts as $post)
        <li class="list-group-item d-flex justify-content-between">
            <p>{{$post->title}}</p>

            <div>
                <a href="/blogs/{{$post->id}}/viewer" class="btn bg-primary text-light">View</a>
                <a href="/home/blogs/edit/{{$post->id}}" class="btn bg-secondary text-light">Edit</a>
                <a href="javascript:void" class="btn bg-danger text-light" data-remodal-target="delete{{$post->id}}">Delete</a>
            </div>


        </li>
        <div class="remodal" data-remodal-id="delete{{$post->id}}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="remodal-content">
                <h2 id="modal1Title">Delete Post</h2>
                <p id="modal1Desc">
                   Are you sure you want to delete?
                </p>
            </div>
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
            <a data-remodal-action="confirm" class="remodal-confirm"onclick="document.getElementById('delform{{$post->id}}').click()">OK</a>
            <form action="{{route('home.blogs.delete')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <input class="d-none" id="delform{{$post->id}}" type="submit" value="Delete">
            </form>
        </div>
        @endforeach
        @if(count($posts) < 1) <li>No posts available</li>
            @endif
    </ul>
</div>
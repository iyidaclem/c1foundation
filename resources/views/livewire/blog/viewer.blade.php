<div>

    <div class="fugu--inner-section dark-version fugu--single-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="fugu--breadcrumbs-section">
                        <div class="fugu--breadcrumbs-data">
                            <h1>{{$post->title}}</h1>
                            <div class="fugu--blog-meta">
                                <ul>
                                    <li> <a href="">Posted on: {{$post->created_at}}</a> </li>
                                    <br>
                                    <li><a href="javascript:void">
                                            By: {{$post->user->name}}
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End breadcrumb -->
                    <div class="text-light">
                        {!! $post->body !!}
                    </div>

                    <div class="alert alert-muted text-center p-5"><a href="/blogs">More posts</a></div>
                </div><!-- End nexto single blog -->
            </div>
        </div>

    </div>
    <div class="fugu--blog-shape1">
        <img src="assets/images/all-img/v3/shape2.png" alt="">
    </div>
    <div class="fugu--blog-shape3">
        <img src="assets/images/all-img/blog2/shape.png" alt="">
    </div>

    <div class="fugu-go-top">
        <img src="assets/images/svg/arrow-black-right.svg" alt="">
    </div>

</div>
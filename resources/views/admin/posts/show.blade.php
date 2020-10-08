@extends('layouts.app')
@section('body-content')
    <div class="row">
        <div class="col-md-12">
            <div class="site-cover site-cover-sm overlay single-page" style="background-image: url('../{{$post->photo->path}}');">
                <div class="container">
                    <div class="row same-height justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="post-entry text-center">
                                <span class="post-category text-white {{$post->category->theme}} mb-3">{{$post->category->title}}</span>
                                <h1 class="mb-4"><a href="#">{{$post->title}}</a></h1>
                                <div class="post-meta align-items-center text-center">
                                    <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="../{{$post->user->photo->path}}" alt="Image" class="img-fluid"></figure>
                                    <span class="d-inline-block mt-1">By {{$post->user->name}}</span>
                                    <span>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <section class="site-section py-lg">
                    <div class="container">

                        <div class="row blog-entries element-animate">

                            <div class="col-md-12  main-content">

                                <div class="post-content-body">
                                    <p>{{strip_tags($post->description)}}</p>
                                 </div>

                            </div>

                            <!-- END main-content -->
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

@endsection

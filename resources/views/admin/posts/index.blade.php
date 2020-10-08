@extends('layouts.app')
@section('body-content')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Category</span>
                    <h3>Sports</h3>
                    <p>Category description here.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                        error eius quo, officiis non maxime quos reiciendis perferendis doloremque maiores!</p>
                </div>
                <div class="col-md-3"></div>
                @auth
                    <div class="col-md-3">
                        <a href="{{url('/post/create ')}}" class="btn btn-outline-danger">Create Post</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <div class="site-section bg-white">
        <div class="container">
            <div class="row">
                @if(count($posts)>0)
                    @foreach($posts as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="entry2">
                                <a href="{{route('post.show',$post->id)}}"><img src="{{$post->photo->path}}" alt="Image"
                                                           class="img-fluid rounded"></a>
                                <div class="excerpt">
                                    <span
                                        class="post-category text-white {{$post->category->theme}} mb-3">{{$post->category->title}}</span>

                                    <h2><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <figure class="author-figure mb-0 mr-3 float-left"><img
                                                src="{{$post->user->photo->path}}" alt="Image" class="img-fluid"></figure>
                                        <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
                                        <span>&nbsp;-&nbsp; {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                                    </div>

                                    <p>{{strip_tags($post->description)}}</p>
                                    <p><a href="{{route('post.show',$post->id)}}">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row text-center pt-5 border-top">
                <div class="col-md-12">
                    <div class="custom-pagination">
                        <span>1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">15</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

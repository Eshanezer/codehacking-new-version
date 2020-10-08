@extends('layouts.app')
@section('body-content')


        <div class="site-section bg-light">
            <div class="container">
                <div class="row align-items-stretch retro-layout-2">
                        @foreach($categories as $category)
                            <div class="col-md-4">
                                <a href="" class="h-entry mb-30 v-height gradient" style="background-image: url('{{$category->photo->path}}');">

                                    <div class="text">
                                        <h2>{{$category->title}}</h2>
                                        <span class="date">{{\Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
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
        </div>
        <div class="site-section bg-lightx">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <div class="subscribe-1 ">
                            <h2>Subscribe to our newsletter</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                            <form action="#" class="d-flex">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                        <ul class="list-unstyled float-left mr-5">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Subscribes</a></li>
                        </ul>
                        <ul class="list-unstyled float-left">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Nature</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">


                        <div>
                            <h3 class="footer-heading mb-4">Connect With Us</h3>
                            <p>
                                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                                <a href="#"><span class="icon-twitter p-2"></span></a>
                                <a href="#"><span class="icon-instagram p-2"></span></a>
                                <a href="#"><span class="icon-rss p-2"></span></a>
                                <a href="#"><span class="icon-envelope p-2"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

@endsection

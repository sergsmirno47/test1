@extends('layouts.main')

@section('content')

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="/assets/img/blog/{{ $blog->img }}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{ $blog->title }}</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li>
                                <i class="fa fa-user"></i>
                                @foreach($tags as $tag)
                                    <a href="#">{{ $tag->title }},</a>
                                @endforeach
                            </li>
                            <li><a href="#"><i class="fa fa-comments"></i> {{ $blog->comments()->count() }} Comments</a></li>
                        </ul>
                        {{ $blog->text }}
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">

                        Prev Post
                        <div class="row">
                            @if($perv)
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="{{ route('blogs.show', $perv[0]['id']) }}">
                                        <img class="img-fluid" src="/assets/img/post/preview.png" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ route('blogs.show', $perv[0]['id']) }}">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="{{ route('blogs.show', $perv[0]['id']) }}">
                                        <h4>{{ Illuminate\Support\Str::limit(strip_tags($perv[0]['title']),15) }}</h4>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if($next)
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="{{ route('blogs.show', $next[0]['id']) }}">
                                        <h4>{{ Illuminate\Support\Str::limit(strip_tags($next[0]['title']),15) }}</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ route('blogs.show', $next[0]['id']) }}">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="{{ route('blogs.show', $next[0]['id']) }}">
                                        <img class="img-fluid" src="/assets/img/post/next.png" alt="">
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="/assets/img/blog/author.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Harvard milan</h4>
                            </a>
                            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                our dominion twon Second divided from</p>
                        </div>
                    </div>
                </div>

                <x-comments.viewer :model="$blog" />

                <x-comments.create :id="$blog->id" model="blog" />
            </div>
                @include('layouts.blog-right-col')
            </div>
        </div>
    </section>



@endsection

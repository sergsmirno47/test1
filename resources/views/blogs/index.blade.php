@extends('layouts.main')

@section('content')

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($blogs as $blog)
                            <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/blog/{{ $blog->img }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ $blog->created_at->format('d') }}</h3>
                                    <p>{{ $blog->created_at->format('M') }}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blogs.show', $blog->id) }}">
                                    <h2>{{ $blog->title }}</h2>
                                </a>
                                <p>{{Illuminate\Support\Str::limit(strip_tags($blog->text),150)}}</p>
                                <ul class="blog-info-link">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        @foreach($blog->tags as $tag)
                                                <a href="#">{{ $tag->title }},</a>
                                        @endforeach
                                    </li>
                                    <li><a href="#"><i class="fa fa-comments"></i> {{ $blog->comments()->count() }} Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $blogs -> withQueryString() -> links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
                @include('layouts.blog-right-col')
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection

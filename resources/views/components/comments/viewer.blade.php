@props([
    'model'
])

<div class="comments-area">
    <h4>{{ $model->comments()->count() }} Comments</h4>

    @foreach($model->comments()->orderByDesc('created_at')->get() as $comment)
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="/assets/img/comment/comment_1.png" alt="">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            {{ $comment->text }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">{{ $comment->name }}</a>
                                </h5>
                                <p class="date">{{ $comment->created_at->format('m d, Y H:m') }} </p>
                            </div>
{{--                            <div class="reply-btn">--}}
{{--                                <a href="#" class="btn-reply text-uppercase">reply</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

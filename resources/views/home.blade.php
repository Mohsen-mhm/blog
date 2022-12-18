@extends('layouts.app')

@section('header')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">به وبلاگ من خوش آمدید!</h1>
                <p class="lead mb-0">این یک پروژه آزمایشی است.</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="col-lg-8">
        @foreach($posts->chunk(2) as $row)
            <div class="row">
                @foreach($row as $post)
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="{{ route('single',$post->slug) }}"><img class="card-img-top"
                                                             src="{{ $post->picture ? : '/storage/default-post-image.png' }}"
                                                             alt="{{ $post->title }}"/></a>
                            <div class="card-body">
                                <div
                                    class="small text-muted">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</div>
                                <h2 class="card-title h4">{{ $post->title }}</h2>
                                <p class="card-text" id="postText">{{ $post->text }}</p>
                                <a class="btn btn-primary" href="{{ route('single',$post->slug) }}">ادامه مطلب <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        <!-- Pagination-->
        {{ $posts->links() }}
    </div>
@endsection

@section('script')
    <script>
        texts = document.querySelectorAll('#postText')
        texts.forEach(function (str) {
            ellipsText = ellipsis(str.innerHTML)
            str.innerHTML = ellipsText
        })

        function ellipsis(string) {
            if (string.length > 80) {
                return string.substring(0, 80) + "<b class='text-danger'>...</b>";
            } else {
                return string;
            }
        }
    </script>
@endsection

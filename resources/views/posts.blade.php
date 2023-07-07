@extends('layouts.main')

@section('containers')

<div class="mb-5 bg-dark"
    style="background-image:url(http://source.unsplash.com/2000x400?programming); background-repeat: no-repeat; height: 400px">
    <div class="py-5" style="background-color: rgba(0,0,0,0.7); background-blend-mode: color-burn; height: 400px">
        <div class="container py-5 text-center" style="margin-top: auto">
            <h1 class="display-5 fw-bold text-white">ABADDON</h1>
            <p class="col-md-12 fs-4 fw-bold text-white">We Will Build As Your Want.</p>
            <div class="container-sm">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="/posts" method="">
                            @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if(request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search..." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-danger" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-sm mt-4 mb-5">
    {{-- PAGE TITLE --}}
    {{-- <h1 class="mb-3 text-center">{{ $title }} </h1> --}}
    {{--/ PAGE TITLE --}}

    {{-- SEARCH/PENCARIAN --}}
    {{-- <div class="container-sm">
        <div class="row justify-content-cente">
            <div class="col-md-6">
                <form action="/posts" method="">
                    @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{--/ SEARCH/PENCARIAN --}}

    {{-- HERO CARD/HERO --}}
    @if($posts->count())
    <div class="card mb-4 shadow border-0">
        @if(!empty($posts[0]->image))
        <div style="max-height: 400px; overflow: hidden;">
            <img src="{{ ('storage/' .  $posts[0]->image) }}" class="card-img-top img-fluid"
                alt="{{ $posts[0]->category->name }}">
        </div>
        @else
        <img src="http://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
            alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{
                    $posts[0]->title }}</a></h3>
            <p><small class="text-muted">
                    By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{
                        $posts[0]->author->name }}</a>
                    in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{
                        $posts[0]->category->name}} </a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>
    {{--/ HERO CARD/HERO --}}

    {{-- POST LIST --}}

    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3 d-flex">
            <div class="card shadow border-0">
                <div class="position-absolute bg-dark text-white px-3 py-2 "
                    style="background-color: rgba(0, ,0 , 0, 0.7)">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{
                        $post->category->name }}</a>
                </div>

                @if(!empty($post->image))
                <img src="{{ ('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @else
                <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                    alt="{{ $post->category->name }}">
                @endif

                <div class="card-body">
                    <h5 class="card-title roboto-font">{{ $post->title }}</h5>
                    <p>
                        <small>
                            By.<a href="/posts?author={{ $post->author->username }} " class="text-decoration-none">{{
                                $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>

                </div>
                <div class="card-footer">
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{--/ POST LIST --}}

    {{-- APPEAR WHEN NOTHING FOUND ON SEARCH --}}
    @else
    <p class="text-center fs-4">Oops Nothing Here...</p>
    @endif
    {{--/ APPEAR WHEN NOTHING FOUND ON SEARCH --}}

    {{-- PAGGINATION --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $posts->links() }}
    </div>
    {{-- / PAGGINATION --}}
</div>

@endsection
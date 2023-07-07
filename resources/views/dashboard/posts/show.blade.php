@extends('dashboard.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-4 col-xl-12 order-0 mb-4">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Post /</span> Post</h4>

            <div class="card shadow">
                <div class="card-body">
                    <h1 class="mb-3">{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-success">
                        <i class="bx bx-left-arrow-alt"></i> Back
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                        <i class="bx bx-edit"></i> Edit
                    </a>
                    <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post"
                        onclick="return confirm('Are you sure will delete this post?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete <i class="bx bx-trash"></i></button>
                    </form>

                    @if(!empty($post->image))
                    <div class=" text-center" style="max-height: 400px; overflow:hidden;">
                        <img src="{{asset('storage/' .  $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                    @else
                    <div class=" text-center">
                        <img src="http://source.unsplash.com/1500x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                    @endif

                    <article class="my-3 fs-5 col-lg-12">
                        {!! $post->body !!}
                    </article>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
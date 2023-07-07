@extends('layouts.main')

@section('containers')
<div class="container-sm mt-4">
    <h1 class="mb-5">Post Category</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mx-auto mb-3 mb-3">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card shadow bg-dark text-white border-0">
                        <img src="http://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgba(0,0,0,0.7)">
                                {{
                                $category->name
                                }}
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
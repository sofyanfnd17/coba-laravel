@extends('dashboard.layouts.main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 order-0 mb-4">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Post /</span> Edit Post</h4>

            <a href="/dashboard/posts" class="btn btn-success mb-3"><i class="bx bx-left-arrow-alt"></i> Back</a>

            <div class="card shadow">
                <div class="card-body">

                    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" value="{{old('title', $post->title) }}" required>
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                id="slug" value="{{ old('slug', $post->slug) }}" required>
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                @if(old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="hidden" name="oldImage" value="{{ $post->image }}">
                            @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}"
                                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                                id="image" onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Body</label>
                            <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
                            <trix-editor input="body"></trix-editor>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save Now</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
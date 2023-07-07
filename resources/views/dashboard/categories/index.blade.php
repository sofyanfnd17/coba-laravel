@extends('dashboard.layouts.main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Post /</span> {{ $title }}</h4>

            <div class="card shadow">
                <div class="card-header">
                    <a href="/dashboard/categories/create" class="btn btn-primary"><i class="bx bx-plus"></i> New
                        Category</a>

                    @if(session()->has('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5%">No</th>
                                    <th width="80%">Category Name</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td class="text-center"><b>{{ $loop->iteration }}</b></td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                            class="badge bg-warning">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <form class="d-inline" action="/dashboard/categories/{{ $category->slug }}"
                                            method="post"
                                            onclick="return confirm('Are you sure will delete this post?')">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"> <i
                                                    class="bx bx-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
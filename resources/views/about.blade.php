@extends('layouts.main')
@section('containers')

<div class="container-sm mt-4">
    <div class="card shadow mb-3 text-center">
        <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%; margin-bottom: 5%">
            <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle" height="20%" width="20%">
            <div class="card-body">
                <h3 class="card-title"><b>{{ $name }}</b></h3>
                <p class="card-text">{{ $email }}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

@endsection
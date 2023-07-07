@extends('layouts.main')

@section('containers')

<div id="carouselExampleCaptions" class="carousel slide" data-interval="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://source.unsplash.com/1200x350?programming" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>PROGRAMMING</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://source.unsplash.com/1200x350?illustrator" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>ARTS</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://source.unsplash.com/1200x350?cybersecurity" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>CYBER SECURITY</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h1 style="text-decoration: underline;">ABADDON</h1>
        </div>
        <div style="margin-left: 6%; margin-right: 6%;">
            <div class="text-center">
                <b style="font-size: 150%;
        ">Lorem ipsum</b> dolor sit amet consectetur adipisicing elit. Ex nam hic sunt? Distinctio, eaque! Officia
                id
                nemo, obcaecati voluptatem sit asperiores aut voluptas sapiente dolores quidem at corrupti suscipit
                inventore sed architecto odio laboriosam aperiam? Debitis iusto cumque aut. Velit accusamus, quia
                voluptatibus dolorem fugiat reiciendis blanditiis iusto voluptatum sequi natus similique. Rem sed
                consequuntur odio praesentium ab quaerat, voluptates doloremque, minima mollitia suscipit excepturi eius
                culpa non laborum nam. Dignissimos eum molestias molestiae porro natus id officia aut, quod quos minus
                labore fuga sunt vero modi eveniet neque nostrum, totam, distinctio beatae obcaecati veritatis veniam
                quibusdam! Distinctio.
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-3 d-flex">
                    <div class="card shadow border-0">
                        <img src="http://source.unsplash.com/500x400?programming" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title roboto-font">WEB PROGRAMMING</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                                consectetur praesentium quia aperiam. Vitae quo itaque libero? Quo, vel? Molestiae rem
                                et velit alias repellat.</p>
                        </div>
                        <div class="card-footer  text-center">
                            <a href="/posts/" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex">
                    <div class="card shadow border-0">
                        <img src="http://source.unsplash.com/500x400?illustrator" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title roboto-font">WEB DESIGN</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo alias
                                iste obcaecati voluptates facilis provident exercitationem eveniet odio id harum!</p>
                        </div>
                        <div class="card-footer  text-center">
                            <a href="/posts/" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex">
                    <div class="card shadow border-0">
                        <img src="http://source.unsplash.com/500x400?cybersecurity" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title roboto-font">ARTS</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque at
                                praesentium ad amet iure incidunt.</p>
                        </div>
                        <div class="card-footer  text-center">
                            <a href="/posts/" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="mb-0"
    style="background-image:url(http://source.unsplash.com/2000x350?cybersecurity); height: 500px; width: 1900px; background-repeat: no-repeat;">
    <div class="container-fluid mt-5 ml-3">
        <div class="card rounded-0" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div> --}}

@endsection
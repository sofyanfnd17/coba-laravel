<nav class="navbar navbar-expand-lg bg-white text-dark sticky-top shadow">
    <div class="container-xxl">
        <a class="navbar-brand" href="/" style="font-family: 'Zen Tokyo Zoo', cursive;"><b>ABADDON</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active' : ' ' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'posts') ? 'active' : ' ' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'galleries') ? 'active' : ' ' }}" href="/galleries">Galleries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($active === 'about') ? 'active' : ' ' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'categories') ? 'active' : ' ' }}" href="/categories">Post
                        Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hallo {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                My
                                Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn btn-text dropdown-item">
                                    <i class="bi bi-arrow-bar-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" role="button"
                        class="btn btn-outline-dark {{ ($active === 'login') ? 'active' : ' ' }} ">Login
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

{{-- <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
    <h1 class="mb-3 h2">Jumbotron</h1>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
        labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
        neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
    </p>
</div> --}}
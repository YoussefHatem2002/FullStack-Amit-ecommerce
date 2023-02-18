<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/build/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/build/assets/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Index</title>
</head>
<body>
    <nav-bar>

        <!-- second(dark) navbar -->
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <p class="navbar-brand me-auto mb-2 mb-lg-0"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/vusrdugn.json"
                        trigger="hover"
                        colors="primary:#121331,secondary:#b26836,tertiary:#4bb3fd,quaternary:#f9c9c0,quinary:#ebe6ef"
                        state="hover-wave"
                        style="width:80px;height:80px">
                    </lord-icon></p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <form class="d-flex w-25 m-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('profile.edit')}}">My Account</a>
                        </li>
                        @endauth
                        @guest

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('register')}}">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('login')}}">Login</a>
                        </li>
                        <span>/</span>

                        @endguest

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('category', 1)}}">Men</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('category', 2)}}">Women</a>
                        </li>

                        @auth
                        {{-- @if(auth()->check()) --}}
                        <li class="nav-item">
                            <a href="{{route('showCart', ['user_id' => Auth::user()->id,'instance' => 'wishlist'])}}" class="nav-link">Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('showCart', ['user_id' => Auth::user()->id,'instance' => 'cart'])}}" class="nav-link"><span><i class="fas fa-cart-shopping"></i></span>My Cart</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of secind(dark) navbar -->
    </nav-bar>

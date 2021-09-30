@extends('navbar.tampilan')
@section('nav')
    <div class="container bg-light pt-3 pb-3 mt-5 rounded">
                        @if(session()->has('pesan'))
                            <div class="alert bg-primary text-white alert-dismissible fade show" role="alert">
                                {{ session('pesan') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if(session()->has('email'))
                            <div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
                                {{ session('email') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                        <img src="https://elearning.smkmahaputra.com/userfiles/images/img-slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://elearning.smkmahaputra.com/userfiles/images/img-slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://elearning.smkmahaputra.com/userfiles/images/img-slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-4">
            <main class="form-signin">
                <form action="/" method="post">
                @csrf
                    <h5 class=" mb-3" style="font-weight: bold;">Login E-Learning</h5>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                    <div class="row">
                        <div class="col-8">
                            <small><a href="" class="text-decoration-none">Lupa Password?</a></small>
                        </div>
                        <div class="col-4">
                            <button class="w-80 btn btn-md btn-primary" style="margin-left: 19px" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </main>
            </div>
        </div>
    </div>

@endsection
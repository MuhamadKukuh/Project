<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style Curian -->

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/style.css">

    <title>{{$title}}</title>
  </head>
  <body style="background-color:#000000">
    <nav class="navbar navbar-expand-lg navbar-light fw-b border-bottom bg-dark border-2 border-danger " style="background-color: #7ee9ff">
      <div class="container">
        <a class="navbar-brand text-danger" href="#" style="font-family: Comic Sans MS">E-Learning SMK Mahaputra Cerdas Utama</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item " style="margin-left:100px">
            <!-- <form class="d-flex" action="/">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" style="margin-left:-7px"  type="submit">Search</button>
            </form> -->
          </li>
        </ul>
        @auth
          <li class="nav-item dropdown navbar-nav ms-auto">
          <img src="{{ auth()->user()->gender->gambar }}" alt="" class="rounded-circle" style="max-width:50px">
            <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu bg-danger text-danger" aria-labelledby="navbarDropdown">
              <li ><a class="dropdown-item" href="/profile" calss="text-danger">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a href="home" class="dropdown-item" calss="text-danger">Home </a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @endauth
        
      </div>
    </nav>
    @yield('nav')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Belum Dipake Pusing asem wkwkw -->
    <!-- <div class="bg-dark mt-5 pt-1 pb-5 border-top border-2 border-danger">
      <h5 class="text-center text-danger" style="min-height:175px"> Kaki Binatang   </h5>
    </div> -->
  </body>
</html>
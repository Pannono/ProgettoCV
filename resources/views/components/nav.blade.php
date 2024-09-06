<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand " href="{{route('home')}}">
      <h5 class="text-center nav-logo ms-2 mt-2">Daily<i class="fa fa-globe nav-icon"></i></span>Planet
      </h5></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-evenly" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link fs-6 mt-2" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fs-6 mt-2" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
          </li>
        </li>
        <li class="nav-item dropdown mx-3">
          <a class="nav-link dropdown-toggle fs-6 mt-2" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
          <ul class="dropdown-menu dropdown-custom">
            @foreach ($categories as $category)
            <li>
              <a class="dropdown-item text-capitalize" href="{{route('article.byCategory' , $category)}}">{{$category->name}}</a>
            </li>
            @endforeach
          </ul>
        </li>
        @guest
        @else
        <li class="nav-item mx-3">
          <a class="nav-link mt-2 fs-6" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle title ms-3 fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu text-center dropdown-custom">
            @auth      
            @if (Auth::user()->is_writer)
            <li><a class="dropdown-item" href="{{route('article.create')}}">Crea articolo</a></li>
            @endif
            @if (Auth::user()->is_writer)
            <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard Writer</a></li>
            @endif
            @if (Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
            @endif
            @if (Auth::user()->is_revisor)
            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a></li>
            @endif
            <li>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <hr>
                <button type="submit" class="text-light bg-danger btn">Logout</button>
              </form>
            </li>
            @endauth
          </ul>
        </li>
        @endguest
      </ul>
      <form action="{{route('article.search')}}" method="GET" class=" d-flex" role="search">
        <input class="form-control me-2 bg-light" type="search" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
        <button class="btn btn-custom fw-bold" type="submit">Cerca</button>
      </form>
      
      
      @guest
      <div class="ms-md-5 my-2">
      <a class="p-2 btn btn-custom fs-5" href="{{route('login')}}">Accedi</a>
      </div>
      <div>
        <a class="btn btn-custom contrast p-2 fs-5" href="{{route('register')}}">Registrati</a>
      </div>

      @endguest
      
    </div>
  </div>
  
</nav>
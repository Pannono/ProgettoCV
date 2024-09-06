<x-layout>
    <div class="container-fluid pt-5 mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 mt-2 ">
                <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner carousel-custom">
                        <div class="carousel-item h-100 active" data-bs-interval="3000">
                            <img src="./fotoCarosello1.avif" class="d-block w-100 h-100 rounded object-fit-cover"  alt="..." >
                        </div>
                        <div class="carousel-item h-100" data-bs-interval="3000">
                            <img src="./fotoCarosello2.avif" class="d-block w-100 h-100 rounded object-fit-cover" alt="...">
                        </div>
                        <div class="carousel-item h-100" data-bs-interval="3000">
                            <img src="./fotoCarosello3.avif" class="d-block w-100 h-100 rounded object-fit-cover" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center fs-5 d-flex align-items-center justify-content-center ">
                <p class="p-5 headerPar">
                    
                    Il sito d' <em class="text-danger">informazione</em> che segue gli eventi di tutto il <strong>mondo</strong>!
                    Non perderti nulla, dai un'occhiata ai <strong>nostri ultimi articoli</strong>.
                    <br>
                    @auth
                    Se desideri entrar a far parte del nostro <strong>Team</strong> e iniziare a <em>scrivere</em> i tuoi articoli, visita la sezione 
                    <a class="text-danger fw-bold text-decoration-none" href="{{route('careers')}}">Lavora con noi.</a>
                    @endauth
                </p>
            </div>
        </div>
        
        
    </div>
    
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>        
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 w-100">
                <h1 class="display-2 text-center mt-5 title-welcome">Daily<span><i class="fa fa-globe nav-icon"></i></span>Planet</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <h2 class="text-center fw-bolder mb-5 display-5">Ultimi articoli</h2>
            @foreach ($articles as $article)
            
            <div class="col-8 col-md-3 mx-auto mb-5">
                
                <x-card
                :article="$article"/>
                
            </div>
            @endforeach
        </div>
        <hr>
        <div>
            <h2 class="text-center fw-bolder mt-5 pt-5 display-5">I NOSTRI NUMERI</h2>
            
            <div class="container-fluid pt-5 mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 h-100 col-md-8 mt-2 ">
                        
                        <img class="img h-100" src="./fotonumeri.avif" alt="">
                    </div>
                    <div class="col-12 col-md-4 flex-column">
                        <div class="box-numbers ">
                            <p class="fs-4">Utenti registrati: <span id="sold" class=" fw-bold">0</span>+</p>
                        </div>
                        <div class="box-numbers ">
                            <p class="fs-4">Articoli: <span id="reviews" class="fw-bold">0</span>+</p>
                        </div>
                        <div class="box-numbers ">
                            <p class="fs-4">Visitatori: <span id="prova" class=" fw-bold">0</span>+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
    
    
    
    
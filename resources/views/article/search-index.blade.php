<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center bg-custom">
            <div class="col-12 col-md-10 w-100">
                <h1 class="display-1 title text-center my-2">Tutti gli articoli per {{ $query}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @if ($articles->isEmpty())
                
            <p class="display-3">Non ci sono articoli per questa ricerca!</p>
            @else
            @foreach ($articles as $article)
            
            <div class="col-12 col-md-3">
                <x-card
                :article="$article"/>
                {{-- <div class="card" >
                    <img src="{{ Storage::url($article->image)}}" class="card-img-top img" alt="Immagine dell'articolo:{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-subtitle">{{$article->subtitle}}</p>
                        <p class="small text-muted">Categoria:
                            <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{$article->category->name}}</a>
                        </p>
                        
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center ">
                        <p class="m-2 fw-bold">Scritto il <br> {{$article->created_at->format('d/m/Y')}} <br>
                            da <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize text-decoration-none">{{$article->user->name}}</a></p>
                            <a href="{{route('article.show', $article)}}" class="btn btn-custom text-center fw-bold">Leggi <br> Articolo</a>
                            
                        </div> --}}
                        {{-- </div> --}}
                    </div>
                    @endforeach
                    @endif
            </div>
        </div>
    </x-layout>
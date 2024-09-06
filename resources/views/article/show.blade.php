<x-layout>
    <div class="container-fluid p-5  text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 title">{{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
            <div class="col-6 col-md-3">
                
                    <img src="{{ Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo:{{$article->title}}">
            </div>
            <div class="col-6 col-md-3 bg-body-tertiary border border-3 rounded">
                <h5 class="card-title text-center mt-2 fw-semibold">{{$article->title}}</h5>
                <hr>
                <p class="card-subtitle fst-italic text-center">{{$article->subtitle}}</p>
                <hr>
                @if ($article->category)
                <p class="small text-muted">Categoria:
                    <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{$article->category->name}}</a>
                    @else
                    <p class="small text-muted">Nessuna categoria</p>
                @endif
                
                </p>
                    <p class="fw-lighter">Scritto il {{$article->created_at->format('d/m/Y')}} <br>
                        da {{$article->user->name}}</p>
            </div>
            <br>
            <div class="col-12 justify-content-evenly text-center my-5 border-top">

                <p class="mt-5">{{$article->body}}</p>
                @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-evenly">
                                <form action="{{route('revisor.acceptedArticle', $article)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accetta l'artiolo</button>
                                </form>
                                <form action="{{route('revisor.rejectedArticle', $article)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rifiuta l'articolo</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
                    
                    <div class="text-center">
                        <a href="{{route('article.index')}}" class="btn btn-primary">Vai alla lista degli articoli</a>
                    </div>
        </div>
    </div>
    </x-layout>
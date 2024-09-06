<div class="card mt-2 text-center align-items-center" >
    <img src="{{ Storage::url($article->image)}}" alt="Immagine dell'articolo:{{$article->title}}">
    <div class="card-body p-2 w-100">
        <h5 class="card-title small fw-bold mt-2">{{$article->title}}</h5>
        <hr>
        <p class="card-subtitle small text-truncate fw-semibold">{{$article->subtitle}}</p>
        <div class="card-container">

            <p class="card-text small mt-1  text-truncate">{{$article->body}}</p>
            @if ($article->category)
            <p class="small text-center">Categoria:
                <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-decoration-none">{{$article->category->name}}</a>
            </p>
            @else
                <p class="small text-muted">Nessuna categoria</p>
            @endif
            <p class="small text-muted my-0">
                @foreach ($article->tags as $tag)
                #{{$tag->name}}
                @endforeach
            </p>
            <p class="card-subtitle text-muted fst-italic small">Tempo di lettura {{$article->readDuration()}} min.</p>
        </div>
        <p class="m-2 p-0 small">Scritto il {{$article->created_at->format('d/m/Y')}} 
            da <a class="text-capitalize text-decoration-none fst-italic" href="{{route('article.byUser', $article->user->id)}}">{{$article->user->name}}</a>
        </p>
        {{-- <p class="m-2 text-truncate " > <a href="{{route('article.show', $article->body)}}"></a></p> --}}
    </div>
        <div class="card-footer d-flex justify-content-evenly align-items-center text-center">
            <a href="{{route('article.show', $article)}}" class="btn btn-custom text-center fw-bold">Leggi Articolo</a>
        </div>
</div>

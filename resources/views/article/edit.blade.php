<x-layout>
    <div class="container-fluid p-5 text-center bg-body">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Modifica l'articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('article.update' , $article)}}" method="POST" class="card p-5 shadow-rounded" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottoitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                        @error('subtitle')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Immagine attuale</label>
                        <img src="{{Storage::url($article->image)}}" alt="{{$article->title}}" class="w-50 d-flex">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Nuova immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" id="category" class="form-control">
                            <option selected disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($article->category_id == $category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label> 
                        <input type="text" name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name', ',')}}">
                        <span class="small text-muted fst-italic">"Dividi ogni tag con una virgola"</span>
                        @error('tags')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Contenuto dell'articolo</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="7">{{$article->body}}</textarea>
                        @error('body')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning">Modifica</button>
                        <a href="{{route('home')}}" class="text-secondary mt-2">Torna alla home</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>
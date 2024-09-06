<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h2 class="display-1 mt-5 title">Crea un nuovo articolo</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 form-container">
                <form class="card m-5 p-4 border shadow-rounded" enctype="multipart/form-data" action="{{route('article.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                        @error('subtitle')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
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
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" value="{{old('tags')}}">
                        <span class="small text-muted fst-italic" >"Dividi ogni tag con una virgola"</span>
                        @error('tags')
                        <span class ="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="my-2">
                        <label for="body" class="form-label">Contenuto dell'articolo</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="7">{{old('body')}}</textarea>
                        @error('body')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-lg-center flex-column align-content-center">
                        <button type="submit" class="btn btn-custom fw-bold">Inserisci nuovo articolo</button>
                        <a href="{{route('home')}}" class="title mt-4"> <i class="fa-regular fa-circle-left me-2"></i>Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

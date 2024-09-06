<x-layout>
    @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
    <div class="container-fluid mt-4">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h2 class="display-1 mt-5 title">Lavora con noi</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6">
                <form action="{{route('careers.submit')}}" method="POST" class="card p-5 mb-5 shadow-rounded ">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control bg-light">
                            <option selected disabled value="">Seleziona ruolo</option>
                            @if (!Auth::user()->is_admin)
                            <option value="admin">Amministratore</option>
                            @endif
                            @if (!Auth::user()->is_revisor)
                            <option value="revisor">Revisore</option>
                            @endif
                            @if (!Auth::user()->is_writer)
                            <option value="writer">Redattore</option>
                            @endif
                        </select>
                        @error('role')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control bg-light" id="email" value="{{Auth::user()->email }}" readonly>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Perchè vorresti candidarti per questo ruolo?</label>
                        <textarea name="message" id="message" class="form-control bg-light" cols="30" rows="10">{{old('message')}}</textarea>
                        @error('message')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="my-3 text-end ">
                        <button type="submit" class="btn btn-custom ">Invia candidatura</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-3 fs-5 text-center mt-5   ">
                <h2 class="fw-bold">Lavora come amministratore</h2>
                <p>Scegliendo di lavorare come amministratore, ti occuperai di gestire le richieste e di aggiungere e modificare le categorie.</p>
                <h2 class="fw-bold">Lavora come revisore</h2>
                <p>Scegliendo di lavorare come revisore, ti occuperai di gestire le richieste.</p>
                <h2 class="fw-bold">Lavora come redattore</h2>
                <p>Scegliendo di lavorare come redattore, potrai scrivere gli articoli.</p>
            </div>
        </div>
    </div>
</x-layout>

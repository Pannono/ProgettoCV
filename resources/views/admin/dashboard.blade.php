<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 title mt-5">Bentornato {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-3">Tutti i tags</h2>
                <x-metainfo-table :metainfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                {{-- <div class="d-flex justify-content-between"> --}}
                    <h2 class="mb-3">Tutte le categorie</h2>
                    <form action="{{route('admin.storeCategory')}}" method="POST" class="w-50 d-flex m-3">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Nuova categoria">
                        <button type="submit" class="btn btn-warning ms-2">Inserisci</button>
                    </form>
                    <x-metainfo-table :metainfos="$categories" metaType="categorie"/>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <hr>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per il ruolo di revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per il ruolo di redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="redattore" />
                </div>
            </div>
        </div>
    </x-layout>
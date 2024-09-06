<x-layout>
    <div class="container-fluid mt-5 pt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="display-1 title mt-4 text-center">{{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            
            <div class="col-12 col-md-3">
                <x-card
                :article="$article"/>
            </div>
                @endforeach
            </div>
        </div>
    </x-layout>
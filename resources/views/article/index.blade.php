<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-10 w-100 mt-4">
                <h1 class="display-1 title text-center my-2">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-4">
        <div class="row justify-content-center">
            
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-2 mx-3">
                <x-card
                :article="$article"/>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
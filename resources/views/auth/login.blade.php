<x-layout>
    <div class="container-fluid p-5 text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="display-1 title">Accedi</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('login')}}" method="POST" class="card p-5 shadow-rounded">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-custom">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
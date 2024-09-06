<x-layout>
  <div class="container-fluid p-5 text-center mt-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="display-1 title">Registrati</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 mb-5">
        <form action="{{route('register')}}" method="POST" class="card p-5 shadow-rounded">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="{{old('email')}}" name="email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Conferma Password</label>
            <input type="password" class="form-control" name="password_confirmation">
          </div>
          <div class="text-center mt-2">
            <button type="submit" class="btn btn-custom">Registrati</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>
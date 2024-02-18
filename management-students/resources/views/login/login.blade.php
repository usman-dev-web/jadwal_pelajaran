@extends('login.main.main')

@section('login')
<main class="form-signin">
  <form method="post" action="/">
    @csrf
    <img class="mb-4" src="/img/signin.png" alt="masuk" width="72">
    <h1 class="h3 mb-3 fw-normal">Silahkan Masuk</h1>

    {{-- alert --}}
    @if (session('status'))
    <div class="alert alert-danger">
      {{ session('status') }}
    </div>
    @endif

    <div class="form-floating text-start">
      <input type="number" class="form-control @error("nis") is-invalid @enderror" id="nis" name="nis"
        placeholder="18012023" value="{{ old("nis") }}">
      <label for="nis">NIS</label>
      @error("nis")
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating text-start">
      <input type="password" class="form-control @error("password") is-invalid @enderror" id="password" name="password"
        placeholder="Password">
      <label for="password">Password</label>
      @error("password")
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>
@endsection
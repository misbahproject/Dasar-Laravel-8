@extends('layouts.main')

@section('container')
   <div class="row justify-content-center">
        <div class="col-lg-4">

          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
            <main class="form-signin text-center">
                <form>
                  <img class="mb-4" src="/img/logo.jpg" alt="" width="72" height="57">
                  <h1 class="h3 mb-3 fw-normal">Please Login</h1>
              
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
            
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block mt-3">Not Registered? <a href="/register"> Register Now!</a></small>
              </main>
        </div>
   </div>
@endsection
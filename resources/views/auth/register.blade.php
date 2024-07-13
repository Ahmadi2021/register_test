@extends('layouts.app')

@section('content')
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
        
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
  
              <form class="px-md-2"  method="POST" action="{{ route('register') }}">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
  
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example1q">Email</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  {{-- <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div> --}}
  
                
  
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1">Submit</button>
                <div>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        already have account
                    </a>
                </div>
                
  
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

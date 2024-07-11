@extends('layouts.general')

@section('content')
<!-- Menampilkan pesan sukses -->
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close bi bi-x" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form method="POST" action="{{route('postlogin')}}">
    @csrf
    <img class="mb-4" src="{{ asset('/assets/img/logo-ukdw.jpg') }}" alt="" width="72" height="93">
    <h1 class="h3 mb-3 fw-normal">Please Log in</h1>


    <div class="form-floating">
      <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? ' is-invalid' : ''}}" 
      placeholder="name@example.com" autofocus required> {{--value="{{ old ('email')}}"--}}
      <label for="email">Email address</label>
      @error('email')
      <div id="validationServer03Feedback" class="invalid-feedback">
         {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" id="password" class="form-control {{$errors->has('password') ? ' is-invalid' : ''}}" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
      <div id="validationServer03Feedback" class="invalid-feedback">
         {{$message}}
        </div>
        @enderror
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
       
      {{-- @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif --}}
    </div>
    <a class="ms-2" href="#!">Forgot password?</a>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    <p class="mt-5 mb-3 text-muted">&copy; Sistem Informasi UKDW Yogyakarta</p>
  </form>
{{-- <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
            value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form> --}}
@endsection

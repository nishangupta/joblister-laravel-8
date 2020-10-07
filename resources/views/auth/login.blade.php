@extends('layouts.auth')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-container">
                <div class="login-header mb-3">
                    <h3> <img src="{{asset('images/logo/joblister.png')}}" width="50px;" alt=""> Joblister Login</h3>
                    <p class="login-header-title">Welcome back to Job lister</p>
                    <p class="text-muted">login with your registered email & password.</p>
                </div>
                <div class="login-form">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                            <input id="email" type="email" placeholder="E-mail address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                            <input id="password" type="password" placeholder="E-mail address" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <input type="checkbox" id="rememberMe" name="remember_me">
                            <label for="rememberMe">Remember me</label>
                        </div>
                        <div class="form-group">
                            <a href="#" class="secondary-link">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn primary-btn btn-block">Login</button>
                    </form>
                    <div class="my-3">
                        <p>Don't have an account? <a href="/register">Register now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-poster">
                {{-- <img src="" alt=""> --}}
                <h2 class="mb-3 slogon">Mark yourself as <br>Actively Job seeker</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .login-container{
        padding:3rem 2rem;
        border:1px solid #ddd;
        background-color: white;
        color:#666;
    }
    .login-header .login-header-title{
        font-size:1.3rem;
        font-weight: bold;
    }
    .login-poster{
        background-image:url('{{asset("images/login-bg.jpg")}}');
        background-image:linear-gradient(to bottom,transparent,rgba(0,0,0,.3)), url('{{asset("images/login-bg.jpg")}}');
        background-repeat:no-repeat;
        background-size:cover;
        background-position: center; 
        padding:1rem 2rem;
        height:100%;
        min-height:500px;
        text-shadow: 1px 1px 5px 8px rgba(0,0,0,0.4);
    }
    .login-poster .slogon {
        font-family:Georgia, 'Times New Roman', Times, serif ;
    }
</style>
@endpush
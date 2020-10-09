<div class="login-banner d-none d-md-block border-top">
  <div class="container p-3">
    <div class="d-flex justify-content-center align-items-center">
      <p class="login-banner-text mr-5">Search, Apply & Get Job <strong>Free</strong></p>
      <a href="{{route('register')}}" class="primary-btn mr-4">Register</a>
      <a href="{{route('login')}}" class="primary-outline-btn mr-4">Login</a>
      <a href="{{route('login')}}" class="secondary-link">Are you an Employer?</a>
    </div>
  </div>
</div>


@push('css')
  <style>
    .login-banner{
      background-color:white;
    }
    .login-banner-text{
      font-size:1.6rem;
      color:#185A91;
    }
  </style>
@endpush
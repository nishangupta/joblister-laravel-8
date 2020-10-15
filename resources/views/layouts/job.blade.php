@extends('layouts.app')
@section('layout-holder')
  @include('inc.navbar')
  <div class="container">
    @yield('content')
  </div>
  @guest      
    @include('inc.login-banner')
  @endguest
  @include('inc.footer')
@endsection
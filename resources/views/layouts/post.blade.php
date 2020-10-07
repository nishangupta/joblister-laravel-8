@extends('layouts.app')

@section('layout-holder')
  @include('inc.navbar')
  @yield('content')
  @guest      
    @include('inc.login-banner')
  @endguest
  @include('inc.footer')
@endsection
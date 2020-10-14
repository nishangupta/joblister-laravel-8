@extends('layouts.app')
@section('layout-holder')
  @include('inc.navbar')
  <div class="container">
     @yield('content')
  </div>
  @include('inc.footer')
@endsection
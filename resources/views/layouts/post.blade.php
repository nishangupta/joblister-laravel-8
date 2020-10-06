@extends('layouts.app')

@section('layout-holder')
  @include('inc.navbar')
  @yield('content')
  @include('inc.footer')
@endsection
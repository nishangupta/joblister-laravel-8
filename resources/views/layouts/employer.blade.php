@extends('layouts.app')

@section('layout-holder')
  @include('inc.navbar')
    <div class="container my-4">
        <div class="employer-layout">
            <div class="row">
                <div class="col-sm-12 col-md-4 pr-md-0 pr-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <img src="{{asset($author->company->logo)}}" class="img-fluid" alt="">
                      <h6>{{$author->company->title}}</h6>
                      <p>{{$author->company->getCategory->category_name}}</p>
                    </div>
                  </div>    
                </div>
                <div class="col-sm-12 col-md-8 pl-md-0 pl-sm-3 ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
  @include('inc.footer')
@endsection
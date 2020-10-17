@extends('layouts.app')

@section('layout-holder')
  @include('inc.navbar')
    <div class="container my-4">
        <div class="employer-layout">
            <div class="row">
                <div class="col-sm-12 col-md-4 pr-md-0 pr-sm-3">
                  <div class="card left-card">
                    <div class="card-body text-center">
                      <div class="employer-card">
                        <img src="{{asset($company->logo)}}"  class="img-fluid mb-3" alt="">
                      </div>
                      <h6 class="lead font-weight-bold">{{$company->title}}</h6>
                      <p >{{$company->getCategory->category_name}}</p>
                      <div class="py-2">
                        <p class="small">{{$company->description}}</p>
                      </div>
                      <div class="text-center">
                        <a target="_blank" href="{{'https://'.$company->website}}"><i class="fas fa-globe"></i></a>
                      </div>
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


@push('css')
<style>
  .employer-card{
    position: relative;
    width:100%;
    height:12rem;
    margin-bottom: 3rem;
    background: linear-gradient(to right, #185A91, #3498DA);
    
  }
  .employer-card img{
    border:1px solid #ccc;
    padding:.5rem;
    position: absolute;
    bottom:-40px;
    left:50%;
    background-color:white; 
    width:100px;
    transform: translateX(-50%);    
  }
</style>
@endpush
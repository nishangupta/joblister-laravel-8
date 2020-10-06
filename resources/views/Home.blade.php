@extends('layouts.post')

@section('content')
  <section class="home-page pt-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="px-4">
            <div class="rounded-text">
              <p>
                Find jobs, vacancy, career online.
              </p>
            </div>
            <div class="home-search-bar">
              <input type="text" placeholder="Search job by title" class="home-search-input form-control">
              <button type="button" class="btn btn-light"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="py-5 px-5 text-center">
            <div class="text-light">
              <h4>A dream doesn't become reality through magic, it takes sweat, determination and hard work.
             </h4>
            </div>
          </div>
          </div>
      </div>      
    </div>
  </section>
  
  {{-- jobs list --}}
  <section class="jobs-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8 mx-auto">
         <h3>Top jobs</h3> 
         <div class="top-jobs">
           <div class="row">
             <div class="col-md-3">
                <div class="card">
                  <p class="card-header">Expression of intrest</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <p class="card-header">Expression of intrest</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <p class="card-header">Expression of intrest</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <p class="card-header">Expression of intrest</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <p class="card-header">Expression of intrest</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <p class="card-header">Expression of intrest</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('css')

@endpush

@push('js')
    
@endpush

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
      <div class="row ">
        <div class="col-sm-12 col-md-8 ml-auto">
          <div class="card">
            <div class="card-header">
              <p class="card-title font-weight-bold">Top jobs</p>
            </div>
            <div class="card-body">
              <div class="top-jobs " >
                <div class="row">
                  <div class="col-md-4 col-sm-6 mb-sm-3">
                    <a href="/home">
                     <div class="job-item">
                       <img src="{{asset('images/companies/medical.jpg')}}" alt="job listings" class="">
                       <div class="job-description">
                         <p class="company-name">Medical center asdasdasdasasdasdasd</p>
                         <ul class="company-listings">
                           <li>{{substr('Assistant Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur dolor laborum voluptatibus obcaecati et culpa at error aliquid incidunt necessitatibus.', 0, 27)}}</li>
                         </ul>
                       </div>
                     </div>
                    </a>
                   </div>

                   <div class="col-md-4 col-sm-6 mb-sm-3">
                    <a href="/home">
                      <div class="job-item">
                        <img src="{{asset('images/companies/medical.jpg')}}" alt="job listings" class="">
                        <div class="job-description">
                          <p class="company-name">Medical center</p>
                          <ul class="company-listings">
                            <li>Assistant Pharmacist</li>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </div>  

                  <div class="col-md-4 col-sm-6 mb-sm-3">
                    <a href="/home">
                    <div class="job-item">
                      <img src="{{asset('images/companies/medical.jpg')}}" alt="job listings" class="">
                      <div class="job-description">
                        <p class="company-name">Medical center</p>
                        <ul class="company-listings">
                          <li>Assistant Pharmacist</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  </div>
                 </div>
               </div>
             </div>
            </div>
          </div>
       
        <div class="col-sm-12 col-md-3 mr-auto">

          <div class="card mb-4">
            <div class="card-header">
              <p class="font-weight-bold">Top Employers</p>
            </div>
            <div class="card-body">
              <div class="top-employers">
                <div class="top-employer">
                  <a href="/company">
                    <img src="{{asset('images/companies/muncha.jpg')}}" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="top-employer">
                  <a href="/company">
                    <img src="{{asset('images/companies/square.jpg')}}" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="top-employer">
                  <a href="/company">
                    <img src="{{asset('images/companies/vertisk.jpg')}}" class="img-fluid" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>

            <div class="card mb-4 job-by-category">
              <div class="card-header">
                <p class="font-weight-bold">Jobs By Category</p>
              </div>
              <div class="card-body">
                <div class="jobs-category mb-3 mt-0">
                  <div><a href="/marketing" class="text-muted">Marketing/Advertising</a> </div>
                  <div><a href="/marketing" class="text-muted">It/Communication</a> </div>
                  <div><a href="/marketing" class="text-muted">General Mgmt/Administrator</a> </div>
                  <div><a href="/marketing" class="text-muted">Ngo Ingo/Social workers</a> </div>
                  <div><a href="/marketing" class="text-muted">Accounting/Finance</a> </div>
                </div>
                <a href="/more" class="text-muted">More..</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('css')
<style>
 
</style>
@endpush

@push('js')
    
@endpush

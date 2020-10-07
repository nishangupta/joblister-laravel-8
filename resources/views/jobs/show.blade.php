@extends('layouts.post')

@section('content')
  <section class="show-page pt-4 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8">
          <div class="job-listing border">
            <div class="company-info">
              <div class="company-banner">
                <div class="banner-overlay"></div>
                  <img src="{{asset('images/companies/banner.jpg')}}" class="company-banner-img img-fluid" alt="">
                  <div class="company-media">
                    <img src="{{asset('images/companies/muncha.jpg')}}" alt="" class="company-logo">
                    <div>
                      <a href="/company-list" class="company-link">
                        <p class="company-name">Real Solutions</p>
                        <p class="company-category">Consulting/Legal</p>
                      </a>
                    </div>
                  </div>
                  <div class="company-website">
                    <a href="companywebiste.com" target="_blank"><i class="fas fa-globe"></i></a>
                  </div>
              </div>
              
              {{-- company information --}}
              <div class="p-3">
                <p class="">Real Solutions Private Limited, an ISO: 9001:2015 certified company, is an independent consulting firm that specializes in providing a complete or sectional Human Resource Management support to the National and International Organizations in Nepal.</p>
              </div>
            </div>

            {{-- job information --}}
              <div class="job-info">
                <div class="job-hdr p-3">
                    <p class="job-title">Finance Executive</p>
                    <div class="">
                      <p class="job-views"> 
                        <span class="text-success">Views: 623 </span>  | 
                        <span class="text-danger">Apply Before: 6 days</span>
                      </p>
                    </div>
                </div>
                <div class="job-bdy p-3 my-3">
                  <div class="job-level-description">
                    <p class="font-weight-bold">Basic job level description</p>
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td width="33%">Job Category</td>
                          <td width="3%">:</td>
                          <td width="64%"><a href="/jobs"> Accounting / Finance</a></td>
                        </tr>
                        <tr>
                          <td width="33%">Job Level</td>
                          <td width="3%">:</td>
                          <td width="64%">Mid level</td>
                        </tr>
                        <tr>
                          <td width="33%">No of vacancy[s]</td>
                          <td width="3%">:</td>
                          <td width="64%">1</td>
                        </tr>
                        <tr>
                          <td width="33%">Employment type</td>
                          <td width="3%">:</td>
                          <td width="64%">full time</td>
                        </tr>
                        <tr>
                          <td width="33%">Offered Salary</td>
                          <td width="3%">:</td>
                          <td width="64%">Nrs 300000 - 500000 monthly<</td>
                        </tr>
                        <tr>
                          <td width="33%">Apply before(Deadline</td>
                          <td width="3%">:</td>
                          <td width="64%">Oct,12,2020 (6 days from now)</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="job-level-description">
                    <p class="font-weight-bold">Job Specification</p>
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td width="33%">Education level</td>
                          <td width="3%">:</td>
                          <td width="64%"><a href="/jobs"> Bachelors</a></td>
                        </tr>
                        <tr>
                          <td width="33%">Experience Required</td>
                          <td width="3%">:</td>
                          <td width="64%">More than or equal to 3 years</td>
                        </tr>
                        <tr>
                          <td width="33%">Professional Skill Required</td>
                          <td width="3%">:</td>
                          <td width="64%">
                            <span class="badge badge-primary">Analytical</span>
                            <span class="badge badge-primary">Multitasking</span>
                            <span class="badge badge-primary">Comunitcation</span>
                            <span class="badge badge-primary">Interpretational</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <hr>
                  <div class="d-flex justify-content-between">
                    <button class="btn primary-btn">Apply now</button>
                    <div class="social-links">
                      <a href="www.facebook.com" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
                      <a href="www.twitter.com" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
                      <a href="www.linkedin.com" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
                      <a href="www.gmail.com" class="btn btn-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                  </div>
                
                </div>
              </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="card d-none d-md-block mb-3">
            <div class="card-header">
             Job Action
            </div>
            <div class="card-body d-flex justify-content-between">
              <button class="btn primary-outline-btn"><i class="fas fa-star"></i> Save job</button>
              <button class="btn primary-btn">Apply Now</button>
            </div>
          </div>
          <div class="card ">
            <div class="card-header">
              Similar Jobs
            </div>
            <div class="card-body">
              <div class="similar-jobs">
                <div class="job-item">
                  <img src="{{asset('images/companies/vertisk.jpg')}}" class="company-logo" alt="">
                  <div class="job-desc">
                    <a href="/job" class="job-category">Finance Assistant</a>
                    <p class="company-name">Sanghai Greenland Intl</p>
                    <p class="company-name text-danger">Deadline: 6 days</p>
                  </div>
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
<style>
 .company-banner{
   min-height:15vh;
   position: relative;
 }
 .company-banner-img{
  height:100%;
 }
.banner-overlay{
  position: absolute;
  bottom: 0;
  left:0;
  background: linear-gradient(to bottom,transparent,rgba(0,0,0,.8));
  width:100%;
  height:200px;
}
.company-website{
  position: absolute;
  right:20px;
  bottom:20px;
  color:white;
}
 .company-media{
   position: absolute;
   display:flex;
   align-items: center;
   left:2rem;
   bottom:1rem;
   color:white;
   padding-right: 2rem;
 }
 .company-logo{
   width:80px;
   height:auto;
  margin-right: 1rem;
 }
 .company-name{
  font-weight: bold;
   font-size:1.2rem;
 }
 .company-category{
  font-size:1.3rem;
 }
 .company-link:hover{
   color:#ddd;
 }
 .job-title{
   font-size:1.3rem;
   font-weight: bold;
 }

 .job-hdr{
   display:flex;
   align-items: center;
   justify-content: space-between;
   background: linear-gradient(to right,#e1edf7,#EDF2F7)
 }
 /* .similar-jobs */
 .job-item{
   display:flex;
 }
 .job-tiem .company-logo{
   flex:1;
   width:100%;
   height:auto;
 }
 .job-item .job-desc{
   flex:3;
 
 }
 .job-category{
   font-size: .9rem;
   font-weight: bold;
 }
 .company-name{
  font-weight: normal;
  font-size:.75rem;
 }

</style>
@endpush

@push('js')
    
@endpush

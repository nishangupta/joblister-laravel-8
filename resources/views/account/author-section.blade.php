@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr border">
      Author Section
    </div>
    <div class="account-bdy p-3">
        <div class="row mb-3">
          <div class="col-xl-4 col-sm-6 py-2">
              <div class="card text-white h-100 shadow">
                  <div class="card-body primary-bg">
                      <div class="rotate">
                          <i class="fa fa-user fa-4x"></i>
                      </div>
                      <h6 class="text-uppercase">My Posts</h6>
                      <h1 class="">134</h1>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-sm-6 py-2">
              <div class="card text-white  h-100 shadow">
                  <div class="card-body bg-secondary">
                      <div class="rotate">
                          <i class="fa fa-list fa-4x"></i>
                      </div>
                      <h6 class="text-uppercase">Live Posts</h6>
                      <h1 class="">87</h1>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-sm-6 py-2">
              <div class="card text-white h-100 shadow">
                  <div class="card-body bg-info">
                      <div class="rotate">
                          <i class="fa fa-user fa-4x"></i>
                      </div>
                      <h6 class="text-uppercase">Notifications</h6>
                      <h1 class="">125</h1>
                  </div>
              </div>
          </div>
      </div>

      <section class="author-company-info">
          <div class="row">
              <div class="col-sm-12 col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Manage Company Details</h4>
                          <p class="mb-3 alert alert-info">For job listings you need to add Company details.</p>
                          <div class="mb-3 d-flex">
                            <a href="{{route('company.create')}}" class="btn primary-btn mr-2">Create Company</a>
                            <a href="{{route('post.edit',['post'=>'1'])}}" class="btn secondary-btn mr-2">Edit Company</a>
                            <a href="{{route('post.edit',['post'=>'1'])}}" class="btn danger-btn ml-auto ">Delete Company</a>
                          </div>

                          <div class="row">
                              <div class="col-sm-12 col-md-12">
                                  <div class="card">
                                      <div class="card-body text-center">
                                          <img src="{{asset('images/companies/vertisk.jpg')}}" width="80px" class="img-fluid border" alt="">
                                          <h5>World Vision International Nepal</h5>
                                          <small>NGO / INGO / Development Projects</small>
                                        <a class="d-block" href="/company-webisite"><i class="fas fa-globe"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="author-posts">
        <div class="row my-4">
          <div class="col-lg-12 col-md-8 col-sm-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-3">Manage Posts (Jobs)</h4>
                <a href="{{route('post.create')}}" class="btn primary-btn">Create new job listing</a>
              </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nishant</td>
                            <td>nishant@nishant.com</td>
                            <td>12</td>
                            <td>
                              <button class="btn primary-btn">View Profile</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minasd</td>
                            <td>asd@asd.com</td>
                            <td>2</td>
                            <td>
                            <button class="btn primary-btn">View Profile</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      <!--/row-->
      </section>

    </div>
  </div>
@endSection

@push('css')
<style>
  .card {
    overflow:hidden;
}

.card-body .rotate {
    z-index: 8;
    float: right;
    height: 100%;
}

.card-body .rotate i {
    color: rgba(20, 20, 20, 0.15);
    position: absolute;
    left: 0;
    left: auto;
    right: -10px;
    bottom: 0;
    display: block;
    -webkit-transform: rotate(-44deg);
    -moz-transform: rotate(-44deg);
    -o-transform: rotate(-44deg);
    -ms-transform: rotate(-44deg);
    transform: rotate(-44deg);
}
</style>
@endpush
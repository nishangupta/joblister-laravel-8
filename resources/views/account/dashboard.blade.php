@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr border " >
      Dashboard
    </div>
    <div class="account-bdy p-3">
        <div class="row mb-3">
          <div class="col-xl-4 col-sm-6 py-2">
              <div class="card text-white h-100 shadow">
                  <div class="card-body primary-bg">
                      <div class="rotate">
                          <i class="fa fa-user fa-4x"></i>
                      </div>
                      <h6 class="text-uppercase">Users</h6>
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
                      <h6 class="text-uppercase">Jobs</h6>
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
                      <h6 class="text-uppercase">Authors</h6>
                      <h1 class="">125</h1>
                  </div>
              </div>
          </div>
      </div>

      <section class="dashboard-authors">
        <div class="row my-4">
          <div class="col-lg-12 col-md-8 col-sm-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Manage Authors (Job listers)</h4>
              </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Posts</th>
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
                        <tr>
                            <td>2</td>
                            <td>Minasd</td>
                            <td>asd@asd.com</td>
                            <td>2</td>
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
                        <tr>
                            <td>2</td>
                            <td>Minasd</td>
                            <td>asd@asd.com</td>
                            <td>2</td>
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
      <hr>
    
      <section class="dashboard-company">
          <h4 class="card-title text-secondary">Manage Roles and Categories</h4>
          <div class="row my-4">
            <div class="col-sm-12 col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#categories-tab" role="tab" data-toggle="tab">Company Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roles-tab" role="tab" data-toggle="tab">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#permissions-tab" role="tab" data-toggle="tab">Permissions</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <br>
                    <div role="tabpanel" class="tab-pane active" id="categories-tab">
                        <div class="mb-3">
                            <form action="{{route('category.store')}}" method="POST">
                                @csrf
                                <label for="">Add a new Category</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" placeholder="Company category name" name="category_name">
                                    <button class="btn secondary-btn">Add</button>
                                </div>
                                @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </form>
                        </div>
                      
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>#</th>
                                        <th>Category name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>It and Communications</td>
                                        <td><a class="btn secondary-btn" href="">Edit</a> <form action="" class="d-inline"><button type="submit" class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brand ambasodoer</td>
                                        <td><a class="btn secondary-btn " href="">Edit</a> <form action="" class="d-inline"><button class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Communications</td>
                                        <td><a class="btn secondary-btn " href="">Edit</a> <form action="" class="d-inline"><button class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="roles-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>#</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Admin</td>
                                        <td ><a class="btn secondary-btn" href="">Edit</a> <form action="" class="d-inline"><button type="submit" class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>User</td>
                                        <td><a class="btn secondary-btn " href="">Edit</a> <form action="" class="d-inline"><button class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Author</td>
                                        <td><a class="btn secondary-btn " href="">Edit</a> <form action="" class="d-inline"><button class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="permissions-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>#</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Create_post</td>
                                        <td ><a class="btn secondary-btn" href="">Edit</a> <form action="" class="d-inline"><button type="submit" class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>User</td>
                                        <td><a class="btn secondary-btn " href="">Edit</a> <form action="" class="d-inline"><button class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Author</td>
                                        <td><a class="btn secondary-btn " href="">Edit</a> <form action="" class="d-inline"><button class="btn danger-btn">Delete</button></form></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
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
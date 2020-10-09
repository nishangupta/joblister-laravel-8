@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr border shadow">
      My save Jobs
    </div>
    <div class="account-bdy p-3">
      <div class="my-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead c>
              <tr>
                <th>Job Position</th>
                <th>Company</th>
                <th>Apply Before</th>
                <th>Details</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Digital Marketing Executive</a></td>
                <td><a href="#">Company1</a></td>
                <td>Nov,9 2020</td>
                <td><a href="#">View job details</a></td>
                <td><a href="#">Unsave</a></td>
              </tr>
              <tr>
                <td><a href="#">Digital Marketing Executive</a></td>
                <td><a href="#">Company1</a></td>
                <td>Nov,9 2020</td>
                <td><a href="#">View job details</a></td>
                <td><a href="#">Unsave</a></td>
              </tr>
              <tr>
                <td><a href="#">Digital Marketing Executive</a></td>
                <td><a href="#">Company1</a></td>
                <td>Nov,9 2020</td>
                <td><a href="#">View job details</a></td>
                <td><a href="#">Unsave</a></td>
              </tr>
              <tr>
                <td><a href="#">Digital Marketing Executive</a></td>
                <td><a href="#">Company1</a></td>
                <td>Nov,9 2020</td>
                <td><a href="#">View job details</a></td>
                <td><a href="#">Unsave</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endSection

@push('css')

@endpush
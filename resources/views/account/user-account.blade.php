@extends('layouts.account')

@section('content')
  <div class="account-layoutborder">
    <div class="account-hdr bg-primary text-white border ">
      User Account
    </div>
    <div class="account-bdy p-3">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <p class="lead">My Profile</p>
        </div>
        <div class="col-sm-12 col-md-8">
          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <tbody>
                <tr>
                  <td width="33%">Username</td>
                  <td width="3%">:</td>
                  <td width="64%">{{auth()->user()->name}}</td>
                </tr>
                <tr>
                  <td width="33%">Email</td>
                  <td width="3%">:</td>
                  <td width="64%">{{auth()->user()->email}}</td>
                </tr>
                <tr>
                  <td width="33%">Password</td>
                  <td width="3%">:</td>
                  <td width="64%">
                    <a href="{{route('account.changePassword')}}" class="btn primary-outline-btn">Change</a> 
                    <br>
                   <small>Last Changed on {{auth()->user()->updated_at}}</small> 
                  </td>
                </tr>
                <tr>
                  <td width="33%">Account Created on</td>
                  <td width="3%">:</td>
                  <td width="64%">{{auth()->user()->created_at}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endSection

@push('css')

@endpush
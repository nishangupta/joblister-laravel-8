@extends('layouts.app')

@section('layout-holder')
    {{-- styles here are placed account-layout.scss   --}}
    @include('inc.navbar')
    <div class="container my-4">
        <div class="account-layout">
            <div class="account-hdr border">
                <h5><i class="fas fa-cog"></i> Account Settings</h5>
            </div>
            <div class="account-bdy">
                <div class="row">
                    <div class="col-sm-12 col-md-3 pr-0">
                        {{-- account-navigation from inc --}}
                        @include('inc.account-nav')
                    </div>
                    <div class="col-sm-12 col-md-9 pl-0">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.footer')
@endsection
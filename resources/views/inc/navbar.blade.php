<nav class="navbar navbar-expand-md navbar-white bg-white shadow sticky-top" id="navbar">
  <div class="container">
  <a href="{{URL('/')}}" class="navbar-brand">
      JobLister
    </a>
    
    {{-- <div class="dropdown">
      <button class="btn outline-dark dropdown-toggle" style="width:3rem;height:auto" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="{{asset('img/worldFlag.svg')}}" alt="Set lang" class="img-fluid">
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">En</button>
        <button class="dropdown-item" type="button">Fr</button>
        <button class="dropdown-item" type="button">Tur</button>
        <button class="dropdown-item" type="button">Arabic</button>
      </div>
    </div> --}}

    <ul class="navbar-nav ml-auto">
      @auth
      <li class="nav-item dropdown"> 
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span> 
          <img class="img-profile rounded-circle" src="{{asset('images/user-profile.png')}}" width="40px"> 
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
          <a class="dropdown-item" href="{{route('account.dashboard')}}"> <i class="fas fa-cogs fa-sm "></i> Dashboard</a> 
          <a class="dropdown-item" href="{{route('account.authorSection')}}"> <i class="fa fa-cogs fa-sm "></i> Author Dashboard </a> 
          <a class="dropdown-item" href="{{route('account.index')}}"> <i class="fas fa-user fa-sm "></i> Profile </a> 
          <a class="dropdown-item" href="{{route('account.changePassword')}}"> <i class="fas fa-key fa-sm "></i> Change Password </a> 
            <div class="dropdown-divider"></div> 
            <a class="dropdown-item" href="{{route('account.logout')}}"> 
              <i class="fas fa-sign-out-alt"></i> 
              Logout 
            </a>
        </div>
      </li>
      @endauth
      @guest
      <a href="/login" class="primary-btn">Sign up or Log in</a>
      @endguest
    </ul>
    
    {{-- <div class="mb-nav">
      <a href="#" class="nav-link mb-nav-toggler"><i class="fas fa-bars"></i></a>
      <div class="mb-nav-list">
        <a href="#" class="mb-nav-toggler ml-auto btn btn-danger text-light">Close</a>
        @auth
        <a href="}" class="mb-nav-link">Sign up or log in</a>
        @endauth
        <a href="" class="mb-nav-link">Buy <i class="fas fa-angle-down"></i></a>
        <a href="" class="mb-nav-link">Rent <i class="fas fa-angle-down"></i></a>
        <a href="" class="mb-nav-link">Mortage <i class="fas fa-angle-down"></i></a>
      </div>
    </div> --}}
  </div>
 
</nav>
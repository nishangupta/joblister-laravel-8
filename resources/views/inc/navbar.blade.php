<nav class="navbar navbar-expand-md navbar-white bg-white shadow" id="navbar">
  <div class="container">
    <a href="" class="navbar-brand">
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
        <a href="" class="primary-btn dropdown-toggle" data-toggle="dropdown">Logged in as {{auth()->user()->name}}</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
          <a class="dropdown-item" href="">
            <span class="dropdown-link" >User account</span>
          </a>
          <a class="dropdown-item" href="">
            <span class="dropdown-link" >Logout</span>
          </a>
        </div>
      </li>
      @endauth
      @guest
      <a href="" class="primary-btn">Sign up or Log in</a>
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
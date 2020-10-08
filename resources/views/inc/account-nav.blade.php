<div class="account-nav">
  <ul class="list-group">
    <li class="list-group-item list-group-item-action active">
      <a href="{{route('account.index')}}" class="account-nav-link">
        <i class="fas fa-user-shield"></i> User Account
      </a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{route('account.changePassword')}}" class="account-nav-link">
        <i class="fas fa-fingerprint"></i> Change Password
      </a>
    </li>    
    <li class="list-group-item list-group-item-action">
      <a href="{{route('account.index')}}" class="account-nav-link">
        <i class="fas fa-tools"></i> Get Author Actions
      </a>
    </li>   
     <li class="list-group-item list-group-item-action">
      <a href="{{route('account.deactivate')}}" class="account-nav-link">
        <i class="fas fa-folder-minus"></i> Deactivate Account
      </a>
    </li>    
  </ul>
</div>
 <nav class="navbar">
     <a href="#" class="sidebar-toggler">
         <i data-feather="menu"></i>
     </a>
     <div class="navbar-content">
         <ul class="navbar-nav">
             @php
                 $profile = App\Models\User::find(auth()->user()->id);
             @endphp

             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <p class="text-white">Profile Settings</p>
                 </a>
                 <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                     <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                         <div class="text-center">
                             <p class="tx-16 fw-bolder">{{ $profile->name }}</p>
                             <p class="tx-12 text-muted">{{ $profile->email }}</p>
                         </div>
                     </div>
                     <ul class="list-unstyled p-1">
                         <a href="{{ route('admin.profile') }}" class="text-body ms-0">
                         <li class="dropdown-item py-2">
                            <i class="me-2 icon-md" data-feather="user"></i>
                            <span>Profile</span>
                        </li>
                        </a>
                        <a href="{{ route('admin.change.password') }}" class="text-body ms-0">
                         <li class="dropdown-item py-2">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span>Change Password</span>
                        </li>
                        </a>
                        <a href="{{ route('admin.logout') }}" class="text-body ms-0">
                         <li class="dropdown-item py-2">
                            <i class="me-2 icon-md" data-feather="log-out"></i>
                            <span>Log Out</span>
                        </li>
                        </a>
                     </ul>
                 </div>
             </li>
         </ul>
     </div>
 </nav>

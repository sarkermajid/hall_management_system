 <nav class="sidebar">
     <div class="sidebar-header">
         <a href="#" class="sidebar-brand">
             Admin<span> Panel</span>
         </a>
         <div class="sidebar-toggler not-active">
             <span></span>
             <span></span>
             <span></span>
         </div>
     </div>
     <div class="sidebar-body">
         <ul class="nav">
             <li class="nav-item nav-category">Main</li>
             <li class="nav-item">
                 <a href="{{ route('admin.dashboard') }}" class="nav-link">
                     <i class="link-icon" data-feather="box"></i>
                     <span class="link-title">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item nav-category">Hostel Management System</li>

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('hall.index') }}">
                     <i class="link-icon" data-feather="chevron-right"></i>
                     <span class="link-title">Halls</span>
                 </a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('room.index') }}">
                     <i class="link-icon" data-feather="chevron-right"></i>
                     <span class="link-title">Rooms</span>
                 </a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('provost.index') }}">
                     <i class="link-icon" data-feather="chevron-right"></i>
                     <span class="link-title">Provosts</span>
                 </a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('applicant.users') }}">
                     <i class="link-icon" data-feather="chevron-right"></i>
                     <span class="link-title">Applicant Users</span>
                 </a>
             </li>

         </ul>
     </div>
 </nav>

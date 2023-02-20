<header class="main-header"> 
    
    <a href="{{ url('/dashboard') }}" class="logo blue-bg"> 
      <!-- mini logo for sidebar mini 50x50 pixels --> 
      <span class="logo-mini"><img src="{{ asset('images/logo.png') }}" style="height: 40px; width: 38px; border-radius: 30px; margin:auto" alt=""></span> 
      <!-- logo for regular state and mobile devices --> 
      <span class="logo-lg"><img src="{{ asset('images/logo.png') }}" alt="" style="border-radius: 100px; height: 50px; "></span> </a> 
      <!-- Header Navbar: style can be found in header.less -->
       
        <nav class="navbar blue-bg navbar-static-top"> 
          <!-- Sidebar toggle button-->
          <ul class="nav navbar-nav pull-left">
            <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
          </ul>
          <div class="pull-left">
           
              
              <!-- search form --> </div>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
  
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ asset('user-avater.webp') }}" class="user-image" alt="User Image"> <span class="hidden-xs">Admin</span> </a>
                {{-- <ul class="dropdown-menu">
                
                  <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul> --}}
              </li>
            </ul>
          </div>
        </nav>
      </header>
<div   class=" navbar-white navbar-custom ">
                <div class="container-fluid navbar-white">
                    <ul class="list-unstyled topnav-menu float-end mb-0 navbar-white">
                    
         <li class="nav-item iconnav" style="margin-right:990px;">
          <!-- data-widget="pushmenu" -->

          <a class="nav-link" onclick="myFunction()" href="#" role="button">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="46" height="38" viewBox="0 0 46 38" fill="none">
              <rect x="1" y="1.00006" width="44" height="35.6" rx="4.5" stroke="#8F8C8C" stroke-opacity="0.3"
                stroke-width="2" />
              <path d="M23 2H40.5C42.433 2 44 3.567 44 5.5V32.1C44 34.033 42.433 35.6 40.5 35.6H23V2Z" fill="#C7CFD7" />
            </svg>
            <!-- <img src="backend/assets/images/Group 4.svg" alt=""> -->
          </a> 

        </li> 

        @php
         $id = Auth::user()->id;
         $adminData = App\Models\User::find($id);

        @endphp


                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                                <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    {{ $adminData->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

        <!-- item-->
        <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
            <i class="fe-user"></i>
            <span>My Account</span>
        </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>

            <!-- item-->
            <a href="{{ route('change.password') }}" class="dropdown-item notify-item">
                <i class="fe-lock"></i>
                <span>Change Password </span>
            </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
       <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>


                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>



                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div> 

            <script>
    function myFunction() {
      var element = document.body;
      element.classList.toggle("dark-mode");
    }


  </script>
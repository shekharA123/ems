<head>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <style>
   li span {
    color: #F5F7FB;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }
  #side{
    width: 260px;
    height: 908px;
    flex-shrink: 0;
    border-right: 1px solid rgba(245, 247, 251, 0.20);
    background: #1D2433;
  }
  a:hover{
  background-color: #FED931;
  }
  li span:hover{
    color: #F5F7FB;
  }
    </style>
   </head>
   <div class="left-side-menu" id="side">

                <div class="h-100" data-simplebar>

                    <!-- User box -->


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">


          <li>
            <a href="{{ url('/dashboard') }}">
              
               <img src="backend/assets/images/Union.svg" alt="">
                <span style="margin-left:7px;" > Dashboard </span>
            </a>
        </li>


           <li>
            <a href="{{ route('pos') }}">
               <img src="backend/assets/images/clarity_inbox-line.svg" alt="">
                <span style="margin-left:5px;"> Inbox </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
               <img src="backend/assets/images/Calendar.svg" alt="">
                <span style="margin-left:5px;"> Calendar & todo’s </span>
            </a>
        </li>



        <li class="nav-header recruitment mt-2" style="margin-left:23px;" >RECRUITMENT</li>

                            <li class="mt-2">
            <a href="{{ url('/getevent') }}">
            
               <img src="backend/assets/images/Bag 2.svg" alt="">
                <span style="margin-left:5px;"> Jobs </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
              
               <img src="backend/assets/images/octicon_people-24.svg" alt="">
                <span style="margin-left:5px;"> Candidates  </span>
            </a>
        </li>


        <li>
            <a href="{{ url('/getevent') }}">
             
               <img src="backend/assets/images/ph_triangle-bold.svg" alt="">
                <span style="margin-left:5px;"> My referrals </span>
            </a>
        </li>


        <li>
            <a href="{{ url('/getevent') }}">
            
               <img src="backend/assets/images/fluent-mdl2_site-scan.svg" alt="">
                <span style="margin-left:5px;"> Career site </span>
            </a>
        </li>

        <li class="nav-header recruitment mt-2" style="margin-left:23px;" >ORGANIZATION </li>

        <li class="mt-2">
            <a href="{{ url('/getevent') }}">
              
               <img src="backend/assets/images/employee.svg" alt="">
                <span style="margin-left:5px;"> Employee </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
            
               <img src="backend/assets/images/ph_tree-structure-fill.svg" alt="">
                <span style="margin-left:5px;"> structure </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
              
               <img src="backend/assets/images/Vector.svg" alt="">
                <span style="margin-left:5px;"> Report </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
              
               <img src="backend/assets/images/Group.svg" alt="">
                <span style="margin-left:5px;"> Settings  </span>
            </a>
            
            <br>
              <br>
              <h4 id="fon" style="margin-left:25px;">Need Help?</h4>
              <p id="di" style="margin-left:25px;">Open our help center</p>
        </li>

                        



                            <li class="menu-title mt-2">Custom</li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span>Expense </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
        <ul class="nav-second-level">
            <li>
                <a href="{{ route('add.expense') }}">Add Expense</a>
            </li>
            <li>
                <a href="{{ route('today.expense') }}">Today Expense</a>
            </li>
            <li>
                <a href="{{ route('month.expense') }}">Monthly Expense</a>
            </li>
            <li>
                <a href="{{ route('year.expense') }}">Yearly Expense</a>
            </li>

        </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="pages-starter.html">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-sitemap.html">Sitemap</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                   

                    <div class="clearfix"></div> 
                </div>
                <!-- Sidebar -left-->


            </div>

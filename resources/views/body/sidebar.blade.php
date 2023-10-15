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

                            <!-- <li class="menu-title">Navigation</li> -->

          <li>
            <a href="{{ url('/dashboard') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/Union.svg" alt="">
                <span style="margin-left:7px;" > Dashboard </span>
            </a>
        </li>


           <li>
            <a href="{{ route('pos') }}">
                <!-- <span class="badge bg-pink float-end">Hot</span> -->
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/clarity_inbox-line.svg" alt="">
                <span style="margin-left:5px;"> Inbox </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/Calendar.svg" alt="">
                <span style="margin-left:5px;"> Calendar & todo’s </span>
            </a>
        </li>



        <li class="nav-header recruitment mt-2" style="margin-left:23px;" >RECRUITMENT</li>



                            <!-- <li>
                                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                    <i class="mdi mdi-cart-outline mt-2"></i>
                                    <span> Jobs  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommerce">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.employee') }}">All Employee</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.employee') }}">Add Employee </a>
                                        </li>

                                    </ul>
                                </div>
                            </li> -->
                            <li class="mt-2">
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/Bag 2.svg" alt="">
                <span style="margin-left:5px;"> Jobs </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/octicon_people-24.svg" alt="">
                <span style="margin-left:5px;"> Candidates  </span>
            </a>
        </li>


        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/ph_triangle-bold.svg" alt="">
                <span style="margin-left:5px;"> My referrals </span>
            </a>
        </li>


        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/fluent-mdl2_site-scan.svg" alt="">
                <span style="margin-left:5px;"> Career site </span>
            </a>
        </li>

        <li class="nav-header recruitment mt-2" style="margin-left:23px;" >ORGANIZATION </li>

        <li class="mt-2">
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/employee.svg" alt="">
                <span style="margin-left:5px;"> Employee </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/ph_tree-structure-fill.svg" alt="">
                <span style="margin-left:5px;"> structure </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/Vector.svg" alt="">
                <span style="margin-left:5px;"> Report </span>
            </a>
        </li>

        <li>
            <a href="{{ url('/getevent') }}">
               <!-- <i class="mdi mdi-view-dashboard-outline"></i> -->
               <img src="backend/assets/images/Group.svg" alt="">
                <span style="margin-left:5px;"> Settings  </span>
            </a>
            <!-- <div id="layout1">
                <div class="layout2">
                  <h5 id="need">Need Help?</h5>
                  <p class="open">Open our help center</p>
                </div>
             
            </div> -->
            <br>
              <br>
              <h4 id="fon" style="margin-left:25px;">Need Help?</h4>
              <p id="di" style="margin-left:25px;">Open our help center</p>
        </li>

                            <!-- <li>
                                <a href="#sidebarCrm" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Customer Manage   </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCrm">
                                    <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.customer') }}">All Customer</a>
                    </li>
                    <li>
                        <a href="{{ route('add.customer') }}">Add Customer</a>
                    </li>

                                    </ul>
                                </div>
                            </li> -->

        <!-- <li>
            <a href="#sidebarEmail" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Supplier Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.supplier') }}">All Supplier</a>
                    </li>
                    <li>
                        <a href="{{ route('add.supplier') }}">Add Supplier</a>
                    </li>

                </ul>
            </div>
        </li> -->



        <!-- <li>
            <a href="#salary" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Salary </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="salary">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                    </li>
                    <li>
                        <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                    </li>

                     <li>
                        <a href="{{ route('pay.salary') }}">Pay Salary</a>
                    </li>

                    <li>
                        <a href="{{ route('month.salary') }}">Last Month Salary</a>
                    </li>

                </ul>
            </div>
        </li> -->


        
        <!-- <li>
            <a href="#attendence" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Attendence </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="attendence">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('employee.attend.list') }}">Employee Attendence List </a>
                    </li>

                </ul>
            </div>
        </li>

 -->

        <!-- <li>
            <a href="#category" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Category </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="category">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.category') }}">All Category </a>
                    </li>

                </ul>
            </div>
        </li> -->


         <li>
            <a href="#product" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Products  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="product">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.product') }}">All Product </a>
                    </li>

                     <li>
                        <a href="{{ route('add.product') }}">Add Product </a>
                    </li>
                     <li>
                        <a href="{{ route('import.product') }}">Import Product </a>
                    </li>

                </ul>
            </div>
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

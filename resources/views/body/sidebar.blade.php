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

        #side {
            width: 260px;
            height: 908px;
            flex-shrink: 0;
            border-right: 1px solid rgba(245, 247, 251, 0.20);
            background: #1D2433;
        }

        #change:hover {
            background-color: #FED931;
            border: 1px;
            color: black;
            border-radius: 5px;
            margin-left: 5px;
            width: 95%;
        }

        #mouhov:hover {
            color: black;
        }
    </style>
</head>
<div class="left-side-menu" id="side">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li id="change">
                    <a href="{{ url('/dashboard') }}">

                        <img src="backend/assets/images/Union.svg" alt="" >
                        <span style="margin-left:7px;" id="mouhov"> Dashboard </span>
                    </a>
                </li>


                <li id="change">
                    <a href="{{ route('pos') }}">
                        <img src="backend/assets/images/clarity_inbox-line.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Inbox </span>
                    </a>
                </li>

                <li id="change">
                    <a href="{{ url('/getevent') }}">
                        <img src="backend/assets/images/Calendar.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Calendar & todo’s </span>
                    </a>
                </li>



                <li class="nav-header recruitment mt-2" style="margin-left:23px;">RECRUITMENT</li>

                <li class="mt-2" id="change">
                    <a href="{{ route('hiring.employee') }}">

                        <img src="backend/assets/images/Bag 2.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Jobs </span>
                    </a>
                </li>

                <li id="change">
                    <a href="{{ route('all.candidate') }}">

                        <img src="backend/assets/images/octicon_people-24.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Candidates </span>
                    </a>
                </li>


                <li id="change">
                    <a href="{{ route('hiring.employee') }}">

                        <img src="backend/assets/images/ph_triangle-bold.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> My referrals </span>
                    </a>
                </li>


                <li id="change">
                    <a href="{{ route('hiring.employee') }}">

                        <img src="backend/assets/images/fluent-mdl2_site-scan.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Career site </span>
                    </a>
                </li>

                <li class="nav-header recruitment mt-2" style="margin-left:23px;">ORGANIZATION </li>

                <li class="mt-2" id="change">
                    <a href="{{ route('all.employee') }}">

                        <img src="backend/assets/images/employee.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Employee </span>
                    </a>
                </li>

                <li id="change">
                    <a href="{{ url('/getevent') }}">

                        <img src="backend/assets/images/ph_tree-structure-fill.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> structure </span>
                    </a>
                </li>

                <li id="change">
                    <a href="{{ url('/getevent') }}">

                        <img src="backend/assets/images/Vector.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Report </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/getevent') }}" id="change">

                        <img src="backend/assets/images/Group.svg" alt="">
                        <span style="margin-left:5px;" id="mouhov"> Settings </span>
                    </a>

                    <br>
                    <br>
                    <h4 id="fon" style="margin-left:25px;">Need Help?</h4>
                    <p id="di" style="margin-left:25px;">Open our help center</p>
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
                </ul>
            </div>
        </li>
    </div>

</div>

<div class="clearfix"></div>
</div>
<!-- Sidebar -left-->
</div>
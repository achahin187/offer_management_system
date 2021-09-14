<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
    <a href="{{ url('/dashboard') }}">
        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
        </div>
        <div class="clearfix"></div>
    </a>
</li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Offers management system</li>

                    <!-- customers-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#offer-menu">
                            <div class="pull-left"><i class="fas fa-users"></i><span
                                    class="right-nav-text">Customers</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="offer-menu" class="collapse" data-parent="#sidebarnav">

                            <li><a href="{{ route('customers.index') }}">Customers</a></li>
                            <li><a href="{{ route('customers.create') }}">Add Customer</a></li>

                        </ul>


                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#cust-menu">
                            <div class="pull-left"><i class="fas fa-car-alt"></i><span
                                    class="right-nav-text">Vechicles</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="cust-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('vechicles.index') }}"> vechicles</a></li>

                            <li><a href="{{ route('vechicles.create') }}">Add vechicle</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#vec-menu">
                            <div class="pull-left"><i class="fab fa-buffer"></i><span
                                    class="right-nav-text">Offers</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="vec-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('offers.index') }}">offers</a></li>

                            <li><a href="{{ route('offers.create') }}">Add offer</a></li>

                        </ul>
                    </li>
                    <li>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="text-danger ti-unlock"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                       </form>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================

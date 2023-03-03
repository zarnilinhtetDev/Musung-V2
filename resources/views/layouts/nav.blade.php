@php
$roleid = Auth::user()->role;
@endphp
<!-- Navbar -->
@if ($roleid != 3)
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <span>Logout</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>

        </li>

    </ul>
</nav>

<!-- /.navbar -->

<!-- Main Sidebar Container -->


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="border-bottom: 1px solid #dee2e6;">
        <img src="dist/img/AdminLTELogo.png" alt="Company Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text">Company Name</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid #dee2e6;">
            <div class="info ml-3">
                <span class="d-block" style="color:white">{{ Auth::user()->name }} (
                    @if(Auth::user()->role == 1)
                    Admin
                    @else
                    Operator
                    @endif
                    )</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">


            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : ''
                                    }}">
                        <i class="nav-icon fas fa-tachometer-alt mr-3"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                <li class="nav-item {{ (request()->is('line_history')) ? 'menu-open' :'' }}">
                    <a href="#" class="nav-link {{ (request()->is('line_history')) ? 'active' :'' }}">
                        <i class="nav-icon fas fa-chart-pie mr-3"></i>
                        <p>
                            Production Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('line_history') }}" class="nav-link {{ (request()->is('line_history')) ? 'active' : ''
                                    }}">
                                <i class="far fa-circle nav-icon mr-3"></i>
                                <p>History</p>
                            </a>
                        </li>

                    </ul>
                </li>

                @if ($roleid == 1)
                <li class="nav-item">
                    <a href="{{ route('line_entry') }}" class="nav-link {{ (request()->is('line_entry')) ? 'active' : ''
                                    }}">
                        <i class="nav-icon far fa-plus-square mr-3"></i>
                        <p style="font-weight:bold">Line Entry</p>
                    </a>

                </li>

                @endif

                @php
                $line = [
                'line',
                'line_data',
                'item',
                'buyer',
                ];
                $isline = Request::is($line);
                @endphp
                <li class="nav-item {{ $isline ? 'menu-open' : null }}">
                    <a href="#" class="nav-link {{ $isline ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table mr-3"></i>
                        <p>
                            Line Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class=" nav-item">
                            <a href="{{ route('line') }}" class="nav-link {{ (request()->is('line')) ? 'active' : ''
                                    }}">
                                <i class="far fa-circle nav-icon mr-3"></i>
                                <p>Add New Line</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('line_data') }}" class="nav-link {{ (request()->is('line_data')) ? 'active' : ''
                                    }}">
                                <i class="far fa-circle nav-icon mr-3"></i>
                                <p>Add Line Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('item') }}" class="nav-link {{ (request()->is('item')) ? 'active' : ''
                                    }}">
                                <i class="far fa-circle nav-icon mr-3"></i>
                                <p>Add Item</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('buyer') }}" class="nav-link {{ (request()->is('buyer')) ? 'active' : ''
                                    }}">
                                <i class="far fa-circle nav-icon mr-3"></i>
                                <p>Add Buyer</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('user')) ? 'menu-open' :'' }}">
                    <a href="#" class="nav-link {{ (request()->is('user')) ? 'active' : ''
                                    }}">
                        <i class="nav-icon fas fa-users mr-3"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user') }}" class="nav-link {{ (request()->is('user')) ? 'active' : ''
                                    }}">
                                <i class="far fa-circle nav-icon mr-3"></i>
                                <p>Member</p>
                            </a>
                        </li>

                    </ul>

                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit mr-3"></i>
                        <p>
                            Report
                        </p>
                    </a>

                </li>

            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@else

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <span>Logout</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>

        </li>

    </ul>
</nav>
@endif
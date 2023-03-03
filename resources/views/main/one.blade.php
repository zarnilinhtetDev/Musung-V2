<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Simple Tables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css"') }}'>
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #F4F6F9;">
    <div class="wrapper">
        <div id="content" class="container-fluid">
            <nav class="navbar navbar-expand-lg my-2">
                <div><a href="{{ route('line_entry') }}" class="fs-5 text-primary" style="font-weight:bold;">Home</a>
                </div>
                <div class="nav-heading nav-heading-2 text-center m-auto w-80">
                    <h1 class="fw-bolder fs-4 my-auto text-secondary">
                        Line Target Entry
                    </h1>
                </div>

                <div class="">
                    <a class="fw-bolder dropdown-item text-danger fs-5 logout-text" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid row p-0 m-0 text-center">
                                <div class="col-12 col-md-4 p-0 ">
                                    <h1 class="text-size">Line Entry</h1>
                                </div>
                                <div class="col-12 col-md-4 p-0">
                                    <div id="digital-clock"
                                        class="text-white fw-bolder bg-secondary rounded-2 p-2 fs-5 text-center">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 text-center d_time">
                                    <div class="row">
                                        <div
                                            class="col-4 col-md-4 border border-secondary rounded-2 text-center ml-5 p-0">
                                            <p>{{ date("d.m.Y") }} </p>
                                        </div>
                                        <div
                                            class="col-4 col-md-4 border border-secondary rounded-2 text-center ml-2 p-0">
                                            <p>
                                                7:30AM - 6:00PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                /// Live Clock in line_entry.blade
                                    function showTime() {
                                        var date = new Date().toLocaleTimeString(
                                            "en-US",
                                            Intl.DateTimeFormat().resolvedOptions().timeZone
                                        );

                                        document.getElementById("digital-clock").innerHTML = date;
                                    }
                                    setInterval(showTime, 1000);

                                    /// Live Clock in line_entry.blade End
                            </script>

                            <div id="tabmenu" class="container-fluid my-3 p-0">
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <div class="border border-secondary rounded-2">
                                            <h1 class="text-center text-secondary m-0 fw-bolder text-size"> 1
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 target">
                                        <div class="border border-secondary rounded-2">
                                            <h1 class="text-center m-0 text-secondary fw-bolder text-size">
                                                {{ Auth::user()->name }}
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 target">
                                        <h1 class="fw-bold m-0 text-size" style="float:right;"><span
                                                style="background-color:#fff !important;">Today
                                                main target =
                                            </span><span class="text-danger border border-danger p-2 rounded-2">
                                                300</span></h1>
                                    </div>

                                </div>

                                <div class="tab-content">
                                    <div id="tab1" class="div_1">
                                        <div class="row container-fluid p-0 m-0">
                                            <div class="col-12 col-md-0 col-lg-8 m-auto p-0">
                                                <div style="overflow: auto;max-width:100%;">
                                                    <table class="table table-striped my-2 tableFixHead results p-0">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th>Time</th>
                                                                <th>Target</th>
                                                                <th>Actual Target</th>
                                                                <th>Percentage</th>
                                                                <th>Data</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>8:30 AM</td>
                                                                <td>39</td>
                                                                <td>28</td>
                                                                <td>71%</td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9:30 AM</td>
                                                                <td>39</td>
                                                                <td>30</td>
                                                                <td>76%</td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10:30 AM</td>
                                                                <td>39</td>
                                                                <td>30</td>
                                                                <td>76%</td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11:30 AM</td>
                                                                <td>39</td>
                                                                <td>32</td>
                                                                <td>82%</td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1:00 PM</td>
                                                                <td>39</td>
                                                                <td>35</td>
                                                                <td>89%</td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2:00 PM</td>
                                                                <td>39</td>
                                                                <td>32</td>
                                                                <td>82%</td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</body>
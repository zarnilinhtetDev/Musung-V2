<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Line Management Software</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/img/companylogo.png')  }}">

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
    <link rel=" stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #F4F6F9;">
    <div class="wrapper">
        <div id="content" class="container-fluid">
            <nav class="navbar navbar-expand-lg my-2">
                @if(Auth::user()->role != 2)
                <div>
                    <a href="{{ route('line_entry') }}" class="text-primary home-text">Home</a>
                </div>
                @endif
                <div class="nav-heading nav-heading-2 text-center m-auto w-80">
                    <h1 class="fw-bolder fs-4 my-auto text-secondary">
                        Line Target Entry
                    </h1>
                </div>

                <div class="">
                    <a class="fw-bolder dropdown-item text-danger logout-text" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                                                main target -
                                            </span><span>
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
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9:30 AM</td>
                                                                <td>39</td>
                                                                <td>30</td>
                                                                <td>76%</td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10:30 AM</td>
                                                                <td>39</td>
                                                                <td>30</td>
                                                                <td>76%</td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11:30 AM</td>
                                                                <td>39</td>
                                                                <td>32</td>
                                                                <td>82%</td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1:00 PM</td>
                                                                <td>39</td>
                                                                <td>35</td>
                                                                <td>89%</td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2:00 PM</td>
                                                                <td>39</td>
                                                                <td>32</td>
                                                                <td>82%</td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
                                                                        Fill
                                                                    </button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7:00 PM</td>
                                                                <td>39</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><button type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal" data-target="#addModal1">
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
                            <div class="modal fade bd-example-modal-lg" id="addModal1" tabindex="-1"
                                aria-labelledby="addModal1Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="#">
                                            <div class="modal-header">
                                                <h1 class="fw-bold heading-text">
                                                    <?php echo date('d-m-Y'); ?>
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="col-12 my-2">
                                                            <div class="row container-fluid">
                                                                <div class="col-12 col-md-4 m-auto">
                                                                    <h5 class="fw-bold heading-text">
                                                                        #G001P , Coat
                                                                    </h5>
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <label>Target</label>
                                                                    <input type="number" class="form-control"
                                                                        name="target" value="39" />
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <label>Actual</label>
                                                                    <input type="number" class="form-control"
                                                                        name="p_detail_actual_target[]" required" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save
                                                </button>
                                            </div>
                                        </form>
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
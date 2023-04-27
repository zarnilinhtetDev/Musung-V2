<?php
ini_set('memory_limit', '-1');
?>
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
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- Theme style -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
                                            class="col-4 col-md-4 border border-secondary rounded-2 text-center ml-5 p-0 ">
                                            <p>{{ $date }} </p>
                                        </div>
                                        <div
                                            class="col-4 col-md-4 border border-secondary rounded-2 text-center ml-2 p-0">
                                            <p>
                                                {{ date('g:iA',strtotime($line->s_time) )}} - {{
                                                date('g:iA',strtotime($line->e_time))}}

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
                                            <h1 class="text-center text-secondary m-0 fw-bolder text-size">{{
                                                $line->l_name }}
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
                                                {{ $line->main_target }} </span></h1>
                                    </div>

                                </div>

                                <div class="tab-content">
                                    <div id="tab1" class="div_1">
                                        <div class="row container-fluid p-0 m-0">
                                            <div class="col-12 col-md-0 col-lg-8 m-auto p-0">
                                                <div style="overflow: auto;max-width:100%;">
                                                    <table
                                                        class="table table-striped my-2 tableFixHead results p-0 text-center">
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
                                                            @foreach($times as $time)
                                                            @if( $time->time_name != 'temp')
                                                            <tr>
                                                                <td>{{ date('g:iA',strtotime($time->time_name)) }}</td>
                                                                <td>{{ $time->actual_target_entry }}</td>
                                                                <td>{{ $time->div_actual_target }}</td>
                                                                <td>@if(isset($time->div_actual_target))
                                                                    {{
                                                                    $time->div_actual_percent
                                                                    }}%
                                                                    @endif
                                                                </td>
                                                                <td><a type="button" class="btn btn-primary w-100"
                                                                        data-toggle="modal"
                                                                        data-tid="{{ $time->time_id }}"
                                                                        data-uid="{{ $time->uid }}"
                                                                        data-tname="{{ date('g:iA',strtotime($time->time_name)) }}"
                                                                        data-actual_target_entry="{{ $time->actual_target_entry }}"
                                                                        data-target="#addModal1">
                                                                        Fill
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach

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
                                        <form action="{{ route('line_target_entry') }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="fw-bold heading-text" name="tname" id="tname">
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="col-12 my-2">
                                                            <div class="row container-fluid">
                                                                <input type="hidden" name="tid" id="tid">
                                                                <input type="hidden" name="uid" id="uid">

                                                                <div class="col-12 col-md-4 m-auto">
                                                                    @foreach($items as $item)
                                                                    <h5 class="fw-bold heading-text">#
                                                                        {{ $item->style_no }} , {{ $item->p_name }}
                                                                    </h5>
                                                                    @endforeach
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <label>Target</label>
                                                                    <input type="number" class="form-control"
                                                                        name="show_target" id="show_target" required
                                                                        disabled />
                                                                    <input type="hidden" class="form-control"
                                                                        name="target" id="target" required />

                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <label>Actual</label>
                                                                    <input type="number" class="form-control"
                                                                        name="p_detail_actual_target"
                                                                        id="p_detail_actual_target" min='1' required />
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
        </div>

    </section>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('#addModal1').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var tid = button.data('tid');
            var uid = button.data('uid');
            var tname = button.data('tname');
            var starget = button.data('actual_target_entry');
            var atarget = button.data('actual_target_entry');
            var modal = $(this);

            document.getElementById("tname").innerHTML = tname;

            modal.find('.modal-body #tid').val(tid);
            modal.find('.modal-body #uid').val(uid);
            modal.find('.modal-body #show_target').val(starget);
            modal.find('.modal-body #target').val(atarget);
            });
    });
    </script>
</body>
@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid mt-2">
        <div class="row mb-2">


            @if ($message = Session::get('error'))
            <div class="col-12 alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="col-12 alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $error }}</strong>
            </div>
            @endforeach
            @endif

            <div class="col-12 col-md-8 col-lg-8">
                <h1>Lines Target</h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-2 m-auto">
                {{-- <button type="button" class="btn bg-primary custom-btn-theme" data-toggle="modal"
                    data-target="#addModal1">
                    Assign Line Target
                </button> --}}
                <h1 class="custom-btn-theme">Date -
                    <?php echo date("d.m.Y"); ?>
                </h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="row">
                            @foreach($lines as $line)
                            <div class="col-6 col-md-3 text-center my-2">
                                <button type="button" class="btn w-75" data-toggle="modal"
                                    data-target="#LineModalActive<?php echo $line->l_id; ?>"
                                    data-l_id="{{ $line->l_id }}" data-l_name="{{ $line->l_name }}"
                                    data-l_status="{{ $line->a_status }}" id="line_setting_btn"
                                    style="background-color:#5C636A;color:#FFFFFF">
                                    {{ $line->l_name }}
                                </button>
                            </div>
                            <!--Add Modal -->
                            <div class="modal fade bd-example-modal-lg" id="LineModalActive<?php echo $line->l_id;?>"
                                tabindex="-1" aria-labelledby="LineModalActiveLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="{{ route('line.add') }}" method="POST">
                                                @csrf
                                                <div class="my-4">
                                                    <h1 class="fw-bold heading-text mb-3">Add Line Target</h1>

                                                    <hr>

                                                    <div class="row g-3 my-2">
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Line Name</label>​
                                                            <select class="form-control" name="l_manager" required>
                                                                <option value="0">Select Line Name</option>
                                                                @foreach($lines as $eline)
                                                                <option value="{{ $eline->l_id }}" {{ ( $eline->l_id ==
                                                                    $line->l_id) ? 'selected' : '' }}>
                                                                    {{ $eline->l_name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-4 mt-0">
                                                            <br />
                                                            <input type="button" class="btn btn-secondary"
                                                                value="Autofill Time" id="time_type_1">
                                                        </div>
                                                        <input type="hidden" class="form-control" name="work_hour"
                                                            placeholder="7 Hours" id="work_hour" required readonly />

                                                    </div>
                                                    <div class="row g-3 my-2">
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Starting Time</label>​<br />
                                                            <input type="time" class="form-control" id="start_time"
                                                                name="start_time" step="300" required>
                                                        </div>
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Lunch Time</label>​<br />
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="time" class="form-control"
                                                                        name="lunch_start" id="lunch_start" step="300"
                                                                        required>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="time" class="form-control"
                                                                        name="lunch_end" id="lunch_end" step="300"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Ending Time</label>​<br />
                                                            <input type="time" class="form-control" id="end_time"
                                                                name="end_time" step="300" required>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 my-2">
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Work Progress by (minute)</label>​
                                                            <input type="number" class="form-control" name="progress"
                                                                id="progress" placeholder="30" required />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-md-6 m-auto text-center">
                                                    <input class="icon-btn-one btn my-2" type="submit" value="Create"
                                                        name="submit" />
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="table-responsive mt-4">
                            <table id="linetable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Line Name</th>
                                        <th>Line Manager Name</th>
                                        <th>Target</th>
                                        <th>Total Working Hour(s)</th>
                                        <th>Starting Time</th>
                                        <th>Lunch Time</th>
                                        <th>Ending Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $index = 1;
                                    @endphp
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>QC 1</td>
                                        <td>200</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button" class="btn
                                                btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>1S</td>
                                        <td>QC 1S</td>
                                        <td>300</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button" class="btn
                                                                                    btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>QC 3</td>
                                        <td>250</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button"
                                                class="btn
                                                                                                                        btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4S</td>
                                        <td>QC 4S</td>
                                        <td>300</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button"
                                                class="btn
                                                                                                                        btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5A</td>
                                        <td>QC 5A</td>
                                        <td>400</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button"
                                                class="btn
                                                                                                                                                            btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>5</td>
                                        <td>QC 5</td>
                                        <td>300</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button"
                                                class="btn
                                                                                                                                                            btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>QC 8</td>
                                        <td>250</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button"
                                                class="btn
                                                                                                                                                            btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Mini</td>
                                        <td>QC Mini</td>
                                        <td>450</td>
                                        <td>10 hr</td>
                                        <td>7:30 AM</td>
                                        <td>11:30 AM - 12:00 PM</td>
                                        <td>6:00 PM</td>
                                        <td><a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a href="#" type="button"
                                                class="btn
                                                                                                                                                                                                btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    @foreach($line_assign_detail as $l_assign)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $l_assign->l_name }}</td>
                                        <td>{{ $l_assign->name }}</td>
                                        <td>{{ $l_assign->main_target }}</td>
                                        <td id="l_work_hr_{{ $l_assign->l_id }}">{{ $l_assign->t_work_hr }}</td>
                                        <td>{{ $l_assign->s_time }}</td>
                                        <td>{{ $l_assign->lunch_s_time }} - {{ $l_assign->lunch_e_time }}</td>
                                        <td>{{ $l_assign->e_time }}</td>
                                        <td>
                                            <a type="button" class="btn btn-primary text-white"><i
                                                    class='fas fa-pencil-alt'></i></a>
                                            <a class='btn btn-danger text-white'
                                                href='{{ url("/line_data/delete/".$l_assign->id) }}'
                                                onclick="return confirm('Are you sure to delete?')">Delete</a>
                                        </td>
                                    </tr>
                                    <script>
                                        var l_work_hr = $("#l_work_hr_{{ $l_assign->l_id }}");
                                                var l_work_hr_val = "<?php echo $l_assign->t_work_hr; ?>";

                                                l_work_hr_val_split = l_work_hr_val.split(':');


                                                if(l_work_hr_val_split[1] == 0){
                                                    l_work_hr.text(l_work_hr_val_split[0]+'  hr');
                                                }
                                                if(l_work_hr_val_split[1] != 0){
                                                    l_work_hr.text(l_work_hr_val_split[0]+'  hr '+l_work_hr_val_split[1]+'  min');
                                                }
                                    </script>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>


        <!--Edit Modal -->
        <div class="modal fade bd-example-modal-lg" id="editModal1" tabindex="-1" aria-labelledby="editModal1Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">

                        <form action="{{ route('line.update') }}" method="POST">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-3">Update Line</h1>

                                <hr>

                                <input type="hidden" id="lid" name="lid">

                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-10 form-group">
                                        <label for="inputLineName">Line Name<span class="star">*</span></label>
                                        <input type="text" class="form-control" id="line_name" name="line_name"
                                            placeholder="Line Name" required>
                                    </div>
                                    <div class=" col-12 col-md-10 form-group">
                                        <label for="inputPositionName">Position
                                            Name<span class="star">*</span></label>
                                        <input type="number" class="form-control" id="position_name"
                                            name="position_name" placeholder="Position Number" required>
                                    </div>

                                </div>

                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <input class="mr-2" type="checkbox" id="checkstatus" name="checkstatus"
                                            value="1">
                                        <label>Status</label>
                                    </div>

                                </div>

                            </div>
                            <div class="col-12 col-md-6 m-auto text-center">
                                <input class="icon-btn-one btn my-2" type="submit" value="Update" name="submit" />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script> --}}
<script src="{{ asset('plugins/jquery/3.0.0-alpha1/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
            var table = $('#linetable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });

        $("#time_type_1").click(function () {
        var start_time = $("#start_time");
        var end_time = $("#end_time");
        var lunch_start = $("#lunch_start");
        var lunch_end = $("#lunch_end");
        var progress = $("#progress");

        start_time.val("07:30");
        end_time.val("19:00");
        lunch_start.val("11:30");
        lunch_end.val("12:00");
        progress.val("60");
        });

        $('#editModal1').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget);
        var lid = button.data('lid');
        var line_name = button.data('line_name');
        var position_name = button.data('position_name');
        var status = button.data('status');

        if(status == 1){
        $("#checkstatus").attr('checked', true);
        }else{
        $("#checkstatus").attr('checked', false);
        }

        var modal = $(this);

        modal.find('.modal-body #lid').val(lid);
        modal.find('.modal-body #line_name').val(line_name);
        modal.find('.modal-body #position_name').val(position_name);

        });
});
</script>
@endsection
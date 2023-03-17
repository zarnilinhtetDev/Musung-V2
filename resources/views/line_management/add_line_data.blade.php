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
                            <div class="modal fade" id="LineModalActive<?php echo $line->l_id;?>" tabindex="-1"
                                aria-labelledby="LineModalActiveLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form id="line_assign_post" method="POST">
                                                @csrf
                                                <div class="my-4">
                                                    <h1 class="fw-bold heading-text mb-3">Add Line Target</h1>

                                                    <hr>
                                                    <input type="hidden" id="l_id" name="l_id"
                                                        value="<?php echo $line->l_id;?>">
                                                    <div class="row g-3 my-2">
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Line Name <span class="star">*</span></label>​
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
                                                            <label>Starting Time<span
                                                                    class="star">*</span></label>​<br />
                                                            <input type="time" class="form-control" id="start_time"
                                                                name="start_time" step="300" required>
                                                        </div>
                                                        <div class="col-12 col-md-4 mt-0">
                                                            <label>Lunch Time<span class="star">*</span></label>​<br />
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
                                                            <label>Ending Time<span class="star">*</span></label>​<br />
                                                            <input type="time" class="form-control" id="end_time"
                                                                name="end_time" step="300" required>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 my-2">
                                                        <div class="col-12 col-md-4 mb-3">
                                                            <label>Work Progress by (minute)<span
                                                                    class="star">*</span></label>​
                                                            <input type="number" class="form-control" name="progress"
                                                                id="progress" placeholder="30" required />
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div id="dynamic_field_<?php echo $line->l_id; ?>">
                                                        <div class="row g-3 my-2">
                                                            <div class="col-12 col-md-3 mt-0">
                                                                <label>Buyer<span class="star">*</span></label>
                                                                <select class="livesearch form-control category_select"
                                                                    name="category[]" id="category_select">
                                                                    <option value=''>-- Select buyer --
                                                                    </option>
                                                                    @foreach($buyers as $buyer)
                                                                    <option value="{{ $buyer->buyer_id }}">{{
                                                                        $buyer->buyer_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                {{-- <select
                                                                    class="livesearch form-control category_select_<?php echo $line->l_id; ?>"
                                                                    name="category[]"
                                                                    id="category_select_<?php echo $line->l_id; ?>">
                                                                    <option value=''>-- Select buyer --</option>
                                                                </select> --}}
                                                            </div>
                                                            <div class="col-12 col-md-2 mt-0">
                                                                <label>Style No<span class="star">*</span></label>
                                                                <input type="text" class="form-control" id="style_name"
                                                                    name="style_name[]" placeholder="#0000" required />
                                                            </div>
                                                            <div class="col-12 col-md-3 mt-0">
                                                                <label>Item Name<span class="star">*</span></label>
                                                                <div>
                                                                    <select class="livesearch2 form-control p_name"
                                                                        name="p_name[]" id="p_name">
                                                                        <option value=''>-- Select item name --
                                                                        </option>
                                                                        @foreach($items as $item)
                                                                        <option value="{{ $item->item_id }}">{{
                                                                            $item->item_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-2 mt-0">
                                                                <label>Target<span class="star">*</span></label>
                                                                <input type="number" class="form-control"
                                                                    id="setting_target" placeholder="Target" min="1"
                                                                    required />
                                                            </div>
                                                            <div class="col-12 col-md-2 mt-2">
                                                                <button type="button" name="add" id="add_product_detail"
                                                                    class="btn btn-success mt-4" onclick="addRow()"><i
                                                                        class="fas fa-plus-square fa-lg"></i></button>
                                                            </div>
                                                        </div>
                                                        <div id="content">

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

        // $('.category_select_<?php echo $line->l_id; ?>').select2({
        //         dropdownParent: $('#LineModalActive<?php echo $line->l_id;?>'),
        //         tags:true,
        //         ajax: {
        //             url: "/buyer_search",
        //             type: "GET",
        //             dataType: 'json',
        //             delay: 0,
        //             data: function (params) {
        //             return {
        //             search: params.term // search term
        //             };
        //         },
        //         processResults: function (response) {
        //             return {
        //             results: response
        //             };
        //         },
        //         cache: true
        //         }
        // });


       $("#line_assign_post").submit(function(e) {
            e.preventDefault();

            // Get NON-INPUT table cell data
            var box_2 = {};
            var boxes_2 = [];
            $('#dynamic_field_<?php echo $line->l_id; ?>').each(function() {
            var category_select = $('#category_select_<?php echo $line->l_id; ?>', this).val();
            var style_no = $('#style_name', this).val();
            var p_name = $('#p_name_<?php echo $line->l_id; ?>', this).val();
            var category_target = $('#setting_target', this).val();
            var l_id = <?php echo $line->l_id; ?>;
            box_2 = {
                category_select: category_select,
                style_no : style_no,
                p_name: p_name,
                category_target: category_target,
                l_id : l_id
                }
            boxes_2.push(box_2);
            });

            var formData = $(this).serializeArray();

             // Encode with JSON
            var subArray = JSON.stringify(boxes_2);

            // Add to formData array
            formData.push({name: 'sub', value: subArray});
            console.log(formData);
            // Submit with AJAX
            // $.ajax({
            // type: "POST",
            // url: "/line_data/add",
            // data: formData,
            // success: function(data) {
            //     // console.log(data);
            //     location.reload();
            //     }
            // });
        });
});

function addRow() {
        const div = document.createElement('div');

        div.className = 'row';

        div.innerHTML = `<div class="col-12 col-md-3 mt-0">
            <label>Buyer<span class="star">*</span></label>
            <select class="livesearch form-control category_select" name="category[]" id="category_select">
                <option value=''>-- Select buyer --
                </option>
            </select>
        </div>
        <div class="col-12 col-md-2 mt-0">
            <label>Style No<span class="star">*</span></label>
            <input type="text" class="form-control" id="style_name" name="style_name[]" placeholder="#0000" required />
        </div>
        <div class="col-12 col-md-3 mt-0">
            <label>Item Name<span class="star">*</span></label>
            <div>
                <select class="livesearch2 form-control p_name" name="p_name[]" id="p_name">
                    <option value=''>-- Select item name --
                    </option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-2 mt-0">
            <label>Target<span class="star">*</span></label>
            <input type="number" class="form-control" id="setting_target" placeholder="Target" min="1" required />
        </div>
        <div class="col-12 col-md-2 mt-2" onclick="removeRow(this)">
            <button type="button" name="add" class="btn btn-danger mt-4">X</button>
        </div>
        `;

        document.getElementById('content').appendChild(div);
}

function removeRow(div) {
        document.getElementById('content').removeChild(div.parentNode);
}
</script>
<script>

</script>
@endsection
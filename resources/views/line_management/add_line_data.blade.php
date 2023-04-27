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
                    <button type="button" class="btn btn-secondary hide_bar" id="hide_bar" onclick="toggleNav()">Hide
                        Navigation
                        Bar</button>
                    <button type="button" class="btn btn-secondary show_bar" id="show_bar" onclick="showToggleNav()"
                        style="display: none;">Show Navigation
                        Bar</button>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="row">
                            @foreach($lines as $line)
                            <div class="col-6 col-md-3 text-center my-2">
                                <?php
                                $date = date("d.m.Y");
                                $line_id = \App\Models\LineAssign::where('l_id','=', $line->l_id)->where('assign_date','=', $date)->get(); ?>

                                @if(count($line_id) == 1)

                                <button type="button" class="btn w-75 line_setting_btn_2" disabled>
                                    {{ $line->l_name }}
                                </button>

                                @else

                                <button type="button" class="btn w-75 line_setting_btn" data-toggle="modal"
                                    data-target="#LineModalActive" data-l_id="{{ $line->l_id }}"
                                    data-l_name="{{ $line->l_name }}" data-l_status="{{ $line->a_status }}"
                                    id="line_setting_btn">
                                    {{ $line->l_name }}
                                </button>

                                @endif
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
                                    @foreach($line_assign_detail as $key => $line_assign)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $line_assign->l_name }}</td>
                                        <td>{{ $line_assign->name }}</td>
                                        <td>{{ $line_assign->main_target }}</td>
                                        {{-- <td>{{ $t_hours[$key]->t_count }} hr</td> --}}
                                        <td>{{ $line_assign->t_work_hr }} hr</td>
                                        <td>{{ date('h:i A', strtotime($line_assign->s_time)) }} </td>
                                        <td>{{ date('h:i A', strtotime($line_assign->lunch_s_time)) }} - {{ date('h:i
                                            A', strtotime($line_assign->lunch_e_time)) }}
                                        </td>
                                        <td>{{ date('h:i A', strtotime($line_assign->e_time)) }}</td>
                                        <td>
                                            <a type="button" class="btn btn-primary text-white" data-toggle="modal"
                                                data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>
                                            <a href="{{ url("/line_data/delete/".$line_assign->assign_id) }}"
                                                type="button" class="btn
                                                btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
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

        <!--Add Modal -->
        <div class="modal fade" id="LineModalActive" tabindex="-1" aria-labelledby="LineModalActiveLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{ route('line_data.add') }}" id="line_assign_post">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-3">Add Line Target</h1>

                                <hr>

                                <input type="hidden" id="l_id" name="l_id">
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Line Manager <span class="star">*</span></label>​
                                        <select class="form-control" name="line_manager" id="line_manager" required>
                                            <option value="0">Select Line Name</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-4 mt-0">
                                        <br />
                                        <input type="button" class="btn btn-secondary fill-btn" value="Autofill Time"
                                            id="time_type_1">
                                    </div>
                                    <input type="hidden" class="form-control" name="work_hour" placeholder="7 Hours"
                                        id="work_hour" value="8:30" required readonly />
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Starting Time<span class="star">*</span></label>​<br />
                                        <input type="time" class="form-control" id="start_time" name="start_time"
                                            step="300" required>
                                    </div>
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Lunch Time<span class="star">*</span></label>​<br />
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="time" class="form-control" name="lunch_start"
                                                    id="lunch_start" step="300" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="time" class="form-control" name="lunch_end" id="lunch_end"
                                                    step="300" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Ending Time<span class="star">*</span></label>​<br />
                                        <input type="time" class="form-control" id="end_time" name="end_time" step="300"
                                            required>
                                    </div>
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 mb-3">
                                        <label>Work Progress by (minute)<span class="star">*</span></label>​
                                        <input type="number" class="form-control" name="progress" id="progress"
                                            placeholder="30" required />
                                    </div>
                                </div>
                                <hr>
                                <div id="dynamic_field">
                                    <div class="row g-3 my-2 setting-tr">
                                        <div class="col-12 col-md-3 mt-0">
                                            <label>Buyer<span class="star">*</span></label>
                                            <select class="form-control buyer_select_<?php echo $line->l_id;?>"
                                                name="buyer_select[]" id="buyer_select">
                                                <option value=''>-- Select buyer --</option>
                                            </select>

                                        </div>
                                        <div class="col-12 col-md-2 mt-0">
                                            <label>Style No<span class="star">*</span></label>
                                            <input type="text" class="form-control" id="style_name" name="style_name[]"
                                                placeholder="#0000" required />
                                        </div>
                                        <div class="col-12 col-md-3 mt-0">
                                            <label>Item Name<span class="star">*</span></label>
                                            <div>
                                                <select class="form-control item_select_<?php echo $line->l_id;?>"
                                                    name="item_select[]" id="item_select">
                                                    <option value=''>-- Select item --
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2 mt-0">
                                            <label>Target<span class="star">*</span></label>
                                            <input type="number" class="form-control" name="category_target[]"
                                                id="category_target" placeholder="Target" min="1" required />
                                        </div>
                                        <div class="col-12 col-md-2 mt-2">
                                            <button type="button" name="add" id="add_product_detail"
                                                class="btn btn-success mt-4"><i
                                                    class="fas fa-plus-square fa-lg"></i></button>
                                        </div>
                                    </div>
                                    <div class="setting-tr" id="content">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 m-auto text-center">
                                <input class="icon-btn-one btn my-2" type="submit" value="Create" name="submit" />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Edit Modal -->
        <div class="modal fade bd-example-modal-lg" id="editModal1" tabindex="-1" aria-labelledby="editModal1Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{ route('line_data.add') }}" id="line_assign_post">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-3">Add Line Target</h1>

                                <hr>
                                <input type="hidden" id="l_id" name="l_id" value="<?php echo $line->l_id;?>">
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Line Name <span class="star">*</span></label>​
                                        <select class="form-control" name="line_id" id="line_id" required>
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
                                        <input type="button" class="btn btn-secondary fill-btn" value="Autofill Time"
                                            id="time_type_1">
                                    </div>
                                    <input type="hidden" class="form-control" name="work_hour" placeholder="7 Hours"
                                        id="work_hour" value="8:30" required readonly />

                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Starting Time<span class="star">*</span></label>​<br />
                                        <input type="time" class="form-control" id="start_time" name="start_time"
                                            step="300" required>
                                    </div>
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Lunch Time<span class="star">*</span></label>​<br />
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="time" class="form-control" name="lunch_start"
                                                    id="lunch_start" step="300" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="time" class="form-control" name="lunch_end" id="lunch_end"
                                                    step="300" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mt-0">
                                        <label>Ending Time<span class="star">*</span></label>​<br />
                                        <input type="time" class="form-control" id="end_time" name="end_time" step="300"
                                            required>
                                    </div>
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 mb-3">
                                        <label>Work Progress by (minute)<span class="star">*</span></label>​
                                        <input type="number" class="form-control" name="progress" id="progress"
                                            placeholder="30" required />
                                    </div>
                                </div>
                                <hr>
                                <div id="dynamic_field">
                                    <div class="row g-3 my-2 setting-tr">
                                        <div class="col-12 col-md-3 mt-0">
                                            <label>Buyer<span class="star">*</span></label>
                                            <select class="form-control buyer_select" name="buyer_select[]"
                                                id="buyer_select">
                                                <option value=''>-- Select buyer --</option>
                                            </select>

                                        </div>
                                        <div class="col-12 col-md-2 mt-0">
                                            <label>Style No<span class="star">*</span></label>
                                            <input type="text" class="form-control" id="style_name" name="style_name[]"
                                                placeholder="#0000" required />
                                        </div>
                                        <div class="col-12 col-md-3 mt-0">
                                            <label>Item Name<span class="star">*</span></label>
                                            <div>
                                                <select class="form-control item_select" name="item_select[]"
                                                    id="item_select">
                                                    <option value=''>-- Select item --
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2 mt-0">
                                            <label>Target<span class="star">*</span></label>
                                            <input type="number" class="form-control" name="category_target[]"
                                                id="category_target" placeholder="Target" min="1" required />
                                        </div>
                                        <div class="col-12 col-md-2 mt-2">
                                            <button type="button" name="add" id="add_product_detail"
                                                class="btn btn-success mt-4"><i
                                                    class="fas fa-plus-square fa-lg"></i></button>
                                        </div>
                                    </div>
                                    <div class="setting-tr" id="content">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 m-auto text-center">
                                <input class="icon-btn-one btn my-2" type="submit" value="Create" name="submit" />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {

         var table = $('#linetable').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
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

        //Buyer and item select2
        $('#buyer_select').select2({
            dropdownParent: $('#dynamic_field'),
            tags:true,
            ajax: {
            url: "/buyer_search",
            type: "GET",
            dataType: 'json',
            delay: 0,
            data: function (params) {
            return {
            search: params.term // search term
            };
            },
            processResults: function (response) {
            return {
            results: response
            };
            },
            cache: true
            }
        });


        $('#item_select').select2({
            dropdownParent: $('#dynamic_field'),
            tags:true,
            ajax: {
            url: "/item_search",
            type: "GET",
            dataType: 'json',
            delay: 0,
            data: function (params) {
            return {
            search: params.term // search term
            };
            },
            processResults: function (response) {
            return {
            results: response
            };
            },
            cache: true
            }
        });

        //add modal
        $('#LineModalActive').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget);
        var l_id = button.data('l_id');
        var l_name = button.data('l_name');
        var l_status = button.data('l_status');

        var modal = $(this);

        modal.find('.modal-body #l_id').val(l_id);
        });

        // click event when add button click
        var i = 1;
        $("#add_product_detail").click(function () {

            i++;
            const div = document.createElement('div');

            div.className = 'row';

            div.innerHTML = `<div class="col-12 col-md-3 mt-0">
                <label>Buyer<span class="star">*</span></label>
                <select class="form-control buyer_select_`+ i +`" name="buyer_select[]" id="buyer_select_`+ i +`">
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
                    <select class="form-control item_select_`+ i +`" name="item_select[]" id="item_select_`+ i +`">
                        <option value=''>-- Select item --
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-2 mt-0">
                <label>Target<span class="star">*</span></label>
                <input type="number" class="form-control" name="category_target[]" id="category_target" placeholder="Target" min="1" required />
            </div>
            <div class="col-12 col-md-2 mt-2" onclick="removeRow(this)">
                <button type="button" name="add" class="btn btn-danger mt-4"><i class="fas fa-minus-square fa-lg"></i></button>
            </div>
            `;

            document.getElementById('content').appendChild(div);

            $('#buyer_select_'+i).select2({
                dropdownParent: $('#dynamic_field'),
                tags:true,
                ajax: {
                    url: "/buyer_search",
                    type: "GET",
                    dataType: 'json',
                    delay: 0,
                    data: function (params) {
                    return {
                    search: params.term // search term
                    };
                    },
                    processResults: function (response) {
                    return {
                    results: response
                    };
                    },
                    cache: true
                }
            });

            $('#item_select_'+i).select2({
                dropdownParent: $('#dynamic_field'),
                tags:true,
                ajax: {
                    url: "/item_search",
                    type: "GET",
                    dataType: 'json',
                    delay: 0,
                    data: function (params) {
                    return {
                    search: params.term // search term
                    };
                    },
                    processResults: function (response) {
                    return {
                    results: response
                    };
                    },
                    cache: true
                }
            });


        });

        //form submit
        $("#line_assign_post").submit(function(e) {
            e.preventDefault();
            var formData = $(this).serializeArray();

            $.ajax({
            url: "{{ route('line_data.add') }}",
            type: "POST",
            data:formData,
            cache: false,
            dataType: 'json',
            success: function (data) {
            console.log('Success:',data);
            location.reload();

            },
            error: function (data) {
            console.log('Error:', data);
            }
            });

            // var line_id=$('#l_id').val();
            // var line_manager=$('#line_manager').val();
            // var work_hour=$('#work_hour').val();
            // var start_time=$('#start_time').val();
            // var lunch_start=$('#lunch_start').val();
            // var lunch_end=$('#lunch_end').val();
            // var end_time=$('#end_time').val();
            // var progress=$('#progress').val();
            // var buyer_select=$('#buyer_select').val();
            // var style_name=$('#style_name').val();
            // var item_select=$('#item_select').val();
            // var category_target=$('#category_target').val();

            // $.ajaxSetup({
            // headers: {
            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // }
            // });

            // $.ajax({
            //     url: "{{ route('line_data.add') }}",
            //     data: {
            //         line_id:line_id,
            //         line_manager:line_manager,
            //         work_hour:work_hour,
            //         start_time:start_time,
            //         lunch_start:lunch_start,
            //         lunch_end:lunch_end,
            //         end_time:end_time,
            //         progress:progress,
            //         buyer_select:buyer_select,
            //         style_name:style_name,
            //         item_select:item_select,
            //         category_target:category_target
            //     },
            //     type: "POST",
            //     success: function (data) {
            //         console.log('Success:',data);
            //         location.reload();

            //     },
            //     error: function (data) {
            //         console.log('Error:', data);
            //     }
            // });

        });

    });

function removeRow(div) {
        document.getElementById('content').removeChild(div.parentNode);
}
</script>

@endsection

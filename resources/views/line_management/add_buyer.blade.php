@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid mt-2">
        <div class="row mb-2">
            @if ($message = Session::get('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif


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
                <h1>Buyers</h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-2 m-auto">
                <button type="button" class="btn bg-primary custom-btn-theme" data-toggle="modal"
                    data-target="#addModal1">
                    Create New Buyer
                </button>
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
                        <table id="buyertable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Buyer Name</th>
                                    <th>Note</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $index = 1;
                                @endphp
                                @foreach($buyers as $buyer)
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $buyer->buyer_name }}</td>
                                    <td>{{ $buyer->remark }}</td>
                                    @if($buyer->active_status == 0)
                                    <td><i class="fas fa-check-circle text-success"></i></td>
                                    @else
                                    <td><i class="fas fa-times-circle text-danger"></i></td>
                                    @endif

                                    <td>
                                        <a type="button" class="btn btn-primary text-white"
                                            data-buyer_name="{{ $buyer->buyer_name }}" data-id="{{ $buyer->buyer_id }}"
                                            data-remark="{{ $buyer->remark }}"
                                            data-active_status="{{ $buyer->active_status }}" data-toggle="modal"
                                            data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>

                                        <a href="{{ url("/buyer/delete/".$buyer->buyer_id) }}" type="button" class="btn
                                            btn-danger text-white"
                                            onclick="return confirm('Are you sure to delete?')"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!--Add Modal -->
        <div class="modal fade bd-example-modal-lg" id="addModal1" tabindex="-1" aria-labelledby="addModal1Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{ route('buyer.add') }}" method="POST">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-3">Add Buyer</h1>

                                <hr>

                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-10 form-group">
                                        <label for="inputItemName">Buyer Name<span class="star">*</span></label>
                                        <input type="text" class="form-control" id="buyer_name" name="buyer_name"
                                            placeholder="Item Name" required>
                                    </div>
                                    <div class=" col-12 col-md-10 form-group">
                                        <label for="inputPositionName">Note</label>
                                        <textarea class="form-control" name="note" placeholder="Note" id="note"
                                            maxlength="150"></textarea> <span id="characterLeft"></span>
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

                        <form action="{{ route('buyer.update') }}" method="POST">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-3">Update Buyer</h1>

                                <hr>

                                <input type="hidden" id="id" name="id">

                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-10 form-group">
                                        <label for="inputItemName">Buyer Name<span class="star">*</span></label>
                                        <input type="text" class="form-control" id="buyer_name" name="buyer_name"
                                            placeholder="Buyer Name" required>
                                    </div>
                                    <div class=" col-12 col-md-10 form-group">
                                        <label for="inputPositionName">Note</label>
                                        <textarea class="form-control" name="note" placeholder="Note" id="note"
                                            maxlength="150"></textarea> <span id="characterLeft"></span>
                                    </div>

                                </div>

                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <input class="mr-2" type="checkbox" id="checkstatus" name="checkstatus"
                                            value="0">
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
            var table = $('#buyertable').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        });

        $('#editModal1').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget);
        var id = button.data('id');
        var buyer_name = button.data('buyer_name');
        var remark = button.data('remark');
        var status = button.data('active_status');

        if(status == 0){
        $("#checkstatus").attr('checked', true);
        }else{
        $("#checkstatus").attr('checked', false);
        }

        var modal = $(this);

        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #buyer_name').val(buyer_name);
        modal.find('.modal-body #note').val(remark);

        });
});
</script>
@endsection

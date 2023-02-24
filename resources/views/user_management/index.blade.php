@extends('layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid mt-2">
        <div class="row mb-2">
            <div class="col-12 col-md-8">
                <h1>Users</h1>
            </div>
            <div class="col text-center my-2 m-auto">
                <button type="button" class="btn bg-primary custom-btn-theme" data-toggle="modal"
                    data-target="#addModal1">
                    Create New Member
                </button>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="usertable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Line Name</th>
                                    <th>Note</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $index = 1;
                                @endphp
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>

                                    @if($user->role == 1)
                                    <td>Admin</td>
                                    @elseif($user->role == 2)
                                    <td>Operator</td>
                                    @elseif($user->role == 3)
                                    <td>Line Manager</td>
                                    @elseif($user->role == 98)
                                    <td>Owner</td>
                                    @elseif($user->role == 97)
                                    <td>Viewer</td>
                                    @endif

                                    @if($user->line_id == 0)
                                    <td></td>
                                    @else
                                    <td>{{ $user->line_id }}</td>
                                    @endif

                                    <td>{{ $user->remark }}</td>

                                    @if($user->active_status == 1)
                                    <td><input type="checkbox" id="active" name="active" checked></td>
                                    @else
                                    <td><input type="checkbox" id="active" name="active"></td>
                                    @endif

                                    <td>
                                        {{-- <button class='btn btn-primary text-white' data-toggle="modal"
                                            data-target="#editModal1">
                                            Edit</button> --}}
                                        <a type="button" class="btn btn-primary text-white"
                                            data-uer_id="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-username="{{ $user->username }}" data-email="{{ $user->email }}"
                                            data-role="{{ $user->role }}" data-line_id="{{ $user->line_id }}"
                                            data-remark="{{ $user->remark }}"
                                            data-active_status="{{ $user->active_status }}" data-toggle="modal"
                                            data-target="#editModal1">Edit</a>
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
                        <form action="{{ route('user.add') }}" method="POST">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-2">Add User</h1>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Name</label>​
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            required />
                                    </div>
                                    <div class=" col-12 col-md-4 form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username"
                                            required />
                                    </div>
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password"
                                            required />
                                    </div>
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Role</label>​
                                        <select class="form-control" name="role" required>
                                            <option value="0">Select role</option>
                                            <option value="98">Owner</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Operator</option>
                                            <option value="3">Line Manager</option>
                                            <option value="97">Viewer</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 form-group select2">
                                        <label>Line Name</label>​
                                        <select class="form-control" name="line">
                                            <option value="0">Select line name</option>
                                            @foreach($lines as $line)
                                            <option value="{{ $line->l_id }}">{{ $line->l_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Note</label>
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

                        <form action="{{ route('user.update') }}" method="POST">
                            @csrf
                            <div class="my-4">
                                <h1 class="fw-bold heading-text mb-2">Update User</h1>
                                <div class="row g-3 my-2">
                                    <input type="hidden" id="userid" name="userid">
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Name</label>​
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                            required />
                                    </div>
                                    <div class=" col-12 col-md-4 form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Username" required />
                                    </div>
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" />
                                    </div>
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Role</label>​
                                        <select class="form-control" id="role" name="role" required>
                                            <option value="0">Select role</option>
                                            <option value="98">Owner</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Operator</option>
                                            <option value="3">Line Manager</option>
                                            <option value="97">Viewer</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 form-group select2">
                                        <label>Line Name</label>​
                                        <select class="form-control" id="line" name="line">
                                            <option value="0">Select line name</option>
                                            @foreach($lines as $line)
                                            <option value="{{ $line->l_id }}">{{ $line->l_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 my-2">
                                    <div class="col-12 col-md-4 form-group">
                                        <label>Note</label>
                                        <textarea class="form-control" id="note" name="note" placeholder="Note"
                                            id="note" maxlength="150"></textarea> <span id="characterLeft"></span>
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

</section>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script> --}}
<script src="{{ asset('plugins/jquery/3.0.0-alpha1/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {

    var table =  $('#usertable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });

    $('#editModal1').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget);
        var uid = button.data('uer_id');
        var name = button.data('name');
        var username = button.data('username');
        var email = button.data('email');
        var role = button.data('role');
        var line_id = button.data('line_id');
        var remark = button.data('remark');
        var active_status = button.data('active_status');
        alert(active_status);

        // console.log(name);

        var modal = $(this);

        modal.find('.modal-body #uid').val(uid);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #username').val(username);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #role').val(role);
        modal.find('.modal-body #line').val(line_id);
        modal.find('.modal-body #note').val(remark);

    });


     });

</script>

@endsection
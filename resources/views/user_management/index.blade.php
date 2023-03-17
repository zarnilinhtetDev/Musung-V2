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
                <h1>Users</h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4 text-center my-2 m-auto">
                <button type="button" class="btn bg-primary custom-btn-theme" data-toggle="modal"
                    data-target="#addModal1">
                    Create New Member
                </button>
            </div>

            {{-- Export excel --}}
            {{-- <div class="form-group">
                <a class="btn btn-info" href="{{ route('export') }}">Export File</a>
            </div> --}}

        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    {{-- <div class="card card-primary card-tabs"> --}}
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-all-member-tab" data-toggle="pill"
                                        href="#custom-tabs-one-all-member" role="tab"
                                        aria-controls="custom-tabs-one-all-member" aria-selected="true">All Member
                                        List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-admin-tab" data-toggle="pill"
                                        href="#custom-tabs-one-admin" role="tab" aria-controls="custom-tabs-one-admin"
                                        aria-selected="false">Admin List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-operator-tab" data-toggle="pill"
                                        href="#custom-tabs-one-operator" role="tab"
                                        aria-controls="custom-tabs-one-operator" aria-selected="false">Operator List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-line-manager-tab" data-toggle="pill"
                                        href="#custom-tabs-one-line-manager" role="tab"
                                        aria-controls="custom-tabs-one-line-manager" aria-selected="false">Line Manager
                                        List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-viewer-tab" data-toggle="pill"
                                        href="#custom-tabs-one-viewer" role="tab" aria-controls="custom-tabs-one-viewer"
                                        aria-selected="false">Viewer List</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-all-member" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-all-member-tab">
                                    <table id="allmembertable" class="table table-bordered table-hover">
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

                                                @if($user->role == 0)
                                                <td>Admin</td>
                                                @elseif($user->role == 1)
                                                <td>Operator</td>
                                                @elseif($user->role == 2)
                                                <td>Line Manager</td>
                                                @elseif($user->role == 97)
                                                <td>Viewer</td>
                                                @elseif($user->role == 98)
                                                <td>Owner</td>
                                                @elseif($user->role == 99)
                                                <td></td>
                                                @endif

                                                @if($user->line_id == 0)
                                                <td></td>
                                                @elseif($user->line_id == 1)
                                                <td>4S</td>
                                                @elseif($user->line_id == 2)
                                                <td>5A</td>
                                                @elseif($user->line_id == 3)
                                                <td>5</td>
                                                @elseif($user->line_id == 4)
                                                <td>5S</td>
                                                @elseif($user->line_id == 5)
                                                <td>8</td>
                                                @elseif($user->line_id == 6)
                                                <td>Mini</td>
                                                @elseif($user->line_id == 7)
                                                <td>1</td>
                                                @elseif($user->line_id == 8)
                                                <td>1S</td>
                                                @elseif($user->line_id == 9)
                                                <td>3</td>
                                                @endif

                                                <td>{{ $user->remark }}</td>

                                                @if($user->active_status == 1)
                                                <td><i class="fas fa-check-circle text-success"></i></td>
                                                @else
                                                <td><i class="fas fa-times-circle text-danger"></i></td>
                                                @endif

                                                <td>
                                                    <a type="button" class="btn btn-primary text-white"
                                                        data-uer_id="{{ $user->id }}" data-name="{{ $user->name }}"
                                                        data-username="{{ $user->username }}"
                                                        data-password="{{ $user->password }}"
                                                        data-email="{{ $user->email }}" data-role="{{ $user->role }}"
                                                        data-line="{{ $user->line_id }}" data-note="{{ $user->remark }}"
                                                        data-status="{{ $user->active_status }}" data-toggle="modal"
                                                        data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>
                                                    <a href="{{ url("/user/delete/".$user->id) }}" type="button"
                                                        class="btn
                                                        btn-danger text-white"
                                                        onclick="return confirm('Are you sure to delete?')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-admin" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-admin-tab">
                                    <table id="admintable" class="table table-bordered table-hover">
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
                                            @foreach($admins as $admin)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->username }}</td>
                                                <td>{{ $admin->email }}</td>

                                                @if($admin->role == 0)
                                                <td>Admin</td>
                                                @endif

                                                @if($admin->line_id == 0)
                                                <td></td>
                                                @elseif($admin->line_id == 1)
                                                <td>4S</td>
                                                @elseif($admin->line_id == 2)
                                                <td>5A</td>
                                                @elseif($admin->line_id == 3)
                                                <td>5</td>
                                                @elseif($admin->line_id == 4)
                                                <td>5S</td>
                                                @elseif($admin->line_id == 5)
                                                <td>8</td>
                                                @elseif($admin->line_id == 6)
                                                <td>Mini</td>
                                                @elseif($admin->line_id == 7)
                                                <td>1</td>
                                                @elseif($admin->line_id == 8)
                                                <td>1S</td>
                                                @elseif($admin->line_id == 9)
                                                <td>3</td>
                                                @endif

                                                <td>{{ $admin->remark }}</td>

                                                @if($admin->active_status == 1)
                                                <td><i class="fas fa-check-circle text-success"></i></td>
                                                @else
                                                <td><i class="fas fa-times-circle text-danger"></i></td>
                                                @endif

                                                <td>
                                                    <a type="button" class="btn btn-primary text-white"
                                                        data-uer_id="{{ $admin->id }}" data-name="{{ $admin->name }}"
                                                        data-username="{{ $admin->username }}"
                                                        data-password="{{ $admin->password }}"
                                                        data-email="{{ $admin->email }}" data-role="{{ $admin->role }}"
                                                        data-line="{{ $admin->line_id }}"
                                                        data-note="{{ $admin->remark }}"
                                                        data-status="{{ $admin->active_status }}" data-toggle="modal"
                                                        data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>
                                                    <a href="{{ url("/user/delete/".$admin->id) }}" type="button"
                                                        class="btn
                                                        btn-danger text-white"
                                                        onclick="return confirm('Are you sure to delete?')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-operator" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-operator-tab">
                                    <table id="operatortable" class="table table-bordered table-hover">
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
                                            @foreach($operators as $operator)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $operator->name }}</td>
                                                <td>{{ $operator->username }}</td>
                                                <td>{{ $operator->email }}</td>


                                                @if($operator->role == 1)
                                                <td>Operator</td>

                                                @endif

                                                @if($operator->line_id == 0)
                                                <td></td>
                                                @elseif($operator->line_id == 1)
                                                <td>4S</td>
                                                @elseif($operator->line_id == 2)
                                                <td>5A</td>
                                                @elseif($operator->line_id == 3)
                                                <td>5</td>
                                                @elseif($operator->line_id == 4)
                                                <td>5S</td>
                                                @elseif($operator->line_id == 5)
                                                <td>8</td>
                                                @elseif($operator->line_id == 6)
                                                <td>Mini</td>
                                                @elseif($operator->line_id == 7)
                                                <td>1</td>
                                                @elseif($operator->line_id == 8)
                                                <td>1S</td>
                                                @elseif($operator->line_id == 9)
                                                <td>3</td>
                                                @endif

                                                <td>{{ $operator->remark }}</td>

                                                @if($operator->active_status == 1)
                                                <td><i class="fas fa-check-circle text-success"></i></td>
                                                @else
                                                <td><i class="fas fa-times-circle text-danger"></i></td>
                                                @endif

                                                <td>
                                                    <a type="button" class="btn btn-primary text-white"
                                                        data-uer_id="{{ $operator->id }}"
                                                        data-name="{{ $operator->name }}"
                                                        data-username="{{ $operator->username }}"
                                                        data-password="{{ $operator->password }}"
                                                        data-email="{{ $operator->email }}"
                                                        data-role="{{ $operator->role }}"
                                                        data-line="{{ $operator->line_id }}"
                                                        data-note="{{ $operator->remark }}"
                                                        data-status="{{ $operator->active_status }}" data-toggle="modal"
                                                        data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>
                                                    <a href="{{ url("/user/delete/".$operator->id) }}" type="button"
                                                        class="btn
                                                        btn-danger text-white"
                                                        onclick="return confirm('Are you sure to delete?')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-line-manager" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-line-manager-tab">

                                    <table id="managertable" class="table table-bordered table-hover">
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
                                            @foreach($managers as $manager)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $manager->name }}</td>
                                                <td>{{ $manager->username }}</td>
                                                <td>{{ $manager->email }}</td>


                                                @if($manager->role == 2)
                                                <td>Line Manager</td>
                                                @endif

                                                @if($manager->line_id == 0)
                                                <td></td>
                                                @elseif($manager->line_id == 1)
                                                <td>4S</td>
                                                @elseif($manager->line_id == 2)
                                                <td>5A</td>
                                                @elseif($manager->line_id == 3)
                                                <td>5</td>
                                                @elseif($manager->line_id == 4)
                                                <td>5S</td>
                                                @elseif($manager->line_id == 5)
                                                <td>8</td>
                                                @elseif($manager->line_id == 6)
                                                <td>Mini</td>
                                                @elseif($manager->line_id == 7)
                                                <td>1</td>
                                                @elseif($manager->line_id == 8)
                                                <td>1S</td>
                                                @elseif($manager->line_id == 9)
                                                <td>3</td>
                                                @endif

                                                <td>{{ $manager->remark }}</td>

                                                @if($manager->active_status == 1)
                                                <td><i class="fas fa-check-circle text-success"></i></td>
                                                @else
                                                <td><i class="fas fa-times-circle text-danger"></i></td>
                                                @endif

                                                <td>
                                                    <a type="button" class="btn btn-primary text-white"
                                                        data-uer_id="{{ $manager->id }}"
                                                        data-name="{{ $manager->name }}"
                                                        data-username="{{ $manager->username }}"
                                                        data-password="{{ $manager->password }}"
                                                        data-email="{{ $manager->email }}"
                                                        data-role="{{ $manager->role }}"
                                                        data-line="{{ $manager->line_id }}"
                                                        data-note="{{ $manager->remark }}"
                                                        data-status="{{ $manager->active_status }}" data-toggle="modal"
                                                        data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>
                                                    <a href="{{ url("/user/delete/".$manager->id) }}" type="button"
                                                        class="btn
                                                        btn-danger text-white"
                                                        onclick="return confirm('Are you sure to delete?')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-viewer" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-viewer-tab">
                                    <table id="viewertable" class="table table-bordered table-hover">
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
                                            @foreach($viewers as $viewer)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $viewer->name }}</td>
                                                <td>{{ $viewer->username }}</td>
                                                <td>{{ $viewer->email }}</td>

                                                @if($viewer->role == 97)
                                                <td>Viewer</td>
                                                @endif

                                                @if($viewer->line_id == 0)
                                                <td></td>
                                                @elseif($viewer->line_id == 1)
                                                <td>4S</td>
                                                @elseif($viewer->line_id == 2)
                                                <td>5A</td>
                                                @elseif($viewer->line_id == 3)
                                                <td>5</td>
                                                @elseif($viewer->line_id == 4)
                                                <td>5S</td>
                                                @elseif($viewer->line_id == 5)
                                                <td>8</td>
                                                @elseif($viewer->line_id == 6)
                                                <td>Mini</td>
                                                @elseif($viewer->line_id == 7)
                                                <td>1</td>
                                                @elseif($viewer->line_id == 8)
                                                <td>1S</td>
                                                @elseif($viewer->line_id == 9)
                                                <td>3</td>
                                                @endif

                                                <td>{{ $viewer->remark }}</td>

                                                @if($viewer->active_status == 1)
                                                <td><i class="fas fa-check-circle text-success"></i></td>
                                                @else
                                                <td><i class="fas fa-times-circle text-danger"></i></td>
                                                @endif

                                                <td>
                                                    <a type="button" class="btn btn-primary text-white"
                                                        data-uer_id="{{ $viewer->id }}" data-name="{{ $viewer->name }}"
                                                        data-username="{{ $viewer->username }}"
                                                        data-password="{{ $viewer->password }}"
                                                        data-email="{{ $viewer->email }}"
                                                        data-role="{{ $viewer->role }}"
                                                        data-line="{{ $viewer->line_id }}"
                                                        data-note="{{ $viewer->remark }}"
                                                        data-status="{{ $viewer->active_status }}" data-toggle="modal"
                                                        data-target="#editModal1"><i class='fas fa-pencil-alt'></i></a>
                                                    <a href="{{ url("/user/delete/".$viewer->id) }}" type="button"
                                                        class="btn
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
                        </div>
                        <!-- /.card -->
                    </div>
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
                                    <h1 class="fw-bold heading-text mb-3">Add User</h1>
                                    <hr>
                                    <div class="row g-3 my-2">
                                        <div class="col-12 col-md-4 form-group">
                                            <label>Name<span class="star">*</span></label>
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required />
                                        </div>
                                        <div class=" col-12 col-md-4 form-group">
                                            <label>Username<span class="star">*</span></label>
                                            <input type="text" class="form-control" name="username"
                                                placeholder="Username" required />
                                        </div>
                                        <div class="col-12 col-md-4 form-group">
                                            <label>Password<span class="star">*</span></label>
                                            <input type="text" class="form-control" name="password"
                                                placeholder="Password" required />
                                        </div>
                                    </div>
                                    <div class="row g-3 my-2">

                                        <div class="col-12 col-md-4 form-group">
                                            <label>Role<span class="star">*</span></label>​
                                            <select class="form-control" name="role" required>
                                                <option value="">Select role</option>
                                                <option value="98">Owner</option>
                                                <option value="0">Admin</option>
                                                <option value="1">Operator</option>
                                                <option value="2">Line Manager</option>
                                                <option value="97">Viewer</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4 form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email" />
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
                                    <h1 class="fw-bold heading-text mb-3">Update User</h1>
                                    <hr>
                                    <div class="row g-3 my-2">
                                        <input type="hidden" id="uid" name="uid">
                                        <div class="col-12 col-md-4 form-group">
                                            <label>Name<span class="star">*</span></label>​
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" required />
                                        </div>
                                        <div class=" col-12 col-md-4 form-group">
                                            <label>Username<span class="star">*</span></label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Username" required />
                                        </div>
                                        <div class="col-12 col-md-4 form-group">
                                            <label>Password</label>
                                            <input type="hidden" id="password1" name="password1">
                                            <input type="text" class="form-control" id="password2" name="password2"
                                                placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="row g-3 my-2">

                                        <div class="col-12 col-md-4 form-group">
                                            <label>Role<span class="star">*</span></label>​
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="">Select role</option>
                                                <option value="98">Owner</option>
                                                <option value="0">Admin</option>
                                                <option value="1">Operator</option>
                                                <option value="2">Line Manager</option>
                                                <option value="97">Viewer</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4 form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Email" />
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

                                        <div class="col-12 col-md-4 form-group mt-5">
                                            <input type="checkbox" id="checkstatus" name="checkstatus" value="1">
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

</section>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script> --}}
<script src="{{ asset('plugins/jquery/3.0.0-alpha1/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {

    var table =  $('#allmembertable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });

    var admin = $('#admintable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });
    var operator = $('#operatortable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });
    var manager = $('#managertable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });
    var viewer = $('#viewertable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });

    $('.swalDefaultSuccess').click(function() {
    Toast.fire({
    icon: 'success',
    title: 'User added successfully!'
    })
    });

    $('#editModal1').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget);
        var uid = button.data('uer_id');
        var name = button.data('name');
        var username = button.data('username');
        var password = button.data('password');
        var email = button.data('email');
        var role = button.data('role');
        var line = button.data('line');
        var note = button.data('note');
        var status = button.data('status');
        if(status == 1){
        $("#checkstatus").attr('checked', true);
        }else{
        $("#checkstatus").attr('checked', false);
        }

        var modal = $(this);

        modal.find('.modal-body #uid').val(uid);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #username').val(username);
        modal.find('.modal-body #password1').val(password);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #role').val(role);
        modal.find('.modal-body #line').val(line);
        modal.find('.modal-body #note').val(note);

    });



     });

</script>

@endsection
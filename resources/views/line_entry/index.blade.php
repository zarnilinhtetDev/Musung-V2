@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid mt-2">
        <div class="row mb-2">

            <div class="col-12 col-md-8 col-lg-8">
                <h1>Line Target</h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-2 m-auto">

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
                    <div class="card-body p-0">
                        @if(asset($lines))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Line Name</th>
                                    <th>Line Manager</th>
                                    <th>Target</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $index = 1;
                                @endphp
                                @foreach($lines as $line)
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td><a href="{{ url('/line_entry/'.$line->uid) }}">{{ $line->lname }}</a></td>
                                    <td>{{ $line->uname }}</td>
                                    <td>{{ $line->mtarget }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h1 style="color:red;margin-top:20px">Please, insert target for each line!</h1>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
</section>
@endsection
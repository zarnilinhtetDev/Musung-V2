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
                {{-- <button type="button" class="btn bg-primary custom-btn-theme" data-toggle="modal"
                    data-target="#addModal1">
                    Create New Item
                </button> --}}
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
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Line Name</th>
                                    <th>Target</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>

                                    <td><a href="{{ url('/line_entry/1') }}">1</a></td>

                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="">1S</a></td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="">3</a></td>
                                    <td>350</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="">4</a></td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="">4S</a></td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="">5A</a></td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="">5S</a></td>
                                    <td>500</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
</section>
@endsection
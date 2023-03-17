@extends('layouts.app')

@section('content')

<!-- Main content -->

<section class="content">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-2">

                            <div class="col-12 col-md-6">
                                <p class="line">Line-1</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p id="time" class="clock_oneline"></p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="rank">Rank 4</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="main_table"></th>
                                                <th style="width:20px;"></th>
                                                <th class="main_table title_pd"> Present </th>
                                                <th style="width:20px;">
                                                </th>
                                                <th class="main_table title_pd">
                                                    Daily</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="border-0" style="height:20px"></td>
                                            </tr>

                                            <tr>
                                                <td class="main_table tp_title"
                                                    style="font-size: 40px;padding-left: 90px">
                                                    Target
                                                </td>
                                                <td class="border-0"></td>

                                                <td class="tp_title">234</td>
                                                <td class="border-0"></td>

                                                <td class="tp_title">425</td>
                                            </tr>


                                            <tr>
                                                <td style="height:20px"></td>
                                            </tr>

                                            <tr class="tp_oneline">
                                                <td class="main_table tp_title text-center" style="font-size: 40px">
                                                    Production
                                                </td>
                                                <td class=" border-0"></td>
                                                <td class="tp_title">187</td>
                                                <td></td>
                                                <td class="tp_title">187</td>

                                            </tr>

                                            <tr>
                                                <td style="height:20px"></td>
                                            </tr>

                                            <tr>
                                                <td class="main_table text-center percent">
                                                    Percentage</td>
                                                <td class="border-0"></td>
                                                <td class="percent">79%</td>
                                                <td class="border-0"></td>
                                                <td class="percent">44%</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mb-5 second">
                                <div class="right_percent">
                                    <p class='text-light'> 79%</p>
                                </div>
                                <div class='row bottom_rank'>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <h4 class="r_rank">
                                            Rank 2
                                        </h4>

                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <h4 class="r_line">
                                            Line 4
                                        </h4>

                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="r_diff">
                                                    +36%
                                                </h4>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="rs_percentage">
                                                    115%
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class='row bottom_rank'>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <h4 class="r_rank">
                                            Rank 3

                                        </h4>

                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <h4 class="r_line">
                                            Line 5

                                        </h4>

                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="r_diff">
                                                    +27%
                                                </h4>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="rs_percentage">
                                                    106%
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class='row bottom_rank'>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <h4 class="r_rank">
                                            Rank 5


                                        </h4>

                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <h4 class="r_line">
                                            Line 8


                                        </h4>

                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="r_diff" style="color: #ED3334">
                                                    -5%
                                                </h4>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="rs_percentage " style="background-color: #ED3334">
                                                    74%
                                                </h4>
                                            </div>
                                        </div>

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
<script>
    function showTime() {
                var date = new Date().toLocaleTimeString(
                    "en-US", {
                        hour: "2-digit",
                        minute: "2-digit",
                        second: "2-digit"
                    },
                    Intl.DateTimeFormat().resolvedOptions().timeZone
                );
                document.getElementById("time").innerHTML = date;
            }
            setInterval(showTime, 1000);
</script>

@endsection
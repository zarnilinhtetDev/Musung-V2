@extends('layouts.app')
{{--
@extends('home') --}}

@section('content')

@if(Auth::user()->role != 3)

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 col-md-8 col-lg-8">
                <h1>Line History</h1>
            </div>
            {{-- <div class="col-12 col-md-4 col-lg-4 my-2 m-auto">
                <h1 class="custom-btn-theme">10:08:33 AM</h1>
            </div> --}}

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-md-4 form-group">
                                <input class="form-control" type="date" name="linedate" id="linedate"
                                    value="<?php echo date('Y-m-d');?>" />
                            </div>
                            <div class="col-md-4">
                                <input class="icon-btn-one btn" type="button" value="Search" name="searchdata"
                                    id="searchdata">
                            </div>

                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="line-row">
                                        <th scope="col" style="vertical-align: middle;">Status</th>
                                        <th scope="col" style="vertical-align: middle;">Line</th>
                                        <th scope="col" style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <th colspan="2" style="border-top:0;
                                                                            border-right: 0;
                                                                            border-bottom: 1px solid #FFFFFF;
                                                                            border-left: 0;">
                                                        Manpower</th>
                                                </tr>
                                                <tr>
                                                    <td style="border-top:0;
                                                                            border-right: 1px solid #DEE2E6;
                                                                            border-bottom: 0;
                                                                            border-left: 0;">OP</td>
                                                    <td style="border: none;">HP</td>
                                                </tr>
                                            </table>
                                        </th>
                                        <th scope="col" style="vertical-align: middle;">Item Name</th>
                                        <th scope="col" style="vertical-align: middle;">Inline<br />Stock</th>
                                        <th scope="col" style="vertical-align: middle;">Target</th>
                                        <th scope="col" style="vertical-align: middle;">8:30 AM</th>
                                        <th scope="col" style="vertical-align: middle;">9:30 AM</th>
                                        <th scope="col" style="vertical-align: middle;">10:30 AM</th>
                                        <th scope="col" style="vertical-align: middle;">11:30 AM</th>
                                        <th scope="col" style="vertical-align: middle;">1:00 PM</th>
                                        <th scope="col" style="vertical-align: middle;">2:00 PM</th>
                                        <th scope="col" style="vertical-align: middle;">3:00 PM</th>
                                        <th scope="col" style="vertical-align: middle;">4:00 PM</th>
                                        <th scope="col" style="vertical-align: middle;">5:00 PM</th>
                                        <th scope="col" style="vertical-align: middle;">6:00 PM</th>
                                        <th scope="col" style="vertical-align: middle;">7:00 PM</th>
                                        {{-- @foreach(array_reverse($time) as $t)
                                        <th scope="col" id="th_{{ $t->time_name }}" style="vertical-align: middle;">
                                            @php
                                            echo date('g:i A',strtotime($t->time_name));
                                            @endphp
                                        </th>
                                        @endforeach --}}
                                        <th scope="col" style="vertical-align: middle;">Total</th>
                                        <th scope="col" style="vertical-align: middle;">Rank</th>
                                        <th scope="col" style="vertical-align: middle;">%</th>
                                    </tr>
                                </thead>
                                <tbody class="custom_body">
                                    <tr>
                                        <td><span class="dot"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">1</td>
                                        <td class="p-0" style="vertical-align: middle;">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">90</td>
                                                    <td style="border: none;">9</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">88</td>
                                                    <td style="border: none;">9</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Jacket</td>
                                        <td class="text-center" style="vertical-align: middle;">2119</td>
                                        <td class="text-center" style="vertical-align: middle;">425</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border-top:0;
                                                                            border-right: 0;
                                                                            border-bottom: 1px solid #DEE2E6;
                                                                            border-left: 0;">39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                            border-right: 0;
                                                                            border-bottom: 1px solid #DEE2E6;
                                                                            border-left: 0;background-color:#FB2F2F;color:#FFFFFF;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FB2F2F;color:#FFFFFF;">71%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;background-color:#FB2F2F;color:#FFFFFF">
                                                        30</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FB2F2F;color:#FFFFFF">76%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;background-color:#FB2F2F;color:#FFFFFF">
                                                        30</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FB2F2F;color:#FFFFFF">76%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;background-color:#FB2F2F;color:#FFFFFF">
                                                        32</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FB2F2F;color:#FFFFFF">82%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        35</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">89%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                            border-right: 0;
                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                            border-right: 0;
                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                            border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        32</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">82%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                            border-right: 0;
                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                border-right: 0;
                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        234</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:white;">
                                                        187</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:white;">79%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            4</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            44%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">1S</td>
                                        <td scope="col" style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">47</td>
                                                    <td style="border: none">10</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">46</td>
                                                    <td style="border: none">10</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Zeco</td>
                                        <td class="text-center" style="vertical-align: middle;">561</td>
                                        <td class="text-center" style="vertical-align: middle;">314</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                    border-right: 0;
                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                    border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                    border-right: 0;
                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                    border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">6%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        5</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">17%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        6</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">20%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        10</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">34%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        16</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">55%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        12</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">41%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        29</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        174</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        51</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">29%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#ED1C24;color:#FFFFFF;">
                                            9</td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#ED1C24;color:#FFFFFF;">
                                            16%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">3</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">60</td>
                                                    <td style="border: none">3</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">59</td>
                                                    <td style="border: none">3</td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td style="vertical-align: middle;" class="text-center">Innovation</td>

                                        <td class="text-center" style="vertical-align: middle;">633</td>
                                        <td class="text-center" style="vertical-align: middle;">360</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                    border-right: 0;
                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                    border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                    border-right: 0;
                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                    border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        7</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">21%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        13</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">39%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        20</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">60%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        22</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">66%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">84%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        25</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        33</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        231</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#FB2F2F;color:white;">
                                                        139</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FB2F2F;color:white;">60%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            8</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            38%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot1"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">4</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">98</td>
                                                    <td style="border: none">1</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">96</td>
                                                    <td style="border: none">1</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Jacket</td>
                                        <td class="text-center" style="vertical-align: middle;">2118</td>
                                        <td class="text-center" style="vertical-align: middle;">393</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                            border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                            border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        37</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">102%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        40</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">111%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        43</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">119%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        43</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">119%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        43</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">119%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        43</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                        border-left: 0;">
                                                        36</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        252</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#007600;color:white;">
                                                        292</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:white;">115%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#007600;color:white;">
                                            2</td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#007600;color:white;">
                                            74%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">4S</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">67</td>
                                                    <td style="border: none">5</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">66</td>
                                                    <td style="border: none">5</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Jacket</td>
                                        <td class="text-center" style="vertical-align: middle;">872</td>
                                        <td class="text-center" style="vertical-align: middle;">305</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                            border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                            border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        10</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">35%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        23</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">82%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        21</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        21</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        21</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        21</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                        border-left: 0;">
                                                        28</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        196</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#FB2F2F;color:white;">
                                                        138</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FB2F2F;color:white;">70%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            6</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            45%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot1"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">5A</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">93</td>
                                                    <td style="border: none">8</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">93</td>
                                                    <td style="border: none">8</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Jacket</td>
                                        <td class="text-center" style="vertical-align: middle;">608</td>
                                        <td class="text-center" style="vertical-align: middle;">433</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        40</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">102%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        50</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">128%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        50</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">128%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        46</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">117%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        45</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">115%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                        border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                        border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        45</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">115%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                        border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                    border-left: 0;">
                                                        39</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        273</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:white;">
                                                        317</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:white;">116%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#007600;color:white;">
                                            1</td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#007600;color:white;">
                                            73%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot1"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">5</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">87</td>
                                                    <td style="border: none">16</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">84</td>
                                                    <td style="border: none">16</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Pant</td>
                                        <td class="text-center" style="vertical-align: middle;">1273</td>
                                        <td class="text-center" style="vertical-align: middle;">895</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        85</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">104%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        70</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">86%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        80</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">98%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        80</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">98%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        65</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">80%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                        border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                        border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        90</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">111%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                        border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                    border-left: 0;">
                                                        81</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        567</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#007600;color:white;">
                                                        605</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:white;">106%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#007600;color:white;">
                                            3</td>
                                        <td class="text-center"
                                            style="vertical-align: middle;background-color:#007600;color:white;">
                                            67%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">5S</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">72</td>
                                                    <td style="border: none">8</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">72</td>
                                                    <td style="border: none">8</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Pant</td>
                                        <td class="text-center" style="vertical-align: middle;">1828</td>
                                        <td class="text-center" style="vertical-align: middle;">730</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        10</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">15%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        20</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">30%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        50</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        50</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">75%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        65</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">98%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                            border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                            border-left: 0;background-color:#FF8000;color:#FFFFFF">
                                                        55</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF">83%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                            border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                        border-left: 0;">
                                                        66</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        462</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:white;">
                                                        300</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:white;">64%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            7</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            41%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="dot"></span></td>
                                        <td class="text-center" style="vertical-align: middle;">8</td>
                                        <td style="vertical-align: middle;" class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td style="border: none;">71</td>
                                                    <td style="border: none">1</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">70</td>
                                                    <td style="border: none">1</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">Jacket</td>
                                        <td class="text-center" style="vertical-align: middle;">1174</td>
                                        <td class="text-center" style="vertical-align: middle;">300</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                            border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        10</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">37%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        17</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">62%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">100%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        30</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">111%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#007600;color:#FFFFFF">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:#FFFFFF">100%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                            border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                            border-left: 0;background-color:#ED1C24;color:#FFFFFF">
                                                        10</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF">37%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                            border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                        border-left: 0;">
                                                        27</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;">
                                                        189</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                border-left: 0;background-color:#ED1C24;color:white;">
                                                        140</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:white;">74%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            5</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            46%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td scope="col" style="vertical-align: middle;font-weight:bold;">Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td scope="col" style="vertical-align: middle;">4,155</td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                    border-right: 0;
                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                    border-left: 0;">
                                                        378</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                    border-right: 0;
                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                    border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        229</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">61%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        378</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#ED1C24;color:#FFFFFF;">
                                                        268</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#ED1C24;color:#FFFFFF;">71%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        378</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#FF8000;color:#FFFFFF;">
                                                        327</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF;">87%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        378</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#FF8000;color:#FFFFFF;">
                                                        319</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF;">84%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                        378</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color:#FF8000;color:#FFFFFF;">
                                                        370</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF;">98%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;">
                                                        378</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;background-color:#FF8000;color:#FFFFFF;">
                                                        348</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#FF8000;color:#FFFFFF;">92%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                    border-right: 0;
                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                    border-left: 0;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </table>

                                        </td>


                                        <td class="p-0">
                                            <table class="w-100 text-center m-0">
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;">
                                                        3024</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color:#007600;color:white;">
                                                        2,578</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: none;background-color:#007600;color:white;">85%
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="text-center" scope="col" style="vertical-align: middle;"> - </td>
                                        <td class="text-center" scope="col" style="vertical-align: middle;"> - </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endif
{{-- @endadmin --}}
@endsection
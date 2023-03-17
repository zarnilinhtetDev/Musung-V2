@extends('layouts.app')


@section('content')
<!-- Main content -->

<section class="content p-2">
    <div class="container-fluid">
        <div class="row">
            <h3 class="p-2">Report</h3>
            <p class="card-title m-auto ">
            <h3 class="p-2">Date - <span>
                    <?php echo date("d.m.Y"); ?>
                </span></h3>
            </p>
            <input type="hidden" id="tdate" value="<?php echo date(" d.m.Y"); ?>">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <div class="form-group">

                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="date" class="form-control  shadow-sm bg-white rounded"
                                            data-target="#reservationdate" value="<?php echo date('Y-m-d');?>" />

                                        <button type="submit" class="btn btn-primary mx-3">Search</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary ">Edit</button>
                                <div class="table-responsive">
                                    <table id="report_table"
                                        class="table table-bordered table-striped text-center border">

                                        <thead>
                                            <tr>
                                                <th>Line</th>
                                                <th>Buyer</th>
                                                <th>Style No.#</th>
                                                <th>Item</th>
                                                <th>Target</th>
                                                <th>Manpower</th>
                                                <th>Output</th>
                                                <th>%</th>
                                                <th>Q'ty</th>
                                                <th>Input</th>
                                                <th>Total</th>
                                                <th>Output</th>
                                                <th>Total</th>
                                                <th>CMP($)</th>
                                                <th style="width:300px;">Daily CMP income</th>
                                                <th>Accumulation</th>
                                                <th>Inline</th>
                                                <th>H/over</th>
                                                <th>Total</th>
                                                <th>H/over balance</th>
                                                <th>
                                                    <table>
                                                        <tr style="border:1px solid #cac4c4">
                                                            <td>S,L,Adm Op</td>
                                                            <td>HP</td>
                                                        </tr>
                                                    </table>
                                                </th>
                                                <th>Time</th>
                                                <th>CMP / hr</th>
                                                <th>CMP / hr / PS</th>
                                                <th>Remark</th>
                                            </tr>
                                        </thead>

                                        <tbody style="background-color: #F2F2F2">
                                            <tr>
                                                <td style="vertical-align: middle;">1</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                 border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #E6E6E6;
                                                                                                                                                               border-left:background-color: #E6E6E6;">
                                                                NEXT</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                NEXT
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left:0">
                                                                U79044</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                Sample
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #E6E6E6;">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">410</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">140</td>
                                                <td style="vertical-align: middle;">34%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                139</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                1
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                139</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                1
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                $ 8.35</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;background-color:#E6E6E6;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                -</td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                $1160.65
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $1160.65</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #E6E6E6;">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 1160.65</td>


                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
  border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                border-left:0">
                                                                1,921</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                1
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                - </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #E6E6E6;">
                                                                    90
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                            background-color: #E6E6E6;">
                                                                    8
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    98
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#E6E6E6; ">90</td>
                                                                <td style="background-color:#E6E6E6;">7</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="background-color: #E6E6E6;">97
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 105.51</td>
                                                <td style="vertical-align: middle">$ 1.09</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>





                                            {{--Line1s --}}

                                            <tr>
                                                <td style="vertical-align: middle;">1S</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                    border-bottom: 1px solid #E6E6E6;
                                                                                                                                                                                                       border-left:">
                                                                M&S </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left:0">
                                                                3366T </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                1416T
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #F2F2F2;">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">321</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">100</td>
                                                <td style="vertical-align: middle;">31%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                100</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                100</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                $ 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                $500.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $500.00</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 500.00</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                        border-left:0">
                                                                128</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                273
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #F2F2F2;">
                                                                    47
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                                                                    background-color: #F2F2F2;">
                                                                    10
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    57
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#F2F2F2; ">47</td>
                                                                <td style="background-color:#F2F2F2;">10</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="background-color: #F2F2F2;">57
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 45.45</td>
                                                <td style="vertical-align: middle">$ 0.80</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>


                                            {{-- Line3 --}}

                                            <tr>
                                                <td style="vertical-align: middle;">3</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                 border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #E6E6E6;
                                                                                                                                                               border-left:background-color: #E6E6E6;">
                                                                Takisada</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                Takisada
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left:0">
                                                                55937</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                55936
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                55946
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #E6E6E6;">
                                                                Pant</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border:none;background-color: #E6E6E6;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">251</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">54</td>
                                                <td style="vertical-align: middle;">22%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                1</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                52
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                1</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                52
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                $ 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                $5
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                $ 11.5
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                $608.00
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $ 5.00</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                $ 5.00
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #E6E6E6;">

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                $598.00
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-left: 1px solid #DEE2E6;background-color: #E6E6E6;">

                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 608.00</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                border-left:0">
                                                                9</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                23
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                343
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                - </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #E6E6E6;">
                                                                    90
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                            background-color: #E6E6E6;">
                                                                    8
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    98
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#E6E6E6; ">90</td>
                                                                <td style="background-color:#E6E6E6;">7</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="background-color: #E6E6E6;">97
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 55.27</td>
                                                <td style="vertical-align: middle">$ 0.94</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>


                                            {{-- Line4 --}}

                                            <tr>
                                                <td style="vertical-align: middle;">4</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                    border-bottom: 1px solid #E6E6E6;
                                                                                                                                                                                                       border-left:">
                                                                M&S </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left:0">
                                                                3367T </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                2053F
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                2053T
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                2031T
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #F2F2F2;">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border:none;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">403</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">204</td>
                                                <td style="vertical-align: middle;">51%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none; background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                204
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                0</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                204
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                0</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                $ 8.3
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                $2415.30
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                $2415.30
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 2415.30</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                        border-left:0">
                                                                776</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                7
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                479
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                1,047
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #F2F2F2;">
                                                                    47
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                                                                    background-color: #F2F2F2;">
                                                                    10
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    57
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#F2F2F2; ">47</td>
                                                                <td style="background-color:#F2F2F2;">10</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"
                                                                    style="background-color: #F2F2F2;border-bottom:1px solid ">
                                                                    57
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 185.62</td>
                                                <td style="vertical-align: middle">$ 1.93</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>


                                            {{-- Line4s --}}

                                            <tr>
                                                <td style="vertical-align: middle;">4S</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                 border-left: 0;"> -
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left:0">
                                                                2053T</td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #E6E6E6;">
                                                                Jacket</td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">300</td>
                                                <td></td>
                                                <td style="vertical-align: middle;"> 149</td>
                                                <td style="vertical-align: middle;"> 50%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -</td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>


                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                149</td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                149</td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                $ 8.3</td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                $1236.7
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $1236.7</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 1160.65</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
  border-bottom: 1px solid #DEE2E6;
  border-right: 0;
                                                                                                                                                        border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                border-left:0">
                                                                512</td>
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                - </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #E6E6E6;">
                                                                    67
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                            background-color: #E6E6E6;">
                                                                    5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    72
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#E6E6E6; ">65</td>
                                                                <td style="background-color:#E6E6E6;">5</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="background-color: #E6E6E6;">70
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 112.43</td>
                                                <td style="vertical-align: middle">$ 1.61</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>



                                            {{-- Line5A --}}


                                            <tr>
                                                <td style="vertical-align: middle;">5A</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                    border-bottom: 1px solid #E6E6E6;
                                                                                                                                                                                                       border-left:">
                                                                M&S </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                Takisada
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                M&S
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left:0">
                                                                3366T </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                55936
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                2054F
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                2054T
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #F2F2F2;">
                                                                Pant</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border:none;background-color: #F2F2F2;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">886</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">1,020</td>
                                                <td style="vertical-align: middle;">115%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none; background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                0</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                918
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                100
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                0</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                918
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                100
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                $ 3.3
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                $3029.40
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                $3029.40
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 3029.40</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                        border-left:0">
                                                                3</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                32
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                929
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                661
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #F2F2F2;">
                                                                    86
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                                                                    background-color: #F2F2F2;">
                                                                    16
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    102
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#F2F2F2; ">82</td>
                                                                <td style="background-color:#F2F2F2;">15</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"
                                                                    style="background-color: #F2F2F2;border-bottom:1px solid ">
                                                                    97
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 275.40</td>
                                                <td style="vertical-align: middle">$ 2.84</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>


                                            {{-- Line5 --}}


                                            <tr>
                                                <td style="vertical-align: middle;">5</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                 border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #E6E6E6;
                                                                                                                                                               border-left:background-color: #E6E6E6;">
                                                                Next</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                Next
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                Next
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                Next
                                                            </td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left:0">
                                                                U79045</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                867786
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                287472
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                Sample
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #E6E6E6;">
                                                                Pant</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                Pant
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border:none;background-color: #E6E6E6;">
                                                                Pant
                                                            </td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">713</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">475</td>
                                                <td style="vertical-align: middle;">67%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none; background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                3</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #E6E6E6;border-bottom:1px solid">
                                                                468
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                3</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #E6E6E6;border-bottom:1px solid">
                                                                468
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                0
                                                            </td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                $ 3.45
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #E6E6E6;border-bottom:1px solid">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                $1614.60
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                $1614.60
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #E6E6E6;">

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;border-bottom: 1px solid #DEE2E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-left: 1px solid #DEE2E6;background-color: #E6E6E6;border-bottom: 1px solid #DEE2E6;">

                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$1614.60</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                border-left:0">
                                                                14</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                15
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                1,814
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                1
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                - </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #E6E6E6;">
                                                                    72
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                            background-color: #E6E6E6;">
                                                                    8
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    80
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#E6E6E6; ">69</td>
                                                                <td style="background-color:#E6E6E6;">8</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"
                                                                    style="background-color: #E6E6E6;border-bottom:1px solid ">
                                                                    77
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 187.13</td>
                                                <td style="vertical-align: middle">$ 2.79</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>


                                            {{--
                                            Line5S --}}


                                            <tr>
                                                <td style="vertical-align: middle;">5S</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                    border-bottom: 1px solid #E6E6E6;
                                                                                                                                                                                                       border-left:">
                                                                Next </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                Next
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                Next
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                Next
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                Next
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;background-color: #F2F2F2;
                                                                                                                                            border-right: 0;
                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                            border-left:0">
                                                                756204 </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                834824
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                T06119
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #F2F2F2;">
                                                                828527
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                Sample
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #F2F2F2;">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #F2F2F2;">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border:none;background-color: #F2F2F2;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">295</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">280</td>
                                                <td style="vertical-align: middle;">95%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; background-color: #F2F2F2;border-bottom:1px solid">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none; background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #F2F2F2;border-bottom:1px solid">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #F2F2F2;border-bottom:1px solid">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                4</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                276
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #F2F2F2;border-bottom:1px solid">
                                                                0
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                4</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                276
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #F2F2F2;border-bottom:1px solid;">
                                                                0
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                $ 7.45
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;background-color: #F2F2F2;border-bottom:1px solid">
                                                                $ 7.35
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #F2F2F2;">
                                                                $2058.40
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $ 29.80</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                $2028.60
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-left: 1px solid #DEE2E6;background-color: #F2F2F2;border-bottom: 1px solid #DEE2E6;">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 2058.40</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                        border-right: 0;
                                                                                                                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                        border-left:0">
                                                                4</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                5
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                376
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                895
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;background-color: #F2F2F2;">
                                                                1
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
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
                                                                                                                                                                                                                                                    border-left: 0;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                                                            border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #F2F2F2;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td style="background-color: #F2F2F2;">
                                                                    68
                                                                </td>
                                                                <td
                                                                    style="
                                                                                                                                                                                                                                                    background-color: #F2F2F2;">
                                                                    1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    69
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#F2F2F2; ">66</td>
                                                                <td style="background-color:#F2F2F2;">1</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"
                                                                    style="background-color: #F2F2F2;border-bottom:1px solid ">
                                                                    67
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 187.13</td>
                                                <td style="vertical-align: middle">$ 2.79</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>



                                            {{-- Line8 --}}

                                            <tr>
                                                <td style="vertical-align: middle;">8</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                 border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #E6E6E6;
                                                                                                                                                               border-left:background-color: #E6E6E6;">
                                                                NEXT</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                NEXT
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-top:0;background-color: #E6E6E6;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left:0">
                                                                828527</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid ;background-color: #E6E6E6;">
                                                                Sample
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-bottom: 1px solid;background-color: #E6E6E6;">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border:none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">429</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">492</td>
                                                <td style="vertical-align: middle;">115%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none; border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                492</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                492</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0">
                                                                $ 7.45</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color:#E6E6E6">
                                                                -</td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;background-color: #E6E6E6;">
                                                                $3665.40
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $3665.40</td>
                                                            <td
                                                                style="border-top:0;border-right:none;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0;border-right:none;border-bottom: 1px solid #DEE2E6;border-left:0;background-color: #E6E6E6;">

                                                            </td>

                                                        </tr>

                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 3665.40</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
  border-bottom: 1px solid #DEE2E6;
                                                                                  border-right: 0;
                                                                              border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                border-left:0">
                                                                538</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                1
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
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
                                                                                                                                                                                                            border-left: 0;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:0">
                                                                - </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border: none;border-bottom:1px solid;background-color: #E6E6E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered  ">
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: #E6E6E6;">
                                                                    92
                                                                </td>
                                                                <td style="background-color: #E6E6E6;">
                                                                    8
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    100
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td style="background-color:#E6E6E6; ">91</td>
                                                                <td style="background-color:#E6E6E6;">8</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="background-color: #E6E6E6;">99
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">11</td>
                                                <td style="vertical-align: middle">$ 333.22</td>
                                                <td style="vertical-align: middle">$ 3.37</td>
                                                <td style="vertical-align: middle"></td>
                                            </tr>

                                        </tbody>
                                        {{-- Total --}}
                                        <tbody style="background-color: #FFFF">
                                            <tr>
                                                <td>Total</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0 ">

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>
                                                    </table>

                                                </td>
                                                <td>4008</td>
                                                <td></td>
                                                <td>3704</td>
                                                <td>92%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-left: 0;background-color: #F2F2F2;border:none">
                                                                3704
                                                            </td>
                                                        </tr>

                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border:0;border-left: 0;background-color: #F2F2F2;">
                                                                $ 85.45
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">

                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-left:0;background-color: #F2F2F2;border:none">
                                                                $ 21921.75
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>$ 21921.75</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                border-right: 0;border:none;                                                                         border-left: 0;background-color: #F2F2F2;">
                                                                10808
                                                            </td>
                                                        </tr>


                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">


                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>
                                                        <tr>

                                                        </tr>
                                                        <tr>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>

                                                        </tr>
                                                        <tr>

                                                        </tr>
                                                        <tr>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="m-auto text-center w-100 table table-bordered ">

                                                        <tbody>


                                                            <tr>
                                                                {{-- <td style="background-color:#F2F2F2;border:none">
                                                                    719
                                                                </td> --}}
                                                                <td style="background-color: #F2F2F2;border:none">
                                                                    719
                                                                </td>

                                                            </tr>


                                                        </tbody>


                                                    </table>

                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>$24.10</td>
                                                <td></td>
                                            </tr>

                                        </tbody>

                                    </table>




                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('plugins/jquery/3.0.0-alpha1/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {

    $("#report_table").DataTable({
        "searching": false,
        "ordering": false,
        "paging": false,
        "info": false,
        "responsive": false, "lengthChange": false, "autoWidth": false,
        "buttons": [ {
            text: 'Excel',
            extend: 'excelHtml5',
            title: 'Line_Report_'+$("#tdate").val(),
        },{
            extend: 'pdfHtml5',
            title: 'Line_Report_'+$("#tdate").val(),
            orientation: 'landscape',
            pageSize: 'A3',
        }]
        }).buttons().container().appendTo('.col-md-6:eq(1)');
     });

</script>

@endsection
<?php
ini_set('memory_limit', '-1');
?>
{{-- <div wire:poll.1000ms> --}}
    <div class="card">
        <button type="button" class="btn btn-secondary hide_bar" id="hide_bar" onclick="toggleNav()">Hide
            Navigation
            Bar</button>
        <button type="button" class="btn btn-secondary show_bar" id="show_bar" onclick="showToggleNav()"
            style="display: none;">Show Navigation
            Bar</button>
        <div class="card-body">
            @foreach($top_line as $line)
            @if($line->line_id == $id)
            <div class="row mt-2">

                <div class="col-12 col-md-6">
                    <p class="line">Line-{{ $line->l_name }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <p id="time" class="clock_oneline"></p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <p class="rank">Rank {{ $line->row_num }}</p>
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
                                    <td class="main_table tp_title" style="font-size: 40px;padding-left: 90px">
                                        Target
                                    </td>
                                    <td class="border-0"></td>

                                    <td class="tp_title">{{ $line->total_div_target }}</td>
                                    <td class="border-0"></td>

                                    <td class="tp_title">{{ $line->m_target }}</td>
                                </tr>


                                <tr>
                                    <td style="height:20px"></td>
                                </tr>

                                <tr class="tp_oneline">
                                    <td class="main_table tp_title text-center" style="font-size: 40px">
                                        Production
                                    </td>
                                    <td class=" border-0"></td>
                                    <td class="tp_title">{{ $line->total_actual_target }}</td>
                                    <td></td>
                                    <td class="tp_title">{{ $line->total_actual_target }}</td>

                                </tr>

                                <tr>
                                    <td style="height:20px"></td>
                                </tr>

                                <tr>
                                    <td class="main_table text-center percent">
                                        Percentage</td>
                                    <td class="border-0"></td>
                                    <td class="percent">
                                        {{ $line->diff_target_percent }}%
                                    </td>
                                    <td class="border-0"></td>
                                    <td class="percent">
                                        {{ $line->actual_target_percent }}%
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-5 mb-5 second">
                    <div class="right_percent">
                        <p class='text-light'>{{ $line->diff_target_percent }}%</p>
                    </div>


                    @if($line->row_num == 1)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 2 || $rank_line->row_num == 3 || $rank_line->row_num ==
                    4)

                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{$line->diff_target_percent - $rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach


                    @elseif($line->row_num == 2)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 1)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 3 || $rank_line->row_num == 4)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach

                    @elseif($line->row_num == 3)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 1 || $rank_line->row_num == 2)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 4)
                    <div class='row bottom_rank'>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach

                    @elseif($line->row_num == 4)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 2 || $rank_line->row_num == 3)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 5)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach


                    @elseif($line->row_num == 5)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 3 || $rank_line->row_num == 4)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 6)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach


                    @elseif($line->row_num == 6)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 4 || $rank_line->row_num == 5)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 7)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach


                    @elseif($line->row_num == 7)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 5 || $rank_line->row_num == 6)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 8)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach



                    @elseif($line->row_num == 8)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 6 || $rank_line->row_num == 7)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 9)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach



                    @elseif($line->row_num == 9)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 7 || $rank_line->row_num == 8)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @elseif($rank_line->row_num == 10)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}


                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff" style="color: #ED3334">
                                        -{{ $line->diff_target_percent-$rank_line->diff_target_percent
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage " style="background-color: #ED3334">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach

                    @elseif($line->row_num == 10)
                    @foreach($top_line as $rank_line)
                    @if($rank_line->row_num == 7 || $rank_line->row_num == 8 || $rank_line->row_num ==
                    9)
                    <div class='row bottom_rank'>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <h4 class="r_rank">
                                Rank {{ $rank_line->row_num }}
                            </h4>

                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <h4 class="r_line">
                                Line {{ $rank_line->l_name }}
                            </h4>

                        </div>

                        <div class="col-5 col-sm-5 col-md-5">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="r_diff">
                                        +{{ ($rank_line->diff_target_percent-$line->diff_target_percent)
                                        }}%
                                    </h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h4 class="rs_percentage">
                                        {{ $rank_line->diff_target_percent }}%
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    {{--
</div> --}}
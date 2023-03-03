<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineData extends Model
{
    use HasFactory;
    protected $table = 'line_data';
    protected $fillable = [
        'assign_id',
        'user_id',
        'l_id',
        'main_target',
        'ot_main_target',
        'm_power',
        'actual_m_power',
        'man_target',
        'man_actual_target',
        'hp',
        'actual_hp',
        's_time',
        'e_time',
        'lunch_s_time',
        'lunch_e_time',
        'cal_work_min',
        't_work_hr',
        'assign_date',
        'remark',
        'created_at',
        'update_at',
    ];
}

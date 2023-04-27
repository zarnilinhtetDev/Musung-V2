<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class One extends Component
{

    public $date;
    public $id;

    public function __construct()
    {
        ini_set('max_execution_time', 300);
    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('initSomething10');
        $this->dispatchBrowserEvent('additionalInit10');
    }

    public function mount($date, $id)
    {

        $this->date = $date;
        $this->id = $id;
    }

    public function render()
    {

        $date = $this->date;
        $id = $this->id;


        $top_line = DB::table('time')
            ->select(
                'time.line_id',
                'line.l_name',
                'line_assign.main_target as m_target',
                'time.assign_id',
                DB::raw('SUM(time.actual_target_entry) as total_div_target'),
                DB::raw('SUM(time.div_actual_target) as total_actual_target'),
                DB::raw('ROUND((SUM(time.div_actual_target)*100/line_assign.main_target),0) as actual_target_percent'),
                DB::raw('ROUND((SUM(time.div_actual_target)*100/SUM(time.actual_target_entry)),0) as diff_target_percent'),
                DB::raw('ROW_NUMBER() OVER(ORDER BY  ROUND((SUM(time.div_actual_target)*100/SUM(time.actual_target_entry)),0) DESC
)AS row_num')
            )
            ->join('line_assign', 'line_assign.assign_id', '=', 'time.assign_id')
            ->join('line', 'line.l_id', '=', 'time.line_id')
            ->where('line_assign.assign_date', '=', $date)
            ->whereNotNull('time.div_actual_target')
            ->groupBy('time.line_id', 'time.assign_id', 'line_assign.main_target', 'line.l_name')
            ->get();

        DB::disconnect('msn');

        return view('livewire.one', compact(
            'top_line',
            'id',
        ));
    }
}

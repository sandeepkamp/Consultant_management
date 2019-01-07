<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documentation extends Model
{

    protected $table = 'documentations';

    public $fillable = [
        'order_id',
        'qm_planned_date',
        'qm_actual_date',
        'qm_comment',
        'pm_planned_date',
        'pm_actual_date',
        'pm_comment',
        'sop_planned_date',
        'sop_actual_date',
        'sop_comment',
        'formo_planned_date',
        'formo_actual_date',
        'formo_comment',
           
    ];
}

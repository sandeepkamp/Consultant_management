<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    public $fillable = [
          
        'pre_assmnt_plnd_date',
        'pre_assmt_actual_date',
        'pre_assmt_comment',
        'final_assmt__plnd_date',
        'final_assmt_actual_date',
        'final_assmt_comment',
    ];
}

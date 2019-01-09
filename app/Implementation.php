<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Implementation extends Model
{
    protected $table = 'implementations';
    protected $primaryKey = 'id';

    public $fillable = [

        'traning_planned_date',
        'traning_actual_date',
        'traning_comment',
        'implementation_planned_date',
        'implementation_actual_date',
        'implementation_comment',
        
    ];
}

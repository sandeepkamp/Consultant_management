<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public $fillable = [
        'int_audit_plnd_date',
        'int_audit_actual_date',
        'int_audit_comment',
        'adequacy_audit_plnd_date',
        'adequacy_audit_actual_date',
        'adequacy_audit_comment',
    ];
}

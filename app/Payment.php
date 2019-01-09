<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';

    public $fillable = [

        'adv_plnd_dt',
        'adv_act_dt',
        'adv_remark',
        'first_instal_plnd_dt',
        'first_instal_act_dt',
        'first_instal_remark',
        'sec_instal_pl_dt',
        'sec_instal_act_dt',
        'sec_instal_remark',
        'third_instal_pl_dt',
        'third_instal_act_dt',
        'third_instal_remark',
        'final_pay_pl_dt',
        'final_pay_act_dt',
        'final_pay_remark',
    ];
}

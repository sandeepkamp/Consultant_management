<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessManagement extends Model
{
    protected $table = 'process_managements';
    
    public $fillable=[

        'customer_id',
        'agency_id',
        'iso_product_id',
        'order_no',
        'order_amount',
        'order_date',
        'tender_no',
        'tender_amount',
        'tender_date',
        'reference',
        'project_lead',

    ];

}

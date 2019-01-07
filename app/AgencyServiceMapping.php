<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyServiceMapping extends Model
{
    public $fillable = [
        'product_id',
        'agency_id',
     ];
}

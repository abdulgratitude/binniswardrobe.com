<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "core_state_master";

    protected $fillable = [
        'state_code',
        'state_name',
        'state_description',
        'country_code',
        'is_active',
        'created_by',
        'created_date',
        'modified_by',
        'modified_date',
        'shipping_enabled'
    ];


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = "core_currency_master";
    protected $primaryKey = 'currency_code';
    public $incrementing = false;

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'modified_date';

    protected $fillable = [
        'currency_code',
        'currency_name',
        'currency_description',
        'image_url',
        'currency_symbol',
        'created_by',
        'created_date',
        'modified_by',
        'modified_date',
        'currency_symbol_code'
    ];

}

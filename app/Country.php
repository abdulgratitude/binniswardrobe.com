<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "core_country_master";

    protected $fillable = [
        'country_code',
        'country_name',
        'country_description',
        'is_active',
        'created_by',
        'created_date',
        'modified_by',
        'modified_date',
        'shipping_enabled',
        'default_currency_code',
        'country_image',
        'conitinent_code',
        'country_code_iso3',
        'country_prefix',
        'check_pincode_delivery_serviceable'
    ];

    public function states()
    {
        return $this->hasMany(State::class, 'country_code', 'country_code');
    }

    public function continentals()
    {
        return $this->belongsTo(Continental::class, 'continent_code', 'continent_code');
    }
}

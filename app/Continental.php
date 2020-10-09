<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continental extends Model
{
    protected $table = "core_continent_master";

    protected $fillable = [
        'continent_code',
        'continent_name',
        'continent_description',
        'is_active',
        'created_by',
        'created_date',
        'modified_by',
        'modified_date'
    ];

    public function countries()
    {
        return $this->hasMany(Country::class, 'country_id', 'id');
    }
}

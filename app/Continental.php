<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continental extends Model
{
    protected $table = 'core_continent_master';
    protected $primaryKey = 'continent_code';
    public $incrementing = false;

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'modified_date';

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

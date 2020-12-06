<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'iso_code', 'iso_code_3', 'name', 'capital', 'numeric_prefix', 'lang_code', 'lang_name', 'currency_code', 'currency_name', 
        'currency_symbol'
    ];

    /**
     * RELACIONES
     */

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function towns()
    {
        return $this->hasManyThrough(Town::class, City::class);
    }
}

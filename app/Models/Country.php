<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
/**
 *             $table->string('country_iso_code', 2)->nullable(false);
            $table->string('country_iso_code_3', 2)->nullable(false);
            $table->string('name', 50)->nullable(false);
            $table->string('capital', 100)->nullable(false);
            $table->string('country_numeric_prefix', 2)->nullable(false);
            $table->string('lang_code', 2)->nullable(false);
            $table->string('lang_name', 100)->nullable(false);
            $table->string('currency_code', 3)->nullable(false);
            $table->string('currency_name', 25)->nullable(false);
            $table->string('currency_symbol', 25)->nullable(false);

 */
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

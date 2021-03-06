<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'cif', 'name', 'street', 'town_id', 'city_id', 'country_id', 'deleted_by'
    ];
    /**
     * RELACIONES
     */

    public function car_models()
    {
        return $this->hasMany(CarModel::class, 'brand_id', 'id');
    }
    public function moto_models()
    {
        return $this->hasMany(MotoModel::class, 'brand_id', 'id');
    }

    public function deleted_by()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'id');
    }

}

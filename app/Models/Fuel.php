<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id', 'name'
    ];

    public function fuel_type()
    {
        return $this->belongsTo(FuelType::class, 'type_id', 'id');
    }
}

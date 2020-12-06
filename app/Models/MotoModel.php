<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoModel extends Model
{
    use HasFactory;

    /**
     * RELACIONES
     */

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id', 'name', 'fuel_types', 'cv', 'urban', 'mix', 'long_distance', 'litres', 'deleted_by'
    ];

    /**
     * RELACIONES
     */    

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function auto_type()
    {
        return $this->belongsTo(AutoType::class, 'auto_type_id', 'id');
    }

    public function deleted_by()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'id');
    }
}

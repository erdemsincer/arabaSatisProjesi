<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carModel extends Model
{
    use HasFactory;

    protected $table='car_models';

    public function getBrand(){
        return $this->belongsTo(CarBrand::class,foreignKey: 'brand_id',ownerKey: 'id');
    }
}

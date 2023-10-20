<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhTurbidity extends Model
{
    use HasFactory;
    protected $table = 'ph_turbidities';
    protected $fillable = [
        'ph',
        'turbidity',
    ];
}

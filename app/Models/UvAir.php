<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UvAir extends Model
{
    use HasFactory;
    protected $table = "uv_airs";
    protected $fillable = [
        "uv",
        "air_temperature",
        "air_humidity",
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpanTds extends Model
{
    use HasFactory;
    protected $table = 'simpan_tds';
    protected $fillable = [
        'data_tds'
    ];
}

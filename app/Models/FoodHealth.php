<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodHealth extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'health_1',
        'health_2',
        'health_3',
        'health_4',
        'health_5',
        'health_6',
        'health_7',
    ];


}

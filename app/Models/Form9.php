<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form9 extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'quiz9_1',
        'quiz9_2',
        'quiz9_3',
        'quiz9_4',

    ];
}

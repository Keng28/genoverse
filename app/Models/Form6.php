<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form6 extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'quiz6_1',
        'quiz6_1_1' => 'array',
        'quiz6_2',
        'quiz6_2_1' => 'array', 
    ];
}


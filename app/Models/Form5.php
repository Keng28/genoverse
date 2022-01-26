<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'quiz5_1',
        'quiz5_2',
        'quiz5_2_1_1' => 'array',
        'quiz5_2_1_2',
        'quiz5_2_2_1' => 'array', 
        'quiz5_2_2_2',
    ];
}

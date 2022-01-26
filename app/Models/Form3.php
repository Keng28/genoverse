<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',

        'quiz3_1',
        'quiz3_2',
        'quiz3_2_1',
        'quiz3_2_2',
        'quiz3_2_3' => 'array',
        'quiz3_2_4',
        'quiz3_2_5',
        'quiz3_3_1',
        'quiz3_3_2',
        'quiz3_3_3',
        'quiz3_3_4',
        'quiz3_3_5' => 'array',
        'quiz3_3_6',
        'quiz3_3_7',

    ];

}

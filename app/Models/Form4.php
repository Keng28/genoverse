<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',

        'quiz4_1',
        'quiz4_1_1' => 'array',
        'quiz4_1_2' ,
        'quiz4_1_3' ,

        'quiz4_2_1' ,
        'quiz4_2_2' => 'array',
        'quiz4_2_3',
    ];}

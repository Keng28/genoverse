<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quiz_1',
        'quiz_2',
        'quiz_2_1',
        
    ];}
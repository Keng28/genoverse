<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',

        'cancer3_1',
        'cancer3_2',
        'cancer3_3',
        'cancer3_4',
        'cancer3_5',
        
    ];
}

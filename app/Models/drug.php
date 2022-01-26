<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'drug_1',
        'drug_2',
        'drug_3',
        'drug_4',
        'drug_5',
        'drug_6',
        'drug_7',
    ];
}

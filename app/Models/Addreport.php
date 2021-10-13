<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addreport extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'file',
        'user_id',
        'doctor_id',
    ];
}

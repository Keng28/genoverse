<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quiz_1',
        'quiz_2',
        'quiz_2_1',

    ];
    public function user(){
        return $this -> hasOne(User::class,'id','user_id');
    }

}


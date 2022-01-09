<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fill1',
        'fill2',
        'fill3',

    ];
    public function user(){
        return $this -> hasOne(User::class,'id','user_id');
    }

}



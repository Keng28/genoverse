<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Addcalendar extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'user_id',
        'date',
        'time',
        'doctor',
        'link',
        'category',
    ];

    public function user(){
        return $this -> hasOne(User::class,'id','doctor');
    }
}

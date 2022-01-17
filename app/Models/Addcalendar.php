<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

use App\Models\Addcalendar;


class Addcalendar extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'user_id',
        'date',
        'time',
        'time2',
        'doctor',
        'link',
        'note',
        'category',
        'walkin',
    ];

    public function user(){
        return $this -> hasOne(User::class,'id','doctor');
    }

    public function test_function($request)
    {

        $search_type = $request->input('post_test');
        $user = DB::table('addcalendars')->where('category', 'Post-test Counseling')->first();
        //$users = DB::table('addcalendars')->get();
        //return  DB::table('addcalendars')->where('category')->value('Post-test Counseling');
       // foreach ($users as $user)
       // {
           //  var_dump($user->category);
        //}
        return $user;
    }

    
}

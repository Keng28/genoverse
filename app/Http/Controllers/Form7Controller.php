<?php

namespace App\Http\Controllers;

use App\Models\Form7;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Form7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $user = Form7::where('user_id', $id)->first();
        if($user==null){
            $user = Form7::create([
            'user_id' => $id,
            ]);
        }
        
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form7s')
        ->select(
            'form7s.*',
        )
        ->where("user_id",$id)
        ->get();
        
        return view('form7',compact(['getbyid','forms']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form7  $form7
     * @return \Illuminate\Http\Response
     */
    public function show(Form7 $form7)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form7  $form7
     * @return \Illuminate\Http\Response
     */
    public function edit(Form7 $form7)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form7  $form7
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user = Form7::where('user_id', $id)->first();

        if ($user !== null ) {
            DB::table('form7s')
            ->where('user_id', $id)
            ->update([
                'user_id' => $id ,
                'quiz7_1' => request('quiz7_1'),
                'quiz7_1_1' => request('quiz7_1_1'),
                'quiz7_2' => request('quiz7_2'),
                'quiz7_2_1' => request('quiz7_2_1'),
                'quiz7_3' => request('quiz7_3'),
                'quiz7_3_1' => request('quiz7_3_1'),
                'quiz7_4' => request('quiz7_4'),
                'quiz7_4_1' => request('quiz7_4_1'),
                'quiz7_5' => request('quiz7_5'),
                'quiz7_5_1' => request('quiz7_5_1'),
                'quiz7_6' => request('quiz7_6'),
                'quiz7_6_1' => request('quiz7_6_1'),
                'quiz7_7' => request('quiz7_7'),
                'quiz7_7_1' => request('quiz7_7_1'),
                'quiz7_8' => request('quiz7_8'),
                'quiz7_8_1' => request('quiz7_8_1'),
                'quiz7_9' => request('quiz7_9'),
                'quiz7_9_1' => request('quiz7_9_1'),
                'quiz7_10' => request('quiz7_10'),
                'quiz7_10_1' => request('quiz7_10_1'),


                
            ]);
        } else {
            $user = Form7::create([
            'user_id' => $id,
            ]);
        }
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form7  $form7
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form7 $form7)
    {
        //
    }
}
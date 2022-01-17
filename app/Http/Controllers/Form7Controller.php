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
            $user->update([
                'user_id' => $id ,
                'quiz7_1_1' => request('quiz7_1_1'),
                'quiz7_1_2' => request('quiz7_1_2'),
                'quiz7_1_3' => request('quiz7_1_3'),
                'quiz7_1_4' => request('quiz7_1_4'),
                'quiz7_1_5' => request('quiz7_1_5'),
                'quiz7_2_1' => request('quiz7_2_1'),
                'quiz7_2_2' => request('quiz7_2_2'),
                'quiz7_2_3' => request('quiz7_2_3'),
                'quiz7_2_4' => request('quiz7_2_4'),
                'quiz7_2_5' => request('quiz7_2_5'),
                'quiz7_3_1' => request('quiz7_3_1'),
                'quiz7_3_2' => request('quiz7_3_2'),
                'quiz7_3_3' => request('quiz7_3_3'),
                'quiz7_3_4' => request('quiz7_3_4'),
                'quiz7_3_5' => request('quiz7_3_5'),
                'quiz7_4_1' => request('quiz7_4_1'),
                'quiz7_4_2' => request('quiz7_4_2'),
                'quiz7_4_3' => request('quiz7_4_3'),
                'quiz7_4_4' => request('quiz7_4_4'),
                'quiz7_4_5' => request('quiz7_4_5'),
                'quiz7_5_1' => request('quiz7_5_1'),
                'quiz7_5_2' => request('quiz7_5_2'),
                'quiz7_5_3' => request('quiz7_5_3'),
                'quiz7_5_4' => request('quiz7_5_4'),
                'quiz7_5_5' => request('quiz7_5_5'),
                'quiz7_6_1' => request('quiz7_6_1'),
                'quiz7_6_2' => request('quiz7_6_2'),
                'quiz7_6_3' => request('quiz7_6_3'),
                'quiz7_6_4' => request('quiz7_6_4'),
                'quiz7_6_5' => request('quiz7_6_5'),
                'quiz7_7_1' => request('quiz7_7_1'),
                'quiz7_7_2' => request('quiz7_7_2'),
                'quiz7_7_3' => request('quiz7_7_3'),
                'quiz7_7_4' => request('quiz7_7_4'),
                'quiz7_7_5' => request('quiz7_7_5'),
                'quiz7_8_1' => request('quiz7_8_1'),
                'quiz7_8_2' => request('quiz7_8_2'),
                'quiz7_8_3' => request('quiz7_8_3'),
                'quiz7_8_4' => request('quiz7_8_4'),
                'quiz7_8_5' => request('quiz7_8_5'),
                'quiz7_9_1' => request('quiz7_9_1'),
                'quiz7_9_2' => request('quiz7_9_2'),
                'quiz7_9_3' => request('quiz7_9_3'),
                'quiz7_9_4' => request('quiz7_9_4'),
                'quiz7_9_5' => request('quiz7_9_5'),
                'quiz7_10_1'=> request('quiz7_10_1'),
                'quiz7_10_2'=> request('quiz7_10_2'),
                'quiz7_10_3'=> request('quiz7_10_3'),
                'quiz7_10_4'=> request('quiz7_10_4'),
                'quiz7_10_5'=> request('quiz7_10_5'),
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
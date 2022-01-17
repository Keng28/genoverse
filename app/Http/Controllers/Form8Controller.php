<?php

namespace App\Http\Controllers;

use App\Models\Form8;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Form8Controller extends Controller
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
        $user = Form8::where('user_id', $id)->first();
        if($user==null){
            $user = Form8::create([
            'user_id' => $id,
            ]);
        }
        
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form8s')
        ->select(
            'form8s.*',
        )
        ->where("user_id",$id)
        ->get();
        
        return view('form8',compact(['getbyid','forms']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form8  $form8
     * @return \Illuminate\Http\Response
     */
    public function show(Form8 $form8)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form8  $form8
     * @return \Illuminate\Http\Response
     */
    public function edit(Form8 $form8)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form8  $form8
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Form8::where('user_id', $id)->first();
        
        $quiz8_1_0 = $request->quiz8_1 == 1;
        $quiz8_1_1 = $request->quiz8_1 == 2;
        $quiz8_1_2 = $request->quiz8_1 == 3;
        
        $quiz8_2_0 = $request->quiz8_2 == 1;
        $quiz8_2_1 = $request->quiz8_2 == 2;
        $quiz8_2_2 = $request->quiz8_2 == 3;

        $quiz8_3_0 = $request->quiz8_3 !== 4 ;
        $quiz8_3 = $request->quiz8_3 == 4;

        if($quiz8_1_0){
            $user->update([
                'user_id' => $id ,
                'quiz8_1' => request('quiz8_1'),
                'quiz8_1_1_1' => null,
                'quiz8_1_1_2' => null,
                'quiz8_1_1_3' => null,
                'quiz8_1_2_1' => null,
                'quiz8_1_2_2' => null,
                'quiz8_1_2_3' => null,
                'quiz8_1_2_4' => null,
            ]);
        }

        if($quiz8_2_0){
            $user->update([
                'user_id' => $id ,
                'quiz8_2' => request('quiz8_2'),
                'quiz8_2_1_1' => null,
                'quiz8_2_1_2' => null,
                'quiz8_2_1_3' => null,
                'quiz8_1_2_4' => null,
                'quiz8_1_2_5' => null,
                'quiz8_2_2_1' => null,
                'quiz8_2_2_2' => null,
                'quiz8_2_2_3' => null,
                'quiz8_2_2_4' => null,
            ]);
        }

        // if($quiz8_3_0){
        //     $user->update([
        //         'user_id' => $id ,
        //         'quiz8_3' => request('quiz8_3'),
        //         'quiz8_3_1' => null,
        //         'quiz8_3_2' => null,
        //         'quiz8_3_3' => null,
        //         'quiz8_3_4' => null, 
        //     ]);
        // }

        if($quiz8_1_1){
            $user->update([
                'user_id' => $id ,

                'quiz8_1' => request('quiz8_1'),
                'quiz8_1_1_1' => request('quiz8_1_1_1'),
                'quiz8_1_1_2' => request('quiz8_1_1_2'),
                'quiz8_1_1_3' => request('quiz8_1_1_3'),
                'quiz8_1_2_1' => null,
                'quiz8_1_2_2' => null,
                'quiz8_1_2_3' => null,
                'quiz8_1_2_4' => null,
            ]);
        }elseif($quiz8_1_2){
            $user->update([
                'user_id' => $id ,

                'quiz8_1' => request('quiz8_1'),
                'quiz8_1_1_1' => null,
                'quiz8_1_1_2' => null,
                'quiz8_1_1_3' => null,
                'quiz8_1_2_1' => request('quiz8_1_2_1'),
                'quiz8_1_2_2' => request('quiz8_1_2_2'),
                'quiz8_1_2_3' => request('quiz8_1_2_3'),
                'quiz8_1_2_4' => request('quiz8_1_2_4'),
            ]);

        }

        if($quiz8_2_1){
            $user->update([
                'user_id' => $id ,

                'quiz8_2' => request('quiz8_2'),
                'quiz8_2_1_1' => request('quiz8_2_1_1'),
                'quiz8_2_1_2' => request('quiz8_2_1_2'),
                'quiz8_2_1_3' => request('quiz8_2_1_3'),
                'quiz8_1_2_4' => request('quiz8_1_2_4'),
                'quiz8_1_2_5' => request('quiz8_1_2_5'),
                'quiz8_2_2_1' => null,
                'quiz8_2_2_2' => null,
                'quiz8_2_2_3' => null,
                'quiz8_2_2_4' => null,

            ]);
        }elseif($quiz8_2_2){
            $user->update([
                'user_id' => $id ,

                'quiz8_2' => request('quiz8_2'),
                'quiz8_2_1_1' => null,
                'quiz8_2_1_2' => null,
                'quiz8_2_1_3' => null,
                'quiz8_1_2_4' => null,
                'quiz8_1_2_5' => null,
                'quiz8_2_2_1' => request('quiz8_2_2_1'),
                'quiz8_2_2_2' => request('quiz8_2_2_2'),
                'quiz8_2_2_3' => request('quiz8_2_2_3'),
                'quiz8_2_2_4' => request('quiz8_2_2_4'),
            ]);

        }

        if($quiz8_3){
            $user->update([
                'user_id' => $id ,

                'quiz8_3' => request('quiz8_3'),
                'quiz8_3_1' => request('quiz8_3_1'),
                'quiz8_3_2' => request('quiz8_3_2'),
                'quiz8_3_3' => request('quiz8_3_3'),
                'quiz8_3_4' => request('quiz8_3_4'),
                
            ]);

        } else {
            $user->update([
                'user_id' => $id ,
                'quiz8_3' => request('quiz8_3'),
                'quiz8_3_1' => null,
                'quiz8_3_2' => null,
                'quiz8_3_3' => null,
                'quiz8_3_4' => null, 
            ]);
        }
        // if ($user !== null && $request->quiz8_1 == 2) {
        //     $user->update([
        //         'user_id' => $id ,

        //         'quiz8_1' => request('quiz8_1'),
        //         'quiz8_1_1_1' => request('quiz8_1_1_1'),
        //         'quiz8_1_1_2' => request('quiz8_1_1_2'),
        //         'quiz8_1_1_3' => request('quiz8_1_1_3'),
        //         'quiz8_1_2_1' => null,
        //         'quiz8_1_2_2' => null,
        //         'quiz8_1_2_3' => null,
        //         'quiz8_1_2_4' => null,

        //         'quiz8_2' => request('quiz8_2'),
        //         'quiz8_2_1_1' => request('quiz8_2_1_1'),
        //         'quiz8_2_1_2' => request('quiz8_2_1_2'),
        //         'quiz8_2_1_3' => request('quiz8_2_1_3'),
        //         'quiz8_2_1_4' => request('quiz8_2_1_4'),
        //         'quiz8_2_1_5' => request('quiz8_2_1_5'),

        //         'quiz8_2_2_1' => request('quiz8_2_2_1'),
        //         'quiz8_2_2_2' => request('quiz8_2_2_2'),
        //         'quiz8_2_2_3' => request('quiz8_2_2_3'),
        //         'quiz8_2_2_4' => request('quiz8_2_2_4'),

        //         'quiz8_3' => request('quiz8_3'),
        //         'quiz8_3_1' => request('quiz8_3_1'),
        //         'quiz8_3_2' => request('quiz8_3_2'),
        //         'quiz8_3_3' => request('quiz8_3_3'),
        //         'quiz8_3_4' => request('quiz8_3_4'),
                
        //     ]);
        // } elseif($user !== null && $request->quiz8_1 == 3){
        //     $user->update([
        //         'user_id' => $id ,

        //         'quiz8_1' => request('quiz8_1'),
        //         'quiz8_1_1_1' => null,
        //         'quiz8_1_1_2' => null,
        //         'quiz8_1_1_3' => null,
        //         'quiz8_1_2_1' => request('quiz8_1_2_1'),
        //         'quiz8_1_2_2' => request('quiz8_1_2_2'),
        //         'quiz8_1_2_3' => request('quiz8_1_2_3'),
        //         'quiz8_1_2_4' => request('quiz8_1_2_4'),

        //         'quiz8_2' => request('quiz8_2'),
        //         'quiz8_2_1_1' => request('quiz8_2_1_1'),
        //         'quiz8_2_1_2' => request('quiz8_2_1_2'),
        //         'quiz8_2_1_3' => request('quiz8_2_1_3'),
        //         'quiz8_2_1_4' => request('quiz8_2_1_4'),
        //         'quiz8_2_1_5' => request('quiz8_2_1_5'),

        //         'quiz8_2_2_1' => request('quiz8_2_2_1'),
        //         'quiz8_2_2_2' => request('quiz8_2_2_2'),
        //         'quiz8_2_2_3' => request('quiz8_2_2_3'),
        //         'quiz8_2_2_4' => request('quiz8_2_2_4'),

        //         'quiz8_3' => request('quiz8_3'),
        //         'quiz8_3_1' => request('quiz8_3_1'),
        //         'quiz8_3_2' => request('quiz8_3_2'),
        //         'quiz8_3_3' => request('quiz8_3_3'),
        //         'quiz8_3_4' => request('quiz8_3_4'),
                
        // ]);

      
        if($user == null ) {
            $user = Form8::create([
            'user_id' => $id,
            ]);
        }
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form8  $form8
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form8 $form8)
    {
        //
    }
}
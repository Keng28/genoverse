<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Form9;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class Form9Controller extends Controller
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
        $user = Form9::where('user_id', $id)->first();
        if($user==null){
            $user = Form9::create([
            'user_id' => $id,
            'quiz9_1' => $request->quiz9_1,
            'quiz9_2' => $request->quiz9_2,
            'quiz9_3' => $request->quiz9_3,
            ]);
        }
        
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form9s')
        ->select(
            'form9s.*',
        )
        ->where("user_id",$id)
        ->get();
        
        return view('form9',compact(['getbyid','forms']));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form9  $form9
     * @return \Illuminate\Http\Response
     */
    public function show(Form9 $form9)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form9  $form9
     * @return \Illuminate\Http\Response
     */
    public function edit(Form9 $form9)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form9  $form9
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request,$id)
    {
        $user = Form9::where('user_id', $id)->first();
        
        if ($user !== null ) {
            $user->update([
                'user_id' => $id ,
                'quiz9_1' => $request->quiz9_1,
                'quiz9_2' => request('quiz9_2'),
                'quiz9_3' => request('quiz9_3'),
                
            ]);
        } else {
            $user = Form9::create([
            'user_id' => $id,
            'quiz9_1' => $request->quiz9_1,
            'quiz9_2' => request('quiz9_2'),
            'quiz9_3' => request('quiz9_3'),
            ]);
        }
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form9  $form9
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form9 $form9)
    {
        //
    }
}
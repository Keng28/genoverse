<?php

namespace App\Http\Controllers;

use App\Models\Form4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form4Controller extends Controller
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
        // dump($request);
        $user = Form4::where('user_id', $id)->first();
        if($user==null){
            $user = Form4::create([
            'user_id' => $id,
            ]);
        }
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form4s')
        ->select(
            'form4s.*',
        )
        ->where("user_id",$id)
        ->get();

        return view('form4',compact(['getbyid','forms']));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function show(Form4 $form4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function edit(Form4 $form4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Form4::where('user_id', $id)->first();

        if(request('quiz4_1')==1){
            DB::table('form4s')
            ->where('user_id', $id)
            ->update(array(
            'user_id' => $id ,
            'quiz4_1'=> request('quiz4_1'),
            'quiz4_1_1'=> request('quiz4_1_1'),
            'quiz4_1_2'=> request('quiz4_1_2'),
            'quiz4_1_3'=> request('quiz4_1_3'),

            'quiz4_2_1'=> null,
            'quiz4_2_2'=> null,
            'quiz4_2_3'=> null,
            ));

        }else{
            DB::table('form4s')
            ->where('user_id', $id)
            ->update(array(
            'user_id' => $id ,
            'quiz4_1'=> request('quiz4_1'),
            'quiz4_1_1'=> null,
            'quiz4_1_2'=> null,
            'quiz4_1_3'=> null,

            'quiz4_2_1'=> request('quiz4_2_1'),
            'quiz4_2_2'=> request('quiz4_2_2'),
            'quiz4_2_3'=> request('quiz4_2_3'),

            ));
        }
         
            
            if($user == null ) {
            $user = Form4::create([
            'user_id' => $id,
            ]);
        }
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form4 $form4)
    {
        //
    }
}

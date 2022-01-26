<?php

namespace App\Http\Controllers;

use App\Models\Form3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Form3Controller extends Controller
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
        $user = Form3::where('user_id', $id)->first();
        if($user==null){
            $user = Form3::create([
            'user_id' => $id,
            ]);
        }

        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form3s')
        ->select(
            'form3s.*',
        )
        ->where("user_id",$id)
        ->get();

        $cancers = DB::table('cancers')
        ->select(
            'cancers.*',
        )
        ->where("user_id",$id)
        ->get();

        return view('form3',compact(['getbyid','forms','cancers']));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function show(Form3 $form3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function edit(Form3 $form3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Form3::where('user_id', $id)->first();

        
            DB::table('form3s')
            ->where('user_id', $id)
            ->update(array(
            'user_id' => $id ,

            'quiz3_1'=> request('quiz3_1'),
            'quiz3_2'=> request('quiz3_2'),
            'quiz3_2_1'=> request('quiz3_2_1'),
            'quiz3_2_2'=> request('quiz3_2_2'),
            'quiz3_2_3'=> request('quiz3_2_3'),
            'quiz3_2_4'=> request('quiz3_2_4'),
            'quiz3_2_5'=> request('quiz3_2_5'),

            'quiz3_3_1'=> request('quiz3_3_1'),
            'quiz3_3_2'=> request('quiz3_3_2'),
            'quiz3_3_3'=> request('quiz3_3_3'),
            'quiz3_3_4'=> request('quiz3_3_4'),
            'quiz3_3_5'=> request('quiz3_3_5'),
            'quiz3_3_6'=> request('quiz3_3_6'),
            'quiz3_3_7'=> request('quiz3_3_7'),
            
            ));

        if($request->cancer3_1 != null){
            $food = DB::table('cancers')->insert([
            'user_id' => $id,
            'cancer3_1'=> request('cancer3_1'),
            'cancer3_2'=> request('cancer3_2'),
            'cancer3_3'=> request('cancer3_3'),
            'cancer3_4'=> request('cancer3_4'),
            'cancer3_5'=> request('cancer3_5'),
            ]);
        }

        
         
            
            if($user == null ) {
            $user = Form3::create([
            'user_id' => $id,
            ]);
        }
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form3 $form3)
    {
        //
    }
    public function delete($id)
    {
       $delete = DB::table('cancers')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
          

    }
}

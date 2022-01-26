<?php

namespace App\Http\Controllers;

use App\Models\Form5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Form5Controller extends Controller
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
        $user = Form5::where('user_id', $id)->first();
        if($user==null){
            $user = Form5::create([
            'user_id' => $id,
            ]);
        }

        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form5s')
        ->select(
            'form5s.*',
        )
        ->where("user_id",$id)
        ->get();

        $drug = DB::table('drugs')
        ->select(
            'drugs.*',
        )
        ->where("user_id",$id)
        ->get();

        $health = DB::table('food_healths')
        ->select(
            'food_healths.*',
        )
        ->where("user_id",$id)
        ->get();


        

        return view('form5',compact(['getbyid','forms','drug','health']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function show(Form5 $form5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function edit(Form5 $form5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Form5::where('user_id', $id)->first();

        DB::table('form5s')
            ->where('user_id', $id)
            ->update(array(
            'user_id' => $id ,
            'quiz5_1'=> request('quiz5_1'),
            'quiz5_2'=> request('quiz5_2'),

            'quiz5_2_1_1'=> request('quiz5_2_1_1'),
            'quiz5_2_1_2'=> request('quiz5_2_1_2'),

            'quiz5_2_2_1'=> request('quiz5_2_2_1'),
            'quiz5_2_2_2'=> request('quiz5_2_2_2'),

            ));

        if($request->drug_1 != null){
            $food = DB::table('drugs')->insert([
            'user_id' => $id,
            'drug_1'=> request('drug_1'),
            'drug_2'=> request('drug_2'),
            'drug_3'=> request('drug_3'),
            'drug_4'=> request('drug_4'),
            'drug_5'=> request('drug_5'),
            'drug_6'=> request('drug_6'),
            'drug_7'=> request('drug_7'),
            ]);
        }

        if($request->health_1 != null){
            $food = DB::table('food_healths')->insert([
            'user_id' => $id,
            'health_1'=> request('health_1'),
            'health_2'=> request('health_2'),
            'health_3'=> request('health_3'),
            'health_4'=> request('health_4'),
            'health_5'=> request('health_5'),
            'health_6'=> request('health_6'),
            'health_7'=> request('health_7'),
            
            
            ]);
        }

            
        if($user == null ) {
            $user = Form5::create([
            'user_id' => $id,
            ]);
        }
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form5 $form5)
    {
        //
    }
    public function delete($id)
    {
       $delete = DB::table('drugs')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
          

    }
    public function delete3($id)
    {
       $delete = DB::table('food_healths')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
          

    }
}

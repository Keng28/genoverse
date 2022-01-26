<?php

namespace App\Http\Controllers;

use App\Models\Form2;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Form2Controller extends Controller
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
    //   $request->validate(
    //         [
    //             'user_id'=>'required',
    //             'quiz2_1'=>'required',
    //             'quiz2_1_1'=>'required',
    //             'quiz2_1_2'=>'required',
    //         ],
    //         [
    //             'date.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
    //             'date.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
    //         ]
    //     );



        //dd($request);
        $user = Form2::where('user_id', $id)->first();
        if($user==null){
            $user = Form2::create([
            'user_id' => $id,
            ]);
        }
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms = DB::table('form2s')
        ->select(
            'form2s.*',
        )
        ->where("user_id",$id)
        ->get();
        //$request->flash();
        //$request->session()->flash('quiz2_28_3', 'true');
        //dd($request);
        

        return view('form2',compact(['getbyid','forms','request']));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function show(Form2 $form2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function edit(Form2 $form2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $user = Form2::where('user_id', $id)->first(); 
        
        DB::table('form2s')
            ->where('user_id', $id)
            ->update(array(
        'user_id' => $id ,
        'quiz2_1'=> request('quiz2_1'),
        'quiz2_1_1'=> request('quiz2_1_1'),
        'quiz2_1_2'=> request('quiz2_1_2'),

        'quiz2_2'=> request('quiz2_2'),
        'quiz2_2_1'=> request('quiz2_2_1'),
        'quiz2_2_2'=> request('quiz2_2_2'),

        'quiz2_3'=> request('quiz2_3'),
        'quiz2_3_1'=> request('quiz2_3_1'),
        'quiz2_3_2'=> request('quiz2_3_2'),

        'quiz2_4'=> request('quiz2_4'),
        'quiz2_4_1'=> request('quiz2_4_1'),
        'quiz2_4_2'=> request('quiz2_4_2'),
        
        'quiz2_5'=> request('quiz2_5'),
        'quiz2_5_1'=> request('quiz2_5_1'),
        'quiz2_5_2'=> request('quiz2_5_2'),

        'quiz2_6'=> request('quiz2_6'),
        'quiz2_6_1'=> request('quiz2_6_1'),
        'quiz2_6_2'=> request('quiz2_6_2'),

        'quiz2_7'=> request('quiz2_7'),
        'quiz2_7_1'=> request('quiz2_7_1'),
        'quiz2_7_2'=> request('quiz2_7_2'),

        'quiz2_8'=> request('quiz2_8'),
        'quiz2_8_1'=> request('quiz2_8_1'),
        'quiz2_8_2'=> request('quiz2_8_2'),

        'quiz2_9'=> request('quiz2_9'),
        'quiz2_9_1'=> request('quiz2_9_1'),
        'quiz2_9_2'=> request('quiz2_9_2'),

        'quiz2_10'=> request('quiz2_10'),
        'quiz2_10_1'=> request('quiz2_10_1'),
        'quiz2_10_2'=> request('quiz2_10_2'),

        'quiz2_11'=> request('quiz2_11'),
        'quiz2_11_1'=> request('quiz2_11_1'),
        'quiz2_11_2'=> request('quiz2_11_2'),

        'quiz2_12'=> request('quiz2_12'),
        'quiz2_12_1'=> request('quiz2_12_1'),
        'quiz2_12_2'=> request('quiz2_12_2'),

        'quiz2_13'=> request('quiz2_13'),
        'quiz2_13_1'=> request('quiz2_13_1'),
        'quiz2_13_2'=> request('quiz2_13_2'),

        'quiz2_14'=> request('quiz2_14'),
        'quiz2_14_1'=> request('quiz2_14_1'),
        'quiz2_14_2'=> request('quiz2_14_2'),

        'quiz2_15'=> request('quiz2_15'),
        'quiz2_15_1'=> request('quiz2_15_1'),
        'quiz2_15_2'=> request('quiz2_15_2'),

        'quiz2_16'=> request('quiz2_16'),
        'quiz2_16_1'=> request('quiz2_16_1'),
        'quiz2_16_2'=> request('quiz2_16_2'),

        'quiz2_17'=> request('quiz2_17'),
        'quiz2_17_1'=> request('quiz2_17_1'),
        'quiz2_17_2'=> request('quiz2_17_2'),

        'quiz2_18'=> request('quiz2_18'),
        'quiz2_18_1'=> request('quiz2_18_1'),
        'quiz2_18_2'=> request('quiz2_18_2'),
        
        'quiz2_19'=> request('quiz2_19'),
        'quiz2_19_1'=> request('quiz2_19_1'),
        'quiz2_19_2'=> request('quiz2_19_2'),

        'quiz2_20'=> request('quiz2_20'),
        'quiz2_20_1'=> request('quiz2_20_1'),
        'quiz2_20_2'=> request('quiz2_20_2'),

        'quiz2_21'=> request('quiz2_21'),
        'quiz2_21_1'=> request('quiz2_21_1'),
        'quiz2_21_2'=> request('quiz2_21_2'),

        'quiz2_22'=> request('quiz2_22'),
        'quiz2_22_1'=> request('quiz2_22_1'),
        'quiz2_22_2'=> request('quiz2_22_2'),

        'quiz2_23'=> request('quiz2_23'),
        'quiz2_23_1'=> request('quiz2_23_1'),
        'quiz2_23_2'=> request('quiz2_23_2'),

        'quiz2_24'=> request('quiz2_24'),
        'quiz2_24_1'=> request('quiz2_24_1'),
        'quiz2_24_2'=> request('quiz2_24_2'),
        
        'quiz2_25'=> request('quiz2_25'),
        'quiz2_25_1'=> request('quiz2_25_1'),
        'quiz2_25_2'=> request('quiz2_25_2'),

        'quiz2_26'=> request('quiz2_26'),
        'quiz2_26_1'=> request('quiz2_26_1'),
        'quiz2_26_2'=> request('quiz2_26_2'),

        'quiz2_27'=> request('quiz2_27'),
        'quiz2_27_1'=> request('quiz2_27_1'),
        'quiz2_27_2'=> request('quiz2_27_2'),

        'quiz2_28'=> request('quiz2_28'),
        'quiz2_28_1'=> request('quiz2_28_1'),
        'quiz2_28_2'=> request('quiz2_28_2'),
        'quiz2_28_3' => request('quiz2_28_3'),
        'quiz2_28_4'=> request('quiz2_28_4'),

        
        
        ));

        //$request->session()->flash('quiz2_28_3', 'true');
        //dd($request);
            
            
            if($user == null ) {
            $user = Form2::create([
            'user_id' => $id,
            ]);
        }

        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form2 $form2)
    {
        //
    }
}
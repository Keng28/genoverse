<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Form1;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Form1Controller extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function show(Form1 $form1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function edit(Form1 $form1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form1 $form1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form1 $form1)
    {
        //
    }

    public function updateForm1(Request $request,$id){

        //ตรวจสอบข้อมูล
        $user = Form1::where('user_id', $id)->first();
        if($user==null){
            $user = Form1::create([
            'user_id' => $id,
            'quiz_1' => $request->quiz_1,
            'quiz_2' => $request->quiz_2,
            'quiz_2_1' => $request->quiz_2_1,
            ]);
        }
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $forms1 = collect([]);
        $forms1 = DB::table('form1s')
        ->select(
            'form1s.*',
        )
        ->where("user_id",$id)
        ->get();

        


   

//dd($forms1);


        return view('form1',compact(['getbyid','forms1']));

    }

    public function update2(Request $request,$id){
        //ตรวจสอบข้อมูล
        //dd($request);

        $user = Form1::where('user_id', $id)->first();
        
        if ($user !== null && $request->quiz_2 == 11) {
            $user->update([
                'user_id' => $id ,
                'quiz_1' => $request->quiz_1,
                'quiz_2' => request('quiz_2'),
                'quiz_2_1' => request('quiz_2_1'),
                
            ]);
        } elseif($user !== null && $request->quiz_2 !== 11){
            $user->update([
                'user_id' => $id ,
                'quiz_1' => $request->quiz_1,
                'quiz_2' => request('quiz_2'),
                'quiz_2_1' => null,
        ]);

        } else {
            $user = Form1::create([
            'user_id' => $id,
            'quiz_1' => $request->quiz_1,
            'quiz_2' => $request->quiz_2,
            'quiz_2_1' => $request->quiz_2_1,
            ]);
        }

        // return response()->json([
        //     'resultCode'=> "20000",
        //     'resultDescription'=> "Success",
        //     'req'=> $request,
        //     'id'=> $id,
        //     'gg'=> $product,
        //   ], 200);
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ",'getbyid');

        //return view('form1',compact(['getbyid','forms1']));

    }

    public function storeForm1(Request $request){
        //ตรวจสอบข้อมูล

        $data = new Form1;
        $data->user_id =  $request->user_id;
        $data->quiz_1 =  $request->quiz_1;
        $data->quiz_2 =  $request->quiz_2;
        $data->quiz_2_1 =  $request->quiz_2_1;
        error_log($data);

        $data->save();


        //dd($data);

   

//dd($forms1);


        return view('form1',compact(['getbyid','forms1']));

    }
}
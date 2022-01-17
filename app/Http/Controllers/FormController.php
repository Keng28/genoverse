<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Form;



use Illuminate\Http\Request;



class FormController extends Controller
{
    public function index(){
        $form1=Form::all();
        $form1 = Form::onlyTrashed()->paginate(3);
        return view('form1',compact('form1'));
    }

    public function view($id){
        $user= User::find($id);
        return view('user.menu2',compact('user'));
    }

    public function store(Request $request){
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'date'=>'required',
                'time'=>'required',
                'time2'=>'required',
                'link'=>'required',
            ],
            [
                'date.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                'date.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            ]
        );
 
        //บันทึกข้อมูล
        $data = new Form;
        $data->category =  $request->category;
        $data->date =  $request->date;
        $data->time =  $request->time;

        $data->time2 =  $request->time2;
        $data->link =  $request->link;
        $data->doctor =  Auth::user()->id;
        error_log($data);
        $data->save();
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }


    public function storeForm1(Request $request){
        //ตรวจสอบข้อมูล
 

        DB::table('form1')->insert([
            'user_id' => Auth::user()->id,
            'quiz_1' => $request->quiz_1 ,
            'quiz_2' => $request->quiz_2 ,
            'quiz_2_1' => $request->quiz_2_1 ,
        ]);
        //บันทึกข้อมูล
        // $data = new Form;
        // $data->user_id  =  Auth::user()->id;
        // $data->quiz_1   =  $request->quiz_1;
        // $data->quiz_2   =  $request->quiz_2;
        // $data->quiz_2_1 =  $request->quiz_2_1;

        // error_log($data);
        // $data->save();
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    public function updateForm1(Request $request){
        //ตรวจสอบข้อมูล

        $gg = Auth::user()->id;
       
        $object = Form::find($id)->update([

            'user_id'=>Auth::user()->id
        ]);

        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'id'=> $id,
            'gg'=> $object,
          ], 200);
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }



    
}

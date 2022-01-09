<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


    
}

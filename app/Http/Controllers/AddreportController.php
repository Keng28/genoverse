<?php

namespace App\Http\Controllers;

use App\Models\Addreport;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




use Illuminate\Http\Request;

class AddreportController extends Controller
{
   
    public function index(){
        $user=User::all();
        //$calendars = Addcalendar::onlyTrashed()->paginate(3);
        //dd($user);
        return view('admin.menu3',compact('user'));
    }
   
    public function store(Request $request){
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'category'=>'required',
                'file'=>'required',
            ],
            [
                'category.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                'file.required'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            ]
        );
 


        //บันทึกข้อมูล
        $data = new Addreport;
        $data->category =  $request->category;
        $data->file =  $request->file;
        $data->doctor_id =  Auth::user()->id;
        
        $data->user_id = Auth::user()->id;
        $data->save();

        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }
}

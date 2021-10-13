<?php

namespace App\Http\Controllers;
use App\Models\Addcalendar;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AddcalendarController extends Controller
{

    public function index(){
        $calendar=Addcalendar::all();
        $calendars = Addcalendar::onlyTrashed()->paginate(3);

        return view('admin.menu2',compact('calendar'));
    }


    public function index2(){
        $calendar2=Addcalendar::all();
        //dd($calendar2);

        return view('user.menu3',compact('calendar2'));
    }


    public function store(Request $request){
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'date'=>'required|unique:addcalendars',
                'time'=>'required|unique:addcalendars',
                'link'=>'required|unique:addcalendars',
            ],
            [
                'date.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                'date.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            ]
        );
 


        //บันทึกข้อมูล
        $data = new Addcalendar;
        $data->category =  $request->category;
        $data->date =  $request->date;
        $data->time =  $request->time;
        $data->link =  $request->link;
        $data->doctor =  Auth::user()->id;
        $data->save();
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    public function update(Request $request, $id){
        $update = Addcalendar::find($id)->update([
            'link'=>$request->link,

            'user_id'=>Auth::user()->id
        ]);

        //return redirect()->back()->with('success',"บันทึกสำเร็จ");
        return redirect()->route('addCalenderindex2')->with('success',"อัพเดตข้อมูลเรียบร้อย");

        //return redirect()->route('department')->with('success',"บันทึกสำเร็จ");
    }





    public function delete($id){
        //key หลัก find
        //$res=Addcalendar::where('id',$id)->delete();
        $delete = Addcalendar::find($id)->delete();

        //$delete = Addcalendar::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลสำเร็จ");
    }

    public function deletes(Addcalendar $product)
    {
        $product->delete();
        return redirect()->back()->with('success',"ลบข้อมูลสำเร็จ");

    }



    
}

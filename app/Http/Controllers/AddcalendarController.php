<?php

namespace App\Http\Controllers;

use App\Models\Addcalendar;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AddcalendarController extends Controller
{

    public function index(){
        //$calendar=Addcalendar::all();

        //$calendar = Addcalendar::where('category', '=', 'Pre-test Counseling')->get();
        $flag = 1;
 
        $calendar = DB::table("addcalendars")
        ->leftJoin("users", function($join){
            $join->on("addcalendars.user_id", "=", "users.id");
        })
        ->leftJoin("users as a", function($join){
            $join->on("addcalendars.doctor", "=", "a.id");
        })
        ->where('category', '=', 'Pre-test Counseling')
        ->orderBy('addcalendars.date','ASC')
        ->orderBy('addcalendars.time','ASC')
        ->select("addcalendars.*","users.name as NameUsers" , "a.name as DoctorUsers")
        ->get();
        
        return view('admin.menu2',compact(['flag','calendar']));
    }


    public function index2(){
        $flag = 2;

        $calendar = DB::table("addcalendars")
        ->leftJoin("users", function($join){
            $join->on("addcalendars.user_id", "=", "users.id");
        })
        ->leftJoin("users as a", function($join){
            $join->on("addcalendars.doctor", "=", "a.id");
        })
        ->where('category', '=', 'Blood Collection')
        ->orderBy('addcalendars.date','ASC')
        ->orderBy('addcalendars.time','ASC')
        ->select("addcalendars.*","users.name as NameUsers" , "a.name as DoctorUsers")
        ->get();

        //$calendar = Addcalendar::where('category', '=', 'Blood Collection')->get();
        //dd($calendar2);
        return view('admin.menu2',compact(['calendar','flag']));

    }


    public function index3(){
        $flag = 3;

        $calendar = DB::table("addcalendars")
        ->leftJoin("users", function($join){
            $join->on("addcalendars.user_id", "=", "users.id");
        })
        ->leftJoin("users as a", function($join){
            $join->on("addcalendars.doctor", "=", "a.id");
        })
        ->where('category', '=', 'Post-test Counseling')
        ->orderBy('addcalendars.date','ASC')
        ->orderBy('addcalendars.time','ASC')
        ->select("addcalendars.*","users.name as NameUsers" , "a.name as DoctorUsers")
        ->get();

        //$calendar = Addcalendar::where('category', '=', 'Post-test Counseling')->get();
        //dd($calendar2);
        //return redirect()->back();
        return view('admin.menu2',compact(['calendar','flag']));

    }


    public function store(Request $request){
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
        $data = new Addcalendar;
        $data->category =  $request->category;
        $data->date =  $request->date;
        $data->time =  $request->time;

        $data->time2 =  $request->time2;
        $data->link =  $request->link;
        $data->walkin =  $request->walkin;

        $data->doctor =  Auth::user()->id;
        error_log($data);
        $data->save();
        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'request->walkin'=> $request->walkin,
          ], 200);
        //ตรวจสอบข้อมูล
        // $request->validate(
        //     [
        //         'date'=>'required',
        //         'time'=>'required',
        //         'time2'=>'required',
        //         'link'=>'required',
        //     ],
        //     [
        //         'date.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
        //         'date.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
        //     ]
        // );
 
        // //บันทึกข้อมูล
        // $data = new Addcalendar;
        // $data->category =  $request->category;
        // $data->date =  $request->date;
        // $data->time =  $request->time;

        // $data->time2 =  $request->time2;
        // $data->link =  $request->link;
        // $data->doctor =  Auth::user()->id;
        // error_log($data);
        // $data->save();
        
        // return redirect()->back()->with('success',"บันทึกสำเร็จ");
    }

    public function update(Request $request, $id){
        $gg = Auth::user()->id;
        
        $update = Addcalendar::find($id)->update([

            'user_id'=>Auth::user()->id
        ]);

        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'id'=> $id,
            'gg'=> $gg,
          ], 200);
        //return redirect()->back()->with('success',"บันทึกสำเร็จ");
        
        
        //return redirect()->route('addCalenderindex2')->with('success',"อัพเดตข้อมูลเรียบร้อย");

        //return redirect()->route('department')->with('success',"บันทึกสำเร็จ");
    }

    public function delete(Request $request){
        $id = $request->id;
        error_log($request);
        //key หลัก find
        //$res=Addcalendar::where('id',$id)->delete();
        $delete = DB::table('addcalendars')->where('id', '=', $id)->delete();
        //$delete = Addcalendar::find($id)->delete();

        //$delete = Addcalendar::onlyTrashed()->find($id)->forceDelete();
        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'id'=> $id,
          ], 200);
          
          
    }

    public function deleteuser(Request $request){
        $id = $request->id;
        $delete = Addcalendar::find($id)->update([
            'user_id'=>null
        ]);

    return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'id'=> $id,
          ], 200);
    }

    public function deletes(Addcalendar $product)
    {
        $product->delete();
        return redirect()->back()->with('success',"ลบข้อมูลสำเร็จ");

    }

    public function pretest(Addcalendar $product)
    {
        $product->delete();
        return redirect()->back()->with('success',"ลบข้อมูลสำเร็จ");

    }

    public function test_function($request)
    {

        $search_type = $request->input('post_test');
        $user = DB::table('addcalendars')->where('category', 'Blood Collection')->first();
        $users = DB::table('addcalendars')->get();
        return  DB::table('addcalendars')->where('category')->value('Post-test Counseling');
        foreach ($users as $user)
        {
             var_dump($user->category);
        }
        return $user;
    }

    public function userindex(){

        $calendar = DB::table("addcalendars")
        ->select(
            'addcalendars.*',
        )
        ->where('user_id', null)
        ->where('date', '>=', Carbon::today()->addDays(4))
        ->orderBy('addcalendars.date','ASC')
        ->get();

        $calendarbyuser_id = DB::table('addcalendars')
        ->leftJoin('users', function ($join) {
            $join->on('addcalendars.doctor', '=', 'users.id');
        })
        ->select(
            'addcalendars.*',
            'users.id as usersId',
            'users.name as usersName',
        )
        ->where('user_id', Auth::user()->id)
        ->get();

        $users = DB::table('users')
               ->rightJoin('addcalendars', 'users.id', '=', 'addcalendars.doctor')
               ->get();

        $userl = DB::table('addcalendars')->get();

        $user = DB::table('users')->get();

        $tmp1 = null;
        $tmp11 = null;
        $tmp2 = null;
        $tmp22 = null;
        $tmp3 = null;
        $tmp33 = null;
        foreach ($calendarbyuser_id as $value) {

            if($value->category == "Pre-test Counseling"){
                $tmp1 = $value;
                $tmp11 = true;
            }
            else if($value->category == "Blood Collection"){
                $tmp2 = $value;
                $tmp22 = true;
            }
            else if($value->category == "Post-test Counseling"){
                $tmp3 = $value;
                $tmp33 = true;
            }

        }
        
        //dd($calendar);
        return view('user.menu3',compact(['user','calendar','tmp1','tmp2','tmp3','tmp11','tmp22','tmp33']));
    }

    public function viewListNote($id){
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $calendar = DB::table('addcalendars')
        ->select(
            'addcalendars.*',
        )
        ->where("addcalendars.user_id",$id)
        ->get();

        //return view('admin.service.index',compact('services'));
        return view('admin.note',compact(['getbyid','calendar']));
    }

    public function viewNote($id){
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

   
        $calendar2 = DB::table("addcalendars")
        ->leftJoin("users", function($join){
            $join->on("addcalendars.user_id", "=", "users.id");
        })
        ->leftJoin("users as a", function($join){
            $join->on("addcalendars.doctor", "=", "a.id");
        })
        ->where("addcalendars.id",$id)
        ->select("addcalendars.*","users.name as NameUsers" , "a.name as DoctorUsers")
        ->get();







        $calendar = DB::table('addcalendars')
        ->select(
            'addcalendars.*',
        )
        ->where("addcalendars.user_id",$id)
        ->get();

        //return view('admin.service.index',compact('services'));
        return view('admin.notedetail',compact(['getbyid','calendar','calendar2']));
    }

    public function updateNote(Request $request, $id){
        $gg = $id;
        //dd($gg);
        $update = Addcalendar::find($id)->update([

           
            'note'=> $request->note,
        ]);

        // return response()->json([
        //     'resultCode'=> "20000",
        //     'resultDescription'=> "Success",
        //     'req'=> $request,
        //     'id'=> $id,
        //     'gg'=> $gg,
        //   ], 200);
        return redirect()->back()->with('success',"บันทึกสำเร็จ");
        
        
        //return redirect()->route('addCalenderindex2')->with('success',"อัพเดตข้อมูลเรียบร้อย");

        //return redirect()->route('department')->with('success',"บันทึกสำเร็จ");
    }





    
}
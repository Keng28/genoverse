<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listname;


use Illuminate\Support\Facades\DB;


class ListnameController extends Controller
{
    public function listname(){
        //$listname = User::all();
        $listname = DB::table('users')
        ->leftJoin('status', function ($join) {
            $join->on('users.status_id', '=', 'status.id');
        })
        ->select(
            'users.*',
            'status.id as statusId',
            'status.status_name as statusName',
        )
        ->where("users.role",0)
        ->orderBy('users.id','ASC')
        ->get();


        
        $Auth = Auth::user();

        error_log('keng');
        error_log($Auth);
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('admin.menu1',compact('listname'));
    }

    public function listname2(){
        $Auth = Auth::user();
        error_log('keng');
        error_log($Auth);
        $id = $Auth->id;
        $getstatusall = DB::table('status')
        ->select(
            'status.id',
            'status.status_name as statusName',
        )
        ->get();

        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        return view('user.menu2',compact(['getstatusall','getbyid']));
    }


    public function view($id){
        $getstatusall = DB::table('status')
        ->select(
            'status.id',
            'status.status_name as statusName',
        )
        ->get();

        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        //$Auth = Auth::user();
        
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('admin.status',compact(['getstatusall','getbyid']));
    }

    public function viewform($id){
        $Auth = Auth::user();
        error_log('keng');
        error_log($Auth);

        if($Auth->role != 1){
            return view('user.dashboard'); 
        }
        $getstatusall = DB::table('status')
        ->select(
            'status.id',
            'status.status_name as statusName',
        )
        ->get();

        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        //$Auth = Auth::user();
        
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('user.menu2',compact(['getstatusall','getbyid']));
    }

    public function viewformadmin($id){
        $Auth = Auth::user();
        error_log('keng');
        error_log($Auth);

        if($Auth->role != 1){
            return view('user.dashboard'); 
        }
        $getstatusall = DB::table('status')
        ->select(
            'status.id',
            'status.status_name as statusName',
        )
        ->get();

        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        //$Auth = Auth::user();
        
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('admin.details',compact(['getstatusall','getbyid']));
    }



    public function delete($id){
        //key หลัก find
        //$res=Addcalendar::where('id',$id)->delete();
        error_log($id);
        $getStatus = User::find($id);
        error_log($getStatus->status_id);

        $update = User::find($id)->update([
            'status_id'=> $getStatus->status_id+1
        ]);

        //$delete = Addcalendar::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลสำเร็จ");
    }

    public function test(Request $request)
  {
      return response()->json([
        'resultCode'=> "20000",
        'resultDescription'=> "Success",
        'req'=> $request
      ], 200);
  }


    public function update(Request $request){
        $id = $request->id;
        $getStatus = User::find($id);
        error_log($getStatus->status_id);

        $update = User::find($id)->update([
            'status_id'=> $getStatus->status_id+1
        ]);

        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request
          ], 200);

    }

    public function update2(Request $request){
        $id = $request->id;
        $getStatus = User::find($id);
        error_log($getStatus->status_id);

        $update = User::find($id)->update([
            'status_id'=> $getStatus->status_id-1
        ]);

        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request
          ], 200);

    }
}

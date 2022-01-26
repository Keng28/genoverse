<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listname;
use App\Models\Form1;

use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;
use App\Models\Form5;
use App\Models\Form6;
use App\Models\Form7;
use App\Models\Form8;
use App\Models\Form9;


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


        $Form1 =  Form1::select(DB::raw('SUM(coalesce(quiz_1!="",0) + coalesce(quiz_2!="",0) ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm1 =  round($Form1[0]->Count);
        $part1 = $calForm1*100/2 ;
                

        $Form2 =  Form2::select(DB::raw('SUM(coalesce(quiz2_1!=""-1,0) + 
                    coalesce(quiz2_2!=""-1,0) + 
                    coalesce(quiz2_3!=""-1,0) + 
                    coalesce(quiz2_4!=""-1,0) +
                    coalesce(quiz2_5!=""-1,0) +
                    coalesce(quiz2_6!=""-1,0) +
                    coalesce(quiz2_7!=""-1,0) +
                    coalesce(quiz2_8!=""-1,0) +
                    coalesce(quiz2_9!=""-1,0) +
                    coalesce(quiz2_10!=""-1,0) +
                    coalesce(quiz2_11!=""-1,0) +
                    coalesce(quiz2_12!=""-1,0) +
                    coalesce(quiz2_13!=""-1,0) +
                    coalesce(quiz2_14!=""-1,0) +
                    coalesce(quiz2_15!=""-1,0) +
                    coalesce(quiz2_16!=""-1,0) +
                    coalesce(quiz2_17!=""-1,0) +
                    coalesce(quiz2_18!=""-1,0) +
                    coalesce(quiz2_19!=""-1,0) +
                    coalesce(quiz2_20!=""-1,0) +
                    coalesce(quiz2_21!=""-1,0) +
                    coalesce(quiz2_22!=""-1,0) +
                    coalesce(quiz2_23!=""-1,0) +
                    coalesce(quiz2_24!=""-1,0) +
                    coalesce(quiz2_25!=""-1,0) +
                    coalesce(quiz2_26!=""-1,0) +
                    coalesce(quiz2_27!=""-1,0) +
                    coalesce(quiz2_28!=""-1,0) 
                    ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm2 =  round($Form2[0]->Count);
        $part2 = round($calForm2*100/28) ;

        $Form3 =  Form3::select(DB::raw('SUM(coalesce(quiz3_1!=""-1,0) + coalesce(quiz3_2!=""-1,0) ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm3 =  $Form3[0]->Count;
        $part3 = round($calForm3*100/2);
//
        $Form4 =  Form4::select(DB::raw('SUM(coalesce(quiz4_1!="",0)) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm4 =  $Form4[0]->Count;
        $part4 = round($calForm4*100/1);
///

        $Form5 =  Form5::select(DB::raw('SUM(coalesce(quiz5_1!="",0) + coalesce(quiz5_2!="",0) ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm5 =  $Form5[0]->Count;
        $part5 = round($calForm5*100/2);
//
        $Form6 =  Form6::select(DB::raw('SUM(coalesce(quiz6_1!="",0) + coalesce(quiz6_2!="",0) ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm6 =  $Form6[0]->Count;
        $part6 = round($calForm6*100/2);
//

        $Form7 =  Form7::select(DB::raw('SUM(coalesce(quiz7_1!="",0) + 
            coalesce(quiz7_1_1!="",0)+
            coalesce(quiz7_2!="",0) + coalesce(quiz7_2_1!="",0)+
            coalesce(quiz7_3!="",0) + coalesce(quiz7_3_1!="",0)+
            coalesce(quiz7_4!="",0) + coalesce(quiz7_4_1!="",0)+
            coalesce(quiz7_5!="",0) + coalesce(quiz7_5_1!="",0)+
            coalesce(quiz7_6!="",0) + coalesce(quiz7_6_1!="",0)+
            coalesce(quiz7_7!="",0) + coalesce(quiz7_7_1!="",0)+
            coalesce(quiz7_8!="",0) + coalesce(quiz7_8_1!="",0)+
            coalesce(quiz7_9!="",0) + coalesce(quiz7_9_1!="",0)+
            coalesce(quiz7_10!="",0) + coalesce(quiz7_10_1!="",0)
             ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm7 =  $Form7[0]->Count;
        $part7 = round($calForm7*100/10);
//
        $Form8 =  Form8::select(DB::raw('SUM(coalesce(quiz8_1!="",0) + coalesce(quiz8_2!="",0) + coalesce(quiz8_3!="",0) ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm8 =  $Form8[0]->Count;
        $part8 = round($calForm8*100/3);
//
        $Form9 =  Form9::select(DB::raw('SUM(coalesce(quiz9_1!="",0) + coalesce(quiz9_2!="",0)+ coalesce(quiz9_3!="",0) ) as Count'))
                ->where("user_id", "=", $id)
                ->get();
        $calForm9 =  $Form9[0]->Count;
        $part9 = round($calForm9*100/3);
            
          

        return view('user.menu2',compact(['getstatusall','getbyid','part1','part2','part3','part4','part5','part6','part7','part8','part9']));
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

        $form1 = DB::table('form1s')
        ->select(
            'form1s.*',
        )
        ->where("user_id",$id)
        ->get();



        
        
        
        
        $form7 = DB::table('form7s')
        ->select(
            'form7s.*',
        )
        ->where("user_id",$id)
        ->get();

        $form8 = DB::table('form8s')
        ->select(
            'form8s.*',
        )
        ->where("user_id",$id)
        ->get();

        $form9 = DB::table('form9s')
        ->select(
            'form9s.*',
        )
        ->where("user_id",$id)
        ->get();










        return view('admin.details',compact(['getstatusall','getbyid','form1','form7','form8','form9']));
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
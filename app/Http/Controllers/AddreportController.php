<?php

namespace App\Http\Controllers;

use App\Models\Addreport;
use App\Models\User;
use App\Models\ReportType;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



use Illuminate\Http\Request;

class AddreportController extends Controller
{
   
    //public function index(){
        //$user=User::all();
        //$calendars = Addcalendar::onlyTrashed()->paginate(3);
        //dd($user);
        //return view('admin.menu3',compact('user'));
    //}

    public function createForm(){
        return view('file-upload');
      }
    
    public function fileUpload(Request $request,$id){
            //dd('sssss');
            $request->validate([
                'category'=>'required',
                'file' => 'required|mimes:csv,txt,xlx,xls,pdf'
            ]);
            //dd($request);

            $fileModel = new File;

            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/public/' . $filePath;
            $fileModel->category =  $request->category;
            $fileModel->doctor_id =  Auth::user()->id;
            $fileModel->user_id = $id;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);

            $name = $request->file('file')->getClientOriginalName();
            dd($name);
            $path = $request->file('file')->store('public/storage');
     
    
            $save = new File;
            $save->name = $name;
            $save->file = $path;
            $save->category =  $request->category;
            $save->doctor_id =  Auth::user()->id;
            $save->user_id = $id;
            $save->save();

            //dd($request);
            return redirect()->back()->with('success',"บันทึกสำเร็จ");
            
            //return redirect('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');
            
    }
    
 
    public function index(){
        //$listname = User::all();
        $user = DB::table('users')
        ->leftJoin('status', function ($join) {
            $join->on('users.status_id', '=', 'status.id');
        })
        ->select(
            'users.*',
            'status.id as statusId',
            'status.status_name as statusName',
        )
        ->where("users.role",0)
        ->get();

        //$Auth = Auth::user();
        
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('admin.menu3',compact('user'));
        //return view('admin.menu1',compact('user'));
    }

    public function viewuser(){

        $getreport = DB::table("addreports")
        ->leftJoin("users", function($join){
            $join->on("addreports.user_id", "=", "users.id");
        })
        ->leftJoin("users as a", function($join){
            $join->on("addreports.doctor_id", "=", "a.id");
        })
        ->where('user_id', Auth::user()->id)
        ->select("addreports.*","users.name as NameUsers" , "a.name as DoctorUsers")
        ->orderBy('addreports.created_at','ASC')
        ->get();

        return view('user.menu4',compact('getreport'));
    }

    public function view($id){
        $reporttype = DB::table('typereports')
        ->select(
            'typereports.*',
        )
        ->get();
        //$reporttype = ReportType::all();
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        // $getreport = DB::table('addreports')
        // ->select(
        //     'addreports.*',
        // )
        // ->where("addreports.user_id",$id)
        // ->get();

        $getreport = DB::table("addreports")
        ->leftJoin("users", function($join){
            $join->on("addreports.user_id", "=", "users.id");
        })
        ->leftJoin("users as a", function($join){
            $join->on("addreports.doctor_id", "=", "a.id");
        })
        ->where("addreports.user_id",$id)
        ->select("addreports.*","users.name as NameUsers" , "a.name as DoctorUsers")
        ->get();

        //$Auth = Auth::user();
        
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('admin.menu4',compact('getbyid','getreport','reporttype'));
    }

    public function viewk($id)
{
    $file = storage_path('app/pdfs/') . $id . '.pdf';

    if (file_exists($file)) {

        $headers = [
            'Content-Type' => 'application/pdf'
        ];

        return response()->download($file, 'Test File', $headers, 'inline');
    } else {
        abort(404, 'File not found!');
    }
}


    public function view2($id){
        $getbyid = DB::table('users')
        ->select(
            'users.*',
        )
        ->where("users.id",$id)
        ->get();

        $getreport = DB::table('addreports')
        ->select(
            'addreports.*',
        )
        ->where("addreports.id",$id)
        ->get();

         //dd($getbyid);
        //$Auth = Auth::user();
        
        //dd($Auth);
        //return view('admin.service.index',compact('services'));
        return view('reportdetail',compact('getbyid','getreport'));
    }
   
    public function store(Request $request,$id){
        //ตรวจสอบข้อมูล  
        
        $request->validate(
            [
                //'category' => 'unique:addreports,user_id,$category->id',
                // 'category' => [
                //     'required',              
                //     Rule::unique('addreports', 'category', 'user_id')
                //  ], 

                //'category' =>'required|unique:addreports,category',
                //'user_id' =>'string|unique:addreports,user_id|unique:addreports,category|different:category|min:2',

                //'data.ip' => ['required', 'unique:servers,ip,'.$this->id.',NULL,id,hostname,'.$request->input('hostname')]
                //'category' => 'required|unique:addreports,category,' . $this->id . ',id,colum_2,' . $this->column_2
                //'data.ip' => ['required', 'unique:category,user_id,'.$this->id],
                //'category' => 'unique:user_id,category',
                //'category' => 'required|unique:addreports,category|unique:addreports,user_id',
                //'category' =>  [
                //    'required', 
                //    Rule::unique('addreports')
                //           ->ignore($this->user)
                //           ->where('user_id', $this->user_id)
                //],
                'file'=>'required',      
                
            ],
            [
                //'category.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                'file.required'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            ]
        );

        $fileModel = new Addreport;
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        //$filePath = $request->file('file')->store('public/files');

        $fileModel->file = time().'_'.$request->file->getClientOriginalName();

        $fileModel->file_path = '/storage/'. $filePath;
        //$fileModel->file_path = $filePath;

        $fileModel->category =  $request->category;
        $fileModel->doctor_id =  Auth::user()->id;
        $fileModel->user_id = $id;
        $fileModel->save();
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $fileModel);        

    }
    public function delete(Request $request){
        $id = $request->id;
        error_log($request);
        //key หลัก find
        //$res=Addcalendar::where('id',$id)->delete();
        $delete = DB::table('addreports')->where('id', '=', $id)->delete();
        //$delete = Addcalendar::find($id)->delete();

        //$delete = Addcalendar::onlyTrashed()->find($id)->forceDelete();
        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'id'=> $id,
          ], 200);
          
          
    }

    public function indexreport(){
        $reporttype = ReportType::all();
        //$reporttype = DB::table('reporttype');

        return view('admin.menu4',compact('reporttype'));
        
    }

    public function download2($id){

        return response()->download(public_path('assets/'));
        
    }

    function download($file_path){
        $headers = [
            'Content-Type' => 'application/pdf'
        ];
        $file = Storage::disk('public')->get($file_path);
        return response()->download($file, $headers);
        
        
    }

}

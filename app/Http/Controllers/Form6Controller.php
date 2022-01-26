<?php

namespace App\Http\Controllers;

use App\Models\Form6;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\HistoryAllergyController;
use App\Models\HistoryAllergyDrugController;


class Form6Controller extends Controller
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
        $user = Form6::where('user_id', $id)->first();
        if($user==null){
            $user = Form6::create([
            'user_id' => $id,
            ]);
        }
        
        $getbyid = DB::table('users')
            ->select(
                'users.*',
            )
            ->where("users.id",$id)
            ->get();

        $history_allergies = DB::table('history_allergies')
            ->select(
                'history_allergies.*',
            )
            ->where("user_id",$id)
            ->get();

        $history_allergy_drugs = DB::table('history_allergy_drugs')
            ->select(
                'history_allergy_drugs.*',
            )
            ->where("user_id",$id)
            ->get();

        $forms = DB::table('form6s')
            ->select(
                'form6s.*',
            )
            ->where("user_id",$id)
            ->get();
        
        return view('form6',compact(['getbyid','forms','history_allergies','history_allergy_drugs']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form6  $form6
     * @return \Illuminate\Http\Response
     */
    public function show(Form6 $form6)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form6  $form6
     * @return \Illuminate\Http\Response
     */
    public function edit(Form6 $form6)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form6  $form6
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Form6::where('user_id', $id)->first();
        //$data = $request->all();
        //$data2 = $request->quiz6_1_1;
        
      //dd($data2);

         
        $array = [[1,"kkkkk"],[2,"kkdkkmkkkk"]];



        if ($user !== null ) {
            DB::table('form6s')
            ->where('user_id', $id)
            ->update(array(
                'quiz6_1' => request('quiz6_1'),
                'quiz6_2' => request('quiz6_2'),
                
        ));
        } else {
            $user = Form6::create([
            'user_id' => $id,
            ]);
        }


        // $food = HistoryAllergyController::updateOrCreate(
        //     ['user_id' => $id],
        //     ['quiz6_1_1' => $request->quiz6_1_1]
        // );
        if($request->quiz6_1_1 != null){
            $food = DB::table('history_allergies')->insert([
            'user_id' => $id,
            'quiz6_1_1' => $request->quiz6_1_1,
            ]);
        }

        if($request->quiz6_2_1 != null){
            $drug = DB::table('history_allergy_drugs')->insert([
            'user_id' => $id,
            'quiz6_2_1' => $request->quiz6_2_1,
            ]);
        }
        
        
        
        
        return redirect()->back()->with('success',"บันทึกสำเร็จ");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form6  $form6
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('history_allergies')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");

    }
    

    public function delete($id)
    {
       $delete = DB::table('history_allergy_drugs')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
          

    }
}

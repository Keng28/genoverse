<?php

namespace App\Http\Controllers;

use App\Models\historyAllergy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryAllergyController extends Controller
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
     * @param  \App\Models\historyAllergy  $historyAllergy
     * @return \Illuminate\Http\Response
     */
    public function show(historyAllergy $historyAllergy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historyAllergy  $historyAllergy
     * @return \Illuminate\Http\Response
     */
    public function edit(historyAllergy $historyAllergy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historyAllergy  $historyAllergy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historyAllergy $historyAllergy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historyAllergy  $historyAllergy
     * @return \Illuminate\Http\Response
     */
    public function destroy(historyAllergy $historyAllergy)
    {
      
      $id = $request->id;
        error_log($request);
        dd($id );
        //key หลัก find
        //$res=Addcalendar::where('id',$id)->delete();
        $delete = DB::table('history_allergies')->where('id', '=', $id)->delete();
        
        return response()->json([
            'resultCode'=> "20000",
            'resultDescription'=> "Success",
            'req'=> $request,
            'id'=> $id,
          ], 200);
    }
}
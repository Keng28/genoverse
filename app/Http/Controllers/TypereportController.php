<?php

namespace App\Http\Controllers;

use App\Models\typereport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TypereportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typereport = typereport::all();
        return view('index_report_type',compact('typereport'));
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
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'name'=>'required|unique:typereports|max:255'
            ],
            [
                'name.required'=>"กรุณาป้อนประเภทรายงานด้วยครับ",
                'name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'name.unique'=>"มีข้อมูลประเภทรายงานนี้ในฐานข้อมูลแล้ว"
            ]
        );
        //บันทึกข้อมูล

        $data = new typereport;
        $data->name = $request->name;
        $data->save();
        


        // $data = array();
        // $data["name"] = $request->name;
        // //query builder
        // DB::table('reporttype')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typereport  $typereport
     * @return \Illuminate\Http\Response
     */
    public function show(typereport $typereport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typereport  $typereport
     * @return \Illuminate\Http\Response
     */
    public function edit(typereport $typereport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typereport  $typereport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typereport $typereport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typereport  $typereport
     * @return \Illuminate\Http\Response
     */
    public function destroy(typereport $typereport)
    {
        //
    }
    public function delete($id){
        //$delete = typereport::onlyTrashed()->find($id)->forceDelete();
        //return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
        //$id = $request->id;
        $delete = DB::table('typereports')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
}
}

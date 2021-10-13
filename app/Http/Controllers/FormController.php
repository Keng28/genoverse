<?php

namespace App\Http\Controllers;

use App\Models\Form;


use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $form1=Form::all();
        $form1 = Form::onlyTrashed()->paginate(3);

        return view('form1',compact('form1'));
    }

    
}

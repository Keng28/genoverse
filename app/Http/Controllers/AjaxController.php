<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function post(Request $request){
        error_log('ok!');
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response); 
     }
}

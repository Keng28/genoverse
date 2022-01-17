<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddcalendarController;
use App\Http\Controllers\AddreportController;
use App\Http\Controllers\TypereportController;
use App\Http\Controllers\ListnameController;
use App\Http\Controllers\PDFController;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\ReportType;

use App\Http\Controllers\Form1Controller;

use App\Http\Controllers\Form7Controller;
use App\Http\Controllers\Form8Controller;
use App\Http\Controllers\Form9Controller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/







Route::get('/status', function () {
    return view('admin/status');
});

Route::get('/keng14', function () {
    Artisan::call('storage:link');
});

Route::get('/testlayout', function () {
    return view('testlayout');
});

Route::get('/note', function () {
    return view('admin/note');
});



Route::get('/form2', function () {
    return view('form2');
});
Route::get('/form3', function () {
    return view('form3');
});
Route::get('/form4', function () {
    return view('form4');
});
Route::get('/form5', function () {
    return view('form5');
});
Route::get('/form6', function () {
    return view('form6');
});
Route::get('/form7', function () {
    return view('form7');
});





Route::get('/reportdetail', function () {
    return view('reportdetail');
});

Route::get('/usercalender', function () {
    return view('user/menu3')->name('usercalender');
});

   
    



Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::middleware(['check'])->group(function () {
        Route::get('/', function () {
            return view('auth/login');
        }); 
    });

    Route::middleware(['checkhome'])->group(function () {
        Route::get('/index', function () {
        }); 

    });

   

    // Route::get('/index',[HomeController::class,'index'])->name('index');

    //form1
    Route::post('/forms1',[Form1Controller::class,'storeForm1'])->name('forms1');

    //form1
    Route::get('/forms1/{id}',[Form1Controller::class,'updateForm1'])->name('updateform1');    
    Route::post('/formsupdate1/{id}',[Form1Controller::class,'update2'])->name('update2');

    //form2


    //form7
    Route::get('/form7/{id}',[Form7Controller::class,'store'])->name('storeform8');    
    Route::post('/formupdate7/{id}',[Form7Controller::class,'update'])->name('updateform8');

    //form8
    Route::get('/form8/{id}',[Form8Controller::class,'store'])->name('storeform8');    
    Route::post('/formupdate8/{id}',[Form8Controller::class,'update'])->name('updateform8');

    //form9
    Route::get('/form9/{id}',[Form9Controller::class,'store'])->name('storeform9');    
    Route::post('/formupdate9/{id}',[Form9Controller::class,'update'])->name('updateform9');




    Route::get('/addCalender/all',[AddcalendarController::class,'index'])->name('addCalenderindex');
    Route::get('/addCalender/2',[AddcalendarController::class,'index2'])->name('addCalenderindex2');
    Route::get('/addCalender/3',[AddcalendarController::class,'index3'])->name('addCalenderindex3');

    Route::post('/addCalender/add',[AddcalendarController::class,'store'])->name('addCalender');
    Route::post('/addCalender/del',[AddcalendarController::class,'delete'])->name('addCalenderdel');
    Route::post('/addCalenderuser/del',[AddcalendarController::class,'deleteuser'])->name('addCalenderdell');

    //Route::get('/addCalender/del',[AddcalendarController::class,'delete'])->name('addCalenderdel2');

    Route::post('/addCalender/update/{id}',[AddcalendarController::class,'update'])->name('addCalenderupdate');


    //Route::post('/addReport',[AddreportController::class,'store'])->name('addReport');
    Route::post('/report/del',[AddreportController::class,'delete'])->name('delReport');

    //Route::post('/addReport',[AddreportController::class,'index'])->name('addReport');
    Route::post('/addReport/{id}',[AddreportController::class,'store'])->name('addReport2');
    Route::post('/downloadReport/{id}',[AddreportController::class,'download'])->name('downloadReport');

    //Route::post('/addReport/{id}',[AddreportController::class,'delete'])->name('addReportdel');
    Route::get('/list',[ListnameController::class,'listname'])->name('listname');

    //listuserid
    Route::get('/status/{id}',[ListnameController::class,'view'])->name('listname2');
    
    Route::get('/note/{id}',[AddcalendarController::class,'viewListNote'])->name('note');
    Route::get('/noteDetail/{id}',[AddcalendarController::class,'viewNote'])->name('viewNote');

    Route::get('/questionnaire/{id}',[ListnameController::class,'viewform'])->name('questionnaire');
    Route::get('/details/{id}',[ListnameController::class,'viewformadmin'])->name('details');
    
    
    Route::post('/statusupdate',[ListnameController::class,'update'])->name('statusupdate');
    Route::post('/statusupdate2',[ListnameController::class,'update2'])->name('statusupdate2');
    Route::get('/statusdelete/{id}',[ListnameController::class,'delete'])->name('statusdelete');

    //Route::post('/department/add',[DepartmentController::class,'store'])->name('addDepartment');


    Route::get('ajax', function(){ return view('ajax'); });
    Route::post('/postajax',[ListnameController::class,'test'])->name('statusdelete');



    Route::get('/report',[AddreportController::class,'index'])->name('adminreport');
    Route::get('/report/{id}',[AddreportController::class,'view'])->name('adminreport2');

    Route::get('/reports/{id}',[AddreportController::class,'view2'])->name('adminreport3');
    Route::get('/reportsuser',[AddreportController::class,'viewuser'])->name('userreport');


    //Route::get('/report/{id}',[AddreportController::class,'delete'])->name('adminreportdel');
    //Route::post('/report/del',[AddreportController::class,'delete'])->name('adminreportdel');


    //menu2
    Route::get('/questionnaireuser',[ListnameController::class,'listname2'])->name('questionnaireuser');

    //Route::get('/userformall/{id}',[FormController::class,'view'])->name('view');

    //calenda
    //Route::get('/addCalender/cat',[AddcalendarController::class,'index3'])->name('addCalenderindex3');


    Route::get('/addCalender/cat',[AddcalendarController::class,'userindex'])->name('addCalenderuser');
    Route::post('/addCalender/update/{id}',[AddcalendarController::class,'update'])->name('addCalenderuserupdate');


    //report type
    Route::get('/reporttype/all',[TypereportController::class,'index'])->name('allReportType');
    Route::post('/reporttype/add',[TypereportController::class,'store'])->name('addReportType');
    Route::get('/reporttype/edit/{id}',[TypereportController::class,'edit']);
    Route::post('/reporttype/update/{id}',[TypereportController::class,'update']);
    Route::get('/reporttype/delete/{id}',[TypereportController::class,'delete']);


    //report pdf
    Route::get('/generate-pdf',[PDFController::class,'generatePDF']);


    //view report user




});

Route::post('/form1',[FromController::class,'index'])->name('form1');







Route::middleware(['auth:sanctum', 'verified'])->get('/menu1', function () {
    $users = User::all();
    return view('admin/menu1',compact('users'));
    //return view('dashboard');
})->name('dashboard3');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {



});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::all();
    return view('menu1',compact('users'));
})->name('menu1');







Route::get('/menu1', function () {
    return view('user/menu1');
})->name('menu1');





Route::middleware(['auth:sanctum', 'verified'])->get('/user/menu1', function () {
    return view('user/menu1');
})->name('menu1');





Route::middleware(['auth:sanctum', 'verified'])->get('/user/menu3', function () {
    return view('user/menu3');
})->name('menu3');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/menu4', function () {
    return view('user/menu4');
})->name('menu4');

Route::middleware(['auth:sanctum', 'verified'])->get('/form1', function () {
    return view('/form1');
})->name('form1');







Route::middleware(['auth:sanctum', 'verified'])->get('/admin/menu1', function () {
    return view('admin/menu1');
})->name('menu5');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/menu2', function () {
    return view('admin/menu2');
})->name('menu6');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/menu3', function () {
    return view('admin/menu3');
})->name('menu7');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/menu4', function () {
    return view('admin/menu4');
})->name('menu8');



# /routes/api.php

// Get list of meetings.
Route::get('/meetings', 'Zoom\MeetingController@list');

// Create meeting room using topic, agenda, start_time.
Route::post('/meetings', 'Zoom\MeetingController@create');

// Get information of the meeting room by ID.
Route::get('/meetings/{id}', 'Zoom\MeetingController@get')->where('id', '[0-9]+');
Route::patch('/meetings/{id}', 'Zoom\MeetingController@update')->where('id', '[0-9]+');
Route::delete('/meetings/{id}', 'Zoom\MeetingController@delete')->where('id', '[0-9]+');


//user
Route::get('/questionnaire2',[ListnameController::class,'listname'])->name('questionnaire2');


Route::get('/questionnaire3',[ListnameController::class,'listname2'])->name('questionnaire3');





//report

Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
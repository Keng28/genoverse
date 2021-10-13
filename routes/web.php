<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddcalendarController;
use App\Http\Controllers\AddreportController;
use App\Http\Controllers\FromController;


use App\Http\Controllers\ListnameController;
use App\Models\User;


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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/status', function () {
    return view('admin/status');
});
Route::get('/form1', function () {
    return view('form1');
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
Route::get('/form8', function () {
    return view('form8');
});
Route::get('/form9', function () {
    return view('form9');
});
Route::get('/form10', function () {
    return view('form10');
});
Route::get('/form11', function () {
    return view('form11');
});
Route::get('/form12', function () {
    return view('form12');
});
Route::get('/form13', function () {
    return view('form13');
});

Route::get('/reportdetail', function () {
    return view('reportdetail');
});





Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/index',[HomeController::class,'index'])->name('index');

    Route::get('/addCalender/all',[AddcalendarController::class,'index'])->name('addCalenderindex');
    Route::post('/addCalender/add',[AddcalendarController::class,'store'])->name('addCalender');
    Route::get('/addCalender/del/{id}',[AddcalendarController::class,'delete'])->name('addCalenderdel');

    Route::get('/addCalender/all2',[AddcalendarController::class,'index2'])->name('addCalenderindex2');
    Route::post('/addCalender/update/{id}',[AddcalendarController::class,'update'])->name('addCalenderupdate');


    Route::post('/addReport',[AddreportController::class,'store'])->name('addReport');
    Route::get('/list',[ListnameController::class,'listname'])->name('listname');

    Route::get('/report',[AddreportController::class,'index'])->name('adminreport');




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

Route::middleware(['auth:sanctum', 'verified'])->get('/user/menu2', function () {
    return view('user/menu2');
})->name('menu2');
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






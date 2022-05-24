<?php

use Illuminate\Support\Facades\Route;

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
//logout
// Route::get('/logout', [App\Http\Controllers\Controller]);
 


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/testlogin', [App\Http\Controllers\HomeController::class, 'testlogin'])->name('testlogin')->middleware('is_admin');
Route::post('/genqr', [App\Http\Controllers\QrCodeController::class, 'genqr'])->name('genqr')->middleware('is_admin');
Route::post('/downloadqr', [App\Http\Controllers\QrCodeController::class, 'downloadqr'])->name('downloadqr')->middleware('is_admin');

// student
Route::middleware(['auth'])->group(function () {

    Route::get('/stdintoprofile', [App\Http\Controllers\StudentController::class, 'stdintoprofile'])->name('stdintoprofile');
    Route::post('/editstdintoprofile', [App\Http\Controllers\StudentController::class, 'editstdintoprofile'])->name('editstdintoprofile');
});
// 

// teacher
Route::middleware(['auth', 'is_admin'])->group(function () {

    // Route::get('/register', [App\Http\Controllers\Controller::class, 'addmember'])->name('register');

    Route::get('/teacherdashboard', [App\Http\Controllers\Controller::class, 'teacherdashboard'])->name('teacherdashboard');
    Route::get('/teachercalendar', [App\Http\Controllers\Controller::class, 'teachercalendar'])->name('teachercalendar');
    Route::get('/teacherprojectinfo', [App\Http\Controllers\Controller::class, 'teacherprojectinfo'])->name('teacherprojectinfo');
    Route::post('/editteacherprofile', [App\Http\Controllers\Controller::class, 'editteacherprofile'])->name('editteacherprofile');
    Route::get('/addmember', [App\Http\Controllers\Controller::class, 'addmember'])->name('addmember');
    Route::get('/teachergraph', [App\Http\Controllers\Controller::class, 'teachergraph'])->name('teachergraph');
});
// 

Route::get('/addproject', [App\Http\Controllers\Controller::class, 'addproject'])->name('addproject');
Route::get('/login', [App\Http\Controllers\Controller::class, 'adminlogin'])->name('login');


// sql
Route::get('/queryuser', [App\Http\Controllers\Controller::class, 'queryuser'])->name('queryuser');
Route::get('/stdqueryprojects', [App\Http\Controllers\Controller::class, 'stdqueryprojects'])->name('stdqueryprojects');
Route::get('/stdqueryprojectssuccess', [App\Http\Controllers\Controller::class, 'stdqueryprojectssuccess'])->name('stdqueryprojectssuccess');
Route::get('/teacherqueryprojectssuccess', [App\Http\Controllers\Controller::class, 'teacherqueryprojectssuccess'])->name('teacherqueryprojectssuccess');
Route::get('/teacherqueryprojects', [App\Http\Controllers\Controller::class, 'teacherqueryprojects'])->name('teacherqueryprojects');
Route::post('/edituser', [App\Http\Controllers\Controller::class, 'edituser'])->name('edituser');
Route::post('/editprojects', [App\Http\Controllers\Controller::class, 'editprojects'])->name('editprojects');
Route::post('/queryedit', [App\Http\Controllers\Controller::class, 'queryedit'])->name('queryedit');
Route::post('/queryeditprojects', [App\Http\Controllers\Controller::class, 'queryeditprojects'])->name('queryeditprojects');
Route::post('/intoproject', [App\Http\Controllers\Controller::class, 'intoproject'])->name('intoproject');
Route::get('/deleteuser', [App\Http\Controllers\Controller::class, 'deleteuser'])->name('deleteuser');
Route::get('/deleteprojects', [App\Http\Controllers\Controller::class, 'deleteprojects'])->name('deleteprojects');
//

// student no auth

//--------------graph----------------
Route::get('/stdgraph', [App\Http\Controllers\Controller::class, 'stdgraph'])->name('stdgraph');
Route::get('/graphdata', [App\Http\Controllers\Controller::class, 'graphdata'])->name('graphdata');
//-----------/. graph----------------

Route::post('/successproject', [App\Http\Controllers\Controller::class, 'successproject'])->name('successproject');
Route::get('/stdprofile', [App\Http\Controllers\Controller::class, 'stdprofile'])->name('stdprofile');
Route::get('/stdproject', [App\Http\Controllers\StudentController::class, 'stdproject'])->name('stdproject');
Route::get('/stdaddinfo', [App\Http\Controllers\StudentController::class, 'stdaddinfo'])->name('stdaddinfo');
Route::post('/addinfo', [App\Http\Controllers\StudentController::class, 'addinfo'])->name('addinfo');
Route::get('/queryinfo', [App\Http\Controllers\StudentController::class, 'queryinfo'])->name('queryinfo');
Route::get('/deleteinfo', [App\Http\Controllers\StudentController::class, 'deleteinfo'])->name('deleteinfo');
Route::post('/editinfo', [App\Http\Controllers\StudentController::class, 'editinfo'])->name('editinfo');
Route::post('/queryeditinfo', [App\Http\Controllers\StudentController::class, 'queryeditinfo'])->name('queryeditinfo');
// 


Route::get('/calendar', [App\Http\Controllers\Controller::class, 'calendar'])->name('calendar');
Route::get('/addevent', [App\Http\Controllers\Controller::class, 'addevent'])->name('addevent');
Route::get('/deleteevent', [App\Http\Controllers\Controller::class, 'deleteevent'])->name('deleteevent');
Route::get('/successevent', [App\Http\Controllers\Controller::class, 'successevent'])->name('successevent');
Route::get('/calendardata', [App\Http\Controllers\Controller::class, 'calendardata'])->name('calendardata');
Route::get('/teachercalendar', [App\Http\Controllers\Controller::class, 'teachercalendar'])->name('teachercalendar');

// Aritcle
Route::get('/article1', [App\Http\Controllers\Controller::class, 'article1'])->name('article1');
Route::get('/article2', [App\Http\Controllers\Controller::class, 'article2'])->name('article2');
Route::get('/article3', [App\Http\Controllers\Controller::class, 'article3'])->name('article3');
Route::get('/article4', [App\Http\Controllers\Controller::class, 'article4'])->name('article4');

//-------QRcode-----------
Route::get('/kaitongkum', [App\Http\Controllers\Controller::class, 'kaitongkum'])->name('kaitongkum');
Route::get('/greennet', [App\Http\Controllers\Controller::class, 'greennet'])->name('greennet');
Route::get('/hamigua', [App\Http\Controllers\Controller::class, 'hamigua'])->name('hamigua');
Route::get('/inthanon', [App\Http\Controllers\Controller::class, 'inthanon'])->name('inthanon');

// export to excel
Route::get('/exportExcel', [App\Http\Controllers\Controller::class, 'exportExcel'])->name('exportExcel');
Route::get('/editevent', [App\Http\Controllers\Controller::class, 'editevent'])->name('editevent');


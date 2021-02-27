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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*******************************************************
 * 
 * 
 *   PLEASE USE THE SECTION BELOW TO TEST THE LAYOUT
 * 
 * 
 * 
*******************************************************/

/*************************************************************************************************************************************/
/*****************************  THIS SECTION IS FOR ADMIN ****************************************************************************/
/*************************************************************************************************************************************/

Route::prefix('admin')->group(function () {
   Route::view('dashboard','dashboard.admin.dashboard');
   Route::view('attendance','attendance.admin.show');
   Route::view('class/create','class.admin.create');
   Route::view('class','class.admin.index');
   Route::view('detail/class/','detail.admin.index_class');
   Route::view('detail/class/student/','detail.admin.index');
   Route::view('detail/student/edit','detail.admin.edit');
   Route::view('detail/student/show','detail.admin.show');
   Route::view('statement/','statement.admin.index');
   Route::view('statement/class/','statement.admin.index_class');
   Route::view('statement/student/','statement.admin.index_student');
   Route::view('statement/show','statement.admin.show');
});




/*************************************************************************************************************************************/
/****************************  THIS SECTION IS FOR TEACHER ***************************************************************************/
/*************************************************************************************************************************************/

Route::prefix('teacher')->group(function () {
    Route::view('attendance','attendance.teacher.index');
    Route::view('attendance/show','attendance.teacher.show');
    Route::view('attendance/create','attendance.teacher.create');
    Route::view('dashboard','dashboard.teacher.index');
    Route::view('result','result.teacher.index');
    Route::view('statement','statement.teacher.index');
    Route::view('statement/view','statement.teacher.view');
    Route::view('statement/show','statement.teacher.show');
    Route::view('detail','detail.teacher.index');
    Route::view('detail/show','detail.teacher.show');
    Route::view('detail/edit','detail.teacher.edit');
});


/*************************************************************************************************************************************/
/*****************************  THIS SECTION IS FOR STUDENT **************************************************************************/
/*************************************************************************************************************************************/

Route::prefix('student')->group(
    function () {  
        Route::view('/attendance','attendance.student.index');
        Route::view('/detail','detail.student.index');
        Route::view('/detail/edit','detail.student.edit');
        Route::view('/result','result.student.index');
        Route::view('/statement','statement.student.index');
        Route::view('/statement/create','statement.student.create');
        Route::view('/statement/show','statement.student.show');
        Route::view('/class/create','class.student.create'); 
    }
);





/*************************************************************************************************************************************/
/*************************************************************************************************************************************/
/*************************************************************************************************************************************/

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
        Route::view('/result/show','result.student.show');
        Route::view('/statement','statement.student.index');
        Route::view('/statement/create','statement.student.create');
        Route::view('/class/create','class.student.create'); 
    }
);





/*************************************************************************************************************************************/
/*************************************************************************************************************************************/
/*************************************************************************************************************************************/

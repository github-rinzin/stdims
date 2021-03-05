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

Auth::routes(['register' => false,]);

Route::get('/home', 'HomeController@index')->name('home');

/**  Section 1
* This section is for handling dashboard for admin, teacher, and student.
* 
*/
Route::prefix('dashboard')->group(function () {
    Route::get('admin','DashboardController@admin')->name('admin.dashboard');
    Route::get('teacher','DashboardController@teacher')->name('teacher.dashboard');
    Route::get('student','DashboardController@student')->name('student.dashboard');
});

/** Section 2
 * This section is for handling the class index page on admin side for features such as
 * 1. Attendance ,
 * 2. Student detail named as detail , 
 * 3. Statement ,
 * 4. 
 * to display the list of class
 */

Route::prefix('admin')->group(function () {
    Route::prefix('detail')->group(function () {
        Route::get('class', 'AdminController@detail')->name('admin.detail.class');
    });
    Route::prefix('attendance')->group(function () {
        Route::get('class', 'AdminController@attendance')->name('admin.attendance.class');
    });
    Route::prefix('statement')->group(function () {
        Route::get('class', 'AdminController@statement')->name('admin.statement.class');
    });
});

/** Section 3
 * This section is for admin, and
 * Used for displaying the list of student detail that belongs to a classteacher 
 * 
 * it follows the route naming convention "index.class.feature-name" => name('index.class.detail')
 */

Route::prefix('admin')->group(function () {
    Route::prefix('class')->group(function () {
        Route::get('detail/{id}','AdminStudentController@class')->name('index.class.detail');
        Route::get('attendance/{id}','AdminAttendanceController@class')->name('index.class.attendance');
        Route::get('statement/{id}','AdminStatementController@class')->name('index.class.statement');
    });
    Route::prefix('student')->group(function () {
        Route::get('statement/{id}','AdminStatementController@student')->name('index.student.statement');
        Route::get('statement/index/{id}','AdminStatementController@index')->name('index.student.statement.index');
    });
   

});

/** Section 4
 * this section is for handling various resources
 */
Route::resource('class','ClassDivisionController')->only([
    'index',
    'create',
    'store',
    'destroy',
]);
Route::resource('division','DivisionController')->only([
    'store',
]);
Route::resource('grade', 'GradeController')->only([
    'store',
]);
Route::resource('statement','StatementController');
Route::resource('student','StudentController');












































// /*******************************************************
//  * 
//  * 
//  *   PLEASE USE THE SECTION BELOW TO TEST THE LAYOUT
//  * 
//  * 
//  * 
// *******************************************************/

// /*************************************************************************************************************************************/
// /*****************************  THIS SECTION IS FOR ADMIN ****************************************************************************/
// /*************************************************************************************************************************************/

// Route::prefix('admin')->group(function () {
//    Route::view('dashboard','dashboard.admin.dashboard');
//    Route::view('attendance/show','attendance.admin.show');
//    Route::view('attendance/student','attendance.admin.index_student');
//    Route::view('attendance/class','attendance.admin.index_class');
//    Route::view('class/create','class.admin.create');
//    Route::view('class','class.admin.index');
//    Route::view('detail/class/','detail.admin.index_class');
//    Route::view('detail/class/student/','detail.admin.index');
//    Route::view('detail/student/edit','detail.admin.edit');
//    Route::view('detail/student/show','detail.admin.show');
//    Route::view('statement/','statement.admin.index');
//    Route::view('statement/class/','statement.admin.index_class');
//    Route::view('statement/student/','statement.admin.index_student');
//    Route::view('statement/show','statement.admin.show');
// });




// /*************************************************************************************************************************************/
// /****************************  THIS SECTION IS FOR TEACHER ***************************************************************************/
// /*************************************************************************************************************************************/

// Route::prefix('teacher')->group(function () {
//     Route::view('attendance','attendance.teacher.index');
//     Route::view('attendance/show','attendance.teacher.show');
//     Route::view('attendance/create','attendance.teacher.create');
//     Route::view('class','class.teacher.index');
//     Route::view('dashboard','dashboard.teacher.index');
//     Route::view('result','result.teacher.index');
//     Route::view('statement','statement.teacher.index');
//     Route::view('statement/student','statement.teacher.student_index');
//     Route::view('statement/show','statement.teacher.show');
//     Route::view('detail','detail.teacher.index');
//     Route::view('detail/show','detail.teacher.show');
//     Route::view('detail/edit','detail.teacher.edit');
// });


// /*************************************************************************************************************************************/
// /*****************************  THIS SECTION IS FOR STUDENT **************************************************************************/
// /*************************************************************************************************************************************/

// Route::prefix('student')->group(
//     function () {  
//         Route::view('/attendance','attendance.student.index');
//         Route::view('/detail','detail.student.index');
//         Route::view('/detail/edit','detail.student.edit');
//         Route::view('/result','result.student.index');
//         Route::view('/result/show','result.student.show');
//         Route::view('/statement','statement.student.index');
//         Route::view('/statement/create','statement.student.create');
//         Route::view('/statement/show','statement.student.show');
//         Route::view('/class/create','class.student.create'); 
//     }
// );





// /*************************************************************************************************************************************/
// /*************************************************************************************************************************************/
// /*************************************************************************************************************************************/

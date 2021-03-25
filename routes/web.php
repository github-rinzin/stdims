<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudenttController;

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
Route::middleware(['auth'])->group(function() {
    Route::prefix('dashboard')->group(function () {
        Route::get('admin','DashboardController@admin')->name('admin.dashboard');
        Route::get('teacher','DashboardController@teacher')->name('teacher.dashboard');
        Route::get('student','DashboardController@student')->name('student.dashboard');
    });
    /** Section 2
     * This section is for handling the class index page on admin side for features such as
     * 1. Attendance ,
     * 2. Student detail named as detail , 
     * 3. Statement,
     * 4. 
     * to display the list of class
     */
    Route::middleware(['can:is-admin'])->prefix('admin')->group(function () {
        Route::prefix('detail')->group(function () {
            Route::get('class', 'Admin\AdminController@detail')->name('admin.detail.class');
        });
        Route::prefix('attendance')->group(function () {
            Route::get('class', 'Admin\AdminController@attendance')->name('admin.attendance.class');
            Route::get('{id}','Admin\AdminAttendanceController@student')->where('id', '[0-9]+')->name('index.student.attendance');
        });
        Route::prefix('statement')->group(function () {
            Route::get('class', 'Admin\AdminController@statement')->name('admin.statement.class');
        });
        Route::prefix('result')->group(function() {
            Route::get('class', 'Admin\AdminController@result')->name('admin.result.class');
        });

        /** Section 3
         * This section is for admin, and
         * Used for displaying the list of student detail that belongs to a classteacher 
         * 
         * it follows the route naming convention "index.class.feature-name" => name('index.class.detail')
         */
        Route::prefix('class')->group(function () {
            Route::get('detail/{id}','Admin\AdminStudentController@class')->name('index.class.detail');
            Route::get('attendance/{id}','Admin\AdminAttendanceController@class')->name('index.class.attendance');
            Route::get('statement/{id}','Admin\AdminStatementController@class')->name('index.class.statement');
            Route::get('result/{id}','Admin\AdminResultController@class')->name('index.class.result');
            Route::get('result/student/{id}', 'Admin\AdminResultController@show')->name('show.class.result');

        });
        Route::prefix('student')->group(function () {
            Route::get('statement/{id}','Admin\AdminStatementController@student')->name('index.student.statement');
            Route::get('statement/index/{id}','Admin\AdminStatementController@index')->name('index.student.statement.index');

        });
    });
    /**
     * This section is for teacher 
     */
    Route::middleware(['can:is-teacher'])->prefix('teacher')->group(function (){
        Route::prefix('attendance')->group(function (){ 
            Route::get('/','Teacher\TeacherAttendanceController@index')->name('teacher.attendance.index');
            Route::get('show/{id}','Teacher\TeacherAttendanceController@show')->name('teacher.attendance.show');
        });
        Route::prefix('statement')->group(function (){
            Route::get('student/','Teacher\TeacherStatementController@student')->name('teacher.statement.student');
            Route::get('student/{id}','Teacher\TeacherStatementController@index')->name('teacher.statement');
        });
        Route::get('join', 'JoinController@index')->name('join.index');
        Route::post('join', 'JoinController@approve')->name('join.approve');

        Route::get('result','ResultController@index')->name('result.index');
        Route::get('result/create','ResultController@create')->name('result.create');
        Route::post('result','ResultController@store')->name('result.store');
    });
    Route::middleware(['can:is-student'])->prefix('student')->group(function(){
        Route::get('join', 'JoinController@create')->name('join.create');
        Route::post('join', 'JoinController@store')->name('join.store');
        Route::post('join/{joinreq}', 'JoinController@destroy')->name('join.destroy');
        Route::get('result','Student\ResultController@index')->name('student.result.index');
    });
    /**
     * Bulk Upload section
     */
    Route::middleware('can:is-admin')->prefix('bulk')->group(function(){
        Route::post('/student','Admin\Bulk\StudentController@store')->name('bulk.student.store');
    });
    /** Section 4
     * this section is for handling various resources
     */
    Route::resource('attendance','AttendanceController')->except([
        'show',
        'edit',
        'destroy',
    ]);
    Route::middleware('can:is-admin')->group(function(){
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
        Route::resource('teacher', 'TeacherController');
    });
    Route::resource('result78','Result78Controller');      
    Route::resource('student','StudentController');
    Route::resource('statement','StatementController');
});
                
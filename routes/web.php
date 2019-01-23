<?php

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
    return redirect()->route('dashboard');
});

Auth::routes();

Route::group(['middleware'=>['auth','admin']],function(){

 // if(Auth::check()){
 //        if ( Auth::user()->role == "Admin" ){

Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('home', 'HomeController@index')->name('home');

Route::resource('permission', 'Admin\PermissionController');
Route::resource('role', 'Admin\RoleController');
Route::resource('user', 'Admin\UserController');
Route::get('/viewuser', 'Admin\UserController@viewuser');
Route::get('/viewuserdetail', 'Admin\UserController@viewuserdet');
Route::name('password.edit')->get('password-change', 'Admin\UserController@passwordReset');
Route::name('password.update')->post('password-change', 'Admin\UserController@postPasswordReset');

route::resource('/course','Admin\CourseController');
route::resource('/subject','Admin\SubjectController');

route::resource('/acc_year','Admin\AccadamicyearController');
route::resource('/student','Admin\StudentController');
route::get('/studentattendance','Admin\StudentController@stuattview');
route::post('/studentview','Admin\StudentController@studentview');
route::resource('/attendance','Admin\AttendanceController');
route::post('/att','Admin\AttendanceController@storest');
route::post('/attant','Admin\AttendanceController@showstudent');
route::post('/attview','Admin\AttendanceController@viewatt');
route::get('/attantshow','Admin\AttendanceController@showatt'); 
});

Route::group(['middleware'=>'auth'],function(){

route::get('/students','Admin\StudentController@stushow');
route::get('/subject_detail/{id}','Admin\SubjectController@showstudentsub');
route::get('/course_detail','Admin\CourseController@showcourse');
route::post('/students','Admin\StudentController@stu');
});



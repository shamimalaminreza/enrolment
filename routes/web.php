<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// stdnt logout
Route::get('/student_logout','AdminController@student_logout');
Route::get('/', function (){return view('student_login');});
Route::get('/student_seeting','AdminController@studentseeting');
Route::post('/student_own_update','AdminController@studentownupdate');




Route::get('/backend', function (){return view('admin/admin_login');});
Route::get('/logout','AdminController@logout');




//Route f0 adminLogin
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
//mthd studentlogin
Route::post('/studentlogin', 'AdminController@student_login_dashboard');
Route::get('/student_dashboard', 'AdminController@student_dashboard');
//student_seeting
Route::get('/student_profile', 'AddstudentController@studentprofile');



// admn viewprofile
Route::get('/viewprofile', 'AdminController@viewprofile');
Route::get('/admin_edit/{admin_id}', 'AdminController@adminedit');
Route::post('/updte_admin/{admin_id}', 'AdminController@adminupdte');
Route::get('/admin_delete/{admin_id}', 'AdminController@admindelete');
Route::get('/seeting', 'AdminController@adminseeting');
Route::post('/admin_change_password', 'AdminController@adminchangepassword');





//addstudent
Route::get('/addstudent', 'AddstudentController@addstudent');
Route::post('/save_student', 'AddstudentController@savestudent');


//allstudent
Route::get('/allstudent', 'AllstudentController@allstudent');
//student_delete
Route::get('/student_delete/{student_id}', 'AllstudentController@student_delete');
Route::get('/student_view/{student_id}', 'AllstudentController@student_view');

Route::get('/student_edit/{student_id}', 'AllstudentController@studentedit');

//Route::get('/student_edit/{student_id}', 'AllstudentController@studentedit');
//updte_student
Route::post('/updte_student/{student_id}', 'AllstudentController@studentupdte');




//tutionfee
Route::get('/tutionfee', 'TutionController@tutionfee');
Route::get('/cse', 'CseController@cse');
Route::get('/bba', 'BbaController@bba');
Route::get('/ece', 'EceController@ece');
Route::get('/eee', 'EEEController@eee');
Route::get('/mba', 'MBAController@mba');
Route::get('/allteacher', 'TeacherController@allteacher');

//addteacher
Route::get('/add_teacher', 'TeacherController@addteacher');
Route::post('/save_teacher', 'TeacherController@saveteacher');
Route::get('/allteacher', 'TeacherController@all_teacher');
Route::get('/teacher_edit/{teacher_id}', 'TeacherController@teacheredit');
Route::post('/update_teacher/{teacher_id}', 'TeacherController@updateteacher');


//teacher_view
Route::get('/teacher_view/{teacher_id}', 'TeacherController@teacherview');
Route::post('/view_teacher/{teacher_id}', 'TeacherController@viewteacher');
Route::get('/teacher_delete/{teacher_id}', 'TeacherController@teacherdelete');

Route::get('/students_edit/{student_id}', 'AllstudentController@studentsedit');



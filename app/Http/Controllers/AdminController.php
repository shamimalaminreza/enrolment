<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//databas use
use DB;
//use f0 Redirect
use Illuminate\Support\Facades\Redirect;
//use Session;
use Illuminate\Support\Facades\Session;
//use Session;
//session_start();

class AdminController extends Controller{
// admnf0logout
public function logout(){
Session::put('admin_email',null);
Session::put('admin_id',null);
Session::put('exception','You are successfully logout');
return Redirect::to('/backend');
     }
//student_logout

public function student_logout(){
Session::put('student_email',null);
Session::put('student_id',null);
Session::put('exception','You are successfully logout');
return Redirect::to('/');
     }
//stdnt studentseeting
public function studentseeting(){
    $student_id=Session::get('student_id');

$student_info=DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();
  $manage_student=view('student.student_seeting')->with('all_student_info',$student_info);
   return view('student_layout')->with('student_seeting',$manage_student);


//return view('student.student_seeting');

}
//studentownupdate
    public function studentownupdate(Request $request){
    $student_id=Session::get('student_id');
     $data=array();
    $data['student_phone']=$request->student_phone;
    $data['student_address']=$request->student_address;
    $data['student_password']=md5($request->student_password);
    DB::table('student_tbl')->where('student_id',$student_id)->update($data);
    //for shng mssagp
    Session::put('message','Data updated successfully');
    return Redirect::to('/student_seeting');
     }

//adminseeting

public function adminseeting(){
    $admin_id=Session::get('admin_id');
$admin_info=DB::table('admin_tbl')->select('*')->where('admin_id',$admin_id)->first();
  $manage_admin=view('admin.seeting')->with('all_admin_info',$admin_info);
   return view('layout')->with('seeting',$manage_admin);


//return view('student.student_seeting');

}

//adminchangepassword

    public function adminchangepassword(Request $request){
    $admin_id=Session::get('admin_id');
     $data=array();
    $data['admin_password']=md5($request->admin_password);
    DB::table('admin_tbl')->where('admin_id',$admin_id)->update($data);
    //for shng mssagp
    Session::put('message','Data updated successfully');
    return Redirect::to('/seeting');
     }


//mth0d f0 admn l0g n
    public function login_dashboard(Request $request){
//mthd fa addd login_dashboard
   $email=$request->admin_email;
    $password=md5($request->admin_password);
    $result=DB::table('admin_tbl')
    ->where('admin_email',$email)
    ->where('admin_password',$password)
    ->first();
     if ($result) {

     	Session::put('admin_email',$result->admin_email);
     	Session::put('admin_id',$result->admin_id);
        Session::put('exception','You are successfully login');
         return Redirect::to('/admin_dashboard');
             }else{
          Session::put('exception','Email and password invalid');
         return Redirect::to('/backend');
             }
         }
     






//mth0d f0 stdnt l0g n
    public function student_login_dashboard(Request $request){
//mthd fa addd login_dashboard
   $email=$request->student_email;
    $password=md5($request->student_password);
    $result=DB::table('student_tbl')
    ->where('student_email',$email)
    ->where('student_password',$password)
    ->first();
     if ($result) {

        Session::put('student_email',$result->student_email);
        Session::put('student_id',$result->student_id);
        Session::put('exception','You are successfully login');
         return Redirect::to('/student_dashboard');
             }else{
          Session::put('exception','Email and password invalid');
         return Redirect::to('/');
             }
         }
     







//admn dash b0ad
public function admin_dashboard(){
return view('admin.dashboard');

     }

//stdnt dashb0d
public function student_dashboard(){
return view('student.dashboard');

     }

//mth0d admn viewprofile

public function viewprofile(){
    $viewprofile_info=DB::table('admin_tbl')->get();
$manage_viewprofile=view('admin.viewprofile')->with('viewprofile_info',$viewprofile_info);
 return view('layout')->with('viewprofile_info',$manage_viewprofile);

}
//mthd adminedit

public function adminedit($admin_id){
$admin_info=DB::table('admin_tbl')->select('*')->where('admin_id',$admin_id)->first();
  $manage_admin=view('admin.admin_edit')->with('admin_info',$admin_info);
   return view('layout')->with('admin_edit',$manage_admin);

}
//adminupdate
public function adminupdte(Request $request,$admin_id){

     $data=array();
    $data['admin_name']=$request->admin_name;
    $data['admin_email']=$request->admin_email;
    $data['admin_phone']=$request->admin_phone;
    DB::table('admin_tbl')->where('admin_id',$admin_id)->update($data);
    //for shng mssagp
    Session::put('message','Data updated successfully');
    return Redirect::to('/viewprofile');
     }

//admn admindelete
public function admindelete($admin_id){
 DB::table('admin_tbl')->where('admin_id',$admin_id)->delete(); 
 Session::put('message','Data delete successfully');
   return Redirect::to('/viewprofile');

    }



//mth0d admn seeting
public function seeting(){
return view('admin.seeting');

}
}
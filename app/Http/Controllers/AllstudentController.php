<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;//PP
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class AllstudentController extends Controller{
    //allstudent
   public function allstudent(){
//f0 all stdnt

        $allstudent_info=DB::table('student_tbl')->get();
      	$manage_allstudent=view('admin.allstudent')->with('allstudent_info',$allstudent_info);
        return view('layout')->with('allstudent',$manage_allstudent);
        return Redirect::to('/allstudent');
	
     }
//mthd f0f student_delete
public function student_delete($student_id){
 DB::table('student_tbl')->where('student_id',$student_id)->delete(); 
 //Session::put('message','Data added successfully');
   return Redirect::to('/allstudent');

    }
//mthfd student_view
public function student_view($student_id){
 $student_view_info=DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();
$manage_studentview=view('admin.studentview')->with('student_view_info',$student_view_info);
 return view('layout')->with('student_view_info',$manage_studentview);

      }
//student_edit
public function studentedit($student_id){
//$student_info=DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();
  //$manage_student=view('admin.student_edit')->with('all_student_info',$student_info);
   //return view('layout')->with('student_edit',$manage_student);

    }


public function studentsedit($student_id){
$student_info=DB::table('student_tbl')->where('student_id',$student_id)->first();
  $manage_student=view('admin.student_edit')->with('all_student_info',$student_info);
   return view('layout')->with('student_edit',$manage_student);

    }


//studentupdte
public function studentupdte(Request $request,$student_id){

     $data=array();
    $data['student_name']=$request->student_name;
    $data['student_roll']=$request->student_roll;
    $data['student_fathername']=$request->student_fathername;
    $data['student_mothername']=$request->student_mothername;
    $data['student_email']=$request->student_email;
    $data['student_phone']=$request->student_phone;
    $data['student_address']=$request->student_address;
    $data['student_password']=md5($request->student_password);
    $data['student_admissionyear']=$request->student_admissionyear;
    $data['student_department']=$request->student_department;
    DB::table('student_tbl')->where('student_id',$student_id)->update($data);
    //for shng mssagp
    Session::put('message','Data updated successfully');
    return Redirect::to('/allstudent');
     }

}

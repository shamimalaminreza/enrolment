<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;//PP
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class AddstudentController extends Controller{
    //addstudent
    public function addstudent(){
	return view('admin.addstudent');
     }
     //add stdnt by imag 
     public function savestudent(Request $request){
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
     $image=$request->file('student_image');
 if ($image) {
       	$image_name=str_random(20);
       	$txt=strtolower($image->getClientOriginalExtension());
       	$image_full_name=$image_name.'.'.$txt;
       	$upload_path='image/';
       	$image_url=$upload_path.$image_full_name;
       	$success=$image->move($upload_path, $image_full_name);
       	if ($success) {
       		$data['student_image']=$image_url;
             DB::table('student_tbl')->insert($data);
Session::put('message','Data  insert successfully');
         return Redirect::to('/addstudent');
       	}
       }
  $data['image']=$image_url;
  DB::table('student_tbl')->insert($data);
Session::put('message','Data  insert successfully');
   return Redirect::to('/addstudent');


DB::table('student_tbl')->insert($data);
Session::put('message','Data  insert successfully');
   return Redirect::to('/addstudent');
     }

//studentseeting
public function studentprofile(){
$student_id=Session::get('student_id');
 $student_profile=DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();
$manage_student=view('student.student_view')->with('student_profiles',$student_profile);
 return view('student_layout')->with('student_view',$manage_student);
//return view('student.student_view');

       }

}

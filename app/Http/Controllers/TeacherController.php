<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;//PP
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    //allteacher
    public function allteacher(){
	return view('admin.allteacher');  

     }
//mthd addteacher
    public function addteacher(){
	return view('admin.add_teacher');

     }
//mthd saveteacher

     public function  saveteacher(Request $request){
     $data=array();
     $data['teacher_name']=$request->teacher_name;
     $data['teacher_phone']=$request->teacher_phone;
     $data['teacher_address']=$request->teacher_address;
     $data['teacher_department']=$request->teacher_department;
     $image=$request->file('teacher_image');
     if ($image) {
       	$image_name=str_random(20);
       	$txt=strtolower($image->getClientOriginalExtension());
       	$image_full_name=$image_name.'.'.$txt;
       	$upload_path='image/';
       	$image_url=$upload_path.$image_full_name;
       	$success=$image->move($upload_path, $image_full_name);
       	if ($success) {
       		$data['teacher_image']=$image_url;
             DB::table('teacher_tbl')->insert($data);
     Session::put('message','Data  insert successfully');
         return Redirect::to('/add_teacher');
       	}
       }

  $data['image']=$image_url;
  DB::table('teacher_tbl')->insert($data);
Session::put('message','Data  insert successfully');
   return Redirect::to('/add_teacher');


DB::table('teacher_tbl')->insert($data);
Session::put('message','Data  insert successfully');
   return Redirect::to('/add_teacher');

   }

//fnd allteacher
     public function all_teacher(){
     //f0 all stdnt
        $allteacher_info=DB::table('teacher_tbl')->get();
      	$manage_allteacher=view('admin.allteacher')->with('allteacher_info',$allteacher_info);
        return view('layout')->with('allteacher',$manage_allteacher);
        return Redirect::to('/allteacher');
	
     }

//teacher teacheredit
public function teacheredit($teacher_id){
$teacher_info=DB::table('teacher_tbl')->select('*')->where('teacher_id',$teacher_id)->first();
$manage_teacher=view('admin.teacher_edit')->with('teacher_info',$teacher_info);
return view('layout')->with('teacher_edit',$manage_teacher);

    }
//updateteacher
  public function updateteacher(Request $request, $teacher_id){
  $data=array();
  $data['teacher_id']=$request->teacher_id;
  $data['teacher_name']=$request->teacher_name;
  $data['teacher_address']=$request->teacher_address;
  $data['teacher_phone']=$request->teacher_phone;
  DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->update($data);
  Session::put('message','Message update successfully');
  return Redirect::to('/allteacher');

      }

      //teacher view
  public function teacherview($teacher_id){
$teacher_view_info=DB::table('teacher_tbl')->select('*')->where('teacher_id',$teacher_id)->first();
$manage_teacher=view('admin.teacher_view')->with('teacher_view_info',$teacher_view_info);
return view('layout')->with('teacher_view',$manage_teacher);

      }


public function viewteacher(Request $request, $teacher_id){
  Session::put('message','Data view successfully');
  return Redirect::to('/allteacher');

}

///mth  teacherdelete

public function teacherdelete($teacher_id){
DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->delete();
 Session::put('message','Data delete successfully');
  return Redirect::to('/allteacher');


     }


 }
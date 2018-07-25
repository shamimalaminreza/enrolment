<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CseController extends Controller
{
    //cse
    public function cse(){
        $cseallstudent_info=DB::table('student_tbl')->where(['student_department'=>1])->get();



      	$csemanage_allstudent=view('admin.cse')->with('cseallstudent_info',$cseallstudent_info);
        return view('layout')->with('cse',$csemanage_allstudent);
	//return view('admin.cse');

     }

}

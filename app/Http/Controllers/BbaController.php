<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BbaController extends Controller
{
    //bba all dt
    public function bba(){

         $bbaallstudent_info=DB::table('student_tbl')->where(['student_department'=>2])->get();
      	$bbamanage_allstudent=view('admin.bba')->with('bbaallstudent_info',$bbaallstudent_info);
        return view('layout')->with('bba',$bbamanage_allstudent);
	     //return view('admin.bba');

     }
}

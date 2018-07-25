<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MBAController extends Controller
{
    //mba
    public function mba(){
	 $mbaallstudent_info=DB::table('student_tbl')->where(['student_department'=>5])->get();
      	$mbamanage_allstudent=view('admin.mba')->with('mbaallstudent_info',$mbaallstudent_info);
        return view('layout')->with('mba',$mbamanage_allstudent);

     }

}

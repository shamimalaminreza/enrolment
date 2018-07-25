<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EEEController extends Controller
{
    //eee
     public function eee(){
         $eeeallstudent_info=DB::table('student_tbl')->where(['student_department'=>3])->get();
      	$eeemanage_allstudent=view('admin.eee')->with('eeeallstudent_info',$eeeallstudent_info);
        return view('layout')->with('eee',$eeemanage_allstudent);

     }

}

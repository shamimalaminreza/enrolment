<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EceController extends Controller
{
    //ece
    public function ece(){
	 $eceallstudent_info=DB::table('student_tbl')->where(['student_department'=>4])->get();
      	$ecemanage_allstudent=view('admin.ece')->with('eceallstudent_info',$eceallstudent_info);
        return view('layout')->with('ece',$ecemanage_allstudent);

     }
}

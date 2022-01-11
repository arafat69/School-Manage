<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function DashboardView(){
        $totalstudent=DB::table('students')
          ->where('status',1)
          ->get()->count();

        $totalteacher=DB::table('teachers')
          ->where('status',1)
          ->get()->count();

        $totaldepartment=DB::table('department')
          ->where('status',1)
          ->get()->count();

          return view('/dashboard',compact('totalstudent','totalteacher','totaldepartment'));
    }
}

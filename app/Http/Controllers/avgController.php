<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class avgController extends Controller
{

    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {

        $avgS =  DB::table('instructor')->groupBy('dept_name')->select( 'dept_name', DB::raw('AVG(salary) as average_salary'))->get();
        return view('avg', compact('avgS'));
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class delPhysController extends Controller
{
  /**
   * Show a list of all of the application's users.
   *
   * @return Response
   */
  public function index()
  {
    $user = auth()->user();
    if($user->name != 'weak' || $user->name != 'medium'){
      $select1 = DB::table('instructor')->get();
      $select =DB::table('instructor')->where('dept_name','=','Finance')->delete();
      $select = DB::table('instructor')->get();
      return view('inc', compact('select','select1'));
    }
    else {
      echo '‘Insufficient authorization level. delete failed’';
    }
  }
}

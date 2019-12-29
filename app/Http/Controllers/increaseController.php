<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class increaseController extends Controller
{
  /**
   * Show a list of all of the application's users.
   *
   * @return Response
   */
  public function index()
  {
    $user = auth()->user();
    if($user->name != 'weak')
    {
      $select1 = DB::table('instructor')->get();
      $select =DB::table('instructor')->where('salary', '<','65000')->update(['salary' =>DB::raw('salary *1.5') ]);
      $select = DB::table('instructor')->get();
      return view('inc', compact('select','select1'));
    }
    else {
      echo 'Insufficient Authorization level. Update failed.';
    }
  }
}

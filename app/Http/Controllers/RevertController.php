<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Schema;
class RevertController extends Controller
{
  /**
   * Show a list of all of the application's users.
   *
   * @return Response
   */
  public function index()
  {

    $user = auth()->user();
    if($user->name == 'strong')
    {
      //drop instructor and course
        $select = Schema::dropIfExists('instructor');
        $select = Schema::dropIfExists('course');
//add course and instructor back with values
      $select2 = shell_exec('php artisan migrate:fresh --path=/database/migrations/myTables');

    //  $select2 = shell_exec('php artisan migrate:fresh --path')
      $success = "TRUE";
      return view('revert', compact('success'));
    }
    else {
      echo '‘Insufficient authorization level. please use admin panel instead’';
    }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class usrSetController extends Controller
{
  /**
   * Show a list of all of the application's users.
   *
   * @return Response
   */
  public function index()
  {

      //add users manually

      //  system("cmd /c /addUser.bat");
    //    $db = "Tables_in_".env('DB_DATABASE');
      //  $command = shell_exec('php artisan tinker');
      //  $command = shell_exec("\App\User::create{['name' => 'strong', 'email' => 'strong@strong.com', 'password' => bcrypt('password3')]};");
      //  $command = shell_exec("\App\User::create{['name' => 'medium', 'email' => 'medium@medium.com', 'password' => bcrypt('password2')]};");
      //  $command = shell_exec("\App\User::create{['name' => 'weak', 'email' => 'weak@weak.com', 'password' => bcrypt('password1')]};");

        $select1 = DB::raw("GRANT ALL ON asg4 TO 'strong' @'%';");
          
        $select = DB::raw("GRANT SELECT, INSERT, UPDATE ON asg4 TO 'medium' @'%';");
      $select2 = DB::raw("GRANT SELECT ON asg4 TO 'weak' @'%';");
      $success = "TRUE";
      return view('usr', compact('success'));
  }
}

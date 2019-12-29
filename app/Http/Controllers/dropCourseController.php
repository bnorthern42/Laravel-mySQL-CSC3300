<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use DB;
class dropCourseController extends Controller
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
      $db = "Tables_in_".env('DB_DATABASE');
      $tables_in_db = DB::select('SHOW TABLES');
      $select1 = Schema::dropIfExists('course');
      $tables1 = [];
      foreach($tables_in_db as $table){
        $tables1[] = $table->{$db};
      }
      $select = DB::select('SHOW TABLES');
      $tables = [];
      foreach($select as $table){
        $tables[] = $table->{$db};
      }
      return view('drop', compact('tables1','tables'));
    }
    else {
      echo '‘Insufficient authorization level. delete failed’';
    }
  }
}

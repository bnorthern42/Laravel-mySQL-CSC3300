<?php
//for some reason laravel is missing an alter table function. probably has it just made a work around, see comment below
//to find raw sql statement.
namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use DB;
class addOfficeNoController extends Controller
{

      /**
       * Show a list of all of the application's users.
       *
       * @return Response
       */
      public function index()
      {
        $user = auth()->user();
        if($user->name == 'strong'){
        $select1 = DB::table('instructor')->get();
        $select = Schema::table('instructor', function (Blueprint $table) {
          $table->string('phone_number')->nullable();
        });
        $select = DB::table('instructor')->get();
        return view('add', compact('select','select1'));

    }
    else {
      echo "Insufficient authorization level. can't add attribute";
    }
}
  }

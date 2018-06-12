<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades;
use Illuminate\Database\Eloquent\Model;

class tablecreator extends Controller
{
 
	

		 public function cra1()
        {
            return $this->cra1();
	//$batch = DB::table('migrations')->max('batch');
	//return $batch;
/*
	 $migrations = new migrations;
        $migrations->migration = 'create_.._table';
        $migrations->batch = $batch;	
        $migrations->save();
return $migrations;*/
          //  return $id;
            /*if (Schema::IfExists(1)) {
            	return 'sdf';
        
            }else{
            	Schema::create(1, function (Blueprint $table) {
                $table->increments('mid');
                $table->integer('sender');
                $table->text('msg');
                $table->char('status', 2);
                $table->timestamps();
                    });

            }*/
        }
	/*	try { 
  $results = \DB::connection("e")
    ->select(\DB::raw("SELECT * FROM unknown_table"))
    ->first(); 
    // Closures include ->first(), ->get(), ->pluck(), etc.
} catch(\Illuminate\Database\QueryException $ex){ 
  dd($ex->getMessage()); 
  // Note any method of class PDOException can be called on $ex.
}*/
/*$exitCode = Artisan::call('migrate');
return $exitCode;


		Artisan::call('make:migration:schema', ['name' => 'create_test_table', '--schema' => 'username:string, email:string:unique']);*/
	//	Artisan::call('migrate', array('--path' => 'app/migrations', '--force' => true));
		//return 'work';
  // CreateMessagesTable::up(2);
	
    //get the reciver id and sender id and genderte the table using messages model 

   public function cra()
    {
        
        return "cre";
    }

}

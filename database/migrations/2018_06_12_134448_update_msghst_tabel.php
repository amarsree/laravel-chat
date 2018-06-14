<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMsghstTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::table('msghst', function (Blueprint $table) {
             $table->string('name')->after('con_id');
             $table->string('user_id')->after('msg');
             $table->string('receiver')->after('user_id');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('msghst', function (Blueprint $table) {
           $table->dropColumn('name');
          $table->dropColumn('user_id');
          $table->dropColumn('receiver');
            });
    }
         
    
}

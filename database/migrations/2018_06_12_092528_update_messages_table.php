<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('messages', function (Blueprint $table) {
           // $table->string('name', 50)->nullable()->change();
                $table->foreign('sender')
              ->references('id')->on('user')
              ->onDelete('cascade');

               $table->foreign('receiver')
              ->references('id')->on('user')
              ->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
             // $table->dropColumn(['votes', 'avatar', 'location']);
                $table->dropForeign('sender');
                $table->dropForeign('receiver');
        });
    }
}

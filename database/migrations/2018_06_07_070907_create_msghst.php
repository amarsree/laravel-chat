<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgHst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('msghst', function (Blueprint $table) {
                $table->increments('id');
                $table->char('con_id');
                $table->string('name');
                $table->text('msg');
                $table->string('user_id');
                $table->string('receiver');
                $table->char('unread_count', 1);
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('msghst');
    }
}

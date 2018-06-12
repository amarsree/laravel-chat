<?php

use Illuminate\Database\Seeder;

class messages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'sender' => 12||2,
            'msg' => str_random(20),
            'status' => 1,
        ]);
    }
}

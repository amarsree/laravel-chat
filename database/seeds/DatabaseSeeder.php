<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\messages;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('messages')->insert([
            'sender' => 12,
            'msg' => str_random(20),
            'status' => 1,
        ]);

    }
}

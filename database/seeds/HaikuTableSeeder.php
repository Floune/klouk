<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HaikuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("haikus")->insert([
            [
                "text" => "Le matin",
                "part" => 1,
            ],
            [
                "text" => "qu'est-ce que tu vas faire ?",
                "part" => 3,
            ],
            [
                "text" => "En érection",
                "part" => 2,
            ],

        ]);
    }
}

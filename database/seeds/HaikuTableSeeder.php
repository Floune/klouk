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
                "user_id" => 1
            ],
            [
                "text" => "Tu suces",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Pas grave",
                "part" => 3,
                "user_id" => 1
            ],
            [
                "text" => "Le printemps est là",
                "part" => 1,
                "user_id" => 1
            ],
            [
                "text" => "Les chiens s'enculent",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Joie !",
                "part" => 3,
                "user_id" => 1
            ],
            [
                "text" => "Parmis les putes",
                "part" => 1,
                "user_id" => 1
            ],
            [
                "text" => "il Déambule",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Avec moiteur",
                "part" => 3,
                "user_id" => 1
            ],
        ]);
    }
}

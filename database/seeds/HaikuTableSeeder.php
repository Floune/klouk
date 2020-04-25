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
                "text" => "qu'est-ce que tu vas faire ?",
                "part" => 3,
                "user_id" => 1
            ],
            [
                "text" => "En érection",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Un peu de ricard",
                "part" => 3,
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
                "text" => "Deux chiens s'enculent",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Joie !",
                "part" => 3,
                "user_id" => 1
            ],
            [
                "text" => "Parmis les fleurs",
                "part" => 1,
                "user_id" => 1
            ],
            [
                "text" => "il fourre",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Avec moiteur",
                "part" => 3,
                "user_id" => 1
            ],
            [
                "text" => "Si demain",
                "part" => 1,
                "user_id" => 1
            ],
            [
                "text" => "Il fait trop chaud",
                "part" => 2,
                "user_id" => 1
            ],
            [
                "text" => "Je démissionne",
                "part" => 3,
                "user_id" => 1
            ],
        ]);
    }
}

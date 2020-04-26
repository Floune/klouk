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
                "text" => "Tu suces",
                "part" => 2,
            ],
            [
                "text" => "Pas grave",
                "part" => 3,
            ],
            [
                "text" => "Le printemps est là",
                "part" => 1,
            ],
            [
                "text" => "Deux chiens s'enculent",
                "part" => 2,
            ],
            [
                "text" => "Joie !",
                "part" => 3,
            ],
            [
                "text" => "Parmi les fleurs",
                "part" => 1,
            ],
            [
                "text" => "il fourre",
                "part" => 2,
            ],
            [
                "text" => "Avec moiteur",
                "part" => 3,
            ],
            [
                "text" => "Si demain",
                "part" => 1,
            ],
            [
                "text" => "Il fait trop chaud",
                "part" => 2,
            ],
            [
                "text" => "Je démissionne",
                "part" => 3,
            ],

        ]);
    }
}

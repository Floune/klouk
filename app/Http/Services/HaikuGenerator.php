<?php


namespace App\Http\Services;


use App\Haiku;

class HaikuGenerator
{
    public function get() {
        return [
            Haiku::where('part', 1)->get()->random()->text,
            Haiku::where('part', 2)->get()->random()->text,
            Haiku::where('part', 3)->get()->random()->text,
        ];
    }
}

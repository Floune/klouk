<?php


namespace App\Http\Services;


use App\Haiku;

class HaikuGenerator
{
    public function get() {

        $un = Haiku::where('part', 1)->get()->random();
        $deux = Haiku::where('part', 2)->get()->random();
        $trois = Haiku::where('part', 3)->get()->random();

        return [
            [$un->text, $un->id],
            [$deux->text, $deux->id],
            [$trois->text, $trois->id],
        ];
    }
}

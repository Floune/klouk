<?php


namespace App\Http\Services;


use App\Defav;
use App\Haiku;

class HaikuGenerator
{

    public function generate() {
            $un = Haiku::where('part', 1)->get()->random();
            $deux = Haiku::where('part', 2)->get()->random();
            $trois = Haiku::where('part', 3)->get()->random();
            $key = $un->id . '' . $deux->id . '' . $trois->id;
        return [
            [$un->text, $un->id],
            [$deux->text, $deux->id],
            [$trois->text, $trois->id]
        ];
    }

    public function get() {
        return $this->generate();
    }
}

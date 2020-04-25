<?php

namespace App\Http\Controllers;

use App\Haiku;
use App\Http\Requests\FavDestroyRequest;
use App\Http\Requests\FavStoreRequest;
use App\Http\Services\HaikuGenerator;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HaikuController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (!is_null($request->input('debut'))) {
            $debut = new Haiku();
            $debut->text = $request->input('debut');
            $debut->part = 1;
            $debut->save();
        }

        if (!is_null($request->input('milieu'))) {
            $milieu = new Haiku();
            $milieu->part = 2;
            $milieu->text = $request->input('milieu');
            $milieu->save();
        }

        if (!is_null($request->input('fin'))) {
            $fin = new Haiku();
            $fin->part = 3;
            $fin->text = $request->input('fin');
            $fin->save();
        }

        return redirect()->back();
    }

    public function fav(FavStoreRequest $request) {
        $key = join('_', explode(', ', $request->input('va')));
        if($request->input('type') === "fav") {
            $score = Score::firstOrNew(['key' => $key]);
            $score->key = $key;
            $score->score += 1;
            $score->save();
        }
        if($request->input('type') === "defav") {
            $score = Score::firstOrNew(['key' => $key]);
            $score->key = $key;
            $score->score -= 1;
            $score->save();
        }
        return redirect()->back();
    }



    /**
     * @return array
     */
    public function show()
    {
        return (new HaikuGenerator())->get();
    }

}

<?php

namespace App\Http\Controllers;

use App\Fav;
use App\Haiku;
use App\Http\Requests\FavDestroyRequest;
use App\Http\Services\HaikuGenerator;
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
            Auth::user()->haikus()->save($debut);
        }

        if (!is_null($request->input('milieu'))) {
            $milieu = new Haiku();
            $milieu->part = 2;
            $milieu->text = $request->input('milieu');
            Auth::user()->haikus()->save($milieu);
        }

        if (!is_null($request->input('fin'))) {
            $fin = new Haiku();
            $fin->part = 3;
            $fin->text = $request->input('fin');
            Auth::user()->haikus()->save($fin);
        }

        return redirect()->back();
    }

    public function fav(Request $request) {
        if($request->input('type') === "fav") {
            $fav = Fav::make(["text" => $request->input('va')]);
            Auth::user()->favs()->save($fav);
        }
        if($request->input('type') === "defav") {
            //  ¯\_(ツ)_/¯
        }
        return redirect()->back();
    }

    public function destroyFav(FavDestroyRequest $request) {
        DB::table('favs')->where('id', $request->input('id'))->delete();
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

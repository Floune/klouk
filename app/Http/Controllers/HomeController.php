<?php

namespace App\Http\Controllers;

use App\Defav;
use App\Fav;
use App\Score;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fame = Score::where('score', '>', 4)->get();
        $shame = Score::where('score', '<', -4)->get();
        return view('home')->with(['fame' => $fame, 'shame' => $shame]);
    }
}

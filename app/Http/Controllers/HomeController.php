<?php

namespace App\Http\Controllers;

use App\Cars;
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
    protected function index()
    {
        $models = Cars::all()->toJson();
        $segmentos = Cars::all()->unique('segment');
        $models = json_decode($models);
        return view('home', compact('models', 'segmentos'));
    }

    protected function filter($segmento)
    {
        $models = Cars::where('segment', '=', $segmento)->get()->toJson();
        $models = json_decode($models);
        $segmentos = Cars::all()->unique('segment');
        return view('home', compact('models', 'segmentos'));
    }
}
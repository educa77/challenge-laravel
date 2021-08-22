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
    protected function index(Request $request)
    {
        if (count($request->all()) > 0) {
            $field = $request[0];
            $direction = $request[1];
            $models = Cars::orderBy($field, $direction)->get()->toJson();
            $segmentos = Cars::all()->unique('segment');
            $models = json_decode($models);
            return view('home', compact('models', 'segmentos'));
        } else {
            $models = Cars::all()->toJson();
            $segmentos = Cars::all()->unique('segment');
            $models = json_decode($models);
            return view('home', compact('models', 'segmentos'));
        }
    }

    protected function filter($segmento,  Request $request)
    {
        if (count($request->all()) > 0) {
            $field = $request[0];
            $direction = $request[1];
            $models = Cars::orderBy($field, $direction)->where('segment', '=', $segmento)->get()->toJson();
            $segmentos = Cars::all()->unique('segment');
            $models = json_decode($models);
            $segmento =  $request->segment(2);
            return view('home', compact('models', 'segmentos', 'segmento'));
        } else {
            $models = Cars::where('segment', '=', $segmento)->get()->toJson();
            $models = json_decode($models);
            $segmentos = Cars::all()->unique('segment');
            $segmento =  $request->segment(2);
            return view('home', compact('models', 'segmentos', 'segmento'));
        }
    }

    protected function detail($id)
    {
        return view(('detail'));
    }
}
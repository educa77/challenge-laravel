<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Detail;
use App\Segment;
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
        if (count($request->query()) > 0) {
            $field = $request->query(0);
            $direction = $request->query(1);
            $models = Cars::orderBy($field, $direction)->get()->toJson();
            $segmentos = Segment::all()->toJson();
            $segmentos = json_decode($segmentos);
            $models = json_decode($models);
            return view('home', compact('models', 'segmentos'));
        } else {
            $models = Cars::all()->toJson();
            $segmentos = Segment::all()->toJson();
            $segmentos = json_decode($segmentos);
            $models = json_decode($models);
            return view('home', compact('models', 'segmentos'));
        }
    }

    protected function filter($segment,  Request $request)
    {
        if (count($request->query()) > 0) {
            $field = $request->query(0);
            $direction = $request->query(1);
            $models = Cars::orderBy($field, $direction)->where('segment', '=', $segment)->get()->toJson();
            $segmentos = Segment::all()->toJson();
            $segmentos = json_decode($segmentos);
            $models = json_decode($models);
            $segmento =  $request->segment(2);
            return view('home', compact('models', 'segmentos', 'segmento'));
        } else {
            $models = Cars::where('segment', '=', $segment)->get()->toJson();
            $models = json_decode($models);
            $segmentos = Segment::all()->toJson();
            $segmentos = json_decode($segmentos);
            $segmento =  $request->segment(2);
            return view('home', compact('models', 'segmentos', 'segmento'));
        }
    }

    protected function detail($id)
    {
        $details = Detail::where('cars_id', $id)->get()->toJson();
        $details = json_decode($details);
        $carcomplete = Cars::find($id)->load(['detail']);
        return view('detail', compact('details'));
    }
}
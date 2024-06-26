<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = [
            'Punisher',
            'Lost',
            'The Flash'
        ];

        return view('listar-series') ->with('series', $series);
    }

    public function create(){

        return view('series.create');
    }
}

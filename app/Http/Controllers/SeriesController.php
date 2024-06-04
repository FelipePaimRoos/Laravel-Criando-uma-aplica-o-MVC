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

        return view('listar-series', compact('series'));
    }
}

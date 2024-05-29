<?php

namespace App\Http\Controllers;

class SeriesController{

    public function listarSeries(){
        $series = [
            'Punisher',
            'Lost',
            'Greys Anatomy'
        ];

        $html = '<ul>';
        foreach ($series as $series) {
            $html .= "<li>$series</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
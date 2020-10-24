<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {   
        $data = [
            "title" => "Ldvloper · Inicio",
            "description" => "En Ldvloper ofrecemos soluciones de software, servicio de creación de páginas web y soluciones informáticas.",
            "url_site" =>  "",
            //Choose CSS & JS
            "style" =>  'css/home/main.css',
            "responsive" => 'css/home/responsive.css',
            "script" =>  'js/custom.js'
        ];

        return view('site.index', $data);
    }
}

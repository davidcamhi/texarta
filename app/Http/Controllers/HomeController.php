<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;
use App\Slide;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::get();
        $catalogo = Catalog::get();

        return view('web_home.index')
            ->with('catalogo',$catalogo)
            ->with('slides',$slides);
    }
}

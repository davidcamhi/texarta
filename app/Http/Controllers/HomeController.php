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
        $catalogo = Catalog::where('id','=','1')->get()->first();

        return view('web_home.index', compact('slides'), compact('catalogo') );
    }
}

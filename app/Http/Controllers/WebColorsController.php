<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Product;
use App\Category;
use App\Catalog;
use App\Color;

class WebColorsController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::get();
        $catalogo = Catalog::get();

        return view('web_colors.index')
        ->with('colors',$colors)
        ->with('catalogo',$catalogo);
    }
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function show($name)
    {
        $color = Color::where('name','=', $name)->firstOrFail();

        $products = Product::where('color_id', $color->id)->get();
        $catalogo = Catalog::where('id','=','1')->get()->first();

        return view('web_colors.show')
            ->with('color',$color)
            ->with('products', $products)
            ->with('catalogo',$catalogo);
    }
	
}

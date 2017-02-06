<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Product;
use App\Category;
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
        return view('web_colors.index',compact('colors'));
    }
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $color = Color::findOrFail($id);
        $products = Product::where('color_id', $id)->get();
        
         return view('web_colors.show')
            ->with('color',$color)
            ->with('products', $products);
    }
	
}

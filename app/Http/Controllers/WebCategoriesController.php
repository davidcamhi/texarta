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

class WebCategoriesController extends Controller
{
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();
        
         return view('web_categories.show')
            ->with('category',$category)
            ->with('products', $products);
    }
	
}

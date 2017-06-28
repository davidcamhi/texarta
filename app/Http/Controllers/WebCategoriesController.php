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
use App\Catalog;

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
        $catalogo = Catalog::where('id','=','1')->get()->first();

        return view('web_categories.show')
            ->with('category',$category)
            ->with('products', $products)
             ->with('catalogo',$catalogo);
    }
	
}

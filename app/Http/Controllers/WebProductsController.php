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

class WebProductsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        $catalogo = Catalog::where('id','=','1')->get()->first();

        return view('web_products.index')
        ->with('products',$products)
        ->with('categories',$categories)
        ->with('catalogo',$catalogo);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        $result_products = Product::where('name','like','%'.$search.'%')
            ->orderBy('name')->get();
        $result_colors = Color::where('name','like','%'.$search.'%')
            ->orderBy('name')->get();
        $result_categories = Category::where('name','like','%'.$search.'%')
            ->orderBy('name')->get();

        $catalogo = Catalog::where('id','=','1')->get()->first();

        return view('web_products.search')
        ->with('result_products',$result_products)
        ->with('result_colors',$result_colors)
        ->with('result_categories',$result_categories)
        ->with('catalogo',$catalogo);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($category_id,$name)
    {
       // $category = Category::where('id', $category_id)->get();
        $product = Product::where('name',$name)->where('category_id',$category_id)->get()->first();

        $others = Product::where('color_id', $product->color_id)->get();
        $catalogo = Catalog::where('id','=','1')->get()->first();

        return view('web_products.show')
            ->with('others',$others)
            ->with('product', $product)
            ->with('catalogo',$catalogo);
    }
}

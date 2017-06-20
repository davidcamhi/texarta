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
        return view('web_products.index', compact('products'),compact('categories'));
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


        return view('web_products.search', compact('result_products'),compact('result_colors'),compact('result_categories'));
}
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function show($id)
{

    $product = Product::findOrFail($id);
    $others = Product::where('color_id', $product->color_id)->get();
    return view('web_products.show')
        ->with('others',$others)
        ->with('product', $product);
}
}

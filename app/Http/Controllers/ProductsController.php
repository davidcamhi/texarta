<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreProduct;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Product;
use App\Category;
use App\Color;
use App\Catalog;


class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $catalogo = Catalog::get();

        return view('products.index', compact('products'), compact('catalogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');
        $colors = Color::orderBy('name')->pluck('name', 'id');
        
        $categories->all();
        $colors->all();
        
         return view('products.create')
            ->with('categories', $categories)
            ->with('colors', $colors);
    }

    /**
     * Store User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postProduct(StoreProduct $request)
    {
        $product = new Product;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->color_id = $request->get('color_id');
        $product->category_id = $request->get('category_id');
        $product->available = $request->get('available');
        $product->main = $request->get('main');
        $product->fiber = $request->get('fiber');
        $product->width = $request->get('width');
        $product->weight = $request->get('weight');
        $product->fabric = $request->get('fabric');
        $product->backing = $request->get('backing');
        $product->pattern = $request->get('pattern');
        
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('../public/images/web_page/products', $imageName);
        $product->image = $imageName;
        
        $product->save();

        return redirect('productos');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Edit User
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::orderBy('name')->pluck('name', 'id');
        $colors = Color::orderBy('name')->pluck('name', 'id');
        
        $categories->all();
        $colors->all();
        
         return view('products.edit')
            ->with('categories', $categories)
            ->with('product', $product)
            ->with('colors', $colors);
        
    }

    /**
     * Update user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->color_id = $request->get('color_id');
        $product->category_id = $request->get('category_id');
        $product->available = $request->get('available');
        $product->main = $request->get('main');
        $product->fiber = $request->get('fiber');
        $product->width = $request->get('width');
        $product->weight = $request->get('weight');
        $product->fabric = $request->get('fabric');
        $product->backing = $request->get('backing');
        $product->pattern = $request->get('pattern');
        
		if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move('../public/images/web_page/products', $imageName);
            $product->image = $imageName;
        }
        
        $product->save();

        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
     /**
     * Delete (method used for confirmation screen)
     *
     * @param SimpleRequest $request
     * @return Response
     */
    public function getDelete(Request $request)
    {
        $id_product = $request->get('id');

        $product = Product::findOrFail($id_product);
        $product->delete();

        return('Delete successfull!');
    }
}

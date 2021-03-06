<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StorePrice;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Price;
use App\Product;
use App\Category;
use App\Color;
use App\Catalog;
use App\Contact;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::get();

        return view('web_prices.admin_price', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');
        $products = Product::orderBy('name')->pluck('name', 'id');
        $productos = Product::orderBy('name')->select('name', 'id','category_id')->get();

        $categories->all();
        $products->all();
        $catalogo = Catalog::get();
        $info = Contact::where('type','=','Cotización')->get()->first();


        return view('web_prices.price')
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('productos', $productos)
            ->with('info',$info)
            ->with('catalogo',$catalogo);
    }

    /**
     * Store User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPrice(StorePrice $request)
    {
        $price = new Price;
        $price->name = $request->get('name');
        $price->email = $request->get('email');
        $price->comments = $request->get('comments');
        $price->company = $request->get('company');
        $price->tel = $request->get('tel');
        $price->category_id = $request->get('category_id');
        $price->product_id = $request->get('product_id');
        $price->quantity = $request->get('quantity');
        $price->unit = $request->get('unit');
        
        $price->save();
        $request->session()->flash('alert-success', '!Gracias! A la brevedad responderemos a su petición, o nos pondremos en contacto con usted.');
        
        return redirect('cotizacion/create');
            
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
        $id_sample = $request->get('id');

        $sample = Price::findOrFail($id_sample);
        $sample->delete();

        return('Delete successfull!');
    }
}

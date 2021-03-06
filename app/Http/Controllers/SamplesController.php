<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreSample;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Sample;
use App\Product;
use App\Category;
use App\Color;
use App\Catalog;
use App\Contact;

class SamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples = Sample::get();

        return view('web_samples.admin_sample', compact('samples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');

        $productos = Product::orderBy('name')->select('name', 'id','category_id')->get();
        $products = Product::orderBy('name')->pluck('name', 'id');

        $productos->all();
        $categories->all();
        $catalogo = Catalog::get();
        $info = Contact::where('type','=','Muestra')->get()->first();


        return view('web_samples.sample')
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
    public function postSample(StoreSample $request)
    {
        $sample = new Sample;
        $sample->name = $request->get('name');
        $sample->email = $request->get('email');
        $sample->comments = $request->get('comments');
        $sample->company = $request->get('company');
        $sample->tel = $request->get('tel');
        $sample->category_id = $request->get('category_id');
        $sample->product_id = $request->get('product_id');
        
        $sample->save();
        $request->session()->flash('alert-success', '!Gracias! A la brevedad responderemos a su petición, o nos pondremos en contacto con usted.');
        
        return redirect('muestras/create');
            
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

        $sample = Sample::findOrFail($id_sample);
        $sample->delete();

        return('Delete successfull!');
    }
}

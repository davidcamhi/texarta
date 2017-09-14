<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreSample;

use App\Http\Requests\SimpleRequest;
use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Catalog;

class CatalogController extends Controller
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
        $catalog = Catalog::get();

        return view('catalog.index', compact('catalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');

        return view('catalog.create')
            ->with('categories',$categories);
    }

    /**
     * Store User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCatalog(Request $request)
    {
        $catalog = new Catalog;
        $catalog->name = $request->get('name');

        if ($request->hasFile('file')) {
            $imageName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move('../public/', $imageName);
            $catalog->link = $imageName;
        }
        $catalog->category_id = $request->get('category_id');

        $catalog->save();

        return redirect('catalogo');
    }

    /**
     * Edit User
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalog = Catalog::findOrFail($id);
        $categories = Category::orderBy('name')->pluck('name', 'id');

        return view('catalog.edit')
            ->with('categories',$categories)
            ->with('catalog', $catalog);

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
        $catalog = Catalog::findOrFail($id);
        $catalog->name = $request->get('name');
        $catalog->category_id = $request->get('category_id');

        if ($request->hasFile('file')) {
            $imageName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move('../public/', $imageName);
            $catalog->link = $imageName;
        }
        $catalog->save();

        return redirect('catalogo');
    }
    /**
     * Delete (method used for confirmation screen)
     *
     * @param SimpleRequest $request
     * @return Response
     */
    public function getDelete(Request $request)
    {
        $id_catalog = $request->get('id');

        $catalog = Catalog::findOrFail($id_catalog);
        $catalog->delete();


        return('Delete successfull!');
    }

}

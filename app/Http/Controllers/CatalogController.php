<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreSample;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Catalog;

class CatalogController extends Controller
{
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

        return view('catalog.create');
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

        return view('catalog.edit')
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

        if ($request->hasFile('file')) {
            $imageName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move('../public/', $imageName);
            $catalog->link = $imageName;
        }
        $catalog->save();

        return redirect('catalogo');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreSlider;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Slide;

class SlidesController extends Controller
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
        $slides = Slide::get();

        return view('slider.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('slider.create');
    }

    /**
     * Store User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postSlide(StoreSlider $request)
    {
        $slider = new Slide;
        $slider->name = $request->get('name');
        $slider->caption = $request->get('caption');
        $slider->text = $request->get('text');
        $slider->list = $request->get('list');
        $slider->button = $request->get('button');
        $slider->link = $request->get('link');

        $imageName = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move('../public/images/web_page/slides', $imageName);
        $slider->img = $imageName;

        $slider->save();

        return redirect('admin_slides');
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
        $slides = Slide::findOrFail($id);

        return view('slider.edit')
            ->with('slide', $slides);

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
        $slider = Slide::findOrFail($id);
        $slider->name = $request->get('name');
        $slider->caption = $request->get('caption');
        $slider->text = $request->get('text');
        $slider->list = $request->get('list');
        $slider->button = $request->get('button');
        $slider->link = $request->get('link');


        if ($request->hasFile('img')) {
            $imageName = time().'.'.$request->img->getClientOriginalExtension();
            $request->img->move('../public/images/web_page/slides', $imageName);
            $slider->img = $imageName;
        }
        $slider->save();

        return redirect('admin_slides');
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
        $id_slide = $request->get('id');

        $slide = Slide::find($id_slide);
        $slide->delete();

        return('Delete successfull!');
    }
}

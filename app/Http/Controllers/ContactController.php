<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreMessage;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Message;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_info = Contact::get();

        return view('contact.index', compact('contact_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('contact.create');
    }

    /**
     * Store User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postContact(Request $request)
    {
        $contact_info = new Contact();
        $contact_info->type = $request->get('type');
        $contact_info->main_text = $request->get('main_text');
        $contact_info->text2 = $request->get('text2');
        $contact_info->text3 = $request->get('text3');
        $contact_info->title1 = $request->get('title1');
        $contact_info->text_title = $request->get('text_title');
        $contact_info->address = $request->get('address');
        $contact_info->phone = $request->get('phone');
        $contact_info->email = $request->get('email');
        $contact_info->title2 = $request->get('title2');
        $contact_info->text_title2 = $request->get('text_title2');

        $contact_info->save();

        return redirect('info_contacto');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_info = Contact::findOrFail($id);

        return view('contact.edit')
            ->with('contact_info', $contact_info);

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
        $contact_info = Contact::findOrFail($id);
        $contact_info->type = $request->get('type');
        $contact_info->main_text = $request->get('main_text');
        $contact_info->text2 = $request->get('text2');
        $contact_info->text3 = $request->get('text3');
        $contact_info->title1 = $request->get('title1');
        $contact_info->text_title = $request->get('text_title');
        $contact_info->address = $request->get('address');
        $contact_info->phone = $request->get('phone');
        $contact_info->email = $request->get('email');
        $contact_info->title2 = $request->get('title2');
        $contact_info->text_title2 = $request->get('text_title2');

        $contact_info->save();

        return redirect('info_contacto');
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

}

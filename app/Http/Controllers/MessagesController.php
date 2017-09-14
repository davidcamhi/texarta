<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreMessage;

use App\Http\Requests\SimpleRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


use App\Message;
use App\Catalog;
use App\Contact;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::get();

        return view('web_messages.admin_message', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogo = Catalog::get();
        $info = Contact::where('type','=','Mensaje')->get()->first();

        return view('web_messages.message')
            ->with('info',$info)
            ->with('catalogo',$catalogo);
    }

    /**
     * Store User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postMessage(StoreMessage $request)
    {
        $message = new Message;
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->message = $request->get('message');
        $message->company = $request->get('company');
        $message->tel = $request->get('tel');
        
        $message->save();
        $request->session()->flash('alert-success', '!Gracias! A la brevedad responderemos a su petición, o nos pondremos en contacto con usted.');
        
        return redirect('mensajes/create');
            
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
     * Update user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        return redirect('messages/create');
        
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
        $id_message = $request->get('id');

        $message = Message::findOrFail($id_message);
        $message->delete();

        return('Delete successfull!');
    }
}

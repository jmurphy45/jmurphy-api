<?php

namespace App\Http\Controllers;

use App\Client;


class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index(){
        $response = Client::all();
        return responder()->success($response)->with('state')->respond();
    }

    public function edit($id){
        $response = Client::find($id);
        return responder()->success($response)->with('state')->respond();
    }

}

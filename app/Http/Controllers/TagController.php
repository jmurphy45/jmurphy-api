<?php

namespace App\Http\Controllers;

use App\Tag;
use State;

class TagController extends Controller
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
        $response = Tag::all();
        return responder()->success($response)->respond();
    }

    public function edit($id){
        $response = Tag::find($id);
        return responder()->success($response)->respond();
    }

}

<?php

namespace App\Http\Controllers;

use App\Work;
use State;

class WorkController extends Controller
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
        $response = Work::all();
        return responder()->success($response)->with('state','client')->respond();
    }

    public function edit($id){
        $response = Work::find($id);
        return responder()->success($response)->with('state')->respond();
    }

}

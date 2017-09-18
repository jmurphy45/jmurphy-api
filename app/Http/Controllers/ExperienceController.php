<?php

namespace App\Http\Controllers;

use App\Experience;
use State;

class ExperienceController extends Controller
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
        $response = Experience::all();
        //return response($response,200);
        return responder()->success($response)->with('state')->respond();
    }

    public function edit($id){
        $response = Experience::find($id);
        return responder()->success($response)->with('state')->respond();
    }

}

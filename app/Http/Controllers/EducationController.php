<?php

namespace App\Http\Controllers;

use App\Education;
use State;

class EducationController extends Controller
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
        $response = Education::all();
        return responder()->success($response)->with('state')->respond();
    }

    public function edit($id){
        $response = Education::find($id);
        return responder()->success($response)->with('state')->respond();
    }
}

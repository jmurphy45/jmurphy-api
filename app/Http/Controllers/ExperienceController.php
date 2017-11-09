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
        //$this->middleware('auth');
    }

    //

    public function index(){
        $response = Experience::all();
        //return response($response,200);
        return responder()->success($response)->with('state','work_experiences')->respond();
    }

    public function edit($id){
        $response = Experience::find($id);
        return responder()->success($response)->with('state', 'work_experiences')->respond();
    }

}

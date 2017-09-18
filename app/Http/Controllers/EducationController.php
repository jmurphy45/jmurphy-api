<?php

namespace App\Http\Controllers;

use App\Education;
use State;
use Flugg\Responder\Responder;

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
    public function index(Responder $responder){
        $response = Education::all();
        return responder()->success($response)->with('state')->respond();
    }

    public function edit($id){
        $response = Education::find($id);
        return responder()->success($response)->with('state')->respond();
    }
}

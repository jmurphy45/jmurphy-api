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
        return responder()->success($response)->with('state','client','work_tags','work_categories')->respond();
    }

    public function edit($id){
        $response = Work::find($id);
        return responder()->success($response)->with('state','client','work_tags','work_categories')->respond();
    }

    public function latest($num){
        $response = Work::orderBy('created_at', 'desc')->take($num);
        return responder()->success($response)->with('state','client','work_tags','work_categories')->respond();
    }

}

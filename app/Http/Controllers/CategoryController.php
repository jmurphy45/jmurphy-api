<?php

namespace App\Http\Controllers;

use App\Category;
use State;

class CategoryController extends Controller
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
        $response = Category::all();
        return responder()->success($response)->respond();
    }

    public function edit($id){
        $response = Category::find($id);
        return responder()->success($response)->respond();
    }

}

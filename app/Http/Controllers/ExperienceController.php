<?php

namespace App\Http\Controllers;

use App\Experience;

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
        return response($response,200);
    }

}

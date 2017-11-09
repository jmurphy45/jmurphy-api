<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Work;
use State;


class PortfolioController extends Controller
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
        $response = Portfolio::all()->take(9);
        return responder()->success($response)->with('work')->respond();
    }

}

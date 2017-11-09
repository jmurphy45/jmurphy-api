<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

class MailController extends Controller
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
    public function store(Request $request){
        $mail = new Mail();
        $message = $mail->send($request->input('name'),$request->input('email'),$request->input('message'));
        if(true){
            return responder()->success();
        }else{
            return responder()->error($message);
        }
    }

}

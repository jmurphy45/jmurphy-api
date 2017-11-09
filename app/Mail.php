<?php
/**
 * Created by PhpStorm.
 * User: josephmurphy
 * Date: 9/14/17
 * Time: 11:22 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Mailgun\Mailgun;

class Mail extends Model
{


    public function send($name,$from,$text){
        $mg = Mailgun::create(env('MAILGUN', ''));
        $mg->messages()->send(env('MAILGUN_URL', ''), [
            'from'    => $from,
            'to'      => env('EMAIL', ''),
            'subject' => 'Email from '.$name,
            'text'    => $text
        ]);
    }

}
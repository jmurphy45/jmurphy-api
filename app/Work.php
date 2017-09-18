<?php
/**
 * Created by PhpStorm.
 * User: josephmurphy
 * Date: 9/14/17
 * Time: 11:22 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    protected $table = 'works';
    //protected $hidden = ['state_id'];

    public function state(){
        return $this->belongsTo('App\State', 'state_id');
    }

    public function client(){
        return $this->belongsTo('App\Client', 'client_id');
    }
}
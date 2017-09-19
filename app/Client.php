<?php
/**
 * Created by PhpStorm.
 * User: josephmurphy
 * Date: 9/14/17
 * Time: 11:22 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';
    protected $hidden = ['state_id'];

    public function state(){
        return $this->belongsTo('App\State', 'state_id');
    }
}
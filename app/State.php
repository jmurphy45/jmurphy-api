<?php
/**
 * Created by PhpStorm.
 * User: josephmurphy
 * Date: 9/14/17
 * Time: 11:22 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    protected $table = 'states';
    protected $visible = ['name','code'];
    protected $hidden = ['created_at','updated_at'];
}
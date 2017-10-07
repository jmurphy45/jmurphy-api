<?php
/**
 * Created by PhpStorm.
 * User: josephmurphy
 * Date: 9/14/17
 * Time: 11:22 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $table = 'portfolio';
    protected $hidden = ['id','work_id','created_at','updated_at'];

    public function work1(){
        return  $this->hasMany('App\work', 'work_id');
    }

    public function work(){
        return $this->belongsTo('App\Work', 'work_id');
    }

}
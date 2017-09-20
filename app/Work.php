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
    protected $hidden = ['state_id'];

    public function state(){
        return $this->belongsTo('App\State', 'state_id');
    }

    public function client(){
        return $this->belongsTo('App\Client', 'client_id');
    }

    public function tags(){
        return  $this->hasMany('App\Tag', 'work_id');
    }

    public function work_tags(){
        return $this->tags()->where('type', '=', 'work');
    }


    public function categories(){
        return $this->hasMany('App\Category', 'work_id');
    }

    public function work_categories(){
        $states = new \App\State();
        return $this->categories()->where('type', '=', 'work')->with($this->state());
    }



}
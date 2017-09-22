<?php
/**
 * Created by PhpStorm.
 * User: josephmurphy
 * Date: 9/14/17
 * Time: 11:22 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{

    protected $table = 'work_experiences';
    protected $hidden = ['work_id'];

}
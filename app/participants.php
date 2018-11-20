<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 13-11-2018
 * Time: 15:26
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class participants extends Model
{
    //


    protected $table = "participants";
    protected $fillable = ["id", "firstname",'lastname','group_id', 'created_at','updated_at'];

}

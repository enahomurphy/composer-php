<?php
/**
 * Created by PhpStorm.
 * User: baby
 * Date: 5/14/2016
 * Time: 9:55 PM
 */

namespace Acme\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Testimonial extends  Eloquent
{
    public function User(){
       return $this->hasOne('Acme\models\User');
    }
}
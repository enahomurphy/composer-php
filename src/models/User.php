<?php namespace Acme\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends  Eloquent {

    public function testimonial(){
        return $this->hasMany('Acme\models\Testimonial');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
     //Primary Key
    public $primaryKey = 'id';

    public function pictures(){
        return $this->hasMany('App\Picture', 'name','category');
    }
}

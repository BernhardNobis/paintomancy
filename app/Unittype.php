<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unittype extends Model
{
    //
    
    //Primary Key
    public $primaryKey = 'id';


    public function category(){
        return $this->belongsTo('App\system', 'system','system');
    }

    public function stage(){
        return $this->belongsToMany('App\Stage');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public $primaryKey = 'id';
    

    public function unittype(){
        return $this->belongsToMany('App\Unittype');
    }
}

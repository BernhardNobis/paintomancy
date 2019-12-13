<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{ 
    //Primary Key
    public $primaryKey = 'id';
    
    public function unittype(){
        return $this->hasMany('App\Unittype', 'system', 'system');
    }
}

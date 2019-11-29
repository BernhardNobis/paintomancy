<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    //protected $table = 'pictures';

    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestaps = true;
}

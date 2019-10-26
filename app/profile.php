<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded =array('name','gender','hobby','introduction');
    //
}

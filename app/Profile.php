<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =array('id');
    
    ////DBのテーブル名が単数形のため、laravelで複数形で扱われないように明示的に定義
    public $table = 'profile';
    
     public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
         'hobby' => 'required',
          'introduction' => 'required',
        );
        
    public function profilehistories()
    {
      return $this->hasMany('App\ProfileHistory');
    }
}

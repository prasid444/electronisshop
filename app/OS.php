<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class OS extends Eloquent
{

  protected $table="osnames";
  protected $primaryKey="osid";
  //public $timestamps = false;

  // public function product(){
  //   return $this->hasMany('App\Product');
  // }
    //
}

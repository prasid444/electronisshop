<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Review extends Eloquent
{

  protected $table="reviews";
  protected $primaryKey="id";
  //public $timestamps = false;

  // public function product(){
  //   return $this->hasMany('App\Product');
  // }
    //
}

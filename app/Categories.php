<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected  $guarded = [];

   public function articles() {
       return $this->belongsToMany('App\Article',
           'article_category','category_id','article_id');
   }
}

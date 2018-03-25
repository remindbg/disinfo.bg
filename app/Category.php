<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected  $table = 'category_articles';

    public function articles() {
        return $this->hasMany('App\Article');
    }


    public function saveCategory($data) {
        $this->name = $data['name'];
        $this->slug = $data['slug'];
        $this->save();
        return 1;
    }
}

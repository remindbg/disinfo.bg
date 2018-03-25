<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Category;
class Article extends Model
{

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function saveArticle($data) {
        $this->title = $data['title'];
        $this->slug = $data['slug'];
        $this->imageurl = $data['imageurl'];
        $this->body = $data['body'];
        $this->category_id = 1;

        $this->save();
        return;
    }
}

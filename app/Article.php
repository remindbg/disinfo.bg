<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Category;
use Carbon\Carbon;
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
        $this->category_id = $data['category_id'];
        $this->save();

    }
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }
}

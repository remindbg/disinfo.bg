<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Category;
use Carbon\Carbon;
class Article extends Model
{
    protected $guarded = [];
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

    public function updateArticle($data) {
        $article = Article::find($data['id']);
       // $article = $this->find($data['id']);

        $article->category_id = $data['category_id'];
        $article->title = $data['title'];
        $article->slug = $data['slug'];
        $article->imageurl = $data['imageurl'];
        $article->body = $data['body'];
        // to do tags mb
        $article->save();
        return 1;
    }



    public function getCreatedAtAttribute($date)
    {

        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F-m-Y в H:i');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Category;
use Carbon\Carbon;
class Article extends Model
{
    protected $appends = ['bgmonth'];
    protected $guarded = [];


    public function getBgMonthAttribute($date) // very bad fix, but /TODO :D
    {
        $createdDate = $this->created_at->month;
        switch ($createdDate) {
            case 1: return 'Януари';
            case 2: return 'Фефруари';
            case 3: return 'Март';
            case 4: return 'Април';
            case 5: return 'Май';
            case 6: return 'Юни';
            case 7: return 'Юли';
            case 8: return 'Август';
            case 9: return 'Септември';
            case 10: return 'Октомври';
            case 11: return 'Ноември';
            case 12: return 'Декември';
        }
    }

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



}

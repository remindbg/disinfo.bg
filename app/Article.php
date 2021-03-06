<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
	// test
    protected $appends = ['bgmonth'];
    protected $guarded = [];
    protected $dates = [ 'created_at' ,'updated_at' ];

    public function articleType() {
        return $this->belongsTo(ArticleType::class);
    }


    public function sources() {
        return $this->hasMany(Source::class);
    }
    public function tags() {
        return $this->belongsToMany('App\Tag','article_tag','article_id','tag_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Categories',
            'article_category','article_id',
            'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function articlesIsActive()
    {

        return $this->articles()->published();
    }

    public function getBgMonthAttribute($date) //
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


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    protected $table = 'articleType';
    protected $guarded = [];

    public function articles() {
        return $this->hasMany(Article::class);
    }
}

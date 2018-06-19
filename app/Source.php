<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $guarded = [];
    protected $table = 'sources';

    public function article() {
        return $this->belongsTo(Article::class);
    }

}

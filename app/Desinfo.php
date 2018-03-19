<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desinfo extends Model
{
    protected $fillable = ['title', 'summaryDesinfo', 'disproof','originalUrl','language','views','
    originalCountry','isApproved','isCommentable','isFeatured'];
    public function saveDesinfo($data) {
        $this->title = $data['title'];
        $this->summaryDesinfo = $data['summaryDesinfo'];
        $this->disproof = $data['disproof'];
        $this->save();
        return 1;
    }
}

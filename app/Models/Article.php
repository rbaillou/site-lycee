<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{



    public function images()
    {
        return $this->hasMany('App\Models\ImageArticle');
    }

    public function pieces()
    {
        return $this->hasMany('App\Models\PieceJoint');
    }

    public function textes()
    {
        return $this->hasMany('App\Models\TexteArticle');

    }

    protected $guarded = [];
    use HasFactory;
}

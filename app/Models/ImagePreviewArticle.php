<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePreviewArticle extends Model
{
    public function article(){
        return $this->hasOne(Article::class);
    }

    protected $guarded = [];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = "news";
    protected $fillable = ['header', 'content', 'slug', 'gallery_guid'];

    public function gallery()
    {
        return $this->hasOne('App\Models\Gallery', 'guid', 'gallery_guid');
    }

    public function getLimitedContent($limit)
    {
        return Str::limit($this->content, $limit);
    }
}

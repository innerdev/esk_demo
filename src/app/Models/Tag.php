<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $casts = ['gallery_guid' => 'string']; // Otherwise Laravel can cast UUID like "999abcde" to (int)999

    public function gallery() {
        return $this->belongsToMany('App\Models\Gallery', 'tags_gallery_pivot', 'tag_id', 'gallery_guid', 'id', 'guid');
    }
}

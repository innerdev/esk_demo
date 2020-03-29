<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";
    protected $primaryKey = 'guid';
    protected $fillable = ['guid', 'filename', 'description'];
    protected $casts = ['guid' => 'string']; // Otherwise Laravel can cast UUID like "999abcde" to (int)999

    public const DIRECTORY_NAME = "galleries";

    public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'tags_gallery_pivot', 'gallery_guid', 'tag_id', 'guid', 'id');
    }
}

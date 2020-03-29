<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagsGalleryPivot extends Model
{
    protected $primaryKey = null;
    protected $table = "tags_gallery_pivot";
    protected $casts = ['gallery_guid' => 'string'];
    protected $fillable = ['gallerey_guid', 'tag_id'];
    public $timestamps = false;
    public $incrementing = false;
}

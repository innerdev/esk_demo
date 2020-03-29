<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TagsGalleryPivot extends Migration
{
    public function up()
    {
        Schema::create('tags_gallery_pivot', function (Blueprint $table) {
            $table->uuid("gallery_guid");
            $table->bigInteger("tag_id");
            $table->unique(['gallery_guid', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags_gallery_pivot');
    }
}

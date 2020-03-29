<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("header");
            $table->longText("content");
            $table->string('slug');
            $table->uuid("gallery_guid")->nullable();
            $table->timestamps();

            $table->foreign('gallery_guid')
                ->references('guid')
                ->on('gallery')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}

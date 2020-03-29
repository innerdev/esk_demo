<?php

use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsGalleryPivotTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags_gallery_pivot')->insert([
            'gallery_guid' => Gallery::first()->guid,
            'tag_id' => 1,
        ]);

        DB::table('tags_gallery_pivot')->insert([
            'gallery_guid' => Gallery::first()->guid,
            'tag_id' => 2,
        ]);
    }
}

<?php

use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\TagsGalleryPivot;

class TagsGalleryPivotTableSeeder extends Seeder
{
    public function run()
    {
        TagsGalleryPivot::create([
            'gallery_guid' => Gallery::first()->guid,
            'tag_id' => 1,
        ]);

        TagsGalleryPivot::create([
            'gallery_guid' => Gallery::first()->guid,
            'tag_id' => 2,
        ]);
    }
}

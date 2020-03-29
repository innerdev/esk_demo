<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GalleryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('gallery')->insert([
            'guid' => Str::orderedUuid(),
            'filename' => "sample.jpg",
            'description' => "This is sample image file.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

<?php

use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            'header' => "Sample news title",
            'content' => "Sample news content",
            'slug' => "sample-news",
            'gallery_guid' => Gallery::first()->guid,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

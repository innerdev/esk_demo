<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert(['name' => 'Sample tag 1']);
        DB::table('tags')->insert(['name' => 'Sample tag 2']);
    }
}

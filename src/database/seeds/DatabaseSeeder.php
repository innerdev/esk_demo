<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TagsGalleryPivotTableSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}

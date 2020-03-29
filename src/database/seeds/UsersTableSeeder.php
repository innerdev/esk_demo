<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@admin.admin",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('AdminPassword'),
            'remember_token' => Str::random(100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

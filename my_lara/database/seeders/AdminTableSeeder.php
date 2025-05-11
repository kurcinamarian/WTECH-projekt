<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admin')->truncate();
        DB::table('admin')->insert([
            'admin_username' => 'admin@gmail.com',
        ]);
    }
}


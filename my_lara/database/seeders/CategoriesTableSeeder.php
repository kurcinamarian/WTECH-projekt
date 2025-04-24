<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['main_category' => 'Shoes', 'secondary_category' => 'Sneakers'],
            ['main_category' => 'Shoes', 'secondary_category' => 'Boots'],
            ['main_category' => 'Shoes', 'secondary_category' => 'Sports shoes'],
            ['main_category' => 'Shoes', 'secondary_category' => 'Open shoes'],
            ['main_category' => 'Shoes', 'secondary_category' => 'Exclusive'],
            ['main_category' => 'Shirts', 'secondary_category' => 'Long sleeved'],
            ['main_category' => 'Shirts', 'secondary_category' => 'Short sleeved'],
            ['main_category' => 'Shirts', 'secondary_category' => 'Tank tops'],
            ['main_category' => 'Shirts', 'secondary_category' => 'Polo shirts'],
            ['main_category' => 'Shirts', 'secondary_category' => 'Sport'],
            ['main_category' => 'Pants', 'secondary_category' => 'Jeans'],
            ['main_category' => 'Pants', 'secondary_category' => 'Shorts'],
            ['main_category' => 'Pants', 'secondary_category' => 'Cargo pants'],
            ['main_category' => 'Pants', 'secondary_category' => 'Tracksuit pants'],
            ['main_category' => 'Pants', 'secondary_category' => 'Fabric pants'],
            ['main_category' => 'Other', 'secondary_category' => 'Other']
        ]);
    }
}

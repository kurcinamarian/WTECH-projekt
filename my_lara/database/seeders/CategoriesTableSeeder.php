<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->truncate();
        DB::statement('ALTER SEQUENCE categories_category_id_seq RESTART WITH 1;');

        DB::table('categories')->insert([
            ['category_id' => 1,  'main_category' => 'Shoes',  'secondary_category' => 'Sneakers'],
            ['category_id' => 2,  'main_category' => 'Shoes',  'secondary_category' => 'Boots'],
            ['category_id' => 3,  'main_category' => 'Shoes',  'secondary_category' => 'Sports shoes'],
            ['category_id' => 4,  'main_category' => 'Shoes',  'secondary_category' => 'Open shoes'],
            ['category_id' => 5, 'main_category' => 'Shoes',  'secondary_category' => 'Exclusive'],
            ['category_id' => 6, 'main_category' => 'Shirts', 'secondary_category' => 'Long sleeved'],
            ['category_id' => 7, 'main_category' => 'Shirts', 'secondary_category' => 'Short sleeved'],
            ['category_id' => 8, 'main_category' => 'Shirts', 'secondary_category' => 'Tank tops'],
            ['category_id' => 9, 'main_category' => 'Shirts', 'secondary_category' => 'Polo shirts'],
            ['category_id' => 10, 'main_category' => 'Shirts', 'secondary_category' => 'Sport'],
            ['category_id' => 11, 'main_category' => 'Pants',  'secondary_category' => 'Jeans'],
            ['category_id' => 12, 'main_category' => 'Pants',  'secondary_category' => 'Shorts'],
            ['category_id' => 13, 'main_category' => 'Pants',  'secondary_category' => 'Cargo pants'],
            ['category_id' => 14, 'main_category' => 'Pants',  'secondary_category' => 'Tracksuit pants'],
            ['category_id' => 15, 'main_category' => 'Pants',  'secondary_category' => 'Fabric pants'],
            ['category_id' => 16, 'main_category' => 'Other',  'secondary_category' => 'Other'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->truncate();
        DB::statement('ALTER SEQUENCE items_item_id_seq RESTART WITH 1;');

        DB::table('items')->insert([
            [ 'item_name' => 'Kids Sneaker Red Casual Cotton',                       'price' => 29.99, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 1, 'main_category' => 'KIDS', 'style_fabric' => 9, 'colour' => 'Red', 'times_bought' => 12, 'release_date' => '2025-04-01'],
            [ 'item_name' => 'Kids Boot Blue Formal Wool',                           'price' => 49.99, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 2, 'main_category' => 'KIDS', 'style_fabric' => 18, 'colour' => 'Blue', 'times_bought' => 30, 'release_date' => '2025-03-15'],
            [ 'item_name' => 'Kids Shirt Green Cozy Polyester',                      'price' => 19.99, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 6, 'main_category' => 'KIDS', 'style_fabric' => 36, 'colour' => 'Green', 'times_bought' => 18, 'release_date' => '2025-04-10'],
            [ 'item_name' => 'Kids Jeans Black Casual Wool',                         'price' => 34.50, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 11, 'main_category' => 'KIDS', 'style_fabric' => 17, 'colour' => 'Black', 'times_bought' => 5, 'release_date' => '2025-02-20'],
            [ 'item_name' => 'Kids Polo White Formal Cotton',                        'price' => 24.75, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 9, 'main_category' => 'KIDS', 'style_fabric' => 10, 'colour' => 'White', 'times_bought' => 22, 'release_date' => '2025-01-10'],
            [ 'item_name' => 'Kids Longsleeve Cozy and Formal Cotton and Polyester', 'price' => 38.80, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 6, 'main_category' => 'KIDS', 'style_fabric' => 46, 'colour' => 'Red', 'times_bought' => 8, 'release_date' => '2025-03-28'],
            [ 'item_name' => 'Kids Tracksuit Panths Casual Wool',                    'price' => 42.00, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 14, 'main_category' => 'KIDS', 'style_fabric' => 17, 'colour' => 'Blue', 'times_bought' => 14, 'release_date' => '2025-03-01'],
            [ 'item_name' => 'Kids Tank Top Casual Cotton',                          'price' => 15.00, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 8, 'main_category' => 'KIDS', 'style_fabric' => 9, 'colour' => 'Green', 'times_bought' => 6, 'release_date' => '2025-04-12'],
            [ 'item_name' => 'Kids Exclusive Shoes Cozy Wool',                       'price' => 55.00, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 5, 'main_category' => 'KIDS', 'style_fabric' => 20, 'colour' => 'Black', 'times_bought' => 25, 'release_date' => '2025-02-05'],
            [ 'item_name' => 'Kids Fabric Panths Formal Polyester',                 'price' => 31.20, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 15, 'main_category' => 'KIDS', 'style_fabric' => 34, 'colour' => 'White', 'times_bought' => 11, 'release_date' => '2025-01-22'],
            [ 'item_name' => 'Men Sneaker Black Casual',                            'price' => 59.99, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 1, 'main_category' => 'MEN', 'style_fabric' => 1, 'colour' => 'Black', 'times_bought' => 50, 'release_date' => '2025-03-01'],
            [ 'item_name' => 'Men Boot Red Cozy Cotton',                            'price' => 69.50, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 2, 'main_category' => 'MEN', 'style_fabric' => 12, 'colour' => 'Red', 'times_bought' => 40, 'release_date' => '2025-02-18'],
            [ 'item_name' => 'Men Shirt Blue Formal',                               'price' => 44.99, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 6, 'main_category' => 'MEN', 'style_fabric' => 2, 'colour' => 'Blue', 'times_bought' => 35, 'release_date' => '2025-01-10'],
            [ 'item_name' => 'Women Tank Top White Polyester',                      'price' => 27.50, 'description' => 'RandomWord', 'parameters' => 'xx',  'category_id' => 8, 'main_category' => 'WOMEN', 'style_fabric' => 32, 'colour' => 'White', 'times_bought' => 20, 'release_date' => '2025-03-15'],
            [ 'item_name' => 'Women Dress Green Cotton Wool',                       'price' => 39.00, 'description' => 'RandomWord', 'parameters' => 'xx', 'category_id' => 16, 'main_category' => 'WOMEN', 'style_fabric' => 24, 'colour' => 'Green', 'times_bought' => 19, 'release_date' => '2025-02-10'],
            [ 'item_name' => 'Kids Sport Shoe Casual and Cozy',                     'price' => 33.00, 'description' => 'RandomWord', 'parameters' => 'xx', 'category_id' => 3, 'main_category' => 'KIDS', 'style_fabric' => 5, 'colour' => 'Blue', 'times_bought' => 7, 'release_date' => '2025-03-20'],
            [ 'item_name' => 'Kids Shorts Casual',                                  'price' => 18.99, 'description' => 'RandomWord', 'parameters' => 'xx', 'category_id' => 12, 'main_category' => 'KIDS', 'style_fabric' => 1, 'colour' => 'Green', 'times_bought' => 13, 'release_date' => '2025-04-05'],
            [ 'item_name' => 'Kids Cotton Shirt',                                   'price' => 22.50, 'description' => 'RandomWord', 'parameters' => 'xx', 'category_id' => 7, 'main_category' => 'KIDS', 'style_fabric' => 8, 'colour' => 'Red', 'times_bought' => 10, 'release_date' => '2025-03-05'],
            [ 'item_name' => 'Kids Wool Jacket',                                    'price' => 60.00, 'description' => 'RandomWord', 'parameters' => 'xx', 'category_id' => 9, 'main_category' => 'KIDS', 'style_fabric' => 16, 'colour' => 'Black', 'times_bought' => 9, 'release_date' => '2025-04-01'],
            [ 'item_name' => 'Kids Polyester Pants',                                'price' => 28.90, 'description' => 'RandomWord', 'parameters' => 'xx', 'category_id' => 12, 'main_category' => 'KIDS', 'style_fabric' => 32, 'colour' => 'White', 'times_bought' => 17, 'release_date' => '2025-04-02'],
        ]);
    }
}

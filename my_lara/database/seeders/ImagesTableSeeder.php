<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->truncate();

        DB::table('images')->insert([
            ['item_id' => 1, 'image_name' => 'Kids Sneaker Red Casual Cotton.jpg', 'image_name_2' => 'Kids Sneaker Red Casual Cotton_2.jpg'],
            ['item_id' => 2, 'image_name' => 'Kids Boot Blue Formal Wool.jpg', 'image_name_2' => 'Kids Boot Blue Formal Wool_2.jpg'],
            ['item_id' => 3, 'image_name' => 'Kids Shirt Green Cozy Polyester.jpg', 'image_name_2' => 'Kids Shirt Green Cozy Polyester_2.jpg'],
            ['item_id' => 4, 'image_name' => 'Kids Jeans Black Casual Wool.jpg', 'image_name_2' => 'Kids Jeans Black Casual Wool_2.jpg'],
            ['item_id' => 5, 'image_name' => 'Kids Polo White Formal Cotton.jpg', 'image_name_2' => 'Kids Polo White Formal Cotton_2.jpg'],
            ['item_id' => 6, 'image_name' => 'Kids Longsleeve Cozy and Formal Cotton and Polyester.jpg', 'image_name_2' => 'Kids Longsleeve Cozy and Formal Cotton and Polyester_2.jpg'],
            ['item_id' => 7, 'image_name' => 'Kids Tracksuit Panths Casual Wool.jpg', 'image_name_2' => 'Kids Tracksuit Panths Casual Wool_2.jpg'],
            ['item_id' => 8, 'image_name' => 'Kids Tank Top Casual Cotton.jpg', 'image_name_2' => 'Kids Tank Top Casual Cotton_2.jpg'],
            ['item_id' => 9, 'image_name' => 'Kids Exclusive Shoes Cozy Wool.jpg', 'image_name_2' => 'Kids Exclusive Shoes Cozy Wool_2.jpg'],
            ['item_id' => 10, 'image_name' => 'Kids Fabric Panths Formal Polyester.jpg', 'image_name_2' => 'Kids Fabric Panths Formal Polyester_2.jpg'],
            ['item_id' => 11, 'image_name' => 'Men Sneaker Black Casual.jpg', 'image_name_2' => 'Men Sneaker Black Casual_2.jpg'],
            ['item_id' => 12, 'image_name' => 'Men Boot Red Cozy Cotton.jpg', 'image_name_2' => 'Men Boot Red Cozy Cotton_2.jpg'],
            ['item_id' => 13, 'image_name' => 'Men Shirt Blue Formal.jpg', 'image_name_2' => 'Men Shirt Blue Formal_2.jpg'],
            ['item_id' => 14, 'image_name' => 'Women Tank Top White Polyester.jpg', 'image_name_2' => 'Women Tank Top White Polyester_2.jpg'],
            ['item_id' => 15, 'image_name' => 'Women Dress Green Cotton Wool.jpg', 'image_name_2' => 'Women Dress Green Cotton Wool_2.jpg'],
            ['item_id' => 16, 'image_name' => 'Kids Sport Shoe Casual and Cozy.jpg', 'image_name_2' => 'Kids Sport Shoe Casual and Cozy_2.jpg'],
            ['item_id' => 17, 'image_name' => 'Kids Shorts Casual.jpg', 'image_name_2' => 'Kids Shorts Casual_2.jpg'],
            ['item_id' => 18, 'image_name' => 'Kids Cotton Shirt.jpg', 'image_name_2' => 'Kids Cotton Shirt_2.jpg'],
            ['item_id' => 19, 'image_name' => 'Kids Wool Jacket.jpg', 'image_name_2' => 'Kids Wool Jacket_2.jpg'],
            ['item_id' => 20, 'image_name' => 'Kids Polyester Pants.jpg', 'image_name_2' => 'Kids Polyester Pants_2.jpg'],
        ]);
    }
}

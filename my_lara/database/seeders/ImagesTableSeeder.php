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
            ['item_id' => 1, 'image_name' => 'Kids Sneaker Red Casual Cotton.jpg'],
            ['item_id' => 1, 'image_name' => 'Kids Sneaker Red Casual Cotton_2.jpg'],
            ['item_id' => 2, 'image_name' => 'Kids Boot Blue Formal Wool.jpg'],
            ['item_id' => 2, 'image_name' => 'Kids Boot Blue Formal Wool_2.jpg'],
            ['item_id' => 3, 'image_name' => 'Kids Shirt Green Cozy Polyester.jpg'],
            ['item_id' => 3, 'image_name' => 'Kids Shirt Green Cozy Polyester_2.jpg'],
            ['item_id' => 4, 'image_name' => 'Kids Jeans Black Casual Wool.jpg'],
            ['item_id' => 4, 'image_name' => 'Kids Jeans Black Casual Wool_2.jpg'],
            ['item_id' => 5, 'image_name' => 'Kids Polo White Formal Cotton.jpg'],
            ['item_id' => 5, 'image_name' => 'Kids Polo White Formal Cotton_2.jpg'],
            ['item_id' => 6, 'image_name' => 'Kids Longsleeve Cozy and Formal Cotton and Polyester.jpg'],
            ['item_id' => 6, 'image_name' => 'Kids Longsleeve Cozy and Formal Cotton and Polyester_2.jpg'],
            ['item_id' => 7, 'image_name' => 'Kids Tracksuit Panths Casual Wool.jpg'],
            ['item_id' => 7, 'image_name' => 'Kids Tracksuit Panths Casual Wool_2.jpg'],
            ['item_id' => 8, 'image_name' => 'Kids Tank Top Casual Cotton.jpg'],
            ['item_id' => 8, 'image_name' => 'Kids Tank Top Casual Cotton_2.jpg'],
            ['item_id' => 9, 'image_name' => 'Kids Exclusive Shoes Cozy Wool.jpg'],
            ['item_id' => 9, 'image_name' => 'Kids Exclusive Shoes Cozy Wool_2.jpg'],
            ['item_id' => 10, 'image_name' => 'Kids Fabric Panths Formal Polyester.jpg'],
            ['item_id' => 10, 'image_name' => 'Kids Fabric Panths Formal Polyester_2.jpg'],
            ['item_id' => 11, 'image_name' => 'Men Sneaker Black Casual.jpg'],
            ['item_id' => 11, 'image_name' => 'Men Sneaker Black Casual_2.jpg'],
            ['item_id' => 12, 'image_name' => 'Men Boot Red Cozy Cotton.jpg'],
            ['item_id' => 12, 'image_name' => 'Men Boot Red Cozy Cotton_2.jpg'],
            ['item_id' => 13, 'image_name' => 'Men Shirt Blue Formal.jpg'],
            ['item_id' => 13, 'image_name' => 'Men Shirt Blue Formal_2.jpg'],
            ['item_id' => 14, 'image_name' => 'Women Tank Top White Polyester.jpg'],
            ['item_id' => 14, 'image_name' => 'Women Tank Top White Polyester_2.jpg'],
            ['item_id' => 15, 'image_name' => 'Women Dress Green Cotton Wool.jpg'],
            ['item_id' => 15, 'image_name' => 'Women Dress Green Cotton Wool_2.jpg'],
            ['item_id' => 16, 'image_name' => 'Kids Sport Shoe Casual and Cozy.jpg'],
            ['item_id' => 16, 'image_name' => 'Kids Sport Shoe Casual and Cozy_2.jpg'],
            ['item_id' => 17, 'image_name' => 'Kids Shorts Casual.jpg'],
            ['item_id' => 17, 'image_name' => 'Kids Shorts Casual_2.jpg'],
            ['item_id' => 18, 'image_name' => 'Kids Cotton Shirt.jpg'],
            ['item_id' => 18, 'image_name' => 'Kids Cotton Shirt_2.jpg'],
            ['item_id' => 19, 'image_name' => 'Kids Wool Jacket.jpg'],
            ['item_id' => 19, 'image_name' => 'Kids Wool Jacket_2.jpg'],
            ['item_id' => 20, 'image_name' => 'Kids Polyester Pants.jpg'],
            ['item_id' => 20, 'image_name' => 'Kids Polyester Pants_2.jpg'],
            ['item_id' => 20, 'image_name' => 'Kids Wool Jacket_2.jpg'],
        ]);
    }
}

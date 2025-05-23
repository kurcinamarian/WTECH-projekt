<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->truncate();
        DB::statement('ALTER SEQUENCE images_image_id_seq RESTART WITH 1;');

        DB::table('images')->insert([
            [ 'item_id' => 1, 'image_name' => 'KIDS Sneakers Red Casual and Formal Cotton and Wool.jpg' ], #d
            [ 'item_id' => 1, 'image_name' => 'KIDS Sneakers Red Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 2, 'image_name' => 'MEN Boots Black Casual and Formal Cotton and Polyester.jpg' ],
            [ 'item_id' => 2, 'image_name' => 'MEN Boots Black Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 3, 'image_name' => 'WOMEN Sports shoes Black Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 3, 'image_name' => 'WOMEN Sports shoes Black Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 4, 'image_name' => 'KIDS Open shoes Blue Casual and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 4, 'image_name' => 'KIDS Open shoes Blue Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 5, 'image_name' => 'MEN Exclusive Shoes Yellow Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 5, 'image_name' => 'MEN Exclusive Shoes Yellow Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 6, 'image_name' => 'WOMEN Long sleeved Red Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 6, 'image_name' => 'WOMEN Long sleeved Red Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 7, 'image_name' => 'KIDS Short sleeved White Formal and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 7, 'image_name' => 'KIDS Short sleeved White Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 8, 'image_name' => 'MEN Tank tops White Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 8, 'image_name' => 'MEN Tank tops White Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 9, 'image_name' => 'WOMEN Polo shirts Black Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 9, 'image_name' => 'WOMEN Polo shirts Black Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 10, 'image_name' => 'KIDS Sport Black Casual and Formal Cotton and Wool.jpg' ],
            [ 'item_id' => 10, 'image_name' => 'KIDS Sport Black Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 11, 'image_name' => 'MEN Jeans Blue Casual and Formal Cotton and Polyester.jpg' ],
            [ 'item_id' => 11, 'image_name' => 'MEN Jeans Blue Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 12, 'image_name' => 'WOMEN Shorts Green Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 12, 'image_name' => 'WOMEN Shorts Green Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 13, 'image_name' => 'KIDS Fabric pants White Casual and Cozy Cotton and Wools.jpg' ],#d
            [ 'item_id' => 13, 'image_name' => 'KIDS Fabric pants White Casual and Cozy Cotton and Wools_2.jpg' ],
            [ 'item_id' => 14, 'image_name' => 'MEN Tracksuit pants Yellow Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 14, 'image_name' => 'MEN Tracksuit pants Yellow Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 15, 'image_name' => 'WOMEN Fabric pants Blue Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 15, 'image_name' => 'WOMEN Fabric pants Blue Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 16, 'image_name' => 'KIDS Other Blue Formal and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 16, 'image_name' => 'KIDS Other Blue Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 17, 'image_name' => 'MEN Sneakers Blue Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 17, 'image_name' => 'MEN Sneakers Blue Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 18, 'image_name' => 'WOMEN Boots Yellow Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 18, 'image_name' => 'WOMEN Boots Yellow Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 19, 'image_name' => 'KIDS Sports shoes Green Casual and Formal Cotton and Wool.jpg' ],
            [ 'item_id' => 19, 'image_name' => 'KIDS Sports shoes Green Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 20, 'image_name' => 'MEN Open shoes Black Casual and Formal Cotton and Polyester.jpg' ],
            [ 'item_id' => 20, 'image_name' => 'MEN Open shoes Black Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 21, 'image_name' => 'WOMEN Exclusive Shoes Black Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 21, 'image_name' => 'WOMEN Exclusive Shoes Black Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 22, 'image_name' => 'KIDS Long sleeved Green Casual and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 22, 'image_name' => 'KIDS Long sleeved Green Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 23, 'image_name' => 'MEN Short sleeved Blue Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 23, 'image_name' => 'MEN Short sleeved Blue Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 24, 'image_name' => 'WOMEN Tank tops White Casual and Cozy Wool and Polyester.jpg' ], #d
            [ 'item_id' => 24, 'image_name' => 'WOMEN Tank tops White Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 25, 'image_name' => 'KIDS Polo shirts White Formal and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 25, 'image_name' => 'KIDS Polo shirts White Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 26, 'image_name' => 'MEN Sport Yellow Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 26, 'image_name' => 'MEN Sport Yellow Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 27, 'image_name' => 'WOMEN Jeans Black Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 27, 'image_name' => 'WOMEN Jeans Black Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 28, 'image_name' => 'KIDS Shorts Green Casual and Formal Cotton and Wool.jpg' ], #d
            [ 'item_id' => 28, 'image_name' => 'KIDS Shorts Green Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 29, 'image_name' => 'MEN Cargo pants White Casual and Formal Cotton and Polyester.jpg' ],
            [ 'item_id' => 29, 'image_name' => 'MEN Cargo pants White Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 30, 'image_name' => 'WOMEN Tracksuit pants Yellow Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 30, 'image_name' => 'WOMEN Tracksuit pants Yellow Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 31, 'image_name' => 'KIDS Fabric pants White Casual and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 31, 'image_name' => 'KIDS Fabric pants White Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 32, 'image_name' => 'MEN Other White Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 32, 'image_name' => 'MEN Other White Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 33, 'image_name' => 'WOMEN Sneakers Red Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 33, 'image_name' => 'WOMEN Sneakers Red Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 34, 'image_name' => 'KIDS Boots Blue Formal and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 34, 'image_name' => 'KIDS Boots Blue Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 35, 'image_name' => 'MEN Sports shoes Green Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 35, 'image_name' => 'MEN Sports shoes Green Formal and Cozy Cotton and Polyester_2.jpg' ],
            #--------------------------------------------------------------------------------------------------------------
            [ 'item_id' => 36, 'image_name' => 'WOMEN Open shoes Green Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 36, 'image_name' => 'WOMEN Open shoes Green Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 37, 'image_name' => 'KIDS Exclusive Shoes Black Casual and Formal Cotton and Wool.jpg' ],#d
            [ 'item_id' => 37, 'image_name' => 'KIDS Exclusive Shoes Black Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 38, 'image_name' => 'MEN Long sleeved Blue Casual and Formal Cotton and Polyester.jpg' ], #d
            [ 'item_id' => 38, 'image_name' => 'MEN Long sleeved Blue Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 39, 'image_name' => 'WOMEN Short sleeved Blue Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 39, 'image_name' => 'WOMEN Short sleeved Blue Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 40, 'image_name' => 'KIDS Tank tops Green Casual and Cozy Cotton and Wool.jpg' ], #d
            [ 'item_id' => 40, 'image_name' => 'KIDS Tank tops Green Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 41, 'image_name' => 'MEN Polo shirts Black Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 41, 'image_name' => 'MEN Polo shirts Black Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 42, 'image_name' => 'WOMEN Sport Shoes Blue Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 42, 'image_name' => 'WOMEN Sport Shoes Blue Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 43, 'image_name' => 'KIDS Jeans Black Formal and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 43, 'image_name' => 'KIDS Jeans Black Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 44, 'image_name' => 'MEN Shorts Black Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 44, 'image_name' => 'MEN Shorts Black Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 45, 'image_name' => 'WOMEN Cargo pants White Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 45, 'image_name' => 'WOMEN Cargo pants White Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 46, 'image_name' => 'KIDS Tracksuit pants Blue Casual and Formal Cotton and Wool.jpg' ], #d
            [ 'item_id' => 46, 'image_name' => 'KIDS Tracksuit pants Blue Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 47, 'image_name' => 'MEN Fabric pants Black Casual and Formal Cotton and Polyester.jpg' ],
            [ 'item_id' => 47, 'image_name' => 'MEN Fabric pants Black Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 48, 'image_name' => 'WOMEN Other Green Casual and Formal Wool and Polyester.jpg' ], #d
            [ 'item_id' => 48, 'image_name' => 'WOMEN Other Green Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 49, 'image_name' => 'KIDS Sneakers Blue Casual and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 49, 'image_name' => 'KIDS Sneakers Blue Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 50, 'image_name' => 'MEN Boots Red Casual and Cozy Cotton and Polyester.jpg' ], #d
            [ 'item_id' => 50, 'image_name' => 'MEN Boots Red Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 51, 'image_name' => 'WOMEN Sports shoes Blue Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 51, 'image_name' => 'WOMEN Sports shoes Blue Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 52, 'image_name' => 'KIDS Open shoes White Formal and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 52, 'image_name' => 'KIDS Open shoes White Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 53, 'image_name' => 'MEN Exclusive Shoes Blue Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 53, 'image_name' => 'MEN Exclusive Shoes Blue Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 54, 'image_name' => 'WOMEN Long sleeved White Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 54, 'image_name' => 'WOMEN Long sleeved White Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 55, 'image_name' => 'KIDS Short sleeved Red Casual and Formal Cotton and Wool.jpg' ],#d
            [ 'item_id' => 55, 'image_name' => 'KIDS Short sleeved Red Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 56, 'image_name' => 'MEN Tank top Green Casual and Formal Cotton and Polyester.jpg' ],
            [ 'item_id' => 56, 'image_name' => 'MEN Tank top Green Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 57, 'image_name' => 'WOMEN Polo shirts Blue Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 57, 'image_name' => 'WOMEN Polo shirts Blue Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 58, 'image_name' => 'KIDS Sport shoes Red Casual and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 58, 'image_name' => 'KIDS Sport Red shoes Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 59, 'image_name' => 'MEN Jeans Yellow Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 59, 'image_name' => 'MEN Jeans Yellow Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 60, 'image_name' => 'WOMEN Shorts White Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 60, 'image_name' => 'WOMEN Shorts White Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 61, 'image_name' => 'KIDS Cargo pants Blue Formal and Cozy Cotton and Wool.jpg' ],
            [ 'item_id' => 61, 'image_name' => 'KIDS Cargo pants Blue Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 62, 'image_name' => 'MEN Tracksuit pants Green Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 62, 'image_name' => 'MEN Tracksuit pants Green Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 63, 'image_name' => 'WOMEN Fabric pants White Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 63, 'image_name' => 'WOMEN Fabric pants White Formal and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 64, 'image_name' => 'KIDS Other Black Casual and Formal Cotton and Wool.jpg' ],#d
            [ 'item_id' => 64, 'image_name' => 'KIDS Other Black Casual and Formal Cotton and Wool_2.jpg' ],
            [ 'item_id' => 65, 'image_name' => 'MEN Sneakers Black Casual and Formal Cotton and Polyester.jpg' ], #d
            [ 'item_id' => 65, 'image_name' => 'MEN Sneakers Black Casual and Formal Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 66, 'image_name' => 'WOMEN Boots Red Casual and Formal Wool and Polyester.jpg' ],
            [ 'item_id' => 66, 'image_name' => 'WOMEN Boots Red Casual and Formal Wool and Polyester_2.jpg' ],
            [ 'item_id' => 67, 'image_name' => 'KIDS Sports shoes Blue Casual and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 67, 'image_name' => 'KIDS Sports shoes Blue Casual and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 68, 'image_name' => 'MEN Open shoes Black Casual and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 68, 'image_name' => 'MEN Open shoes Black Casual and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 69, 'image_name' => 'WOMEN Exclusive Shoes Black Casual and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 69, 'image_name' => 'WOMEN Exclusive Shoes Black Casual and Cozy Wool and Polyester_2.jpg' ],
            [ 'item_id' => 70, 'image_name' => 'KIDS Long sleeved Red Formal and Cozy Cotton and Wool.jpg' ],#d
            [ 'item_id' => 70, 'image_name' => 'KIDS Long sleeved Red Formal and Cozy Cotton and Wool_2.jpg' ],
            [ 'item_id' => 71, 'image_name' => 'MEN Short sleeved Red Formal and Cozy Cotton and Polyester.jpg' ],
            [ 'item_id' => 71, 'image_name' => 'MEN Short sleeved Red Formal and Cozy Cotton and Polyester_2.jpg' ],
            [ 'item_id' => 72, 'image_name' => 'WOMEN Tank tops White Formal and Cozy Wool and Polyester.jpg' ],
            [ 'item_id' => 72, 'image_name' => 'WOMEN Tank tops White Formal and Cozy Wool and Polyester_2.jpg' ]
        ]);
    }
}

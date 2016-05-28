<?php

use Illuminate\Database\Seeder;

class ShowcaseOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('showcase_options')->delete();
        
        \DB::table('showcase_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'showcase_id' => 1,
                'card_feature_id' => 1,
                'card_option_id' => 1,
                'side_type' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'showcase_id' => 1,
                'card_feature_id' => 2,
                'card_option_id' => 4,
                'side_type' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'showcase_id' => 1,
                'card_feature_id' => 3,
                'card_option_id' => 6,
                'side_type' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'showcase_id' => 1,
                'card_feature_id' => 4,
                'card_option_id' => 12,
                'side_type' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'showcase_id' => 1,
                'card_feature_id' => 4,
                'card_option_id' => 14,
                'side_type' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'showcase_id' => 1,
                'card_feature_id' => 4,
                'card_option_id' => 12,
                'side_type' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'showcase_id' => 1,
                'card_feature_id' => 4,
                'card_option_id' => 14,
                'side_type' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'showcase_id' => 1,
                'card_feature_id' => 5,
                'card_option_id' => 40,
                'side_type' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'showcase_id' => 1,
                'card_feature_id' => 7,
                'card_option_id' => 29,
                'side_type' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'showcase_id' => 1,
                'card_feature_id' => 9,
                'card_option_id' => 35,
                'side_type' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'showcase_id' => 1,
                'card_feature_id' => 10,
                'card_option_id' => 37,
                'side_type' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'showcase_id' => 2,
                'card_feature_id' => 1,
                'card_option_id' => 1,
                'side_type' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'showcase_id' => 2,
                'card_feature_id' => 2,
                'card_option_id' => 4,
                'side_type' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'showcase_id' => 2,
                'card_feature_id' => 3,
                'card_option_id' => 6,
                'side_type' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'showcase_id' => 2,
                'card_feature_id' => 4,
                'card_option_id' => 11,
                'side_type' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'showcase_id' => 2,
                'card_feature_id' => 4,
                'card_option_id' => 12,
                'side_type' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'showcase_id' => 2,
                'card_feature_id' => 7,
                'card_option_id' => 29,
                'side_type' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'showcase_id' => 2,
                'card_feature_id' => 9,
                'card_option_id' => 35,
                'side_type' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'showcase_id' => 2,
                'card_feature_id' => 10,
                'card_option_id' => 37,
                'side_type' => 0,
            ),
        ));
        
        
    }
}

<?php

use Illuminate\Database\Seeder;

class CardDiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_discounts')->delete();
        
        \DB::table('card_discounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 3,
                'sets' => 1,
                'percent' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'card_id' => 3,
                'sets' => 3,
                'percent' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'card_id' => 3,
                'sets' => 5,
                'percent' => 5,
            ),
            3 => 
            array (
                'id' => 4,
                'card_id' => 3,
                'sets' => 7,
                'percent' => 7,
            ),
        ));
        
        
    }
}

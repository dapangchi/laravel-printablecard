<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'elegent business cards',
                'type' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'minimalist',
                'type' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'creative business card',
                'type' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cool name card',
                'type' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'corporate business card',
                'type' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'vintage',
                'type' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'playful',
                'type' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'elegent',
                'type' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Typographic',
                'type' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Luxruy',
                'type' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Retail',
                'type' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Corporate',
                'type' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Coporate',
                'type' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Classic',
                'type' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Studio',
                'type' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Embossing',
                'type' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Edge Painting',
                'type' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'modern',
                'type' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Hang Tag',
                'type' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Boutique',
                'type' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Foil Stamping',
                'type' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Clean',
                'type' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Luxury',
                'type' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Flourish',
                'type' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Pattern background',
                'type' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Metallic Print',
                'type' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'photgrapher',
                'type' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'unique',
                'type' => 1,
            ),
        ));
        
        
    }
}

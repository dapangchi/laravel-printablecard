<?php

use Illuminate\Database\Seeder;

class HomeSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_sliders')->delete();
        
        \DB::table('home_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'upload/homeslider/slideshow1.jpg',
                'url' => 'http://www.rockdesign.com/luxury-business-cards/soft-suede-business-cards',
                'text' => 'Soft Suede Business Cards',
                'sort' => 3,
                'exclude' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'upload/homeslider/slideshow2.jpg',
                'url' => 'http://www.rockdesign.com/luxury-business-cards/hard-suede-business-cards',
                'text' => 'Hard Suede Business Cards',
                'sort' => 2,
                'exclude' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'upload/homeslider/slideshow3.jpg',
                'url' => 'http://www.rockdesign.com/premium-business-cards/letterpress-business-cards',
                'text' => 'Letterpress Business Cards',
                'sort' => 3,
                'exclude' => 0,
            ),
            3 => 
            array (
                'id' => 5,
                'image' => 'upload/homeslider/slideshow5.jpg',
                'url' => 'http://www.rockdesign.com/luxury-business-cards/triplex-business-cards',
                'text' => 'Triplex Business Cards',
                'sort' => 6,
                'exclude' => 0,
            ),
            4 => 
            array (
                'id' => 9,
                'image' => 'upload/homeslider/b/6/black-metal-business-card-01-01-info.jpg',
                'url' => 'http://www.rockdesign.com/metal-business-cards/black-metal-business-cards',
                'text' => 'Black Metal Business Cards',
                'sort' => 5,
                'exclude' => 0,
            ),
            5 => 
            array (
                'id' => 10,
                'image' => 'upload/homeslider/w/x/mattegoldmetal_dominic02.jpg',
                'url' => 'http://www.rockdesign.com/metal-business-cards/gold-metal-business-cards',
                'text' => 'Gold Metal Business Cards',
                'sort' => 7,
                'exclude' => 0,
            ),
            6 => 
            array (
                'id' => 14,
                'image' => 'upload/homeslider/a/n/rose-gold-metal-business-card-01-08.jpg',
                'url' => 'http://www.rockdesign.com/metal-business-cards/rose-gold-metal-business-cards',
                'text' => 'Rose Gold Metal Business Cards',
                'sort' => 1,
                'exclude' => 0,
            ),
            7 => 
            array (
                'id' => 18,
                'image' => 'upload/homeslider/2/w/premium-sample-slide.jpg',
                'url' => 'http://www.rockdesign.com/premium-sample-pack.html',
                'text' => 'Get Your Premium Sample Pack',
                'sort' => 11,
                'exclude' => 0,
            ),
        ));
        
        
    }
}

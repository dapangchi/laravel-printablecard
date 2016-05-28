<?php

use Illuminate\Database\Seeder;

class SlideImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slide_images')->delete();
        
        \DB::table('slide_images')->insert(array (
            0 => 
            array (
                'id' => 4,
                'slide_id' => 2,
                'image' => 'upload/slides/v/a/slideshow4.jpg',
                'label' => '',
                'main' => 1,
                'sort' => 1,
                'exclude' => 0,
            ),
            1 => 
            array (
                'id' => 5,
                'slide_id' => 2,
                'image' => 'upload/slides/d/l/slideshow5.jpg',
                'label' => '',
                'main' => 0,
                'sort' => 2,
                'exclude' => 0,
            ),
            2 => 
            array (
                'id' => 23,
                'slide_id' => 3,
                'image' => 'upload/slides/6/c/logo-design8-3.jpg',
                'label' => 'website logo 4',
                'main' => 0,
                'sort' => 18,
                'exclude' => 0,
            ),
            3 => 
            array (
                'id' => 24,
                'slide_id' => 3,
                'image' => 'upload/slides/k/l/logo-design8-2.jpg',
                'label' => 'website logo 3',
                'main' => 0,
                'sort' => 17,
                'exclude' => 0,
            ),
            4 => 
            array (
                'id' => 25,
                'slide_id' => 3,
                'image' => 'upload/slides/n/5/logo-design8-1.jpg',
                'label' => 'website logo 2',
                'main' => 0,
                'sort' => 16,
                'exclude' => 0,
            ),
            5 => 
            array (
                'id' => 26,
                'slide_id' => 3,
                'image' => 'upload/slides/m/d/logo-design7-1.jpg',
                'label' => 'website logo 1',
                'main' => 0,
                'sort' => 15,
                'exclude' => 0,
            ),
            6 => 
            array (
                'id' => 27,
                'slide_id' => 3,
                'image' => 'upload/slides/s/j/logo-design6-1.jpg',
                'label' => 'custom logo design  3',
                'main' => 0,
                'sort' => 14,
                'exclude' => 0,
            ),
            7 => 
            array (
                'id' => 28,
                'slide_id' => 3,
                'image' => 'upload/slides/9/k/logo-design5-1.jpg',
                'label' => 'custom logo design  2',
                'main' => 0,
                'sort' => 13,
                'exclude' => 0,
            ),
            8 => 
            array (
                'id' => 29,
                'slide_id' => 3,
                'image' => 'upload/slides/m/w/logo-design4-2.jpg',
                'label' => 'logo designers ',
                'main' => 0,
                'sort' => 39,
                'exclude' => 0,
            ),
            9 => 
            array (
                'id' => 30,
                'slide_id' => 3,
                'image' => 'upload/slides/2/e/logo-design4-1.jpg',
                'label' => 'logo designers 1',
                'main' => 0,
                'sort' => 38,
                'exclude' => 0,
            ),
            10 => 
            array (
                'id' => 31,
                'slide_id' => 3,
                'image' => 'upload/slides/c/s/logo-design3-4.jpg',
                'label' => 'custom logo design  1',
                'main' => 0,
                'sort' => 10,
                'exclude' => 0,
            ),
            11 => 
            array (
                'id' => 32,
                'slide_id' => 3,
                'image' => 'upload/slides/l/f/logo-design3-3.jpg',
                'label' => 'Best Logo Design 2',
                'main' => 0,
                'sort' => 9,
                'exclude' => 0,
            ),
            12 => 
            array (
                'id' => 33,
                'slide_id' => 3,
                'image' => 'upload/slides/x/l/logo-design3-2.jpg',
                'label' => 'Best Logo Design',
                'main' => 0,
                'sort' => 8,
                'exclude' => 0,
            ),
            13 => 
            array (
                'id' => 34,
                'slide_id' => 3,
                'image' => 'upload/slides/e/r/logo-design3-1.jpg',
                'label' => 'Premium Logo Design',
                'main' => 0,
                'sort' => 7,
                'exclude' => 0,
            ),
            14 => 
            array (
                'id' => 35,
                'slide_id' => 3,
                'image' => 'upload/slides/i/q/logo-design2-1.jpg',
                'label' => 'Creative Logo Design',
                'main' => 0,
                'sort' => 6,
                'exclude' => 0,
            ),
            15 => 
            array (
                'id' => 36,
                'slide_id' => 3,
                'image' => 'upload/slides/y/o/logo-design1-4.jpg',
                'label' => 'Luxury Branding',
                'main' => 0,
                'sort' => 5,
                'exclude' => 0,
            ),
            16 => 
            array (
                'id' => 37,
                'slide_id' => 3,
                'image' => 'upload/slides/y/3/logo-design1-3.jpg',
                'label' => 'Luxury Logo Design 3',
                'main' => 0,
                'sort' => 4,
                'exclude' => 0,
            ),
            17 => 
            array (
                'id' => 38,
                'slide_id' => 3,
                'image' => 'upload/slides/6/s/logo-design1.jpg',
                'label' => 'Luxury Logo Design',
                'main' => 1,
                'sort' => 1,
                'exclude' => 0,
            ),
            18 => 
            array (
                'id' => 39,
                'slide_id' => 3,
                'image' => 'upload/slides/q/c/logo-design1-1.jpg',
                'label' => 'Luxury Logo Design 2',
                'main' => 0,
                'sort' => 2,
                'exclude' => 0,
            ),
            19 => 
            array (
                'id' => 40,
                'slide_id' => 3,
                'image' => 'upload/slides/z/n/logo-design9-1.jpg',
                'label' => '',
                'main' => 0,
                'sort' => 19,
                'exclude' => 0,
            ),
            20 => 
            array (
                'id' => 41,
                'slide_id' => 3,
                'image' => 'upload/slides/x/6/logo-design9-2.jpg',
                'label' => '',
                'main' => 0,
                'sort' => 20,
                'exclude' => 0,
            ),
            21 => 
            array (
                'id' => 42,
                'slide_id' => 3,
                'image' => 'upload/slides/m/f/logo-design10-1.jpg',
                'label' => '',
                'main' => 0,
                'sort' => 21,
                'exclude' => 0,
            ),
            22 => 
            array (
                'id' => 43,
                'slide_id' => 3,
                'image' => 'upload/slides/j/n/logo-design11-1.jpg',
                'label' => '',
                'main' => 0,
                'sort' => 22,
                'exclude' => 0,
            ),
            23 => 
            array (
                'id' => 44,
                'slide_id' => 3,
                'image' => 'upload/slides/w/n/logo-design12-1.jpg',
                'label' => 'make logo online ',
                'main' => 0,
                'sort' => 23,
                'exclude' => 0,
            ),
            24 => 
            array (
                'id' => 45,
                'slide_id' => 3,
                'image' => 'upload/slides/k/3/logo-design12-2.jpg',
                'label' => 'make logo online  2',
                'main' => 0,
                'sort' => 24,
                'exclude' => 0,
            ),
            25 => 
            array (
                'id' => 46,
                'slide_id' => 3,
                'image' => 'upload/slides/a/e/logo-design13-1.jpg',
                'label' => 'creative logo design 1',
                'main' => 0,
                'sort' => 25,
                'exclude' => 0,
            ),
            26 => 
            array (
                'id' => 47,
                'slide_id' => 3,
                'image' => 'upload/slides/l/i/logo-design13-2.jpg',
                'label' => 'creative logo design 2',
                'main' => 0,
                'sort' => 26,
                'exclude' => 0,
            ),
            27 => 
            array (
                'id' => 48,
                'slide_id' => 3,
                'image' => 'upload/slides/s/1/logo-design14-1.jpg',
                'label' => 'corporate logos ',
                'main' => 0,
                'sort' => 27,
                'exclude' => 0,
            ),
            28 => 
            array (
                'id' => 49,
                'slide_id' => 3,
                'image' => 'upload/slides/a/k/logo-design14-2.jpg',
                'label' => 'corporate logos 2',
                'main' => 0,
                'sort' => 28,
                'exclude' => 0,
            ),
            29 => 
            array (
                'id' => 50,
                'slide_id' => 3,
                'image' => 'upload/slides/w/5/logo-design14-3.jpg',
                'label' => 'corporate logos 3',
                'main' => 0,
                'sort' => 29,
                'exclude' => 0,
            ),
            30 => 
            array (
                'id' => 51,
                'slide_id' => 3,
                'image' => 'upload/slides/e/i/logo-design15-1.jpg',
                'label' => 'custom logo design',
                'main' => 0,
                'sort' => 30,
                'exclude' => 0,
            ),
            31 => 
            array (
                'id' => 52,
                'slide_id' => 3,
                'image' => 'upload/slides/w/r/logo-design15-2.jpg',
                'label' => 'custom logo design 2',
                'main' => 0,
                'sort' => 31,
                'exclude' => 0,
            ),
            32 => 
            array (
                'id' => 53,
                'slide_id' => 3,
                'image' => 'upload/slides/y/a/logo-design16-1.jpg',
                'label' => 'logodesign',
                'main' => 0,
                'sort' => 32,
                'exclude' => 0,
            ),
            33 => 
            array (
                'id' => 54,
                'slide_id' => 3,
                'image' => 'upload/slides/m/n/logo-design16-2.jpg',
                'label' => 'logodesign 2',
                'main' => 0,
                'sort' => 33,
                'exclude' => 0,
            ),
            34 => 
            array (
                'id' => 55,
                'slide_id' => 3,
                'image' => 'upload/slides/r/t/logo-design17-1.jpg',
                'label' => 'logo creation 2',
                'main' => 0,
                'sort' => 34,
                'exclude' => 0,
            ),
            35 => 
            array (
                'id' => 56,
                'slide_id' => 3,
                'image' => 'upload/slides/d/f/logo-design17-2.jpg',
                'label' => 'logo creation',
                'main' => 0,
                'sort' => 35,
                'exclude' => 0,
            ),
            36 => 
            array (
                'id' => 57,
                'slide_id' => 3,
                'image' => 'upload/slides/f/l/logo-design22-2.jpg',
                'label' => 'designer logos 4',
                'main' => 0,
                'sort' => 36,
                'exclude' => 0,
            ),
            37 => 
            array (
                'id' => 58,
                'slide_id' => 3,
                'image' => 'upload/slides/w/k/logo-design22-1.jpg',
                'label' => 'designer logos',
                'main' => 0,
                'sort' => 37,
                'exclude' => 0,
            ),
            38 => 
            array (
                'id' => 59,
                'slide_id' => 3,
                'image' => 'upload/slides/1/x/logo-design21-2.jpg',
                'label' => 'design logo online 2',
                'main' => 0,
                'sort' => 12,
                'exclude' => 0,
            ),
            39 => 
            array (
                'id' => 60,
                'slide_id' => 3,
                'image' => 'upload/slides/e/n/logo-design21-1.jpg',
                'label' => 'design logo online',
                'main' => 0,
                'sort' => 11,
                'exclude' => 0,
            ),
            40 => 
            array (
                'id' => 61,
                'slide_id' => 3,
                'image' => 'upload/slides/m/7/logo-design20-1.jpg',
                'label' => 'logo designers 2',
                'main' => 0,
                'sort' => 40,
                'exclude' => 0,
            ),
            41 => 
            array (
                'id' => 62,
                'slide_id' => 3,
                'image' => 'upload/slides/u/k/logo-design19-1.jpg',
                'label' => 'corporate logos  4',
                'main' => 0,
                'sort' => 41,
                'exclude' => 0,
            ),
            42 => 
            array (
                'id' => 63,
                'slide_id' => 3,
                'image' => 'upload/slides/q/l/logo-design18-1.jpg',
                'label' => 'designing a logo',
                'main' => 0,
                'sort' => 42,
                'exclude' => 0,
            ),
            43 => 
            array (
                'id' => 64,
                'slide_id' => 3,
                'image' => 'upload/slides/h/x/logo-design23-1.jpg',
                'label' => 'business logos',
                'main' => 0,
                'sort' => 43,
                'exclude' => 0,
            ),
            44 => 
            array (
                'id' => 65,
                'slide_id' => 1,
                'image' => 'upload/slides/s/j/business-card-design1.jpg',
                'label' => 'Business Card Design 1',
                'main' => 0,
                'sort' => 4,
                'exclude' => 0,
            ),
            45 => 
            array (
                'id' => 66,
                'slide_id' => 1,
                'image' => 'upload/slides/r/r/business-card-design2.jpg',
                'label' => 'Business Card Design 2',
                'main' => 0,
                'sort' => 5,
                'exclude' => 0,
            ),
            46 => 
            array (
                'id' => 67,
                'slide_id' => 1,
                'image' => 'upload/slides/n/5/business-card-design3.jpg',
                'label' => 'Business Card Design 3',
                'main' => 1,
                'sort' => 6,
                'exclude' => 0,
            ),
            47 => 
            array (
                'id' => 68,
                'slide_id' => 1,
                'image' => 'upload/slides/y/5/business-card-design4.jpg',
                'label' => 'Business Card Design 4',
                'main' => 0,
                'sort' => 7,
                'exclude' => 0,
            ),
            48 => 
            array (
                'id' => 69,
                'slide_id' => 1,
                'image' => 'upload/slides/f/8/business-card-design5.jpg',
                'label' => 'Business Card Design 5',
                'main' => 0,
                'sort' => 8,
                'exclude' => 0,
            ),
            49 => 
            array (
                'id' => 70,
                'slide_id' => 1,
                'image' => 'upload/slides/d/a/business-card-design6.jpg',
                'label' => 'Business Card Design 6',
                'main' => 0,
                'sort' => 9,
                'exclude' => 0,
            ),
            50 => 
            array (
                'id' => 71,
                'slide_id' => 1,
                'image' => 'upload/slides/0/2/business-card-design7.jpg',
                'label' => 'Business Card Design 7',
                'main' => 0,
                'sort' => 10,
                'exclude' => 0,
            ),
            51 => 
            array (
                'id' => 72,
                'slide_id' => 1,
                'image' => 'upload/slides/k/6/business-card-design8.jpg',
                'label' => 'Business Card Design 8',
                'main' => 0,
                'sort' => 11,
                'exclude' => 0,
            ),
            52 => 
            array (
                'id' => 73,
                'slide_id' => 1,
                'image' => 'upload/slides/p/m/business-card-design9.jpg',
                'label' => 'Business Card Design 9',
                'main' => 0,
                'sort' => 12,
                'exclude' => 0,
            ),
            53 => 
            array (
                'id' => 74,
                'slide_id' => 1,
                'image' => 'upload/slides/1/y/business-card-design10.jpg',
                'label' => 'Business Card Design 10',
                'main' => 0,
                'sort' => 13,
                'exclude' => 0,
            ),
            54 => 
            array (
                'id' => 75,
                'slide_id' => 1,
                'image' => 'upload/slides/6/w/business-card-design11.jpg',
                'label' => 'Business Card Design 11',
                'main' => 0,
                'sort' => 14,
                'exclude' => 0,
            ),
            55 => 
            array (
                'id' => 76,
                'slide_id' => 1,
                'image' => 'upload/slides/v/x/business-card-design12.jpg',
                'label' => 'Business Card Design 12',
                'main' => 0,
                'sort' => 15,
                'exclude' => 0,
            ),
            56 => 
            array (
                'id' => 77,
                'slide_id' => 1,
                'image' => 'upload/slides/i/0/business-card-design13.jpg',
                'label' => 'Business Card Design 13',
                'main' => 0,
                'sort' => 16,
                'exclude' => 0,
            ),
            57 => 
            array (
                'id' => 78,
                'slide_id' => 1,
                'image' => 'upload/slides/z/e/business-card-design14.jpg',
                'label' => 'Business Card Design 14',
                'main' => 0,
                'sort' => 17,
                'exclude' => 0,
            ),
            58 => 
            array (
                'id' => 79,
                'slide_id' => 1,
                'image' => 'upload/slides/m/b/business-card-design15.jpg',
                'label' => 'Business Card Design 15',
                'main' => 0,
                'sort' => 18,
                'exclude' => 0,
            ),
        ));
        
        
    }
}

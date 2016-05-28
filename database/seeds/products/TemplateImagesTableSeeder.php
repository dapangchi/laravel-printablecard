<?php

use Illuminate\Database\Seeder;

class TemplateImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('template_images')->delete();
        
        \DB::table('template_images')->insert(array (
            0 => 
            array (
                'id' => 8,
                'template_id' => 2,
                'image' => 'upload/template/v/p/black-duplex-card-0002-1.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            1 => 
            array (
                'id' => 9,
                'template_id' => 2,
                'image' => 'upload/template/u/k/black-duplex-card-0002-2.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            2 => 
            array (
                'id' => 11,
                'template_id' => 2,
                'image' => 'upload/template/4/c/black-duplex-card-0002-4.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            3 => 
            array (
                'id' => 13,
                'template_id' => 2,
                'image' => 'upload/template/x/z/black-duplex-card-0002-6.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            4 => 
            array (
                'id' => 14,
                'template_id' => 2,
                'image' => 'upload/template/c/y/black-duplex-card-0002-8.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            5 => 
            array (
                'id' => 15,
                'template_id' => 3,
                'image' => 'upload/template/u/w/22kraft-card-0001-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            6 => 
            array (
                'id' => 16,
                'template_id' => 3,
                'image' => 'upload/template/p/6/22kraft-card-0001-2.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            7 => 
            array (
                'id' => 17,
                'template_id' => 3,
                'image' => 'upload/template/c/m/22kraft-card-0001-3.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            8 => 
            array (
                'id' => 18,
                'template_id' => 3,
                'image' => 'upload/template/y/3/22kraft-card-0001-4.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            9 => 
            array (
                'id' => 19,
                'template_id' => 3,
                'image' => 'upload/template/x/y/22kraft-card-0001-5.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            10 => 
            array (
                'id' => 20,
                'template_id' => 3,
                'image' => 'upload/template/e/k/22kraft-card-0001-6.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            11 => 
            array (
                'id' => 21,
                'template_id' => 4,
                'image' => 'upload/template/h/r/natural-cream-card-0001-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            12 => 
            array (
                'id' => 22,
                'template_id' => 4,
                'image' => 'upload/template/e/i/natural-cream-card-0001-3.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            13 => 
            array (
                'id' => 23,
                'template_id' => 4,
                'image' => 'upload/template/x/q/natural-cream-card-0001-4.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 1,
                'exclude' => 0,
            ),
            14 => 
            array (
                'id' => 24,
                'template_id' => 5,
                'image' => 'upload/template/i/s/duplex-card-0001-1.jpg',
                'label' => 'elegent name card template photo 1',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            15 => 
            array (
                'id' => 25,
                'template_id' => 5,
                'image' => 'upload/template/m/9/duplex-card-0001-2.jpg',
                'label' => 'elegent name card template photo 2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            16 => 
            array (
                'id' => 26,
                'template_id' => 5,
                'image' => 'upload/template/y/3/duplex-card-0001-5.jpg',
                'label' => 'elegent name card template photo 3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            17 => 
            array (
                'id' => 27,
                'template_id' => 6,
                'image' => 'upload/template/o/j/dark-gray-duplex-card-0001-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            18 => 
            array (
                'id' => 28,
                'template_id' => 6,
                'image' => 'upload/template/m/h/dark-gray-duplex-card-0001-3.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            19 => 
            array (
                'id' => 29,
                'template_id' => 6,
                'image' => 'upload/template/r/o/dark-gray-duplex-card-0001-4.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            20 => 
            array (
                'id' => 30,
                'template_id' => 6,
                'image' => 'upload/template/t/a/dark-gray-duplex-card-0001-5.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            21 => 
            array (
                'id' => 31,
                'template_id' => 6,
                'image' => 'upload/template/l/b/dark-gray-duplex-card-0001-6.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            22 => 
            array (
                'id' => 32,
                'template_id' => 6,
                'image' => 'upload/template/w/f/dark-gray-duplex-card-0001-7.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 1,
                'exclude' => 0,
            ),
            23 => 
            array (
                'id' => 33,
                'template_id' => 7,
                'image' => 'upload/template/l/i/hard-suede-card-0001-1.jpg',
                'label' => 'Luxury name card template photo 1-1',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            24 => 
            array (
                'id' => 34,
                'template_id' => 7,
                'image' => 'upload/template/k/t/hard-suede-card-0001-2.jpg',
                'label' => 'Luxury name card template photo 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            25 => 
            array (
                'id' => 35,
                'template_id' => 7,
                'image' => 'upload/template/k/c/hard-suede-card-0001-3.jpg',
                'label' => 'Luxury name card template photo 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            26 => 
            array (
                'id' => 36,
                'template_id' => 7,
                'image' => 'upload/template/2/i/hard-suede-card-0001-4.jpg',
                'label' => 'Luxury name card template photo 1-4',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            27 => 
            array (
                'id' => 37,
                'template_id' => 7,
                'image' => 'upload/template/k/t/hard-suede-card-0001-5.jpg',
                'label' => 'Luxury name card template photo 1-5',
                'sort' => 5,
                'main' => 1,
                'exclude' => 0,
            ),
            28 => 
            array (
                'id' => 38,
                'template_id' => 7,
                'image' => 'upload/template/x/2/hard-suede-card-0001-7.jpg',
                'label' => 'Luxury name card template photo 1-7',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            29 => 
            array (
                'id' => 39,
                'template_id' => 8,
                'image' => 'upload/template/g/p/black-duplex-card-0003-1.jpg',
                'label' => 'Corporate Black visiting Card design 1-1',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            30 => 
            array (
                'id' => 40,
                'template_id' => 8,
                'image' => 'upload/template/z/5/black-duplex-card-0003-2.jpg',
                'label' => 'Corporate Black visiting Card design 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            31 => 
            array (
                'id' => 41,
                'template_id' => 8,
                'image' => 'upload/template/a/t/black-duplex-card-0003-3.jpg',
                'label' => 'Corporate Black visiting Card design 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            32 => 
            array (
                'id' => 42,
                'template_id' => 8,
                'image' => 'upload/template/i/o/black-duplex-card-0003-4.jpg',
                'label' => 'Corporate Black visiting Card design 1-4',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            33 => 
            array (
                'id' => 48,
                'template_id' => 10,
                'image' => 'upload/template/9/3/dark-gray-duplex-card-0003-3.jpg',
                'label' => 'High Tech Business Card Template 1-1',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            34 => 
            array (
                'id' => 49,
                'template_id' => 10,
                'image' => 'upload/template/1/g/dark-gray-duplex-card-0003-5.jpg',
                'label' => 'High Tech Business Card Template 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            35 => 
            array (
                'id' => 50,
                'template_id' => 10,
                'image' => 'upload/template/g/3/dark-gray-duplex-card-0003-6.jpg',
                'label' => 'High Tech Business Card Template 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            36 => 
            array (
                'id' => 51,
                'template_id' => 10,
                'image' => 'upload/template/y/8/dark-gray-duplex-card-0003-7.jpg',
                'label' => 'High Tech Business Card Template 1-4',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            37 => 
            array (
                'id' => 52,
                'template_id' => 11,
                'image' => 'upload/template/g/q/dark-gray-duplex-card-0004-1.jpg',
                'label' => 'Embossing Name Card Template 1-1',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            38 => 
            array (
                'id' => 53,
                'template_id' => 11,
                'image' => 'upload/template/w/y/dark-gray-duplex-card-0004-2.jpg',
                'label' => 'Embossing Name Card Template 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            39 => 
            array (
                'id' => 54,
                'template_id' => 11,
                'image' => 'upload/template/b/9/dark-gray-duplex-card-0004-3.jpg',
                'label' => 'Embossing Name Card Template 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            40 => 
            array (
                'id' => 55,
                'template_id' => 11,
                'image' => 'upload/template/l/m/dark-gray-duplex-card-0004-4.jpg',
                'label' => 'Embossing Name Card Template 1-4',
                'sort' => 4,
                'main' => 1,
                'exclude' => 0,
            ),
            41 => 
            array (
                'id' => 56,
                'template_id' => 12,
                'image' => 'upload/template/l/a/hard-suede-card-0002-1.jpg',
                'label' => 'Corporate visiting card template photo 1-1',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            42 => 
            array (
                'id' => 57,
                'template_id' => 12,
                'image' => 'upload/template/v/w/hard-suede-card-0002-2.jpg',
                'label' => 'Corporate visiting card template photo 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            43 => 
            array (
                'id' => 58,
                'template_id' => 12,
                'image' => 'upload/template/g/m/hard-suede-card-0002-3.jpg',
                'label' => 'Corporate visiting card template photo 1-3',
                'sort' => 3,
                'main' => 1,
                'exclude' => 0,
            ),
            44 => 
            array (
                'id' => 59,
                'template_id' => 12,
                'image' => 'upload/template/v/g/hard-suede-card-0002-4.jpg',
                'label' => 'Corporate visiting card template photo 1-4',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            45 => 
            array (
                'id' => 60,
                'template_id' => 12,
                'image' => 'upload/template/t/m/hard-suede-card-0002-5.jpg',
                'label' => 'Corporate visiting card template photo 1-5',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            46 => 
            array (
                'id' => 61,
                'template_id' => 13,
                'image' => 'upload/template/h/h/22kraft-card-0002-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            47 => 
            array (
                'id' => 62,
                'template_id' => 13,
                'image' => 'upload/template/8/a/22kraft-card-0002-3.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            48 => 
            array (
                'id' => 63,
                'template_id' => 13,
                'image' => 'upload/template/w/1/22kraft-card-0002-4.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 1,
                'exclude' => 0,
            ),
            49 => 
            array (
                'id' => 64,
                'template_id' => 13,
                'image' => 'upload/template/c/m/22kraft-card-0002-5.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            50 => 
            array (
                'id' => 69,
                'template_id' => 15,
                'image' => 'upload/template/v/c/kraft-duplex-card-0001-1.jpg',
                'label' => 'Gold Stamping Business Card Design 1-1',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            51 => 
            array (
                'id' => 70,
                'template_id' => 15,
                'image' => 'upload/template/t/4/kraft-duplex-card-0001-2.jpg',
                'label' => 'Gold Stamping Business Card Design 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            52 => 
            array (
                'id' => 71,
                'template_id' => 15,
                'image' => 'upload/template/3/z/kraft-duplex-card-0001-4.jpg',
                'label' => 'Gold Stamping Business Card Design 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            53 => 
            array (
                'id' => 72,
                'template_id' => 15,
                'image' => 'upload/template/b/d/kraft-duplex-card-0001-5.jpg',
                'label' => 'Gold Stamping Business Card Design 1-4',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            54 => 
            array (
                'id' => 73,
                'template_id' => 15,
                'image' => 'upload/template/m/v/kraft-duplex-card-0001-7.jpg',
                'label' => 'Gold Stamping Business Card Design 1-5',
                'sort' => 5,
                'main' => 1,
                'exclude' => 0,
            ),
            55 => 
            array (
                'id' => 74,
                'template_id' => 16,
                'image' => 'upload/template/a/3/triplex-card-0001-1.jpg',
                'label' => 'Luxury Corporate Name Card Template 1-1',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            56 => 
            array (
                'id' => 75,
                'template_id' => 16,
                'image' => 'upload/template/b/r/triplex-card-0001-2.jpg',
                'label' => 'Luxury Corporate Name Card Template 1-2',
                'sort' => 2,
                'main' => 1,
                'exclude' => 0,
            ),
            57 => 
            array (
                'id' => 76,
                'template_id' => 16,
                'image' => 'upload/template/m/o/triplex-card-0001-3.jpg',
                'label' => 'Luxury Corporate Name Card Template 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            58 => 
            array (
                'id' => 77,
                'template_id' => 17,
                'image' => 'upload/template/r/t/premium-white-card-0001-1.jpg',
                'label' => 'Flourish pattern emboss Name Card Template 1-1',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            59 => 
            array (
                'id' => 78,
                'template_id' => 17,
                'image' => 'upload/template/t/r/premium-white-card-0001-3.jpg',
                'label' => 'Flourish pattern emboss Name Card Template 1-2',
                'sort' => 2,
                'main' => 1,
                'exclude' => 0,
            ),
            60 => 
            array (
                'id' => 79,
                'template_id' => 17,
                'image' => 'upload/template/a/s/premium-white-card-0001-4.jpg',
                'label' => 'Flourish pattern emboss Name Card Template 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            61 => 
            array (
                'id' => 80,
                'template_id' => 18,
                'image' => 'upload/template/g/t/premium-white-card-0002-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            62 => 
            array (
                'id' => 81,
                'template_id' => 18,
                'image' => 'upload/template/j/a/premium-white-card-0002-2.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            63 => 
            array (
                'id' => 82,
                'template_id' => 18,
                'image' => 'upload/template/y/u/premium-white-card-0002-3.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            64 => 
            array (
                'id' => 83,
                'template_id' => 18,
                'image' => 'upload/template/w/b/premium-white-card-0002-4.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            65 => 
            array (
                'id' => 84,
                'template_id' => 18,
                'image' => 'upload/template/n/n/premium-white-card-0002-5.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 1,
                'exclude' => 0,
            ),
            66 => 
            array (
                'id' => 85,
                'template_id' => 18,
                'image' => 'upload/template/a/k/premium-white-card-0002-6.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            67 => 
            array (
                'id' => 86,
                'template_id' => 19,
                'image' => 'upload/template/0/w/black-metal-card-0002-1.jpg',
                'label' => 'Photographer Name Card Template 1-1',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            68 => 
            array (
                'id' => 87,
                'template_id' => 19,
                'image' => 'upload/template/q/i/black-metal-card-0002-2.jpg',
                'label' => 'Photographer Name Card Template 1-2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            69 => 
            array (
                'id' => 88,
                'template_id' => 19,
                'image' => 'upload/template/d/e/black-metal-card-0002-3.jpg',
                'label' => 'Photographer Name Card Template 1-3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
        ));
        
        
    }
}

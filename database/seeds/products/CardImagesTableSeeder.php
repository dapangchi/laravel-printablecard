<?php

use Illuminate\Database\Seeder;

class CardImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_images')->delete();
        
        \DB::table('card_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 22,
                'image' => 'upload/card/o/i/laser-engraved-business-cards-1.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 1,
                'exclude' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'card_id' => 22,
                'image' => 'upload/card/j/5/laser-engraved-business-cards-2.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'card_id' => 22,
                'image' => 'upload/card/g/e/laser-engraved-business-cards-3.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            3 => 
            array (
                'id' => 5,
                'card_id' => 22,
                'image' => 'upload/card/v/e/laser-engraved-business-cards-7.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            4 => 
            array (
                'id' => 6,
                'card_id' => 22,
                'image' => 'upload/card/d/8/laser-engraved-business-cards-6.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            5 => 
            array (
                'id' => 7,
                'card_id' => 22,
                'image' => 'upload/card/e/o/laser-engraved-business-cards-5.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            6 => 
            array (
                'id' => 8,
                'card_id' => 22,
                'image' => 'upload/card/f/h/laser-engraved-business-cards-4.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            7 => 
            array (
                'id' => 9,
                'card_id' => 21,
                'image' => 'upload/card/m/s/laser-engraved-black-business-cards-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            8 => 
            array (
                'id' => 10,
                'card_id' => 21,
                'image' => 'upload/card/m/3/laser-engraved-black-business-cards-2.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            9 => 
            array (
                'id' => 11,
                'card_id' => 21,
                'image' => 'upload/card/c/e/laser-engraved-black-business-cards-7.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            10 => 
            array (
                'id' => 12,
                'card_id' => 21,
                'image' => 'upload/card/1/p/laser-engraved-black-business-cards-6.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            11 => 
            array (
                'id' => 13,
                'card_id' => 21,
                'image' => 'upload/card/2/5/laser-engraved-black-business-cards-5.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            12 => 
            array (
                'id' => 14,
                'card_id' => 21,
                'image' => 'upload/card/x/p/laser-engraved-black-business-cards-4.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            13 => 
            array (
                'id' => 15,
                'card_id' => 21,
                'image' => 'upload/card/a/e/laser-engraved-black-business-cards-3.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            14 => 
            array (
                'id' => 16,
                'card_id' => 20,
                'image' => 'upload/card/z/t/regular-suede-business-card1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            15 => 
            array (
                'id' => 17,
                'card_id' => 20,
                'image' => 'upload/card/x/o/regular-suede-business-card10.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            16 => 
            array (
                'id' => 18,
                'card_id' => 20,
                'image' => 'upload/card/d/m/regular-suede-business-card9.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            17 => 
            array (
                'id' => 19,
                'card_id' => 20,
                'image' => 'upload/card/u/q/regular-suede-business-card8.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            18 => 
            array (
                'id' => 20,
                'card_id' => 20,
                'image' => 'upload/card/x/a/regular-suede-business-card7.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            19 => 
            array (
                'id' => 21,
                'card_id' => 20,
                'image' => 'upload/card/a/d/regular-suede-business-card6.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            20 => 
            array (
                'id' => 22,
                'card_id' => 20,
                'image' => 'upload/card/x/o/regular-suede-business-card5.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            21 => 
            array (
                'id' => 23,
                'card_id' => 20,
                'image' => 'upload/card/x/u/regular-suede-business-card4.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            22 => 
            array (
                'id' => 24,
                'card_id' => 20,
                'image' => 'upload/card/5/k/regular-suede-business-card3.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            23 => 
            array (
                'id' => 25,
                'card_id' => 20,
                'image' => 'upload/card/a/r/regular-suede-business-card2.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            24 => 
            array (
                'id' => 26,
                'card_id' => 19,
                'image' => 'upload/card/v/m/natural-cream-business-card1.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 1,
                'exclude' => 0,
            ),
            25 => 
            array (
                'id' => 27,
                'card_id' => 19,
                'image' => 'upload/card/b/h/natural-cream-business-card6.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            26 => 
            array (
                'id' => 28,
                'card_id' => 19,
                'image' => 'upload/card/j/s/natural-cream-business-card5.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            27 => 
            array (
                'id' => 29,
                'card_id' => 19,
                'image' => 'upload/card/9/m/natural-cream-business-card4.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            28 => 
            array (
                'id' => 30,
                'card_id' => 19,
                'image' => 'upload/card/0/5/natural-cream-business-card3.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            29 => 
            array (
                'id' => 31,
                'card_id' => 19,
                'image' => 'upload/card/6/4/natural-cream-business-card2.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            30 => 
            array (
                'id' => 32,
                'card_id' => 18,
                'image' => 'upload/card/w/c/silk-business-cards3.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            31 => 
            array (
                'id' => 33,
                'card_id' => 18,
                'image' => 'upload/card/g/i/silk-business-cards2.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            32 => 
            array (
                'id' => 34,
                'card_id' => 18,
                'image' => 'upload/card/q/3/silk-business-cards1.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            33 => 
            array (
                'id' => 39,
                'card_id' => 17,
                'image' => 'upload/card/3/u/clear-business-card5.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            34 => 
            array (
                'id' => 40,
                'card_id' => 17,
                'image' => 'upload/card/w/n/clear-business-card3.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            35 => 
            array (
                'id' => 41,
                'card_id' => 17,
                'image' => 'upload/card/8/q/clear-business-card2.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            36 => 
            array (
                'id' => 42,
                'card_id' => 17,
                'image' => 'upload/card/f/b/clear-business-card1.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 1,
                'exclude' => 0,
            ),
            37 => 
            array (
                'id' => 47,
                'card_id' => 16,
                'image' => 'upload/card/s/c/frost-pvc-plastic-cards3.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            38 => 
            array (
                'id' => 48,
                'card_id' => 16,
                'image' => 'upload/card/j/j/frost-pvc-plastic-cards2.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            39 => 
            array (
                'id' => 49,
                'card_id' => 16,
                'image' => 'upload/card/8/2/frost-pvc-plastic-cards1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            40 => 
            array (
                'id' => 50,
                'card_id' => 15,
                'image' => 'upload/card/w/w/frost-plastic-card1.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            41 => 
            array (
                'id' => 51,
                'card_id' => 15,
                'image' => 'upload/card/p/5/frost-plastic-card3.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            42 => 
            array (
                'id' => 52,
                'card_id' => 15,
                'image' => 'upload/card/b/2/frost-plastic-card2.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 1,
                'exclude' => 0,
            ),
            43 => 
            array (
                'id' => 53,
                'card_id' => 14,
                'image' => 'upload/card/e/w/gold-metal-business-card4.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            44 => 
            array (
                'id' => 54,
                'card_id' => 14,
                'image' => 'upload/card/e/y/gold-metal-business-card3.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            45 => 
            array (
                'id' => 55,
                'card_id' => 14,
                'image' => 'upload/card/z/h/gold-metal-business-card2.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            46 => 
            array (
                'id' => 56,
                'card_id' => 14,
                'image' => 'upload/card/h/l/gold-metal-business-card1.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            47 => 
            array (
                'id' => 57,
                'card_id' => 13,
                'image' => 'upload/card/a/z/stainless-metal-business-card12.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            48 => 
            array (
                'id' => 58,
                'card_id' => 13,
                'image' => 'upload/card/g/k/stainless-metal-business-card11.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            49 => 
            array (
                'id' => 59,
                'card_id' => 13,
                'image' => 'upload/card/3/e/stainless-metal-business-card9.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            50 => 
            array (
                'id' => 60,
                'card_id' => 13,
                'image' => 'upload/card/8/t/stainless-metal-business-card8.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            51 => 
            array (
                'id' => 61,
                'card_id' => 13,
                'image' => 'upload/card/a/z/stainless-metal-business-card7.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            52 => 
            array (
                'id' => 62,
                'card_id' => 13,
                'image' => 'upload/card/t/g/stainless-metal-business-card6.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            53 => 
            array (
                'id' => 63,
                'card_id' => 13,
                'image' => 'upload/card/a/k/stainless-metal-business-card5.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            54 => 
            array (
                'id' => 64,
                'card_id' => 13,
                'image' => 'upload/card/m/p/stainless-metal-business-card4.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            55 => 
            array (
                'id' => 65,
                'card_id' => 13,
                'image' => 'upload/card/v/0/stainless-metal-business-card3.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            56 => 
            array (
                'id' => 66,
                'card_id' => 13,
                'image' => 'upload/card/q/8/stainless-metal-business-card2.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            57 => 
            array (
                'id' => 67,
                'card_id' => 12,
                'image' => 'upload/card/y/4/black-metal-business-cards10.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            58 => 
            array (
                'id' => 68,
                'card_id' => 12,
                'image' => 'upload/card/w/b/black-metal-business-cards9.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            59 => 
            array (
                'id' => 69,
                'card_id' => 12,
                'image' => 'upload/card/m/c/black-metal-business-cards8.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            60 => 
            array (
                'id' => 70,
                'card_id' => 12,
                'image' => 'upload/card/x/q/black-metal-business-cards7.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            61 => 
            array (
                'id' => 71,
                'card_id' => 12,
                'image' => 'upload/card/m/m/black-metal-business-cards6.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            62 => 
            array (
                'id' => 72,
                'card_id' => 12,
                'image' => 'upload/card/x/q/black-metal-business-cards5.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            63 => 
            array (
                'id' => 73,
                'card_id' => 12,
                'image' => 'upload/card/f/9/black-metal-business-cards4.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            64 => 
            array (
                'id' => 74,
                'card_id' => 12,
                'image' => 'upload/card/f/7/black-metal-business-cards3.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            65 => 
            array (
                'id' => 75,
                'card_id' => 12,
                'image' => 'upload/card/3/k/black-metal-business-cards2.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            66 => 
            array (
                'id' => 76,
                'card_id' => 12,
                'image' => 'upload/card/s/v/black-metal-business-cards1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            67 => 
            array (
                'id' => 77,
                'card_id' => 12,
                'image' => 'upload/card/n/q/black-metal-business-cards11.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            68 => 
            array (
                'id' => 78,
                'card_id' => 11,
                'image' => 'upload/card/h/u/gray-business-cards9.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            69 => 
            array (
                'id' => 79,
                'card_id' => 11,
                'image' => 'upload/card/d/e/gray-business-cards8.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            70 => 
            array (
                'id' => 80,
                'card_id' => 11,
                'image' => 'upload/card/g/8/gray-business-cards7.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            71 => 
            array (
                'id' => 81,
                'card_id' => 11,
                'image' => 'upload/card/2/c/gray-business-cards6.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            72 => 
            array (
                'id' => 82,
                'card_id' => 11,
                'image' => 'upload/card/e/0/gray-business-cards5.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            73 => 
            array (
                'id' => 83,
                'card_id' => 11,
                'image' => 'upload/card/h/8/gray-business-cards4.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            74 => 
            array (
                'id' => 84,
                'card_id' => 11,
                'image' => 'upload/card/k/f/gray-business-cards3.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            75 => 
            array (
                'id' => 85,
                'card_id' => 11,
                'image' => 'upload/card/y/f/gray-business-cards2.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            76 => 
            array (
                'id' => 87,
                'card_id' => 11,
                'image' => 'upload/card/d/q/light-gray-business-cards3.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            77 => 
            array (
                'id' => 88,
                'card_id' => 11,
                'image' => 'upload/card/7/v/light-gray-business-cards2.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            78 => 
            array (
                'id' => 89,
                'card_id' => 11,
                'image' => 'upload/card/2/f/light-gray-business-cards1.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            79 => 
            array (
                'id' => 90,
                'card_id' => 11,
                'image' => 'upload/card/r/s/light-gray-business-cards4.jpg',
                'label' => '',
                'sort' => 13,
                'main' => 0,
                'exclude' => 0,
            ),
            80 => 
            array (
                'id' => 91,
                'card_id' => 11,
                'image' => 'upload/card/n/r/gray-business-cards10.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            81 => 
            array (
                'id' => 92,
                'card_id' => 10,
                'image' => 'upload/card/b/p/silk-business-cards-32pt-1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            82 => 
            array (
                'id' => 93,
                'card_id' => 10,
                'image' => 'upload/card/n/l/silk-business-cards-32pt-7.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            83 => 
            array (
                'id' => 94,
                'card_id' => 10,
                'image' => 'upload/card/u/a/silk-business-cards-32pt-6.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            84 => 
            array (
                'id' => 95,
                'card_id' => 10,
                'image' => 'upload/card/v/w/silk-business-cards-32pt-5.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            85 => 
            array (
                'id' => 96,
                'card_id' => 10,
                'image' => 'upload/card/6/m/silk-business-cards-32pt-4.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            86 => 
            array (
                'id' => 97,
                'card_id' => 10,
                'image' => 'upload/card/z/q/silk-business-cards-32pt-3.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            87 => 
            array (
                'id' => 98,
                'card_id' => 10,
                'image' => 'upload/card/f/r/silk-business-cards-32pt-2.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            88 => 
            array (
                'id' => 99,
                'card_id' => 9,
                'image' => 'upload/card/v/c/kraft-business-card13.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            89 => 
            array (
                'id' => 100,
                'card_id' => 9,
                'image' => 'upload/card/n/2/kraft-business-card12.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            90 => 
            array (
                'id' => 101,
                'card_id' => 9,
                'image' => 'upload/card/4/h/kraft-business-card11.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            91 => 
            array (
                'id' => 102,
                'card_id' => 9,
                'image' => 'upload/card/u/x/kraft-business-card10.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            92 => 
            array (
                'id' => 103,
                'card_id' => 9,
                'image' => 'upload/card/y/2/kraft-business-card9.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            93 => 
            array (
                'id' => 104,
                'card_id' => 9,
                'image' => 'upload/card/7/z/kraft-business-card8.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            94 => 
            array (
                'id' => 105,
                'card_id' => 9,
                'image' => 'upload/card/p/n/kraft-business-card7.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            95 => 
            array (
                'id' => 106,
                'card_id' => 9,
                'image' => 'upload/card/y/n/kraft-business-card6.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 1,
                'exclude' => 0,
            ),
            96 => 
            array (
                'id' => 107,
                'card_id' => 9,
                'image' => 'upload/card/0/g/kraft-business-card5.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            97 => 
            array (
                'id' => 108,
                'card_id' => 9,
                'image' => 'upload/card/a/6/kraft-business-card4.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            98 => 
            array (
                'id' => 109,
                'card_id' => 9,
                'image' => 'upload/card/d/e/kraft-business-card3.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            99 => 
            array (
                'id' => 110,
                'card_id' => 9,
                'image' => 'upload/card/d/u/kraft-business-card2.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            100 => 
            array (
                'id' => 111,
                'card_id' => 9,
                'image' => 'upload/card/u/x/kraft-business-card1.jpg',
                'label' => '',
                'sort' => 13,
                'main' => 0,
                'exclude' => 0,
            ),
            101 => 
            array (
                'id' => 112,
                'card_id' => 9,
                'image' => 'upload/card/r/i/kraft-business-card15.jpg',
                'label' => '',
                'sort' => 14,
                'main' => 0,
                'exclude' => 0,
            ),
            102 => 
            array (
                'id' => 113,
                'card_id' => 9,
                'image' => 'upload/card/n/3/kraft-business-card14.jpg',
                'label' => '',
                'sort' => 15,
                'main' => 0,
                'exclude' => 0,
            ),
            103 => 
            array (
                'id' => 114,
                'card_id' => 8,
                'image' => 'upload/card/e/f/letterpress-business-cards12.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            104 => 
            array (
                'id' => 115,
                'card_id' => 8,
                'image' => 'upload/card/4/z/letterpress-business-cards11.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            105 => 
            array (
                'id' => 116,
                'card_id' => 8,
                'image' => 'upload/card/3/v/letterpress-business-cards10.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            106 => 
            array (
                'id' => 117,
                'card_id' => 8,
                'image' => 'upload/card/i/m/letterpress-business-cards9.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            107 => 
            array (
                'id' => 118,
                'card_id' => 8,
                'image' => 'upload/card/k/r/letterpress-business-cards8.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            108 => 
            array (
                'id' => 119,
                'card_id' => 8,
                'image' => 'upload/card/z/y/letterpress-business-cards7.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            109 => 
            array (
                'id' => 120,
                'card_id' => 8,
                'image' => 'upload/card/k/d/letterpress-business-cards6.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            110 => 
            array (
                'id' => 121,
                'card_id' => 8,
                'image' => 'upload/card/c/o/letterpress-business-cards5.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            111 => 
            array (
                'id' => 122,
                'card_id' => 8,
                'image' => 'upload/card/c/r/letterpress-business-cards1.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            112 => 
            array (
                'id' => 123,
                'card_id' => 8,
                'image' => 'upload/card/g/a/letterpress-business-cards2.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            113 => 
            array (
                'id' => 124,
                'card_id' => 8,
                'image' => 'upload/card/s/j/letterpress-business-cards3.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            114 => 
            array (
                'id' => 125,
                'card_id' => 8,
                'image' => 'upload/card/o/b/letterpress-business-cards4.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            115 => 
            array (
                'id' => 126,
                'card_id' => 7,
                'image' => 'upload/card/l/n/soft-suede-business-cards-13.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            116 => 
            array (
                'id' => 127,
                'card_id' => 7,
                'image' => 'upload/card/o/p/soft-suede-business-cards-12.jpg',
                'label' => '',
                'sort' => 14,
                'main' => 0,
                'exclude' => 0,
            ),
            117 => 
            array (
                'id' => 128,
                'card_id' => 7,
                'image' => 'upload/card/g/k/soft-suede-business-cards-11.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            118 => 
            array (
                'id' => 129,
                'card_id' => 7,
                'image' => 'upload/card/8/1/soft-suede-business-cards-10.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            119 => 
            array (
                'id' => 130,
                'card_id' => 7,
                'image' => 'upload/card/a/w/soft-suede-business-cards-9.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            120 => 
            array (
                'id' => 131,
                'card_id' => 7,
                'image' => 'upload/card/l/g/soft-suede-business-cards-8.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            121 => 
            array (
                'id' => 132,
                'card_id' => 7,
                'image' => 'upload/card/z/a/soft-suede-business-cards-7.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            122 => 
            array (
                'id' => 133,
                'card_id' => 7,
                'image' => 'upload/card/g/k/soft-suede-business-cards-6.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            123 => 
            array (
                'id' => 134,
                'card_id' => 7,
                'image' => 'upload/card/d/e/soft-suede-business-cards-5.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            124 => 
            array (
                'id' => 135,
                'card_id' => 7,
                'image' => 'upload/card/5/7/soft-suede-business-cards-4.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            125 => 
            array (
                'id' => 136,
                'card_id' => 7,
                'image' => 'upload/card/h/o/soft-suede-business-cards-3.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            126 => 
            array (
                'id' => 137,
                'card_id' => 7,
                'image' => 'upload/card/r/q/soft-suede-business-cards-2.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            127 => 
            array (
                'id' => 138,
                'card_id' => 7,
                'image' => 'upload/card/b/x/soft-suede-business-cards-1.jpg',
                'label' => '',
                'sort' => 13,
                'main' => 0,
                'exclude' => 0,
            ),
            128 => 
            array (
                'id' => 139,
                'card_id' => 7,
                'image' => 'upload/card/t/t/soft-suede-business-cards-14.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            129 => 
            array (
                'id' => 140,
                'card_id' => 6,
                'image' => 'upload/card/m/t/hard-suede-business-cards-18.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            130 => 
            array (
                'id' => 141,
                'card_id' => 6,
                'image' => 'upload/card/g/8/hard-suede-business-cards-17.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            131 => 
            array (
                'id' => 142,
                'card_id' => 6,
                'image' => 'upload/card/z/v/hard-suede-business-cards-16.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            132 => 
            array (
                'id' => 144,
                'card_id' => 6,
                'image' => 'upload/card/d/d/hard-suede-business-cards-14.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            133 => 
            array (
                'id' => 145,
                'card_id' => 6,
                'image' => 'upload/card/r/7/hard-suede-business-cards-13.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            134 => 
            array (
                'id' => 146,
                'card_id' => 6,
                'image' => 'upload/card/m/g/hard-suede-business-cards-12.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            135 => 
            array (
                'id' => 147,
                'card_id' => 6,
                'image' => 'upload/card/i/e/hard-suede-business-cards-11.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            136 => 
            array (
                'id' => 150,
                'card_id' => 6,
                'image' => 'upload/card/c/7/hard-suede-business-cards-7.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            137 => 
            array (
                'id' => 151,
                'card_id' => 6,
                'image' => 'upload/card/m/o/hard-suede-business-cards-6.jpg',
                'label' => '',
                'sort' => 14,
                'main' => 0,
                'exclude' => 0,
            ),
            138 => 
            array (
                'id' => 152,
                'card_id' => 6,
                'image' => 'upload/card/f/o/hard-suede-business-cards-5.jpg',
                'label' => '',
                'sort' => 15,
                'main' => 0,
                'exclude' => 0,
            ),
            139 => 
            array (
                'id' => 153,
                'card_id' => 6,
                'image' => 'upload/card/b/j/hard-suede-business-cards-4.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            140 => 
            array (
                'id' => 154,
                'card_id' => 6,
                'image' => 'upload/card/r/c/hard-suede-business-cards-3.jpg',
                'label' => '',
                'sort' => 13,
                'main' => 0,
                'exclude' => 0,
            ),
            141 => 
            array (
                'id' => 155,
                'card_id' => 6,
                'image' => 'upload/card/z/f/hard-suede-business-cards-2.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            142 => 
            array (
                'id' => 169,
                'card_id' => 3,
                'image' => 'upload/card/c/z/triplex-business-cards-6.jpg',
                'label' => 'Triplex Business Cards with gold foil stamping - photo 5',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            143 => 
            array (
                'id' => 170,
                'card_id' => 3,
                'image' => 'upload/card/j/y/triplex-business-cards-5.jpg',
                'label' => 'Triplex Business Cards with gold foil stamping - photo 4',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            144 => 
            array (
                'id' => 171,
                'card_id' => 3,
                'image' => 'upload/card/r/v/triplex-business-cards-4.jpg',
                'label' => 'Triplex Business Cards with gold foil stamping - photo 3',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            145 => 
            array (
                'id' => 173,
                'card_id' => 3,
                'image' => 'upload/card/j/1/triplex-business-cards-2.jpg',
                'label' => 'Triplex Business Cards with gold foil stamping - photo 2',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            146 => 
            array (
                'id' => 175,
                'card_id' => 3,
                'image' => 'upload/card/3/d/triplex-business-cards-10.jpg',
                'label' => 'Triplex Business Cards with gold foil stamping - photo 1',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            147 => 
            array (
                'id' => 178,
                'card_id' => 6,
                'image' => 'upload/card/a/n/hard-suede-business-cards-19.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            148 => 
            array (
                'id' => 179,
                'card_id' => 6,
                'image' => 'upload/card/g/m/hard-suede-business-cards-20.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            149 => 
            array (
                'id' => 180,
                'card_id' => 5,
                'image' => 'upload/card/s/u/premium-business-cards-uncoated-5.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            150 => 
            array (
                'id' => 181,
                'card_id' => 5,
                'image' => 'upload/card/i/r/premium-business-cards-uncoated-4.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            151 => 
            array (
                'id' => 182,
                'card_id' => 5,
                'image' => 'upload/card/5/h/premium-business-cards-uncoated-3.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            152 => 
            array (
                'id' => 183,
                'card_id' => 5,
                'image' => 'upload/card/l/r/premium-business-cards-uncoated-2.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            153 => 
            array (
                'id' => 184,
                'card_id' => 5,
                'image' => 'upload/card/t/1/premium-business-cards-uncoated-1.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            154 => 
            array (
                'id' => 185,
                'card_id' => 4,
                'image' => 'upload/card/r/8/smooth-uncoated-business-cards-9.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            155 => 
            array (
                'id' => 186,
                'card_id' => 4,
                'image' => 'upload/card/l/o/smooth-uncoated-business-cards-8.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            156 => 
            array (
                'id' => 187,
                'card_id' => 4,
                'image' => 'upload/card/u/c/smooth-uncoated-business-cards-7.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            157 => 
            array (
                'id' => 188,
                'card_id' => 4,
                'image' => 'upload/card/y/w/smooth-uncoated-business-cards-6.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            158 => 
            array (
                'id' => 189,
                'card_id' => 4,
                'image' => 'upload/card/z/9/smooth-uncoated-business-cards-5.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            159 => 
            array (
                'id' => 190,
                'card_id' => 4,
                'image' => 'upload/card/y/s/smooth-uncoated-business-cards-4.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            160 => 
            array (
                'id' => 191,
                'card_id' => 4,
                'image' => 'upload/card/t/8/smooth-uncoated-business-cards-3.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            161 => 
            array (
                'id' => 192,
                'card_id' => 4,
                'image' => 'upload/card/f/s/smooth-uncoated-business-cards-2.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            162 => 
            array (
                'id' => 193,
                'card_id' => 4,
                'image' => 'upload/card/b/j/smooth-uncoated-business-cards-1.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            163 => 
            array (
                'id' => 194,
                'card_id' => 2,
                'image' => 'upload/card/e/2/duplex-business-cards-8.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            164 => 
            array (
                'id' => 195,
                'card_id' => 2,
                'image' => 'upload/card/m/j/duplex-business-cards-7.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            165 => 
            array (
                'id' => 196,
                'card_id' => 2,
                'image' => 'upload/card/t/u/duplex-business-cards-6.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            166 => 
            array (
                'id' => 197,
                'card_id' => 2,
                'image' => 'upload/card/p/s/duplex-business-cards-5.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            167 => 
            array (
                'id' => 198,
                'card_id' => 2,
                'image' => 'upload/card/r/n/duplex-business-cards-4.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            168 => 
            array (
                'id' => 199,
                'card_id' => 2,
                'image' => 'upload/card/j/p/duplex-business-cards-3.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            169 => 
            array (
                'id' => 200,
                'card_id' => 2,
                'image' => 'upload/card/x/o/duplex-business-cards-1.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            170 => 
            array (
                'id' => 201,
                'card_id' => 2,
                'image' => 'upload/card/y/b/duplex-business-cards-2.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            171 => 
            array (
                'id' => 202,
                'card_id' => 2,
                'image' => 'upload/card/1/5/duplex-business-cards-9.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            172 => 
            array (
                'id' => 203,
                'card_id' => 1,
                'image' => 'upload/card/t/u/black-business-cards-6.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            173 => 
            array (
                'id' => 204,
                'card_id' => 1,
                'image' => 'upload/card/f/0/black-business-cards-5.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            174 => 
            array (
                'id' => 205,
                'card_id' => 1,
                'image' => 'upload/card/2/6/black-business-cards-4.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            175 => 
            array (
                'id' => 207,
                'card_id' => 1,
                'image' => 'upload/card/a/k/black-business-cards-2.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            176 => 
            array (
                'id' => 208,
                'card_id' => 1,
                'image' => 'upload/card/h/2/black-business-cards-1.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            177 => 
            array (
                'id' => 210,
                'card_id' => 1,
                'image' => 'upload/card/b/l/black-business-cards-8.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            178 => 
            array (
                'id' => 211,
                'card_id' => 23,
                'image' => 'upload/card/z/c/luxury-black-metal-visiting-cards5.jpg',
                'label' => '',
                'sort' => 3,
                'main' => 0,
                'exclude' => 0,
            ),
            179 => 
            array (
                'id' => 212,
                'card_id' => 23,
                'image' => 'upload/card/f/m/luxury-black-metal-visiting-cards4.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            180 => 
            array (
                'id' => 213,
                'card_id' => 23,
                'image' => 'upload/card/w/m/luxury-black-metal-visiting-cards3.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            181 => 
            array (
                'id' => 214,
                'card_id' => 23,
                'image' => 'upload/card/d/o/luxury-black-metal-visiting-cards2.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            182 => 
            array (
                'id' => 215,
                'card_id' => 23,
                'image' => 'upload/card/l/u/luxury-black-metal-visiting-cards1.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            183 => 
            array (
                'id' => 219,
                'card_id' => 25,
                'image' => 'upload/card/k/z/acrylic-business-card4.jpg',
                'label' => 'Clear Acrylic Business Card4',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            184 => 
            array (
                'id' => 221,
                'card_id' => 25,
                'image' => 'upload/card/j/9/acrylic-business-card6.jpg',
                'label' => 'Black Acrylic Business Card1',
                'sort' => 6,
                'main' => 1,
                'exclude' => 0,
            ),
            185 => 
            array (
                'id' => 222,
                'card_id' => 25,
                'image' => 'upload/card/n/p/acrylic-business-card7.jpg',
                'label' => 'Blue Acrylic Business Card1',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            186 => 
            array (
                'id' => 223,
                'card_id' => 25,
                'image' => 'upload/card/b/q/acrylic-business-card8.jpg',
                'label' => 'Yellow Acrylic Business Card1',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            187 => 
            array (
                'id' => 224,
                'card_id' => 25,
                'image' => 'upload/card/9/c/acrylic-business-card9.jpg',
                'label' => 'Orange Acrylic Business Card1',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            188 => 
            array (
                'id' => 225,
                'card_id' => 25,
                'image' => 'upload/card/m/o/acrylic-business-card10.jpg',
                'label' => 'Orange Acrylic Business Card2',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            189 => 
            array (
                'id' => 226,
                'card_id' => 25,
                'image' => 'upload/card/h/u/acrylic-business-card11.jpg',
                'label' => 'Orange Acrylic Business Card3',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            190 => 
            array (
                'id' => 227,
                'card_id' => 25,
                'image' => 'upload/card/i/9/acrylic-business-card3.jpg',
                'label' => 'Clear Acrylic Business Card1',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            191 => 
            array (
                'id' => 228,
                'card_id' => 14,
                'image' => 'upload/card/v/g/matte-gold-metal-business-card1.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
            192 => 
            array (
                'id' => 229,
                'card_id' => 14,
                'image' => 'upload/card/y/k/matte-gold-metal-business-card2.jpg',
                'label' => '',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            193 => 
            array (
                'id' => 230,
                'card_id' => 14,
                'image' => 'upload/card/b/8/matte-gold-metal-business-card3.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 0,
                'exclude' => 0,
            ),
            194 => 
            array (
                'id' => 231,
                'card_id' => 14,
                'image' => 'upload/card/n/h/matte-gold-metal-business-card4.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            195 => 
            array (
                'id' => 237,
                'card_id' => 30,
                'image' => 'upload/card/p/a/rose-gold-metal-business-card-01-01-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 1',
                'sort' => 6,
                'main' => 0,
                'exclude' => 0,
            ),
            196 => 
            array (
                'id' => 238,
                'card_id' => 30,
                'image' => 'upload/card/a/w/rose-gold-metal-business-card-01-02-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 2',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            197 => 
            array (
                'id' => 239,
                'card_id' => 30,
                'image' => 'upload/card/t/2/rose-gold-metal-business-card-01-04-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 3',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            198 => 
            array (
                'id' => 240,
                'card_id' => 30,
                'image' => 'upload/card/w/u/rose-gold-metal-business-card-01-05-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 4',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            199 => 
            array (
                'id' => 241,
                'card_id' => 30,
                'image' => 'upload/card/x/9/rose-gold-metal-business-card-01-06-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 5',
                'sort' => 11,
                'main' => 0,
                'exclude' => 0,
            ),
            200 => 
            array (
                'id' => 242,
                'card_id' => 30,
                'image' => 'upload/card/4/z/rose-gold-metal-business-card-01-07-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 6',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            201 => 
            array (
                'id' => 243,
                'card_id' => 30,
                'image' => 'upload/card/5/r/rose-gold-metal-business-card-01-08-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 7',
                'sort' => 13,
                'main' => 0,
                'exclude' => 0,
            ),
            202 => 
            array (
                'id' => 244,
                'card_id' => 30,
                'image' => 'upload/card/g/y/rose-gold-metal-business-card-01-09-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 8',
                'sort' => 14,
                'main' => 0,
                'exclude' => 0,
            ),
            203 => 
            array (
                'id' => 245,
                'card_id' => 30,
                'image' => 'upload/card/v/e/rose-gold-metal-business-card-01-10.jpg',
                'label' => 'Rose Gold Metal Name Cards 9',
                'sort' => 16,
                'main' => 1,
                'exclude' => 0,
            ),
            204 => 
            array (
                'id' => 246,
                'card_id' => 30,
                'image' => 'upload/card/4/d/rose-gold-metal-business-card-01-11-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 10',
                'sort' => 17,
                'main' => 0,
                'exclude' => 0,
            ),
            205 => 
            array (
                'id' => 247,
                'card_id' => 30,
                'image' => 'upload/card/p/c/rose-gold-metal-business-card-01-12-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 11',
                'sort' => 18,
                'main' => 0,
                'exclude' => 0,
            ),
            206 => 
            array (
                'id' => 248,
                'card_id' => 30,
                'image' => 'upload/card/i/h/rose-gold-metal-business-card-01-13-info.jpg',
                'label' => 'Rose Gold Metal Name Cards 12',
                'sort' => 19,
                'main' => 0,
                'exclude' => 0,
            ),
            207 => 
            array (
                'id' => 249,
                'card_id' => 14,
                'image' => 'upload/card/5/9/gold-metal-business-card-010-info.jpg',
                'label' => '',
                'sort' => 9,
                'main' => 0,
                'exclude' => 0,
            ),
            208 => 
            array (
                'id' => 250,
                'card_id' => 14,
                'image' => 'upload/card/y/a/gold-metal-business-card-011-info.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            209 => 
            array (
                'id' => 251,
                'card_id' => 14,
                'image' => 'upload/card/q/g/gold-metal-business-card-012-info.jpg',
                'label' => '',
                'sort' => 11,
                'main' => 1,
                'exclude' => 0,
            ),
            210 => 
            array (
                'id' => 252,
                'card_id' => 14,
                'image' => 'upload/card/6/g/gold-metal-business-card-013-info.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            211 => 
            array (
                'id' => 253,
                'card_id' => 13,
                'image' => 'upload/card/6/g/stainless-steel-metal-card-photo2.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            212 => 
            array (
                'id' => 254,
                'card_id' => 13,
                'image' => 'upload/card/f/m/stainless-steel-metal-card-photo1.jpg',
                'label' => '',
                'sort' => 13,
                'main' => 0,
                'exclude' => 0,
            ),
        ));
        
        
    }
}

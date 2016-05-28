<?php

use Illuminate\Database\Seeder;

class CardOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_options')->delete();
        
        \DB::table('card_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 1,
                'feature_id' => 1,
                'name' => '28PT',
                'price' => 0,
                'sort' => 0,
            ),
            1 => 
            array (
                'id' => 4,
                'card_id' => 1,
                'feature_id' => 2,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'card_id' => 1,
                'feature_id' => 2,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 2,
            ),
            3 => 
            array (
                'id' => 6,
                'card_id' => 1,
                'feature_id' => 3,
                'name' => 'Duplex Black Uncoated',
                'price' => 0,
                'sort' => 1,
            ),
            4 => 
            array (
                'id' => 9,
                'card_id' => 1,
                'feature_id' => 2,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 3,
            ),
            5 => 
            array (
                'id' => 10,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            6 => 
            array (
                'id' => 11,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            7 => 
            array (
                'id' => 12,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            8 => 
            array (
                'id' => 13,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            9 => 
            array (
                'id' => 14,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            10 => 
            array (
                'id' => 15,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            11 => 
            array (
                'id' => 16,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            12 => 
            array (
                'id' => 17,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            13 => 
            array (
                'id' => 18,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            14 => 
            array (
                'id' => 19,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            15 => 
            array (
                'id' => 20,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            16 => 
            array (
                'id' => 21,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            17 => 
            array (
                'id' => 22,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            18 => 
            array (
                'id' => 23,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            19 => 
            array (
                'id' => 24,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            20 => 
            array (
                'id' => 25,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            21 => 
            array (
                'id' => 26,
                'card_id' => 1,
                'feature_id' => 4,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            22 => 
            array (
                'id' => 27,
                'card_id' => 1,
                'feature_id' => 5,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            23 => 
            array (
                'id' => 29,
                'card_id' => 1,
                'feature_id' => 7,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            24 => 
            array (
                'id' => 30,
                'card_id' => 1,
                'feature_id' => 7,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            25 => 
            array (
                'id' => 31,
                'card_id' => 1,
                'feature_id' => 7,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            26 => 
            array (
                'id' => 32,
                'card_id' => 1,
                'feature_id' => 8,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            27 => 
            array (
                'id' => 33,
                'card_id' => 1,
                'feature_id' => 8,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            28 => 
            array (
                'id' => 34,
                'card_id' => 1,
                'feature_id' => 8,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            29 => 
            array (
                'id' => 35,
                'card_id' => 1,
                'feature_id' => 9,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            30 => 
            array (
                'id' => 36,
                'card_id' => 1,
                'feature_id' => 9,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            31 => 
            array (
                'id' => 40,
                'card_id' => 1,
                'feature_id' => 5,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            32 => 
            array (
                'id' => 41,
                'card_id' => 2,
                'feature_id' => 11,
                'name' => '26PT',
                'price' => 0,
                'sort' => 0,
            ),
            33 => 
            array (
                'id' => 42,
                'card_id' => 2,
                'feature_id' => 12,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            34 => 
            array (
                'id' => 43,
                'card_id' => 2,
                'feature_id' => 12,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            35 => 
            array (
                'id' => 44,
                'card_id' => 2,
                'feature_id' => 12,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            36 => 
            array (
                'id' => 45,
                'card_id' => 2,
                'feature_id' => 13,
                'name' => 'Duplex Black/White',
                'price' => 0,
                'sort' => 0,
            ),
            37 => 
            array (
                'id' => 46,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            38 => 
            array (
                'id' => 47,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            39 => 
            array (
                'id' => 48,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            40 => 
            array (
                'id' => 49,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            41 => 
            array (
                'id' => 50,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            42 => 
            array (
                'id' => 51,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            43 => 
            array (
                'id' => 52,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            44 => 
            array (
                'id' => 53,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            45 => 
            array (
                'id' => 54,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            46 => 
            array (
                'id' => 55,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            47 => 
            array (
                'id' => 56,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            48 => 
            array (
                'id' => 57,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            49 => 
            array (
                'id' => 58,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            50 => 
            array (
                'id' => 59,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            51 => 
            array (
                'id' => 60,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            52 => 
            array (
                'id' => 61,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            53 => 
            array (
                'id' => 62,
                'card_id' => 2,
                'feature_id' => 14,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            54 => 
            array (
                'id' => 63,
                'card_id' => 2,
                'feature_id' => 15,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            55 => 
            array (
                'id' => 64,
                'card_id' => 2,
                'feature_id' => 15,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            56 => 
            array (
                'id' => 65,
                'card_id' => 2,
                'feature_id' => 16,
                'name' => 'None',
                'price' => 0,
                'sort' => 0,
            ),
            57 => 
            array (
                'id' => 66,
                'card_id' => 2,
                'feature_id' => 16,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            58 => 
            array (
                'id' => 67,
                'card_id' => 2,
                'feature_id' => 16,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            59 => 
            array (
                'id' => 68,
                'card_id' => 2,
                'feature_id' => 17,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            60 => 
            array (
                'id' => 69,
                'card_id' => 2,
                'feature_id' => 17,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            61 => 
            array (
                'id' => 70,
                'card_id' => 2,
                'feature_id' => 17,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            62 => 
            array (
                'id' => 79,
                'card_id' => 2,
                'feature_id' => 18,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            63 => 
            array (
                'id' => 80,
                'card_id' => 2,
                'feature_id' => 18,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            64 => 
            array (
                'id' => 81,
                'card_id' => 3,
                'feature_id' => 20,
                'name' => '38PT',
                'price' => 0,
                'sort' => 0,
            ),
            65 => 
            array (
                'id' => 82,
                'card_id' => 3,
                'feature_id' => 21,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            66 => 
            array (
                'id' => 83,
                'card_id' => 3,
                'feature_id' => 21,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            67 => 
            array (
                'id' => 84,
                'card_id' => 3,
                'feature_id' => 21,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            68 => 
            array (
                'id' => 85,
                'card_id' => 3,
                'feature_id' => 22,
                'name' => 'Triplex Black/Orange/Black',
                'price' => 0,
                'sort' => 0,
            ),
            69 => 
            array (
                'id' => 86,
                'card_id' => 3,
                'feature_id' => 22,
                'name' => 'Triplex Black/Red/Black',
                'price' => 0,
                'sort' => 0,
            ),
            70 => 
            array (
                'id' => 87,
                'card_id' => 3,
                'feature_id' => 22,
                'name' => 'Triplex Black/White/Black',
                'price' => 0,
                'sort' => 0,
            ),
            71 => 
            array (
                'id' => 88,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            72 => 
            array (
                'id' => 89,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            73 => 
            array (
                'id' => 90,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            74 => 
            array (
                'id' => 91,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            75 => 
            array (
                'id' => 92,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            76 => 
            array (
                'id' => 93,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            77 => 
            array (
                'id' => 94,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            78 => 
            array (
                'id' => 95,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            79 => 
            array (
                'id' => 96,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            80 => 
            array (
                'id' => 97,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            81 => 
            array (
                'id' => 98,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            82 => 
            array (
                'id' => 99,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            83 => 
            array (
                'id' => 100,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            84 => 
            array (
                'id' => 101,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            85 => 
            array (
                'id' => 102,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            86 => 
            array (
                'id' => 103,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            87 => 
            array (
                'id' => 104,
                'card_id' => 3,
                'feature_id' => 23,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            88 => 
            array (
                'id' => 105,
                'card_id' => 3,
                'feature_id' => 24,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            89 => 
            array (
                'id' => 106,
                'card_id' => 3,
                'feature_id' => 24,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            90 => 
            array (
                'id' => 107,
                'card_id' => 3,
                'feature_id' => 25,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            91 => 
            array (
                'id' => 108,
                'card_id' => 3,
                'feature_id' => 25,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            92 => 
            array (
                'id' => 109,
                'card_id' => 3,
                'feature_id' => 25,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            93 => 
            array (
                'id' => 110,
                'card_id' => 3,
                'feature_id' => 26,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            94 => 
            array (
                'id' => 111,
                'card_id' => 3,
                'feature_id' => 26,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            95 => 
            array (
                'id' => 112,
                'card_id' => 4,
                'feature_id' => 27,
                'name' => '16PT',
                'price' => 0,
                'sort' => 0,
            ),
            96 => 
            array (
                'id' => 113,
                'card_id' => 4,
                'feature_id' => 27,
                'name' => '29.5PT',
                'price' => 0,
                'sort' => 0,
            ),
            97 => 
            array (
                'id' => 114,
                'card_id' => 4,
                'feature_id' => 28,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 1,
            ),
            98 => 
            array (
                'id' => 115,
                'card_id' => 4,
                'feature_id' => 28,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 3,
            ),
            99 => 
            array (
                'id' => 116,
                'card_id' => 4,
                'feature_id' => 28,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 2,
            ),
            100 => 
            array (
                'id' => 117,
                'card_id' => 4,
                'feature_id' => 29,
                'name' => 'Smooth White Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            101 => 
            array (
                'id' => 118,
                'card_id' => 4,
                'feature_id' => 29,
                'name' => 'Smooth Cream Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            102 => 
            array (
                'id' => 119,
                'card_id' => 4,
                'feature_id' => 30,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            103 => 
            array (
                'id' => 120,
                'card_id' => 4,
                'feature_id' => 30,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            104 => 
            array (
                'id' => 121,
                'card_id' => 4,
                'feature_id' => 30,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            105 => 
            array (
                'id' => 122,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            106 => 
            array (
                'id' => 123,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            107 => 
            array (
                'id' => 124,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            108 => 
            array (
                'id' => 125,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            109 => 
            array (
                'id' => 126,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            110 => 
            array (
                'id' => 127,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            111 => 
            array (
                'id' => 128,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            112 => 
            array (
                'id' => 129,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            113 => 
            array (
                'id' => 130,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            114 => 
            array (
                'id' => 131,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            115 => 
            array (
                'id' => 132,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            116 => 
            array (
                'id' => 133,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            117 => 
            array (
                'id' => 134,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            118 => 
            array (
                'id' => 135,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            119 => 
            array (
                'id' => 136,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            120 => 
            array (
                'id' => 137,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            121 => 
            array (
                'id' => 138,
                'card_id' => 4,
                'feature_id' => 31,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            122 => 
            array (
                'id' => 139,
                'card_id' => 4,
                'feature_id' => 32,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            123 => 
            array (
                'id' => 141,
                'card_id' => 4,
                'feature_id' => 32,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            124 => 
            array (
                'id' => 142,
                'card_id' => 4,
                'feature_id' => 33,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            125 => 
            array (
                'id' => 143,
                'card_id' => 4,
                'feature_id' => 33,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            126 => 
            array (
                'id' => 144,
                'card_id' => 4,
                'feature_id' => 33,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            127 => 
            array (
                'id' => 151,
                'card_id' => 4,
                'feature_id' => 36,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            128 => 
            array (
                'id' => 152,
                'card_id' => 4,
                'feature_id' => 36,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            129 => 
            array (
                'id' => 153,
                'card_id' => 5,
                'feature_id' => 37,
                'name' => '17.4PT',
                'price' => 0,
                'sort' => 0,
            ),
            130 => 
            array (
                'id' => 154,
                'card_id' => 5,
                'feature_id' => 38,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            131 => 
            array (
                'id' => 155,
                'card_id' => 5,
                'feature_id' => 38,
                'name' => '3.5" x 1.75',
                'price' => 0,
                'sort' => 0,
            ),
            132 => 
            array (
                'id' => 156,
                'card_id' => 5,
                'feature_id' => 38,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            133 => 
            array (
                'id' => 157,
                'card_id' => 5,
                'feature_id' => 39,
                'name' => 'Premium White Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            134 => 
            array (
                'id' => 158,
                'card_id' => 5,
                'feature_id' => 39,
                'name' => 'Premium Cream Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            135 => 
            array (
                'id' => 159,
                'card_id' => 5,
                'feature_id' => 40,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            136 => 
            array (
                'id' => 160,
                'card_id' => 5,
                'feature_id' => 40,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            137 => 
            array (
                'id' => 161,
                'card_id' => 5,
                'feature_id' => 40,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            138 => 
            array (
                'id' => 162,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            139 => 
            array (
                'id' => 163,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            140 => 
            array (
                'id' => 164,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            141 => 
            array (
                'id' => 165,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            142 => 
            array (
                'id' => 166,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            143 => 
            array (
                'id' => 167,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            144 => 
            array (
                'id' => 168,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            145 => 
            array (
                'id' => 169,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            146 => 
            array (
                'id' => 170,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            147 => 
            array (
                'id' => 171,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            148 => 
            array (
                'id' => 172,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            149 => 
            array (
                'id' => 173,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            150 => 
            array (
                'id' => 174,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            151 => 
            array (
                'id' => 175,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            152 => 
            array (
                'id' => 176,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            153 => 
            array (
                'id' => 177,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            154 => 
            array (
                'id' => 178,
                'card_id' => 5,
                'feature_id' => 41,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            155 => 
            array (
                'id' => 179,
                'card_id' => 5,
                'feature_id' => 42,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            156 => 
            array (
                'id' => 183,
                'card_id' => 5,
                'feature_id' => 44,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            157 => 
            array (
                'id' => 184,
                'card_id' => 5,
                'feature_id' => 44,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            158 => 
            array (
                'id' => 185,
                'card_id' => 5,
                'feature_id' => 44,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            159 => 
            array (
                'id' => 186,
                'card_id' => 5,
                'feature_id' => 45,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            160 => 
            array (
                'id' => 187,
                'card_id' => 5,
                'feature_id' => 45,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            161 => 
            array (
                'id' => 188,
                'card_id' => 5,
                'feature_id' => 45,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            162 => 
            array (
                'id' => 189,
                'card_id' => 5,
                'feature_id' => 46,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            163 => 
            array (
                'id' => 190,
                'card_id' => 5,
                'feature_id' => 46,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            164 => 
            array (
                'id' => 194,
                'card_id' => 6,
                'feature_id' => 48,
                'name' => '30PT',
                'price' => 0,
                'sort' => 0,
            ),
            165 => 
            array (
                'id' => 195,
                'card_id' => 6,
                'feature_id' => 49,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            166 => 
            array (
                'id' => 196,
                'card_id' => 6,
                'feature_id' => 49,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            167 => 
            array (
                'id' => 197,
                'card_id' => 6,
                'feature_id' => 49,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            168 => 
            array (
                'id' => 198,
                'card_id' => 6,
                'feature_id' => 50,
                'name' => 'Black Hard Suede Stock',
                'price' => 0,
                'sort' => 0,
            ),
            169 => 
            array (
                'id' => 199,
                'card_id' => 6,
                'feature_id' => 50,
                'name' => 'White Hard Suede Stock',
                'price' => 0,
                'sort' => 0,
            ),
            170 => 
            array (
                'id' => 200,
                'card_id' => 6,
                'feature_id' => 50,
                'name' => 'Duplex Black/White Hard Suede Stock',
                'price' => 0,
                'sort' => 0,
            ),
            171 => 
            array (
                'id' => 201,
                'card_id' => 6,
                'feature_id' => 51,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            172 => 
            array (
                'id' => 202,
                'card_id' => 6,
                'feature_id' => 51,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            173 => 
            array (
                'id' => 203,
                'card_id' => 6,
                'feature_id' => 51,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            174 => 
            array (
                'id' => 204,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            175 => 
            array (
                'id' => 205,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            176 => 
            array (
                'id' => 206,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            177 => 
            array (
                'id' => 207,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            178 => 
            array (
                'id' => 208,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            179 => 
            array (
                'id' => 209,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            180 => 
            array (
                'id' => 210,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            181 => 
            array (
                'id' => 211,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            182 => 
            array (
                'id' => 212,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            183 => 
            array (
                'id' => 213,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            184 => 
            array (
                'id' => 214,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            185 => 
            array (
                'id' => 215,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            186 => 
            array (
                'id' => 216,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            187 => 
            array (
                'id' => 217,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            188 => 
            array (
                'id' => 218,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            189 => 
            array (
                'id' => 219,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            190 => 
            array (
                'id' => 220,
                'card_id' => 6,
                'feature_id' => 52,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            191 => 
            array (
                'id' => 221,
                'card_id' => 6,
                'feature_id' => 53,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            192 => 
            array (
                'id' => 222,
                'card_id' => 6,
                'feature_id' => 53,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            193 => 
            array (
                'id' => 223,
                'card_id' => 6,
                'feature_id' => 54,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            194 => 
            array (
                'id' => 224,
                'card_id' => 6,
                'feature_id' => 54,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            195 => 
            array (
                'id' => 225,
                'card_id' => 6,
                'feature_id' => 54,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            196 => 
            array (
                'id' => 226,
                'card_id' => 6,
                'feature_id' => 55,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            197 => 
            array (
                'id' => 227,
                'card_id' => 6,
                'feature_id' => 55,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            198 => 
            array (
                'id' => 228,
                'card_id' => 6,
                'feature_id' => 55,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            199 => 
            array (
                'id' => 229,
                'card_id' => 6,
                'feature_id' => 56,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            200 => 
            array (
                'id' => 230,
                'card_id' => 6,
                'feature_id' => 56,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            201 => 
            array (
                'id' => 234,
                'card_id' => 7,
                'feature_id' => 58,
                'name' => '25PT',
                'price' => 0,
                'sort' => 0,
            ),
            202 => 
            array (
                'id' => 235,
                'card_id' => 7,
                'feature_id' => 59,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            203 => 
            array (
                'id' => 236,
                'card_id' => 7,
                'feature_id' => 59,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            204 => 
            array (
                'id' => 237,
                'card_id' => 7,
                'feature_id' => 59,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            205 => 
            array (
                'id' => 238,
                'card_id' => 7,
                'feature_id' => 60,
                'name' => 'Black Soft Suede',
                'price' => 0,
                'sort' => 0,
            ),
            206 => 
            array (
                'id' => 239,
                'card_id' => 7,
                'feature_id' => 60,
                'name' => 'Cream Soft Suede',
                'price' => 0,
                'sort' => 0,
            ),
            207 => 
            array (
                'id' => 240,
                'card_id' => 7,
                'feature_id' => 61,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            208 => 
            array (
                'id' => 241,
                'card_id' => 7,
                'feature_id' => 61,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            209 => 
            array (
                'id' => 242,
                'card_id' => 7,
                'feature_id' => 61,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            210 => 
            array (
                'id' => 243,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            211 => 
            array (
                'id' => 244,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            212 => 
            array (
                'id' => 245,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            213 => 
            array (
                'id' => 246,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            214 => 
            array (
                'id' => 247,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            215 => 
            array (
                'id' => 248,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            216 => 
            array (
                'id' => 249,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            217 => 
            array (
                'id' => 250,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            218 => 
            array (
                'id' => 251,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            219 => 
            array (
                'id' => 252,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            220 => 
            array (
                'id' => 253,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            221 => 
            array (
                'id' => 254,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            222 => 
            array (
                'id' => 255,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            223 => 
            array (
                'id' => 256,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            224 => 
            array (
                'id' => 257,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            225 => 
            array (
                'id' => 258,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            226 => 
            array (
                'id' => 259,
                'card_id' => 7,
                'feature_id' => 62,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            227 => 
            array (
                'id' => 260,
                'card_id' => 7,
                'feature_id' => 63,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            228 => 
            array (
                'id' => 262,
                'card_id' => 7,
                'feature_id' => 64,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            229 => 
            array (
                'id' => 263,
                'card_id' => 7,
                'feature_id' => 64,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            230 => 
            array (
                'id' => 264,
                'card_id' => 7,
                'feature_id' => 64,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            231 => 
            array (
                'id' => 265,
                'card_id' => 7,
                'feature_id' => 65,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            232 => 
            array (
                'id' => 266,
                'card_id' => 7,
                'feature_id' => 65,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            233 => 
            array (
                'id' => 267,
                'card_id' => 7,
                'feature_id' => 65,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            234 => 
            array (
                'id' => 268,
                'card_id' => 7,
                'feature_id' => 66,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            235 => 
            array (
                'id' => 269,
                'card_id' => 7,
                'feature_id' => 66,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            236 => 
            array (
                'id' => 273,
                'card_id' => 8,
                'feature_id' => 68,
                'name' => '30PT',
                'price' => 0,
                'sort' => 0,
            ),
            237 => 
            array (
                'id' => 274,
                'card_id' => 8,
                'feature_id' => 69,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            238 => 
            array (
                'id' => 275,
                'card_id' => 8,
                'feature_id' => 69,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            239 => 
            array (
                'id' => 276,
                'card_id' => 8,
                'feature_id' => 69,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            240 => 
            array (
                'id' => 277,
                'card_id' => 8,
                'feature_id' => 70,
                'name' => 'Classic White Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            241 => 
            array (
                'id' => 278,
                'card_id' => 8,
                'feature_id' => 70,
                'name' => 'Classic Cream Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            242 => 
            array (
                'id' => 279,
                'card_id' => 8,
                'feature_id' => 71,
                'name' => '1 Color',
                'price' => 0,
                'sort' => 0,
            ),
            243 => 
            array (
                'id' => 280,
                'card_id' => 8,
                'feature_id' => 71,
                'name' => '2 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            244 => 
            array (
                'id' => 281,
                'card_id' => 8,
                'feature_id' => 71,
                'name' => '3 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            245 => 
            array (
                'id' => 282,
                'card_id' => 8,
                'feature_id' => 72,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            246 => 
            array (
                'id' => 283,
                'card_id' => 8,
                'feature_id' => 72,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            247 => 
            array (
                'id' => 284,
                'card_id' => 8,
                'feature_id' => 72,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            248 => 
            array (
                'id' => 285,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            249 => 
            array (
                'id' => 286,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            250 => 
            array (
                'id' => 287,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            251 => 
            array (
                'id' => 288,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Matte Silver ',
                'price' => 0,
                'sort' => 4,
            ),
            252 => 
            array (
                'id' => 289,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            253 => 
            array (
                'id' => 290,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            254 => 
            array (
                'id' => 291,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            255 => 
            array (
                'id' => 292,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            256 => 
            array (
                'id' => 293,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            257 => 
            array (
                'id' => 294,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            258 => 
            array (
                'id' => 295,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            259 => 
            array (
                'id' => 296,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            260 => 
            array (
                'id' => 297,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            261 => 
            array (
                'id' => 298,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            262 => 
            array (
                'id' => 299,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            263 => 
            array (
                'id' => 300,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            264 => 
            array (
                'id' => 301,
                'card_id' => 8,
                'feature_id' => 73,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            265 => 
            array (
                'id' => 302,
                'card_id' => 8,
                'feature_id' => 74,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            266 => 
            array (
                'id' => 303,
                'card_id' => 8,
                'feature_id' => 74,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            267 => 
            array (
                'id' => 304,
                'card_id' => 8,
                'feature_id' => 75,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            268 => 
            array (
                'id' => 305,
                'card_id' => 8,
                'feature_id' => 75,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            269 => 
            array (
                'id' => 306,
                'card_id' => 8,
                'feature_id' => 75,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            270 => 
            array (
                'id' => 307,
                'card_id' => 8,
                'feature_id' => 76,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            271 => 
            array (
                'id' => 308,
                'card_id' => 8,
                'feature_id' => 76,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            272 => 
            array (
                'id' => 309,
                'card_id' => 8,
                'feature_id' => 76,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            273 => 
            array (
                'id' => 310,
                'card_id' => 8,
                'feature_id' => 77,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 2,
            ),
            274 => 
            array (
                'id' => 314,
                'card_id' => 4,
                'feature_id' => 79,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            275 => 
            array (
                'id' => 315,
                'card_id' => 4,
                'feature_id' => 79,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            276 => 
            array (
                'id' => 316,
                'card_id' => 4,
                'feature_id' => 79,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            277 => 
            array (
                'id' => 317,
                'card_id' => 8,
                'feature_id' => 77,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 1,
            ),
            278 => 
            array (
                'id' => 318,
                'card_id' => 9,
                'feature_id' => 80,
                'name' => '22PT',
                'price' => 0,
                'sort' => 0,
            ),
            279 => 
            array (
                'id' => 319,
                'card_id' => 9,
                'feature_id' => 80,
                'name' => '34PT',
                'price' => 0,
                'sort' => 0,
            ),
            280 => 
            array (
                'id' => 320,
                'card_id' => 9,
                'feature_id' => 81,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            281 => 
            array (
                'id' => 321,
                'card_id' => 9,
                'feature_id' => 81,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            282 => 
            array (
                'id' => 322,
                'card_id' => 9,
                'feature_id' => 81,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            283 => 
            array (
                'id' => 323,
                'card_id' => 9,
                'feature_id' => 82,
                'name' => 'Kraft Uncoated Stock',
                'price' => 0,
                'sort' => 0,
            ),
            284 => 
            array (
                'id' => 324,
                'card_id' => 9,
                'feature_id' => 83,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            285 => 
            array (
                'id' => 325,
                'card_id' => 9,
                'feature_id' => 83,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            286 => 
            array (
                'id' => 326,
                'card_id' => 9,
                'feature_id' => 83,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            287 => 
            array (
                'id' => 327,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            288 => 
            array (
                'id' => 328,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            289 => 
            array (
                'id' => 329,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            290 => 
            array (
                'id' => 330,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            291 => 
            array (
                'id' => 331,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            292 => 
            array (
                'id' => 332,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            293 => 
            array (
                'id' => 333,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            294 => 
            array (
                'id' => 334,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            295 => 
            array (
                'id' => 335,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            296 => 
            array (
                'id' => 336,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            297 => 
            array (
                'id' => 337,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            298 => 
            array (
                'id' => 338,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            299 => 
            array (
                'id' => 339,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            300 => 
            array (
                'id' => 340,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            301 => 
            array (
                'id' => 341,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            302 => 
            array (
                'id' => 342,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            303 => 
            array (
                'id' => 343,
                'card_id' => 9,
                'feature_id' => 84,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            304 => 
            array (
                'id' => 344,
                'card_id' => 9,
                'feature_id' => 85,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            305 => 
            array (
                'id' => 345,
                'card_id' => 9,
                'feature_id' => 85,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            306 => 
            array (
                'id' => 346,
                'card_id' => 9,
                'feature_id' => 86,
                'name' => 'None',
                'price' => 0,
                'sort' => 0,
            ),
            307 => 
            array (
                'id' => 347,
                'card_id' => 9,
                'feature_id' => 86,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            308 => 
            array (
                'id' => 348,
                'card_id' => 9,
                'feature_id' => 86,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            309 => 
            array (
                'id' => 349,
                'card_id' => 9,
                'feature_id' => 87,
                'name' => 'Gold ',
                'price' => 0,
                'sort' => 0,
            ),
            310 => 
            array (
                'id' => 350,
                'card_id' => 9,
                'feature_id' => 87,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            311 => 
            array (
                'id' => 351,
                'card_id' => 9,
                'feature_id' => 87,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            312 => 
            array (
                'id' => 352,
                'card_id' => 9,
                'feature_id' => 88,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            313 => 
            array (
                'id' => 353,
                'card_id' => 9,
                'feature_id' => 88,
                'name' => '1 sided thermography',
                'price' => 0,
                'sort' => 0,
            ),
            314 => 
            array (
                'id' => 357,
                'card_id' => 10,
                'feature_id' => 90,
                'name' => '32PT',
                'price' => 0,
                'sort' => 0,
            ),
            315 => 
            array (
                'id' => 358,
                'card_id' => 10,
                'feature_id' => 91,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            316 => 
            array (
                'id' => 359,
                'card_id' => 10,
                'feature_id' => 91,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            317 => 
            array (
                'id' => 360,
                'card_id' => 10,
                'feature_id' => 91,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            318 => 
            array (
                'id' => 361,
                'card_id' => 10,
                'feature_id' => 92,
                'name' => 'Ultra Thick Silk Laminated Stock',
                'price' => 0,
                'sort' => 0,
            ),
            319 => 
            array (
                'id' => 362,
                'card_id' => 10,
                'feature_id' => 93,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            320 => 
            array (
                'id' => 363,
                'card_id' => 10,
                'feature_id' => 93,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            321 => 
            array (
                'id' => 364,
                'card_id' => 10,
                'feature_id' => 93,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            322 => 
            array (
                'id' => 365,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            323 => 
            array (
                'id' => 366,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            324 => 
            array (
                'id' => 367,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Silver ',
                'price' => 0,
                'sort' => 3,
            ),
            325 => 
            array (
                'id' => 368,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            326 => 
            array (
                'id' => 369,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            327 => 
            array (
                'id' => 370,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            328 => 
            array (
                'id' => 371,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            329 => 
            array (
                'id' => 372,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            330 => 
            array (
                'id' => 373,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            331 => 
            array (
                'id' => 374,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            332 => 
            array (
                'id' => 375,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            333 => 
            array (
                'id' => 376,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            334 => 
            array (
                'id' => 377,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            335 => 
            array (
                'id' => 378,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            336 => 
            array (
                'id' => 379,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            337 => 
            array (
                'id' => 380,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            338 => 
            array (
                'id' => 381,
                'card_id' => 10,
                'feature_id' => 94,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            339 => 
            array (
                'id' => 382,
                'card_id' => 10,
                'feature_id' => 95,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            340 => 
            array (
                'id' => 383,
                'card_id' => 10,
                'feature_id' => 95,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            341 => 
            array (
                'id' => 384,
                'card_id' => 10,
                'feature_id' => 95,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            342 => 
            array (
                'id' => 385,
                'card_id' => 10,
                'feature_id' => 96,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            343 => 
            array (
                'id' => 386,
                'card_id' => 10,
                'feature_id' => 96,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            344 => 
            array (
                'id' => 387,
                'card_id' => 10,
                'feature_id' => 96,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            345 => 
            array (
                'id' => 391,
                'card_id' => 10,
                'feature_id' => 98,
                'name' => 'Spot UV',
                'price' => 0,
                'sort' => 0,
            ),
            346 => 
            array (
                'id' => 392,
                'card_id' => 11,
                'feature_id' => 99,
                'name' => '26PT',
                'price' => 0,
                'sort' => 0,
            ),
            347 => 
            array (
                'id' => 393,
                'card_id' => 11,
                'feature_id' => 100,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            348 => 
            array (
                'id' => 394,
                'card_id' => 11,
                'feature_id' => 100,
                'name' => '3.5" x 1.75"',
                'price' => 0,
                'sort' => 0,
            ),
            349 => 
            array (
                'id' => 395,
                'card_id' => 11,
                'feature_id' => 100,
                'name' => '2" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            350 => 
            array (
                'id' => 396,
                'card_id' => 11,
                'feature_id' => 101,
                'name' => 'Light Gray Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            351 => 
            array (
                'id' => 397,
                'card_id' => 11,
                'feature_id' => 101,
                'name' => 'Dark Gray Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            352 => 
            array (
                'id' => 398,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            353 => 
            array (
                'id' => 399,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            354 => 
            array (
                'id' => 400,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            355 => 
            array (
                'id' => 401,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            356 => 
            array (
                'id' => 402,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Black',
                'price' => 0,
                'sort' => 5,
            ),
            357 => 
            array (
                'id' => 403,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'White',
                'price' => 0,
                'sort' => 6,
            ),
            358 => 
            array (
                'id' => 404,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Pearl White',
                'price' => 0,
                'sort' => 7,
            ),
            359 => 
            array (
                'id' => 405,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Clear',
                'price' => 0,
                'sort' => 8,
            ),
            360 => 
            array (
                'id' => 406,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Red',
                'price' => 0,
                'sort' => 9,
            ),
            361 => 
            array (
                'id' => 407,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 10,
            ),
            362 => 
            array (
                'id' => 408,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 11,
            ),
            363 => 
            array (
                'id' => 409,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 12,
            ),
            364 => 
            array (
                'id' => 410,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 13,
            ),
            365 => 
            array (
                'id' => 411,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Green',
                'price' => 0,
                'sort' => 14,
            ),
            366 => 
            array (
                'id' => 412,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Non Metallic Green',
                'price' => 0,
                'sort' => 15,
            ),
            367 => 
            array (
                'id' => 413,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 16,
            ),
            368 => 
            array (
                'id' => 414,
                'card_id' => 11,
                'feature_id' => 102,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 17,
            ),
            369 => 
            array (
                'id' => 415,
                'card_id' => 11,
                'feature_id' => 103,
                'name' => 'Emboss',
                'price' => 0,
                'sort' => 0,
            ),
            370 => 
            array (
                'id' => 416,
                'card_id' => 11,
                'feature_id' => 103,
                'name' => 'Deboss',
                'price' => 0,
                'sort' => 0,
            ),
            371 => 
            array (
                'id' => 417,
                'card_id' => 11,
                'feature_id' => 104,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            372 => 
            array (
                'id' => 418,
                'card_id' => 11,
                'feature_id' => 104,
                'name' => 'Simple Shape',
                'price' => 0,
                'sort' => 0,
            ),
            373 => 
            array (
                'id' => 419,
                'card_id' => 11,
                'feature_id' => 104,
                'name' => 'Complex Shape',
                'price' => 0,
                'sort' => 0,
            ),
            374 => 
            array (
                'id' => 420,
                'card_id' => 11,
                'feature_id' => 105,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            375 => 
            array (
                'id' => 421,
                'card_id' => 11,
                'feature_id' => 105,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            376 => 
            array (
                'id' => 422,
                'card_id' => 11,
                'feature_id' => 105,
                'name' => 'Bronze',
                'price' => 0,
                'sort' => 0,
            ),
            377 => 
            array (
                'id' => 426,
                'card_id' => 11,
                'feature_id' => 107,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            378 => 
            array (
                'id' => 427,
                'card_id' => 11,
                'feature_id' => 107,
                'name' => '1 sided Thermography',
                'price' => 0,
                'sort' => 0,
            ),
            379 => 
            array (
                'id' => 428,
                'card_id' => 12,
                'feature_id' => 108,
                'name' => '0.5mm',
                'price' => 0,
                'sort' => 0,
            ),
            380 => 
            array (
                'id' => 429,
                'card_id' => 12,
                'feature_id' => 109,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            381 => 
            array (
                'id' => 432,
                'card_id' => 12,
                'feature_id' => 110,
                'name' => 'Stainless Steel with Anodized Black',
                'price' => 0,
                'sort' => 0,
            ),
            382 => 
            array (
                'id' => 433,
                'card_id' => 12,
                'feature_id' => 111,
                'name' => 'Included',
                'price' => 0,
                'sort' => 0,
            ),
            383 => 
            array (
                'id' => 434,
                'card_id' => 12,
                'feature_id' => 112,
                'name' => 'None Bleed Etch Included',
                'price' => 0,
                'sort' => 0,
            ),
            384 => 
            array (
                'id' => 435,
                'card_id' => 12,
                'feature_id' => 112,
                'name' => 'Full Bleed Etch',
                'price' => 0,
                'sort' => 0,
            ),
            385 => 
            array (
                'id' => 436,
                'card_id' => 12,
                'feature_id' => 113,
                'name' => '1 Color',
                'price' => 0,
                'sort' => 0,
            ),
            386 => 
            array (
                'id' => 437,
                'card_id' => 12,
                'feature_id' => 113,
                'name' => '2 Color',
                'price' => 0,
                'sort' => 0,
            ),
            387 => 
            array (
                'id' => 438,
                'card_id' => 12,
                'feature_id' => 113,
                'name' => '3 Color',
                'price' => 0,
                'sort' => 0,
            ),
            388 => 
            array (
                'id' => 439,
                'card_id' => 12,
                'feature_id' => 113,
                'name' => '4 Color',
                'price' => 0,
                'sort' => 0,
            ),
            389 => 
            array (
                'id' => 440,
                'card_id' => 12,
                'feature_id' => 114,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            390 => 
            array (
                'id' => 441,
                'card_id' => 12,
                'feature_id' => 115,
                'name' => '1 Spot Color',
                'price' => 0,
                'sort' => 0,
            ),
            391 => 
            array (
                'id' => 442,
                'card_id' => 12,
                'feature_id' => 115,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            392 => 
            array (
                'id' => 443,
                'card_id' => 13,
                'feature_id' => 116,
                'name' => '0.5mm',
                'price' => 0,
                'sort' => 0,
            ),
            393 => 
            array (
                'id' => 444,
                'card_id' => 13,
                'feature_id' => 117,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            394 => 
            array (
                'id' => 445,
                'card_id' => 13,
                'feature_id' => 118,
                'name' => 'Original Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            395 => 
            array (
                'id' => 446,
                'card_id' => 13,
                'feature_id' => 118,
                'name' => 'Mirror Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            396 => 
            array (
                'id' => 447,
                'card_id' => 13,
                'feature_id' => 118,
                'name' => 'Brushed Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            397 => 
            array (
                'id' => 448,
                'card_id' => 13,
                'feature_id' => 119,
                'name' => 'Included',
                'price' => 0,
                'sort' => 0,
            ),
            398 => 
            array (
                'id' => 449,
                'card_id' => 13,
                'feature_id' => 120,
                'name' => 'None Bleed Etching Included',
                'price' => 0,
                'sort' => 0,
            ),
            399 => 
            array (
                'id' => 450,
                'card_id' => 13,
                'feature_id' => 120,
                'name' => 'Full Bleed Etching',
                'price' => 0,
                'sort' => 0,
            ),
            400 => 
            array (
                'id' => 451,
                'card_id' => 13,
                'feature_id' => 121,
                'name' => '1 Color',
                'price' => 0,
                'sort' => 0,
            ),
            401 => 
            array (
                'id' => 452,
                'card_id' => 13,
                'feature_id' => 121,
                'name' => '2 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            402 => 
            array (
                'id' => 453,
                'card_id' => 13,
                'feature_id' => 121,
                'name' => '3 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            403 => 
            array (
                'id' => 454,
                'card_id' => 13,
                'feature_id' => 121,
                'name' => '4 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            404 => 
            array (
                'id' => 455,
                'card_id' => 13,
                'feature_id' => 122,
                'name' => 'Laser Engrave ',
                'price' => 0,
                'sort' => 0,
            ),
            405 => 
            array (
                'id' => 456,
                'card_id' => 13,
                'feature_id' => 123,
                'name' => '1 Spot Color',
                'price' => 0,
                'sort' => 0,
            ),
            406 => 
            array (
                'id' => 457,
                'card_id' => 13,
                'feature_id' => 123,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            407 => 
            array (
                'id' => 458,
                'card_id' => 14,
                'feature_id' => 124,
                'name' => '0.5mm',
                'price' => 0,
                'sort' => 0,
            ),
            408 => 
            array (
                'id' => 459,
                'card_id' => 14,
                'feature_id' => 125,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            409 => 
            array (
                'id' => 461,
                'card_id' => 14,
                'feature_id' => 127,
                'name' => 'None Bleed Etch Included',
                'price' => 0,
                'sort' => 0,
            ),
            410 => 
            array (
                'id' => 462,
                'card_id' => 14,
                'feature_id' => 127,
                'name' => 'Full Bleed Etch Included',
                'price' => 0,
                'sort' => 0,
            ),
            411 => 
            array (
                'id' => 463,
                'card_id' => 14,
                'feature_id' => 128,
                'name' => '1 Color',
                'price' => 0,
                'sort' => 0,
            ),
            412 => 
            array (
                'id' => 464,
                'card_id' => 14,
                'feature_id' => 128,
                'name' => '2 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            413 => 
            array (
                'id' => 465,
                'card_id' => 14,
                'feature_id' => 128,
                'name' => '3 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            414 => 
            array (
                'id' => 466,
                'card_id' => 14,
                'feature_id' => 128,
                'name' => '4 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            415 => 
            array (
                'id' => 467,
                'card_id' => 14,
                'feature_id' => 129,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            416 => 
            array (
                'id' => 468,
                'card_id' => 14,
                'feature_id' => 130,
                'name' => '1 Spot Color',
                'price' => 0,
                'sort' => 0,
            ),
            417 => 
            array (
                'id' => 469,
                'card_id' => 14,
                'feature_id' => 130,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            418 => 
            array (
                'id' => 470,
                'card_id' => 15,
                'feature_id' => 131,
                'name' => '13PT',
                'price' => 0,
                'sort' => 0,
            ),
            419 => 
            array (
                'id' => 471,
                'card_id' => 15,
                'feature_id' => 132,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            420 => 
            array (
                'id' => 472,
                'card_id' => 15,
                'feature_id' => 133,
                'name' => 'Polyester',
                'price' => 0,
                'sort' => 0,
            ),
            421 => 
            array (
                'id' => 474,
                'card_id' => 15,
                'feature_id' => 134,
                'name' => '1 sided UV Printing',
                'price' => 0,
                'sort' => 0,
            ),
            422 => 
            array (
                'id' => 475,
                'card_id' => 16,
                'feature_id' => 135,
                'name' => '13PT',
                'price' => 0,
                'sort' => 0,
            ),
            423 => 
            array (
                'id' => 476,
                'card_id' => 16,
                'feature_id' => 136,
                'name' => 'PVC',
                'price' => 0,
                'sort' => 0,
            ),
            424 => 
            array (
                'id' => 477,
                'card_id' => 16,
                'feature_id' => 137,
                'name' => '1 sided uv printing',
                'price' => 0,
                'sort' => 0,
            ),
            425 => 
            array (
                'id' => 478,
                'card_id' => 16,
                'feature_id' => 138,
                'name' => 'None',
                'price' => 0,
                'sort' => 0,
            ),
            426 => 
            array (
                'id' => 479,
                'card_id' => 16,
                'feature_id' => 138,
                'name' => '1 sided white ink',
                'price' => 0,
                'sort' => 0,
            ),
            427 => 
            array (
                'id' => 480,
                'card_id' => 17,
                'feature_id' => 139,
                'name' => '14PT',
                'price' => 0,
                'sort' => 0,
            ),
            428 => 
            array (
                'id' => 481,
                'card_id' => 17,
                'feature_id' => 140,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            429 => 
            array (
                'id' => 482,
                'card_id' => 17,
                'feature_id' => 141,
                'name' => 'Clear Plastic',
                'price' => 0,
                'sort' => 0,
            ),
            430 => 
            array (
                'id' => 483,
                'card_id' => 17,
                'feature_id' => 142,
                'name' => '1 sided uv printing',
                'price' => 0,
                'sort' => 0,
            ),
            431 => 
            array (
                'id' => 484,
                'card_id' => 18,
                'feature_id' => 143,
                'name' => '16PT',
                'price' => 0,
                'sort' => 0,
            ),
            432 => 
            array (
                'id' => 485,
                'card_id' => 19,
                'feature_id' => 144,
                'name' => '18PT',
                'price' => 0,
                'sort' => 0,
            ),
            433 => 
            array (
                'id' => 486,
                'card_id' => 20,
                'feature_id' => 145,
                'name' => '13PT',
                'price' => 0,
                'sort' => 0,
            ),
            434 => 
            array (
                'id' => 487,
                'card_id' => 21,
                'feature_id' => 146,
                'name' => '28PT',
                'price' => 0,
                'sort' => 0,
            ),
            435 => 
            array (
                'id' => 488,
                'card_id' => 22,
                'feature_id' => 147,
                'name' => '0.5mm',
                'price' => 0,
                'sort' => 0,
            ),
            436 => 
            array (
                'id' => 489,
                'card_id' => 22,
                'feature_id' => 148,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            437 => 
            array (
                'id' => 490,
                'card_id' => 22,
                'feature_id' => 149,
                'name' => 'Stainless Steel with Anodized Black',
                'price' => 0,
                'sort' => 0,
            ),
            438 => 
            array (
                'id' => 491,
                'card_id' => 22,
                'feature_id' => 150,
                'name' => 'No. 1',
                'price' => 0,
                'sort' => 0,
            ),
            439 => 
            array (
                'id' => 492,
                'card_id' => 22,
                'feature_id' => 150,
                'name' => 'No. 2',
                'price' => 0,
                'sort' => 0,
            ),
            440 => 
            array (
                'id' => 493,
                'card_id' => 22,
                'feature_id' => 150,
                'name' => 'No. 3',
                'price' => 0,
                'sort' => 0,
            ),
            441 => 
            array (
                'id' => 494,
                'card_id' => 22,
                'feature_id' => 150,
                'name' => 'No. 4',
                'price' => 0,
                'sort' => 0,
            ),
            442 => 
            array (
                'id' => 496,
                'card_id' => 22,
                'feature_id' => 152,
                'name' => '1 sided engraving',
                'price' => 0,
                'sort' => 0,
            ),
            443 => 
            array (
                'id' => 497,
                'card_id' => 22,
                'feature_id' => 152,
                'name' => '2 sided engraving',
                'price' => 0,
                'sort' => 0,
            ),
            444 => 
            array (
                'id' => 498,
                'card_id' => 21,
                'feature_id' => 153,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            445 => 
            array (
                'id' => 499,
                'card_id' => 21,
                'feature_id' => 154,
                'name' => 'Duplex Black Uncoated',
                'price' => 0,
                'sort' => 0,
            ),
            446 => 
            array (
                'id' => 500,
                'card_id' => 21,
                'feature_id' => 155,
                'name' => '1 sided none bleed engraving',
                'price' => 0,
                'sort' => 0,
            ),
            447 => 
            array (
                'id' => 501,
                'card_id' => 21,
                'feature_id' => 155,
                'name' => '1 sided full bleed engraving',
                'price' => 0,
                'sort' => 0,
            ),
            448 => 
            array (
                'id' => 502,
                'card_id' => 21,
                'feature_id' => 156,
                'name' => 'Simple Cut Out Included',
                'price' => 0,
                'sort' => 0,
            ),
            449 => 
            array (
                'id' => 503,
                'card_id' => 20,
                'feature_id' => 157,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            450 => 
            array (
                'id' => 504,
                'card_id' => 20,
                'feature_id' => 158,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            451 => 
            array (
                'id' => 505,
                'card_id' => 20,
                'feature_id' => 159,
                'name' => '1 sided Spot UV',
                'price' => 0,
                'sort' => 0,
            ),
            452 => 
            array (
                'id' => 506,
                'card_id' => 20,
                'feature_id' => 160,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            453 => 
            array (
                'id' => 507,
                'card_id' => 20,
                'feature_id' => 160,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            454 => 
            array (
                'id' => 508,
                'card_id' => 20,
                'feature_id' => 160,
                'name' => 'Black',
                'price' => 0,
                'sort' => 0,
            ),
            455 => 
            array (
                'id' => 509,
                'card_id' => 19,
                'feature_id' => 161,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            456 => 
            array (
                'id' => 510,
                'card_id' => 19,
                'feature_id' => 162,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            457 => 
            array (
                'id' => 511,
                'card_id' => 19,
                'feature_id' => 163,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            458 => 
            array (
                'id' => 512,
                'card_id' => 19,
                'feature_id' => 163,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            459 => 
            array (
                'id' => 513,
                'card_id' => 19,
                'feature_id' => 163,
                'name' => 'Black',
                'price' => 0,
                'sort' => 0,
            ),
            460 => 
            array (
                'id' => 514,
                'card_id' => 19,
                'feature_id' => 164,
                'name' => '3mm Die Cut Corners',
                'price' => 0,
                'sort' => 2,
            ),
            461 => 
            array (
                'id' => 515,
                'card_id' => 19,
                'feature_id' => 164,
                'name' => '6mm Die Cut Corners',
                'price' => 0,
                'sort' => 3,
            ),
            462 => 
            array (
                'id' => 516,
                'card_id' => 20,
                'feature_id' => 165,
                'name' => '3mm Die Cut Corners',
                'price' => 0,
                'sort' => 2,
            ),
            463 => 
            array (
                'id' => 517,
                'card_id' => 20,
                'feature_id' => 165,
                'name' => '6mm Die Cut Corners',
                'price' => 0,
                'sort' => 3,
            ),
            464 => 
            array (
                'id' => 518,
                'card_id' => 18,
                'feature_id' => 166,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            465 => 
            array (
                'id' => 519,
                'card_id' => 18,
                'feature_id' => 167,
                'name' => '2 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            466 => 
            array (
                'id' => 520,
                'card_id' => 18,
                'feature_id' => 168,
                'name' => '2 sided spot uv with Silk Lamination',
                'price' => 0,
                'sort' => 0,
            ),
            467 => 
            array (
                'id' => 521,
                'card_id' => 18,
                'feature_id' => 169,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 0,
            ),
            468 => 
            array (
                'id' => 522,
                'card_id' => 18,
                'feature_id' => 169,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 0,
            ),
            469 => 
            array (
                'id' => 523,
                'card_id' => 18,
                'feature_id' => 169,
                'name' => 'Black',
                'price' => 0,
                'sort' => 0,
            ),
            470 => 
            array (
                'id' => 524,
                'card_id' => 18,
                'feature_id' => 170,
                'name' => '3mm Die Cut Corners',
                'price' => 0,
                'sort' => 2,
            ),
            471 => 
            array (
                'id' => 525,
                'card_id' => 18,
                'feature_id' => 170,
                'name' => '6mm Die Cut Corners',
                'price' => 0,
                'sort' => 3,
            ),
            472 => 
            array (
                'id' => 526,
                'card_id' => 17,
                'feature_id' => 171,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            473 => 
            array (
                'id' => 527,
                'card_id' => 17,
                'feature_id' => 171,
                'name' => '1 sided white ink',
                'price' => 0,
                'sort' => 0,
            ),
            474 => 
            array (
                'id' => 528,
                'card_id' => 21,
                'feature_id' => 155,
                'name' => '2 sided none bleed engraving',
                'price' => 0,
                'sort' => 0,
            ),
            475 => 
            array (
                'id' => 529,
                'card_id' => 21,
                'feature_id' => 155,
                'name' => '2 sided full bleed engraving',
                'price' => 0,
                'sort' => 0,
            ),
            476 => 
            array (
                'id' => 530,
                'card_id' => 20,
                'feature_id' => 165,
                'name' => 'None',
                'price' => 0,
                'sort' => 1,
            ),
            477 => 
            array (
                'id' => 531,
                'card_id' => 19,
                'feature_id' => 164,
                'name' => 'None',
                'price' => 0,
                'sort' => 1,
            ),
            478 => 
            array (
                'id' => 532,
                'card_id' => 18,
                'feature_id' => 170,
                'name' => 'None',
                'price' => 0,
                'sort' => 1,
            ),
            479 => 
            array (
                'id' => 540,
                'card_id' => 23,
                'feature_id' => 173,
                'name' => '0.5mm',
                'price' => 0,
                'sort' => 0,
            ),
            480 => 
            array (
                'id' => 541,
                'card_id' => 23,
                'feature_id' => 174,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            481 => 
            array (
                'id' => 542,
                'card_id' => 23,
                'feature_id' => 175,
                'name' => 'Stainless Steel with Anodized Black',
                'price' => 0,
                'sort' => 0,
            ),
            482 => 
            array (
                'id' => 543,
                'card_id' => 23,
                'feature_id' => 176,
                'name' => 'Frost Finish',
                'price' => 0,
                'sort' => 0,
            ),
            483 => 
            array (
                'id' => 544,
                'card_id' => 23,
                'feature_id' => 176,
                'name' => 'Prism Finish',
                'price' => 0,
                'sort' => 0,
            ),
            484 => 
            array (
                'id' => 545,
                'card_id' => 23,
                'feature_id' => 177,
                'name' => 'Included',
                'price' => 0,
                'sort' => 0,
            ),
            485 => 
            array (
                'id' => 546,
                'card_id' => 23,
                'feature_id' => 178,
                'name' => 'None Bleed Etch Included',
                'price' => 0,
                'sort' => 0,
            ),
            486 => 
            array (
                'id' => 547,
                'card_id' => 23,
                'feature_id' => 178,
                'name' => 'Full Bleed Etch',
                'price' => 0,
                'sort' => 0,
            ),
            487 => 
            array (
                'id' => 548,
                'card_id' => 23,
                'feature_id' => 179,
                'name' => '1 Color',
                'price' => 0,
                'sort' => 0,
            ),
            488 => 
            array (
                'id' => 549,
                'card_id' => 23,
                'feature_id' => 179,
                'name' => '2 Color',
                'price' => 0,
                'sort' => 0,
            ),
            489 => 
            array (
                'id' => 550,
                'card_id' => 23,
                'feature_id' => 179,
                'name' => '3 Color',
                'price' => 0,
                'sort' => 0,
            ),
            490 => 
            array (
                'id' => 551,
                'card_id' => 23,
                'feature_id' => 179,
                'name' => '4 Color',
                'price' => 0,
                'sort' => 0,
            ),
            491 => 
            array (
                'id' => 552,
                'card_id' => 23,
                'feature_id' => 180,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            492 => 
            array (
                'id' => 553,
                'card_id' => 23,
                'feature_id' => 181,
                'name' => '1 Spot Color',
                'price' => 0,
                'sort' => 0,
            ),
            493 => 
            array (
                'id' => 554,
                'card_id' => 23,
                'feature_id' => 181,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            494 => 
            array (
                'id' => 555,
                'card_id' => 2,
                'feature_id' => 13,
                'name' => 'Custom Duplex Colors',
                'price' => 0,
                'sort' => 0,
            ),
            495 => 
            array (
                'id' => 556,
                'card_id' => 3,
                'feature_id' => 22,
                'name' => 'Custom Triplex Colors',
                'price' => 0,
                'sort' => 0,
            ),
            496 => 
            array (
                'id' => 557,
                'card_id' => 6,
                'feature_id' => 50,
                'name' => 'Custom Duplex Colors',
                'price' => 0,
                'sort' => 0,
            ),
            497 => 
            array (
                'id' => 558,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            498 => 
            array (
                'id' => 559,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            499 => 
            array (
                'id' => 560,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
        ));
        \DB::table('card_options')->insert(array (
            0 => 
            array (
                'id' => 561,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            1 => 
            array (
                'id' => 562,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            2 => 
            array (
                'id' => 563,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            3 => 
            array (
                'id' => 564,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            4 => 
            array (
                'id' => 565,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            5 => 
            array (
                'id' => 566,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            6 => 
            array (
                'id' => 567,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            7 => 
            array (
                'id' => 568,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            8 => 
            array (
                'id' => 569,
                'card_id' => 3,
                'feature_id' => 182,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            9 => 
            array (
                'id' => 571,
                'card_id' => 3,
                'feature_id' => 183,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            10 => 
            array (
                'id' => 572,
                'card_id' => 3,
                'feature_id' => 183,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            11 => 
            array (
                'id' => 573,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            12 => 
            array (
                'id' => 574,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            13 => 
            array (
                'id' => 575,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            14 => 
            array (
                'id' => 576,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            15 => 
            array (
                'id' => 577,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            16 => 
            array (
                'id' => 578,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            17 => 
            array (
                'id' => 579,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            18 => 
            array (
                'id' => 580,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            19 => 
            array (
                'id' => 581,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            20 => 
            array (
                'id' => 582,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            21 => 
            array (
                'id' => 583,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            22 => 
            array (
                'id' => 584,
                'card_id' => 6,
                'feature_id' => 184,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            23 => 
            array (
                'id' => 585,
                'card_id' => 6,
                'feature_id' => 185,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            24 => 
            array (
                'id' => 586,
                'card_id' => 6,
                'feature_id' => 185,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            25 => 
            array (
                'id' => 587,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            26 => 
            array (
                'id' => 588,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 11,
            ),
            27 => 
            array (
                'id' => 589,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 10,
            ),
            28 => 
            array (
                'id' => 590,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 9,
            ),
            29 => 
            array (
                'id' => 591,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Red',
                'price' => 0,
                'sort' => 8,
            ),
            30 => 
            array (
                'id' => 592,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 7,
            ),
            31 => 
            array (
                'id' => 593,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 6,
            ),
            32 => 
            array (
                'id' => 594,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 5,
            ),
            33 => 
            array (
                'id' => 595,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 4,
            ),
            34 => 
            array (
                'id' => 596,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Green',
                'price' => 0,
                'sort' => 3,
            ),
            35 => 
            array (
                'id' => 597,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 2,
            ),
            36 => 
            array (
                'id' => 598,
                'card_id' => 1,
                'feature_id' => 186,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            37 => 
            array (
                'id' => 599,
                'card_id' => 1,
                'feature_id' => 187,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            38 => 
            array (
                'id' => 600,
                'card_id' => 1,
                'feature_id' => 187,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            39 => 
            array (
                'id' => 601,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            40 => 
            array (
                'id' => 602,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            41 => 
            array (
                'id' => 603,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            42 => 
            array (
                'id' => 604,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            43 => 
            array (
                'id' => 605,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            44 => 
            array (
                'id' => 606,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            45 => 
            array (
                'id' => 607,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            46 => 
            array (
                'id' => 608,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            47 => 
            array (
                'id' => 609,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            48 => 
            array (
                'id' => 610,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            49 => 
            array (
                'id' => 611,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            50 => 
            array (
                'id' => 612,
                'card_id' => 2,
                'feature_id' => 188,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            51 => 
            array (
                'id' => 613,
                'card_id' => 2,
                'feature_id' => 189,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            52 => 
            array (
                'id' => 614,
                'card_id' => 2,
                'feature_id' => 189,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            53 => 
            array (
                'id' => 615,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            54 => 
            array (
                'id' => 616,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            55 => 
            array (
                'id' => 617,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            56 => 
            array (
                'id' => 618,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            57 => 
            array (
                'id' => 619,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            58 => 
            array (
                'id' => 620,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            59 => 
            array (
                'id' => 621,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            60 => 
            array (
                'id' => 622,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            61 => 
            array (
                'id' => 623,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            62 => 
            array (
                'id' => 624,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            63 => 
            array (
                'id' => 625,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            64 => 
            array (
                'id' => 626,
                'card_id' => 4,
                'feature_id' => 190,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            65 => 
            array (
                'id' => 627,
                'card_id' => 4,
                'feature_id' => 191,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            66 => 
            array (
                'id' => 628,
                'card_id' => 4,
                'feature_id' => 191,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            67 => 
            array (
                'id' => 629,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            68 => 
            array (
                'id' => 630,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            69 => 
            array (
                'id' => 631,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            70 => 
            array (
                'id' => 632,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            71 => 
            array (
                'id' => 633,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            72 => 
            array (
                'id' => 634,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            73 => 
            array (
                'id' => 635,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            74 => 
            array (
                'id' => 636,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            75 => 
            array (
                'id' => 637,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            76 => 
            array (
                'id' => 638,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            77 => 
            array (
                'id' => 639,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            78 => 
            array (
                'id' => 640,
                'card_id' => 8,
                'feature_id' => 192,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            79 => 
            array (
                'id' => 641,
                'card_id' => 8,
                'feature_id' => 193,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            80 => 
            array (
                'id' => 642,
                'card_id' => 8,
                'feature_id' => 193,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            81 => 
            array (
                'id' => 643,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            82 => 
            array (
                'id' => 644,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            83 => 
            array (
                'id' => 645,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            84 => 
            array (
                'id' => 646,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            85 => 
            array (
                'id' => 647,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            86 => 
            array (
                'id' => 648,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            87 => 
            array (
                'id' => 649,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            88 => 
            array (
                'id' => 650,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            89 => 
            array (
                'id' => 651,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            90 => 
            array (
                'id' => 652,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            91 => 
            array (
                'id' => 653,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            92 => 
            array (
                'id' => 654,
                'card_id' => 5,
                'feature_id' => 194,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            93 => 
            array (
                'id' => 655,
                'card_id' => 5,
                'feature_id' => 195,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            94 => 
            array (
                'id' => 656,
                'card_id' => 5,
                'feature_id' => 195,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            95 => 
            array (
                'id' => 657,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            96 => 
            array (
                'id' => 658,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            97 => 
            array (
                'id' => 659,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            98 => 
            array (
                'id' => 660,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            99 => 
            array (
                'id' => 661,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            100 => 
            array (
                'id' => 662,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            101 => 
            array (
                'id' => 663,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            102 => 
            array (
                'id' => 664,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            103 => 
            array (
                'id' => 665,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            104 => 
            array (
                'id' => 666,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            105 => 
            array (
                'id' => 667,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            106 => 
            array (
                'id' => 668,
                'card_id' => 7,
                'feature_id' => 196,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            107 => 
            array (
                'id' => 669,
                'card_id' => 7,
                'feature_id' => 197,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            108 => 
            array (
                'id' => 670,
                'card_id' => 7,
                'feature_id' => 197,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            109 => 
            array (
                'id' => 671,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            110 => 
            array (
                'id' => 672,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            111 => 
            array (
                'id' => 673,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            112 => 
            array (
                'id' => 674,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            113 => 
            array (
                'id' => 675,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            114 => 
            array (
                'id' => 676,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            115 => 
            array (
                'id' => 677,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            116 => 
            array (
                'id' => 678,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            117 => 
            array (
                'id' => 679,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            118 => 
            array (
                'id' => 680,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            119 => 
            array (
                'id' => 681,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            120 => 
            array (
                'id' => 682,
                'card_id' => 11,
                'feature_id' => 198,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            121 => 
            array (
                'id' => 683,
                'card_id' => 11,
                'feature_id' => 199,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            122 => 
            array (
                'id' => 684,
                'card_id' => 11,
                'feature_id' => 199,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            123 => 
            array (
                'id' => 685,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            124 => 
            array (
                'id' => 686,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            125 => 
            array (
                'id' => 687,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            126 => 
            array (
                'id' => 688,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            127 => 
            array (
                'id' => 689,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            128 => 
            array (
                'id' => 690,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            129 => 
            array (
                'id' => 691,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            130 => 
            array (
                'id' => 692,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            131 => 
            array (
                'id' => 693,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            132 => 
            array (
                'id' => 694,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            133 => 
            array (
                'id' => 695,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            134 => 
            array (
                'id' => 696,
                'card_id' => 9,
                'feature_id' => 200,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            135 => 
            array (
                'id' => 697,
                'card_id' => 9,
                'feature_id' => 201,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            136 => 
            array (
                'id' => 698,
                'card_id' => 9,
                'feature_id' => 201,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            137 => 
            array (
                'id' => 699,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Gold',
                'price' => 0,
                'sort' => 1,
            ),
            138 => 
            array (
                'id' => 700,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Matte Gold',
                'price' => 0,
                'sort' => 2,
            ),
            139 => 
            array (
                'id' => 701,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Silver',
                'price' => 0,
                'sort' => 3,
            ),
            140 => 
            array (
                'id' => 702,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Matte Silver',
                'price' => 0,
                'sort' => 4,
            ),
            141 => 
            array (
                'id' => 703,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Red',
                'price' => 0,
                'sort' => 5,
            ),
            142 => 
            array (
                'id' => 704,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Rose Pink',
                'price' => 0,
                'sort' => 6,
            ),
            143 => 
            array (
                'id' => 705,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Hot Pink',
                'price' => 0,
                'sort' => 7,
            ),
            144 => 
            array (
                'id' => 706,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Blue',
                'price' => 0,
                'sort' => 8,
            ),
            145 => 
            array (
                'id' => 707,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Light Blue',
                'price' => 0,
                'sort' => 9,
            ),
            146 => 
            array (
                'id' => 708,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Green',
                'price' => 0,
                'sort' => 10,
            ),
            147 => 
            array (
                'id' => 709,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Rose Gold',
                'price' => 0,
                'sort' => 11,
            ),
            148 => 
            array (
                'id' => 710,
                'card_id' => 10,
                'feature_id' => 202,
                'name' => 'Copper',
                'price' => 0,
                'sort' => 12,
            ),
            149 => 
            array (
                'id' => 711,
                'card_id' => 10,
                'feature_id' => 203,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            150 => 
            array (
                'id' => 712,
                'card_id' => 10,
                'feature_id' => 203,
                'name' => 'Edge Paint',
                'price' => 0,
                'sort' => 0,
            ),
            151 => 
            array (
                'id' => 713,
                'card_id' => 2,
                'feature_id' => 204,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            152 => 
            array (
                'id' => 714,
                'card_id' => 2,
                'feature_id' => 204,
                'name' => '1 sided offset',
                'price' => 0,
                'sort' => 0,
            ),
            153 => 
            array (
                'id' => 721,
                'card_id' => 25,
                'feature_id' => 210,
                'name' => '3mm',
                'price' => 0,
                'sort' => 0,
            ),
            154 => 
            array (
                'id' => 722,
                'card_id' => 25,
                'feature_id' => 211,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            155 => 
            array (
                'id' => 723,
                'card_id' => 25,
                'feature_id' => 212,
                'name' => 'Clear Acrylic ',
                'price' => 0,
                'sort' => 0,
            ),
            156 => 
            array (
                'id' => 724,
                'card_id' => 25,
                'feature_id' => 213,
                'name' => '1 sided none bleed engraving',
                'price' => 0,
                'sort' => 0,
            ),
            157 => 
            array (
                'id' => 727,
                'card_id' => 25,
                'feature_id' => 215,
                'name' => 'No Need',
                'price' => 0,
                'sort' => 0,
            ),
            158 => 
            array (
                'id' => 728,
                'card_id' => 25,
                'feature_id' => 215,
                'name' => 'Simple Cut Out',
                'price' => 0,
                'sort' => 0,
            ),
            159 => 
            array (
                'id' => 759,
                'card_id' => 25,
                'feature_id' => 212,
                'name' => 'Black Acrylic',
                'price' => 0,
                'sort' => 0,
            ),
            160 => 
            array (
                'id' => 760,
                'card_id' => 25,
                'feature_id' => 212,
                'name' => 'Blue Acrylic',
                'price' => 0,
                'sort' => 0,
            ),
            161 => 
            array (
                'id' => 761,
                'card_id' => 25,
                'feature_id' => 212,
                'name' => 'Fluorescent Green',
                'price' => 0,
                'sort' => 0,
            ),
            162 => 
            array (
                'id' => 762,
                'card_id' => 25,
                'feature_id' => 212,
                'name' => 'Fluorescent Orange',
                'price' => 0,
                'sort' => 0,
            ),
            163 => 
            array (
                'id' => 764,
                'card_id' => 14,
                'feature_id' => 239,
                'name' => 'Matte Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            164 => 
            array (
                'id' => 765,
                'card_id' => 14,
                'feature_id' => 239,
                'name' => 'Mirror Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            165 => 
            array (
                'id' => 766,
                'card_id' => 30,
                'feature_id' => 240,
                'name' => '0.5mm',
                'price' => 0,
                'sort' => 0,
            ),
            166 => 
            array (
                'id' => 767,
                'card_id' => 30,
                'feature_id' => 241,
                'name' => '3.5" x 2"',
                'price' => 0,
                'sort' => 0,
            ),
            167 => 
            array (
                'id' => 768,
                'card_id' => 30,
                'feature_id' => 242,
                'name' => 'Matte Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            168 => 
            array (
                'id' => 769,
                'card_id' => 30,
                'feature_id' => 242,
                'name' => 'Mirror Finishing',
                'price' => 0,
                'sort' => 0,
            ),
            169 => 
            array (
                'id' => 770,
                'card_id' => 30,
                'feature_id' => 243,
                'name' => 'None Bleed Etch Included',
                'price' => 0,
                'sort' => 0,
            ),
            170 => 
            array (
                'id' => 771,
                'card_id' => 30,
                'feature_id' => 243,
                'name' => 'Full Bleed Etch Included',
                'price' => 0,
                'sort' => 0,
            ),
            171 => 
            array (
                'id' => 772,
                'card_id' => 30,
                'feature_id' => 244,
                'name' => '1 Color',
                'price' => 0,
                'sort' => 0,
            ),
            172 => 
            array (
                'id' => 773,
                'card_id' => 30,
                'feature_id' => 244,
                'name' => '2 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            173 => 
            array (
                'id' => 774,
                'card_id' => 30,
                'feature_id' => 244,
                'name' => '3 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            174 => 
            array (
                'id' => 775,
                'card_id' => 30,
                'feature_id' => 244,
                'name' => '4 Colors',
                'price' => 0,
                'sort' => 0,
            ),
            175 => 
            array (
                'id' => 776,
                'card_id' => 30,
                'feature_id' => 245,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            176 => 
            array (
                'id' => 777,
                'card_id' => 30,
                'feature_id' => 246,
                'name' => '1 Spot Color',
                'price' => 0,
                'sort' => 0,
            ),
            177 => 
            array (
                'id' => 778,
                'card_id' => 30,
                'feature_id' => 246,
                'name' => 'Laser Engrave',
                'price' => 0,
                'sort' => 0,
            ),
            178 => 
            array (
                'id' => 779,
                'card_id' => 14,
                'feature_id' => 247,
                'name' => 'Included',
                'price' => 0,
                'sort' => 0,
            ),
            179 => 
            array (
                'id' => 780,
                'card_id' => 30,
                'feature_id' => 248,
                'name' => 'Included',
                'price' => 0,
                'sort' => 0,
            ),
        ));
        
        
    }
}

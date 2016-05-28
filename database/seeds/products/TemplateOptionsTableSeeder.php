<?php

use Illuminate\Database\Seeder;

class TemplateOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('template_options')->delete();
        
        \DB::table('template_options')->insert(array (
            0 => 
            array (
                'id' => 21,
                'template_id' => 3,
                'card_feature_id' => 80,
                'card_option_id' => 318,
                'side_type' => 0,
            ),
            1 => 
            array (
                'id' => 22,
                'template_id' => 3,
                'card_feature_id' => 81,
                'card_option_id' => 320,
                'side_type' => 0,
            ),
            2 => 
            array (
                'id' => 23,
                'template_id' => 3,
                'card_feature_id' => 82,
                'card_option_id' => 323,
                'side_type' => 0,
            ),
            3 => 
            array (
                'id' => 24,
                'template_id' => 3,
                'card_feature_id' => 83,
                'card_option_id' => 326,
                'side_type' => 0,
            ),
            4 => 
            array (
                'id' => 25,
                'template_id' => 3,
                'card_feature_id' => 84,
                'card_option_id' => 332,
                'side_type' => 2,
            ),
            5 => 
            array (
                'id' => 26,
                'template_id' => 3,
                'card_feature_id' => 86,
                'card_option_id' => 346,
                'side_type' => 0,
            ),
            6 => 
            array (
                'id' => 27,
                'template_id' => 3,
                'card_feature_id' => 88,
                'card_option_id' => 352,
                'side_type' => 0,
            ),
            7 => 
            array (
                'id' => 28,
                'template_id' => 3,
                'card_feature_id' => 89,
                'card_option_id' => 354,
                'side_type' => 0,
            ),
            8 => 
            array (
                'id' => 29,
                'template_id' => 4,
                'card_feature_id' => 144,
                'card_option_id' => 485,
                'side_type' => 0,
            ),
            9 => 
            array (
                'id' => 30,
                'template_id' => 4,
                'card_feature_id' => 161,
                'card_option_id' => 509,
                'side_type' => 0,
            ),
            10 => 
            array (
                'id' => 31,
                'template_id' => 4,
                'card_feature_id' => 162,
                'card_option_id' => 510,
                'side_type' => 0,
            ),
            11 => 
            array (
                'id' => 32,
                'template_id' => 4,
                'card_feature_id' => 164,
                'card_option_id' => 531,
                'side_type' => 0,
            ),
            12 => 
            array (
                'id' => 33,
                'template_id' => 5,
                'card_feature_id' => 11,
                'card_option_id' => 41,
                'side_type' => 0,
            ),
            13 => 
            array (
                'id' => 34,
                'template_id' => 5,
                'card_feature_id' => 12,
                'card_option_id' => 42,
                'side_type' => 0,
            ),
            14 => 
            array (
                'id' => 35,
                'template_id' => 5,
                'card_feature_id' => 13,
                'card_option_id' => 45,
                'side_type' => 0,
            ),
            15 => 
            array (
                'id' => 36,
                'template_id' => 5,
                'card_feature_id' => 14,
                'card_option_id' => 47,
                'side_type' => 1,
            ),
            16 => 
            array (
                'id' => 37,
                'template_id' => 5,
                'card_feature_id' => 14,
                'card_option_id' => 50,
                'side_type' => 1,
            ),
            17 => 
            array (
                'id' => 38,
                'template_id' => 5,
                'card_feature_id' => 14,
                'card_option_id' => 47,
                'side_type' => 2,
            ),
            18 => 
            array (
                'id' => 39,
                'template_id' => 5,
                'card_feature_id' => 15,
                'card_option_id' => 63,
                'side_type' => 2,
            ),
            19 => 
            array (
                'id' => 40,
                'template_id' => 5,
                'card_feature_id' => 16,
                'card_option_id' => 65,
                'side_type' => 0,
            ),
            20 => 
            array (
                'id' => 41,
                'template_id' => 5,
                'card_feature_id' => 18,
                'card_option_id' => 79,
                'side_type' => 0,
            ),
            21 => 
            array (
                'id' => 42,
                'template_id' => 5,
                'card_feature_id' => 19,
                'card_option_id' => 75,
                'side_type' => 0,
            ),
            22 => 
            array (
                'id' => 60,
                'template_id' => 8,
                'card_feature_id' => 1,
                'card_option_id' => 1,
                'side_type' => 0,
            ),
            23 => 
            array (
                'id' => 61,
                'template_id' => 8,
                'card_feature_id' => 2,
                'card_option_id' => 4,
                'side_type' => 0,
            ),
            24 => 
            array (
                'id' => 62,
                'template_id' => 8,
                'card_feature_id' => 3,
                'card_option_id' => 6,
                'side_type' => 0,
            ),
            25 => 
            array (
                'id' => 63,
                'template_id' => 8,
                'card_feature_id' => 4,
                'card_option_id' => 11,
                'side_type' => 1,
            ),
            26 => 
            array (
                'id' => 64,
                'template_id' => 8,
                'card_feature_id' => 4,
                'card_option_id' => 13,
                'side_type' => 1,
            ),
            27 => 
            array (
                'id' => 65,
                'template_id' => 8,
                'card_feature_id' => 4,
                'card_option_id' => 11,
                'side_type' => 2,
            ),
            28 => 
            array (
                'id' => 66,
                'template_id' => 8,
                'card_feature_id' => 4,
                'card_option_id' => 13,
                'side_type' => 2,
            ),
            29 => 
            array (
                'id' => 67,
                'template_id' => 8,
                'card_feature_id' => 7,
                'card_option_id' => 29,
                'side_type' => 0,
            ),
            30 => 
            array (
                'id' => 68,
                'template_id' => 8,
                'card_feature_id' => 9,
                'card_option_id' => 35,
                'side_type' => 0,
            ),
            31 => 
            array (
                'id' => 69,
                'template_id' => 8,
                'card_feature_id' => 10,
                'card_option_id' => 37,
                'side_type' => 0,
            ),
            32 => 
            array (
                'id' => 80,
                'template_id' => 10,
                'card_feature_id' => 99,
                'card_option_id' => 392,
                'side_type' => 0,
            ),
            33 => 
            array (
                'id' => 81,
                'template_id' => 10,
                'card_feature_id' => 100,
                'card_option_id' => 393,
                'side_type' => 0,
            ),
            34 => 
            array (
                'id' => 82,
                'template_id' => 10,
                'card_feature_id' => 101,
                'card_option_id' => 397,
                'side_type' => 0,
            ),
            35 => 
            array (
                'id' => 83,
                'template_id' => 10,
                'card_feature_id' => 102,
                'card_option_id' => 401,
                'side_type' => 1,
            ),
            36 => 
            array (
                'id' => 84,
                'template_id' => 10,
                'card_feature_id' => 102,
                'card_option_id' => 406,
                'side_type' => 1,
            ),
            37 => 
            array (
                'id' => 85,
                'template_id' => 10,
                'card_feature_id' => 102,
                'card_option_id' => 401,
                'side_type' => 2,
            ),
            38 => 
            array (
                'id' => 86,
                'template_id' => 10,
                'card_feature_id' => 102,
                'card_option_id' => 406,
                'side_type' => 2,
            ),
            39 => 
            array (
                'id' => 87,
                'template_id' => 10,
                'card_feature_id' => 104,
                'card_option_id' => 417,
                'side_type' => 0,
            ),
            40 => 
            array (
                'id' => 88,
                'template_id' => 10,
                'card_feature_id' => 107,
                'card_option_id' => 426,
                'side_type' => 0,
            ),
            41 => 
            array (
                'id' => 89,
                'template_id' => 10,
                'card_feature_id' => 106,
                'card_option_id' => 423,
                'side_type' => 0,
            ),
            42 => 
            array (
                'id' => 98,
                'template_id' => 12,
                'card_feature_id' => 48,
                'card_option_id' => 194,
                'side_type' => 0,
            ),
            43 => 
            array (
                'id' => 99,
                'template_id' => 12,
                'card_feature_id' => 49,
                'card_option_id' => 195,
                'side_type' => 0,
            ),
            44 => 
            array (
                'id' => 100,
                'template_id' => 12,
                'card_feature_id' => 50,
                'card_option_id' => 198,
                'side_type' => 0,
            ),
            45 => 
            array (
                'id' => 101,
                'template_id' => 12,
                'card_feature_id' => 51,
                'card_option_id' => 201,
                'side_type' => 0,
            ),
            46 => 
            array (
                'id' => 102,
                'template_id' => 12,
                'card_feature_id' => 54,
                'card_option_id' => 223,
                'side_type' => 0,
            ),
            47 => 
            array (
                'id' => 103,
                'template_id' => 12,
                'card_feature_id' => 55,
                'card_option_id' => 226,
                'side_type' => 1,
            ),
            48 => 
            array (
                'id' => 104,
                'template_id' => 12,
                'card_feature_id' => 55,
                'card_option_id' => 226,
                'side_type' => 2,
            ),
            49 => 
            array (
                'id' => 105,
                'template_id' => 12,
                'card_feature_id' => 56,
                'card_option_id' => 229,
                'side_type' => 0,
            ),
            50 => 
            array (
                'id' => 106,
                'template_id' => 12,
                'card_feature_id' => 57,
                'card_option_id' => 231,
                'side_type' => 0,
            ),
            51 => 
            array (
                'id' => 107,
                'template_id' => 13,
                'card_feature_id' => 80,
                'card_option_id' => 318,
                'side_type' => 0,
            ),
            52 => 
            array (
                'id' => 108,
                'template_id' => 13,
                'card_feature_id' => 81,
                'card_option_id' => 320,
                'side_type' => 0,
            ),
            53 => 
            array (
                'id' => 109,
                'template_id' => 13,
                'card_feature_id' => 82,
                'card_option_id' => 323,
                'side_type' => 0,
            ),
            54 => 
            array (
                'id' => 110,
                'template_id' => 13,
                'card_feature_id' => 83,
                'card_option_id' => 326,
                'side_type' => 0,
            ),
            55 => 
            array (
                'id' => 111,
                'template_id' => 13,
                'card_feature_id' => 84,
                'card_option_id' => 332,
                'side_type' => 2,
            ),
            56 => 
            array (
                'id' => 112,
                'template_id' => 13,
                'card_feature_id' => 86,
                'card_option_id' => 347,
                'side_type' => 0,
            ),
            57 => 
            array (
                'id' => 113,
                'template_id' => 13,
                'card_feature_id' => 88,
                'card_option_id' => 352,
                'side_type' => 0,
            ),
            58 => 
            array (
                'id' => 114,
                'template_id' => 13,
                'card_feature_id' => 89,
                'card_option_id' => 354,
                'side_type' => 0,
            ),
            59 => 
            array (
                'id' => 126,
                'template_id' => 15,
                'card_feature_id' => 11,
                'card_option_id' => 41,
                'side_type' => 0,
            ),
            60 => 
            array (
                'id' => 127,
                'template_id' => 15,
                'card_feature_id' => 12,
                'card_option_id' => 42,
                'side_type' => 0,
            ),
            61 => 
            array (
                'id' => 128,
                'template_id' => 15,
                'card_feature_id' => 13,
                'card_option_id' => 555,
                'side_type' => 0,
            ),
            62 => 
            array (
                'id' => 129,
                'template_id' => 15,
                'card_feature_id' => 14,
                'card_option_id' => 46,
                'side_type' => 1,
            ),
            63 => 
            array (
                'id' => 130,
                'template_id' => 15,
                'card_feature_id' => 14,
                'card_option_id' => 46,
                'side_type' => 2,
            ),
            64 => 
            array (
                'id' => 131,
                'template_id' => 15,
                'card_feature_id' => 16,
                'card_option_id' => 65,
                'side_type' => 0,
            ),
            65 => 
            array (
                'id' => 132,
                'template_id' => 15,
                'card_feature_id' => 18,
                'card_option_id' => 79,
                'side_type' => 0,
            ),
            66 => 
            array (
                'id' => 133,
                'template_id' => 15,
                'card_feature_id' => 19,
                'card_option_id' => 75,
                'side_type' => 0,
            ),
            67 => 
            array (
                'id' => 134,
                'template_id' => 16,
                'card_feature_id' => 20,
                'card_option_id' => 81,
                'side_type' => 0,
            ),
            68 => 
            array (
                'id' => 135,
                'template_id' => 16,
                'card_feature_id' => 21,
                'card_option_id' => 82,
                'side_type' => 0,
            ),
            69 => 
            array (
                'id' => 136,
                'template_id' => 16,
                'card_feature_id' => 22,
                'card_option_id' => 85,
                'side_type' => 0,
            ),
            70 => 
            array (
                'id' => 137,
                'template_id' => 16,
                'card_feature_id' => 23,
                'card_option_id' => 89,
                'side_type' => 1,
            ),
            71 => 
            array (
                'id' => 138,
                'template_id' => 16,
                'card_feature_id' => 23,
                'card_option_id' => 89,
                'side_type' => 2,
            ),
            72 => 
            array (
                'id' => 139,
                'template_id' => 16,
                'card_feature_id' => 23,
                'card_option_id' => 91,
                'side_type' => 2,
            ),
            73 => 
            array (
                'id' => 140,
                'template_id' => 16,
                'card_feature_id' => 24,
                'card_option_id' => 106,
                'side_type' => 1,
            ),
            74 => 
            array (
                'id' => 141,
                'template_id' => 16,
                'card_feature_id' => 26,
                'card_option_id' => 110,
                'side_type' => 0,
            ),
            75 => 
            array (
                'id' => 142,
                'template_id' => 17,
                'card_feature_id' => 37,
                'card_option_id' => 153,
                'side_type' => 0,
            ),
            76 => 
            array (
                'id' => 143,
                'template_id' => 17,
                'card_feature_id' => 38,
                'card_option_id' => 154,
                'side_type' => 0,
            ),
            77 => 
            array (
                'id' => 144,
                'template_id' => 17,
                'card_feature_id' => 39,
                'card_option_id' => 157,
                'side_type' => 0,
            ),
            78 => 
            array (
                'id' => 145,
                'template_id' => 17,
                'card_feature_id' => 40,
                'card_option_id' => 161,
                'side_type' => 0,
            ),
            79 => 
            array (
                'id' => 146,
                'template_id' => 17,
                'card_feature_id' => 42,
                'card_option_id' => 179,
                'side_type' => 1,
            ),
            80 => 
            array (
                'id' => 147,
                'template_id' => 17,
                'card_feature_id' => 44,
                'card_option_id' => 183,
                'side_type' => 0,
            ),
            81 => 
            array (
                'id' => 148,
                'template_id' => 17,
                'card_feature_id' => 46,
                'card_option_id' => 189,
                'side_type' => 0,
            ),
            82 => 
            array (
                'id' => 149,
                'template_id' => 17,
                'card_feature_id' => 47,
                'card_option_id' => 191,
                'side_type' => 0,
            ),
            83 => 
            array (
                'id' => 150,
                'template_id' => 18,
                'card_feature_id' => 37,
                'card_option_id' => 153,
                'side_type' => 0,
            ),
            84 => 
            array (
                'id' => 151,
                'template_id' => 18,
                'card_feature_id' => 38,
                'card_option_id' => 154,
                'side_type' => 0,
            ),
            85 => 
            array (
                'id' => 152,
                'template_id' => 18,
                'card_feature_id' => 39,
                'card_option_id' => 157,
                'side_type' => 0,
            ),
            86 => 
            array (
                'id' => 153,
                'template_id' => 18,
                'card_feature_id' => 40,
                'card_option_id' => 160,
                'side_type' => 0,
            ),
            87 => 
            array (
                'id' => 154,
                'template_id' => 18,
                'card_feature_id' => 42,
                'card_option_id' => 179,
                'side_type' => 1,
            ),
            88 => 
            array (
                'id' => 155,
                'template_id' => 18,
                'card_feature_id' => 44,
                'card_option_id' => 183,
                'side_type' => 0,
            ),
            89 => 
            array (
                'id' => 156,
                'template_id' => 18,
                'card_feature_id' => 45,
                'card_option_id' => 187,
                'side_type' => 1,
            ),
            90 => 
            array (
                'id' => 157,
                'template_id' => 18,
                'card_feature_id' => 46,
                'card_option_id' => 189,
                'side_type' => 0,
            ),
            91 => 
            array (
                'id' => 158,
                'template_id' => 18,
                'card_feature_id' => 47,
                'card_option_id' => 191,
                'side_type' => 0,
            ),
            92 => 
            array (
                'id' => 167,
                'template_id' => 7,
                'card_feature_id' => 48,
                'card_option_id' => 194,
                'side_type' => 0,
            ),
            93 => 
            array (
                'id' => 168,
                'template_id' => 7,
                'card_feature_id' => 49,
                'card_option_id' => 195,
                'side_type' => 0,
            ),
            94 => 
            array (
                'id' => 169,
                'template_id' => 7,
                'card_feature_id' => 50,
                'card_option_id' => 198,
                'side_type' => 0,
            ),
            95 => 
            array (
                'id' => 170,
                'template_id' => 7,
                'card_feature_id' => 51,
                'card_option_id' => 201,
                'side_type' => 0,
            ),
            96 => 
            array (
                'id' => 171,
                'template_id' => 7,
                'card_feature_id' => 52,
                'card_option_id' => 205,
                'side_type' => 1,
            ),
            97 => 
            array (
                'id' => 172,
                'template_id' => 7,
                'card_feature_id' => 52,
                'card_option_id' => 205,
                'side_type' => 2,
            ),
            98 => 
            array (
                'id' => 173,
                'template_id' => 7,
                'card_feature_id' => 54,
                'card_option_id' => 223,
                'side_type' => 0,
            ),
            99 => 
            array (
                'id' => 174,
                'template_id' => 7,
                'card_feature_id' => 56,
                'card_option_id' => 229,
                'side_type' => 0,
            ),
            100 => 
            array (
                'id' => 175,
                'template_id' => 7,
                'card_feature_id' => 184,
                'card_option_id' => 574,
                'side_type' => 0,
            ),
            101 => 
            array (
                'id' => 176,
                'template_id' => 7,
                'card_feature_id' => 185,
                'card_option_id' => 585,
                'side_type' => 0,
            ),
            102 => 
            array (
                'id' => 200,
                'template_id' => 11,
                'card_feature_id' => 99,
                'card_option_id' => 392,
                'side_type' => 0,
            ),
            103 => 
            array (
                'id' => 201,
                'template_id' => 11,
                'card_feature_id' => 100,
                'card_option_id' => 393,
                'side_type' => 0,
            ),
            104 => 
            array (
                'id' => 202,
                'template_id' => 11,
                'card_feature_id' => 101,
                'card_option_id' => 397,
                'side_type' => 0,
            ),
            105 => 
            array (
                'id' => 203,
                'template_id' => 11,
                'card_feature_id' => 103,
                'card_option_id' => 415,
                'side_type' => 1,
            ),
            106 => 
            array (
                'id' => 204,
                'template_id' => 11,
                'card_feature_id' => 104,
                'card_option_id' => 417,
                'side_type' => 0,
            ),
            107 => 
            array (
                'id' => 205,
                'template_id' => 11,
                'card_feature_id' => 105,
                'card_option_id' => 421,
                'side_type' => 2,
            ),
            108 => 
            array (
                'id' => 206,
                'template_id' => 11,
                'card_feature_id' => 107,
                'card_option_id' => 426,
                'side_type' => 0,
            ),
            109 => 
            array (
                'id' => 207,
                'template_id' => 11,
                'card_feature_id' => 199,
                'card_option_id' => 684,
                'side_type' => 0,
            ),
            110 => 
            array (
                'id' => 218,
                'template_id' => 2,
                'card_feature_id' => 1,
                'card_option_id' => 1,
                'side_type' => 0,
            ),
            111 => 
            array (
                'id' => 219,
                'template_id' => 2,
                'card_feature_id' => 2,
                'card_option_id' => 4,
                'side_type' => 0,
            ),
            112 => 
            array (
                'id' => 220,
                'template_id' => 2,
                'card_feature_id' => 3,
                'card_option_id' => 6,
                'side_type' => 0,
            ),
            113 => 
            array (
                'id' => 221,
                'template_id' => 2,
                'card_feature_id' => 4,
                'card_option_id' => 14,
                'side_type' => 1,
            ),
            114 => 
            array (
                'id' => 222,
                'template_id' => 2,
                'card_feature_id' => 4,
                'card_option_id' => 12,
                'side_type' => 2,
            ),
            115 => 
            array (
                'id' => 223,
                'template_id' => 2,
                'card_feature_id' => 4,
                'card_option_id' => 14,
                'side_type' => 2,
            ),
            116 => 
            array (
                'id' => 224,
                'template_id' => 2,
                'card_feature_id' => 7,
                'card_option_id' => 29,
                'side_type' => 0,
            ),
            117 => 
            array (
                'id' => 225,
                'template_id' => 2,
                'card_feature_id' => 9,
                'card_option_id' => 35,
                'side_type' => 0,
            ),
            118 => 
            array (
                'id' => 226,
                'template_id' => 2,
                'card_feature_id' => 187,
                'card_option_id' => 599,
                'side_type' => 0,
            ),
            119 => 
            array (
                'id' => 227,
                'template_id' => 6,
                'card_feature_id' => 99,
                'card_option_id' => 392,
                'side_type' => 0,
            ),
            120 => 
            array (
                'id' => 228,
                'template_id' => 6,
                'card_feature_id' => 100,
                'card_option_id' => 393,
                'side_type' => 0,
            ),
            121 => 
            array (
                'id' => 229,
                'template_id' => 6,
                'card_feature_id' => 101,
                'card_option_id' => 397,
                'side_type' => 0,
            ),
            122 => 
            array (
                'id' => 230,
                'template_id' => 6,
                'card_feature_id' => 102,
                'card_option_id' => 403,
                'side_type' => 2,
            ),
            123 => 
            array (
                'id' => 231,
                'template_id' => 6,
                'card_feature_id' => 103,
                'card_option_id' => 416,
                'side_type' => 2,
            ),
            124 => 
            array (
                'id' => 232,
                'template_id' => 6,
                'card_feature_id' => 104,
                'card_option_id' => 417,
                'side_type' => 0,
            ),
            125 => 
            array (
                'id' => 233,
                'template_id' => 6,
                'card_feature_id' => 107,
                'card_option_id' => 427,
                'side_type' => 0,
            ),
            126 => 
            array (
                'id' => 234,
                'template_id' => 6,
                'card_feature_id' => 199,
                'card_option_id' => 683,
                'side_type' => 0,
            ),
            127 => 
            array (
                'id' => 244,
                'template_id' => 19,
                'card_feature_id' => 108,
                'card_option_id' => 428,
                'side_type' => 0,
            ),
            128 => 
            array (
                'id' => 245,
                'template_id' => 19,
                'card_feature_id' => 109,
                'card_option_id' => 429,
                'side_type' => 0,
            ),
            129 => 
            array (
                'id' => 246,
                'template_id' => 19,
                'card_feature_id' => 110,
                'card_option_id' => 432,
                'side_type' => 0,
            ),
            130 => 
            array (
                'id' => 247,
                'template_id' => 19,
                'card_feature_id' => 111,
                'card_option_id' => 433,
                'side_type' => 0,
            ),
            131 => 
            array (
                'id' => 248,
                'template_id' => 19,
                'card_feature_id' => 112,
                'card_option_id' => 434,
                'side_type' => 0,
            ),
            132 => 
            array (
                'id' => 249,
                'template_id' => 19,
                'card_feature_id' => 113,
                'card_option_id' => 436,
                'side_type' => 1,
            ),
            133 => 
            array (
                'id' => 250,
                'template_id' => 19,
                'card_feature_id' => 114,
                'card_option_id' => 440,
                'side_type' => 1,
            ),
            134 => 
            array (
                'id' => 251,
                'template_id' => 19,
                'card_feature_id' => 114,
                'card_option_id' => 440,
                'side_type' => 2,
            ),
        ));
        
        
    }
}

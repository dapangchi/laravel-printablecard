<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Afghanistan',
                'iso' => 'AF',
                'sort' => 1,
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Albania',
                'iso' => 'AL',
                'sort' => 1,
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'Antarctica',
                'iso' => 'AQ',
                'sort' => 1,
                'active' => 1,
            ),
            3 => 
            array (
                'id' => 12,
                'name' => 'Algeria',
                'iso' => 'DZ',
                'sort' => 1,
                'active' => 1,
            ),
            4 => 
            array (
                'id' => 16,
                'name' => 'American Samoa',
                'iso' => 'AS',
                'sort' => 1,
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 20,
                'name' => 'Andorra',
                'iso' => 'AD',
                'sort' => 1,
                'active' => 1,
            ),
            6 => 
            array (
                'id' => 24,
                'name' => 'Angola',
                'iso' => 'AO',
                'sort' => 1,
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 28,
                'name' => 'Antigua and Barbuda',
                'iso' => 'AG',
                'sort' => 1,
                'active' => 1,
            ),
            8 => 
            array (
                'id' => 31,
                'name' => 'Azerbaijan',
                'iso' => 'AZ',
                'sort' => 1,
                'active' => 1,
            ),
            9 => 
            array (
                'id' => 32,
                'name' => 'Argentina',
                'iso' => 'AR',
                'sort' => 1,
                'active' => 1,
            ),
            10 => 
            array (
                'id' => 36,
                'name' => 'Australia',
                'iso' => 'AU',
                'sort' => 1,
                'active' => 1,
            ),
            11 => 
            array (
                'id' => 40,
                'name' => 'Austria',
                'iso' => 'AT',
                'sort' => 1,
                'active' => 1,
            ),
            12 => 
            array (
                'id' => 44,
                'name' => 'Bahamas',
                'iso' => 'BS',
                'sort' => 1,
                'active' => 1,
            ),
            13 => 
            array (
                'id' => 48,
                'name' => 'Bahrain',
                'iso' => 'BH',
                'sort' => 1,
                'active' => 1,
            ),
            14 => 
            array (
                'id' => 50,
                'name' => 'Bangladesh',
                'iso' => 'BD',
                'sort' => 1,
                'active' => 1,
            ),
            15 => 
            array (
                'id' => 51,
                'name' => 'Armenia',
                'iso' => 'AM',
                'sort' => 1,
                'active' => 1,
            ),
            16 => 
            array (
                'id' => 52,
                'name' => 'Barbados',
                'iso' => 'BB',
                'sort' => 1,
                'active' => 1,
            ),
            17 => 
            array (
                'id' => 56,
                'name' => 'Belgium',
                'iso' => 'BE',
                'sort' => 1,
                'active' => 1,
            ),
            18 => 
            array (
                'id' => 60,
                'name' => 'Bermuda',
                'iso' => 'BM',
                'sort' => 1,
                'active' => 1,
            ),
            19 => 
            array (
                'id' => 64,
                'name' => 'Bhutan',
                'iso' => 'BT',
                'sort' => 1,
                'active' => 1,
            ),
            20 => 
            array (
                'id' => 68,
                'name' => 'Bolivia',
                'iso' => 'BO',
                'sort' => 1,
                'active' => 1,
            ),
            21 => 
            array (
                'id' => 70,
                'name' => 'Bosnia and Herzegovina',
                'iso' => 'BA',
                'sort' => 1,
                'active' => 1,
            ),
            22 => 
            array (
                'id' => 72,
                'name' => 'Botswana',
                'iso' => 'BW',
                'sort' => 1,
                'active' => 1,
            ),
            23 => 
            array (
                'id' => 74,
                'name' => 'Bouvet Island',
                'iso' => 'BV',
                'sort' => 1,
                'active' => 1,
            ),
            24 => 
            array (
                'id' => 76,
                'name' => 'Brazil',
                'iso' => 'BR',
                'sort' => 1,
                'active' => 1,
            ),
            25 => 
            array (
                'id' => 84,
                'name' => 'Belize',
                'iso' => 'BZ',
                'sort' => 1,
                'active' => 1,
            ),
            26 => 
            array (
                'id' => 86,
                'name' => 'British Indian Ocean Territory',
                'iso' => 'IO',
                'sort' => 1,
                'active' => 1,
            ),
            27 => 
            array (
                'id' => 90,
                'name' => 'Solomon Islands',
                'iso' => 'SB',
                'sort' => 1,
                'active' => 1,
            ),
            28 => 
            array (
                'id' => 92,
                'name' => 'British Virgin Islands',
                'iso' => 'VG',
                'sort' => 1,
                'active' => 1,
            ),
            29 => 
            array (
                'id' => 96,
                'name' => 'Brunei',
                'iso' => 'BN',
                'sort' => 1,
                'active' => 1,
            ),
            30 => 
            array (
                'id' => 100,
                'name' => 'Bulgaria',
                'iso' => 'BG',
                'sort' => 1,
                'active' => 1,
            ),
            31 => 
            array (
                'id' => 104,
                'name' => 'Myanmar',
                'iso' => 'MM',
                'sort' => 1,
                'active' => 1,
            ),
            32 => 
            array (
                'id' => 108,
                'name' => 'Burundi',
                'iso' => 'BI',
                'sort' => 1,
                'active' => 1,
            ),
            33 => 
            array (
                'id' => 112,
                'name' => 'Belarus',
                'iso' => 'BY',
                'sort' => 1,
                'active' => 1,
            ),
            34 => 
            array (
                'id' => 116,
                'name' => 'Cambodia',
                'iso' => 'KH',
                'sort' => 1,
                'active' => 1,
            ),
            35 => 
            array (
                'id' => 120,
                'name' => 'Cameroon',
                'iso' => 'CM',
                'sort' => 1,
                'active' => 1,
            ),
            36 => 
            array (
                'id' => 124,
                'name' => 'Canada',
                'iso' => 'CA',
                'sort' => 0,
                'active' => 1,
            ),
            37 => 
            array (
                'id' => 132,
                'name' => 'Cape Verde',
                'iso' => 'CV',
                'sort' => 1,
                'active' => 1,
            ),
            38 => 
            array (
                'id' => 136,
                'name' => 'Cayman Islands',
                'iso' => 'KY',
                'sort' => 1,
                'active' => 1,
            ),
            39 => 
            array (
                'id' => 140,
                'name' => 'Central African Republic',
                'iso' => 'CF',
                'sort' => 1,
                'active' => 1,
            ),
            40 => 
            array (
                'id' => 144,
                'name' => 'Sri Lanka',
                'iso' => 'LK',
                'sort' => 1,
                'active' => 1,
            ),
            41 => 
            array (
                'id' => 148,
                'name' => 'Chad',
                'iso' => 'TD',
                'sort' => 1,
                'active' => 1,
            ),
            42 => 
            array (
                'id' => 152,
                'name' => 'Chile',
                'iso' => 'CL',
                'sort' => 1,
                'active' => 1,
            ),
            43 => 
            array (
                'id' => 156,
                'name' => 'China',
                'iso' => 'CN',
                'sort' => 1,
                'active' => 1,
            ),
            44 => 
            array (
                'id' => 158,
                'name' => 'Taiwan',
                'iso' => 'TW',
                'sort' => 1,
                'active' => 1,
            ),
            45 => 
            array (
                'id' => 162,
                'name' => 'Christmas Island',
                'iso' => 'CX',
                'sort' => 1,
                'active' => 1,
            ),
            46 => 
            array (
                'id' => 166,
                'name' => 'Cocos Islands',
                'iso' => 'CC',
                'sort' => 1,
                'active' => 1,
            ),
            47 => 
            array (
                'id' => 170,
                'name' => 'Colombia',
                'iso' => 'CO',
                'sort' => 1,
                'active' => 1,
            ),
            48 => 
            array (
                'id' => 174,
                'name' => 'Comoros',
                'iso' => 'KM',
                'sort' => 1,
                'active' => 1,
            ),
            49 => 
            array (
                'id' => 175,
                'name' => 'Mayotte',
                'iso' => 'YT',
                'sort' => 1,
                'active' => 1,
            ),
            50 => 
            array (
                'id' => 178,
                'name' => 'Republic of the Congo',
                'iso' => 'CG',
                'sort' => 1,
                'active' => 1,
            ),
            51 => 
            array (
                'id' => 180,
                'name' => 'Democratic Republic of the Congo',
                'iso' => 'CD',
                'sort' => 1,
                'active' => 1,
            ),
            52 => 
            array (
                'id' => 184,
                'name' => 'Cook Islands',
                'iso' => 'CK',
                'sort' => 1,
                'active' => 1,
            ),
            53 => 
            array (
                'id' => 188,
                'name' => 'Costa Rica',
                'iso' => 'CR',
                'sort' => 1,
                'active' => 1,
            ),
            54 => 
            array (
                'id' => 191,
                'name' => 'Croatia',
                'iso' => 'HR',
                'sort' => 1,
                'active' => 1,
            ),
            55 => 
            array (
                'id' => 192,
                'name' => 'Cuba',
                'iso' => 'CU',
                'sort' => 1,
                'active' => 1,
            ),
            56 => 
            array (
                'id' => 196,
                'name' => 'Cyprus',
                'iso' => 'CY',
                'sort' => 1,
                'active' => 1,
            ),
            57 => 
            array (
                'id' => 203,
                'name' => 'Czech Republic',
                'iso' => 'CZ',
                'sort' => 1,
                'active' => 1,
            ),
            58 => 
            array (
                'id' => 204,
                'name' => 'Benin',
                'iso' => 'BJ',
                'sort' => 1,
                'active' => 1,
            ),
            59 => 
            array (
                'id' => 208,
                'name' => 'Denmark',
                'iso' => 'DK',
                'sort' => 1,
                'active' => 1,
            ),
            60 => 
            array (
                'id' => 212,
                'name' => 'Dominica',
                'iso' => 'DM',
                'sort' => 1,
                'active' => 1,
            ),
            61 => 
            array (
                'id' => 214,
                'name' => 'Dominican Republic',
                'iso' => 'DO',
                'sort' => 1,
                'active' => 1,
            ),
            62 => 
            array (
                'id' => 218,
                'name' => 'Ecuador',
                'iso' => 'EC',
                'sort' => 1,
                'active' => 1,
            ),
            63 => 
            array (
                'id' => 222,
                'name' => 'El Salvador',
                'iso' => 'SV',
                'sort' => 1,
                'active' => 1,
            ),
            64 => 
            array (
                'id' => 226,
                'name' => 'Equatorial Guinea',
                'iso' => 'GQ',
                'sort' => 1,
                'active' => 1,
            ),
            65 => 
            array (
                'id' => 231,
                'name' => 'Ethiopia',
                'iso' => 'ET',
                'sort' => 1,
                'active' => 1,
            ),
            66 => 
            array (
                'id' => 232,
                'name' => 'Eritrea',
                'iso' => 'ER',
                'sort' => 1,
                'active' => 1,
            ),
            67 => 
            array (
                'id' => 233,
                'name' => 'Estonia',
                'iso' => 'EE',
                'sort' => 1,
                'active' => 1,
            ),
            68 => 
            array (
                'id' => 234,
                'name' => 'Faroe Islands',
                'iso' => 'FO',
                'sort' => 1,
                'active' => 1,
            ),
            69 => 
            array (
                'id' => 238,
                'name' => 'Falkland Islands',
                'iso' => 'FK',
                'sort' => 1,
                'active' => 1,
            ),
            70 => 
            array (
                'id' => 239,
                'name' => 'South Georgia and the South Sandwich Islands',
                'iso' => 'GS',
                'sort' => 1,
                'active' => 1,
            ),
            71 => 
            array (
                'id' => 242,
                'name' => 'Fiji',
                'iso' => 'FJ',
                'sort' => 1,
                'active' => 1,
            ),
            72 => 
            array (
                'id' => 246,
                'name' => 'Finland',
                'iso' => 'FI',
                'sort' => 1,
                'active' => 1,
            ),
            73 => 
            array (
                'id' => 248,
                'name' => 'Aland Islands',
                'iso' => 'AX',
                'sort' => 1,
                'active' => 1,
            ),
            74 => 
            array (
                'id' => 250,
                'name' => 'France',
                'iso' => 'FR',
                'sort' => 1,
                'active' => 1,
            ),
            75 => 
            array (
                'id' => 254,
                'name' => 'French Guiana',
                'iso' => 'GF',
                'sort' => 1,
                'active' => 1,
            ),
            76 => 
            array (
                'id' => 258,
                'name' => 'French Polynesia',
                'iso' => 'PF',
                'sort' => 1,
                'active' => 1,
            ),
            77 => 
            array (
                'id' => 260,
                'name' => 'French Southern Territories',
                'iso' => 'TF',
                'sort' => 1,
                'active' => 1,
            ),
            78 => 
            array (
                'id' => 262,
                'name' => 'Djibouti',
                'iso' => 'DJ',
                'sort' => 1,
                'active' => 1,
            ),
            79 => 
            array (
                'id' => 266,
                'name' => 'Gabon',
                'iso' => 'GA',
                'sort' => 1,
                'active' => 1,
            ),
            80 => 
            array (
                'id' => 268,
                'name' => 'Georgia',
                'iso' => 'GE',
                'sort' => 1,
                'active' => 1,
            ),
            81 => 
            array (
                'id' => 270,
                'name' => 'Gambia',
                'iso' => 'GM',
                'sort' => 1,
                'active' => 1,
            ),
            82 => 
            array (
                'id' => 275,
                'name' => 'Palestinian Territory',
                'iso' => 'PS',
                'sort' => 1,
                'active' => 1,
            ),
            83 => 
            array (
                'id' => 276,
                'name' => 'Germany',
                'iso' => 'DE',
                'sort' => 1,
                'active' => 1,
            ),
            84 => 
            array (
                'id' => 288,
                'name' => 'Ghana',
                'iso' => 'GH',
                'sort' => 1,
                'active' => 1,
            ),
            85 => 
            array (
                'id' => 292,
                'name' => 'Gibraltar',
                'iso' => 'GI',
                'sort' => 1,
                'active' => 1,
            ),
            86 => 
            array (
                'id' => 296,
                'name' => 'Kiribati',
                'iso' => 'KI',
                'sort' => 1,
                'active' => 1,
            ),
            87 => 
            array (
                'id' => 300,
                'name' => 'Greece',
                'iso' => 'GR',
                'sort' => 1,
                'active' => 1,
            ),
            88 => 
            array (
                'id' => 304,
                'name' => 'Greenland',
                'iso' => 'Gl',
                'sort' => 1,
                'active' => 1,
            ),
            89 => 
            array (
                'id' => 308,
                'name' => 'Grenada',
                'iso' => 'GD',
                'sort' => 1,
                'active' => 1,
            ),
            90 => 
            array (
                'id' => 312,
                'name' => 'Guadeloupe',
                'iso' => 'GP',
                'sort' => 1,
                'active' => 1,
            ),
            91 => 
            array (
                'id' => 316,
                'name' => 'Guam',
                'iso' => 'GU',
                'sort' => 1,
                'active' => 1,
            ),
            92 => 
            array (
                'id' => 320,
                'name' => 'Guatemala',
                'iso' => 'GT',
                'sort' => 1,
                'active' => 1,
            ),
            93 => 
            array (
                'id' => 324,
                'name' => 'Guinea',
                'iso' => 'GN',
                'sort' => 1,
                'active' => 1,
            ),
            94 => 
            array (
                'id' => 328,
                'name' => 'Guyana',
                'iso' => 'GY',
                'sort' => 1,
                'active' => 1,
            ),
            95 => 
            array (
                'id' => 332,
                'name' => 'Haiti',
                'iso' => 'HT',
                'sort' => 1,
                'active' => 1,
            ),
            96 => 
            array (
                'id' => 334,
                'name' => 'Heard Island and McDonald Islands',
                'iso' => 'HM',
                'sort' => 1,
                'active' => 1,
            ),
            97 => 
            array (
                'id' => 336,
                'name' => 'Vatican',
                'iso' => 'VA',
                'sort' => 1,
                'active' => 1,
            ),
            98 => 
            array (
                'id' => 340,
                'name' => 'Honduras',
                'iso' => 'HN',
                'sort' => 1,
                'active' => 1,
            ),
            99 => 
            array (
                'id' => 344,
                'name' => 'Hong Kong',
                'iso' => 'HK',
                'sort' => 1,
                'active' => 1,
            ),
            100 => 
            array (
                'id' => 348,
                'name' => 'Hungary',
                'iso' => 'HU',
                'sort' => 1,
                'active' => 1,
            ),
            101 => 
            array (
                'id' => 352,
                'name' => 'Iceland',
                'iso' => 'IS',
                'sort' => 1,
                'active' => 1,
            ),
            102 => 
            array (
                'id' => 356,
                'name' => 'India',
                'iso' => 'IN',
                'sort' => 1,
                'active' => 1,
            ),
            103 => 
            array (
                'id' => 360,
                'name' => 'Indonesia',
                'iso' => 'ID',
                'sort' => 1,
                'active' => 1,
            ),
            104 => 
            array (
                'id' => 364,
                'name' => 'Iran',
                'iso' => 'IR',
                'sort' => 1,
                'active' => 1,
            ),
            105 => 
            array (
                'id' => 368,
                'name' => 'Iraq',
                'iso' => 'IQ',
                'sort' => 1,
                'active' => 1,
            ),
            106 => 
            array (
                'id' => 372,
                'name' => 'Ireland',
                'iso' => 'IE',
                'sort' => 1,
                'active' => 1,
            ),
            107 => 
            array (
                'id' => 376,
                'name' => 'Israel',
                'iso' => 'IL',
                'sort' => 1,
                'active' => 1,
            ),
            108 => 
            array (
                'id' => 380,
                'name' => 'Italy',
                'iso' => 'IT',
                'sort' => 1,
                'active' => 1,
            ),
            109 => 
            array (
                'id' => 384,
                'name' => 'Ivory Coast',
                'iso' => 'CI',
                'sort' => 1,
                'active' => 1,
            ),
            110 => 
            array (
                'id' => 388,
                'name' => 'Jamaica',
                'iso' => 'JM',
                'sort' => 1,
                'active' => 1,
            ),
            111 => 
            array (
                'id' => 392,
                'name' => 'Japan',
                'iso' => 'JP',
                'sort' => 1,
                'active' => 1,
            ),
            112 => 
            array (
                'id' => 398,
                'name' => 'Kazakhstan',
                'iso' => 'KZ',
                'sort' => 1,
                'active' => 1,
            ),
            113 => 
            array (
                'id' => 400,
                'name' => 'Jordan',
                'iso' => 'JO',
                'sort' => 1,
                'active' => 1,
            ),
            114 => 
            array (
                'id' => 404,
                'name' => 'Kenya',
                'iso' => 'KE',
                'sort' => 1,
                'active' => 1,
            ),
            115 => 
            array (
                'id' => 408,
                'name' => 'North Korea',
                'iso' => 'KP',
                'sort' => 1,
                'active' => 1,
            ),
            116 => 
            array (
                'id' => 410,
                'name' => 'South Korea',
                'iso' => 'KR',
                'sort' => 1,
                'active' => 1,
            ),
            117 => 
            array (
                'id' => 414,
                'name' => 'Kuwait',
                'iso' => 'KW',
                'sort' => 1,
                'active' => 1,
            ),
            118 => 
            array (
                'id' => 417,
                'name' => 'Kyrgyzstan',
                'iso' => 'KG',
                'sort' => 1,
                'active' => 1,
            ),
            119 => 
            array (
                'id' => 418,
                'name' => 'Laos',
                'iso' => 'LA',
                'sort' => 1,
                'active' => 1,
            ),
            120 => 
            array (
                'id' => 422,
                'name' => 'Lebanon',
                'iso' => 'LB',
                'sort' => 1,
                'active' => 1,
            ),
            121 => 
            array (
                'id' => 426,
                'name' => 'Lesotho',
                'iso' => 'LS',
                'sort' => 1,
                'active' => 1,
            ),
            122 => 
            array (
                'id' => 428,
                'name' => 'Latvia',
                'iso' => 'LV',
                'sort' => 1,
                'active' => 1,
            ),
            123 => 
            array (
                'id' => 430,
                'name' => 'Liberia',
                'iso' => 'LR',
                'sort' => 1,
                'active' => 1,
            ),
            124 => 
            array (
                'id' => 434,
                'name' => 'Libya',
                'iso' => 'LY',
                'sort' => 1,
                'active' => 1,
            ),
            125 => 
            array (
                'id' => 438,
                'name' => 'Liechtenstein',
                'iso' => 'LI',
                'sort' => 1,
                'active' => 1,
            ),
            126 => 
            array (
                'id' => 440,
                'name' => 'Lithuania',
                'iso' => 'LT',
                'sort' => 1,
                'active' => 1,
            ),
            127 => 
            array (
                'id' => 442,
                'name' => 'Luxembourg',
                'iso' => 'LU',
                'sort' => 1,
                'active' => 1,
            ),
            128 => 
            array (
                'id' => 446,
                'name' => 'Macao',
                'iso' => 'MO',
                'sort' => 1,
                'active' => 1,
            ),
            129 => 
            array (
                'id' => 450,
                'name' => 'Madagascar',
                'iso' => 'MG',
                'sort' => 1,
                'active' => 1,
            ),
            130 => 
            array (
                'id' => 454,
                'name' => 'Malawi',
                'iso' => 'MW',
                'sort' => 1,
                'active' => 1,
            ),
            131 => 
            array (
                'id' => 458,
                'name' => 'Malaysia',
                'iso' => 'MY',
                'sort' => 1,
                'active' => 1,
            ),
            132 => 
            array (
                'id' => 462,
                'name' => 'Maldives',
                'iso' => 'MV',
                'sort' => 1,
                'active' => 1,
            ),
            133 => 
            array (
                'id' => 466,
                'name' => 'Mali',
                'iso' => 'ML',
                'sort' => 1,
                'active' => 1,
            ),
            134 => 
            array (
                'id' => 470,
                'name' => 'Malta',
                'iso' => 'MT',
                'sort' => 1,
                'active' => 1,
            ),
            135 => 
            array (
                'id' => 474,
                'name' => 'Martinique',
                'iso' => 'MQ',
                'sort' => 1,
                'active' => 1,
            ),
            136 => 
            array (
                'id' => 478,
                'name' => 'Mauritania',
                'iso' => 'MR',
                'sort' => 1,
                'active' => 1,
            ),
            137 => 
            array (
                'id' => 480,
                'name' => 'Mauritius',
                'iso' => 'MU',
                'sort' => 1,
                'active' => 1,
            ),
            138 => 
            array (
                'id' => 484,
                'name' => 'Mexico',
                'iso' => 'MX',
                'sort' => 1,
                'active' => 1,
            ),
            139 => 
            array (
                'id' => 492,
                'name' => 'Monaco',
                'iso' => 'MC',
                'sort' => 1,
                'active' => 1,
            ),
            140 => 
            array (
                'id' => 496,
                'name' => 'Mongolia',
                'iso' => 'MN',
                'sort' => 1,
                'active' => 1,
            ),
            141 => 
            array (
                'id' => 498,
                'name' => 'Moldova',
                'iso' => 'MD',
                'sort' => 1,
                'active' => 1,
            ),
            142 => 
            array (
                'id' => 499,
                'name' => 'Montenegro',
                'iso' => 'ME',
                'sort' => 1,
                'active' => 1,
            ),
            143 => 
            array (
                'id' => 500,
                'name' => 'Montserrat',
                'iso' => 'MS',
                'sort' => 1,
                'active' => 1,
            ),
            144 => 
            array (
                'id' => 504,
                'name' => 'Morocco',
                'iso' => 'MA',
                'sort' => 1,
                'active' => 1,
            ),
            145 => 
            array (
                'id' => 508,
                'name' => 'Mozambique',
                'iso' => 'MZ',
                'sort' => 1,
                'active' => 1,
            ),
            146 => 
            array (
                'id' => 512,
                'name' => 'Oman',
                'iso' => 'OM',
                'sort' => 1,
                'active' => 1,
            ),
            147 => 
            array (
                'id' => 516,
                'name' => 'Namibia',
                'iso' => 'NA',
                'sort' => 1,
                'active' => 1,
            ),
            148 => 
            array (
                'id' => 520,
                'name' => 'Nauru',
                'iso' => 'NR',
                'sort' => 1,
                'active' => 1,
            ),
            149 => 
            array (
                'id' => 524,
                'name' => 'Nepal',
                'iso' => 'NP',
                'sort' => 1,
                'active' => 1,
            ),
            150 => 
            array (
                'id' => 528,
                'name' => 'Netherlands',
                'iso' => 'NL',
                'sort' => 1,
                'active' => 1,
            ),
            151 => 
            array (
                'id' => 530,
                'name' => 'Netherlands Antilles',
                'iso' => 'AN',
                'sort' => 1,
                'active' => 1,
            ),
            152 => 
            array (
                'id' => 533,
                'name' => 'Aruba',
                'iso' => 'AW',
                'sort' => 1,
                'active' => 1,
            ),
            153 => 
            array (
                'id' => 540,
                'name' => 'New Caledonia',
                'iso' => 'NC',
                'sort' => 1,
                'active' => 1,
            ),
            154 => 
            array (
                'id' => 548,
                'name' => 'Vanuatu',
                'iso' => 'VU',
                'sort' => 1,
                'active' => 1,
            ),
            155 => 
            array (
                'id' => 554,
                'name' => 'New Zealand',
                'iso' => 'NZ',
                'sort' => 1,
                'active' => 1,
            ),
            156 => 
            array (
                'id' => 558,
                'name' => 'Nicaragua',
                'iso' => 'NI',
                'sort' => 1,
                'active' => 1,
            ),
            157 => 
            array (
                'id' => 562,
                'name' => 'Niger',
                'iso' => 'NE',
                'sort' => 1,
                'active' => 1,
            ),
            158 => 
            array (
                'id' => 566,
                'name' => 'Nigeria',
                'iso' => 'NG',
                'sort' => 1,
                'active' => 1,
            ),
            159 => 
            array (
                'id' => 570,
                'name' => 'Niue',
                'iso' => 'NU',
                'sort' => 1,
                'active' => 1,
            ),
            160 => 
            array (
                'id' => 574,
                'name' => 'Norfolk Island',
                'iso' => 'NF',
                'sort' => 1,
                'active' => 1,
            ),
            161 => 
            array (
                'id' => 578,
                'name' => 'Norway',
                'iso' => 'NO',
                'sort' => 1,
                'active' => 1,
            ),
            162 => 
            array (
                'id' => 580,
                'name' => 'Northern Mariana Islands',
                'iso' => 'MP',
                'sort' => 1,
                'active' => 1,
            ),
            163 => 
            array (
                'id' => 581,
                'name' => 'United States Minor Outlying Islands',
                'iso' => 'UM',
                'sort' => 1,
                'active' => 1,
            ),
            164 => 
            array (
                'id' => 583,
                'name' => 'Micronesia',
                'iso' => 'FM',
                'sort' => 1,
                'active' => 1,
            ),
            165 => 
            array (
                'id' => 584,
                'name' => 'Marshall Islands',
                'iso' => 'MH',
                'sort' => 1,
                'active' => 1,
            ),
            166 => 
            array (
                'id' => 585,
                'name' => 'Palau',
                'iso' => 'PW',
                'sort' => 1,
                'active' => 1,
            ),
            167 => 
            array (
                'id' => 586,
                'name' => 'Pakistan',
                'iso' => 'PK',
                'sort' => 1,
                'active' => 1,
            ),
            168 => 
            array (
                'id' => 591,
                'name' => 'Panama',
                'iso' => 'PA',
                'sort' => 1,
                'active' => 1,
            ),
            169 => 
            array (
                'id' => 598,
                'name' => 'Papua New Guinea',
                'iso' => 'PG',
                'sort' => 1,
                'active' => 1,
            ),
            170 => 
            array (
                'id' => 600,
                'name' => 'Paraguay',
                'iso' => 'PY',
                'sort' => 1,
                'active' => 1,
            ),
            171 => 
            array (
                'id' => 604,
                'name' => 'Peru',
                'iso' => 'PE',
                'sort' => 1,
                'active' => 1,
            ),
            172 => 
            array (
                'id' => 608,
                'name' => 'Philippines',
                'iso' => 'PH',
                'sort' => 1,
                'active' => 1,
            ),
            173 => 
            array (
                'id' => 612,
                'name' => 'Pitcairn',
                'iso' => 'PN',
                'sort' => 1,
                'active' => 1,
            ),
            174 => 
            array (
                'id' => 616,
                'name' => 'Poland',
                'iso' => 'PL',
                'sort' => 1,
                'active' => 1,
            ),
            175 => 
            array (
                'id' => 620,
                'name' => 'Portugal',
                'iso' => 'PT',
                'sort' => 1,
                'active' => 1,
            ),
            176 => 
            array (
                'id' => 624,
                'name' => 'Guinea-Bissau',
                'iso' => 'GW',
                'sort' => 1,
                'active' => 1,
            ),
            177 => 
            array (
                'id' => 626,
                'name' => 'East Timor',
                'iso' => 'TP',
                'sort' => 1,
                'active' => 1,
            ),
            178 => 
            array (
                'id' => 630,
                'name' => 'Puerto Rico',
                'iso' => 'PR',
                'sort' => 1,
                'active' => 1,
            ),
            179 => 
            array (
                'id' => 634,
                'name' => 'Qatar',
                'iso' => 'QA',
                'sort' => 1,
                'active' => 1,
            ),
            180 => 
            array (
                'id' => 638,
                'name' => 'Reunion',
                'iso' => 'RE',
                'sort' => 1,
                'active' => 1,
            ),
            181 => 
            array (
                'id' => 642,
                'name' => 'Romania',
                'iso' => 'RO',
                'sort' => 1,
                'active' => 1,
            ),
            182 => 
            array (
                'id' => 643,
                'name' => 'Russia',
                'iso' => 'RU',
                'sort' => 1,
                'active' => 1,
            ),
            183 => 
            array (
                'id' => 646,
                'name' => 'Rwanda',
                'iso' => 'RW',
                'sort' => 1,
                'active' => 1,
            ),
            184 => 
            array (
                'id' => 652,
                'name' => 'Saint Barthélemy',
                'iso' => 'BL',
                'sort' => 1,
                'active' => 1,
            ),
            185 => 
            array (
                'id' => 654,
                'name' => 'Saint Helena',
                'iso' => 'SH',
                'sort' => 1,
                'active' => 1,
            ),
            186 => 
            array (
                'id' => 659,
                'name' => 'Saint Kitts and Nevis',
                'iso' => 'KN',
                'sort' => 1,
                'active' => 1,
            ),
            187 => 
            array (
                'id' => 660,
                'name' => 'Anguilla',
                'iso' => 'AI',
                'sort' => 1,
                'active' => 1,
            ),
            188 => 
            array (
                'id' => 662,
                'name' => 'Saint Lucia',
                'iso' => 'LC',
                'sort' => 1,
                'active' => 1,
            ),
            189 => 
            array (
                'id' => 663,
                'name' => 'Saint Martin',
                'iso' => 'MF',
                'sort' => 1,
                'active' => 1,
            ),
            190 => 
            array (
                'id' => 666,
                'name' => 'Saint Pierre and Miquelon',
                'iso' => 'PM',
                'sort' => 1,
                'active' => 1,
            ),
            191 => 
            array (
                'id' => 670,
                'name' => 'Saint Vincent and the Grenadines',
                'iso' => 'VC',
                'sort' => 1,
                'active' => 1,
            ),
            192 => 
            array (
                'id' => 674,
                'name' => 'San Marino',
                'iso' => 'SM',
                'sort' => 1,
                'active' => 1,
            ),
            193 => 
            array (
                'id' => 678,
                'name' => 'Sao Tome and Principe',
                'iso' => 'ST',
                'sort' => 1,
                'active' => 1,
            ),
            194 => 
            array (
                'id' => 682,
                'name' => 'Saudi Arabia',
                'iso' => 'SA',
                'sort' => 1,
                'active' => 1,
            ),
            195 => 
            array (
                'id' => 686,
                'name' => 'Senegal',
                'iso' => 'SN',
                'sort' => 1,
                'active' => 1,
            ),
            196 => 
            array (
                'id' => 688,
                'name' => 'Serbia',
                'iso' => 'RS',
                'sort' => 1,
                'active' => 1,
            ),
            197 => 
            array (
                'id' => 690,
                'name' => 'Seychelles',
                'iso' => 'SC',
                'sort' => 1,
                'active' => 1,
            ),
            198 => 
            array (
                'id' => 694,
                'name' => 'Sierra Leone',
                'iso' => 'SL',
                'sort' => 1,
                'active' => 1,
            ),
            199 => 
            array (
                'id' => 702,
                'name' => 'Singapore',
                'iso' => 'SG',
                'sort' => 1,
                'active' => 1,
            ),
            200 => 
            array (
                'id' => 703,
                'name' => 'Slovakia',
                'iso' => 'SK',
                'sort' => 1,
                'active' => 1,
            ),
            201 => 
            array (
                'id' => 704,
                'name' => 'Vietnam',
                'iso' => 'VN',
                'sort' => 1,
                'active' => 1,
            ),
            202 => 
            array (
                'id' => 705,
                'name' => 'Slovenia',
                'iso' => 'SI',
                'sort' => 1,
                'active' => 1,
            ),
            203 => 
            array (
                'id' => 706,
                'name' => 'Somalia',
                'iso' => 'SO',
                'sort' => 1,
                'active' => 1,
            ),
            204 => 
            array (
                'id' => 710,
                'name' => 'South Africa',
                'iso' => 'ZA',
                'sort' => 1,
                'active' => 1,
            ),
            205 => 
            array (
                'id' => 716,
                'name' => 'Zimbabwe',
                'iso' => 'ZW',
                'sort' => 1,
                'active' => 1,
            ),
            206 => 
            array (
                'id' => 724,
                'name' => 'Spain',
                'iso' => 'ES',
                'sort' => 1,
                'active' => 1,
            ),
            207 => 
            array (
                'id' => 732,
                'name' => 'Western Sahara',
                'iso' => 'EH',
                'sort' => 1,
                'active' => 1,
            ),
            208 => 
            array (
                'id' => 736,
                'name' => 'Sudan',
                'iso' => 'SD',
                'sort' => 1,
                'active' => 1,
            ),
            209 => 
            array (
                'id' => 740,
                'name' => 'Suriname',
                'iso' => 'SR',
                'sort' => 1,
                'active' => 1,
            ),
            210 => 
            array (
                'id' => 744,
                'name' => 'Svalbard and Jan Mayen',
                'iso' => 'SJ',
                'sort' => 1,
                'active' => 1,
            ),
            211 => 
            array (
                'id' => 748,
                'name' => 'Swaziland',
                'iso' => 'SZ',
                'sort' => 1,
                'active' => 1,
            ),
            212 => 
            array (
                'id' => 752,
                'name' => 'Sweden',
                'iso' => 'SE',
                'sort' => 1,
                'active' => 1,
            ),
            213 => 
            array (
                'id' => 756,
                'name' => 'Switzerland',
                'iso' => 'CH',
                'sort' => 1,
                'active' => 1,
            ),
            214 => 
            array (
                'id' => 760,
                'name' => 'Syria',
                'iso' => 'SY',
                'sort' => 1,
                'active' => 1,
            ),
            215 => 
            array (
                'id' => 762,
                'name' => 'Tajikistan',
                'iso' => 'TJ',
                'sort' => 1,
                'active' => 1,
            ),
            216 => 
            array (
                'id' => 764,
                'name' => 'Thailand',
                'iso' => 'TH',
                'sort' => 1,
                'active' => 1,
            ),
            217 => 
            array (
                'id' => 768,
                'name' => 'Togo',
                'iso' => 'TG',
                'sort' => 1,
                'active' => 1,
            ),
            218 => 
            array (
                'id' => 772,
                'name' => 'Tokelau',
                'iso' => 'TK',
                'sort' => 1,
                'active' => 1,
            ),
            219 => 
            array (
                'id' => 776,
                'name' => 'Tonga',
                'iso' => 'TO',
                'sort' => 1,
                'active' => 1,
            ),
            220 => 
            array (
                'id' => 780,
                'name' => 'Trinidad and Tobago',
                'iso' => 'TT',
                'sort' => 1,
                'active' => 1,
            ),
            221 => 
            array (
                'id' => 784,
                'name' => 'United Arab Emirates',
                'iso' => 'AE',
                'sort' => 1,
                'active' => 1,
            ),
            222 => 
            array (
                'id' => 788,
                'name' => 'Tunisia',
                'iso' => 'TN',
                'sort' => 1,
                'active' => 1,
            ),
            223 => 
            array (
                'id' => 792,
                'name' => 'Turkey',
                'iso' => 'TR',
                'sort' => 1,
                'active' => 1,
            ),
            224 => 
            array (
                'id' => 795,
                'name' => 'Turkmenistan',
                'iso' => 'TM',
                'sort' => 1,
                'active' => 1,
            ),
            225 => 
            array (
                'id' => 796,
                'name' => 'Turks and Caicos Islands',
                'iso' => 'TC',
                'sort' => 1,
                'active' => 1,
            ),
            226 => 
            array (
                'id' => 798,
                'name' => 'Tuvalu',
                'iso' => 'TV',
                'sort' => 1,
                'active' => 1,
            ),
            227 => 
            array (
                'id' => 800,
                'name' => 'Uganda',
                'iso' => 'UG',
                'sort' => 1,
                'active' => 1,
            ),
            228 => 
            array (
                'id' => 804,
                'name' => 'Ukraine',
                'iso' => 'UA',
                'sort' => 1,
                'active' => 1,
            ),
            229 => 
            array (
                'id' => 807,
                'name' => 'Macedonia',
                'iso' => 'MK',
                'sort' => 1,
                'active' => 1,
            ),
            230 => 
            array (
                'id' => 818,
                'name' => 'Egypt',
                'iso' => 'EG',
                'sort' => 1,
                'active' => 1,
            ),
            231 => 
            array (
                'id' => 826,
                'name' => 'United Kingdom',
                'iso' => 'UK',
                'sort' => 1,
                'active' => 1,
            ),
            232 => 
            array (
                'id' => 831,
                'name' => 'Guernsey',
                'iso' => 'GG',
                'sort' => 1,
                'active' => 1,
            ),
            233 => 
            array (
                'id' => 832,
                'name' => 'Jersey',
                'iso' => 'JE',
                'sort' => 1,
                'active' => 1,
            ),
            234 => 
            array (
                'id' => 833,
                'name' => 'Isle of Man',
                'iso' => 'IM',
                'sort' => 1,
                'active' => 1,
            ),
            235 => 
            array (
                'id' => 834,
                'name' => 'Tanzania',
                'iso' => 'TZ',
                'sort' => 1,
                'active' => 1,
            ),
            236 => 
            array (
                'id' => 840,
                'name' => 'United States',
                'iso' => 'US',
                'sort' => 0,
                'active' => 1,
            ),
            237 => 
            array (
                'id' => 850,
                'name' => 'U.S. Virgin Islands',
                'iso' => 'VI',
                'sort' => 1,
                'active' => 1,
            ),
            238 => 
            array (
                'id' => 854,
                'name' => 'Burkina Faso',
                'iso' => 'BF',
                'sort' => 1,
                'active' => 1,
            ),
            239 => 
            array (
                'id' => 855,
                'name' => 'Kosovo',
                'iso' => 'XK',
                'sort' => 1,
                'active' => 1,
            ),
            240 => 
            array (
                'id' => 858,
                'name' => 'Uruguay',
                'iso' => 'UY',
                'sort' => 1,
                'active' => 1,
            ),
            241 => 
            array (
                'id' => 860,
                'name' => 'Uzbekistan',
                'iso' => 'UZ',
                'sort' => 1,
                'active' => 1,
            ),
            242 => 
            array (
                'id' => 862,
                'name' => 'Venezuela',
                'iso' => 'VE',
                'sort' => 1,
                'active' => 1,
            ),
            243 => 
            array (
                'id' => 876,
                'name' => 'Wallis and Futuna',
                'iso' => 'WF',
                'sort' => 1,
                'active' => 1,
            ),
            244 => 
            array (
                'id' => 882,
                'name' => 'Samoa',
                'iso' => 'WS',
                'sort' => 1,
                'active' => 1,
            ),
            245 => 
            array (
                'id' => 887,
                'name' => 'Yemen',
                'iso' => 'YE',
                'sort' => 1,
                'active' => 1,
            ),
            246 => 
            array (
                'id' => 891,
                'name' => 'Serbia and Montenegro',
                'iso' => 'CS',
                'sort' => 1,
                'active' => 1,
            ),
            247 => 
            array (
                'id' => 894,
                'name' => 'Zambia',
                'iso' => 'ZM',
                'sort' => 1,
                'active' => 1,
            ),
        ));
        
        
    }
}

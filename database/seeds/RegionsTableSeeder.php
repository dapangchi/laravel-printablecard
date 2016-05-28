<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Badakhshan',
                'timezone' => 'Asia/Kabul',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Badghis Province',
                'timezone' => 'Asia/Kabul',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Baghlān',
                'timezone' => 'Asia/Kabul',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Bāmīān',
                'timezone' => 'Asia/Kabul',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Farah',
                'timezone' => 'Asia/Kabul',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Faryab Province',
                'timezone' => 'Asia/Kabul',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Ghaznī',
                'timezone' => 'Asia/Kabul',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Ghowr',
                'timezone' => 'Asia/Kabul',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Helmand Province',
                'timezone' => 'Asia/Kabul',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Herat Province',
                'timezone' => 'Asia/Kabul',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Kabul',
                'timezone' => 'Asia/Kabul',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Kāpīsā',
                'timezone' => 'Asia/Kabul',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Lowgar',
                'timezone' => 'Asia/Kabul',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Nangarhār',
                'timezone' => 'Asia/Kabul',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Nīmrūz',
                'timezone' => 'Asia/Kabul',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Orūzgān',
                'timezone' => 'Asia/Kabul',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Kandahār',
                'timezone' => 'Asia/Kabul',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Kunduz Province',
                'timezone' => 'Asia/Kabul',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Takhār',
                'timezone' => 'Asia/Kabul',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Vardak',
                'timezone' => 'Asia/Kabul',
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Zabul Province',
                'timezone' => 'Asia/Kabul',
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Paktīkā',
                'timezone' => 'Asia/Kabul',
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Balkh',
                'timezone' => 'Asia/Kabul',
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Jowzjān',
                'timezone' => 'Asia/Kabul',
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Samangān',
                'timezone' => 'Asia/Kabul',
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Sar-e Pol',
                'timezone' => 'Asia/Kabul',
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Konar',
                'timezone' => 'Asia/Kabul',
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Laghmān',
                'timezone' => 'Asia/Kabul',
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Paktia Province',
                'timezone' => 'Asia/Kabul',
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Khowst',
                'timezone' => 'Asia/Kabul',
            ),
            30 => 
            array (
                'id' => 31,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Nūrestān',
                'timezone' => 'Asia/Kabul',
            ),
            31 => 
            array (
                'id' => 32,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Parvān',
                'timezone' => 'Asia/Kabul',
            ),
            32 => 
            array (
                'id' => 33,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Dāykondī',
                'timezone' => 'Asia/Kabul',
            ),
            33 => 
            array (
                'id' => 34,
                'country_id' => 4,
                'iso' => '',
                'name' => 'Panjshīr',
                'timezone' => 'Asia/Kabul',
            ),
            34 => 
            array (
                'id' => 35,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Berat',
                'timezone' => 'Europe/Tirane',
            ),
            35 => 
            array (
                'id' => 36,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Dibër',
                'timezone' => 'Europe/Tirane',
            ),
            36 => 
            array (
                'id' => 37,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Durrës',
                'timezone' => 'Europe/Tirane',
            ),
            37 => 
            array (
                'id' => 38,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Elbasan',
                'timezone' => 'Europe/Tirane',
            ),
            38 => 
            array (
                'id' => 39,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Fier',
                'timezone' => 'Europe/Tirane',
            ),
            39 => 
            array (
                'id' => 40,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Gjirokastër',
                'timezone' => 'Europe/Tirane',
            ),
            40 => 
            array (
                'id' => 41,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Korçë',
                'timezone' => 'Europe/Tirane',
            ),
            41 => 
            array (
                'id' => 42,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Kukës',
                'timezone' => 'Europe/Tirane',
            ),
            42 => 
            array (
                'id' => 43,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Lezhë',
                'timezone' => 'Europe/Tirane',
            ),
            43 => 
            array (
                'id' => 44,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Shkodër',
                'timezone' => 'Europe/Tirane',
            ),
            44 => 
            array (
                'id' => 45,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Tiranë',
                'timezone' => 'Europe/Tirane',
            ),
            45 => 
            array (
                'id' => 46,
                'country_id' => 8,
                'iso' => '',
                'name' => 'Vlorë',
                'timezone' => 'Europe/Tirane',
            ),
            46 => 
            array (
                'id' => 47,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Alger',
                'timezone' => 'Africa/Algiers',
            ),
            47 => 
            array (
                'id' => 48,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Batna',
                'timezone' => 'Africa/Algiers',
            ),
            48 => 
            array (
                'id' => 49,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Constantine',
                'timezone' => 'Africa/Algiers',
            ),
            49 => 
            array (
                'id' => 50,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Médéa',
                'timezone' => 'Africa/Algiers',
            ),
            50 => 
            array (
                'id' => 51,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Mostaganem',
                'timezone' => 'Africa/Algiers',
            ),
            51 => 
            array (
                'id' => 52,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Oran',
                'timezone' => 'Africa/Algiers',
            ),
            52 => 
            array (
                'id' => 53,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Saïda',
                'timezone' => 'Africa/Algiers',
            ),
            53 => 
            array (
                'id' => 54,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Sétif',
                'timezone' => 'Africa/Algiers',
            ),
            54 => 
            array (
                'id' => 55,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tiaret',
                'timezone' => 'Africa/Algiers',
            ),
            55 => 
            array (
                'id' => 56,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tizi Ouzou',
                'timezone' => 'Africa/Algiers',
            ),
            56 => 
            array (
                'id' => 57,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tlemcen',
                'timezone' => 'Africa/Algiers',
            ),
            57 => 
            array (
                'id' => 58,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Bejaïa',
                'timezone' => 'Africa/Algiers',
            ),
            58 => 
            array (
                'id' => 59,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Biskra',
                'timezone' => 'Africa/Algiers',
            ),
            59 => 
            array (
                'id' => 60,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Blida',
                'timezone' => 'Africa/Algiers',
            ),
            60 => 
            array (
                'id' => 61,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Bouira',
                'timezone' => 'Africa/Algiers',
            ),
            61 => 
            array (
                'id' => 62,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Djelfa',
                'timezone' => 'Africa/Algiers',
            ),
            62 => 
            array (
                'id' => 63,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Guelma',
                'timezone' => 'Africa/Algiers',
            ),
            63 => 
            array (
                'id' => 64,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Jijel',
                'timezone' => 'Africa/Algiers',
            ),
            64 => 
            array (
                'id' => 65,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Laghouat',
                'timezone' => 'Africa/Algiers',
            ),
            65 => 
            array (
                'id' => 66,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Mascara',
                'timezone' => 'Africa/Algiers',
            ),
            66 => 
            array (
                'id' => 67,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Mʼsila',
                'timezone' => 'Africa/Algiers',
            ),
            67 => 
            array (
                'id' => 68,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Oum el Bouaghi',
                'timezone' => 'Africa/Algiers',
            ),
            68 => 
            array (
                'id' => 69,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Sidi Bel Abbès',
                'timezone' => 'Africa/Algiers',
            ),
            69 => 
            array (
                'id' => 70,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Skikda',
                'timezone' => 'Africa/Algiers',
            ),
            70 => 
            array (
                'id' => 71,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tébessa',
                'timezone' => 'Africa/Algiers',
            ),
            71 => 
            array (
                'id' => 72,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Adrar',
                'timezone' => 'Africa/Algiers',
            ),
            72 => 
            array (
                'id' => 73,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Aïn Defla',
                'timezone' => 'Africa/Algiers',
            ),
            73 => 
            array (
                'id' => 74,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Aïn Temouchent',
                'timezone' => 'Africa/Algiers',
            ),
            74 => 
            array (
                'id' => 75,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Annaba',
                'timezone' => 'Africa/Algiers',
            ),
            75 => 
            array (
                'id' => 76,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Béchar',
                'timezone' => 'Africa/Algiers',
            ),
            76 => 
            array (
                'id' => 77,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Bordj Bou Arréridj',
                'timezone' => 'Africa/Algiers',
            ),
            77 => 
            array (
                'id' => 78,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Boumerdes',
                'timezone' => 'Africa/Algiers',
            ),
            78 => 
            array (
                'id' => 79,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Chlef',
                'timezone' => 'Africa/Algiers',
            ),
            79 => 
            array (
                'id' => 80,
                'country_id' => 12,
                'iso' => '',
                'name' => 'El Bayadh',
                'timezone' => 'Africa/Algiers',
            ),
            80 => 
            array (
                'id' => 81,
                'country_id' => 12,
                'iso' => '',
                'name' => 'El Oued',
                'timezone' => 'Africa/Algiers',
            ),
            81 => 
            array (
                'id' => 82,
                'country_id' => 12,
                'iso' => '',
                'name' => 'El Tarf',
                'timezone' => 'Africa/Algiers',
            ),
            82 => 
            array (
                'id' => 83,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Ghardaïa',
                'timezone' => 'Africa/Algiers',
            ),
            83 => 
            array (
                'id' => 84,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Illizi',
                'timezone' => 'Africa/Algiers',
            ),
            84 => 
            array (
                'id' => 85,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Khenchela',
                'timezone' => 'Africa/Algiers',
            ),
            85 => 
            array (
                'id' => 86,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Mila',
                'timezone' => 'Africa/Algiers',
            ),
            86 => 
            array (
                'id' => 87,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Naama النعامة',
                'timezone' => 'Africa/Algiers',
            ),
            87 => 
            array (
                'id' => 88,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Ouargla',
                'timezone' => 'Africa/Algiers',
            ),
            88 => 
            array (
                'id' => 89,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Relizane',
                'timezone' => 'Africa/Algiers',
            ),
            89 => 
            array (
                'id' => 90,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Souk Ahras',
                'timezone' => 'Africa/Algiers',
            ),
            90 => 
            array (
                'id' => 91,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tamanghasset',
                'timezone' => 'Africa/Algiers',
            ),
            91 => 
            array (
                'id' => 92,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tindouf',
                'timezone' => 'Africa/Algiers',
            ),
            92 => 
            array (
                'id' => 93,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tipaza',
                'timezone' => 'Africa/Algiers',
            ),
            93 => 
            array (
                'id' => 94,
                'country_id' => 12,
                'iso' => '',
                'name' => 'Tissemsilt',
                'timezone' => 'Africa/Algiers',
            ),
            94 => 
            array (
                'id' => 95,
                'country_id' => 16,
                'iso' => '',
                'name' => 'American Samoa',
                'timezone' => 'Pacific/Pago_Pago',
            ),
            95 => 
            array (
                'id' => 96,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia de Canillo',
                'timezone' => 'Europe/Andorra',
            ),
            96 => 
            array (
                'id' => 97,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia dʼEncamp',
                'timezone' => 'Europe/Andorra',
            ),
            97 => 
            array (
                'id' => 98,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia de la Massana',
                'timezone' => 'Europe/Andorra',
            ),
            98 => 
            array (
                'id' => 99,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia dʼOrdino',
                'timezone' => 'Europe/Andorra',
            ),
            99 => 
            array (
                'id' => 100,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia de Sant Julià de Lòria',
                'timezone' => 'Europe/Andorra',
            ),
            100 => 
            array (
                'id' => 101,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia dʼAndorra la Vella',
                'timezone' => 'Europe/Andorra',
            ),
            101 => 
            array (
                'id' => 102,
                'country_id' => 20,
                'iso' => '',
                'name' => 'Parròquia dʼEscaldes-Engordany',
                'timezone' => 'Europe/Andorra',
            ),
            102 => 
            array (
                'id' => 103,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Benguela',
                'timezone' => 'Africa/Luanda',
            ),
            103 => 
            array (
                'id' => 104,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Bié',
                'timezone' => 'Africa/Luanda',
            ),
            104 => 
            array (
                'id' => 105,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Cabinda',
                'timezone' => 'Africa/Luanda',
            ),
            105 => 
            array (
                'id' => 106,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Cuando Cubango',
                'timezone' => 'Africa/Luanda',
            ),
            106 => 
            array (
                'id' => 107,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Cuanza Norte',
                'timezone' => 'Africa/Luanda',
            ),
            107 => 
            array (
                'id' => 108,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Cuanza Sul',
                'timezone' => 'Africa/Luanda',
            ),
            108 => 
            array (
                'id' => 109,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Cunene',
                'timezone' => 'Africa/Luanda',
            ),
            109 => 
            array (
                'id' => 110,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Huambo',
                'timezone' => 'Africa/Luanda',
            ),
            110 => 
            array (
                'id' => 111,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Huíla',
                'timezone' => 'Africa/Luanda',
            ),
            111 => 
            array (
                'id' => 112,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Luanda',
                'timezone' => 'Africa/Luanda',
            ),
            112 => 
            array (
                'id' => 113,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Malanje',
                'timezone' => 'Africa/Luanda',
            ),
            113 => 
            array (
                'id' => 114,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Namibe',
                'timezone' => 'Africa/Luanda',
            ),
            114 => 
            array (
                'id' => 115,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Moxico',
                'timezone' => 'Africa/Luanda',
            ),
            115 => 
            array (
                'id' => 116,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Uíge',
                'timezone' => 'Africa/Luanda',
            ),
            116 => 
            array (
                'id' => 117,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Zaire',
                'timezone' => 'Africa/Luanda',
            ),
            117 => 
            array (
                'id' => 118,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Lunda Norte',
                'timezone' => 'Africa/Luanda',
            ),
            118 => 
            array (
                'id' => 119,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Lunda Sul',
                'timezone' => 'Africa/Luanda',
            ),
            119 => 
            array (
                'id' => 120,
                'country_id' => 24,
                'iso' => '',
                'name' => 'Bengo',
                'timezone' => 'Africa/Luanda',
            ),
            120 => 
            array (
                'id' => 121,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Redonda',
                'timezone' => 'America/Antigua',
            ),
            121 => 
            array (
                'id' => 122,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Barbuda',
                'timezone' => 'America/Antigua',
            ),
            122 => 
            array (
                'id' => 123,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Saint George',
                'timezone' => 'America/Antigua',
            ),
            123 => 
            array (
                'id' => 124,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Saint John',
                'timezone' => 'America/Antigua',
            ),
            124 => 
            array (
                'id' => 125,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Saint Mary',
                'timezone' => 'America/Antigua',
            ),
            125 => 
            array (
                'id' => 126,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Saint Paul',
                'timezone' => 'America/Antigua',
            ),
            126 => 
            array (
                'id' => 127,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Saint Peter',
                'timezone' => 'America/Antigua',
            ),
            127 => 
            array (
                'id' => 128,
                'country_id' => 28,
                'iso' => '',
                'name' => 'Saint Philip',
                'timezone' => 'America/Antigua',
            ),
            128 => 
            array (
                'id' => 129,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Abşeron',
                'timezone' => 'Asia/Baku',
            ),
            129 => 
            array (
                'id' => 130,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Ağcabǝdi',
                'timezone' => 'Asia/Baku',
            ),
            130 => 
            array (
                'id' => 131,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Ağdam',
                'timezone' => 'Asia/Baku',
            ),
            131 => 
            array (
                'id' => 132,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Ağdaş',
                'timezone' => 'Asia/Baku',
            ),
            132 => 
            array (
                'id' => 133,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Ağstafa',
                'timezone' => 'Asia/Baku',
            ),
            133 => 
            array (
                'id' => 134,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Ağsu',
                'timezone' => 'Asia/Baku',
            ),
            134 => 
            array (
                'id' => 135,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Əli Bayramli',
                'timezone' => 'Asia/Baku',
            ),
            135 => 
            array (
                'id' => 136,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Astara',
                'timezone' => 'Asia/Baku',
            ),
            136 => 
            array (
                'id' => 137,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Baki',
                'timezone' => 'Asia/Baku',
            ),
            137 => 
            array (
                'id' => 138,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Balakǝn',
                'timezone' => 'Asia/Baku',
            ),
            138 => 
            array (
                'id' => 139,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Bǝrdǝ',
                'timezone' => 'Asia/Baku',
            ),
            139 => 
            array (
                'id' => 140,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Beylǝqan',
                'timezone' => 'Asia/Baku',
            ),
            140 => 
            array (
                'id' => 141,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Bilǝsuvar',
                'timezone' => 'Asia/Baku',
            ),
            141 => 
            array (
                'id' => 142,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Cǝbrayıl',
                'timezone' => 'Asia/Baku',
            ),
            142 => 
            array (
                'id' => 143,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Cǝlilabad',
                'timezone' => 'Asia/Baku',
            ),
            143 => 
            array (
                'id' => 144,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Daşkǝsǝn',
                'timezone' => 'Asia/Baku',
            ),
            144 => 
            array (
                'id' => 145,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Dǝvǝçi',
                'timezone' => 'Asia/Baku',
            ),
            145 => 
            array (
                'id' => 146,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Füzuli',
                'timezone' => 'Asia/Baku',
            ),
            146 => 
            array (
                'id' => 147,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Gǝdǝbǝy',
                'timezone' => 'Asia/Baku',
            ),
            147 => 
            array (
                'id' => 148,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Gǝncǝ',
                'timezone' => 'Asia/Baku',
            ),
            148 => 
            array (
                'id' => 149,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Goranboy',
                'timezone' => 'Asia/Baku',
            ),
            149 => 
            array (
                'id' => 150,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Göyçay',
                'timezone' => 'Asia/Baku',
            ),
            150 => 
            array (
                'id' => 151,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Hacıqabul',
                'timezone' => 'Asia/Baku',
            ),
            151 => 
            array (
                'id' => 152,
                'country_id' => 31,
                'iso' => '',
                'name' => 'İmişli',
                'timezone' => 'Asia/Baku',
            ),
            152 => 
            array (
                'id' => 153,
                'country_id' => 31,
                'iso' => '',
                'name' => 'İsmayıllı',
                'timezone' => 'Asia/Baku',
            ),
            153 => 
            array (
                'id' => 154,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Kǝlbǝcǝr',
                'timezone' => 'Asia/Baku',
            ),
            154 => 
            array (
                'id' => 155,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Kürdǝmir',
                'timezone' => 'Asia/Baku',
            ),
            155 => 
            array (
                'id' => 156,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Laçın',
                'timezone' => 'Asia/Baku',
            ),
            156 => 
            array (
                'id' => 157,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Lǝnkǝran',
                'timezone' => 'Asia/Baku',
            ),
            157 => 
            array (
                'id' => 158,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Lǝnkǝran Şǝhǝri',
                'timezone' => 'Asia/Baku',
            ),
            158 => 
            array (
                'id' => 159,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Lerik',
                'timezone' => 'Asia/Baku',
            ),
            159 => 
            array (
                'id' => 160,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Masallı',
                'timezone' => 'Asia/Baku',
            ),
            160 => 
            array (
                'id' => 161,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Mingǝcevir',
                'timezone' => 'Asia/Baku',
            ),
            161 => 
            array (
                'id' => 162,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Naftalan',
                'timezone' => 'Asia/Baku',
            ),
            162 => 
            array (
                'id' => 163,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Nakhichevan',
                'timezone' => 'Asia/Baku',
            ),
            163 => 
            array (
                'id' => 164,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Neftçala',
                'timezone' => 'Asia/Baku',
            ),
            164 => 
            array (
                'id' => 165,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Oğuz',
                'timezone' => 'Asia/Baku',
            ),
            165 => 
            array (
                'id' => 166,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Qǝbǝlǝ',
                'timezone' => 'Asia/Baku',
            ),
            166 => 
            array (
                'id' => 167,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Qǝx',
                'timezone' => 'Asia/Baku',
            ),
            167 => 
            array (
                'id' => 168,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Qazax',
                'timezone' => 'Asia/Baku',
            ),
            168 => 
            array (
                'id' => 169,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Qobustan',
                'timezone' => 'Asia/Baku',
            ),
            169 => 
            array (
                'id' => 170,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Quba',
                'timezone' => 'Asia/Baku',
            ),
            170 => 
            array (
                'id' => 171,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Qubadlı',
                'timezone' => 'Asia/Baku',
            ),
            171 => 
            array (
                'id' => 172,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Qusar',
                'timezone' => 'Asia/Baku',
            ),
            172 => 
            array (
                'id' => 173,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Saatlı',
                'timezone' => 'Asia/Baku',
            ),
            173 => 
            array (
                'id' => 174,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Sabirabad',
                'timezone' => 'Asia/Baku',
            ),
            174 => 
            array (
                'id' => 175,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Şǝki',
                'timezone' => 'Asia/Baku',
            ),
            175 => 
            array (
                'id' => 176,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Şǝki',
                'timezone' => 'Asia/Baku',
            ),
            176 => 
            array (
                'id' => 177,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Salyan',
                'timezone' => 'Asia/Baku',
            ),
            177 => 
            array (
                'id' => 178,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Şamaxı',
                'timezone' => 'Asia/Baku',
            ),
            178 => 
            array (
                'id' => 179,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Şǝmkir',
                'timezone' => 'Asia/Baku',
            ),
            179 => 
            array (
                'id' => 180,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Samux',
                'timezone' => 'Asia/Baku',
            ),
            180 => 
            array (
                'id' => 181,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Siyǝzǝn',
                'timezone' => 'Asia/Baku',
            ),
            181 => 
            array (
                'id' => 182,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Sumqayit',
                'timezone' => 'Asia/Baku',
            ),
            182 => 
            array (
                'id' => 183,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Şuşa',
                'timezone' => 'Asia/Baku',
            ),
            183 => 
            array (
                'id' => 184,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Şuşa Şəhəri',
                'timezone' => 'Asia/Baku',
            ),
            184 => 
            array (
                'id' => 185,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Tǝrtǝr',
                'timezone' => 'Asia/Baku',
            ),
            185 => 
            array (
                'id' => 186,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Tovuz',
                'timezone' => 'Asia/Baku',
            ),
            186 => 
            array (
                'id' => 187,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Ucar',
                'timezone' => 'Asia/Baku',
            ),
            187 => 
            array (
                'id' => 188,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Xaçmaz',
                'timezone' => 'Asia/Baku',
            ),
            188 => 
            array (
                'id' => 189,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Xankǝndi',
                'timezone' => 'Asia/Baku',
            ),
            189 => 
            array (
                'id' => 190,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Xanlar',
                'timezone' => 'Asia/Baku',
            ),
            190 => 
            array (
                'id' => 191,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Xızı',
                'timezone' => 'Asia/Baku',
            ),
            191 => 
            array (
                'id' => 192,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Xocalı',
                'timezone' => 'Asia/Baku',
            ),
            192 => 
            array (
                'id' => 193,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Xocavǝnd',
                'timezone' => 'Asia/Baku',
            ),
            193 => 
            array (
                'id' => 194,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Yardımlı',
                'timezone' => 'Asia/Baku',
            ),
            194 => 
            array (
                'id' => 195,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Yevlax',
                'timezone' => 'Asia/Baku',
            ),
            195 => 
            array (
                'id' => 196,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Yevlax',
                'timezone' => 'Asia/Baku',
            ),
            196 => 
            array (
                'id' => 197,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Zǝngilan',
                'timezone' => 'Asia/Baku',
            ),
            197 => 
            array (
                'id' => 198,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Zaqatala',
                'timezone' => 'Asia/Baku',
            ),
            198 => 
            array (
                'id' => 199,
                'country_id' => 31,
                'iso' => '',
                'name' => 'Zǝrdab',
                'timezone' => 'Asia/Baku',
            ),
            199 => 
            array (
                'id' => 200,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Buenos Aires',
                'timezone' => 'America/Argentina/Buenos_Aires',
            ),
            200 => 
            array (
                'id' => 201,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Catamarca',
                'timezone' => 'America/Argentina/Catamarca',
            ),
            201 => 
            array (
                'id' => 202,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Chaco',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            202 => 
            array (
                'id' => 203,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Chubut',
                'timezone' => 'America/Argentina/Catamarca',
            ),
            203 => 
            array (
                'id' => 204,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Córdoba',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            204 => 
            array (
                'id' => 205,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Corrientes',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            205 => 
            array (
                'id' => 206,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Distrito Federal',
                'timezone' => 'America/Argentina/Buenos_Aires',
            ),
            206 => 
            array (
                'id' => 207,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Entre Ríos',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            207 => 
            array (
                'id' => 208,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Formosa',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            208 => 
            array (
                'id' => 209,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Jujuy',
                'timezone' => 'America/Argentina/Jujuy',
            ),
            209 => 
            array (
                'id' => 210,
                'country_id' => 32,
                'iso' => '',
                'name' => 'La Pampa',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            210 => 
            array (
                'id' => 211,
                'country_id' => 32,
                'iso' => '',
                'name' => 'La Rioja',
                'timezone' => 'America/Argentina/La_Rioja',
            ),
            211 => 
            array (
                'id' => 212,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Mendoza',
                'timezone' => 'America/Argentina/Mendoza',
            ),
            212 => 
            array (
                'id' => 213,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Misiones',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            213 => 
            array (
                'id' => 214,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Neuquén',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            214 => 
            array (
                'id' => 215,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Río Negro',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            215 => 
            array (
                'id' => 216,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Salta',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            216 => 
            array (
                'id' => 217,
                'country_id' => 32,
                'iso' => '',
                'name' => 'San Juan',
                'timezone' => 'America/Argentina/San_Juan',
            ),
            217 => 
            array (
                'id' => 218,
                'country_id' => 32,
                'iso' => '',
                'name' => 'San Luis',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            218 => 
            array (
                'id' => 219,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Santa Cruz',
                'timezone' => 'America/Argentina/Rio_Gallegos',
            ),
            219 => 
            array (
                'id' => 220,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Santa Fe',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            220 => 
            array (
                'id' => 221,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Santiago del Estero',
                'timezone' => 'America/Argentina/Cordoba',
            ),
            221 => 
            array (
                'id' => 222,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Tierra del Fuego, Antártida e Islas del Atlán',
                'timezone' => 'America/Argentina/Ushuaia',
            ),
            222 => 
            array (
                'id' => 223,
                'country_id' => 32,
                'iso' => '',
                'name' => 'Tucumán',
                'timezone' => 'America/Argentina/Tucuman',
            ),
            223 => 
            array (
                'id' => 224,
                'country_id' => 36,
                'iso' => '',
                'name' => 'Australian Capital Territory',
                'timezone' => 'Australia/Sydney',
            ),
            224 => 
            array (
                'id' => 225,
                'country_id' => 36,
                'iso' => '',
                'name' => 'New South Wales',
                'timezone' => 'Australia/Sydney',
            ),
            225 => 
            array (
                'id' => 226,
                'country_id' => 36,
                'iso' => '',
                'name' => 'Northern Territory',
                'timezone' => 'Australia/Darwin',
            ),
            226 => 
            array (
                'id' => 227,
                'country_id' => 36,
                'iso' => '',
                'name' => 'Queensland',
                'timezone' => 'Australia/Brisbane',
            ),
            227 => 
            array (
                'id' => 228,
                'country_id' => 36,
                'iso' => '',
                'name' => 'South Australia',
                'timezone' => 'Australia/Adelaide',
            ),
            228 => 
            array (
                'id' => 229,
                'country_id' => 36,
                'iso' => '',
                'name' => 'Tasmania',
                'timezone' => 'Australia/Hobart',
            ),
            229 => 
            array (
                'id' => 230,
                'country_id' => 36,
                'iso' => '',
                'name' => 'Victoria',
                'timezone' => 'Australia/Melbourne',
            ),
            230 => 
            array (
                'id' => 231,
                'country_id' => 36,
                'iso' => '',
                'name' => 'Western Australia',
                'timezone' => 'Australia/Perth',
            ),
            231 => 
            array (
                'id' => 232,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Burgenland',
                'timezone' => 'Europe/Vienna',
            ),
            232 => 
            array (
                'id' => 233,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Carinthia',
                'timezone' => 'Europe/Vienna',
            ),
            233 => 
            array (
                'id' => 234,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Lower Austria',
                'timezone' => 'Europe/Vienna',
            ),
            234 => 
            array (
                'id' => 235,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Upper Austria',
                'timezone' => 'Europe/Vienna',
            ),
            235 => 
            array (
                'id' => 236,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Salzburg',
                'timezone' => 'Europe/Vienna',
            ),
            236 => 
            array (
                'id' => 237,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Styria',
                'timezone' => 'Europe/Vienna',
            ),
            237 => 
            array (
                'id' => 238,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Tyrol',
                'timezone' => 'Europe/Vienna',
            ),
            238 => 
            array (
                'id' => 239,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Vorarlberg',
                'timezone' => 'Europe/Vienna',
            ),
            239 => 
            array (
                'id' => 240,
                'country_id' => 40,
                'iso' => '',
                'name' => 'Vienna',
                'timezone' => 'Europe/Vienna',
            ),
            240 => 
            array (
                'id' => 241,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Bimini',
                'timezone' => 'America/Nassau',
            ),
            241 => 
            array (
                'id' => 242,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Cat Island',
                'timezone' => 'America/Nassau',
            ),
            242 => 
            array (
                'id' => 243,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Inagua',
                'timezone' => 'America/Nassau',
            ),
            243 => 
            array (
                'id' => 244,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Long Island',
                'timezone' => 'America/Nassau',
            ),
            244 => 
            array (
                'id' => 245,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Mayaguana',
                'timezone' => 'America/Nassau',
            ),
            245 => 
            array (
                'id' => 246,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Ragged Island',
                'timezone' => 'America/Nassau',
            ),
            246 => 
            array (
                'id' => 247,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Harbour Island, Eleuthera',
                'timezone' => 'America/Nassau',
            ),
            247 => 
            array (
                'id' => 248,
                'country_id' => 44,
                'iso' => '',
                'name' => 'North Abaco',
                'timezone' => 'America/Nassau',
            ),
            248 => 
            array (
                'id' => 249,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Acklins',
                'timezone' => 'America/Nassau',
            ),
            249 => 
            array (
                'id' => 250,
                'country_id' => 44,
                'iso' => '',
                'name' => 'City of Freeport, Grand Bahama',
                'timezone' => 'America/Nassau',
            ),
            250 => 
            array (
                'id' => 251,
                'country_id' => 44,
                'iso' => '',
                'name' => 'South Andros',
                'timezone' => 'America/Nassau',
            ),
            251 => 
            array (
                'id' => 252,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Hope Town, Abaco',
                'timezone' => 'America/Nassau',
            ),
            252 => 
            array (
                'id' => 253,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Mangrove Cay, Andros',
                'timezone' => 'America/Nassau',
            ),
            253 => 
            array (
                'id' => 254,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Mooreʼs Island, Abaco',
                'timezone' => 'America/Nassau',
            ),
            254 => 
            array (
                'id' => 255,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Rum Cay',
                'timezone' => 'America/Nassau',
            ),
            255 => 
            array (
                'id' => 256,
                'country_id' => 44,
                'iso' => '',
                'name' => 'North Andros',
                'timezone' => 'America/Nassau',
            ),
            256 => 
            array (
                'id' => 257,
                'country_id' => 44,
                'iso' => '',
                'name' => 'North Eleuthera',
                'timezone' => 'America/Nassau',
            ),
            257 => 
            array (
                'id' => 258,
                'country_id' => 44,
                'iso' => '',
                'name' => 'South Eleuthera',
                'timezone' => 'America/Nassau',
            ),
            258 => 
            array (
                'id' => 259,
                'country_id' => 44,
                'iso' => '',
                'name' => 'South Abaco',
                'timezone' => 'America/Nassau',
            ),
            259 => 
            array (
                'id' => 260,
                'country_id' => 44,
                'iso' => '',
                'name' => 'San Salvador',
                'timezone' => 'America/Nassau',
            ),
            260 => 
            array (
                'id' => 261,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Berry Islands',
                'timezone' => 'America/Nassau',
            ),
            261 => 
            array (
                'id' => 262,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Black Point, Exuma',
                'timezone' => 'America/Nassau',
            ),
            262 => 
            array (
                'id' => 263,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Central Abaco',
                'timezone' => 'America/Nassau',
            ),
            263 => 
            array (
                'id' => 264,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Central Andros',
                'timezone' => 'America/Nassau',
            ),
            264 => 
            array (
                'id' => 265,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Central Eleuthera',
                'timezone' => 'America/Nassau',
            ),
            265 => 
            array (
                'id' => 266,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Crooked Island',
                'timezone' => 'America/Nassau',
            ),
            266 => 
            array (
                'id' => 267,
                'country_id' => 44,
                'iso' => '',
                'name' => 'East Grand Bahama',
                'timezone' => 'America/Nassau',
            ),
            267 => 
            array (
                'id' => 268,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Exuma',
                'timezone' => 'America/Nassau',
            ),
            268 => 
            array (
                'id' => 269,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Grand Cay, Abaco',
                'timezone' => 'America/Nassau',
            ),
            269 => 
            array (
                'id' => 270,
                'country_id' => 44,
                'iso' => '',
                'name' => 'Spanish Wells, Eleuthera',
                'timezone' => 'America/Nassau',
            ),
            270 => 
            array (
                'id' => 271,
                'country_id' => 44,
                'iso' => '',
                'name' => 'West Grand Bahama',
                'timezone' => 'America/Nassau',
            ),
            271 => 
            array (
                'id' => 272,
                'country_id' => 48,
                'iso' => '',
                'name' => 'Southern Governate',
                'timezone' => 'Asia/Bahrain',
            ),
            272 => 
            array (
                'id' => 273,
                'country_id' => 48,
                'iso' => '',
                'name' => 'Northern Governate',
                'timezone' => 'Asia/Bahrain',
            ),
            273 => 
            array (
                'id' => 274,
                'country_id' => 48,
                'iso' => '',
                'name' => 'Capital Governate',
                'timezone' => 'Asia/Bahrain',
            ),
            274 => 
            array (
                'id' => 275,
                'country_id' => 48,
                'iso' => '',
                'name' => 'Central Governate',
                'timezone' => 'Asia/Bahrain',
            ),
            275 => 
            array (
                'id' => 276,
                'country_id' => 48,
                'iso' => '',
                'name' => 'Muharraq Governate',
                'timezone' => 'Asia/Bahrain',
            ),
            276 => 
            array (
                'id' => 277,
                'country_id' => 50,
                'iso' => '',
                'name' => 'BG80',
                'timezone' => 'Asia/Dhaka',
            ),
            277 => 
            array (
                'id' => 278,
                'country_id' => 50,
                'iso' => '',
                'name' => 'Dhaka',
                'timezone' => 'Asia/Dhaka',
            ),
            278 => 
            array (
                'id' => 279,
                'country_id' => 50,
                'iso' => '',
                'name' => 'Khulna',
                'timezone' => 'Asia/Dhaka',
            ),
            279 => 
            array (
                'id' => 280,
                'country_id' => 50,
                'iso' => '',
                'name' => 'Rājshāhi',
                'timezone' => 'Asia/Dhaka',
            ),
            280 => 
            array (
                'id' => 281,
                'country_id' => 50,
                'iso' => '',
                'name' => 'Chittagong',
                'timezone' => 'Asia/Dhaka',
            ),
            281 => 
            array (
                'id' => 282,
                'country_id' => 50,
                'iso' => '',
                'name' => 'Barisāl',
                'timezone' => 'Asia/Dhaka',
            ),
            282 => 
            array (
                'id' => 283,
                'country_id' => 50,
                'iso' => '',
                'name' => 'Sylhet',
                'timezone' => 'Asia/Dhaka',
            ),
            283 => 
            array (
                'id' => 284,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Aragatsotn',
                'timezone' => 'Asia/Yerevan',
            ),
            284 => 
            array (
                'id' => 285,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Ararat',
                'timezone' => 'Asia/Yerevan',
            ),
            285 => 
            array (
                'id' => 286,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Armavir',
                'timezone' => 'Asia/Yerevan',
            ),
            286 => 
            array (
                'id' => 287,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Gegharkʼunikʼ',
                'timezone' => 'Asia/Yerevan',
            ),
            287 => 
            array (
                'id' => 288,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Kotaykʼ',
                'timezone' => 'Asia/Yerevan',
            ),
            288 => 
            array (
                'id' => 289,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Lorri',
                'timezone' => 'Asia/Yerevan',
            ),
            289 => 
            array (
                'id' => 290,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Shirak',
                'timezone' => 'Asia/Yerevan',
            ),
            290 => 
            array (
                'id' => 291,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Syunikʼ',
                'timezone' => 'Asia/Yerevan',
            ),
            291 => 
            array (
                'id' => 292,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Tavush',
                'timezone' => 'Asia/Yerevan',
            ),
            292 => 
            array (
                'id' => 293,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Vayotsʼ Dzor',
                'timezone' => 'Asia/Yerevan',
            ),
            293 => 
            array (
                'id' => 294,
                'country_id' => 51,
                'iso' => '',
                'name' => 'Yerevan',
                'timezone' => 'Asia/Yerevan',
            ),
            294 => 
            array (
                'id' => 295,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Christ Church',
                'timezone' => 'America/Barbados',
            ),
            295 => 
            array (
                'id' => 296,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Andrew',
                'timezone' => 'America/Barbados',
            ),
            296 => 
            array (
                'id' => 297,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint George',
                'timezone' => 'America/Barbados',
            ),
            297 => 
            array (
                'id' => 298,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint James',
                'timezone' => 'America/Barbados',
            ),
            298 => 
            array (
                'id' => 299,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint John',
                'timezone' => 'America/Barbados',
            ),
            299 => 
            array (
                'id' => 300,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Joseph',
                'timezone' => 'America/Barbados',
            ),
            300 => 
            array (
                'id' => 301,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Lucy',
                'timezone' => 'America/Barbados',
            ),
            301 => 
            array (
                'id' => 302,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Michael',
                'timezone' => 'America/Barbados',
            ),
            302 => 
            array (
                'id' => 303,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Peter',
                'timezone' => 'America/Barbados',
            ),
            303 => 
            array (
                'id' => 304,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Philip',
                'timezone' => 'America/Barbados',
            ),
            304 => 
            array (
                'id' => 305,
                'country_id' => 52,
                'iso' => '',
                'name' => 'Saint Thomas',
                'timezone' => 'America/Barbados',
            ),
            305 => 
            array (
                'id' => 306,
                'country_id' => 56,
                'iso' => '',
                'name' => 'Bruxelles-Capitale',
                'timezone' => 'Europe/Brussels',
            ),
            306 => 
            array (
                'id' => 307,
                'country_id' => 56,
                'iso' => '',
                'name' => 'Flanders',
                'timezone' => 'Europe/Brussels',
            ),
            307 => 
            array (
                'id' => 308,
                'country_id' => 56,
                'iso' => '',
                'name' => 'Wallonia',
                'timezone' => 'Europe/Brussels',
            ),
            308 => 
            array (
                'id' => 309,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Devonshire',
                'timezone' => 'Atlantic/Bermuda',
            ),
            309 => 
            array (
                'id' => 310,
                'country_id' => 60,
                'iso' => '',
            'name' => 'Hamilton (parish)',
                'timezone' => 'Atlantic/Bermuda',
            ),
            310 => 
            array (
                'id' => 311,
                'country_id' => 60,
                'iso' => '',
            'name' => 'Hamilton (city)',
                'timezone' => 'Atlantic/Bermuda',
            ),
            311 => 
            array (
                'id' => 312,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Paget',
                'timezone' => 'Atlantic/Bermuda',
            ),
            312 => 
            array (
                'id' => 313,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Pembroke',
                'timezone' => 'Atlantic/Bermuda',
            ),
            313 => 
            array (
                'id' => 314,
                'country_id' => 60,
                'iso' => '',
            'name' => 'Saint Georgeʼs (parish)',
                'timezone' => 'Atlantic/Bermuda',
            ),
            314 => 
            array (
                'id' => 315,
                'country_id' => 60,
                'iso' => '',
            'name' => 'Saint Georgeʼs (city)',
                'timezone' => 'Atlantic/Bermuda',
            ),
            315 => 
            array (
                'id' => 316,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Sandys',
                'timezone' => 'Atlantic/Bermuda',
            ),
            316 => 
            array (
                'id' => 317,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Smithʼs',
                'timezone' => 'Atlantic/Bermuda',
            ),
            317 => 
            array (
                'id' => 318,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Southampton',
                'timezone' => 'Atlantic/Bermuda',
            ),
            318 => 
            array (
                'id' => 319,
                'country_id' => 60,
                'iso' => '',
                'name' => 'Warwick',
                'timezone' => 'Atlantic/Bermuda',
            ),
            319 => 
            array (
                'id' => 320,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Bumthang',
                'timezone' => 'Asia/Thimphu',
            ),
            320 => 
            array (
                'id' => 321,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Chhukha',
                'timezone' => 'Asia/Thimphu',
            ),
            321 => 
            array (
                'id' => 322,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Chirang',
                'timezone' => 'Asia/Thimphu',
            ),
            322 => 
            array (
                'id' => 323,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Daga',
                'timezone' => 'Asia/Thimphu',
            ),
            323 => 
            array (
                'id' => 324,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Geylegphug',
                'timezone' => 'Asia/Thimphu',
            ),
            324 => 
            array (
                'id' => 325,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Ha',
                'timezone' => 'Asia/Thimphu',
            ),
            325 => 
            array (
                'id' => 326,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Lhuntshi',
                'timezone' => 'Asia/Thimphu',
            ),
            326 => 
            array (
                'id' => 327,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Mongar',
                'timezone' => 'Asia/Thimphu',
            ),
            327 => 
            array (
                'id' => 328,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Paro District',
                'timezone' => 'Asia/Thimphu',
            ),
            328 => 
            array (
                'id' => 329,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Pemagatsel',
                'timezone' => 'Asia/Thimphu',
            ),
            329 => 
            array (
                'id' => 330,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Samchi',
                'timezone' => 'Asia/Thimphu',
            ),
            330 => 
            array (
                'id' => 331,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Samdrup Jongkhar District',
                'timezone' => 'Asia/Thimphu',
            ),
            331 => 
            array (
                'id' => 332,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Shemgang',
                'timezone' => 'Asia/Thimphu',
            ),
            332 => 
            array (
                'id' => 333,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Tashigang',
                'timezone' => 'Asia/Thimphu',
            ),
            333 => 
            array (
                'id' => 334,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Thimphu',
                'timezone' => 'Asia/Thimphu',
            ),
            334 => 
            array (
                'id' => 335,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Tongsa',
                'timezone' => 'Asia/Thimphu',
            ),
            335 => 
            array (
                'id' => 336,
                'country_id' => 64,
                'iso' => '',
                'name' => 'Wangdi Phodrang',
                'timezone' => 'Asia/Thimphu',
            ),
            336 => 
            array (
                'id' => 337,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Chuquisaca',
                'timezone' => 'America/La_Paz',
            ),
            337 => 
            array (
                'id' => 338,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Cochabamba',
                'timezone' => 'America/La_Paz',
            ),
            338 => 
            array (
                'id' => 339,
                'country_id' => 68,
                'iso' => '',
                'name' => 'El Beni',
                'timezone' => 'America/La_Paz',
            ),
            339 => 
            array (
                'id' => 340,
                'country_id' => 68,
                'iso' => '',
                'name' => 'La Paz',
                'timezone' => 'America/La_Paz',
            ),
            340 => 
            array (
                'id' => 341,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Oruro',
                'timezone' => 'America/La_Paz',
            ),
            341 => 
            array (
                'id' => 342,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Pando',
                'timezone' => 'America/La_Paz',
            ),
            342 => 
            array (
                'id' => 343,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Potosí',
                'timezone' => 'America/La_Paz',
            ),
            343 => 
            array (
                'id' => 344,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Santa Cruz',
                'timezone' => 'America/La_Paz',
            ),
            344 => 
            array (
                'id' => 345,
                'country_id' => 68,
                'iso' => '',
                'name' => 'Tarija',
                'timezone' => 'America/La_Paz',
            ),
            345 => 
            array (
                'id' => 346,
                'country_id' => 70,
                'iso' => '',
                'name' => 'Federation of Bosnia and Herzegovina',
                'timezone' => 'Europe/Sarajevo',
            ),
            346 => 
            array (
                'id' => 347,
                'country_id' => 70,
                'iso' => '',
                'name' => 'Republika Srpska',
                'timezone' => 'Europe/Sarajevo',
            ),
            347 => 
            array (
                'id' => 348,
                'country_id' => 70,
                'iso' => '',
                'name' => 'Brčko',
                'timezone' => 'Europe/Sarajevo',
            ),
            348 => 
            array (
                'id' => 349,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Africa/Gaborone',
            ),
            349 => 
            array (
                'id' => 350,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Chobe',
                'timezone' => 'Africa/Gaborone',
            ),
            350 => 
            array (
                'id' => 351,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Ghanzi',
                'timezone' => 'Africa/Gaborone',
            ),
            351 => 
            array (
                'id' => 352,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Kgalagadi',
                'timezone' => 'Africa/Gaborone',
            ),
            352 => 
            array (
                'id' => 353,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Kgatleng',
                'timezone' => 'Africa/Gaborone',
            ),
            353 => 
            array (
                'id' => 354,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Kweneng',
                'timezone' => 'Africa/Gaborone',
            ),
            354 => 
            array (
                'id' => 355,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Ngamiland',
                'timezone' => 'Africa/Gaborone',
            ),
            355 => 
            array (
                'id' => 356,
                'country_id' => 72,
                'iso' => '',
                'name' => 'North East',
                'timezone' => 'Africa/Gaborone',
            ),
            356 => 
            array (
                'id' => 357,
                'country_id' => 72,
                'iso' => '',
                'name' => 'South East',
                'timezone' => 'Africa/Gaborone',
            ),
            357 => 
            array (
                'id' => 358,
                'country_id' => 72,
                'iso' => '',
                'name' => 'Southern',
                'timezone' => 'Africa/Gaborone',
            ),
            358 => 
            array (
                'id' => 359,
                'country_id' => 72,
                'iso' => '',
                'name' => 'North West',
                'timezone' => 'Africa/Gaborone',
            ),
            359 => 
            array (
                'id' => 360,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Acre',
                'timezone' => 'America/Rio_Branco',
            ),
            360 => 
            array (
                'id' => 361,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Alagoas',
                'timezone' => 'America/Maceio',
            ),
            361 => 
            array (
                'id' => 362,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Amapá',
                'timezone' => 'America/Belem',
            ),
            362 => 
            array (
                'id' => 363,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Estado do Amazonas',
                'timezone' => 'America/Manaus',
            ),
            363 => 
            array (
                'id' => 364,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Bahia',
                'timezone' => 'America/Bahia',
            ),
            364 => 
            array (
                'id' => 365,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Ceará',
                'timezone' => 'America/Fortaleza',
            ),
            365 => 
            array (
                'id' => 366,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Distrito Federal',
                'timezone' => 'America/Sao_Paulo',
            ),
            366 => 
            array (
                'id' => 367,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Espírito Santo',
                'timezone' => 'America/Sao_Paulo',
            ),
            367 => 
            array (
                'id' => 368,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Fernando de Noronha',
                'timezone' => 'America/Recife',
            ),
            368 => 
            array (
                'id' => 369,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Goias',
                'timezone' => 'America/Sao_Paulo',
            ),
            369 => 
            array (
                'id' => 370,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Mato Grosso do Sul',
                'timezone' => 'America/Campo_Grande',
            ),
            370 => 
            array (
                'id' => 371,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Maranhão',
                'timezone' => 'America/Fortaleza',
            ),
            371 => 
            array (
                'id' => 372,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Mato Grosso',
                'timezone' => 'America/Cuiaba',
            ),
            372 => 
            array (
                'id' => 373,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Minas Gerais',
                'timezone' => 'America/Sao_Paulo',
            ),
            373 => 
            array (
                'id' => 374,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Pará',
                'timezone' => 'America/Belem',
            ),
            374 => 
            array (
                'id' => 375,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Paraíba',
                'timezone' => 'America/Fortaleza',
            ),
            375 => 
            array (
                'id' => 376,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Paraná',
                'timezone' => 'America/Sao_Paulo',
            ),
            376 => 
            array (
                'id' => 377,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Pernambuco',
                'timezone' => 'America/Noronha',
            ),
            377 => 
            array (
                'id' => 378,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Piauí',
                'timezone' => 'America/Fortaleza',
            ),
            378 => 
            array (
                'id' => 379,
                'country_id' => 76,
                'iso' => '',
                'name' => 'State of Rio de Janeiro',
                'timezone' => 'America/Sao_Paulo',
            ),
            379 => 
            array (
                'id' => 380,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Rio Grande do Norte',
                'timezone' => 'America/Fortaleza',
            ),
            380 => 
            array (
                'id' => 381,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Rio Grande do Sul',
                'timezone' => 'America/Sao_Paulo',
            ),
            381 => 
            array (
                'id' => 382,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Rondônia',
                'timezone' => 'America/Porto_Velho',
            ),
            382 => 
            array (
                'id' => 383,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Roraima',
                'timezone' => 'America/Boa_Vista',
            ),
            383 => 
            array (
                'id' => 384,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Santa Catarina',
                'timezone' => 'America/Sao_Paulo',
            ),
            384 => 
            array (
                'id' => 385,
                'country_id' => 76,
                'iso' => '',
                'name' => 'São Paulo',
                'timezone' => 'America/Sao_Paulo',
            ),
            385 => 
            array (
                'id' => 386,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Sergipe',
                'timezone' => 'America/Maceio',
            ),
            386 => 
            array (
                'id' => 387,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Estado de Goiás',
                'timezone' => 'America/Sao_Paulo',
            ),
            387 => 
            array (
                'id' => 388,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Pernambuco',
                'timezone' => 'America/Noronha',
            ),
            388 => 
            array (
                'id' => 389,
                'country_id' => 76,
                'iso' => '',
                'name' => 'Tocantins',
                'timezone' => 'America/Araguaina',
            ),
            389 => 
            array (
                'id' => 390,
                'country_id' => 84,
                'iso' => '',
                'name' => 'Belize',
                'timezone' => 'America/Belize',
            ),
            390 => 
            array (
                'id' => 391,
                'country_id' => 84,
                'iso' => '',
                'name' => 'Cayo',
                'timezone' => 'America/Belize',
            ),
            391 => 
            array (
                'id' => 392,
                'country_id' => 84,
                'iso' => '',
                'name' => 'Corozal',
                'timezone' => 'America/Belize',
            ),
            392 => 
            array (
                'id' => 393,
                'country_id' => 84,
                'iso' => '',
                'name' => 'Orange Walk',
                'timezone' => 'America/Belize',
            ),
            393 => 
            array (
                'id' => 394,
                'country_id' => 84,
                'iso' => '',
                'name' => 'Stann Creek',
                'timezone' => 'America/Belize',
            ),
            394 => 
            array (
                'id' => 395,
                'country_id' => 84,
                'iso' => '',
                'name' => 'Toledo',
                'timezone' => 'America/Belize',
            ),
            395 => 
            array (
                'id' => 396,
                'country_id' => 86,
                'iso' => '',
                'name' => 'British Indian Ocean Territory',
                'timezone' => 'Indian/Chagos',
            ),
            396 => 
            array (
                'id' => 397,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Malaita',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            397 => 
            array (
                'id' => 398,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            398 => 
            array (
                'id' => 399,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            399 => 
            array (
                'id' => 400,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Guadalcanal',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            400 => 
            array (
                'id' => 401,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Isabel',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            401 => 
            array (
                'id' => 402,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Makira',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            402 => 
            array (
                'id' => 403,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Temotu',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            403 => 
            array (
                'id' => 404,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Central Province',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            404 => 
            array (
                'id' => 405,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Choiseul',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            405 => 
            array (
                'id' => 406,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Rennell and Bellona',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            406 => 
            array (
                'id' => 407,
                'country_id' => 90,
                'iso' => '',
                'name' => 'Rennell and Bellona',
                'timezone' => 'Pacific/Guadalcanal',
            ),
            407 => 
            array (
                'id' => 408,
                'country_id' => 92,
                'iso' => '',
                'name' => 'British Virgin Islands',
                'timezone' => 'America/Tortola',
            ),
            408 => 
            array (
                'id' => 409,
                'country_id' => 96,
                'iso' => '',
                'name' => 'Belait',
                'timezone' => 'Asia/Brunei',
            ),
            409 => 
            array (
                'id' => 410,
                'country_id' => 96,
                'iso' => '',
                'name' => 'Brunei and Muara',
                'timezone' => 'Asia/Brunei',
            ),
            410 => 
            array (
                'id' => 411,
                'country_id' => 96,
                'iso' => '',
                'name' => 'Temburong',
                'timezone' => 'Asia/Brunei',
            ),
            411 => 
            array (
                'id' => 412,
                'country_id' => 96,
                'iso' => '',
                'name' => 'Tutong',
                'timezone' => 'Asia/Brunei',
            ),
            412 => 
            array (
                'id' => 413,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Burgas',
                'timezone' => 'Europe/Sofia',
            ),
            413 => 
            array (
                'id' => 414,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Grad',
                'timezone' => 'Europe/Sofia',
            ),
            414 => 
            array (
                'id' => 415,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Khaskovo',
                'timezone' => 'Europe/Sofia',
            ),
            415 => 
            array (
                'id' => 416,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Lovech',
                'timezone' => 'Europe/Sofia',
            ),
            416 => 
            array (
                'id' => 417,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Mikhaylovgrad',
                'timezone' => 'Europe/Sofia',
            ),
            417 => 
            array (
                'id' => 418,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Plovdiv',
                'timezone' => 'Europe/Sofia',
            ),
            418 => 
            array (
                'id' => 419,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Razgrad',
                'timezone' => 'Europe/Sofia',
            ),
            419 => 
            array (
                'id' => 420,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Sofiya',
                'timezone' => 'Europe/Sofia',
            ),
            420 => 
            array (
                'id' => 421,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Varna',
                'timezone' => 'Europe/Sofia',
            ),
            421 => 
            array (
                'id' => 422,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Blagoevgrad',
                'timezone' => 'Europe/Sofia',
            ),
            422 => 
            array (
                'id' => 423,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Burgas',
                'timezone' => 'Europe/Sofia',
            ),
            423 => 
            array (
                'id' => 424,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Dobrich',
                'timezone' => 'Europe/Sofia',
            ),
            424 => 
            array (
                'id' => 425,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Gabrovo',
                'timezone' => 'Europe/Sofia',
            ),
            425 => 
            array (
                'id' => 426,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Oblast Sofiya-Grad',
                'timezone' => 'Europe/Sofia',
            ),
            426 => 
            array (
                'id' => 427,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Khaskovo',
                'timezone' => 'Europe/Sofia',
            ),
            427 => 
            array (
                'id' => 428,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Kŭrdzhali',
                'timezone' => 'Europe/Sofia',
            ),
            428 => 
            array (
                'id' => 429,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Kyustendil',
                'timezone' => 'Europe/Sofia',
            ),
            429 => 
            array (
                'id' => 430,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Lovech',
                'timezone' => 'Europe/Sofia',
            ),
            430 => 
            array (
                'id' => 431,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Montana',
                'timezone' => 'Europe/Sofia',
            ),
            431 => 
            array (
                'id' => 432,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Pazardzhit',
                'timezone' => 'Europe/Sofia',
            ),
            432 => 
            array (
                'id' => 433,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Pernik',
                'timezone' => 'Europe/Sofia',
            ),
            433 => 
            array (
                'id' => 434,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Pleven',
                'timezone' => 'Europe/Sofia',
            ),
            434 => 
            array (
                'id' => 435,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Plovdiv',
                'timezone' => 'Europe/Sofia',
            ),
            435 => 
            array (
                'id' => 436,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Razgrad',
                'timezone' => 'Europe/Sofia',
            ),
            436 => 
            array (
                'id' => 437,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Ruse',
                'timezone' => 'Europe/Sofia',
            ),
            437 => 
            array (
                'id' => 438,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Shumen',
                'timezone' => 'Europe/Sofia',
            ),
            438 => 
            array (
                'id' => 439,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Silistra',
                'timezone' => 'Europe/Sofia',
            ),
            439 => 
            array (
                'id' => 440,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Sliven',
                'timezone' => 'Europe/Sofia',
            ),
            440 => 
            array (
                'id' => 441,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Smolyan',
                'timezone' => 'Europe/Sofia',
            ),
            441 => 
            array (
                'id' => 442,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Sofiya',
                'timezone' => 'Europe/Sofia',
            ),
            442 => 
            array (
                'id' => 443,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Stara Zagora',
                'timezone' => 'Europe/Sofia',
            ),
            443 => 
            array (
                'id' => 444,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Tŭrgovishte',
                'timezone' => 'Europe/Sofia',
            ),
            444 => 
            array (
                'id' => 445,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Varna',
                'timezone' => 'Europe/Sofia',
            ),
            445 => 
            array (
                'id' => 446,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Veliko Tŭrnovo',
                'timezone' => 'Europe/Sofia',
            ),
            446 => 
            array (
                'id' => 447,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Vidin',
                'timezone' => 'Europe/Sofia',
            ),
            447 => 
            array (
                'id' => 448,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Vratsa',
                'timezone' => 'Europe/Sofia',
            ),
            448 => 
            array (
                'id' => 449,
                'country_id' => 100,
                'iso' => '',
                'name' => 'Yambol',
                'timezone' => 'Europe/Sofia',
            ),
            449 => 
            array (
                'id' => 450,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Rakhine State',
                'timezone' => 'Asia/Rangoon',
            ),
            450 => 
            array (
                'id' => 451,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Chin State',
                'timezone' => 'Asia/Rangoon',
            ),
            451 => 
            array (
                'id' => 452,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Ayeyarwady',
                'timezone' => 'Asia/Rangoon',
            ),
            452 => 
            array (
                'id' => 453,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Kachin State',
                'timezone' => 'Asia/Rangoon',
            ),
            453 => 
            array (
                'id' => 454,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Kayin State',
                'timezone' => 'Asia/Rangoon',
            ),
            454 => 
            array (
                'id' => 455,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Kayah State',
                'timezone' => 'Asia/Rangoon',
            ),
            455 => 
            array (
                'id' => 456,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Magwe',
                'timezone' => 'Asia/Rangoon',
            ),
            456 => 
            array (
                'id' => 457,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Mandalay',
                'timezone' => 'Asia/Rangoon',
            ),
            457 => 
            array (
                'id' => 458,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Pegu',
                'timezone' => 'Asia/Rangoon',
            ),
            458 => 
            array (
                'id' => 459,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Sagain',
                'timezone' => 'Asia/Rangoon',
            ),
            459 => 
            array (
                'id' => 460,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Shan State',
                'timezone' => 'Asia/Rangoon',
            ),
            460 => 
            array (
                'id' => 461,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Tanintharyi',
                'timezone' => 'Asia/Rangoon',
            ),
            461 => 
            array (
                'id' => 462,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Mon State',
                'timezone' => 'Asia/Rangoon',
            ),
            462 => 
            array (
                'id' => 463,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Rangoon',
                'timezone' => 'Asia/Rangoon',
            ),
            463 => 
            array (
                'id' => 464,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Magway',
                'timezone' => 'Asia/Rangoon',
            ),
            464 => 
            array (
                'id' => 465,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Bago',
                'timezone' => 'Asia/Rangoon',
            ),
            465 => 
            array (
                'id' => 466,
                'country_id' => 104,
                'iso' => '',
                'name' => 'Yangon',
                'timezone' => 'Asia/Rangoon',
            ),
            466 => 
            array (
                'id' => 467,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Bujumbura',
                'timezone' => 'Africa/Bujumbura',
            ),
            467 => 
            array (
                'id' => 468,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Bubanza',
                'timezone' => 'Africa/Bujumbura',
            ),
            468 => 
            array (
                'id' => 469,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Bururi',
                'timezone' => 'Africa/Bujumbura',
            ),
            469 => 
            array (
                'id' => 470,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Cankuzo',
                'timezone' => 'Africa/Bujumbura',
            ),
            470 => 
            array (
                'id' => 471,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Cibitoke',
                'timezone' => 'Africa/Bujumbura',
            ),
            471 => 
            array (
                'id' => 472,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Gitega',
                'timezone' => 'Africa/Bujumbura',
            ),
            472 => 
            array (
                'id' => 473,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Karuzi',
                'timezone' => 'Africa/Bujumbura',
            ),
            473 => 
            array (
                'id' => 474,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Kayanza',
                'timezone' => 'Africa/Bujumbura',
            ),
            474 => 
            array (
                'id' => 475,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Kirundo',
                'timezone' => 'Africa/Bujumbura',
            ),
            475 => 
            array (
                'id' => 476,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Makamba',
                'timezone' => 'Africa/Bujumbura',
            ),
            476 => 
            array (
                'id' => 477,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Muyinga',
                'timezone' => 'Africa/Bujumbura',
            ),
            477 => 
            array (
                'id' => 478,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Ngozi',
                'timezone' => 'Africa/Bujumbura',
            ),
            478 => 
            array (
                'id' => 479,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Rutana',
                'timezone' => 'Africa/Bujumbura',
            ),
            479 => 
            array (
                'id' => 480,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Ruyigi',
                'timezone' => 'Africa/Bujumbura',
            ),
            480 => 
            array (
                'id' => 481,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Muramvya',
                'timezone' => 'Africa/Bujumbura',
            ),
            481 => 
            array (
                'id' => 482,
                'country_id' => 108,
                'iso' => '',
                'name' => 'Mwaro',
                'timezone' => 'Africa/Bujumbura',
            ),
            482 => 
            array (
                'id' => 483,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Brestskaya Voblastsʼ',
                'timezone' => 'Europe/Minsk',
            ),
            483 => 
            array (
                'id' => 484,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Homyelʼskaya Voblastsʼ',
                'timezone' => 'Europe/Minsk',
            ),
            484 => 
            array (
                'id' => 485,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Hrodzyenskaya Voblastsʼ',
                'timezone' => 'Europe/Minsk',
            ),
            485 => 
            array (
                'id' => 486,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Mahilyowskaya Voblastsʼ',
                'timezone' => 'Europe/Minsk',
            ),
            486 => 
            array (
                'id' => 487,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Horad Minsk',
                'timezone' => 'Europe/Minsk',
            ),
            487 => 
            array (
                'id' => 488,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Minskaya Voblastsʼ',
                'timezone' => 'Europe/Minsk',
            ),
            488 => 
            array (
                'id' => 489,
                'country_id' => 112,
                'iso' => '',
                'name' => 'Vitsyebskaya Voblastsʼ',
                'timezone' => 'Europe/Minsk',
            ),
            489 => 
            array (
                'id' => 490,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Krŏng Preăh Seihânŭ',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            490 => 
            array (
                'id' => 491,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kâmpóng Cham',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            491 => 
            array (
                'id' => 492,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kâmpóng Chhnăng',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            492 => 
            array (
                'id' => 493,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Khétt Kâmpóng Spœ',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            493 => 
            array (
                'id' => 494,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kâmpóng Thum',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            494 => 
            array (
                'id' => 495,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kândal',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            495 => 
            array (
                'id' => 496,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kaôh Kŏng',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            496 => 
            array (
                'id' => 497,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Krâchéh',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            497 => 
            array (
                'id' => 498,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Môndól Kiri',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            498 => 
            array (
                'id' => 499,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Phnum Penh',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            499 => 
            array (
                'id' => 500,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Poŭthĭsăt',
                'timezone' => 'Asia/Phnom_Penh',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 501,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Preăh Vihéar',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            1 => 
            array (
                'id' => 502,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Prey Vêng',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            2 => 
            array (
                'id' => 503,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Stœ̆ng Trêng',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            3 => 
            array (
                'id' => 504,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Svay Riĕng',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            4 => 
            array (
                'id' => 505,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Takêv',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            5 => 
            array (
                'id' => 506,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kâmpôt',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            6 => 
            array (
                'id' => 507,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Phnum Pénh',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            7 => 
            array (
                'id' => 508,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Rôtânăh Kiri',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            8 => 
            array (
                'id' => 509,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Siĕm Réab',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            9 => 
            array (
                'id' => 510,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Bantéay Méan Cheăy',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            10 => 
            array (
                'id' => 511,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Kêb',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            11 => 
            array (
                'id' => 512,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Ŏtdâr Méan Cheăy',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            12 => 
            array (
                'id' => 513,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Preăh Seihânŭ',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            13 => 
            array (
                'id' => 514,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Bătdâmbâng',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            14 => 
            array (
                'id' => 515,
                'country_id' => 116,
                'iso' => '',
                'name' => 'Palĭn',
                'timezone' => 'Asia/Phnom_Penh',
            ),
            15 => 
            array (
                'id' => 516,
                'country_id' => 120,
                'iso' => '',
                'name' => 'Est',
                'timezone' => 'Africa/Douala',
            ),
            16 => 
            array (
                'id' => 517,
                'country_id' => 120,
                'iso' => '',
                'name' => 'Littoral',
                'timezone' => 'Africa/Douala',
            ),
            17 => 
            array (
                'id' => 518,
                'country_id' => 120,
                'iso' => '',
                'name' => 'North-West Province',
                'timezone' => 'Africa/Douala',
            ),
            18 => 
            array (
                'id' => 519,
                'country_id' => 120,
                'iso' => '',
                'name' => 'Ouest',
                'timezone' => 'Africa/Douala',
            ),
            19 => 
            array (
                'id' => 520,
                'country_id' => 120,
                'iso' => '',
                'name' => 'South-West Province',
                'timezone' => 'Africa/Douala',
            ),
            20 => 
            array (
                'id' => 521,
                'country_id' => 120,
                'iso' => '',
                'name' => 'Adamaoua',
                'timezone' => 'Africa/Douala',
            ),
            21 => 
            array (
                'id' => 522,
                'country_id' => 120,
                'iso' => '',
                'name' => 'Centre',
                'timezone' => 'Africa/Douala',
            ),
            22 => 
            array (
                'id' => 523,
                'country_id' => 120,
                'iso' => '',
                'name' => 'Extreme-Nord',
                'timezone' => 'Africa/Douala',
            ),
            23 => 
            array (
                'id' => 524,
                'country_id' => 120,
                'iso' => '',
                'name' => 'North Province',
                'timezone' => 'Africa/Douala',
            ),
            24 => 
            array (
                'id' => 525,
                'country_id' => 120,
                'iso' => '',
                'name' => 'South Province',
                'timezone' => 'Africa/Douala',
            ),
            25 => 
            array (
                'id' => 526,
                'country_id' => 124,
                'iso' => 'AB',
                'name' => 'Alberta',
                'timezone' => 'America/Edmonton',
            ),
            26 => 
            array (
                'id' => 527,
                'country_id' => 124,
                'iso' => 'BC',
                'name' => 'British Columbia',
                'timezone' => 'America/Vancouver',
            ),
            27 => 
            array (
                'id' => 528,
                'country_id' => 124,
                'iso' => 'MB',
                'name' => 'Manitoba',
                'timezone' => 'America/Winnipeg',
            ),
            28 => 
            array (
                'id' => 529,
                'country_id' => 124,
                'iso' => 'NB',
                'name' => 'New Brunswick',
                'timezone' => 'America/Halifax',
            ),
            29 => 
            array (
                'id' => 530,
                'country_id' => 124,
                'iso' => 'NL',
                'name' => 'Newfoundland and Labrador',
                'timezone' => 'America/Goose_Bay',
            ),
            30 => 
            array (
                'id' => 531,
                'country_id' => 124,
                'iso' => 'NS',
                'name' => 'Nova Scotia',
                'timezone' => 'America/Halifax',
            ),
            31 => 
            array (
                'id' => 532,
                'country_id' => 124,
                'iso' => 'ON',
                'name' => 'Ontario',
                'timezone' => 'America/Toronto',
            ),
            32 => 
            array (
                'id' => 533,
                'country_id' => 124,
                'iso' => 'PE',
                'name' => 'Prince Edward Island',
                'timezone' => 'America/Halifax',
            ),
            33 => 
            array (
                'id' => 534,
                'country_id' => 124,
                'iso' => 'QC',
                'name' => 'Quebec',
                'timezone' => 'America/Montreal',
            ),
            34 => 
            array (
                'id' => 535,
                'country_id' => 124,
                'iso' => 'SK',
                'name' => 'Saskatchewan',
                'timezone' => 'America/Winnipeg',
            ),
            35 => 
            array (
                'id' => 536,
                'country_id' => 124,
                'iso' => 'YT',
                'name' => 'Yukon',
                'timezone' => 'America/Whitehorse',
            ),
            36 => 
            array (
                'id' => 537,
                'country_id' => 124,
                'iso' => 'NT',
                'name' => 'Northwest Territories',
                'timezone' => 'America/Yellowknife',
            ),
            37 => 
            array (
                'id' => 538,
                'country_id' => 124,
                'iso' => 'NU',
                'name' => 'Nunavut',
                'timezone' => 'America/Rankin_Inlet',
            ),
            38 => 
            array (
                'id' => 539,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Boa Vista',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            39 => 
            array (
                'id' => 540,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Brava',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            40 => 
            array (
                'id' => 541,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Maio',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            41 => 
            array (
                'id' => 542,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Paul',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            42 => 
            array (
                'id' => 543,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Praia',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            43 => 
            array (
                'id' => 544,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Ribeira Grande',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            44 => 
            array (
                'id' => 545,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Sal',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            45 => 
            array (
                'id' => 546,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Santa Catarina ',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            46 => 
            array (
                'id' => 547,
                'country_id' => 132,
                'iso' => '',
                'name' => 'São Nicolau',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            47 => 
            array (
                'id' => 548,
                'country_id' => 132,
                'iso' => '',
                'name' => 'São Vicente',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            48 => 
            array (
                'id' => 549,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Tarrafal ',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            49 => 
            array (
                'id' => 550,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Mosteiros',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            50 => 
            array (
                'id' => 551,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Praia',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            51 => 
            array (
                'id' => 552,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Santa Catarina',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            52 => 
            array (
                'id' => 553,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Santa Cruz',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            53 => 
            array (
                'id' => 554,
                'country_id' => 132,
                'iso' => '',
                'name' => 'São Domingos',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            54 => 
            array (
                'id' => 555,
                'country_id' => 132,
                'iso' => '',
                'name' => 'São Filipe',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            55 => 
            array (
                'id' => 556,
                'country_id' => 132,
                'iso' => '',
                'name' => 'São Miguel',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            56 => 
            array (
                'id' => 557,
                'country_id' => 132,
                'iso' => '',
                'name' => 'Tarrafal',
                'timezone' => 'Atlantic/Cape_Verde',
            ),
            57 => 
            array (
                'id' => 558,
                'country_id' => 136,
                'iso' => '',
                'name' => 'Creek',
                'timezone' => 'America/Cayman',
            ),
            58 => 
            array (
                'id' => 559,
                'country_id' => 136,
                'iso' => '',
                'name' => 'Eastern',
                'timezone' => 'America/Cayman',
            ),
            59 => 
            array (
                'id' => 560,
                'country_id' => 136,
                'iso' => '',
                'name' => 'Midland',
                'timezone' => 'America/Cayman',
            ),
            60 => 
            array (
                'id' => 561,
                'country_id' => 136,
                'iso' => '',
                'name' => 'South Town',
                'timezone' => 'America/Cayman',
            ),
            61 => 
            array (
                'id' => 562,
                'country_id' => 136,
                'iso' => '',
                'name' => 'Spot Bay',
                'timezone' => 'America/Cayman',
            ),
            62 => 
            array (
                'id' => 563,
                'country_id' => 136,
                'iso' => '',
                'name' => 'Stake Bay',
                'timezone' => 'America/Cayman',
            ),
            63 => 
            array (
                'id' => 564,
                'country_id' => 136,
                'iso' => '',
                'name' => 'West End',
                'timezone' => 'America/Cayman',
            ),
            64 => 
            array (
                'id' => 565,
                'country_id' => 136,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'America/Cayman',
            ),
            65 => 
            array (
                'id' => 566,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Bamingui-Bangoran',
                'timezone' => 'Africa/Bangui',
            ),
            66 => 
            array (
                'id' => 567,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Basse-Kotto',
                'timezone' => 'Africa/Bangui',
            ),
            67 => 
            array (
                'id' => 568,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Haute-Kotto',
                'timezone' => 'Africa/Bangui',
            ),
            68 => 
            array (
                'id' => 569,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Mambéré-Kadéï',
                'timezone' => 'Africa/Bangui',
            ),
            69 => 
            array (
                'id' => 570,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Haut-Mbomou',
                'timezone' => 'Africa/Bangui',
            ),
            70 => 
            array (
                'id' => 571,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Kémo',
                'timezone' => 'Africa/Bangui',
            ),
            71 => 
            array (
                'id' => 572,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Lobaye',
                'timezone' => 'Africa/Bangui',
            ),
            72 => 
            array (
                'id' => 573,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Mbomou',
                'timezone' => 'Africa/Bangui',
            ),
            73 => 
            array (
                'id' => 574,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Nana-Mambéré',
                'timezone' => 'Africa/Bangui',
            ),
            74 => 
            array (
                'id' => 575,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Ouaka',
                'timezone' => 'Africa/Bangui',
            ),
            75 => 
            array (
                'id' => 576,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Ouham',
                'timezone' => 'Africa/Bangui',
            ),
            76 => 
            array (
                'id' => 577,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Ouham-Pendé',
                'timezone' => 'Africa/Bangui',
            ),
            77 => 
            array (
                'id' => 578,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Vakaga',
                'timezone' => 'Africa/Bangui',
            ),
            78 => 
            array (
                'id' => 579,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Nana-Grébizi',
                'timezone' => 'Africa/Bangui',
            ),
            79 => 
            array (
                'id' => 580,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Sangha-Mbaéré',
                'timezone' => 'Africa/Bangui',
            ),
            80 => 
            array (
                'id' => 581,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Ombella-Mpoko',
                'timezone' => 'Africa/Bangui',
            ),
            81 => 
            array (
                'id' => 582,
                'country_id' => 140,
                'iso' => '',
                'name' => 'Bangui',
                'timezone' => 'Africa/Bangui',
            ),
            82 => 
            array (
                'id' => 583,
                'country_id' => 144,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Asia/Colombo',
            ),
            83 => 
            array (
                'id' => 584,
                'country_id' => 144,
                'iso' => '',
                'name' => 'North Central',
                'timezone' => 'Asia/Colombo',
            ),
            84 => 
            array (
                'id' => 585,
                'country_id' => 144,
                'iso' => '',
                'name' => 'North Eastern',
                'timezone' => 'Asia/Colombo',
            ),
            85 => 
            array (
                'id' => 586,
                'country_id' => 144,
                'iso' => '',
                'name' => 'North Western',
                'timezone' => 'Asia/Colombo',
            ),
            86 => 
            array (
                'id' => 587,
                'country_id' => 144,
                'iso' => '',
                'name' => 'Sabaragamuwa',
                'timezone' => 'Asia/Colombo',
            ),
            87 => 
            array (
                'id' => 588,
                'country_id' => 144,
                'iso' => '',
                'name' => 'Southern',
                'timezone' => 'Asia/Colombo',
            ),
            88 => 
            array (
                'id' => 589,
                'country_id' => 144,
                'iso' => '',
                'name' => 'Uva',
                'timezone' => 'Asia/Colombo',
            ),
            89 => 
            array (
                'id' => 590,
                'country_id' => 144,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Asia/Colombo',
            ),
            90 => 
            array (
                'id' => 591,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Batha',
                'timezone' => 'Africa/Ndjamena',
            ),
            91 => 
            array (
                'id' => 592,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Biltine',
                'timezone' => 'Africa/Ndjamena',
            ),
            92 => 
            array (
                'id' => 593,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Borkou-Ennedi-Tibesti',
                'timezone' => 'Africa/Ndjamena',
            ),
            93 => 
            array (
                'id' => 594,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Chari-Baguirmi',
                'timezone' => 'Africa/Ndjamena',
            ),
            94 => 
            array (
                'id' => 595,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Guéra',
                'timezone' => 'Africa/Ndjamena',
            ),
            95 => 
            array (
                'id' => 596,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Kanem',
                'timezone' => 'Africa/Ndjamena',
            ),
            96 => 
            array (
                'id' => 597,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Lac',
                'timezone' => 'Africa/Ndjamena',
            ),
            97 => 
            array (
                'id' => 598,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Logone Occidental',
                'timezone' => 'Africa/Ndjamena',
            ),
            98 => 
            array (
                'id' => 599,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Logone Oriental',
                'timezone' => 'Africa/Ndjamena',
            ),
            99 => 
            array (
                'id' => 600,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Mayo-Kébbi',
                'timezone' => 'Africa/Ndjamena',
            ),
            100 => 
            array (
                'id' => 601,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Moyen-Chari',
                'timezone' => 'Africa/Ndjamena',
            ),
            101 => 
            array (
                'id' => 602,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Ouaddaï',
                'timezone' => 'Africa/Ndjamena',
            ),
            102 => 
            array (
                'id' => 603,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Salamat',
                'timezone' => 'Africa/Ndjamena',
            ),
            103 => 
            array (
                'id' => 604,
                'country_id' => 148,
                'iso' => '',
                'name' => 'Tandjilé',
                'timezone' => 'Africa/Ndjamena',
            ),
            104 => 
            array (
                'id' => 605,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Valparaíso',
                'timezone' => 'America/Santiago',
            ),
            105 => 
            array (
                'id' => 606,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Aisén del General Carlos Ibáñez del Campo',
                'timezone' => 'America/Santiago',
            ),
            106 => 
            array (
                'id' => 607,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Antofagasta',
                'timezone' => 'America/Santiago',
            ),
            107 => 
            array (
                'id' => 608,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Araucanía',
                'timezone' => 'America/Santiago',
            ),
            108 => 
            array (
                'id' => 609,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Atacama',
                'timezone' => 'America/Santiago',
            ),
            109 => 
            array (
                'id' => 610,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Bío-Bío',
                'timezone' => 'America/Santiago',
            ),
            110 => 
            array (
                'id' => 611,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Coquimbo',
                'timezone' => 'America/Santiago',
            ),
            111 => 
            array (
                'id' => 612,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Libertador General Bernardo OʼHiggins',
                'timezone' => 'America/Santiago',
            ),
            112 => 
            array (
                'id' => 613,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Los Lagos',
                'timezone' => 'America/Santiago',
            ),
            113 => 
            array (
                'id' => 614,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Magallanes y Antártica Chilena',
                'timezone' => 'America/Santiago',
            ),
            114 => 
            array (
                'id' => 615,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Maule',
                'timezone' => 'America/Santiago',
            ),
            115 => 
            array (
                'id' => 616,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Región Metropolitana',
                'timezone' => 'America/Santiago',
            ),
            116 => 
            array (
                'id' => 617,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Tarapaca',
                'timezone' => 'America/Santiago',
            ),
            117 => 
            array (
                'id' => 618,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Los Lagos',
                'timezone' => 'America/Santiago',
            ),
            118 => 
            array (
                'id' => 619,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Tarapacá',
                'timezone' => 'America/Santiago',
            ),
            119 => 
            array (
                'id' => 620,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Región de Arica y Parinacota',
                'timezone' => 'America/Santiago',
            ),
            120 => 
            array (
                'id' => 621,
                'country_id' => 152,
                'iso' => '',
                'name' => 'Región de Los Ríos',
                'timezone' => 'America/Santiago',
            ),
            121 => 
            array (
                'id' => 622,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Anhui',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            122 => 
            array (
                'id' => 623,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Zhejiang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            123 => 
            array (
                'id' => 624,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Jiangxi',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            124 => 
            array (
                'id' => 625,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Jiangsu',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            125 => 
            array (
                'id' => 626,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Jilin',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            126 => 
            array (
                'id' => 627,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Qinghai',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            127 => 
            array (
                'id' => 628,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Fujian',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            128 => 
            array (
                'id' => 629,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Heilongjiang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            129 => 
            array (
                'id' => 630,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Henan',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            130 => 
            array (
                'id' => 631,
                'country_id' => 156,
                'iso' => '',
                'name' => 'disputed',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            131 => 
            array (
                'id' => 632,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Hebei',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            132 => 
            array (
                'id' => 633,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Hunan Province',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            133 => 
            array (
                'id' => 634,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Hubei',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            134 => 
            array (
                'id' => 635,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Xinjiang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            135 => 
            array (
                'id' => 636,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Xizang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            136 => 
            array (
                'id' => 637,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Gansu',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            137 => 
            array (
                'id' => 638,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Guangxi',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            138 => 
            array (
                'id' => 639,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Guizhou',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            139 => 
            array (
                'id' => 640,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Liaoning Province',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            140 => 
            array (
                'id' => 641,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Inner Mongolia',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            141 => 
            array (
                'id' => 642,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Ningxia',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            142 => 
            array (
                'id' => 643,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Beijing',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            143 => 
            array (
                'id' => 644,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Shanghai',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            144 => 
            array (
                'id' => 645,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Shanxi',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            145 => 
            array (
                'id' => 646,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Shandong',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            146 => 
            array (
                'id' => 647,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Shaanxi',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            147 => 
            array (
                'id' => 648,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Tianjin',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            148 => 
            array (
                'id' => 649,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Yunnan Province',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            149 => 
            array (
                'id' => 650,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Guangdong',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            150 => 
            array (
                'id' => 651,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Hainan Province',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            151 => 
            array (
                'id' => 652,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Sichuan',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            152 => 
            array (
                'id' => 653,
                'country_id' => 156,
                'iso' => '',
                'name' => 'Chongqing',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            153 => 
            array (
                'id' => 654,
                'country_id' => 156,
                'iso' => '',
                'name' => 'PF99',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            154 => 
            array (
                'id' => 655,
                'country_id' => 158,
                'iso' => '',
                'name' => 'Fukien',
                'timezone' => 'Asia/Taipei',
            ),
            155 => 
            array (
                'id' => 656,
                'country_id' => 158,
                'iso' => '',
                'name' => 'Kaohsiung',
                'timezone' => 'Asia/Taipei',
            ),
            156 => 
            array (
                'id' => 657,
                'country_id' => 158,
                'iso' => '',
                'name' => 'Taipei',
                'timezone' => 'Asia/Taipei',
            ),
            157 => 
            array (
                'id' => 658,
                'country_id' => 158,
                'iso' => '',
                'name' => 'Taiwan',
                'timezone' => 'Asia/Taipei',
            ),
            158 => 
            array (
                'id' => 659,
                'country_id' => 162,
                'iso' => '',
                'name' => 'Christmas Island',
                'timezone' => 'Indian/Christmas',
            ),
            159 => 
            array (
                'id' => 660,
                'country_id' => 166,
                'iso' => '',
            'name' => 'Cocos (Keeling) Islands',
                'timezone' => 'Indian/Cocos',
            ),
            160 => 
            array (
                'id' => 661,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Amazonas',
                'timezone' => 'America/Bogota',
            ),
            161 => 
            array (
                'id' => 662,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Antioquia',
                'timezone' => 'America/Bogota',
            ),
            162 => 
            array (
                'id' => 663,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Arauca',
                'timezone' => 'America/Bogota',
            ),
            163 => 
            array (
                'id' => 664,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Atlántico',
                'timezone' => 'America/Bogota',
            ),
            164 => 
            array (
                'id' => 665,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Bolívar',
                'timezone' => 'America/Bogota',
            ),
            165 => 
            array (
                'id' => 666,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Boyacá',
                'timezone' => 'America/Bogota',
            ),
            166 => 
            array (
                'id' => 667,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Caldas',
                'timezone' => 'America/Bogota',
            ),
            167 => 
            array (
                'id' => 668,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Caquetá',
                'timezone' => 'America/Bogota',
            ),
            168 => 
            array (
                'id' => 669,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Cauca',
                'timezone' => 'America/Bogota',
            ),
            169 => 
            array (
                'id' => 670,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Cesar',
                'timezone' => 'America/Bogota',
            ),
            170 => 
            array (
                'id' => 671,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Chocó',
                'timezone' => 'America/Bogota',
            ),
            171 => 
            array (
                'id' => 672,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Córdoba',
                'timezone' => 'America/Bogota',
            ),
            172 => 
            array (
                'id' => 673,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Guaviare',
                'timezone' => 'America/Bogota',
            ),
            173 => 
            array (
                'id' => 674,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Guainía',
                'timezone' => 'America/Bogota',
            ),
            174 => 
            array (
                'id' => 675,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Huila',
                'timezone' => 'America/Bogota',
            ),
            175 => 
            array (
                'id' => 676,
                'country_id' => 170,
                'iso' => '',
                'name' => 'La Guajira',
                'timezone' => 'America/Bogota',
            ),
            176 => 
            array (
                'id' => 677,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Magdalena',
                'timezone' => 'America/Bogota',
            ),
            177 => 
            array (
                'id' => 678,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Meta',
                'timezone' => 'America/Bogota',
            ),
            178 => 
            array (
                'id' => 679,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Nariño',
                'timezone' => 'America/Bogota',
            ),
            179 => 
            array (
                'id' => 680,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Norte de Santander',
                'timezone' => 'America/Bogota',
            ),
            180 => 
            array (
                'id' => 681,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Putumayo',
                'timezone' => 'America/Bogota',
            ),
            181 => 
            array (
                'id' => 682,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Quindío',
                'timezone' => 'America/Bogota',
            ),
            182 => 
            array (
                'id' => 683,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Risaralda',
                'timezone' => 'America/Bogota',
            ),
            183 => 
            array (
                'id' => 684,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Archipiélago de San Andrés, Providencia y San',
                'timezone' => 'America/Bogota',
            ),
            184 => 
            array (
                'id' => 685,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Santander',
                'timezone' => 'America/Bogota',
            ),
            185 => 
            array (
                'id' => 686,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Sucre',
                'timezone' => 'America/Bogota',
            ),
            186 => 
            array (
                'id' => 687,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Tolima',
                'timezone' => 'America/Bogota',
            ),
            187 => 
            array (
                'id' => 688,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Valle del Cauca',
                'timezone' => 'America/Bogota',
            ),
            188 => 
            array (
                'id' => 689,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Vaupés',
                'timezone' => 'America/Bogota',
            ),
            189 => 
            array (
                'id' => 690,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Vichada',
                'timezone' => 'America/Bogota',
            ),
            190 => 
            array (
                'id' => 691,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Casanare',
                'timezone' => 'America/Bogota',
            ),
            191 => 
            array (
                'id' => 692,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Cundinamarca',
                'timezone' => 'America/Bogota',
            ),
            192 => 
            array (
                'id' => 693,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Bogota D.C.',
                'timezone' => 'America/Bogota',
            ),
            193 => 
            array (
                'id' => 694,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Bolívar',
                'timezone' => 'America/Bogota',
            ),
            194 => 
            array (
                'id' => 695,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Boyacá',
                'timezone' => 'America/Bogota',
            ),
            195 => 
            array (
                'id' => 696,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Caldas',
                'timezone' => 'America/Bogota',
            ),
            196 => 
            array (
                'id' => 697,
                'country_id' => 170,
                'iso' => '',
                'name' => 'Magdalena',
                'timezone' => 'America/Bogota',
            ),
            197 => 
            array (
                'id' => 698,
                'country_id' => 174,
                'iso' => '',
                'name' => 'Anjouan',
                'timezone' => 'Indian/Comoro',
            ),
            198 => 
            array (
                'id' => 699,
                'country_id' => 174,
                'iso' => '',
                'name' => 'Grande Comore',
                'timezone' => 'Indian/Comoro',
            ),
            199 => 
            array (
                'id' => 700,
                'country_id' => 174,
                'iso' => '',
                'name' => 'Mohéli',
                'timezone' => 'Indian/Comoro',
            ),
            200 => 
            array (
                'id' => 701,
                'country_id' => 175,
                'iso' => '',
                'name' => 'Mayotte',
                'timezone' => 'Indian/Mayotte',
            ),
            201 => 
            array (
                'id' => 702,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Bouenza',
                'timezone' => 'Africa/Brazzaville',
            ),
            202 => 
            array (
                'id' => 703,
                'country_id' => 178,
                'iso' => '',
                'name' => 'CF03',
                'timezone' => 'Africa/Brazzaville',
            ),
            203 => 
            array (
                'id' => 704,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Kouilou',
                'timezone' => 'Africa/Brazzaville',
            ),
            204 => 
            array (
                'id' => 705,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Lékoumou',
                'timezone' => 'Africa/Brazzaville',
            ),
            205 => 
            array (
                'id' => 706,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Likouala',
                'timezone' => 'Africa/Brazzaville',
            ),
            206 => 
            array (
                'id' => 707,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Niari',
                'timezone' => 'Africa/Brazzaville',
            ),
            207 => 
            array (
                'id' => 708,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Plateaux',
                'timezone' => 'Africa/Brazzaville',
            ),
            208 => 
            array (
                'id' => 709,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Sangha',
                'timezone' => 'Africa/Brazzaville',
            ),
            209 => 
            array (
                'id' => 710,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Pool',
                'timezone' => 'Africa/Brazzaville',
            ),
            210 => 
            array (
                'id' => 711,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Brazzaville',
                'timezone' => 'Africa/Brazzaville',
            ),
            211 => 
            array (
                'id' => 712,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Cuvette',
                'timezone' => 'Africa/Brazzaville',
            ),
            212 => 
            array (
                'id' => 713,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Cuvette-Ouest',
                'timezone' => 'Africa/Brazzaville',
            ),
            213 => 
            array (
                'id' => 714,
                'country_id' => 178,
                'iso' => '',
                'name' => 'Pointe-Noire',
                'timezone' => 'Africa/Brazzaville',
            ),
            214 => 
            array (
                'id' => 715,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Bandundu',
                'timezone' => 'Africa/Kinshasa',
            ),
            215 => 
            array (
                'id' => 716,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Équateur',
                'timezone' => 'Africa/Kinshasa',
            ),
            216 => 
            array (
                'id' => 717,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Kasaï-Occidental',
                'timezone' => 'Africa/Lubumbashi',
            ),
            217 => 
            array (
                'id' => 718,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Kasaï-Oriental',
                'timezone' => 'Africa/Lubumbashi',
            ),
            218 => 
            array (
                'id' => 719,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Katanga',
                'timezone' => 'Africa/Lubumbashi',
            ),
            219 => 
            array (
                'id' => 720,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Kinshasa',
                'timezone' => 'Africa/Kinshasa',
            ),
            220 => 
            array (
                'id' => 721,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Bas-Congo',
                'timezone' => 'Africa/Kinshasa',
            ),
            221 => 
            array (
                'id' => 722,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Orientale',
                'timezone' => 'Africa/Lubumbashi',
            ),
            222 => 
            array (
                'id' => 723,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Maniema',
                'timezone' => 'Africa/Lubumbashi',
            ),
            223 => 
            array (
                'id' => 724,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Nord-Kivu',
                'timezone' => 'Africa/Lubumbashi',
            ),
            224 => 
            array (
                'id' => 725,
                'country_id' => 180,
                'iso' => '',
                'name' => 'Sud-Kivu',
                'timezone' => 'Africa/Lubumbashi',
            ),
            225 => 
            array (
                'id' => 726,
                'country_id' => 184,
                'iso' => '',
                'name' => 'Cook Islands',
                'timezone' => 'Pacific/Rarotonga',
            ),
            226 => 
            array (
                'id' => 727,
                'country_id' => 188,
                'iso' => '',
                'name' => 'Alajuela',
                'timezone' => 'America/Costa_Rica',
            ),
            227 => 
            array (
                'id' => 728,
                'country_id' => 188,
                'iso' => '',
                'name' => 'Cartago',
                'timezone' => 'America/Costa_Rica',
            ),
            228 => 
            array (
                'id' => 729,
                'country_id' => 188,
                'iso' => '',
                'name' => 'Guanacaste',
                'timezone' => 'America/Costa_Rica',
            ),
            229 => 
            array (
                'id' => 730,
                'country_id' => 188,
                'iso' => '',
                'name' => 'Heredia',
                'timezone' => 'America/Costa_Rica',
            ),
            230 => 
            array (
                'id' => 731,
                'country_id' => 188,
                'iso' => '',
                'name' => 'Limón',
                'timezone' => 'America/Costa_Rica',
            ),
            231 => 
            array (
                'id' => 732,
                'country_id' => 188,
                'iso' => '',
                'name' => 'Puntarenas',
                'timezone' => 'America/Costa_Rica',
            ),
            232 => 
            array (
                'id' => 733,
                'country_id' => 188,
                'iso' => '',
                'name' => 'San José',
                'timezone' => 'America/Costa_Rica',
            ),
            233 => 
            array (
                'id' => 734,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Bjelovarsko-Bilogorska',
                'timezone' => 'Europe/Zagreb',
            ),
            234 => 
            array (
                'id' => 735,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Brodsko-Posavska',
                'timezone' => 'Europe/Zagreb',
            ),
            235 => 
            array (
                'id' => 736,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Dubrovačko-Neretvanska',
                'timezone' => 'Europe/Zagreb',
            ),
            236 => 
            array (
                'id' => 737,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Istarska',
                'timezone' => 'Europe/Zagreb',
            ),
            237 => 
            array (
                'id' => 738,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Karlovačka',
                'timezone' => 'Europe/Zagreb',
            ),
            238 => 
            array (
                'id' => 739,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Koprivničko-Križevačka',
                'timezone' => 'Europe/Zagreb',
            ),
            239 => 
            array (
                'id' => 740,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Krapinsko-Zagorska',
                'timezone' => 'Europe/Zagreb',
            ),
            240 => 
            array (
                'id' => 741,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Ličko-Senjska',
                'timezone' => 'Europe/Zagreb',
            ),
            241 => 
            array (
                'id' => 742,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Međimurska',
                'timezone' => 'Europe/Zagreb',
            ),
            242 => 
            array (
                'id' => 743,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Osječko-Baranjska',
                'timezone' => 'Europe/Zagreb',
            ),
            243 => 
            array (
                'id' => 744,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Požeško-Slavonska',
                'timezone' => 'Europe/Zagreb',
            ),
            244 => 
            array (
                'id' => 745,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Primorsko-Goranska',
                'timezone' => 'Europe/Zagreb',
            ),
            245 => 
            array (
                'id' => 746,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Šibensko-Kniniska',
                'timezone' => 'Europe/Zagreb',
            ),
            246 => 
            array (
                'id' => 747,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Sisačko-Moslavačka',
                'timezone' => 'Europe/Zagreb',
            ),
            247 => 
            array (
                'id' => 748,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Splitsko-Dalmatinska',
                'timezone' => 'Europe/Zagreb',
            ),
            248 => 
            array (
                'id' => 749,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Varaždinska',
                'timezone' => 'Europe/Zagreb',
            ),
            249 => 
            array (
                'id' => 750,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Virovitičk-Podravska',
                'timezone' => 'Europe/Zagreb',
            ),
            250 => 
            array (
                'id' => 751,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Vukovarsko-Srijemska',
                'timezone' => 'Europe/Zagreb',
            ),
            251 => 
            array (
                'id' => 752,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Zadarska',
                'timezone' => 'Europe/Zagreb',
            ),
            252 => 
            array (
                'id' => 753,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Zagrebačka',
                'timezone' => 'Europe/Zagreb',
            ),
            253 => 
            array (
                'id' => 754,
                'country_id' => 191,
                'iso' => '',
                'name' => 'Grad Zagreb',
                'timezone' => 'Europe/Zagreb',
            ),
            254 => 
            array (
                'id' => 755,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Pinar del Río',
                'timezone' => 'America/Havana',
            ),
            255 => 
            array (
                'id' => 756,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Ciudad de La Habana',
                'timezone' => 'America/Havana',
            ),
            256 => 
            array (
                'id' => 757,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Matanzas',
                'timezone' => 'America/Havana',
            ),
            257 => 
            array (
                'id' => 758,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Isla de la Juventud',
                'timezone' => 'America/Havana',
            ),
            258 => 
            array (
                'id' => 759,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Camagüey',
                'timezone' => 'America/Havana',
            ),
            259 => 
            array (
                'id' => 760,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Ciego de Ávila',
                'timezone' => 'America/Havana',
            ),
            260 => 
            array (
                'id' => 761,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Cienfuegos',
                'timezone' => 'America/Havana',
            ),
            261 => 
            array (
                'id' => 762,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Granma',
                'timezone' => 'America/Havana',
            ),
            262 => 
            array (
                'id' => 763,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Guantánamo',
                'timezone' => 'America/Havana',
            ),
            263 => 
            array (
                'id' => 764,
                'country_id' => 192,
                'iso' => '',
                'name' => 'La Habana',
                'timezone' => 'America/Havana',
            ),
            264 => 
            array (
                'id' => 765,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Holguín',
                'timezone' => 'America/Havana',
            ),
            265 => 
            array (
                'id' => 766,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Las Tunas',
                'timezone' => 'America/Havana',
            ),
            266 => 
            array (
                'id' => 767,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Sancti Spíritus',
                'timezone' => 'America/Havana',
            ),
            267 => 
            array (
                'id' => 768,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Santiago de Cuba',
                'timezone' => 'America/Havana',
            ),
            268 => 
            array (
                'id' => 769,
                'country_id' => 192,
                'iso' => '',
                'name' => 'Villa Clara',
                'timezone' => 'America/Havana',
            ),
            269 => 
            array (
                'id' => 770,
                'country_id' => 196,
                'iso' => '',
                'name' => 'Famagusta',
                'timezone' => 'Asia/Nicosia',
            ),
            270 => 
            array (
                'id' => 771,
                'country_id' => 196,
                'iso' => '',
                'name' => 'Kyrenia',
                'timezone' => 'Asia/Nicosia',
            ),
            271 => 
            array (
                'id' => 772,
                'country_id' => 196,
                'iso' => '',
                'name' => 'Larnaca',
                'timezone' => 'Asia/Nicosia',
            ),
            272 => 
            array (
                'id' => 773,
                'country_id' => 196,
                'iso' => '',
                'name' => 'Nicosia',
                'timezone' => 'Asia/Nicosia',
            ),
            273 => 
            array (
                'id' => 774,
                'country_id' => 196,
                'iso' => '',
                'name' => 'Limassol',
                'timezone' => 'Asia/Nicosia',
            ),
            274 => 
            array (
                'id' => 775,
                'country_id' => 196,
                'iso' => '',
                'name' => 'Paphos',
                'timezone' => 'Asia/Nicosia',
            ),
            275 => 
            array (
                'id' => 776,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Hradec Kralove',
                'timezone' => 'Europe/Prague',
            ),
            276 => 
            array (
                'id' => 777,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Jablonec nad Nisou',
                'timezone' => 'Europe/Prague',
            ),
            277 => 
            array (
                'id' => 778,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Jiein',
                'timezone' => 'Europe/Prague',
            ),
            278 => 
            array (
                'id' => 779,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Jihlava',
                'timezone' => 'Europe/Prague',
            ),
            279 => 
            array (
                'id' => 780,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Kolin',
                'timezone' => 'Europe/Prague',
            ),
            280 => 
            array (
                'id' => 781,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Liberec',
                'timezone' => 'Europe/Prague',
            ),
            281 => 
            array (
                'id' => 782,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Melnik',
                'timezone' => 'Europe/Prague',
            ),
            282 => 
            array (
                'id' => 783,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Mlada Boleslav',
                'timezone' => 'Europe/Prague',
            ),
            283 => 
            array (
                'id' => 784,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Nachod',
                'timezone' => 'Europe/Prague',
            ),
            284 => 
            array (
                'id' => 785,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Nymburk',
                'timezone' => 'Europe/Prague',
            ),
            285 => 
            array (
                'id' => 786,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Pardubice',
                'timezone' => 'Europe/Prague',
            ),
            286 => 
            array (
                'id' => 787,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Hlavní Mesto Praha',
                'timezone' => 'Europe/Prague',
            ),
            287 => 
            array (
                'id' => 788,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Semily',
                'timezone' => 'Europe/Prague',
            ),
            288 => 
            array (
                'id' => 789,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Trutnov',
                'timezone' => 'Europe/Prague',
            ),
            289 => 
            array (
                'id' => 790,
                'country_id' => 203,
                'iso' => '',
                'name' => 'South Moravian Region',
                'timezone' => 'Europe/Prague',
            ),
            290 => 
            array (
                'id' => 791,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Jihočeský Kraj',
                'timezone' => 'Europe/Prague',
            ),
            291 => 
            array (
                'id' => 792,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Vysočina',
                'timezone' => 'Europe/Prague',
            ),
            292 => 
            array (
                'id' => 793,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Karlovarský Kraj',
                'timezone' => 'Europe/Prague',
            ),
            293 => 
            array (
                'id' => 794,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Královéhradecký Kraj',
                'timezone' => 'Europe/Prague',
            ),
            294 => 
            array (
                'id' => 795,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Liberecký Kraj',
                'timezone' => 'Europe/Prague',
            ),
            295 => 
            array (
                'id' => 796,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Olomoucký Kraj',
                'timezone' => 'Europe/Prague',
            ),
            296 => 
            array (
                'id' => 797,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Moravskoslezský Kraj',
                'timezone' => 'Europe/Prague',
            ),
            297 => 
            array (
                'id' => 798,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Pardubický Kraj',
                'timezone' => 'Europe/Prague',
            ),
            298 => 
            array (
                'id' => 799,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Plzeňský Kraj',
                'timezone' => 'Europe/Prague',
            ),
            299 => 
            array (
                'id' => 800,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Středočeský Kraj',
                'timezone' => 'Europe/Prague',
            ),
            300 => 
            array (
                'id' => 801,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Ústecký Kraj',
                'timezone' => 'Europe/Prague',
            ),
            301 => 
            array (
                'id' => 802,
                'country_id' => 203,
                'iso' => '',
                'name' => 'Zlínský Kraj',
                'timezone' => 'Europe/Prague',
            ),
            302 => 
            array (
                'id' => 803,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Atakora',
                'timezone' => 'Africa/Porto-Novo',
            ),
            303 => 
            array (
                'id' => 804,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Atlantique',
                'timezone' => 'Africa/Porto-Novo',
            ),
            304 => 
            array (
                'id' => 805,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Alibori',
                'timezone' => 'Africa/Porto-Novo',
            ),
            305 => 
            array (
                'id' => 806,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Borgou',
                'timezone' => 'Africa/Porto-Novo',
            ),
            306 => 
            array (
                'id' => 807,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Collines',
                'timezone' => 'Africa/Porto-Novo',
            ),
            307 => 
            array (
                'id' => 808,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Kouffo',
                'timezone' => 'Africa/Porto-Novo',
            ),
            308 => 
            array (
                'id' => 809,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Donga',
                'timezone' => 'Africa/Porto-Novo',
            ),
            309 => 
            array (
                'id' => 810,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Littoral',
                'timezone' => 'Africa/Porto-Novo',
            ),
            310 => 
            array (
                'id' => 811,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Mono',
                'timezone' => 'Africa/Porto-Novo',
            ),
            311 => 
            array (
                'id' => 812,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Ouémé',
                'timezone' => 'Africa/Porto-Novo',
            ),
            312 => 
            array (
                'id' => 813,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Plateau',
                'timezone' => 'Africa/Porto-Novo',
            ),
            313 => 
            array (
                'id' => 814,
                'country_id' => 204,
                'iso' => '',
                'name' => 'Zou',
                'timezone' => 'Africa/Porto-Novo',
            ),
            314 => 
            array (
                'id' => 815,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Århus',
                'timezone' => 'Europe/Copenhagen',
            ),
            315 => 
            array (
                'id' => 816,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Bornholm',
                'timezone' => 'Europe/Copenhagen',
            ),
            316 => 
            array (
                'id' => 817,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Frederiksborg',
                'timezone' => 'Europe/Copenhagen',
            ),
            317 => 
            array (
                'id' => 818,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Fyn',
                'timezone' => 'Europe/Copenhagen',
            ),
            318 => 
            array (
                'id' => 819,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Copenhagen city',
                'timezone' => 'Europe/Copenhagen',
            ),
            319 => 
            array (
                'id' => 820,
                'country_id' => 208,
                'iso' => '',
                'name' => 'København',
                'timezone' => 'Europe/Copenhagen',
            ),
            320 => 
            array (
                'id' => 821,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Nordjylland',
                'timezone' => 'Europe/Copenhagen',
            ),
            321 => 
            array (
                'id' => 822,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Ribe',
                'timezone' => 'Europe/Copenhagen',
            ),
            322 => 
            array (
                'id' => 823,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Ringkøbing',
                'timezone' => 'Europe/Copenhagen',
            ),
            323 => 
            array (
                'id' => 824,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Roskilde',
                'timezone' => 'Europe/Copenhagen',
            ),
            324 => 
            array (
                'id' => 825,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Sønderjylland',
                'timezone' => 'Europe/Copenhagen',
            ),
            325 => 
            array (
                'id' => 826,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Storstrøm',
                'timezone' => 'Europe/Copenhagen',
            ),
            326 => 
            array (
                'id' => 827,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Vejle',
                'timezone' => 'Europe/Copenhagen',
            ),
            327 => 
            array (
                'id' => 828,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Vestsjælland',
                'timezone' => 'Europe/Copenhagen',
            ),
            328 => 
            array (
                'id' => 829,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Viborg',
                'timezone' => 'Europe/Copenhagen',
            ),
            329 => 
            array (
                'id' => 830,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Fredriksberg',
                'timezone' => 'Europe/Copenhagen',
            ),
            330 => 
            array (
                'id' => 831,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Capital Region',
                'timezone' => 'Europe/Copenhagen',
            ),
            331 => 
            array (
                'id' => 832,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Central Jutland',
                'timezone' => 'Europe/Copenhagen',
            ),
            332 => 
            array (
                'id' => 833,
                'country_id' => 208,
                'iso' => '',
                'name' => 'North Jutland',
                'timezone' => 'Europe/Copenhagen',
            ),
            333 => 
            array (
                'id' => 834,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Region Zealand',
                'timezone' => 'Europe/Copenhagen',
            ),
            334 => 
            array (
                'id' => 835,
                'country_id' => 208,
                'iso' => '',
                'name' => 'Region South Denmark',
                'timezone' => 'Europe/Copenhagen',
            ),
            335 => 
            array (
                'id' => 836,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Andrew',
                'timezone' => 'America/Dominica',
            ),
            336 => 
            array (
                'id' => 837,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint David',
                'timezone' => 'America/Dominica',
            ),
            337 => 
            array (
                'id' => 838,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint George',
                'timezone' => 'America/Dominica',
            ),
            338 => 
            array (
                'id' => 839,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint John',
                'timezone' => 'America/Dominica',
            ),
            339 => 
            array (
                'id' => 840,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Joseph',
                'timezone' => 'America/Dominica',
            ),
            340 => 
            array (
                'id' => 841,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Luke',
                'timezone' => 'America/Dominica',
            ),
            341 => 
            array (
                'id' => 842,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Mark',
                'timezone' => 'America/Dominica',
            ),
            342 => 
            array (
                'id' => 843,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Patrick',
                'timezone' => 'America/Dominica',
            ),
            343 => 
            array (
                'id' => 844,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Paul',
                'timezone' => 'America/Dominica',
            ),
            344 => 
            array (
                'id' => 845,
                'country_id' => 212,
                'iso' => '',
                'name' => 'Saint Peter',
                'timezone' => 'America/Dominica',
            ),
            345 => 
            array (
                'id' => 846,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Azua',
                'timezone' => 'America/Santo_Domingo',
            ),
            346 => 
            array (
                'id' => 847,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Baoruco',
                'timezone' => 'America/Santo_Domingo',
            ),
            347 => 
            array (
                'id' => 848,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Barahona',
                'timezone' => 'America/Santo_Domingo',
            ),
            348 => 
            array (
                'id' => 849,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Dajabón',
                'timezone' => 'America/Santo_Domingo',
            ),
            349 => 
            array (
                'id' => 850,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Duarte',
                'timezone' => 'America/Santo_Domingo',
            ),
            350 => 
            array (
                'id' => 851,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Espaillat',
                'timezone' => 'America/Santo_Domingo',
            ),
            351 => 
            array (
                'id' => 852,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Independencia',
                'timezone' => 'America/Santo_Domingo',
            ),
            352 => 
            array (
                'id' => 853,
                'country_id' => 214,
                'iso' => '',
                'name' => 'La Altagracia',
                'timezone' => 'America/Santo_Domingo',
            ),
            353 => 
            array (
                'id' => 854,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Elías Piña',
                'timezone' => 'America/Santo_Domingo',
            ),
            354 => 
            array (
                'id' => 855,
                'country_id' => 214,
                'iso' => '',
                'name' => 'La Romana',
                'timezone' => 'America/Santo_Domingo',
            ),
            355 => 
            array (
                'id' => 856,
                'country_id' => 214,
                'iso' => '',
                'name' => 'María Trinidad Sánchez',
                'timezone' => 'America/Santo_Domingo',
            ),
            356 => 
            array (
                'id' => 857,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Monte Cristi',
                'timezone' => 'America/Santo_Domingo',
            ),
            357 => 
            array (
                'id' => 858,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Pedernales',
                'timezone' => 'America/Santo_Domingo',
            ),
            358 => 
            array (
                'id' => 859,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Puerto Plata',
                'timezone' => 'America/Santo_Domingo',
            ),
            359 => 
            array (
                'id' => 860,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Salcedo',
                'timezone' => 'America/Santo_Domingo',
            ),
            360 => 
            array (
                'id' => 861,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Samaná',
                'timezone' => 'America/Santo_Domingo',
            ),
            361 => 
            array (
                'id' => 862,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Sánchez Ramírez',
                'timezone' => 'America/Santo_Domingo',
            ),
            362 => 
            array (
                'id' => 863,
                'country_id' => 214,
                'iso' => '',
                'name' => 'San Juan',
                'timezone' => 'America/Santo_Domingo',
            ),
            363 => 
            array (
                'id' => 864,
                'country_id' => 214,
                'iso' => '',
                'name' => 'San Pedro de Macorís',
                'timezone' => 'America/Santo_Domingo',
            ),
            364 => 
            array (
                'id' => 865,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Santiago',
                'timezone' => 'America/Santo_Domingo',
            ),
            365 => 
            array (
                'id' => 866,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Santiago Rodríguez',
                'timezone' => 'America/Santo_Domingo',
            ),
            366 => 
            array (
                'id' => 867,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Valverde',
                'timezone' => 'America/Santo_Domingo',
            ),
            367 => 
            array (
                'id' => 868,
                'country_id' => 214,
                'iso' => '',
                'name' => 'El Seíbo',
                'timezone' => 'America/Santo_Domingo',
            ),
            368 => 
            array (
                'id' => 869,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Hato Mayor',
                'timezone' => 'America/Santo_Domingo',
            ),
            369 => 
            array (
                'id' => 870,
                'country_id' => 214,
                'iso' => '',
                'name' => 'La Vega',
                'timezone' => 'America/Santo_Domingo',
            ),
            370 => 
            array (
                'id' => 871,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Monseñor Nouel',
                'timezone' => 'America/Santo_Domingo',
            ),
            371 => 
            array (
                'id' => 872,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Monte Plata',
                'timezone' => 'America/Santo_Domingo',
            ),
            372 => 
            array (
                'id' => 873,
                'country_id' => 214,
                'iso' => '',
                'name' => 'San Cristóbal',
                'timezone' => 'America/Santo_Domingo',
            ),
            373 => 
            array (
                'id' => 874,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Distrito Nacional',
                'timezone' => 'America/Santo_Domingo',
            ),
            374 => 
            array (
                'id' => 875,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Peravia',
                'timezone' => 'America/Santo_Domingo',
            ),
            375 => 
            array (
                'id' => 876,
                'country_id' => 214,
                'iso' => '',
                'name' => 'San José de Ocoa',
                'timezone' => 'America/Santo_Domingo',
            ),
            376 => 
            array (
                'id' => 877,
                'country_id' => 214,
                'iso' => '',
                'name' => 'Santo Domingo',
                'timezone' => 'America/Santo_Domingo',
            ),
            377 => 
            array (
                'id' => 878,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Galápagos',
                'timezone' => 'Pacific/Galapagos',
            ),
            378 => 
            array (
                'id' => 879,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Azuay',
                'timezone' => 'America/Guayaquil',
            ),
            379 => 
            array (
                'id' => 880,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Bolívar',
                'timezone' => 'America/Guayaquil',
            ),
            380 => 
            array (
                'id' => 881,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Cañar',
                'timezone' => 'America/Guayaquil',
            ),
            381 => 
            array (
                'id' => 882,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Carchi',
                'timezone' => 'America/Guayaquil',
            ),
            382 => 
            array (
                'id' => 883,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Chimborazo',
                'timezone' => 'America/Guayaquil',
            ),
            383 => 
            array (
                'id' => 884,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Cotopaxi',
                'timezone' => 'America/Guayaquil',
            ),
            384 => 
            array (
                'id' => 885,
                'country_id' => 218,
                'iso' => '',
                'name' => 'El Oro',
                'timezone' => 'America/Guayaquil',
            ),
            385 => 
            array (
                'id' => 886,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Esmeraldas',
                'timezone' => 'America/Guayaquil',
            ),
            386 => 
            array (
                'id' => 887,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Guayas',
                'timezone' => 'America/Guayaquil',
            ),
            387 => 
            array (
                'id' => 888,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Imbabura',
                'timezone' => 'America/Guayaquil',
            ),
            388 => 
            array (
                'id' => 889,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Loja',
                'timezone' => 'America/Guayaquil',
            ),
            389 => 
            array (
                'id' => 890,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Los Ríos',
                'timezone' => 'America/Guayaquil',
            ),
            390 => 
            array (
                'id' => 891,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Manabí',
                'timezone' => 'America/Guayaquil',
            ),
            391 => 
            array (
                'id' => 892,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Morona-Santiago',
                'timezone' => 'America/Guayaquil',
            ),
            392 => 
            array (
                'id' => 893,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Napo',
                'timezone' => 'America/Guayaquil',
            ),
            393 => 
            array (
                'id' => 894,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Pastaza',
                'timezone' => 'America/Guayaquil',
            ),
            394 => 
            array (
                'id' => 895,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Pichincha',
                'timezone' => 'America/Guayaquil',
            ),
            395 => 
            array (
                'id' => 896,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Tungurahua',
                'timezone' => 'America/Guayaquil',
            ),
            396 => 
            array (
                'id' => 897,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Zamora-Chinchipe',
                'timezone' => 'America/Guayaquil',
            ),
            397 => 
            array (
                'id' => 898,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Sucumbios',
                'timezone' => 'America/Guayaquil',
            ),
            398 => 
            array (
                'id' => 899,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Napo',
                'timezone' => 'America/Guayaquil',
            ),
            399 => 
            array (
                'id' => 900,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Orellana',
                'timezone' => 'America/Guayaquil',
            ),
            400 => 
            array (
                'id' => 901,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Provincia de Santa Elena',
                'timezone' => 'America/Guayaquil',
            ),
            401 => 
            array (
                'id' => 902,
                'country_id' => 218,
                'iso' => '',
                'name' => 'Provincia de Santo Domingo de los Tsáchilas',
                'timezone' => 'America/Guayaquil',
            ),
            402 => 
            array (
                'id' => 903,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Ahuachapán',
                'timezone' => 'America/El_Salvador',
            ),
            403 => 
            array (
                'id' => 904,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Cabañas',
                'timezone' => 'America/El_Salvador',
            ),
            404 => 
            array (
                'id' => 905,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Chalatenango',
                'timezone' => 'America/El_Salvador',
            ),
            405 => 
            array (
                'id' => 906,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Cuscatlán',
                'timezone' => 'America/El_Salvador',
            ),
            406 => 
            array (
                'id' => 907,
                'country_id' => 222,
                'iso' => '',
                'name' => 'La Libertad',
                'timezone' => 'America/El_Salvador',
            ),
            407 => 
            array (
                'id' => 908,
                'country_id' => 222,
                'iso' => '',
                'name' => 'La Paz',
                'timezone' => 'America/El_Salvador',
            ),
            408 => 
            array (
                'id' => 909,
                'country_id' => 222,
                'iso' => '',
                'name' => 'La Unión',
                'timezone' => 'America/El_Salvador',
            ),
            409 => 
            array (
                'id' => 910,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Morazán',
                'timezone' => 'America/El_Salvador',
            ),
            410 => 
            array (
                'id' => 911,
                'country_id' => 222,
                'iso' => '',
                'name' => 'San Miguel',
                'timezone' => 'America/El_Salvador',
            ),
            411 => 
            array (
                'id' => 912,
                'country_id' => 222,
                'iso' => '',
                'name' => 'San Salvador',
                'timezone' => 'America/El_Salvador',
            ),
            412 => 
            array (
                'id' => 913,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Santa Ana',
                'timezone' => 'America/El_Salvador',
            ),
            413 => 
            array (
                'id' => 914,
                'country_id' => 222,
                'iso' => '',
                'name' => 'San Vicente',
                'timezone' => 'America/El_Salvador',
            ),
            414 => 
            array (
                'id' => 915,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Sonsonate',
                'timezone' => 'America/El_Salvador',
            ),
            415 => 
            array (
                'id' => 916,
                'country_id' => 222,
                'iso' => '',
                'name' => 'Usulután',
                'timezone' => 'America/El_Salvador',
            ),
            416 => 
            array (
                'id' => 917,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Annobón',
                'timezone' => 'Africa/Malabo',
            ),
            417 => 
            array (
                'id' => 918,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Bioko Norte',
                'timezone' => 'Africa/Malabo',
            ),
            418 => 
            array (
                'id' => 919,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Bioko Sur',
                'timezone' => 'Africa/Malabo',
            ),
            419 => 
            array (
                'id' => 920,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Centro Sur',
                'timezone' => 'Africa/Malabo',
            ),
            420 => 
            array (
                'id' => 921,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Kié-Ntem',
                'timezone' => 'Africa/Malabo',
            ),
            421 => 
            array (
                'id' => 922,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Litoral',
                'timezone' => 'Africa/Malabo',
            ),
            422 => 
            array (
                'id' => 923,
                'country_id' => 226,
                'iso' => '',
                'name' => 'Wele-Nzas',
                'timezone' => 'Africa/Malabo',
            ),
            423 => 
            array (
                'id' => 924,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Arsi',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            424 => 
            array (
                'id' => 925,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Gonder',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            425 => 
            array (
                'id' => 926,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Bale',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            426 => 
            array (
                'id' => 927,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Eritrea',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            427 => 
            array (
                'id' => 928,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Gamo Gofa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            428 => 
            array (
                'id' => 929,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Gojam',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            429 => 
            array (
                'id' => 930,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Harerge',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            430 => 
            array (
                'id' => 931,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Ilubabor',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            431 => 
            array (
                'id' => 932,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Kefa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            432 => 
            array (
                'id' => 933,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Addis Abeba',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            433 => 
            array (
                'id' => 934,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Sidamo',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            434 => 
            array (
                'id' => 935,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Tigray',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            435 => 
            array (
                'id' => 936,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Welega Kifle Hager',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            436 => 
            array (
                'id' => 937,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Welo',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            437 => 
            array (
                'id' => 938,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Adis Abeba',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            438 => 
            array (
                'id' => 939,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Asosa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            439 => 
            array (
                'id' => 940,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Borena ',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            440 => 
            array (
                'id' => 941,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Debub Gonder',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            441 => 
            array (
                'id' => 942,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Debub Shewa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            442 => 
            array (
                'id' => 943,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Debub Welo',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            443 => 
            array (
                'id' => 944,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Dire Dawa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            444 => 
            array (
                'id' => 945,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Gambela',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            445 => 
            array (
                'id' => 946,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Metekel',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            446 => 
            array (
                'id' => 947,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Mirab Gojam',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            447 => 
            array (
                'id' => 948,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Mirab Harerge',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            448 => 
            array (
                'id' => 949,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Mirab Shewa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            449 => 
            array (
                'id' => 950,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Misrak Gojam',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            450 => 
            array (
                'id' => 951,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Misrak Harerge',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            451 => 
            array (
                'id' => 952,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Nazret',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            452 => 
            array (
                'id' => 953,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Ogaden',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            453 => 
            array (
                'id' => 954,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Omo',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            454 => 
            array (
                'id' => 955,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Semen Gonder',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            455 => 
            array (
                'id' => 956,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Semen Shewa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            456 => 
            array (
                'id' => 957,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Semen Welo',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            457 => 
            array (
                'id' => 958,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Tigray',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            458 => 
            array (
                'id' => 959,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Bale',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            459 => 
            array (
                'id' => 960,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Gamo Gofa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            460 => 
            array (
                'id' => 961,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Ilubabor',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            461 => 
            array (
                'id' => 962,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Kefa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            462 => 
            array (
                'id' => 963,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Sidamo',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            463 => 
            array (
                'id' => 964,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Welega',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            464 => 
            array (
                'id' => 965,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Ādīs Ābeba',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            465 => 
            array (
                'id' => 966,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Āfar',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            466 => 
            array (
                'id' => 967,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Āmara',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            467 => 
            array (
                'id' => 968,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Bīnshangul Gumuz',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            468 => 
            array (
                'id' => 969,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Dirē Dawa',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            469 => 
            array (
                'id' => 970,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Gambēla Hizboch',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            470 => 
            array (
                'id' => 971,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Hārerī Hizb',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            471 => 
            array (
                'id' => 972,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Oromīya',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            472 => 
            array (
                'id' => 973,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Sumalē',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            473 => 
            array (
                'id' => 974,
                'country_id' => 231,
                'iso' => '',
                'name' => 'Tigray',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            474 => 
            array (
                'id' => 975,
                'country_id' => 231,
                'iso' => '',
                'name' => 'YeDebub Bihēroch Bihēreseboch na Hizboch',
                'timezone' => 'Africa/Addis_Ababa',
            ),
            475 => 
            array (
                'id' => 976,
                'country_id' => 232,
                'iso' => '',
                'name' => 'Ānseba',
                'timezone' => 'Africa/Asmara',
            ),
            476 => 
            array (
                'id' => 977,
                'country_id' => 232,
                'iso' => '',
                'name' => 'Debub',
                'timezone' => 'Africa/Asmara',
            ),
            477 => 
            array (
                'id' => 978,
                'country_id' => 232,
                'iso' => '',
                'name' => 'Debubawī Kʼeyih Bahrī',
                'timezone' => 'Africa/Asmara',
            ),
            478 => 
            array (
                'id' => 979,
                'country_id' => 232,
                'iso' => '',
                'name' => 'Gash Barka',
                'timezone' => 'Africa/Asmara',
            ),
            479 => 
            array (
                'id' => 980,
                'country_id' => 232,
                'iso' => '',
                'name' => 'Maʼākel',
                'timezone' => 'Africa/Asmara',
            ),
            480 => 
            array (
                'id' => 981,
                'country_id' => 232,
                'iso' => '',
                'name' => 'Semēnawī Kʼeyih Bahrī',
                'timezone' => 'Africa/Asmara',
            ),
            481 => 
            array (
                'id' => 982,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Harjumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            482 => 
            array (
                'id' => 983,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Hiiumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            483 => 
            array (
                'id' => 984,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Ida-Virumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            484 => 
            array (
                'id' => 985,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Järvamaa',
                'timezone' => 'Europe/Tallinn',
            ),
            485 => 
            array (
                'id' => 986,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Jõgevamaa',
                'timezone' => 'Europe/Tallinn',
            ),
            486 => 
            array (
                'id' => 987,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Läänemaa',
                'timezone' => 'Europe/Tallinn',
            ),
            487 => 
            array (
                'id' => 988,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Lääne-Virumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            488 => 
            array (
                'id' => 989,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Pärnumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            489 => 
            array (
                'id' => 990,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Põlvamaa',
                'timezone' => 'Europe/Tallinn',
            ),
            490 => 
            array (
                'id' => 991,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Raplamaa',
                'timezone' => 'Europe/Tallinn',
            ),
            491 => 
            array (
                'id' => 992,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Saaremaa',
                'timezone' => 'Europe/Tallinn',
            ),
            492 => 
            array (
                'id' => 993,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Tartumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            493 => 
            array (
                'id' => 994,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Valgamaa',
                'timezone' => 'Europe/Tallinn',
            ),
            494 => 
            array (
                'id' => 995,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Viljandimaa',
                'timezone' => 'Europe/Tallinn',
            ),
            495 => 
            array (
                'id' => 996,
                'country_id' => 233,
                'iso' => '',
                'name' => 'Võrumaa',
                'timezone' => 'Europe/Tallinn',
            ),
            496 => 
            array (
                'id' => 997,
                'country_id' => 234,
                'iso' => '',
                'name' => 'Norðoyar region',
                'timezone' => 'Atlantic/Faroe',
            ),
            497 => 
            array (
                'id' => 998,
                'country_id' => 234,
                'iso' => '',
                'name' => 'Eysturoy region',
                'timezone' => 'Atlantic/Faroe',
            ),
            498 => 
            array (
                'id' => 999,
                'country_id' => 234,
                'iso' => '',
                'name' => 'Sandoy region',
                'timezone' => 'Atlantic/Faroe',
            ),
            499 => 
            array (
                'id' => 1000,
                'country_id' => 234,
                'iso' => '',
                'name' => 'Streymoy region',
                'timezone' => 'Atlantic/Faroe',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'country_id' => 234,
                'iso' => '',
                'name' => 'Suðuroy region',
                'timezone' => 'Atlantic/Faroe',
            ),
            1 => 
            array (
                'id' => 1002,
                'country_id' => 234,
                'iso' => '',
                'name' => 'Vágar region',
                'timezone' => 'Atlantic/Faroe',
            ),
            2 => 
            array (
                'id' => 1003,
                'country_id' => 238,
                'iso' => '',
            'name' => 'Falkland Islands (Islas Malvinas)',
                'timezone' => 'Atlantic/Stanley',
            ),
            3 => 
            array (
                'id' => 1004,
                'country_id' => 239,
                'iso' => '',
                'name' => 'South Georgia and The South Sandwich Islands ',
                'timezone' => 'Atlantic/South_Georgia',
            ),
            4 => 
            array (
                'id' => 1005,
                'country_id' => 242,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Pacific/Fiji',
            ),
            5 => 
            array (
                'id' => 1006,
                'country_id' => 242,
                'iso' => '',
                'name' => 'Eastern',
                'timezone' => 'Pacific/Fiji',
            ),
            6 => 
            array (
                'id' => 1007,
                'country_id' => 242,
                'iso' => '',
                'name' => 'Northern',
                'timezone' => 'Pacific/Fiji',
            ),
            7 => 
            array (
                'id' => 1008,
                'country_id' => 242,
                'iso' => '',
                'name' => 'Rotuma',
                'timezone' => 'Pacific/Fiji',
            ),
            8 => 
            array (
                'id' => 1009,
                'country_id' => 242,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Pacific/Fiji',
            ),
            9 => 
            array (
                'id' => 1010,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Åland',
                'timezone' => 'Europe/Helsinki',
            ),
            10 => 
            array (
                'id' => 1011,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Hame',
                'timezone' => 'Europe/Helsinki',
            ),
            11 => 
            array (
                'id' => 1012,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Keski-Suomi',
                'timezone' => 'Europe/Helsinki',
            ),
            12 => 
            array (
                'id' => 1013,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Kuopio',
                'timezone' => 'Europe/Helsinki',
            ),
            13 => 
            array (
                'id' => 1014,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Kymi',
                'timezone' => 'Europe/Helsinki',
            ),
            14 => 
            array (
                'id' => 1015,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Lapponia',
                'timezone' => 'Europe/Helsinki',
            ),
            15 => 
            array (
                'id' => 1016,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Mikkeli',
                'timezone' => 'Europe/Helsinki',
            ),
            16 => 
            array (
                'id' => 1017,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Oulu',
                'timezone' => 'Europe/Helsinki',
            ),
            17 => 
            array (
                'id' => 1018,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Pohjois-Karjala',
                'timezone' => 'Europe/Helsinki',
            ),
            18 => 
            array (
                'id' => 1019,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Turku ja Pori',
                'timezone' => 'Europe/Helsinki',
            ),
            19 => 
            array (
                'id' => 1020,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Uusimaa',
                'timezone' => 'Europe/Helsinki',
            ),
            20 => 
            array (
                'id' => 1021,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Vaasa',
                'timezone' => 'Europe/Helsinki',
            ),
            21 => 
            array (
                'id' => 1022,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Southern Finland',
                'timezone' => 'Europe/Helsinki',
            ),
            22 => 
            array (
                'id' => 1023,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Eastern Finland',
                'timezone' => 'Europe/Helsinki',
            ),
            23 => 
            array (
                'id' => 1024,
                'country_id' => 246,
                'iso' => '',
                'name' => 'Western Finland',
                'timezone' => 'Europe/Helsinki',
            ),
            24 => 
            array (
                'id' => 1025,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Aquitaine',
                'timezone' => 'Europe/Paris',
            ),
            25 => 
            array (
                'id' => 1026,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Auvergne',
                'timezone' => 'Europe/Paris',
            ),
            26 => 
            array (
                'id' => 1027,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Basse-Normandie',
                'timezone' => 'Europe/Paris',
            ),
            27 => 
            array (
                'id' => 1028,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Bourgogne',
                'timezone' => 'Europe/Paris',
            ),
            28 => 
            array (
                'id' => 1029,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Brittany',
                'timezone' => 'Europe/Paris',
            ),
            29 => 
            array (
                'id' => 1030,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Centre',
                'timezone' => 'Europe/Paris',
            ),
            30 => 
            array (
                'id' => 1031,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Champagne-Ardenne',
                'timezone' => 'Europe/Paris',
            ),
            31 => 
            array (
                'id' => 1032,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Corsica',
                'timezone' => 'Europe/Paris',
            ),
            32 => 
            array (
                'id' => 1033,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Franche-Comté',
                'timezone' => 'Europe/Paris',
            ),
            33 => 
            array (
                'id' => 1034,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Haute-Normandie',
                'timezone' => 'Europe/Paris',
            ),
            34 => 
            array (
                'id' => 1035,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Île-de-France',
                'timezone' => 'Europe/Paris',
            ),
            35 => 
            array (
                'id' => 1036,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Languedoc-Roussillon',
                'timezone' => 'Europe/Paris',
            ),
            36 => 
            array (
                'id' => 1037,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Limousin',
                'timezone' => 'Europe/Paris',
            ),
            37 => 
            array (
                'id' => 1038,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Lorraine',
                'timezone' => 'Europe/Paris',
            ),
            38 => 
            array (
                'id' => 1039,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Midi-Pyrénées',
                'timezone' => 'Europe/Paris',
            ),
            39 => 
            array (
                'id' => 1040,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Nord-Pas-de-Calais',
                'timezone' => 'Europe/Paris',
            ),
            40 => 
            array (
                'id' => 1041,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Pays de la Loire',
                'timezone' => 'Europe/Paris',
            ),
            41 => 
            array (
                'id' => 1042,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Picardie',
                'timezone' => 'Europe/Paris',
            ),
            42 => 
            array (
                'id' => 1043,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Poitou-Charentes',
                'timezone' => 'Europe/Paris',
            ),
            43 => 
            array (
                'id' => 1044,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Provence-Alpes-Côte dʼAzur',
                'timezone' => 'Europe/Paris',
            ),
            44 => 
            array (
                'id' => 1045,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Rhône-Alpes',
                'timezone' => 'Europe/Paris',
            ),
            45 => 
            array (
                'id' => 1046,
                'country_id' => 250,
                'iso' => '',
                'name' => 'Alsace',
                'timezone' => 'Europe/Paris',
            ),
            46 => 
            array (
                'id' => 1047,
                'country_id' => 254,
                'iso' => '',
                'name' => 'Guyane',
                'timezone' => 'America/Guyana',
            ),
            47 => 
            array (
                'id' => 1048,
                'country_id' => 260,
                'iso' => '',
                'name' => 'Saint-Paul-et-Amsterdam',
                'timezone' => 'Indian/Kerguelen',
            ),
            48 => 
            array (
                'id' => 1049,
                'country_id' => 260,
                'iso' => '',
                'name' => 'Crozet',
                'timezone' => 'Indian/Kerguelen',
            ),
            49 => 
            array (
                'id' => 1050,
                'country_id' => 260,
                'iso' => '',
                'name' => 'Kerguelen',
                'timezone' => 'Indian/Kerguelen',
            ),
            50 => 
            array (
                'id' => 1051,
                'country_id' => 260,
                'iso' => '',
                'name' => 'Terre Adélie',
                'timezone' => 'Indian/Kerguelen',
            ),
            51 => 
            array (
                'id' => 1052,
                'country_id' => 260,
                'iso' => '',
                'name' => 'Îles Éparses',
                'timezone' => 'Indian/Kerguelen',
            ),
            52 => 
            array (
                'id' => 1053,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Ali Sabieh',
                'timezone' => 'Africa/Djibouti',
            ),
            53 => 
            array (
                'id' => 1054,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Dikhil ',
                'timezone' => 'Africa/Djibouti',
            ),
            54 => 
            array (
                'id' => 1055,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Djibouti ',
                'timezone' => 'Africa/Djibouti',
            ),
            55 => 
            array (
                'id' => 1056,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Obock',
                'timezone' => 'Africa/Djibouti',
            ),
            56 => 
            array (
                'id' => 1057,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Tadjourah',
                'timezone' => 'Africa/Djibouti',
            ),
            57 => 
            array (
                'id' => 1058,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Dikhil',
                'timezone' => 'Africa/Djibouti',
            ),
            58 => 
            array (
                'id' => 1059,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Djibouti',
                'timezone' => 'Africa/Djibouti',
            ),
            59 => 
            array (
                'id' => 1060,
                'country_id' => 262,
                'iso' => '',
                'name' => 'Arta',
                'timezone' => 'Africa/Djibouti',
            ),
            60 => 
            array (
                'id' => 1061,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Estuaire',
                'timezone' => 'Africa/Libreville',
            ),
            61 => 
            array (
                'id' => 1062,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Haut-Ogooué',
                'timezone' => 'Africa/Libreville',
            ),
            62 => 
            array (
                'id' => 1063,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Moyen-Ogooué',
                'timezone' => 'Africa/Libreville',
            ),
            63 => 
            array (
                'id' => 1064,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Ngounié',
                'timezone' => 'Africa/Libreville',
            ),
            64 => 
            array (
                'id' => 1065,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Nyanga',
                'timezone' => 'Africa/Libreville',
            ),
            65 => 
            array (
                'id' => 1066,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Ogooué-Ivindo',
                'timezone' => 'Africa/Libreville',
            ),
            66 => 
            array (
                'id' => 1067,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Ogooué-Lolo',
                'timezone' => 'Africa/Libreville',
            ),
            67 => 
            array (
                'id' => 1068,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Ogooué-Maritime',
                'timezone' => 'Africa/Libreville',
            ),
            68 => 
            array (
                'id' => 1069,
                'country_id' => 266,
                'iso' => '',
                'name' => 'Woleu-Ntem',
                'timezone' => 'Africa/Libreville',
            ),
            69 => 
            array (
                'id' => 1070,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Ajaria',
                'timezone' => 'Asia/Tbilisi',
            ),
            70 => 
            array (
                'id' => 1071,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Tʼbilisi',
                'timezone' => 'Asia/Tbilisi',
            ),
            71 => 
            array (
                'id' => 1072,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Abkhazia',
                'timezone' => 'Asia/Tbilisi',
            ),
            72 => 
            array (
                'id' => 1073,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Kvemo Kartli',
                'timezone' => 'Asia/Tbilisi',
            ),
            73 => 
            array (
                'id' => 1074,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Kakheti',
                'timezone' => 'Asia/Tbilisi',
            ),
            74 => 
            array (
                'id' => 1075,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Guria',
                'timezone' => 'Asia/Tbilisi',
            ),
            75 => 
            array (
                'id' => 1076,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Imereti',
                'timezone' => 'Asia/Tbilisi',
            ),
            76 => 
            array (
                'id' => 1077,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Shida Kartli',
                'timezone' => 'Asia/Tbilisi',
            ),
            77 => 
            array (
                'id' => 1078,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Mtskheta-Mtianeti',
                'timezone' => 'Asia/Tbilisi',
            ),
            78 => 
            array (
                'id' => 1079,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Racha-Lechkhumi and Kvemo Svaneti',
                'timezone' => 'Asia/Tbilisi',
            ),
            79 => 
            array (
                'id' => 1080,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Samegrelo and Zemo Svaneti',
                'timezone' => 'Asia/Tbilisi',
            ),
            80 => 
            array (
                'id' => 1081,
                'country_id' => 268,
                'iso' => '',
                'name' => 'Samtskhe-Javakheti',
                'timezone' => 'Asia/Tbilisi',
            ),
            81 => 
            array (
                'id' => 1082,
                'country_id' => 270,
                'iso' => '',
                'name' => 'Banjul',
                'timezone' => 'Africa/Banjul',
            ),
            82 => 
            array (
                'id' => 1083,
                'country_id' => 270,
                'iso' => '',
                'name' => 'Lower River',
                'timezone' => 'Africa/Banjul',
            ),
            83 => 
            array (
                'id' => 1084,
                'country_id' => 270,
                'iso' => '',
                'name' => 'Central River',
                'timezone' => 'Africa/Banjul',
            ),
            84 => 
            array (
                'id' => 1085,
                'country_id' => 270,
                'iso' => '',
                'name' => 'Upper River',
                'timezone' => 'Africa/Banjul',
            ),
            85 => 
            array (
                'id' => 1086,
                'country_id' => 270,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Africa/Banjul',
            ),
            86 => 
            array (
                'id' => 1087,
                'country_id' => 270,
                'iso' => '',
                'name' => 'North Bank',
                'timezone' => 'Africa/Banjul',
            ),
            87 => 
            array (
                'id' => 1088,
                'country_id' => 275,
                'iso' => '',
                'name' => 'Gaza Strip',
                'timezone' => 'Asia/Gaza',
            ),
            88 => 
            array (
                'id' => 1089,
                'country_id' => 275,
                'iso' => '',
                'name' => 'West Bank',
                'timezone' => 'Asia/Gaza',
            ),
            89 => 
            array (
                'id' => 1090,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Baden-Württemberg',
                'timezone' => 'Europe/Berlin',
            ),
            90 => 
            array (
                'id' => 1091,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Bavaria',
                'timezone' => 'Europe/Berlin',
            ),
            91 => 
            array (
                'id' => 1092,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Bremen',
                'timezone' => 'Europe/Berlin',
            ),
            92 => 
            array (
                'id' => 1093,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Hamburg',
                'timezone' => 'Europe/Berlin',
            ),
            93 => 
            array (
                'id' => 1094,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Hesse',
                'timezone' => 'Europe/Berlin',
            ),
            94 => 
            array (
                'id' => 1095,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Lower Saxony',
                'timezone' => 'Europe/Berlin',
            ),
            95 => 
            array (
                'id' => 1096,
                'country_id' => 276,
                'iso' => '',
                'name' => 'North Rhine-Westphalia',
                'timezone' => 'Europe/Berlin',
            ),
            96 => 
            array (
                'id' => 1097,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Rhineland-Palatinate',
                'timezone' => 'Europe/Berlin',
            ),
            97 => 
            array (
                'id' => 1098,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Saarland',
                'timezone' => 'Europe/Berlin',
            ),
            98 => 
            array (
                'id' => 1099,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Schleswig-Holstein',
                'timezone' => 'Europe/Berlin',
            ),
            99 => 
            array (
                'id' => 1100,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Brandenburg',
                'timezone' => 'Europe/Berlin',
            ),
            100 => 
            array (
                'id' => 1101,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Mecklenburg-Vorpommern',
                'timezone' => 'Europe/Berlin',
            ),
            101 => 
            array (
                'id' => 1102,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Saxony',
                'timezone' => 'Europe/Berlin',
            ),
            102 => 
            array (
                'id' => 1103,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Saxony-Anhalt',
                'timezone' => 'Europe/Berlin',
            ),
            103 => 
            array (
                'id' => 1104,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Thuringia',
                'timezone' => 'Europe/Berlin',
            ),
            104 => 
            array (
                'id' => 1105,
                'country_id' => 276,
                'iso' => '',
                'name' => 'Berlin',
                'timezone' => 'Europe/Berlin',
            ),
            105 => 
            array (
                'id' => 1106,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Greater Accra',
                'timezone' => 'Africa/Accra',
            ),
            106 => 
            array (
                'id' => 1107,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Ashanti',
                'timezone' => 'Africa/Accra',
            ),
            107 => 
            array (
                'id' => 1108,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Brong-Ahafo Region',
                'timezone' => 'Africa/Accra',
            ),
            108 => 
            array (
                'id' => 1109,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Africa/Accra',
            ),
            109 => 
            array (
                'id' => 1110,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Eastern',
                'timezone' => 'Africa/Accra',
            ),
            110 => 
            array (
                'id' => 1111,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Northern',
                'timezone' => 'Africa/Accra',
            ),
            111 => 
            array (
                'id' => 1112,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Volta',
                'timezone' => 'Africa/Accra',
            ),
            112 => 
            array (
                'id' => 1113,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Africa/Accra',
            ),
            113 => 
            array (
                'id' => 1114,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Upper East',
                'timezone' => 'Africa/Accra',
            ),
            114 => 
            array (
                'id' => 1115,
                'country_id' => 288,
                'iso' => '',
                'name' => 'Upper West',
                'timezone' => 'Africa/Accra',
            ),
            115 => 
            array (
                'id' => 1116,
                'country_id' => 292,
                'iso' => '',
                'name' => 'Gibraltar',
                'timezone' => 'Europe/Gibraltar',
            ),
            116 => 
            array (
                'id' => 1117,
                'country_id' => 296,
                'iso' => '',
                'name' => 'Line Islands',
                'timezone' => 'Pacific/Kiritimati',
            ),
            117 => 
            array (
                'id' => 1118,
                'country_id' => 296,
                'iso' => '',
                'name' => 'Gilbert Islands',
                'timezone' => 'Pacific/Tarawa',
            ),
            118 => 
            array (
                'id' => 1119,
                'country_id' => 296,
                'iso' => '',
                'name' => 'Phoenix Islands',
                'timezone' => 'Pacific/Enderbury',
            ),
            119 => 
            array (
                'id' => 1120,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Mount Athos',
                'timezone' => 'Europe/Athens',
            ),
            120 => 
            array (
                'id' => 1121,
                'country_id' => 300,
                'iso' => '',
                'name' => 'East Macedonia and Thrace',
                'timezone' => 'Europe/Athens',
            ),
            121 => 
            array (
                'id' => 1122,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Central Macedonia',
                'timezone' => 'Europe/Athens',
            ),
            122 => 
            array (
                'id' => 1123,
                'country_id' => 300,
                'iso' => '',
                'name' => 'West Macedonia',
                'timezone' => 'Europe/Athens',
            ),
            123 => 
            array (
                'id' => 1124,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Thessaly',
                'timezone' => 'Europe/Athens',
            ),
            124 => 
            array (
                'id' => 1125,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Epirus',
                'timezone' => 'Europe/Athens',
            ),
            125 => 
            array (
                'id' => 1126,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Ionian Islands',
                'timezone' => 'Europe/Athens',
            ),
            126 => 
            array (
                'id' => 1127,
                'country_id' => 300,
                'iso' => '',
                'name' => 'West Greece',
                'timezone' => 'Europe/Athens',
            ),
            127 => 
            array (
                'id' => 1128,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Central Greece',
                'timezone' => 'Europe/Athens',
            ),
            128 => 
            array (
                'id' => 1129,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Peloponnese',
                'timezone' => 'Europe/Athens',
            ),
            129 => 
            array (
                'id' => 1130,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Attica',
                'timezone' => 'Europe/Athens',
            ),
            130 => 
            array (
                'id' => 1131,
                'country_id' => 300,
                'iso' => '',
                'name' => 'North Aegean',
                'timezone' => 'Europe/Athens',
            ),
            131 => 
            array (
                'id' => 1132,
                'country_id' => 300,
                'iso' => '',
                'name' => 'South Aegean',
                'timezone' => 'Europe/Athens',
            ),
            132 => 
            array (
                'id' => 1133,
                'country_id' => 300,
                'iso' => '',
                'name' => 'Crete',
                'timezone' => 'Europe/Athens',
            ),
            133 => 
            array (
                'id' => 1134,
                'country_id' => 304,
                'iso' => '',
                'name' => 'Nordgrønland',
                'timezone' => 'America/Godthab',
            ),
            134 => 
            array (
                'id' => 1135,
                'country_id' => 304,
                'iso' => '',
                'name' => 'Østgrønland',
                'timezone' => 'America/Godthab',
            ),
            135 => 
            array (
                'id' => 1136,
                'country_id' => 304,
                'iso' => '',
                'name' => 'Vestgrønland',
                'timezone' => 'America/Godthab',
            ),
            136 => 
            array (
                'id' => 1137,
                'country_id' => 308,
                'iso' => '',
                'name' => 'Saint Andrew',
                'timezone' => 'America/Grenada',
            ),
            137 => 
            array (
                'id' => 1138,
                'country_id' => 308,
                'iso' => '',
                'name' => 'Saint David',
                'timezone' => 'America/Grenada',
            ),
            138 => 
            array (
                'id' => 1139,
                'country_id' => 308,
                'iso' => '',
                'name' => 'Saint George',
                'timezone' => 'America/Grenada',
            ),
            139 => 
            array (
                'id' => 1140,
                'country_id' => 308,
                'iso' => '',
                'name' => 'Saint John',
                'timezone' => 'America/Grenada',
            ),
            140 => 
            array (
                'id' => 1141,
                'country_id' => 308,
                'iso' => '',
                'name' => 'Saint Mark',
                'timezone' => 'America/Grenada',
            ),
            141 => 
            array (
                'id' => 1142,
                'country_id' => 308,
                'iso' => '',
                'name' => 'Saint Patrick',
                'timezone' => 'America/Grenada',
            ),
            142 => 
            array (
                'id' => 1143,
                'country_id' => 312,
                'iso' => '',
                'name' => 'Guadeloupe',
                'timezone' => 'America/Guadeloupe',
            ),
            143 => 
            array (
                'id' => 1144,
                'country_id' => 316,
                'iso' => '',
                'name' => 'Guam',
                'timezone' => 'Pacific/Guam',
            ),
            144 => 
            array (
                'id' => 1145,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Alta Verapaz',
                'timezone' => 'America/Guatemala',
            ),
            145 => 
            array (
                'id' => 1146,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Baja Verapaz',
                'timezone' => 'America/Guatemala',
            ),
            146 => 
            array (
                'id' => 1147,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Chimaltenango',
                'timezone' => 'America/Guatemala',
            ),
            147 => 
            array (
                'id' => 1148,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Chiquimula',
                'timezone' => 'America/Guatemala',
            ),
            148 => 
            array (
                'id' => 1149,
                'country_id' => 320,
                'iso' => '',
                'name' => 'El Progreso',
                'timezone' => 'America/Guatemala',
            ),
            149 => 
            array (
                'id' => 1150,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Escuintla',
                'timezone' => 'America/Guatemala',
            ),
            150 => 
            array (
                'id' => 1151,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Guatemala',
                'timezone' => 'America/Guatemala',
            ),
            151 => 
            array (
                'id' => 1152,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Huehuetenango',
                'timezone' => 'America/Guatemala',
            ),
            152 => 
            array (
                'id' => 1153,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Izabal',
                'timezone' => 'America/Guatemala',
            ),
            153 => 
            array (
                'id' => 1154,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Jalapa',
                'timezone' => 'America/Guatemala',
            ),
            154 => 
            array (
                'id' => 1155,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Jutiapa',
                'timezone' => 'America/Guatemala',
            ),
            155 => 
            array (
                'id' => 1156,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Petén',
                'timezone' => 'America/Guatemala',
            ),
            156 => 
            array (
                'id' => 1157,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Quetzaltenango',
                'timezone' => 'America/Guatemala',
            ),
            157 => 
            array (
                'id' => 1158,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Quiché',
                'timezone' => 'America/Guatemala',
            ),
            158 => 
            array (
                'id' => 1159,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Retalhuleu',
                'timezone' => 'America/Guatemala',
            ),
            159 => 
            array (
                'id' => 1160,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Sacatepéquez',
                'timezone' => 'America/Guatemala',
            ),
            160 => 
            array (
                'id' => 1161,
                'country_id' => 320,
                'iso' => '',
                'name' => 'San Marcos',
                'timezone' => 'America/Guatemala',
            ),
            161 => 
            array (
                'id' => 1162,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Santa Rosa',
                'timezone' => 'America/Guatemala',
            ),
            162 => 
            array (
                'id' => 1163,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Sololá',
                'timezone' => 'America/Guatemala',
            ),
            163 => 
            array (
                'id' => 1164,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Suchitepéquez',
                'timezone' => 'America/Guatemala',
            ),
            164 => 
            array (
                'id' => 1165,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Totonicapán',
                'timezone' => 'America/Guatemala',
            ),
            165 => 
            array (
                'id' => 1166,
                'country_id' => 320,
                'iso' => '',
                'name' => 'Zacapa',
                'timezone' => 'America/Guatemala',
            ),
            166 => 
            array (
                'id' => 1167,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Beyla',
                'timezone' => 'Africa/Conakry',
            ),
            167 => 
            array (
                'id' => 1168,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Boffa',
                'timezone' => 'Africa/Conakry',
            ),
            168 => 
            array (
                'id' => 1169,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Boké',
                'timezone' => 'Africa/Conakry',
            ),
            169 => 
            array (
                'id' => 1170,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Conakry',
                'timezone' => 'Africa/Conakry',
            ),
            170 => 
            array (
                'id' => 1171,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Dabola',
                'timezone' => 'Africa/Conakry',
            ),
            171 => 
            array (
                'id' => 1172,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Dalaba',
                'timezone' => 'Africa/Conakry',
            ),
            172 => 
            array (
                'id' => 1173,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Dinguiraye',
                'timezone' => 'Africa/Conakry',
            ),
            173 => 
            array (
                'id' => 1174,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Faranah',
                'timezone' => 'Africa/Conakry',
            ),
            174 => 
            array (
                'id' => 1175,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Forécariah',
                'timezone' => 'Africa/Conakry',
            ),
            175 => 
            array (
                'id' => 1176,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Fria',
                'timezone' => 'Africa/Conakry',
            ),
            176 => 
            array (
                'id' => 1177,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Gaoual',
                'timezone' => 'Africa/Conakry',
            ),
            177 => 
            array (
                'id' => 1178,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Guéckédou',
                'timezone' => 'Africa/Conakry',
            ),
            178 => 
            array (
                'id' => 1179,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Kankan',
                'timezone' => 'Africa/Conakry',
            ),
            179 => 
            array (
                'id' => 1180,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Kérouané',
                'timezone' => 'Africa/Conakry',
            ),
            180 => 
            array (
                'id' => 1181,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Kindia',
                'timezone' => 'Africa/Conakry',
            ),
            181 => 
            array (
                'id' => 1182,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Kissidougou',
                'timezone' => 'Africa/Conakry',
            ),
            182 => 
            array (
                'id' => 1183,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Koundara',
                'timezone' => 'Africa/Conakry',
            ),
            183 => 
            array (
                'id' => 1184,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Kouroussa',
                'timezone' => 'Africa/Conakry',
            ),
            184 => 
            array (
                'id' => 1185,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Macenta',
                'timezone' => 'Africa/Conakry',
            ),
            185 => 
            array (
                'id' => 1186,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Mali',
                'timezone' => 'Africa/Conakry',
            ),
            186 => 
            array (
                'id' => 1187,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Mamou',
                'timezone' => 'Africa/Conakry',
            ),
            187 => 
            array (
                'id' => 1188,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Pita',
                'timezone' => 'Africa/Conakry',
            ),
            188 => 
            array (
                'id' => 1189,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Siguiri',
                'timezone' => 'Africa/Conakry',
            ),
            189 => 
            array (
                'id' => 1190,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Télimélé',
                'timezone' => 'Africa/Conakry',
            ),
            190 => 
            array (
                'id' => 1191,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Tougué',
                'timezone' => 'Africa/Conakry',
            ),
            191 => 
            array (
                'id' => 1192,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Yomou',
                'timezone' => 'Africa/Conakry',
            ),
            192 => 
            array (
                'id' => 1193,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Coyah',
                'timezone' => 'Africa/Conakry',
            ),
            193 => 
            array (
                'id' => 1194,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Dubréka',
                'timezone' => 'Africa/Conakry',
            ),
            194 => 
            array (
                'id' => 1195,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Kankan',
                'timezone' => 'Africa/Conakry',
            ),
            195 => 
            array (
                'id' => 1196,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Koubia',
                'timezone' => 'Africa/Conakry',
            ),
            196 => 
            array (
                'id' => 1197,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Labé',
                'timezone' => 'Africa/Conakry',
            ),
            197 => 
            array (
                'id' => 1198,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Lélouma',
                'timezone' => 'Africa/Conakry',
            ),
            198 => 
            array (
                'id' => 1199,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Lola',
                'timezone' => 'Africa/Conakry',
            ),
            199 => 
            array (
                'id' => 1200,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Mandiana',
                'timezone' => 'Africa/Conakry',
            ),
            200 => 
            array (
                'id' => 1201,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Nzérékoré',
                'timezone' => 'Africa/Conakry',
            ),
            201 => 
            array (
                'id' => 1202,
                'country_id' => 324,
                'iso' => '',
                'name' => 'Siguiri',
                'timezone' => 'Africa/Conakry',
            ),
            202 => 
            array (
                'id' => 1203,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Barima-Waini',
                'timezone' => 'America/Guyana',
            ),
            203 => 
            array (
                'id' => 1204,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Cuyuni-Mazaruni',
                'timezone' => 'America/Guyana',
            ),
            204 => 
            array (
                'id' => 1205,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Demerara-Mahaica',
                'timezone' => 'America/Guyana',
            ),
            205 => 
            array (
                'id' => 1206,
                'country_id' => 328,
                'iso' => '',
                'name' => 'East Berbice-Corentyne',
                'timezone' => 'America/Guyana',
            ),
            206 => 
            array (
                'id' => 1207,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Essequibo Islands-West Demerara',
                'timezone' => 'America/Guyana',
            ),
            207 => 
            array (
                'id' => 1208,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Mahaica-Berbice',
                'timezone' => 'America/Guyana',
            ),
            208 => 
            array (
                'id' => 1209,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Pomeroon-Supenaam',
                'timezone' => 'America/Guyana',
            ),
            209 => 
            array (
                'id' => 1210,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Potaro-Siparuni',
                'timezone' => 'America/Guyana',
            ),
            210 => 
            array (
                'id' => 1211,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Upper Demerara-Berbice',
                'timezone' => 'America/Guyana',
            ),
            211 => 
            array (
                'id' => 1212,
                'country_id' => 328,
                'iso' => '',
                'name' => 'Upper Takutu-Upper Essequibo',
                'timezone' => 'America/Guyana',
            ),
            212 => 
            array (
                'id' => 1213,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Nord-Ouest',
                'timezone' => 'America/Port-au-Prince',
            ),
            213 => 
            array (
                'id' => 1214,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Artibonite',
                'timezone' => 'America/Port-au-Prince',
            ),
            214 => 
            array (
                'id' => 1215,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Centre',
                'timezone' => 'America/Port-au-Prince',
            ),
            215 => 
            array (
                'id' => 1216,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Nord',
                'timezone' => 'America/Port-au-Prince',
            ),
            216 => 
            array (
                'id' => 1217,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Nord-Est',
                'timezone' => 'America/Port-au-Prince',
            ),
            217 => 
            array (
                'id' => 1218,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Ouest',
                'timezone' => 'America/Port-au-Prince',
            ),
            218 => 
            array (
                'id' => 1219,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Sud',
                'timezone' => 'America/Port-au-Prince',
            ),
            219 => 
            array (
                'id' => 1220,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Sud-Est',
                'timezone' => 'America/Port-au-Prince',
            ),
            220 => 
            array (
                'id' => 1221,
                'country_id' => 332,
                'iso' => '',
                'name' => 'GrandʼAnse',
                'timezone' => 'America/Port-au-Prince',
            ),
            221 => 
            array (
                'id' => 1222,
                'country_id' => 332,
                'iso' => '',
                'name' => 'Nippes',
                'timezone' => 'America/Port-au-Prince',
            ),
            222 => 
            array (
                'id' => 1223,
                'country_id' => 336,
                'iso' => '',
                'name' => 'Vatican City',
                'timezone' => 'Europe/Vatican',
            ),
            223 => 
            array (
                'id' => 1224,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Atlántida',
                'timezone' => 'America/Tegucigalpa',
            ),
            224 => 
            array (
                'id' => 1225,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Choluteca',
                'timezone' => 'America/Tegucigalpa',
            ),
            225 => 
            array (
                'id' => 1226,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Colón',
                'timezone' => 'America/Tegucigalpa',
            ),
            226 => 
            array (
                'id' => 1227,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Comayagua',
                'timezone' => 'America/Tegucigalpa',
            ),
            227 => 
            array (
                'id' => 1228,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Copán',
                'timezone' => 'America/Tegucigalpa',
            ),
            228 => 
            array (
                'id' => 1229,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Cortés',
                'timezone' => 'America/Tegucigalpa',
            ),
            229 => 
            array (
                'id' => 1230,
                'country_id' => 340,
                'iso' => '',
                'name' => 'El Paraíso',
                'timezone' => 'America/Tegucigalpa',
            ),
            230 => 
            array (
                'id' => 1231,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Francisco Morazán',
                'timezone' => 'America/Tegucigalpa',
            ),
            231 => 
            array (
                'id' => 1232,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Gracias a Dios',
                'timezone' => 'America/Tegucigalpa',
            ),
            232 => 
            array (
                'id' => 1233,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Intibucá',
                'timezone' => 'America/Tegucigalpa',
            ),
            233 => 
            array (
                'id' => 1234,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Islas de la Bahía',
                'timezone' => 'America/Tegucigalpa',
            ),
            234 => 
            array (
                'id' => 1235,
                'country_id' => 340,
                'iso' => '',
                'name' => 'La Paz',
                'timezone' => 'America/Tegucigalpa',
            ),
            235 => 
            array (
                'id' => 1236,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Lempira',
                'timezone' => 'America/Tegucigalpa',
            ),
            236 => 
            array (
                'id' => 1237,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Ocotepeque',
                'timezone' => 'America/Tegucigalpa',
            ),
            237 => 
            array (
                'id' => 1238,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Olancho',
                'timezone' => 'America/Tegucigalpa',
            ),
            238 => 
            array (
                'id' => 1239,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Santa Bárbara',
                'timezone' => 'America/Tegucigalpa',
            ),
            239 => 
            array (
                'id' => 1240,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Valle',
                'timezone' => 'America/Tegucigalpa',
            ),
            240 => 
            array (
                'id' => 1241,
                'country_id' => 340,
                'iso' => '',
                'name' => 'Yoro',
                'timezone' => 'America/Tegucigalpa',
            ),
            241 => 
            array (
                'id' => 1242,
                'country_id' => 344,
                'iso' => '',
                'name' => 'Hong Kong',
                'timezone' => 'Asia/Hong_Kong',
            ),
            242 => 
            array (
                'id' => 1243,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Bács-Kiskun',
                'timezone' => 'Europe/Budapest',
            ),
            243 => 
            array (
                'id' => 1244,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Baranya',
                'timezone' => 'Europe/Budapest',
            ),
            244 => 
            array (
                'id' => 1245,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Békés',
                'timezone' => 'Europe/Budapest',
            ),
            245 => 
            array (
                'id' => 1246,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Borsod-Abaúj-Zemplén',
                'timezone' => 'Europe/Budapest',
            ),
            246 => 
            array (
                'id' => 1247,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Budapest',
                'timezone' => 'Europe/Budapest',
            ),
            247 => 
            array (
                'id' => 1248,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Csongrád',
                'timezone' => 'Europe/Budapest',
            ),
            248 => 
            array (
                'id' => 1249,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Fejér',
                'timezone' => 'Europe/Budapest',
            ),
            249 => 
            array (
                'id' => 1250,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Győr-Moson-Sopron',
                'timezone' => 'Europe/Budapest',
            ),
            250 => 
            array (
                'id' => 1251,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Hajdú-Bihar',
                'timezone' => 'Europe/Budapest',
            ),
            251 => 
            array (
                'id' => 1252,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Heves',
                'timezone' => 'Europe/Budapest',
            ),
            252 => 
            array (
                'id' => 1253,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Komárom-Esztergom',
                'timezone' => 'Europe/Budapest',
            ),
            253 => 
            array (
                'id' => 1254,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Nógrád',
                'timezone' => 'Europe/Budapest',
            ),
            254 => 
            array (
                'id' => 1255,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Pest',
                'timezone' => 'Europe/Budapest',
            ),
            255 => 
            array (
                'id' => 1256,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Somogy',
                'timezone' => 'Europe/Budapest',
            ),
            256 => 
            array (
                'id' => 1257,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Szabolcs-Szatmár-Bereg',
                'timezone' => 'Europe/Budapest',
            ),
            257 => 
            array (
                'id' => 1258,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Jász-Nagykun-Szolnok',
                'timezone' => 'Europe/Budapest',
            ),
            258 => 
            array (
                'id' => 1259,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Tolna',
                'timezone' => 'Europe/Budapest',
            ),
            259 => 
            array (
                'id' => 1260,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Vas',
                'timezone' => 'Europe/Budapest',
            ),
            260 => 
            array (
                'id' => 1261,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Veszprém',
                'timezone' => 'Europe/Budapest',
            ),
            261 => 
            array (
                'id' => 1262,
                'country_id' => 348,
                'iso' => '',
                'name' => 'Zala',
                'timezone' => 'Europe/Budapest',
            ),
            262 => 
            array (
                'id' => 1263,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Borgarfjardarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            263 => 
            array (
                'id' => 1264,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Dalasysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            264 => 
            array (
                'id' => 1265,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Eyjafjardarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            265 => 
            array (
                'id' => 1266,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Gullbringusysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            266 => 
            array (
                'id' => 1267,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Hafnarfjördur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            267 => 
            array (
                'id' => 1268,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Husavik',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            268 => 
            array (
                'id' => 1269,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Isafjördur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            269 => 
            array (
                'id' => 1270,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Keflavik',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            270 => 
            array (
                'id' => 1271,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Kjosarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            271 => 
            array (
                'id' => 1272,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Kopavogur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            272 => 
            array (
                'id' => 1273,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Myrasysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            273 => 
            array (
                'id' => 1274,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Neskaupstadur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            274 => 
            array (
                'id' => 1275,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Nordur-Isafjardarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            275 => 
            array (
                'id' => 1276,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Nordur-Mulasysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            276 => 
            array (
                'id' => 1277,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Nordur-Tingeyjarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            277 => 
            array (
                'id' => 1278,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Olafsfjördur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            278 => 
            array (
                'id' => 1279,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Rangarvallasysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            279 => 
            array (
                'id' => 1280,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Reykjavík',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            280 => 
            array (
                'id' => 1281,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Saudarkrokur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            281 => 
            array (
                'id' => 1282,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Seydisfjordur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            282 => 
            array (
                'id' => 1283,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Siglufjordur',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            283 => 
            array (
                'id' => 1284,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Skagafjardarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            284 => 
            array (
                'id' => 1285,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Snafellsnes- og Hnappadalssysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            285 => 
            array (
                'id' => 1286,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Strandasysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            286 => 
            array (
                'id' => 1287,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Sudur-Mulasysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            287 => 
            array (
                'id' => 1288,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Sudur-Tingeyjarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            288 => 
            array (
                'id' => 1289,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Vestmannaeyjar',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            289 => 
            array (
                'id' => 1290,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Vestur-Bardastrandarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            290 => 
            array (
                'id' => 1291,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Vestur-Hunavatnssysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            291 => 
            array (
                'id' => 1292,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Vestur-Isafjardarsysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            292 => 
            array (
                'id' => 1293,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Vestur-Skaftafellssysla',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            293 => 
            array (
                'id' => 1294,
                'country_id' => 352,
                'iso' => '',
                'name' => 'East',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            294 => 
            array (
                'id' => 1295,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Capital Region',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            295 => 
            array (
                'id' => 1296,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Northeast',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            296 => 
            array (
                'id' => 1297,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Northwest',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            297 => 
            array (
                'id' => 1298,
                'country_id' => 352,
                'iso' => '',
                'name' => 'South',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            298 => 
            array (
                'id' => 1299,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Southern Peninsula',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            299 => 
            array (
                'id' => 1300,
                'country_id' => 352,
                'iso' => '',
                'name' => 'Westfjords',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            300 => 
            array (
                'id' => 1301,
                'country_id' => 352,
                'iso' => '',
                'name' => 'West',
                'timezone' => 'Atlantic/Reykjavik',
            ),
            301 => 
            array (
                'id' => 1302,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Andaman and Nicobar Islands',
                'timezone' => 'Asia/Kolkata',
            ),
            302 => 
            array (
                'id' => 1303,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Andhra Pradesh',
                'timezone' => 'Asia/Kolkata',
            ),
            303 => 
            array (
                'id' => 1304,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Assam',
                'timezone' => 'Asia/Kolkata',
            ),
            304 => 
            array (
                'id' => 1305,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Bihar',
                'timezone' => 'Asia/Kolkata',
            ),
            305 => 
            array (
                'id' => 1306,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Chandīgarh',
                'timezone' => 'Asia/Kolkata',
            ),
            306 => 
            array (
                'id' => 1307,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Dādra and Nagar Haveli',
                'timezone' => 'Asia/Kolkata',
            ),
            307 => 
            array (
                'id' => 1308,
                'country_id' => 356,
                'iso' => '',
                'name' => 'NCT',
                'timezone' => 'Asia/Kolkata',
            ),
            308 => 
            array (
                'id' => 1309,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Gujarāt',
                'timezone' => 'Asia/Kolkata',
            ),
            309 => 
            array (
                'id' => 1310,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Haryana',
                'timezone' => 'Asia/Kolkata',
            ),
            310 => 
            array (
                'id' => 1311,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Himāchal Pradesh',
                'timezone' => 'Asia/Kolkata',
            ),
            311 => 
            array (
                'id' => 1312,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Kashmir',
                'timezone' => 'Asia/Kolkata',
            ),
            312 => 
            array (
                'id' => 1313,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Kerala',
                'timezone' => 'Asia/Kolkata',
            ),
            313 => 
            array (
                'id' => 1314,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Laccadives',
                'timezone' => 'Asia/Kolkata',
            ),
            314 => 
            array (
                'id' => 1315,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Madhya Pradesh ',
                'timezone' => 'Asia/Kolkata',
            ),
            315 => 
            array (
                'id' => 1316,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Mahārāshtra',
                'timezone' => 'Asia/Kolkata',
            ),
            316 => 
            array (
                'id' => 1317,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Manipur',
                'timezone' => 'Asia/Kolkata',
            ),
            317 => 
            array (
                'id' => 1318,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Meghālaya',
                'timezone' => 'Asia/Kolkata',
            ),
            318 => 
            array (
                'id' => 1319,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Karnātaka',
                'timezone' => 'Asia/Kolkata',
            ),
            319 => 
            array (
                'id' => 1320,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Nāgāland',
                'timezone' => 'Asia/Kolkata',
            ),
            320 => 
            array (
                'id' => 1321,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Orissa',
                'timezone' => 'Asia/Kolkata',
            ),
            321 => 
            array (
                'id' => 1322,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Pondicherry',
                'timezone' => 'Asia/Kolkata',
            ),
            322 => 
            array (
                'id' => 1323,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Punjab',
                'timezone' => 'Asia/Kolkata',
            ),
            323 => 
            array (
                'id' => 1324,
                'country_id' => 356,
                'iso' => '',
                'name' => 'State of Rājasthān',
                'timezone' => 'Asia/Kolkata',
            ),
            324 => 
            array (
                'id' => 1325,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Tamil Nādu',
                'timezone' => 'Asia/Kolkata',
            ),
            325 => 
            array (
                'id' => 1326,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Tripura',
                'timezone' => 'Asia/Kolkata',
            ),
            326 => 
            array (
                'id' => 1327,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Uttar Pradesh',
                'timezone' => 'Asia/Kolkata',
            ),
            327 => 
            array (
                'id' => 1328,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Bengal',
                'timezone' => 'Asia/Kolkata',
            ),
            328 => 
            array (
                'id' => 1329,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Sikkim',
                'timezone' => 'Asia/Kolkata',
            ),
            329 => 
            array (
                'id' => 1330,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Arunāchal Pradesh',
                'timezone' => 'Asia/Kolkata',
            ),
            330 => 
            array (
                'id' => 1331,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Mizoram',
                'timezone' => 'Asia/Kolkata',
            ),
            331 => 
            array (
                'id' => 1332,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Daman and Diu',
                'timezone' => 'Asia/Kolkata',
            ),
            332 => 
            array (
                'id' => 1333,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Goa',
                'timezone' => 'Asia/Kolkata',
            ),
            333 => 
            array (
                'id' => 1334,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Bihār',
                'timezone' => 'Asia/Kolkata',
            ),
            334 => 
            array (
                'id' => 1335,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Madhya Pradesh',
                'timezone' => 'Asia/Kolkata',
            ),
            335 => 
            array (
                'id' => 1336,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Uttar Pradesh',
                'timezone' => 'Asia/Kolkata',
            ),
            336 => 
            array (
                'id' => 1337,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Chhattisgarh',
                'timezone' => 'Asia/Kolkata',
            ),
            337 => 
            array (
                'id' => 1338,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Jharkhand',
                'timezone' => 'Asia/Kolkata',
            ),
            338 => 
            array (
                'id' => 1339,
                'country_id' => 356,
                'iso' => '',
                'name' => 'Uttarakhand',
                'timezone' => 'Asia/Kolkata',
            ),
            339 => 
            array (
                'id' => 1340,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Aceh',
                'timezone' => 'Asia/Jakarta',
            ),
            340 => 
            array (
                'id' => 1341,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Bali',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            341 => 
            array (
                'id' => 1342,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Bengkulu',
                'timezone' => 'Asia/Jakarta',
            ),
            342 => 
            array (
                'id' => 1343,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Jakarta Raya',
                'timezone' => 'Asia/Jakarta',
            ),
            343 => 
            array (
                'id' => 1344,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Jambi',
                'timezone' => 'Asia/Jakarta',
            ),
            344 => 
            array (
                'id' => 1345,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Jawa Barat',
                'timezone' => 'Asia/Jakarta',
            ),
            345 => 
            array (
                'id' => 1346,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Central Java',
                'timezone' => 'Asia/Jakarta',
            ),
            346 => 
            array (
                'id' => 1347,
                'country_id' => 360,
                'iso' => '',
                'name' => 'East Java',
                'timezone' => 'Asia/Jakarta',
            ),
            347 => 
            array (
                'id' => 1348,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Yogyakarta ',
                'timezone' => 'Asia/Jakarta',
            ),
            348 => 
            array (
                'id' => 1349,
                'country_id' => 360,
                'iso' => '',
                'name' => 'West Kalimantan',
                'timezone' => 'Asia/Jakarta',
            ),
            349 => 
            array (
                'id' => 1350,
                'country_id' => 360,
                'iso' => '',
                'name' => 'South Kalimantan',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            350 => 
            array (
                'id' => 1351,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Kalimantan Tengah',
                'timezone' => 'Asia/Jakarta',
            ),
            351 => 
            array (
                'id' => 1352,
                'country_id' => 360,
                'iso' => '',
                'name' => 'East Kalimantan',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            352 => 
            array (
                'id' => 1353,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Lampung',
                'timezone' => 'Asia/Jakarta',
            ),
            353 => 
            array (
                'id' => 1354,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Nusa Tenggara Barat',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            354 => 
            array (
                'id' => 1355,
                'country_id' => 360,
                'iso' => '',
                'name' => 'East Nusa Tenggara',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            355 => 
            array (
                'id' => 1356,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Central Sulawesi',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            356 => 
            array (
                'id' => 1357,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Sulawesi Tenggara',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            357 => 
            array (
                'id' => 1358,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Sulawesi Utara',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            358 => 
            array (
                'id' => 1359,
                'country_id' => 360,
                'iso' => '',
                'name' => 'West Sumatra',
                'timezone' => 'Asia/Jakarta',
            ),
            359 => 
            array (
                'id' => 1360,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Sumatera Selatan',
                'timezone' => 'Asia/Jakarta',
            ),
            360 => 
            array (
                'id' => 1361,
                'country_id' => 360,
                'iso' => '',
                'name' => 'North Sumatra',
                'timezone' => 'Asia/Jakarta',
            ),
            361 => 
            array (
                'id' => 1362,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Timor Timur',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            362 => 
            array (
                'id' => 1363,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Maluku ',
                'timezone' => 'Asia/Jayapura',
            ),
            363 => 
            array (
                'id' => 1364,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Maluku Utara',
                'timezone' => 'Asia/Jayapura',
            ),
            364 => 
            array (
                'id' => 1365,
                'country_id' => 360,
                'iso' => '',
                'name' => 'West Java',
                'timezone' => 'Asia/Jakarta',
            ),
            365 => 
            array (
                'id' => 1366,
                'country_id' => 360,
                'iso' => '',
                'name' => 'North Sulawesi',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            366 => 
            array (
                'id' => 1367,
                'country_id' => 360,
                'iso' => '',
                'name' => 'South Sumatra',
                'timezone' => 'Asia/Jakarta',
            ),
            367 => 
            array (
                'id' => 1368,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Banten',
                'timezone' => 'Asia/Jakarta',
            ),
            368 => 
            array (
                'id' => 1369,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Gorontalo',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            369 => 
            array (
                'id' => 1370,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Bangka-Belitung',
                'timezone' => 'Asia/Jakarta',
            ),
            370 => 
            array (
                'id' => 1371,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Papua',
                'timezone' => 'Asia/Jayapura',
            ),
            371 => 
            array (
                'id' => 1372,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Riau',
                'timezone' => 'Asia/Jakarta',
            ),
            372 => 
            array (
                'id' => 1373,
                'country_id' => 360,
                'iso' => '',
                'name' => 'South Sulawesi',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            373 => 
            array (
                'id' => 1374,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Irian Jaya Barat',
                'timezone' => 'Asia/Jayapura',
            ),
            374 => 
            array (
                'id' => 1375,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Riau Islands',
                'timezone' => 'Asia/Jakarta',
            ),
            375 => 
            array (
                'id' => 1376,
                'country_id' => 360,
                'iso' => '',
                'name' => 'Sulawesi Barat',
                'timezone' => 'Asia/Ujung_Pandang',
            ),
            376 => 
            array (
                'id' => 1377,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Āz̄ārbāyjān-e Gharbī',
                'timezone' => 'Asia/Tehran',
            ),
            377 => 
            array (
                'id' => 1378,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Chahār Maḩāll va Bakhtīārī',
                'timezone' => 'Asia/Tehran',
            ),
            378 => 
            array (
                'id' => 1379,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Sīstān va Balūchestān',
                'timezone' => 'Asia/Tehran',
            ),
            379 => 
            array (
                'id' => 1380,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Kohgīlūyeh va Būyer Aḩmad',
                'timezone' => 'Asia/Tehran',
            ),
            380 => 
            array (
                'id' => 1381,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Fārs Province',
                'timezone' => 'Asia/Tehran',
            ),
            381 => 
            array (
                'id' => 1382,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Gīlān',
                'timezone' => 'Asia/Tehran',
            ),
            382 => 
            array (
                'id' => 1383,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Hamadān',
                'timezone' => 'Asia/Tehran',
            ),
            383 => 
            array (
                'id' => 1384,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Īlām',
                'timezone' => 'Asia/Tehran',
            ),
            384 => 
            array (
                'id' => 1385,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Hormozgān Province',
                'timezone' => 'Asia/Tehran',
            ),
            385 => 
            array (
                'id' => 1386,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Kerman',
                'timezone' => 'Asia/Tehran',
            ),
            386 => 
            array (
                'id' => 1387,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Kermānshāh',
                'timezone' => 'Asia/Tehran',
            ),
            387 => 
            array (
                'id' => 1388,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Khūzestān',
                'timezone' => 'Asia/Tehran',
            ),
            388 => 
            array (
                'id' => 1389,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Kordestān',
                'timezone' => 'Asia/Tehran',
            ),
            389 => 
            array (
                'id' => 1390,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Mazandaran',
                'timezone' => 'Asia/Tehran',
            ),
            390 => 
            array (
                'id' => 1391,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Markazi',
                'timezone' => 'Asia/Tehran',
            ),
            391 => 
            array (
                'id' => 1392,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Zanjan',
                'timezone' => 'Asia/Tehran',
            ),
            392 => 
            array (
                'id' => 1393,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Bushehr Province',
                'timezone' => 'Asia/Tehran',
            ),
            393 => 
            array (
                'id' => 1394,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Lorestān',
                'timezone' => 'Asia/Tehran',
            ),
            394 => 
            array (
                'id' => 1395,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Markazi',
                'timezone' => 'Asia/Tehran',
            ),
            395 => 
            array (
                'id' => 1396,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Semnān Province',
                'timezone' => 'Asia/Tehran',
            ),
            396 => 
            array (
                'id' => 1397,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Tehrān',
                'timezone' => 'Asia/Tehran',
            ),
            397 => 
            array (
                'id' => 1398,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Zanjan',
                'timezone' => 'Asia/Tehran',
            ),
            398 => 
            array (
                'id' => 1399,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Eşfahān',
                'timezone' => 'Asia/Tehran',
            ),
            399 => 
            array (
                'id' => 1400,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Kermān',
                'timezone' => 'Asia/Tehran',
            ),
            400 => 
            array (
                'id' => 1401,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Ostan-e Khorasan-e Razavi',
                'timezone' => 'Asia/Tehran',
            ),
            401 => 
            array (
                'id' => 1402,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Yazd',
                'timezone' => 'Asia/Tehran',
            ),
            402 => 
            array (
                'id' => 1403,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Ardabīl',
                'timezone' => 'Asia/Tehran',
            ),
            403 => 
            array (
                'id' => 1404,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Āz̄ārbāyjān-e Sharqī',
                'timezone' => 'Asia/Tehran',
            ),
            404 => 
            array (
                'id' => 1405,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Markazi Province',
                'timezone' => 'Asia/Tehran',
            ),
            405 => 
            array (
                'id' => 1406,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Māzandarān Province',
                'timezone' => 'Asia/Tehran',
            ),
            406 => 
            array (
                'id' => 1407,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Zanjan Province',
                'timezone' => 'Asia/Tehran',
            ),
            407 => 
            array (
                'id' => 1408,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Golestān',
                'timezone' => 'Asia/Tehran',
            ),
            408 => 
            array (
                'id' => 1409,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Qazvīn',
                'timezone' => 'Asia/Tehran',
            ),
            409 => 
            array (
                'id' => 1410,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Qom',
                'timezone' => 'Asia/Tehran',
            ),
            410 => 
            array (
                'id' => 1411,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Yazd',
                'timezone' => 'Asia/Tehran',
            ),
            411 => 
            array (
                'id' => 1412,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Khorāsān-e Jonūbī',
                'timezone' => 'Asia/Tehran',
            ),
            412 => 
            array (
                'id' => 1413,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Razavi Khorasan Province',
                'timezone' => 'Asia/Tehran',
            ),
            413 => 
            array (
                'id' => 1414,
                'country_id' => 364,
                'iso' => '',
                'name' => 'Khorāsān-e Shomālī',
                'timezone' => 'Asia/Tehran',
            ),
            414 => 
            array (
                'id' => 1415,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Anbar',
                'timezone' => 'Asia/Baghdad',
            ),
            415 => 
            array (
                'id' => 1416,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Al Başrah',
                'timezone' => 'Asia/Baghdad',
            ),
            416 => 
            array (
                'id' => 1417,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Al Muthanná',
                'timezone' => 'Asia/Baghdad',
            ),
            417 => 
            array (
                'id' => 1418,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Al Qādisīyah',
                'timezone' => 'Asia/Baghdad',
            ),
            418 => 
            array (
                'id' => 1419,
                'country_id' => 368,
                'iso' => '',
                'name' => 'As Sulaymānīyah',
                'timezone' => 'Asia/Baghdad',
            ),
            419 => 
            array (
                'id' => 1420,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Bābil',
                'timezone' => 'Asia/Baghdad',
            ),
            420 => 
            array (
                'id' => 1421,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Baghdād',
                'timezone' => 'Asia/Baghdad',
            ),
            421 => 
            array (
                'id' => 1422,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Dahūk',
                'timezone' => 'Asia/Baghdad',
            ),
            422 => 
            array (
                'id' => 1423,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Dhi Qar',
                'timezone' => 'Asia/Baghdad',
            ),
            423 => 
            array (
                'id' => 1424,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Diyala',
                'timezone' => 'Asia/Baghdad',
            ),
            424 => 
            array (
                'id' => 1425,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Arbīl',
                'timezone' => 'Asia/Baghdad',
            ),
            425 => 
            array (
                'id' => 1426,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Karbalāʼ',
                'timezone' => 'Asia/Baghdad',
            ),
            426 => 
            array (
                'id' => 1427,
                'country_id' => 368,
                'iso' => '',
                'name' => 'At Taʼmīm',
                'timezone' => 'Asia/Baghdad',
            ),
            427 => 
            array (
                'id' => 1428,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Maysan',
                'timezone' => 'Asia/Baghdad',
            ),
            428 => 
            array (
                'id' => 1429,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Nīnawá',
                'timezone' => 'Asia/Baghdad',
            ),
            429 => 
            array (
                'id' => 1430,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Wāsiţ',
                'timezone' => 'Asia/Baghdad',
            ),
            430 => 
            array (
                'id' => 1431,
                'country_id' => 368,
                'iso' => '',
                'name' => 'An Najaf',
                'timezone' => 'Asia/Baghdad',
            ),
            431 => 
            array (
                'id' => 1432,
                'country_id' => 368,
                'iso' => '',
                'name' => 'Şalāḩ ad Dīn',
                'timezone' => 'Asia/Baghdad',
            ),
            432 => 
            array (
                'id' => 1433,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Carlow',
                'timezone' => 'Europe/Dublin',
            ),
            433 => 
            array (
                'id' => 1434,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Cavan',
                'timezone' => 'Europe/Dublin',
            ),
            434 => 
            array (
                'id' => 1435,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Clare',
                'timezone' => 'Europe/Dublin',
            ),
            435 => 
            array (
                'id' => 1436,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Cork',
                'timezone' => 'Europe/Dublin',
            ),
            436 => 
            array (
                'id' => 1437,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Donegal',
                'timezone' => 'Europe/Dublin',
            ),
            437 => 
            array (
                'id' => 1438,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Galway',
                'timezone' => 'Europe/Dublin',
            ),
            438 => 
            array (
                'id' => 1439,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Kerry',
                'timezone' => 'Europe/Dublin',
            ),
            439 => 
            array (
                'id' => 1440,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Kildare',
                'timezone' => 'Europe/Dublin',
            ),
            440 => 
            array (
                'id' => 1441,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Kilkenny',
                'timezone' => 'Europe/Dublin',
            ),
            441 => 
            array (
                'id' => 1442,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Leitrim',
                'timezone' => 'Europe/Dublin',
            ),
            442 => 
            array (
                'id' => 1443,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Laois',
                'timezone' => 'Europe/Dublin',
            ),
            443 => 
            array (
                'id' => 1444,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Limerick',
                'timezone' => 'Europe/Dublin',
            ),
            444 => 
            array (
                'id' => 1445,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Longford',
                'timezone' => 'Europe/Dublin',
            ),
            445 => 
            array (
                'id' => 1446,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Louth',
                'timezone' => 'Europe/Dublin',
            ),
            446 => 
            array (
                'id' => 1447,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Mayo',
                'timezone' => 'Europe/Dublin',
            ),
            447 => 
            array (
                'id' => 1448,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Meath',
                'timezone' => 'Europe/Dublin',
            ),
            448 => 
            array (
                'id' => 1449,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Monaghan',
                'timezone' => 'Europe/Dublin',
            ),
            449 => 
            array (
                'id' => 1450,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Offaly',
                'timezone' => 'Europe/Dublin',
            ),
            450 => 
            array (
                'id' => 1451,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Roscommon',
                'timezone' => 'Europe/Dublin',
            ),
            451 => 
            array (
                'id' => 1452,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Sligo',
                'timezone' => 'Europe/Dublin',
            ),
            452 => 
            array (
                'id' => 1453,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Waterford',
                'timezone' => 'Europe/Dublin',
            ),
            453 => 
            array (
                'id' => 1454,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Westmeath',
                'timezone' => 'Europe/Dublin',
            ),
            454 => 
            array (
                'id' => 1455,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Wexford',
                'timezone' => 'Europe/Dublin',
            ),
            455 => 
            array (
                'id' => 1456,
                'country_id' => 372,
                'iso' => '',
                'name' => 'County Wicklow',
                'timezone' => 'Europe/Dublin',
            ),
            456 => 
            array (
                'id' => 1457,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Dún Laoghaire-Rathdown',
                'timezone' => 'Europe/Dublin',
            ),
            457 => 
            array (
                'id' => 1458,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Fingal County',
                'timezone' => 'Europe/Dublin',
            ),
            458 => 
            array (
                'id' => 1459,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Tipperary North Riding',
                'timezone' => 'Europe/Dublin',
            ),
            459 => 
            array (
                'id' => 1460,
                'country_id' => 372,
                'iso' => '',
                'name' => 'South Dublin',
                'timezone' => 'Europe/Dublin',
            ),
            460 => 
            array (
                'id' => 1461,
                'country_id' => 372,
                'iso' => '',
                'name' => 'Tipperary South Riding',
                'timezone' => 'Europe/Dublin',
            ),
            461 => 
            array (
                'id' => 1462,
                'country_id' => 376,
                'iso' => '',
                'name' => 'HaDarom',
                'timezone' => 'Asia/Jerusalem',
            ),
            462 => 
            array (
                'id' => 1463,
                'country_id' => 376,
                'iso' => '',
                'name' => 'HaMerkaz',
                'timezone' => 'Asia/Jerusalem',
            ),
            463 => 
            array (
                'id' => 1464,
                'country_id' => 376,
                'iso' => '',
                'name' => 'Northern District',
                'timezone' => 'Asia/Jerusalem',
            ),
            464 => 
            array (
                'id' => 1465,
                'country_id' => 376,
                'iso' => '',
                'name' => 'H̱efa',
                'timezone' => 'Asia/Jerusalem',
            ),
            465 => 
            array (
                'id' => 1466,
                'country_id' => 376,
                'iso' => '',
                'name' => 'Tel Aviv',
                'timezone' => 'Asia/Jerusalem',
            ),
            466 => 
            array (
                'id' => 1467,
                'country_id' => 376,
                'iso' => '',
                'name' => 'Yerushalayim',
                'timezone' => 'Asia/Jerusalem',
            ),
            467 => 
            array (
                'id' => 1468,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Abruzzo',
                'timezone' => 'Europe/Rome',
            ),
            468 => 
            array (
                'id' => 1469,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Basilicate',
                'timezone' => 'Europe/Rome',
            ),
            469 => 
            array (
                'id' => 1470,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Calabria',
                'timezone' => 'Europe/Rome',
            ),
            470 => 
            array (
                'id' => 1471,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Campania',
                'timezone' => 'Europe/Rome',
            ),
            471 => 
            array (
                'id' => 1472,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Emilia-Romagna',
                'timezone' => 'Europe/Rome',
            ),
            472 => 
            array (
                'id' => 1473,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Friuli',
                'timezone' => 'Europe/Rome',
            ),
            473 => 
            array (
                'id' => 1474,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Lazio',
                'timezone' => 'Europe/Rome',
            ),
            474 => 
            array (
                'id' => 1475,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Liguria',
                'timezone' => 'Europe/Rome',
            ),
            475 => 
            array (
                'id' => 1476,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Lombardy',
                'timezone' => 'Europe/Rome',
            ),
            476 => 
            array (
                'id' => 1477,
                'country_id' => 380,
                'iso' => '',
                'name' => 'The Marches',
                'timezone' => 'Europe/Rome',
            ),
            477 => 
            array (
                'id' => 1478,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Molise',
                'timezone' => 'Europe/Rome',
            ),
            478 => 
            array (
                'id' => 1479,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Piedmont',
                'timezone' => 'Europe/Rome',
            ),
            479 => 
            array (
                'id' => 1480,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Apulia',
                'timezone' => 'Europe/Rome',
            ),
            480 => 
            array (
                'id' => 1481,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Sardinia',
                'timezone' => 'Europe/Rome',
            ),
            481 => 
            array (
                'id' => 1482,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Sicily',
                'timezone' => 'Europe/Rome',
            ),
            482 => 
            array (
                'id' => 1483,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Tuscany',
                'timezone' => 'Europe/Rome',
            ),
            483 => 
            array (
                'id' => 1484,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Trentino-Alto Adige',
                'timezone' => 'Europe/Rome',
            ),
            484 => 
            array (
                'id' => 1485,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Umbria',
                'timezone' => 'Europe/Rome',
            ),
            485 => 
            array (
                'id' => 1486,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Aosta Valley',
                'timezone' => 'Europe/Rome',
            ),
            486 => 
            array (
                'id' => 1487,
                'country_id' => 380,
                'iso' => '',
                'name' => 'Veneto',
                'timezone' => 'Europe/Rome',
            ),
            487 => 
            array (
                'id' => 1488,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Valparaíso Region',
                'timezone' => 'Africa/Abidjan',
            ),
            488 => 
            array (
                'id' => 1489,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Antofagasta Region',
                'timezone' => 'Africa/Abidjan',
            ),
            489 => 
            array (
                'id' => 1490,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Araucanía Region',
                'timezone' => 'Africa/Abidjan',
            ),
            490 => 
            array (
                'id' => 1491,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Atacama Region',
                'timezone' => 'Africa/Abidjan',
            ),
            491 => 
            array (
                'id' => 1492,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Biobío Region',
                'timezone' => 'Africa/Abidjan',
            ),
            492 => 
            array (
                'id' => 1493,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Coquimbo Region',
                'timezone' => 'Africa/Abidjan',
            ),
            493 => 
            array (
                'id' => 1494,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Maule Region',
                'timezone' => 'Africa/Abidjan',
            ),
            494 => 
            array (
                'id' => 1495,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Santiago Metropolitan Region',
                'timezone' => 'Africa/Abidjan',
            ),
            495 => 
            array (
                'id' => 1496,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Danane',
                'timezone' => 'Africa/Abidjan',
            ),
            496 => 
            array (
                'id' => 1497,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Divo',
                'timezone' => 'Africa/Abidjan',
            ),
            497 => 
            array (
                'id' => 1498,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Ferkessedougou',
                'timezone' => 'Africa/Abidjan',
            ),
            498 => 
            array (
                'id' => 1499,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Gagnoa',
                'timezone' => 'Africa/Abidjan',
            ),
            499 => 
            array (
                'id' => 1500,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Katiola',
                'timezone' => 'Africa/Abidjan',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Korhogo',
                'timezone' => 'Africa/Abidjan',
            ),
            1 => 
            array (
                'id' => 1502,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Odienne',
                'timezone' => 'Africa/Abidjan',
            ),
            2 => 
            array (
                'id' => 1503,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Seguela',
                'timezone' => 'Africa/Abidjan',
            ),
            3 => 
            array (
                'id' => 1504,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Touba',
                'timezone' => 'Africa/Abidjan',
            ),
            4 => 
            array (
                'id' => 1505,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bongouanou',
                'timezone' => 'Africa/Abidjan',
            ),
            5 => 
            array (
                'id' => 1506,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Issia',
                'timezone' => 'Africa/Abidjan',
            ),
            6 => 
            array (
                'id' => 1507,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Lakota',
                'timezone' => 'Africa/Abidjan',
            ),
            7 => 
            array (
                'id' => 1508,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Mankono',
                'timezone' => 'Africa/Abidjan',
            ),
            8 => 
            array (
                'id' => 1509,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Oume',
                'timezone' => 'Africa/Abidjan',
            ),
            9 => 
            array (
                'id' => 1510,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Soubre',
                'timezone' => 'Africa/Abidjan',
            ),
            10 => 
            array (
                'id' => 1511,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Tingrela',
                'timezone' => 'Africa/Abidjan',
            ),
            11 => 
            array (
                'id' => 1512,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Zuenoula',
                'timezone' => 'Africa/Abidjan',
            ),
            12 => 
            array (
                'id' => 1513,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bangolo',
                'timezone' => 'Africa/Abidjan',
            ),
            13 => 
            array (
                'id' => 1514,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Beoumi',
                'timezone' => 'Africa/Abidjan',
            ),
            14 => 
            array (
                'id' => 1515,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bondoukou',
                'timezone' => 'Africa/Abidjan',
            ),
            15 => 
            array (
                'id' => 1516,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bouafle',
                'timezone' => 'Africa/Abidjan',
            ),
            16 => 
            array (
                'id' => 1517,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bouake',
                'timezone' => 'Africa/Abidjan',
            ),
            17 => 
            array (
                'id' => 1518,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Daloa',
                'timezone' => 'Africa/Abidjan',
            ),
            18 => 
            array (
                'id' => 1519,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Daoukro',
                'timezone' => 'Africa/Abidjan',
            ),
            19 => 
            array (
                'id' => 1520,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Duekoue',
                'timezone' => 'Africa/Abidjan',
            ),
            20 => 
            array (
                'id' => 1521,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Grand-Lahou',
                'timezone' => 'Africa/Abidjan',
            ),
            21 => 
            array (
                'id' => 1522,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Man',
                'timezone' => 'Africa/Abidjan',
            ),
            22 => 
            array (
                'id' => 1523,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Mbahiakro',
                'timezone' => 'Africa/Abidjan',
            ),
            23 => 
            array (
                'id' => 1524,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Sakassou',
                'timezone' => 'Africa/Abidjan',
            ),
            24 => 
            array (
                'id' => 1525,
                'country_id' => 384,
                'iso' => '',
                'name' => 'San Pedro',
                'timezone' => 'Africa/Abidjan',
            ),
            25 => 
            array (
                'id' => 1526,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Sassandra',
                'timezone' => 'Africa/Abidjan',
            ),
            26 => 
            array (
                'id' => 1527,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Sinfra',
                'timezone' => 'Africa/Abidjan',
            ),
            27 => 
            array (
                'id' => 1528,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Tabou',
                'timezone' => 'Africa/Abidjan',
            ),
            28 => 
            array (
                'id' => 1529,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Tanda',
                'timezone' => 'Africa/Abidjan',
            ),
            29 => 
            array (
                'id' => 1530,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Tiassale',
                'timezone' => 'Africa/Abidjan',
            ),
            30 => 
            array (
                'id' => 1531,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Toumodi',
                'timezone' => 'Africa/Abidjan',
            ),
            31 => 
            array (
                'id' => 1532,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Vavoua',
                'timezone' => 'Africa/Abidjan',
            ),
            32 => 
            array (
                'id' => 1533,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Abidjan',
                'timezone' => 'Africa/Abidjan',
            ),
            33 => 
            array (
                'id' => 1534,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Aboisso',
                'timezone' => 'Africa/Abidjan',
            ),
            34 => 
            array (
                'id' => 1535,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Adiake',
                'timezone' => 'Africa/Abidjan',
            ),
            35 => 
            array (
                'id' => 1536,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Alepe',
                'timezone' => 'Africa/Abidjan',
            ),
            36 => 
            array (
                'id' => 1537,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bocanda',
                'timezone' => 'Africa/Abidjan',
            ),
            37 => 
            array (
                'id' => 1538,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Dabou',
                'timezone' => 'Africa/Abidjan',
            ),
            38 => 
            array (
                'id' => 1539,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Dimbokro',
                'timezone' => 'Africa/Abidjan',
            ),
            39 => 
            array (
                'id' => 1540,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Grand-Bassam',
                'timezone' => 'Africa/Abidjan',
            ),
            40 => 
            array (
                'id' => 1541,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Guiglo',
                'timezone' => 'Africa/Abidjan',
            ),
            41 => 
            array (
                'id' => 1542,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Jacqueville',
                'timezone' => 'Africa/Abidjan',
            ),
            42 => 
            array (
                'id' => 1543,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Tiebissou',
                'timezone' => 'Africa/Abidjan',
            ),
            43 => 
            array (
                'id' => 1544,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Toulepleu',
                'timezone' => 'Africa/Abidjan',
            ),
            44 => 
            array (
                'id' => 1545,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Yamoussoukro',
                'timezone' => 'Africa/Abidjan',
            ),
            45 => 
            array (
                'id' => 1546,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Agnéby',
                'timezone' => 'Africa/Abidjan',
            ),
            46 => 
            array (
                'id' => 1547,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bafing',
                'timezone' => 'Africa/Abidjan',
            ),
            47 => 
            array (
                'id' => 1548,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Bas-Sassandra',
                'timezone' => 'Africa/Abidjan',
            ),
            48 => 
            array (
                'id' => 1549,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Denguélé',
                'timezone' => 'Africa/Abidjan',
            ),
            49 => 
            array (
                'id' => 1550,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Dix-Huit Montagnes',
                'timezone' => 'Africa/Abidjan',
            ),
            50 => 
            array (
                'id' => 1551,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Fromager',
                'timezone' => 'Africa/Abidjan',
            ),
            51 => 
            array (
                'id' => 1552,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Haut-Sassandra',
                'timezone' => 'Africa/Abidjan',
            ),
            52 => 
            array (
                'id' => 1553,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Lacs',
                'timezone' => 'Africa/Abidjan',
            ),
            53 => 
            array (
                'id' => 1554,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Lagunes',
                'timezone' => 'Africa/Abidjan',
            ),
            54 => 
            array (
                'id' => 1555,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Marahoué',
                'timezone' => 'Africa/Abidjan',
            ),
            55 => 
            array (
                'id' => 1556,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Moyen-Cavally',
                'timezone' => 'Africa/Abidjan',
            ),
            56 => 
            array (
                'id' => 1557,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Moyen-Comoé',
                'timezone' => 'Africa/Abidjan',
            ),
            57 => 
            array (
                'id' => 1558,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Nʼzi-Comoé',
                'timezone' => 'Africa/Abidjan',
            ),
            58 => 
            array (
                'id' => 1559,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Savanes',
                'timezone' => 'Africa/Abidjan',
            ),
            59 => 
            array (
                'id' => 1560,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Sud-Bandama',
                'timezone' => 'Africa/Abidjan',
            ),
            60 => 
            array (
                'id' => 1561,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Sud-Comoé',
                'timezone' => 'Africa/Abidjan',
            ),
            61 => 
            array (
                'id' => 1562,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Vallée du Bandama',
                'timezone' => 'Africa/Abidjan',
            ),
            62 => 
            array (
                'id' => 1563,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Worodougou',
                'timezone' => 'Africa/Abidjan',
            ),
            63 => 
            array (
                'id' => 1564,
                'country_id' => 384,
                'iso' => '',
                'name' => 'Zanzan',
                'timezone' => 'Africa/Abidjan',
            ),
            64 => 
            array (
                'id' => 1565,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Clarendon',
                'timezone' => 'America/Jamaica',
            ),
            65 => 
            array (
                'id' => 1566,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Hanover Parish',
                'timezone' => 'America/Jamaica',
            ),
            66 => 
            array (
                'id' => 1567,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Manchester',
                'timezone' => 'America/Jamaica',
            ),
            67 => 
            array (
                'id' => 1568,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Portland',
                'timezone' => 'America/Jamaica',
            ),
            68 => 
            array (
                'id' => 1569,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Saint Andrew',
                'timezone' => 'America/Jamaica',
            ),
            69 => 
            array (
                'id' => 1570,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Saint Ann',
                'timezone' => 'America/Jamaica',
            ),
            70 => 
            array (
                'id' => 1571,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Saint Catherine',
                'timezone' => 'America/Jamaica',
            ),
            71 => 
            array (
                'id' => 1572,
                'country_id' => 388,
                'iso' => '',
                'name' => 'St. Elizabeth',
                'timezone' => 'America/Jamaica',
            ),
            72 => 
            array (
                'id' => 1573,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Saint James',
                'timezone' => 'America/Jamaica',
            ),
            73 => 
            array (
                'id' => 1574,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Saint Mary',
                'timezone' => 'America/Jamaica',
            ),
            74 => 
            array (
                'id' => 1575,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Saint Thomas',
                'timezone' => 'America/Jamaica',
            ),
            75 => 
            array (
                'id' => 1576,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Trelawny',
                'timezone' => 'America/Jamaica',
            ),
            76 => 
            array (
                'id' => 1577,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Westmoreland',
                'timezone' => 'America/Jamaica',
            ),
            77 => 
            array (
                'id' => 1578,
                'country_id' => 388,
                'iso' => '',
                'name' => 'Kingston',
                'timezone' => 'America/Jamaica',
            ),
            78 => 
            array (
                'id' => 1579,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Aichi',
                'timezone' => 'Asia/Tokyo',
            ),
            79 => 
            array (
                'id' => 1580,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Akita',
                'timezone' => 'Asia/Tokyo',
            ),
            80 => 
            array (
                'id' => 1581,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Aomori',
                'timezone' => 'Asia/Tokyo',
            ),
            81 => 
            array (
                'id' => 1582,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Chiba',
                'timezone' => 'Asia/Tokyo',
            ),
            82 => 
            array (
                'id' => 1583,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Ehime',
                'timezone' => 'Asia/Tokyo',
            ),
            83 => 
            array (
                'id' => 1584,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Fukui',
                'timezone' => 'Asia/Tokyo',
            ),
            84 => 
            array (
                'id' => 1585,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Fukuoka',
                'timezone' => 'Asia/Tokyo',
            ),
            85 => 
            array (
                'id' => 1586,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Fukushima',
                'timezone' => 'Asia/Tokyo',
            ),
            86 => 
            array (
                'id' => 1587,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Gifu',
                'timezone' => 'Asia/Tokyo',
            ),
            87 => 
            array (
                'id' => 1588,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Gumma',
                'timezone' => 'Asia/Tokyo',
            ),
            88 => 
            array (
                'id' => 1589,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Hiroshima',
                'timezone' => 'Asia/Tokyo',
            ),
            89 => 
            array (
                'id' => 1590,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Hokkaidō',
                'timezone' => 'Asia/Tokyo',
            ),
            90 => 
            array (
                'id' => 1591,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Hyōgo',
                'timezone' => 'Asia/Tokyo',
            ),
            91 => 
            array (
                'id' => 1592,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Ibaraki',
                'timezone' => 'Asia/Tokyo',
            ),
            92 => 
            array (
                'id' => 1593,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Ishikawa',
                'timezone' => 'Asia/Tokyo',
            ),
            93 => 
            array (
                'id' => 1594,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Iwate',
                'timezone' => 'Asia/Tokyo',
            ),
            94 => 
            array (
                'id' => 1595,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Kagawa',
                'timezone' => 'Asia/Tokyo',
            ),
            95 => 
            array (
                'id' => 1596,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Kagoshima',
                'timezone' => 'Asia/Tokyo',
            ),
            96 => 
            array (
                'id' => 1597,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Kanagawa',
                'timezone' => 'Asia/Tokyo',
            ),
            97 => 
            array (
                'id' => 1598,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Kōchi',
                'timezone' => 'Asia/Tokyo',
            ),
            98 => 
            array (
                'id' => 1599,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Kumamoto',
                'timezone' => 'Asia/Tokyo',
            ),
            99 => 
            array (
                'id' => 1600,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Kyōto',
                'timezone' => 'Asia/Tokyo',
            ),
            100 => 
            array (
                'id' => 1601,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Mie',
                'timezone' => 'Asia/Tokyo',
            ),
            101 => 
            array (
                'id' => 1602,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Miyagi',
                'timezone' => 'Asia/Tokyo',
            ),
            102 => 
            array (
                'id' => 1603,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Miyazaki',
                'timezone' => 'Asia/Tokyo',
            ),
            103 => 
            array (
                'id' => 1604,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Nagano',
                'timezone' => 'Asia/Tokyo',
            ),
            104 => 
            array (
                'id' => 1605,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Nagasaki',
                'timezone' => 'Asia/Tokyo',
            ),
            105 => 
            array (
                'id' => 1606,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Nara',
                'timezone' => 'Asia/Tokyo',
            ),
            106 => 
            array (
                'id' => 1607,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Niigata',
                'timezone' => 'Asia/Tokyo',
            ),
            107 => 
            array (
                'id' => 1608,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Ōita',
                'timezone' => 'Asia/Tokyo',
            ),
            108 => 
            array (
                'id' => 1609,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Okayama',
                'timezone' => 'Asia/Tokyo',
            ),
            109 => 
            array (
                'id' => 1610,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Ōsaka',
                'timezone' => 'Asia/Tokyo',
            ),
            110 => 
            array (
                'id' => 1611,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Saga',
                'timezone' => 'Asia/Tokyo',
            ),
            111 => 
            array (
                'id' => 1612,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Saitama',
                'timezone' => 'Asia/Tokyo',
            ),
            112 => 
            array (
                'id' => 1613,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Shiga',
                'timezone' => 'Asia/Tokyo',
            ),
            113 => 
            array (
                'id' => 1614,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Shimane',
                'timezone' => 'Asia/Tokyo',
            ),
            114 => 
            array (
                'id' => 1615,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Shizuoka',
                'timezone' => 'Asia/Tokyo',
            ),
            115 => 
            array (
                'id' => 1616,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Tochigi',
                'timezone' => 'Asia/Tokyo',
            ),
            116 => 
            array (
                'id' => 1617,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Tokushima',
                'timezone' => 'Asia/Tokyo',
            ),
            117 => 
            array (
                'id' => 1618,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Tōkyō',
                'timezone' => 'Asia/Tokyo',
            ),
            118 => 
            array (
                'id' => 1619,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Tottori',
                'timezone' => 'Asia/Tokyo',
            ),
            119 => 
            array (
                'id' => 1620,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Toyama',
                'timezone' => 'Asia/Tokyo',
            ),
            120 => 
            array (
                'id' => 1621,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Wakayama',
                'timezone' => 'Asia/Tokyo',
            ),
            121 => 
            array (
                'id' => 1622,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Yamagata',
                'timezone' => 'Asia/Tokyo',
            ),
            122 => 
            array (
                'id' => 1623,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Yamaguchi',
                'timezone' => 'Asia/Tokyo',
            ),
            123 => 
            array (
                'id' => 1624,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Yamanashi',
                'timezone' => 'Asia/Tokyo',
            ),
            124 => 
            array (
                'id' => 1625,
                'country_id' => 392,
                'iso' => '',
                'name' => 'Okinawa',
                'timezone' => 'Asia/Tokyo',
            ),
            125 => 
            array (
                'id' => 1626,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Almaty',
                'timezone' => 'Asia/Almaty',
            ),
            126 => 
            array (
                'id' => 1627,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Almaty Qalasy',
                'timezone' => 'Asia/Almaty',
            ),
            127 => 
            array (
                'id' => 1628,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Aqmola',
                'timezone' => 'Asia/Almaty',
            ),
            128 => 
            array (
                'id' => 1629,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Aqtöbe',
                'timezone' => 'Asia/Aqtobe',
            ),
            129 => 
            array (
                'id' => 1630,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Astana Qalasy',
                'timezone' => 'Asia/Almaty',
            ),
            130 => 
            array (
                'id' => 1631,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Atyraū',
                'timezone' => 'Asia/Oral',
            ),
            131 => 
            array (
                'id' => 1632,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Batys Qazaqstan',
                'timezone' => 'Asia/Oral',
            ),
            132 => 
            array (
                'id' => 1633,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Bayqongyr Qalasy',
                'timezone' => 'Asia/Almaty',
            ),
            133 => 
            array (
                'id' => 1634,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Mangghystaū',
                'timezone' => 'Asia/Aqtau',
            ),
            134 => 
            array (
                'id' => 1635,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Ongtüstik Qazaqstan',
                'timezone' => 'Asia/Almaty',
            ),
            135 => 
            array (
                'id' => 1636,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Pavlodar',
                'timezone' => 'Asia/Almaty',
            ),
            136 => 
            array (
                'id' => 1637,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Qaraghandy',
                'timezone' => 'Asia/Almaty',
            ),
            137 => 
            array (
                'id' => 1638,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Qostanay',
                'timezone' => 'Asia/Qyzylorda',
            ),
            138 => 
            array (
                'id' => 1639,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Qyzylorda',
                'timezone' => 'Asia/Qyzylorda',
            ),
            139 => 
            array (
                'id' => 1640,
                'country_id' => 398,
                'iso' => '',
                'name' => 'East Kazakhstan',
                'timezone' => 'Asia/Almaty',
            ),
            140 => 
            array (
                'id' => 1641,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Soltüstik Qazaqstan',
                'timezone' => 'Asia/Almaty',
            ),
            141 => 
            array (
                'id' => 1642,
                'country_id' => 398,
                'iso' => '',
                'name' => 'Zhambyl',
                'timezone' => 'Asia/Almaty',
            ),
            142 => 
            array (
                'id' => 1643,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Balqa',
                'timezone' => 'Asia/Amman',
            ),
            143 => 
            array (
                'id' => 1644,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Ma’an',
                'timezone' => 'Asia/Amman',
            ),
            144 => 
            array (
                'id' => 1645,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Karak',
                'timezone' => 'Asia/Amman',
            ),
            145 => 
            array (
                'id' => 1646,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Al Mafraq',
                'timezone' => 'Asia/Amman',
            ),
            146 => 
            array (
                'id' => 1647,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Tafielah',
                'timezone' => 'Asia/Amman',
            ),
            147 => 
            array (
                'id' => 1648,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Az Zarqa',
                'timezone' => 'Asia/Amman',
            ),
            148 => 
            array (
                'id' => 1649,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Irbid',
                'timezone' => 'Asia/Amman',
            ),
            149 => 
            array (
                'id' => 1650,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Mafraq',
                'timezone' => 'Asia/Amman',
            ),
            150 => 
            array (
                'id' => 1651,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Amman',
                'timezone' => 'Asia/Amman',
            ),
            151 => 
            array (
                'id' => 1652,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Zarqa',
                'timezone' => 'Asia/Amman',
            ),
            152 => 
            array (
                'id' => 1653,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Irbid',
                'timezone' => 'Asia/Amman',
            ),
            153 => 
            array (
                'id' => 1654,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Ma’an',
                'timezone' => 'Asia/Amman',
            ),
            154 => 
            array (
                'id' => 1655,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Ajlun',
                'timezone' => 'Asia/Amman',
            ),
            155 => 
            array (
                'id' => 1656,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Aqaba',
                'timezone' => 'Asia/Amman',
            ),
            156 => 
            array (
                'id' => 1657,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Jerash',
                'timezone' => 'Asia/Amman',
            ),
            157 => 
            array (
                'id' => 1658,
                'country_id' => 400,
                'iso' => '',
                'name' => 'Madaba',
                'timezone' => 'Asia/Amman',
            ),
            158 => 
            array (
                'id' => 1659,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Africa/Nairobi',
            ),
            159 => 
            array (
                'id' => 1660,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Coast',
                'timezone' => 'Africa/Nairobi',
            ),
            160 => 
            array (
                'id' => 1661,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Eastern',
                'timezone' => 'Africa/Nairobi',
            ),
            161 => 
            array (
                'id' => 1662,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Nairobi Area',
                'timezone' => 'Africa/Nairobi',
            ),
            162 => 
            array (
                'id' => 1663,
                'country_id' => 404,
                'iso' => '',
                'name' => 'North-Eastern',
                'timezone' => 'Africa/Nairobi',
            ),
            163 => 
            array (
                'id' => 1664,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Nyanza',
                'timezone' => 'Africa/Nairobi',
            ),
            164 => 
            array (
                'id' => 1665,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Rift Valley',
                'timezone' => 'Africa/Nairobi',
            ),
            165 => 
            array (
                'id' => 1666,
                'country_id' => 404,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Africa/Nairobi',
            ),
            166 => 
            array (
                'id' => 1667,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Chagang-do',
                'timezone' => 'Asia/Pyongyang',
            ),
            167 => 
            array (
                'id' => 1668,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Hamgyŏng-namdo',
                'timezone' => 'Asia/Pyongyang',
            ),
            168 => 
            array (
                'id' => 1669,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Hwanghae-namdo',
                'timezone' => 'Asia/Pyongyang',
            ),
            169 => 
            array (
                'id' => 1670,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Hwanghae-bukto',
                'timezone' => 'Asia/Pyongyang',
            ),
            170 => 
            array (
                'id' => 1671,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Kaesŏng-si',
                'timezone' => 'Asia/Pyongyang',
            ),
            171 => 
            array (
                'id' => 1672,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Gangwon',
                'timezone' => 'Asia/Pyongyang',
            ),
            172 => 
            array (
                'id' => 1673,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Pʼyŏngan-bukto',
                'timezone' => 'Asia/Pyongyang',
            ),
            173 => 
            array (
                'id' => 1674,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Pʼyŏngyang-si',
                'timezone' => 'Asia/Pyongyang',
            ),
            174 => 
            array (
                'id' => 1675,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Yanggang-do',
                'timezone' => 'Asia/Pyongyang',
            ),
            175 => 
            array (
                'id' => 1676,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Nampʼo-si',
                'timezone' => 'Asia/Pyongyang',
            ),
            176 => 
            array (
                'id' => 1677,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Pʼyŏngan-namdo',
                'timezone' => 'Asia/Pyongyang',
            ),
            177 => 
            array (
                'id' => 1678,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Hamgyŏng-bukto',
                'timezone' => 'Asia/Pyongyang',
            ),
            178 => 
            array (
                'id' => 1679,
                'country_id' => 408,
                'iso' => '',
                'name' => 'Najin Sŏnbong-si',
                'timezone' => 'Asia/Pyongyang',
            ),
            179 => 
            array (
                'id' => 1680,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Jeju',
                'timezone' => 'Asia/Seoul',
            ),
            180 => 
            array (
                'id' => 1681,
                'country_id' => 410,
                'iso' => '',
                'name' => 'North Jeolla',
                'timezone' => 'Asia/Seoul',
            ),
            181 => 
            array (
                'id' => 1682,
                'country_id' => 410,
                'iso' => '',
                'name' => 'North Chungcheong',
                'timezone' => 'Asia/Seoul',
            ),
            182 => 
            array (
                'id' => 1683,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Gangwon',
                'timezone' => 'Asia/Seoul',
            ),
            183 => 
            array (
                'id' => 1684,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Busan',
                'timezone' => 'Asia/Seoul',
            ),
            184 => 
            array (
                'id' => 1685,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Seoul',
                'timezone' => 'Asia/Seoul',
            ),
            185 => 
            array (
                'id' => 1686,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Incheon',
                'timezone' => 'Asia/Seoul',
            ),
            186 => 
            array (
                'id' => 1687,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Gyeonggi',
                'timezone' => 'Asia/Seoul',
            ),
            187 => 
            array (
                'id' => 1688,
                'country_id' => 410,
                'iso' => '',
                'name' => 'North Gyeongsang',
                'timezone' => 'Asia/Seoul',
            ),
            188 => 
            array (
                'id' => 1689,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Daegu',
                'timezone' => 'Asia/Seoul',
            ),
            189 => 
            array (
                'id' => 1690,
                'country_id' => 410,
                'iso' => '',
                'name' => 'South Jeolla',
                'timezone' => 'Asia/Seoul',
            ),
            190 => 
            array (
                'id' => 1691,
                'country_id' => 410,
                'iso' => '',
                'name' => 'South Chungcheong',
                'timezone' => 'Asia/Seoul',
            ),
            191 => 
            array (
                'id' => 1692,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Gwangju',
                'timezone' => 'Asia/Seoul',
            ),
            192 => 
            array (
                'id' => 1693,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Daejeon',
                'timezone' => 'Asia/Seoul',
            ),
            193 => 
            array (
                'id' => 1694,
                'country_id' => 410,
                'iso' => '',
                'name' => 'South Gyeongsang',
                'timezone' => 'Asia/Seoul',
            ),
            194 => 
            array (
                'id' => 1695,
                'country_id' => 410,
                'iso' => '',
                'name' => 'Ulsan',
                'timezone' => 'Asia/Seoul',
            ),
            195 => 
            array (
                'id' => 1696,
                'country_id' => 414,
                'iso' => '',
                'name' => 'Muḩāfaz̧atalWafrah',
                'timezone' => 'Asia/Kuwait',
            ),
            196 => 
            array (
                'id' => 1697,
                'country_id' => 414,
                'iso' => '',
                'name' => 'Al ‘Āşimah',
                'timezone' => 'Asia/Kuwait',
            ),
            197 => 
            array (
                'id' => 1698,
                'country_id' => 414,
                'iso' => '',
                'name' => 'Al Aḩmadī',
                'timezone' => 'Asia/Kuwait',
            ),
            198 => 
            array (
                'id' => 1699,
                'country_id' => 414,
                'iso' => '',
                'name' => 'Al Jahrāʼ',
                'timezone' => 'Asia/Kuwait',
            ),
            199 => 
            array (
                'id' => 1700,
                'country_id' => 414,
                'iso' => '',
                'name' => 'Al Farwaniyah',
                'timezone' => 'Asia/Kuwait',
            ),
            200 => 
            array (
                'id' => 1701,
                'country_id' => 414,
                'iso' => '',
                'name' => 'Ḩawallī',
                'timezone' => 'Asia/Kuwait',
            ),
            201 => 
            array (
                'id' => 1702,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Bishkek',
                'timezone' => 'Asia/Bishkek',
            ),
            202 => 
            array (
                'id' => 1703,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Chüy',
                'timezone' => 'Asia/Bishkek',
            ),
            203 => 
            array (
                'id' => 1704,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Jalal-Abad',
                'timezone' => 'Asia/Bishkek',
            ),
            204 => 
            array (
                'id' => 1705,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Naryn',
                'timezone' => 'Asia/Bishkek',
            ),
            205 => 
            array (
                'id' => 1706,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Talas',
                'timezone' => 'Asia/Bishkek',
            ),
            206 => 
            array (
                'id' => 1707,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Ysyk-Köl',
                'timezone' => 'Asia/Bishkek',
            ),
            207 => 
            array (
                'id' => 1708,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Osh',
                'timezone' => 'Asia/Bishkek',
            ),
            208 => 
            array (
                'id' => 1709,
                'country_id' => 417,
                'iso' => '',
                'name' => 'Batken',
                'timezone' => 'Asia/Bishkek',
            ),
            209 => 
            array (
                'id' => 1710,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Attapu',
                'timezone' => 'Asia/Vientiane',
            ),
            210 => 
            array (
                'id' => 1711,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Champasak',
                'timezone' => 'Asia/Vientiane',
            ),
            211 => 
            array (
                'id' => 1712,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Houaphan',
                'timezone' => 'Asia/Vientiane',
            ),
            212 => 
            array (
                'id' => 1713,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Khammouan',
                'timezone' => 'Asia/Vientiane',
            ),
            213 => 
            array (
                'id' => 1714,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Louang Namtha',
                'timezone' => 'Asia/Vientiane',
            ),
            214 => 
            array (
                'id' => 1715,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Louangphrabang',
                'timezone' => 'Asia/Vientiane',
            ),
            215 => 
            array (
                'id' => 1716,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Oudômxai',
                'timezone' => 'Asia/Vientiane',
            ),
            216 => 
            array (
                'id' => 1717,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Phongsali',
                'timezone' => 'Asia/Vientiane',
            ),
            217 => 
            array (
                'id' => 1718,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Saravan',
                'timezone' => 'Asia/Vientiane',
            ),
            218 => 
            array (
                'id' => 1719,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Savannakhet',
                'timezone' => 'Asia/Vientiane',
            ),
            219 => 
            array (
                'id' => 1720,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Vientiane',
                'timezone' => 'Asia/Vientiane',
            ),
            220 => 
            array (
                'id' => 1721,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Xiagnabouli',
                'timezone' => 'Asia/Vientiane',
            ),
            221 => 
            array (
                'id' => 1722,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Xiangkhoang',
                'timezone' => 'Asia/Vientiane',
            ),
            222 => 
            array (
                'id' => 1723,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Khammouan',
                'timezone' => 'Asia/Vientiane',
            ),
            223 => 
            array (
                'id' => 1724,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Loungnamtha',
                'timezone' => 'Asia/Vientiane',
            ),
            224 => 
            array (
                'id' => 1725,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Louangphabang',
                'timezone' => 'Asia/Vientiane',
            ),
            225 => 
            array (
                'id' => 1726,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Phôngsali',
                'timezone' => 'Asia/Vientiane',
            ),
            226 => 
            array (
                'id' => 1727,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Salavan',
                'timezone' => 'Asia/Vientiane',
            ),
            227 => 
            array (
                'id' => 1728,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Savannahkhét',
                'timezone' => 'Asia/Vientiane',
            ),
            228 => 
            array (
                'id' => 1729,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Bokèo',
                'timezone' => 'Asia/Vientiane',
            ),
            229 => 
            array (
                'id' => 1730,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Bolikhamxai',
                'timezone' => 'Asia/Vientiane',
            ),
            230 => 
            array (
                'id' => 1731,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Viangchan',
                'timezone' => 'Asia/Vientiane',
            ),
            231 => 
            array (
                'id' => 1732,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Xékong',
                'timezone' => 'Asia/Vientiane',
            ),
            232 => 
            array (
                'id' => 1733,
                'country_id' => 418,
                'iso' => '',
                'name' => 'Viangchan',
                'timezone' => 'Asia/Vientiane',
            ),
            233 => 
            array (
                'id' => 1734,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Béqaa',
                'timezone' => 'Asia/Beirut',
            ),
            234 => 
            array (
                'id' => 1735,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Liban-Nord',
                'timezone' => 'Asia/Beirut',
            ),
            235 => 
            array (
                'id' => 1736,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Beyrouth',
                'timezone' => 'Asia/Beirut',
            ),
            236 => 
            array (
                'id' => 1737,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Mont-Liban',
                'timezone' => 'Asia/Beirut',
            ),
            237 => 
            array (
                'id' => 1738,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Liban-Sud',
                'timezone' => 'Asia/Beirut',
            ),
            238 => 
            array (
                'id' => 1739,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Nabatîyé',
                'timezone' => 'Asia/Beirut',
            ),
            239 => 
            array (
                'id' => 1740,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Béqaa',
                'timezone' => 'Asia/Beirut',
            ),
            240 => 
            array (
                'id' => 1741,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Liban-Nord',
                'timezone' => 'Asia/Beirut',
            ),
            241 => 
            array (
                'id' => 1742,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Aakkâr',
                'timezone' => 'Asia/Beirut',
            ),
            242 => 
            array (
                'id' => 1743,
                'country_id' => 422,
                'iso' => '',
                'name' => 'Baalbek-Hermel',
                'timezone' => 'Asia/Beirut',
            ),
            243 => 
            array (
                'id' => 1744,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Balzers Commune',
                'timezone' => 'Africa/Maseru',
            ),
            244 => 
            array (
                'id' => 1745,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Eschen Commune',
                'timezone' => 'Africa/Maseru',
            ),
            245 => 
            array (
                'id' => 1746,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Gamprin Commune',
                'timezone' => 'Africa/Maseru',
            ),
            246 => 
            array (
                'id' => 1747,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Mauren Commune',
                'timezone' => 'Africa/Maseru',
            ),
            247 => 
            array (
                'id' => 1748,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Planken Commune',
                'timezone' => 'Africa/Maseru',
            ),
            248 => 
            array (
                'id' => 1749,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Ruggell Commune',
                'timezone' => 'Africa/Maseru',
            ),
            249 => 
            array (
                'id' => 1750,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Berea District',
                'timezone' => 'Africa/Maseru',
            ),
            250 => 
            array (
                'id' => 1751,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Butha-Buthe District',
                'timezone' => 'Africa/Maseru',
            ),
            251 => 
            array (
                'id' => 1752,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Leribe District',
                'timezone' => 'Africa/Maseru',
            ),
            252 => 
            array (
                'id' => 1753,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Mafeteng',
                'timezone' => 'Africa/Maseru',
            ),
            253 => 
            array (
                'id' => 1754,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Maseru',
                'timezone' => 'Africa/Maseru',
            ),
            254 => 
            array (
                'id' => 1755,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Mohaleʼs Hoek',
                'timezone' => 'Africa/Maseru',
            ),
            255 => 
            array (
                'id' => 1756,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Mokhotlong',
                'timezone' => 'Africa/Maseru',
            ),
            256 => 
            array (
                'id' => 1757,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Qachaʼs Nek',
                'timezone' => 'Africa/Maseru',
            ),
            257 => 
            array (
                'id' => 1758,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Quthing District',
                'timezone' => 'Africa/Maseru',
            ),
            258 => 
            array (
                'id' => 1759,
                'country_id' => 426,
                'iso' => '',
                'name' => 'Thaba-Tseka District',
                'timezone' => 'Africa/Maseru',
            ),
            259 => 
            array (
                'id' => 1760,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Dobeles Rajons',
                'timezone' => 'Europe/Riga',
            ),
            260 => 
            array (
                'id' => 1761,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Aizkraukles Rajons',
                'timezone' => 'Europe/Riga',
            ),
            261 => 
            array (
                'id' => 1762,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Alūksnes Rajons',
                'timezone' => 'Europe/Riga',
            ),
            262 => 
            array (
                'id' => 1763,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Balvu Rajons',
                'timezone' => 'Europe/Riga',
            ),
            263 => 
            array (
                'id' => 1764,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Bauskas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            264 => 
            array (
                'id' => 1765,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Cēsu Rajons',
                'timezone' => 'Europe/Riga',
            ),
            265 => 
            array (
                'id' => 1766,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Daugavpils',
                'timezone' => 'Europe/Riga',
            ),
            266 => 
            array (
                'id' => 1767,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Daugavpils Rajons',
                'timezone' => 'Europe/Riga',
            ),
            267 => 
            array (
                'id' => 1768,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Dobeles Rajons',
                'timezone' => 'Europe/Riga',
            ),
            268 => 
            array (
                'id' => 1769,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Gulbenes Rajons',
                'timezone' => 'Europe/Riga',
            ),
            269 => 
            array (
                'id' => 1770,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Jēkabpils Rajons',
                'timezone' => 'Europe/Riga',
            ),
            270 => 
            array (
                'id' => 1771,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Jelgava',
                'timezone' => 'Europe/Riga',
            ),
            271 => 
            array (
                'id' => 1772,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Jelgavas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            272 => 
            array (
                'id' => 1773,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Jūrmala',
                'timezone' => 'Europe/Riga',
            ),
            273 => 
            array (
                'id' => 1774,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Krāslavas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            274 => 
            array (
                'id' => 1775,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Kuldīgas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            275 => 
            array (
                'id' => 1776,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Liepāja',
                'timezone' => 'Europe/Riga',
            ),
            276 => 
            array (
                'id' => 1777,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Liepājas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            277 => 
            array (
                'id' => 1778,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Limbažu Rajons',
                'timezone' => 'Europe/Riga',
            ),
            278 => 
            array (
                'id' => 1779,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Ludzas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            279 => 
            array (
                'id' => 1780,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Madonas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            280 => 
            array (
                'id' => 1781,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Ogres Rajons',
                'timezone' => 'Europe/Riga',
            ),
            281 => 
            array (
                'id' => 1782,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Preiļu Rajons',
                'timezone' => 'Europe/Riga',
            ),
            282 => 
            array (
                'id' => 1783,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Rēzekne',
                'timezone' => 'Europe/Riga',
            ),
            283 => 
            array (
                'id' => 1784,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Rēzeknes Rajons',
                'timezone' => 'Europe/Riga',
            ),
            284 => 
            array (
                'id' => 1785,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Rīga',
                'timezone' => 'Europe/Riga',
            ),
            285 => 
            array (
                'id' => 1786,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Rīgas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            286 => 
            array (
                'id' => 1787,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Saldus Rajons',
                'timezone' => 'Europe/Riga',
            ),
            287 => 
            array (
                'id' => 1788,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Talsu Rajons',
                'timezone' => 'Europe/Riga',
            ),
            288 => 
            array (
                'id' => 1789,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Tukuma Rajons',
                'timezone' => 'Europe/Riga',
            ),
            289 => 
            array (
                'id' => 1790,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Valkas Rajons',
                'timezone' => 'Europe/Riga',
            ),
            290 => 
            array (
                'id' => 1791,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Valmieras Rajons',
                'timezone' => 'Europe/Riga',
            ),
            291 => 
            array (
                'id' => 1792,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Ventspils',
                'timezone' => 'Europe/Riga',
            ),
            292 => 
            array (
                'id' => 1793,
                'country_id' => 428,
                'iso' => '',
                'name' => 'Ventspils Rajons',
                'timezone' => 'Europe/Riga',
            ),
            293 => 
            array (
                'id' => 1794,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Bong',
                'timezone' => 'Africa/Monrovia',
            ),
            294 => 
            array (
                'id' => 1795,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Grand Jide',
                'timezone' => 'Africa/Monrovia',
            ),
            295 => 
            array (
                'id' => 1796,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Grand Cape Mount',
                'timezone' => 'Africa/Monrovia',
            ),
            296 => 
            array (
                'id' => 1797,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Lofa',
                'timezone' => 'Africa/Monrovia',
            ),
            297 => 
            array (
                'id' => 1798,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Nimba',
                'timezone' => 'Africa/Monrovia',
            ),
            298 => 
            array (
                'id' => 1799,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Sinoe',
                'timezone' => 'Africa/Monrovia',
            ),
            299 => 
            array (
                'id' => 1800,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Grand Bassa County',
                'timezone' => 'Africa/Monrovia',
            ),
            300 => 
            array (
                'id' => 1801,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Grand Cape Mount',
                'timezone' => 'Africa/Monrovia',
            ),
            301 => 
            array (
                'id' => 1802,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Maryland',
                'timezone' => 'Africa/Monrovia',
            ),
            302 => 
            array (
                'id' => 1803,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Montserrado',
                'timezone' => 'Africa/Monrovia',
            ),
            303 => 
            array (
                'id' => 1804,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Bomi',
                'timezone' => 'Africa/Monrovia',
            ),
            304 => 
            array (
                'id' => 1805,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Grand Kru',
                'timezone' => 'Africa/Monrovia',
            ),
            305 => 
            array (
                'id' => 1806,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Margibi',
                'timezone' => 'Africa/Monrovia',
            ),
            306 => 
            array (
                'id' => 1807,
                'country_id' => 430,
                'iso' => '',
                'name' => 'River Cess',
                'timezone' => 'Africa/Monrovia',
            ),
            307 => 
            array (
                'id' => 1808,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Grand Gedeh',
                'timezone' => 'Africa/Monrovia',
            ),
            308 => 
            array (
                'id' => 1809,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Lofa',
                'timezone' => 'Africa/Monrovia',
            ),
            309 => 
            array (
                'id' => 1810,
                'country_id' => 430,
                'iso' => '',
                'name' => 'Gbarpolu',
                'timezone' => 'Africa/Monrovia',
            ),
            310 => 
            array (
                'id' => 1811,
                'country_id' => 430,
                'iso' => '',
                'name' => 'River Gee',
                'timezone' => 'Africa/Monrovia',
            ),
            311 => 
            array (
                'id' => 1812,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Abyār',
                'timezone' => 'Africa/Tripoli',
            ),
            312 => 
            array (
                'id' => 1813,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al ‘Azīzīyah',
                'timezone' => 'Africa/Tripoli',
            ),
            313 => 
            array (
                'id' => 1814,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Bayḑā’',
                'timezone' => 'Africa/Tripoli',
            ),
            314 => 
            array (
                'id' => 1815,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Jufrah',
                'timezone' => 'Africa/Tripoli',
            ),
            315 => 
            array (
                'id' => 1816,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Jumayl',
                'timezone' => 'Africa/Tripoli',
            ),
            316 => 
            array (
                'id' => 1817,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Kufrah',
                'timezone' => 'Africa/Tripoli',
            ),
            317 => 
            array (
                'id' => 1818,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Marj',
                'timezone' => 'Africa/Tripoli',
            ),
            318 => 
            array (
                'id' => 1819,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Qarābūll',
                'timezone' => 'Africa/Tripoli',
            ),
            319 => 
            array (
                'id' => 1820,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Qubbah',
                'timezone' => 'Africa/Tripoli',
            ),
            320 => 
            array (
                'id' => 1821,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Ajaylāt',
                'timezone' => 'Africa/Tripoli',
            ),
            321 => 
            array (
                'id' => 1822,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Ash Shāţiʼ',
                'timezone' => 'Africa/Tripoli',
            ),
            322 => 
            array (
                'id' => 1823,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Az Zahra’',
                'timezone' => 'Africa/Tripoli',
            ),
            323 => 
            array (
                'id' => 1824,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Banī Walīd',
                'timezone' => 'Africa/Tripoli',
            ),
            324 => 
            array (
                'id' => 1825,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Bin Jawwād',
                'timezone' => 'Africa/Tripoli',
            ),
            325 => 
            array (
                'id' => 1826,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Ghāt',
                'timezone' => 'Africa/Tripoli',
            ),
            326 => 
            array (
                'id' => 1827,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Jādū',
                'timezone' => 'Africa/Tripoli',
            ),
            327 => 
            array (
                'id' => 1828,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Jālū',
                'timezone' => 'Africa/Tripoli',
            ),
            328 => 
            array (
                'id' => 1829,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Janzūr',
                'timezone' => 'Africa/Tripoli',
            ),
            329 => 
            array (
                'id' => 1830,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Masallatah',
                'timezone' => 'Africa/Tripoli',
            ),
            330 => 
            array (
                'id' => 1831,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Mizdah',
                'timezone' => 'Africa/Tripoli',
            ),
            331 => 
            array (
                'id' => 1832,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Murzuq',
                'timezone' => 'Africa/Tripoli',
            ),
            332 => 
            array (
                'id' => 1833,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Nālūt',
                'timezone' => 'Africa/Tripoli',
            ),
            333 => 
            array (
                'id' => 1834,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Qamīnis',
                'timezone' => 'Africa/Tripoli',
            ),
            334 => 
            array (
                'id' => 1835,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Qaşr Bin Ghashīr',
                'timezone' => 'Africa/Tripoli',
            ),
            335 => 
            array (
                'id' => 1836,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Sabhā',
                'timezone' => 'Africa/Tripoli',
            ),
            336 => 
            array (
                'id' => 1837,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Şabrātah',
                'timezone' => 'Africa/Tripoli',
            ),
            337 => 
            array (
                'id' => 1838,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Shaḩḩāt',
                'timezone' => 'Africa/Tripoli',
            ),
            338 => 
            array (
                'id' => 1839,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Şurmān',
                'timezone' => 'Africa/Tripoli',
            ),
            339 => 
            array (
                'id' => 1840,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Tajura’ ',
                'timezone' => 'Africa/Tripoli',
            ),
            340 => 
            array (
                'id' => 1841,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Tarhūnah',
                'timezone' => 'Africa/Tripoli',
            ),
            341 => 
            array (
                'id' => 1842,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Ţubruq',
                'timezone' => 'Africa/Tripoli',
            ),
            342 => 
            array (
                'id' => 1843,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Tūkrah',
                'timezone' => 'Africa/Tripoli',
            ),
            343 => 
            array (
                'id' => 1844,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Zlīţan',
                'timezone' => 'Africa/Tripoli',
            ),
            344 => 
            array (
                'id' => 1845,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Zuwārah',
                'timezone' => 'Africa/Tripoli',
            ),
            345 => 
            array (
                'id' => 1846,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Ajdābiyā',
                'timezone' => 'Africa/Tripoli',
            ),
            346 => 
            array (
                'id' => 1847,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Fātiḩ',
                'timezone' => 'Africa/Tripoli',
            ),
            347 => 
            array (
                'id' => 1848,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Jabal al Akhḑar',
                'timezone' => 'Africa/Tripoli',
            ),
            348 => 
            array (
                'id' => 1849,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Al Khums',
                'timezone' => 'Africa/Tripoli',
            ),
            349 => 
            array (
                'id' => 1850,
                'country_id' => 434,
                'iso' => '',
                'name' => 'An Nuqāţ al Khams',
                'timezone' => 'Africa/Tripoli',
            ),
            350 => 
            array (
                'id' => 1851,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Awbārī',
                'timezone' => 'Africa/Tripoli',
            ),
            351 => 
            array (
                'id' => 1852,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Az Zāwiyah',
                'timezone' => 'Africa/Tripoli',
            ),
            352 => 
            array (
                'id' => 1853,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Banghāzī',
                'timezone' => 'Africa/Tripoli',
            ),
            353 => 
            array (
                'id' => 1854,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Darnah',
                'timezone' => 'Africa/Tripoli',
            ),
            354 => 
            array (
                'id' => 1855,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Ghadāmis',
                'timezone' => 'Africa/Tripoli',
            ),
            355 => 
            array (
                'id' => 1856,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Gharyān',
                'timezone' => 'Africa/Tripoli',
            ),
            356 => 
            array (
                'id' => 1857,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Mişrātah',
                'timezone' => 'Africa/Tripoli',
            ),
            357 => 
            array (
                'id' => 1858,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Sawfajjīn',
                'timezone' => 'Africa/Tripoli',
            ),
            358 => 
            array (
                'id' => 1859,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Surt',
                'timezone' => 'Africa/Tripoli',
            ),
            359 => 
            array (
                'id' => 1860,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Ţarābulus',
                'timezone' => 'Africa/Tripoli',
            ),
            360 => 
            array (
                'id' => 1861,
                'country_id' => 434,
                'iso' => '',
                'name' => 'Yafran',
                'timezone' => 'Africa/Tripoli',
            ),
            361 => 
            array (
                'id' => 1862,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Balzers',
                'timezone' => 'Europe/Vaduz',
            ),
            362 => 
            array (
                'id' => 1863,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Eschen',
                'timezone' => 'Europe/Vaduz',
            ),
            363 => 
            array (
                'id' => 1864,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Gamprin',
                'timezone' => 'Europe/Vaduz',
            ),
            364 => 
            array (
                'id' => 1865,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Mauren',
                'timezone' => 'Europe/Vaduz',
            ),
            365 => 
            array (
                'id' => 1866,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Planken',
                'timezone' => 'Europe/Vaduz',
            ),
            366 => 
            array (
                'id' => 1867,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Ruggell',
                'timezone' => 'Europe/Vaduz',
            ),
            367 => 
            array (
                'id' => 1868,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Schaan',
                'timezone' => 'Europe/Vaduz',
            ),
            368 => 
            array (
                'id' => 1869,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Schellenberg',
                'timezone' => 'Europe/Vaduz',
            ),
            369 => 
            array (
                'id' => 1870,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Triesen',
                'timezone' => 'Europe/Vaduz',
            ),
            370 => 
            array (
                'id' => 1871,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Triesenberg',
                'timezone' => 'Europe/Vaduz',
            ),
            371 => 
            array (
                'id' => 1872,
                'country_id' => 438,
                'iso' => '',
                'name' => 'Vaduz',
                'timezone' => 'Europe/Vaduz',
            ),
            372 => 
            array (
                'id' => 1873,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Alytaus Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            373 => 
            array (
                'id' => 1874,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Kauno Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            374 => 
            array (
                'id' => 1875,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Klaipėdos Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            375 => 
            array (
                'id' => 1876,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Marijampolės Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            376 => 
            array (
                'id' => 1877,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Panevėžio Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            377 => 
            array (
                'id' => 1878,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Šiaulių Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            378 => 
            array (
                'id' => 1879,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Tauragės Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            379 => 
            array (
                'id' => 1880,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Telšių Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            380 => 
            array (
                'id' => 1881,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Utenos Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            381 => 
            array (
                'id' => 1882,
                'country_id' => 440,
                'iso' => '',
                'name' => 'Vilniaus Apskritis',
                'timezone' => 'Europe/Vilnius',
            ),
            382 => 
            array (
                'id' => 1883,
                'country_id' => 442,
                'iso' => '',
                'name' => 'Diekirch',
                'timezone' => 'Europe/Luxembourg',
            ),
            383 => 
            array (
                'id' => 1884,
                'country_id' => 442,
                'iso' => '',
                'name' => 'Grevenmacher',
                'timezone' => 'Europe/Luxembourg',
            ),
            384 => 
            array (
                'id' => 1885,
                'country_id' => 442,
                'iso' => '',
                'name' => 'Luxembourg',
                'timezone' => 'Europe/Luxembourg',
            ),
            385 => 
            array (
                'id' => 1886,
                'country_id' => 446,
                'iso' => '',
                'name' => 'Ilhas',
                'timezone' => 'Asia/Macau',
            ),
            386 => 
            array (
                'id' => 1887,
                'country_id' => 446,
                'iso' => '',
                'name' => 'Macau',
                'timezone' => 'Asia/Macau',
            ),
            387 => 
            array (
                'id' => 1888,
                'country_id' => 450,
                'iso' => '',
                'name' => 'Antsiranana',
                'timezone' => 'Indian/Antananarivo',
            ),
            388 => 
            array (
                'id' => 1889,
                'country_id' => 450,
                'iso' => '',
                'name' => 'Fianarantsoa',
                'timezone' => 'Indian/Antananarivo',
            ),
            389 => 
            array (
                'id' => 1890,
                'country_id' => 450,
                'iso' => '',
                'name' => 'Mahajanga',
                'timezone' => 'Indian/Antananarivo',
            ),
            390 => 
            array (
                'id' => 1891,
                'country_id' => 450,
                'iso' => '',
                'name' => 'Toamasina',
                'timezone' => 'Indian/Antananarivo',
            ),
            391 => 
            array (
                'id' => 1892,
                'country_id' => 450,
                'iso' => '',
                'name' => 'Antananarivo',
                'timezone' => 'Indian/Antananarivo',
            ),
            392 => 
            array (
                'id' => 1893,
                'country_id' => 450,
                'iso' => '',
                'name' => 'Toliara',
                'timezone' => 'Indian/Antananarivo',
            ),
            393 => 
            array (
                'id' => 1894,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Chikwawa',
                'timezone' => 'Africa/Blantyre',
            ),
            394 => 
            array (
                'id' => 1895,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Chiradzulu',
                'timezone' => 'Africa/Blantyre',
            ),
            395 => 
            array (
                'id' => 1896,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Chitipa',
                'timezone' => 'Africa/Blantyre',
            ),
            396 => 
            array (
                'id' => 1897,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Thyolo',
                'timezone' => 'Africa/Blantyre',
            ),
            397 => 
            array (
                'id' => 1898,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Dedza',
                'timezone' => 'Africa/Blantyre',
            ),
            398 => 
            array (
                'id' => 1899,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Dowa',
                'timezone' => 'Africa/Blantyre',
            ),
            399 => 
            array (
                'id' => 1900,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Karonga',
                'timezone' => 'Africa/Blantyre',
            ),
            400 => 
            array (
                'id' => 1901,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Kasungu',
                'timezone' => 'Africa/Blantyre',
            ),
            401 => 
            array (
                'id' => 1902,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Lilongwe',
                'timezone' => 'Africa/Blantyre',
            ),
            402 => 
            array (
                'id' => 1903,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Mangochi',
                'timezone' => 'Africa/Blantyre',
            ),
            403 => 
            array (
                'id' => 1904,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Mchinji',
                'timezone' => 'Africa/Blantyre',
            ),
            404 => 
            array (
                'id' => 1905,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Mzimba',
                'timezone' => 'Africa/Blantyre',
            ),
            405 => 
            array (
                'id' => 1906,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Ntcheu',
                'timezone' => 'Africa/Blantyre',
            ),
            406 => 
            array (
                'id' => 1907,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Nkhata Bay',
                'timezone' => 'Africa/Blantyre',
            ),
            407 => 
            array (
                'id' => 1908,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Nkhotakota',
                'timezone' => 'Africa/Blantyre',
            ),
            408 => 
            array (
                'id' => 1909,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Nsanje',
                'timezone' => 'Africa/Blantyre',
            ),
            409 => 
            array (
                'id' => 1910,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Ntchisi',
                'timezone' => 'Africa/Blantyre',
            ),
            410 => 
            array (
                'id' => 1911,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Rumphi',
                'timezone' => 'Africa/Blantyre',
            ),
            411 => 
            array (
                'id' => 1912,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Salima',
                'timezone' => 'Africa/Blantyre',
            ),
            412 => 
            array (
                'id' => 1913,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Zomba',
                'timezone' => 'Africa/Blantyre',
            ),
            413 => 
            array (
                'id' => 1914,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Blantyre',
                'timezone' => 'Africa/Blantyre',
            ),
            414 => 
            array (
                'id' => 1915,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Mwanza',
                'timezone' => 'Africa/Blantyre',
            ),
            415 => 
            array (
                'id' => 1916,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Balaka',
                'timezone' => 'Africa/Blantyre',
            ),
            416 => 
            array (
                'id' => 1917,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Likoma',
                'timezone' => 'Africa/Blantyre',
            ),
            417 => 
            array (
                'id' => 1918,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Machinga',
                'timezone' => 'Africa/Blantyre',
            ),
            418 => 
            array (
                'id' => 1919,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Mulanje',
                'timezone' => 'Africa/Blantyre',
            ),
            419 => 
            array (
                'id' => 1920,
                'country_id' => 454,
                'iso' => '',
                'name' => 'Phalombe',
                'timezone' => 'Africa/Blantyre',
            ),
            420 => 
            array (
                'id' => 1921,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Johor',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            421 => 
            array (
                'id' => 1922,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Kedah',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            422 => 
            array (
                'id' => 1923,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Kelantan',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            423 => 
            array (
                'id' => 1924,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Melaka',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            424 => 
            array (
                'id' => 1925,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Negeri Sembilan',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            425 => 
            array (
                'id' => 1926,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Pahang',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            426 => 
            array (
                'id' => 1927,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Perak',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            427 => 
            array (
                'id' => 1928,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Perlis',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            428 => 
            array (
                'id' => 1929,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Pulau Pinang',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            429 => 
            array (
                'id' => 1930,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Sarawak',
                'timezone' => 'Asia/Kuching',
            ),
            430 => 
            array (
                'id' => 1931,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Selangor',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            431 => 
            array (
                'id' => 1932,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Terengganu',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            432 => 
            array (
                'id' => 1933,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Kuala Lumpur',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            433 => 
            array (
                'id' => 1934,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Federal Territory of Labuan',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            434 => 
            array (
                'id' => 1935,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Sabah',
                'timezone' => 'Asia/Kuching',
            ),
            435 => 
            array (
                'id' => 1936,
                'country_id' => 458,
                'iso' => '',
                'name' => 'Putrajaya',
                'timezone' => 'Asia/Kuala_Lumpur',
            ),
            436 => 
            array (
                'id' => 1937,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Maale',
                'timezone' => 'Indian/Maldives',
            ),
            437 => 
            array (
                'id' => 1938,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Seenu',
                'timezone' => 'Indian/Maldives',
            ),
            438 => 
            array (
                'id' => 1939,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Alifu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            439 => 
            array (
                'id' => 1940,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Lhaviyani Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            440 => 
            array (
                'id' => 1941,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Vaavu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            441 => 
            array (
                'id' => 1942,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Laamu',
                'timezone' => 'Indian/Maldives',
            ),
            442 => 
            array (
                'id' => 1943,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Haa Alifu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            443 => 
            array (
                'id' => 1944,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Thaa Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            444 => 
            array (
                'id' => 1945,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Meemu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            445 => 
            array (
                'id' => 1946,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Raa Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            446 => 
            array (
                'id' => 1947,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Faafu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            447 => 
            array (
                'id' => 1948,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Dhaalu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            448 => 
            array (
                'id' => 1949,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Baa Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            449 => 
            array (
                'id' => 1950,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Haa Dhaalu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            450 => 
            array (
                'id' => 1951,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Shaviyani Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            451 => 
            array (
                'id' => 1952,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Noonu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            452 => 
            array (
                'id' => 1953,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Kaafu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            453 => 
            array (
                'id' => 1954,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Gaafu Alifu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            454 => 
            array (
                'id' => 1955,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Gaafu Dhaalu Atholhu',
                'timezone' => 'Indian/Maldives',
            ),
            455 => 
            array (
                'id' => 1956,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Gnyaviyani Atoll',
                'timezone' => 'Indian/Maldives',
            ),
            456 => 
            array (
                'id' => 1957,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Alifu',
                'timezone' => 'Indian/Maldives',
            ),
            457 => 
            array (
                'id' => 1958,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Baa',
                'timezone' => 'Indian/Maldives',
            ),
            458 => 
            array (
                'id' => 1959,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Dhaalu',
                'timezone' => 'Indian/Maldives',
            ),
            459 => 
            array (
                'id' => 1960,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Faafu',
                'timezone' => 'Indian/Maldives',
            ),
            460 => 
            array (
                'id' => 1961,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Gaafu Alifu',
                'timezone' => 'Indian/Maldives',
            ),
            461 => 
            array (
                'id' => 1962,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Gaafu Dhaalu',
                'timezone' => 'Indian/Maldives',
            ),
            462 => 
            array (
                'id' => 1963,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Haa Alifu',
                'timezone' => 'Indian/Maldives',
            ),
            463 => 
            array (
                'id' => 1964,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Haa Dhaalu',
                'timezone' => 'Indian/Maldives',
            ),
            464 => 
            array (
                'id' => 1965,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Kaafu',
                'timezone' => 'Indian/Maldives',
            ),
            465 => 
            array (
                'id' => 1966,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Lhaviyani',
                'timezone' => 'Indian/Maldives',
            ),
            466 => 
            array (
                'id' => 1967,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Maale',
                'timezone' => 'Indian/Maldives',
            ),
            467 => 
            array (
                'id' => 1968,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Meemu',
                'timezone' => 'Indian/Maldives',
            ),
            468 => 
            array (
                'id' => 1969,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Gnaviyani',
                'timezone' => 'Indian/Maldives',
            ),
            469 => 
            array (
                'id' => 1970,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Noonu',
                'timezone' => 'Indian/Maldives',
            ),
            470 => 
            array (
                'id' => 1971,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Raa',
                'timezone' => 'Indian/Maldives',
            ),
            471 => 
            array (
                'id' => 1972,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Shaviyani',
                'timezone' => 'Indian/Maldives',
            ),
            472 => 
            array (
                'id' => 1973,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Thaa',
                'timezone' => 'Indian/Maldives',
            ),
            473 => 
            array (
                'id' => 1974,
                'country_id' => 462,
                'iso' => '',
                'name' => 'Vaavu',
                'timezone' => 'Indian/Maldives',
            ),
            474 => 
            array (
                'id' => 1975,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Bamako',
                'timezone' => 'Africa/Bamako',
            ),
            475 => 
            array (
                'id' => 1976,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Gao',
                'timezone' => 'Africa/Bamako',
            ),
            476 => 
            array (
                'id' => 1977,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Kayes',
                'timezone' => 'Africa/Bamako',
            ),
            477 => 
            array (
                'id' => 1978,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Mopti',
                'timezone' => 'Africa/Bamako',
            ),
            478 => 
            array (
                'id' => 1979,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Ségou',
                'timezone' => 'Africa/Bamako',
            ),
            479 => 
            array (
                'id' => 1980,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Sikasso',
                'timezone' => 'Africa/Bamako',
            ),
            480 => 
            array (
                'id' => 1981,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Koulikoro',
                'timezone' => 'Africa/Bamako',
            ),
            481 => 
            array (
                'id' => 1982,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Tombouctou',
                'timezone' => 'Africa/Bamako',
            ),
            482 => 
            array (
                'id' => 1983,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Gao',
                'timezone' => 'Africa/Bamako',
            ),
            483 => 
            array (
                'id' => 1984,
                'country_id' => 466,
                'iso' => '',
                'name' => 'Kidal',
                'timezone' => 'Africa/Bamako',
            ),
            484 => 
            array (
                'id' => 1985,
                'country_id' => 470,
                'iso' => '',
                'name' => 'Malta',
                'timezone' => 'Europe/Malta',
            ),
            485 => 
            array (
                'id' => 1986,
                'country_id' => 474,
                'iso' => '',
                'name' => 'Martinique',
                'timezone' => 'America/Martinique',
            ),
            486 => 
            array (
                'id' => 1987,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Nouakchott',
                'timezone' => 'Africa/Nouakchott',
            ),
            487 => 
            array (
                'id' => 1988,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Hodh Ech Chargui',
                'timezone' => 'Africa/Nouakchott',
            ),
            488 => 
            array (
                'id' => 1989,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Hodh El Gharbi',
                'timezone' => 'Africa/Nouakchott',
            ),
            489 => 
            array (
                'id' => 1990,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Assaba',
                'timezone' => 'Africa/Nouakchott',
            ),
            490 => 
            array (
                'id' => 1991,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Gorgol',
                'timezone' => 'Africa/Nouakchott',
            ),
            491 => 
            array (
                'id' => 1992,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Brakna',
                'timezone' => 'Africa/Nouakchott',
            ),
            492 => 
            array (
                'id' => 1993,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Trarza',
                'timezone' => 'Africa/Nouakchott',
            ),
            493 => 
            array (
                'id' => 1994,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Adrar',
                'timezone' => 'Africa/Nouakchott',
            ),
            494 => 
            array (
                'id' => 1995,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Dakhlet Nouadhibou',
                'timezone' => 'Africa/Nouakchott',
            ),
            495 => 
            array (
                'id' => 1996,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Tagant',
                'timezone' => 'Africa/Nouakchott',
            ),
            496 => 
            array (
                'id' => 1997,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Guidimaka',
                'timezone' => 'Africa/Nouakchott',
            ),
            497 => 
            array (
                'id' => 1998,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Tiris Zemmour',
                'timezone' => 'Africa/Nouakchott',
            ),
            498 => 
            array (
                'id' => 1999,
                'country_id' => 478,
                'iso' => '',
                'name' => 'Inchiri',
                'timezone' => 'Africa/Nouakchott',
            ),
            499 => 
            array (
                'id' => 2000,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Black River',
                'timezone' => 'Indian/Mauritius',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Flacq',
                'timezone' => 'Indian/Mauritius',
            ),
            1 => 
            array (
                'id' => 2002,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Grand Port',
                'timezone' => 'Indian/Mauritius',
            ),
            2 => 
            array (
                'id' => 2003,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Moka',
                'timezone' => 'Indian/Mauritius',
            ),
            3 => 
            array (
                'id' => 2004,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Pamplemousses',
                'timezone' => 'Indian/Mauritius',
            ),
            4 => 
            array (
                'id' => 2005,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Plaines Wilhems',
                'timezone' => 'Indian/Mauritius',
            ),
            5 => 
            array (
                'id' => 2006,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Port Louis',
                'timezone' => 'Indian/Mauritius',
            ),
            6 => 
            array (
                'id' => 2007,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Rivière du Rempart',
                'timezone' => 'Indian/Mauritius',
            ),
            7 => 
            array (
                'id' => 2008,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Savanne',
                'timezone' => 'Indian/Mauritius',
            ),
            8 => 
            array (
                'id' => 2009,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Agalega Islands',
                'timezone' => 'Indian/Mauritius',
            ),
            9 => 
            array (
                'id' => 2010,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Cargados Carajos',
                'timezone' => 'Indian/Mauritius',
            ),
            10 => 
            array (
                'id' => 2011,
                'country_id' => 480,
                'iso' => '',
                'name' => 'Rodrigues',
                'timezone' => 'Indian/Mauritius',
            ),
            11 => 
            array (
                'id' => 2012,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Aguascalientes',
                'timezone' => 'America/Mexico_City',
            ),
            12 => 
            array (
                'id' => 2013,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Baja California',
                'timezone' => 'America/Tijuana',
            ),
            13 => 
            array (
                'id' => 2014,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Baja California Sur',
                'timezone' => 'America/Mazatlan',
            ),
            14 => 
            array (
                'id' => 2015,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Campeche',
                'timezone' => 'America/Merida',
            ),
            15 => 
            array (
                'id' => 2016,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Chiapas',
                'timezone' => 'America/Mexico_City',
            ),
            16 => 
            array (
                'id' => 2017,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Chihuahua',
                'timezone' => 'America/Chihuahua',
            ),
            17 => 
            array (
                'id' => 2018,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Coahuila',
                'timezone' => 'America/Monterrey',
            ),
            18 => 
            array (
                'id' => 2019,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Colima',
                'timezone' => 'America/Mexico_City',
            ),
            19 => 
            array (
                'id' => 2020,
                'country_id' => 484,
                'iso' => '',
                'name' => 'The Federal District',
                'timezone' => 'America/Mexico_City',
            ),
            20 => 
            array (
                'id' => 2021,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Durango',
                'timezone' => 'America/Monterrey',
            ),
            21 => 
            array (
                'id' => 2022,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Guanajuato',
                'timezone' => 'America/Mexico_City',
            ),
            22 => 
            array (
                'id' => 2023,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Guerrero',
                'timezone' => 'America/Mexico_City',
            ),
            23 => 
            array (
                'id' => 2024,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Hidalgo',
                'timezone' => 'America/Mexico_City',
            ),
            24 => 
            array (
                'id' => 2025,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Jalisco',
                'timezone' => 'America/Mexico_City',
            ),
            25 => 
            array (
                'id' => 2026,
                'country_id' => 484,
                'iso' => '',
                'name' => 'México',
                'timezone' => 'America/Mexico_City',
            ),
            26 => 
            array (
                'id' => 2027,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Michoacán',
                'timezone' => 'America/Mexico_City',
            ),
            27 => 
            array (
                'id' => 2028,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Morelos',
                'timezone' => 'America/Mexico_City',
            ),
            28 => 
            array (
                'id' => 2029,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Nayarit',
                'timezone' => 'America/Mazatlan',
            ),
            29 => 
            array (
                'id' => 2030,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Nuevo León',
                'timezone' => 'America/Monterrey',
            ),
            30 => 
            array (
                'id' => 2031,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Oaxaca',
                'timezone' => 'America/Mexico_City',
            ),
            31 => 
            array (
                'id' => 2032,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Puebla',
                'timezone' => 'America/Mexico_City',
            ),
            32 => 
            array (
                'id' => 2033,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Querétaro',
                'timezone' => 'America/Mexico_City',
            ),
            33 => 
            array (
                'id' => 2034,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Quintana Roo',
                'timezone' => 'America/Cancun',
            ),
            34 => 
            array (
                'id' => 2035,
                'country_id' => 484,
                'iso' => '',
                'name' => 'San Luis Potosí',
                'timezone' => 'America/Mexico_City',
            ),
            35 => 
            array (
                'id' => 2036,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Sinaloa',
                'timezone' => 'America/Mazatlan',
            ),
            36 => 
            array (
                'id' => 2037,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Sonora',
                'timezone' => 'America/Hermosillo',
            ),
            37 => 
            array (
                'id' => 2038,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Tabasco',
                'timezone' => 'America/Mexico_City',
            ),
            38 => 
            array (
                'id' => 2039,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Tamaulipas',
                'timezone' => 'America/Monterrey',
            ),
            39 => 
            array (
                'id' => 2040,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Tlaxcala',
                'timezone' => 'America/Mexico_City',
            ),
            40 => 
            array (
                'id' => 2041,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Veracruz-Llave',
                'timezone' => 'America/Mexico_City',
            ),
            41 => 
            array (
                'id' => 2042,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Yucatán',
                'timezone' => 'America/Merida',
            ),
            42 => 
            array (
                'id' => 2043,
                'country_id' => 484,
                'iso' => '',
                'name' => 'Zacatecas',
                'timezone' => 'America/Mexico_City',
            ),
            43 => 
            array (
                'id' => 2044,
                'country_id' => 492,
                'iso' => '',
                'name' => 'Monaco',
                'timezone' => 'Europe/Monaco',
            ),
            44 => 
            array (
                'id' => 2045,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Arhangay',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            45 => 
            array (
                'id' => 2046,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Bayanhongor',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            46 => 
            array (
                'id' => 2047,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Bayan-Ölgiy',
                'timezone' => 'Asia/Hovd',
            ),
            47 => 
            array (
                'id' => 2048,
                'country_id' => 496,
                'iso' => '',
                'name' => 'East Aimak',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            48 => 
            array (
                'id' => 2049,
                'country_id' => 496,
                'iso' => '',
                'name' => 'East Gobi Aymag',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            49 => 
            array (
                'id' => 2050,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Middle Govĭ',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            50 => 
            array (
                'id' => 2051,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Dzavhan',
                'timezone' => 'Asia/Hovd',
            ),
            51 => 
            array (
                'id' => 2052,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Govĭ-Altay',
                'timezone' => 'Asia/Hovd',
            ),
            52 => 
            array (
                'id' => 2053,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Hentiy',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            53 => 
            array (
                'id' => 2054,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Hovd',
                'timezone' => 'Asia/Hovd',
            ),
            54 => 
            array (
                'id' => 2055,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Hövsgöl',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            55 => 
            array (
                'id' => 2056,
                'country_id' => 496,
                'iso' => '',
                'name' => 'South Gobi Aimak',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            56 => 
            array (
                'id' => 2057,
                'country_id' => 496,
                'iso' => '',
                'name' => 'South Hangay',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            57 => 
            array (
                'id' => 2058,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Selenge',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            58 => 
            array (
                'id' => 2059,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Sühbaatar',
                'timezone' => 'Asia/Choibalsan',
            ),
            59 => 
            array (
                'id' => 2060,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Central Aimak',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            60 => 
            array (
                'id' => 2061,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Uvs',
                'timezone' => 'Asia/Hovd',
            ),
            61 => 
            array (
                'id' => 2062,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Ulaanbaatar',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            62 => 
            array (
                'id' => 2063,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Bulgan',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            63 => 
            array (
                'id' => 2064,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Darhan Uul',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            64 => 
            array (
                'id' => 2065,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Govĭ-Sumber',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            65 => 
            array (
                'id' => 2066,
                'country_id' => 496,
                'iso' => '',
                'name' => 'Orhon',
                'timezone' => 'Asia/Ulaanbaatar',
            ),
            66 => 
            array (
                'id' => 2067,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Ungheni Judetul',
                'timezone' => 'Europe/Chisinau',
            ),
            67 => 
            array (
                'id' => 2068,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Balti',
                'timezone' => 'Europe/Chisinau',
            ),
            68 => 
            array (
                'id' => 2069,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Cahul',
                'timezone' => 'Europe/Chisinau',
            ),
            69 => 
            array (
                'id' => 2070,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Stinga Nistrului',
                'timezone' => 'Europe/Chisinau',
            ),
            70 => 
            array (
                'id' => 2071,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Edinet',
                'timezone' => 'Europe/Chisinau',
            ),
            71 => 
            array (
                'id' => 2072,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Găgăuzia',
                'timezone' => 'Europe/Chisinau',
            ),
            72 => 
            array (
                'id' => 2073,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Lapusna',
                'timezone' => 'Europe/Chisinau',
            ),
            73 => 
            array (
                'id' => 2074,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Orhei',
                'timezone' => 'Europe/Chisinau',
            ),
            74 => 
            array (
                'id' => 2075,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Soroca',
                'timezone' => 'Europe/Chisinau',
            ),
            75 => 
            array (
                'id' => 2076,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Tighina',
                'timezone' => 'Europe/Chisinau',
            ),
            76 => 
            array (
                'id' => 2077,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Ungheni',
                'timezone' => 'Europe/Chisinau',
            ),
            77 => 
            array (
                'id' => 2078,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Chişinău',
                'timezone' => 'Europe/Chisinau',
            ),
            78 => 
            array (
                'id' => 2079,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Stînga Nistrului',
                'timezone' => 'Europe/Chisinau',
            ),
            79 => 
            array (
                'id' => 2080,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Anenii Noi',
                'timezone' => 'Europe/Chisinau',
            ),
            80 => 
            array (
                'id' => 2081,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Bălţi',
                'timezone' => 'Europe/Chisinau',
            ),
            81 => 
            array (
                'id' => 2082,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Basarabeasca',
                'timezone' => 'Europe/Chisinau',
            ),
            82 => 
            array (
                'id' => 2083,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Bender',
                'timezone' => 'Europe/Chisinau',
            ),
            83 => 
            array (
                'id' => 2084,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Briceni',
                'timezone' => 'Europe/Chisinau',
            ),
            84 => 
            array (
                'id' => 2085,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Cahul',
                'timezone' => 'Europe/Chisinau',
            ),
            85 => 
            array (
                'id' => 2086,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Cantemir',
                'timezone' => 'Europe/Chisinau',
            ),
            86 => 
            array (
                'id' => 2087,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Călăraşi',
                'timezone' => 'Europe/Chisinau',
            ),
            87 => 
            array (
                'id' => 2088,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Căuşeni',
                'timezone' => 'Europe/Chisinau',
            ),
            88 => 
            array (
                'id' => 2089,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Cimişlia',
                'timezone' => 'Europe/Chisinau',
            ),
            89 => 
            array (
                'id' => 2090,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Criuleni',
                'timezone' => 'Europe/Chisinau',
            ),
            90 => 
            array (
                'id' => 2091,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Donduşeni',
                'timezone' => 'Europe/Chisinau',
            ),
            91 => 
            array (
                'id' => 2092,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Drochia',
                'timezone' => 'Europe/Chisinau',
            ),
            92 => 
            array (
                'id' => 2093,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Dubăsari',
                'timezone' => 'Europe/Chisinau',
            ),
            93 => 
            array (
                'id' => 2094,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Edineţ',
                'timezone' => 'Europe/Chisinau',
            ),
            94 => 
            array (
                'id' => 2095,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Făleşti',
                'timezone' => 'Europe/Chisinau',
            ),
            95 => 
            array (
                'id' => 2096,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Floreşti',
                'timezone' => 'Europe/Chisinau',
            ),
            96 => 
            array (
                'id' => 2097,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Glodeni',
                'timezone' => 'Europe/Chisinau',
            ),
            97 => 
            array (
                'id' => 2098,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Hînceşti',
                'timezone' => 'Europe/Chisinau',
            ),
            98 => 
            array (
                'id' => 2099,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Ialoveni',
                'timezone' => 'Europe/Chisinau',
            ),
            99 => 
            array (
                'id' => 2100,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Leova',
                'timezone' => 'Europe/Chisinau',
            ),
            100 => 
            array (
                'id' => 2101,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Nisporeni',
                'timezone' => 'Europe/Chisinau',
            ),
            101 => 
            array (
                'id' => 2102,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Ocniţa',
                'timezone' => 'Europe/Chisinau',
            ),
            102 => 
            array (
                'id' => 2103,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Orhei',
                'timezone' => 'Europe/Chisinau',
            ),
            103 => 
            array (
                'id' => 2104,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Rezina',
                'timezone' => 'Europe/Chisinau',
            ),
            104 => 
            array (
                'id' => 2105,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Rîşcani',
                'timezone' => 'Europe/Chisinau',
            ),
            105 => 
            array (
                'id' => 2106,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Sîngerei',
                'timezone' => 'Europe/Chisinau',
            ),
            106 => 
            array (
                'id' => 2107,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Şoldăneşti',
                'timezone' => 'Europe/Chisinau',
            ),
            107 => 
            array (
                'id' => 2108,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Soroca',
                'timezone' => 'Europe/Chisinau',
            ),
            108 => 
            array (
                'id' => 2109,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Ştefan-Vodă',
                'timezone' => 'Europe/Chisinau',
            ),
            109 => 
            array (
                'id' => 2110,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Străşeni',
                'timezone' => 'Europe/Chisinau',
            ),
            110 => 
            array (
                'id' => 2111,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Taraclia',
                'timezone' => 'Europe/Chisinau',
            ),
            111 => 
            array (
                'id' => 2112,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Teleneşti',
                'timezone' => 'Europe/Chisinau',
            ),
            112 => 
            array (
                'id' => 2113,
                'country_id' => 498,
                'iso' => '',
                'name' => 'Raionul Ungheni',
                'timezone' => 'Europe/Chisinau',
            ),
            113 => 
            array (
                'id' => 2114,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Andrijevica',
                'timezone' => 'Europe/Podgorica',
            ),
            114 => 
            array (
                'id' => 2115,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Bar',
                'timezone' => 'Europe/Podgorica',
            ),
            115 => 
            array (
                'id' => 2116,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Berane',
                'timezone' => 'Europe/Podgorica',
            ),
            116 => 
            array (
                'id' => 2117,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Bijelo Polje',
                'timezone' => 'Europe/Podgorica',
            ),
            117 => 
            array (
                'id' => 2118,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Budva',
                'timezone' => 'Europe/Podgorica',
            ),
            118 => 
            array (
                'id' => 2119,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Cetinje',
                'timezone' => 'Europe/Podgorica',
            ),
            119 => 
            array (
                'id' => 2120,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Danilovgrad',
                'timezone' => 'Europe/Podgorica',
            ),
            120 => 
            array (
                'id' => 2121,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Herceg Novi',
                'timezone' => 'Europe/Podgorica',
            ),
            121 => 
            array (
                'id' => 2122,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Kolašin',
                'timezone' => 'Europe/Podgorica',
            ),
            122 => 
            array (
                'id' => 2123,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Kotor',
                'timezone' => 'Europe/Podgorica',
            ),
            123 => 
            array (
                'id' => 2124,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Mojkovac',
                'timezone' => 'Europe/Podgorica',
            ),
            124 => 
            array (
                'id' => 2125,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Nikšić',
                'timezone' => 'Europe/Podgorica',
            ),
            125 => 
            array (
                'id' => 2126,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Plav',
                'timezone' => 'Europe/Podgorica',
            ),
            126 => 
            array (
                'id' => 2127,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Pljevlja',
                'timezone' => 'Europe/Podgorica',
            ),
            127 => 
            array (
                'id' => 2128,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Plužine',
                'timezone' => 'Europe/Podgorica',
            ),
            128 => 
            array (
                'id' => 2129,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Podgorica',
                'timezone' => 'Europe/Podgorica',
            ),
            129 => 
            array (
                'id' => 2130,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Rožaje',
                'timezone' => 'Europe/Podgorica',
            ),
            130 => 
            array (
                'id' => 2131,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Šavnik',
                'timezone' => 'Europe/Podgorica',
            ),
            131 => 
            array (
                'id' => 2132,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Tivat',
                'timezone' => 'Europe/Podgorica',
            ),
            132 => 
            array (
                'id' => 2133,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Ulcinj',
                'timezone' => 'Europe/Podgorica',
            ),
            133 => 
            array (
                'id' => 2134,
                'country_id' => 499,
                'iso' => '',
                'name' => 'Opština Žabljak',
                'timezone' => 'Europe/Podgorica',
            ),
            134 => 
            array (
                'id' => 2135,
                'country_id' => 500,
                'iso' => '',
                'name' => 'Saint Anthony',
                'timezone' => 'America/Montserrat',
            ),
            135 => 
            array (
                'id' => 2136,
                'country_id' => 500,
                'iso' => '',
                'name' => 'Saint Georges',
                'timezone' => 'America/Montserrat',
            ),
            136 => 
            array (
                'id' => 2137,
                'country_id' => 500,
                'iso' => '',
                'name' => 'Saint Peter',
                'timezone' => 'America/Montserrat',
            ),
            137 => 
            array (
                'id' => 2138,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Agadir',
                'timezone' => 'Africa/Casablanca',
            ),
            138 => 
            array (
                'id' => 2139,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Al Hoceïma',
                'timezone' => 'Africa/Casablanca',
            ),
            139 => 
            array (
                'id' => 2140,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Azizal',
                'timezone' => 'Africa/Casablanca',
            ),
            140 => 
            array (
                'id' => 2141,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Ben Slimane',
                'timezone' => 'Africa/Casablanca',
            ),
            141 => 
            array (
                'id' => 2142,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Beni Mellal',
                'timezone' => 'Africa/Casablanca',
            ),
            142 => 
            array (
                'id' => 2143,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Boulemane',
                'timezone' => 'Africa/Casablanca',
            ),
            143 => 
            array (
                'id' => 2144,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Casablanca',
                'timezone' => 'Africa/Casablanca',
            ),
            144 => 
            array (
                'id' => 2145,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Chaouen',
                'timezone' => 'Africa/Casablanca',
            ),
            145 => 
            array (
                'id' => 2146,
                'country_id' => 504,
                'iso' => '',
                'name' => 'El Jadida',
                'timezone' => 'Africa/Casablanca',
            ),
            146 => 
            array (
                'id' => 2147,
                'country_id' => 504,
                'iso' => '',
                'name' => 'El Kelaa des Srarhna',
                'timezone' => 'Africa/Casablanca',
            ),
            147 => 
            array (
                'id' => 2148,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Er Rachidia',
                'timezone' => 'Africa/Casablanca',
            ),
            148 => 
            array (
                'id' => 2149,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Essaouira',
                'timezone' => 'Africa/Casablanca',
            ),
            149 => 
            array (
                'id' => 2150,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Fes',
                'timezone' => 'Africa/Casablanca',
            ),
            150 => 
            array (
                'id' => 2151,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Figuig',
                'timezone' => 'Africa/Casablanca',
            ),
            151 => 
            array (
                'id' => 2152,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Kenitra',
                'timezone' => 'Africa/Casablanca',
            ),
            152 => 
            array (
                'id' => 2153,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Khemisset',
                'timezone' => 'Africa/Casablanca',
            ),
            153 => 
            array (
                'id' => 2154,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Khenifra',
                'timezone' => 'Africa/Casablanca',
            ),
            154 => 
            array (
                'id' => 2155,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Khouribga',
                'timezone' => 'Africa/Casablanca',
            ),
            155 => 
            array (
                'id' => 2156,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Marrakech',
                'timezone' => 'Africa/Casablanca',
            ),
            156 => 
            array (
                'id' => 2157,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Meknes',
                'timezone' => 'Africa/Casablanca',
            ),
            157 => 
            array (
                'id' => 2158,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Nador',
                'timezone' => 'Africa/Casablanca',
            ),
            158 => 
            array (
                'id' => 2159,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Ouarzazate',
                'timezone' => 'Africa/Casablanca',
            ),
            159 => 
            array (
                'id' => 2160,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Oujda',
                'timezone' => 'Africa/Casablanca',
            ),
            160 => 
            array (
                'id' => 2161,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Rabat-Sale',
                'timezone' => 'Africa/Casablanca',
            ),
            161 => 
            array (
                'id' => 2162,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Safi',
                'timezone' => 'Africa/Casablanca',
            ),
            162 => 
            array (
                'id' => 2163,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Settat',
                'timezone' => 'Africa/Casablanca',
            ),
            163 => 
            array (
                'id' => 2164,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tanger',
                'timezone' => 'Africa/Casablanca',
            ),
            164 => 
            array (
                'id' => 2165,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tata',
                'timezone' => 'Africa/Casablanca',
            ),
            165 => 
            array (
                'id' => 2166,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Taza',
                'timezone' => 'Africa/Casablanca',
            ),
            166 => 
            array (
                'id' => 2167,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tiznit',
                'timezone' => 'Africa/Casablanca',
            ),
            167 => 
            array (
                'id' => 2168,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Guelmim',
                'timezone' => 'Africa/Casablanca',
            ),
            168 => 
            array (
                'id' => 2169,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Ifrane',
                'timezone' => 'Africa/Casablanca',
            ),
            169 => 
            array (
                'id' => 2170,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Laayoune',
                'timezone' => 'Africa/Casablanca',
            ),
            170 => 
            array (
                'id' => 2171,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tan-Tan',
                'timezone' => 'Africa/Casablanca',
            ),
            171 => 
            array (
                'id' => 2172,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Taounate',
                'timezone' => 'Africa/Casablanca',
            ),
            172 => 
            array (
                'id' => 2173,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Sidi Kacem',
                'timezone' => 'Africa/Casablanca',
            ),
            173 => 
            array (
                'id' => 2174,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Taroudannt',
                'timezone' => 'Africa/Casablanca',
            ),
            174 => 
            array (
                'id' => 2175,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tetouan',
                'timezone' => 'Africa/Casablanca',
            ),
            175 => 
            array (
                'id' => 2176,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Larache',
                'timezone' => 'Africa/Casablanca',
            ),
            176 => 
            array (
                'id' => 2177,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Grand Casablanca',
                'timezone' => 'Africa/Casablanca',
            ),
            177 => 
            array (
                'id' => 2178,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Fès-Boulemane',
                'timezone' => 'Africa/Casablanca',
            ),
            178 => 
            array (
                'id' => 2179,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Marrakech-Tensift-Al Haouz',
                'timezone' => 'Africa/Casablanca',
            ),
            179 => 
            array (
                'id' => 2180,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Meknès-Tafilalet',
                'timezone' => 'Africa/Casablanca',
            ),
            180 => 
            array (
                'id' => 2181,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Rabat-Salé-Zemmour-Zaër',
                'timezone' => 'Africa/Casablanca',
            ),
            181 => 
            array (
                'id' => 2182,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Chaouia-Ouardigha',
                'timezone' => 'Africa/Casablanca',
            ),
            182 => 
            array (
                'id' => 2183,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Doukkala-Abda',
                'timezone' => 'Africa/Casablanca',
            ),
            183 => 
            array (
                'id' => 2184,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Gharb-Chrarda-Beni Hssen',
                'timezone' => 'Africa/Casablanca',
            ),
            184 => 
            array (
                'id' => 2185,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Guelmim-Es Smara',
                'timezone' => 'Africa/Casablanca',
            ),
            185 => 
            array (
                'id' => 2186,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Oriental',
                'timezone' => 'Africa/Casablanca',
            ),
            186 => 
            array (
                'id' => 2187,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Souss-Massa-Drâa',
                'timezone' => 'Africa/Casablanca',
            ),
            187 => 
            array (
                'id' => 2188,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tadla-Azilal',
                'timezone' => 'Africa/Casablanca',
            ),
            188 => 
            array (
                'id' => 2189,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Tanger-Tétouan',
                'timezone' => 'Africa/Casablanca',
            ),
            189 => 
            array (
                'id' => 2190,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Taza-Al Hoceima-Taounate',
                'timezone' => 'Africa/Casablanca',
            ),
            190 => 
            array (
                'id' => 2191,
                'country_id' => 504,
                'iso' => '',
                'name' => 'Laâyoune-Boujdour-Sakia El Hamra',
                'timezone' => 'Africa/Casablanca',
            ),
            191 => 
            array (
                'id' => 2192,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Cabo Delgado',
                'timezone' => 'Africa/Maputo',
            ),
            192 => 
            array (
                'id' => 2193,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Gaza',
                'timezone' => 'Africa/Maputo',
            ),
            193 => 
            array (
                'id' => 2194,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Inhambane',
                'timezone' => 'Africa/Maputo',
            ),
            194 => 
            array (
                'id' => 2195,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Maputo Province',
                'timezone' => 'Africa/Maputo',
            ),
            195 => 
            array (
                'id' => 2196,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Sofala',
                'timezone' => 'Africa/Maputo',
            ),
            196 => 
            array (
                'id' => 2197,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Nampula',
                'timezone' => 'Africa/Maputo',
            ),
            197 => 
            array (
                'id' => 2198,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Niassa',
                'timezone' => 'Africa/Maputo',
            ),
            198 => 
            array (
                'id' => 2199,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Tete',
                'timezone' => 'Africa/Maputo',
            ),
            199 => 
            array (
                'id' => 2200,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Zambézia',
                'timezone' => 'Africa/Maputo',
            ),
            200 => 
            array (
                'id' => 2201,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Manica',
                'timezone' => 'Africa/Maputo',
            ),
            201 => 
            array (
                'id' => 2202,
                'country_id' => 508,
                'iso' => '',
                'name' => 'Maputo',
                'timezone' => 'Africa/Maputo',
            ),
            202 => 
            array (
                'id' => 2203,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Ad Dākhilīyah',
                'timezone' => 'Asia/Muscat',
            ),
            203 => 
            array (
                'id' => 2204,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Al Bāţinah',
                'timezone' => 'Asia/Muscat',
            ),
            204 => 
            array (
                'id' => 2205,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Al Wusţá',
                'timezone' => 'Asia/Muscat',
            ),
            205 => 
            array (
                'id' => 2206,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Ash Sharqīyah',
                'timezone' => 'Asia/Muscat',
            ),
            206 => 
            array (
                'id' => 2207,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Masqaţ',
                'timezone' => 'Asia/Muscat',
            ),
            207 => 
            array (
                'id' => 2208,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Musandam',
                'timezone' => 'Asia/Muscat',
            ),
            208 => 
            array (
                'id' => 2209,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Z̧ufār',
                'timezone' => 'Asia/Muscat',
            ),
            209 => 
            array (
                'id' => 2210,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Az̧ Z̧āhirah',
                'timezone' => 'Asia/Muscat',
            ),
            210 => 
            array (
                'id' => 2211,
                'country_id' => 512,
                'iso' => '',
                'name' => 'Muḩāfaz̧at al Buraymī',
                'timezone' => 'Asia/Muscat',
            ),
            211 => 
            array (
                'id' => 2212,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Bethanien',
                'timezone' => 'Africa/Windhoek',
            ),
            212 => 
            array (
                'id' => 2213,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Caprivi Oos',
                'timezone' => 'Africa/Windhoek',
            ),
            213 => 
            array (
                'id' => 2214,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Kaokoland',
                'timezone' => 'Africa/Windhoek',
            ),
            214 => 
            array (
                'id' => 2215,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Otjiwarongo',
                'timezone' => 'Africa/Windhoek',
            ),
            215 => 
            array (
                'id' => 2216,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Outjo',
                'timezone' => 'Africa/Windhoek',
            ),
            216 => 
            array (
                'id' => 2217,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Owambo',
                'timezone' => 'Africa/Windhoek',
            ),
            217 => 
            array (
                'id' => 2218,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Khomas',
                'timezone' => 'Africa/Windhoek',
            ),
            218 => 
            array (
                'id' => 2219,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Kavango',
                'timezone' => 'Africa/Windhoek',
            ),
            219 => 
            array (
                'id' => 2220,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Caprivi',
                'timezone' => 'Africa/Windhoek',
            ),
            220 => 
            array (
                'id' => 2221,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Erongo',
                'timezone' => 'Africa/Windhoek',
            ),
            221 => 
            array (
                'id' => 2222,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Hardap',
                'timezone' => 'Africa/Windhoek',
            ),
            222 => 
            array (
                'id' => 2223,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Karas',
                'timezone' => 'Africa/Windhoek',
            ),
            223 => 
            array (
                'id' => 2224,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Kunene',
                'timezone' => 'Africa/Windhoek',
            ),
            224 => 
            array (
                'id' => 2225,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Ohangwena',
                'timezone' => 'Africa/Windhoek',
            ),
            225 => 
            array (
                'id' => 2226,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Okavango',
                'timezone' => 'Africa/Windhoek',
            ),
            226 => 
            array (
                'id' => 2227,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Omaheke',
                'timezone' => 'Africa/Windhoek',
            ),
            227 => 
            array (
                'id' => 2228,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Omusati',
                'timezone' => 'Africa/Windhoek',
            ),
            228 => 
            array (
                'id' => 2229,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Oshana',
                'timezone' => 'Africa/Windhoek',
            ),
            229 => 
            array (
                'id' => 2230,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Oshikoto',
                'timezone' => 'Africa/Windhoek',
            ),
            230 => 
            array (
                'id' => 2231,
                'country_id' => 516,
                'iso' => '',
                'name' => 'Otjozondjupa',
                'timezone' => 'Africa/Windhoek',
            ),
            231 => 
            array (
                'id' => 2232,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Aiwo',
                'timezone' => 'Pacific/Nauru',
            ),
            232 => 
            array (
                'id' => 2233,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Anabar',
                'timezone' => 'Pacific/Nauru',
            ),
            233 => 
            array (
                'id' => 2234,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Anetan',
                'timezone' => 'Pacific/Nauru',
            ),
            234 => 
            array (
                'id' => 2235,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Anibare',
                'timezone' => 'Pacific/Nauru',
            ),
            235 => 
            array (
                'id' => 2236,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Baiti',
                'timezone' => 'Pacific/Nauru',
            ),
            236 => 
            array (
                'id' => 2237,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Boe',
                'timezone' => 'Pacific/Nauru',
            ),
            237 => 
            array (
                'id' => 2238,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Buada',
                'timezone' => 'Pacific/Nauru',
            ),
            238 => 
            array (
                'id' => 2239,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Denigomodu',
                'timezone' => 'Pacific/Nauru',
            ),
            239 => 
            array (
                'id' => 2240,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Ewa',
                'timezone' => 'Pacific/Nauru',
            ),
            240 => 
            array (
                'id' => 2241,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Ijuw',
                'timezone' => 'Pacific/Nauru',
            ),
            241 => 
            array (
                'id' => 2242,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Meneng',
                'timezone' => 'Pacific/Nauru',
            ),
            242 => 
            array (
                'id' => 2243,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Nibok',
                'timezone' => 'Pacific/Nauru',
            ),
            243 => 
            array (
                'id' => 2244,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Uaboe',
                'timezone' => 'Pacific/Nauru',
            ),
            244 => 
            array (
                'id' => 2245,
                'country_id' => 520,
                'iso' => '',
                'name' => 'Yaren',
                'timezone' => 'Pacific/Nauru',
            ),
            245 => 
            array (
                'id' => 2246,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Bāgmatī',
                'timezone' => 'Asia/Kathmandu',
            ),
            246 => 
            array (
                'id' => 2247,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Bherī',
                'timezone' => 'Asia/Kathmandu',
            ),
            247 => 
            array (
                'id' => 2248,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Dhawalāgiri',
                'timezone' => 'Asia/Kathmandu',
            ),
            248 => 
            array (
                'id' => 2249,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Gandakī',
                'timezone' => 'Asia/Kathmandu',
            ),
            249 => 
            array (
                'id' => 2250,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Janakpur',
                'timezone' => 'Asia/Kathmandu',
            ),
            250 => 
            array (
                'id' => 2251,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Karnālī',
                'timezone' => 'Asia/Kathmandu',
            ),
            251 => 
            array (
                'id' => 2252,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Kosī',
                'timezone' => 'Asia/Kathmandu',
            ),
            252 => 
            array (
                'id' => 2253,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Lumbinī',
                'timezone' => 'Asia/Kathmandu',
            ),
            253 => 
            array (
                'id' => 2254,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Mahākālī',
                'timezone' => 'Asia/Kathmandu',
            ),
            254 => 
            array (
                'id' => 2255,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Mechī',
                'timezone' => 'Asia/Kathmandu',
            ),
            255 => 
            array (
                'id' => 2256,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Nārāyanī',
                'timezone' => 'Asia/Kathmandu',
            ),
            256 => 
            array (
                'id' => 2257,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Rāptī',
                'timezone' => 'Asia/Kathmandu',
            ),
            257 => 
            array (
                'id' => 2258,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Sagarmāthā',
                'timezone' => 'Asia/Kathmandu',
            ),
            258 => 
            array (
                'id' => 2259,
                'country_id' => 524,
                'iso' => '',
                'name' => 'Setī',
                'timezone' => 'Asia/Kathmandu',
            ),
            259 => 
            array (
                'id' => 2260,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Provincie Drenthe',
                'timezone' => 'Europe/Amsterdam',
            ),
            260 => 
            array (
                'id' => 2261,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Provincie Friesland',
                'timezone' => 'Europe/Amsterdam',
            ),
            261 => 
            array (
                'id' => 2262,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Gelderland',
                'timezone' => 'Europe/Amsterdam',
            ),
            262 => 
            array (
                'id' => 2263,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Groningen',
                'timezone' => 'Europe/Amsterdam',
            ),
            263 => 
            array (
                'id' => 2264,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Limburg',
                'timezone' => 'Europe/Amsterdam',
            ),
            264 => 
            array (
                'id' => 2265,
                'country_id' => 528,
                'iso' => '',
                'name' => 'North Brabant',
                'timezone' => 'Europe/Amsterdam',
            ),
            265 => 
            array (
                'id' => 2266,
                'country_id' => 528,
                'iso' => '',
                'name' => 'North Holland',
                'timezone' => 'Europe/Amsterdam',
            ),
            266 => 
            array (
                'id' => 2267,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Utrecht',
                'timezone' => 'Europe/Amsterdam',
            ),
            267 => 
            array (
                'id' => 2268,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Zeeland',
                'timezone' => 'Europe/Amsterdam',
            ),
            268 => 
            array (
                'id' => 2269,
                'country_id' => 528,
                'iso' => '',
                'name' => 'South Holland',
                'timezone' => 'Europe/Amsterdam',
            ),
            269 => 
            array (
                'id' => 2270,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Overijssel',
                'timezone' => 'Europe/Amsterdam',
            ),
            270 => 
            array (
                'id' => 2271,
                'country_id' => 528,
                'iso' => '',
                'name' => 'Flevoland',
                'timezone' => 'Europe/Amsterdam',
            ),
            271 => 
            array (
                'id' => 2272,
                'country_id' => 530,
                'iso' => '',
                'name' => 'Netherlands Antilles',
                'timezone' => 'America/Curacao',
            ),
            272 => 
            array (
                'id' => 2273,
                'country_id' => 533,
                'iso' => '',
                'name' => 'Aruba',
                'timezone' => 'America/Aruba',
            ),
            273 => 
            array (
                'id' => 2274,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Ambrym',
                'timezone' => 'Pacific/Efate',
            ),
            274 => 
            array (
                'id' => 2275,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Aoba/Maéwo',
                'timezone' => 'Pacific/Efate',
            ),
            275 => 
            array (
                'id' => 2276,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Torba',
                'timezone' => 'Pacific/Efate',
            ),
            276 => 
            array (
                'id' => 2277,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Éfaté',
                'timezone' => 'Pacific/Efate',
            ),
            277 => 
            array (
                'id' => 2278,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Épi',
                'timezone' => 'Pacific/Efate',
            ),
            278 => 
            array (
                'id' => 2279,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Malakula',
                'timezone' => 'Pacific/Efate',
            ),
            279 => 
            array (
                'id' => 2280,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Paama',
                'timezone' => 'Pacific/Efate',
            ),
            280 => 
            array (
                'id' => 2281,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Pentecôte',
                'timezone' => 'Pacific/Efate',
            ),
            281 => 
            array (
                'id' => 2282,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Sanma',
                'timezone' => 'Pacific/Efate',
            ),
            282 => 
            array (
                'id' => 2283,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Shepherd',
                'timezone' => 'Pacific/Efate',
            ),
            283 => 
            array (
                'id' => 2284,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Tafea',
                'timezone' => 'Pacific/Efate',
            ),
            284 => 
            array (
                'id' => 2285,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Malampa',
                'timezone' => 'Pacific/Efate',
            ),
            285 => 
            array (
                'id' => 2286,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Penama',
                'timezone' => 'Pacific/Efate',
            ),
            286 => 
            array (
                'id' => 2287,
                'country_id' => 548,
                'iso' => '',
                'name' => 'Shefa',
                'timezone' => 'Pacific/Efate',
            ),
            287 => 
            array (
                'id' => 2288,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Tasman',
                'timezone' => 'Pacific/Auckland',
            ),
            288 => 
            array (
                'id' => 2289,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Auckland',
                'timezone' => 'Pacific/Auckland',
            ),
            289 => 
            array (
                'id' => 2290,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Bay of Plenty',
                'timezone' => 'Pacific/Auckland',
            ),
            290 => 
            array (
                'id' => 2291,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Canterbury',
                'timezone' => 'Pacific/Auckland',
            ),
            291 => 
            array (
                'id' => 2292,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Gisborne',
                'timezone' => 'Pacific/Auckland',
            ),
            292 => 
            array (
                'id' => 2293,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Hawkeʼs Bay',
                'timezone' => 'Pacific/Auckland',
            ),
            293 => 
            array (
                'id' => 2294,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Manawatu-Wanganui',
                'timezone' => 'Pacific/Auckland',
            ),
            294 => 
            array (
                'id' => 2295,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Marlborough',
                'timezone' => 'Pacific/Auckland',
            ),
            295 => 
            array (
                'id' => 2296,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Nelson',
                'timezone' => 'Pacific/Auckland',
            ),
            296 => 
            array (
                'id' => 2297,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Northland',
                'timezone' => 'Pacific/Auckland',
            ),
            297 => 
            array (
                'id' => 2298,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Otago',
                'timezone' => 'Pacific/Auckland',
            ),
            298 => 
            array (
                'id' => 2299,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Southland',
                'timezone' => 'Pacific/Auckland',
            ),
            299 => 
            array (
                'id' => 2300,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Taranaki',
                'timezone' => 'Pacific/Auckland',
            ),
            300 => 
            array (
                'id' => 2301,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Waikato',
                'timezone' => 'Pacific/Auckland',
            ),
            301 => 
            array (
                'id' => 2302,
                'country_id' => 554,
                'iso' => '',
                'name' => 'Wellington',
                'timezone' => 'Pacific/Auckland',
            ),
            302 => 
            array (
                'id' => 2303,
                'country_id' => 554,
                'iso' => '',
                'name' => 'West Coast',
                'timezone' => 'Pacific/Auckland',
            ),
            303 => 
            array (
                'id' => 2304,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Boaco',
                'timezone' => 'America/Managua',
            ),
            304 => 
            array (
                'id' => 2305,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Carazo',
                'timezone' => 'America/Managua',
            ),
            305 => 
            array (
                'id' => 2306,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Chinandega',
                'timezone' => 'America/Managua',
            ),
            306 => 
            array (
                'id' => 2307,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Chontales',
                'timezone' => 'America/Managua',
            ),
            307 => 
            array (
                'id' => 2308,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Estelí',
                'timezone' => 'America/Managua',
            ),
            308 => 
            array (
                'id' => 2309,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Granada',
                'timezone' => 'America/Managua',
            ),
            309 => 
            array (
                'id' => 2310,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Jinotega',
                'timezone' => 'America/Managua',
            ),
            310 => 
            array (
                'id' => 2311,
                'country_id' => 558,
                'iso' => '',
                'name' => 'León',
                'timezone' => 'America/Managua',
            ),
            311 => 
            array (
                'id' => 2312,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Madriz',
                'timezone' => 'America/Managua',
            ),
            312 => 
            array (
                'id' => 2313,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Managua',
                'timezone' => 'America/Managua',
            ),
            313 => 
            array (
                'id' => 2314,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Masaya',
                'timezone' => 'America/Managua',
            ),
            314 => 
            array (
                'id' => 2315,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Matagalpa',
                'timezone' => 'America/Managua',
            ),
            315 => 
            array (
                'id' => 2316,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Nueva Segovia',
                'timezone' => 'America/Managua',
            ),
            316 => 
            array (
                'id' => 2317,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Río San Juan',
                'timezone' => 'America/Managua',
            ),
            317 => 
            array (
                'id' => 2318,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Rivas',
                'timezone' => 'America/Managua',
            ),
            318 => 
            array (
                'id' => 2319,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Ogun State',
                'timezone' => 'America/Managua',
            ),
            319 => 
            array (
                'id' => 2320,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Atlántico Norte',
                'timezone' => 'America/Managua',
            ),
            320 => 
            array (
                'id' => 2321,
                'country_id' => 558,
                'iso' => '',
                'name' => 'Atlántico Sur',
                'timezone' => 'America/Managua',
            ),
            321 => 
            array (
                'id' => 2322,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Agadez',
                'timezone' => 'Africa/Niamey',
            ),
            322 => 
            array (
                'id' => 2323,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Diffa',
                'timezone' => 'Africa/Niamey',
            ),
            323 => 
            array (
                'id' => 2324,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Dosso',
                'timezone' => 'Africa/Niamey',
            ),
            324 => 
            array (
                'id' => 2325,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Maradi',
                'timezone' => 'Africa/Niamey',
            ),
            325 => 
            array (
                'id' => 2326,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Tahoua',
                'timezone' => 'Africa/Niamey',
            ),
            326 => 
            array (
                'id' => 2327,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Zinder',
                'timezone' => 'Africa/Niamey',
            ),
            327 => 
            array (
                'id' => 2328,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Niamey',
                'timezone' => 'Africa/Niamey',
            ),
            328 => 
            array (
                'id' => 2329,
                'country_id' => 562,
                'iso' => '',
                'name' => 'Tillabéri',
                'timezone' => 'Africa/Niamey',
            ),
            329 => 
            array (
                'id' => 2330,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Lagos',
                'timezone' => 'Africa/Lagos',
            ),
            330 => 
            array (
                'id' => 2331,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Abuja Federal Capital Territory',
                'timezone' => 'Africa/Lagos',
            ),
            331 => 
            array (
                'id' => 2332,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Ogun',
                'timezone' => 'Africa/Lagos',
            ),
            332 => 
            array (
                'id' => 2333,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Akwa Ibom',
                'timezone' => 'Africa/Lagos',
            ),
            333 => 
            array (
                'id' => 2334,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Cross River',
                'timezone' => 'Africa/Lagos',
            ),
            334 => 
            array (
                'id' => 2335,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Kaduna',
                'timezone' => 'Africa/Lagos',
            ),
            335 => 
            array (
                'id' => 2336,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Katsina',
                'timezone' => 'Africa/Lagos',
            ),
            336 => 
            array (
                'id' => 2337,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Anambra',
                'timezone' => 'Africa/Lagos',
            ),
            337 => 
            array (
                'id' => 2338,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Benue',
                'timezone' => 'Africa/Lagos',
            ),
            338 => 
            array (
                'id' => 2339,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Borno',
                'timezone' => 'Africa/Lagos',
            ),
            339 => 
            array (
                'id' => 2340,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Imo',
                'timezone' => 'Africa/Lagos',
            ),
            340 => 
            array (
                'id' => 2341,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Kano',
                'timezone' => 'Africa/Lagos',
            ),
            341 => 
            array (
                'id' => 2342,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Kwara',
                'timezone' => 'Africa/Lagos',
            ),
            342 => 
            array (
                'id' => 2343,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Niger',
                'timezone' => 'Africa/Lagos',
            ),
            343 => 
            array (
                'id' => 2344,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Oyo',
                'timezone' => 'Africa/Lagos',
            ),
            344 => 
            array (
                'id' => 2345,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Adamawa',
                'timezone' => 'Africa/Lagos',
            ),
            345 => 
            array (
                'id' => 2346,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Delta',
                'timezone' => 'Africa/Lagos',
            ),
            346 => 
            array (
                'id' => 2347,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Edo',
                'timezone' => 'Africa/Lagos',
            ),
            347 => 
            array (
                'id' => 2348,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Jigawa',
                'timezone' => 'Africa/Lagos',
            ),
            348 => 
            array (
                'id' => 2349,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Kebbi',
                'timezone' => 'Africa/Lagos',
            ),
            349 => 
            array (
                'id' => 2350,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Kogi',
                'timezone' => 'Africa/Lagos',
            ),
            350 => 
            array (
                'id' => 2351,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Osun',
                'timezone' => 'Africa/Lagos',
            ),
            351 => 
            array (
                'id' => 2352,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Taraba',
                'timezone' => 'Africa/Lagos',
            ),
            352 => 
            array (
                'id' => 2353,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Yobe',
                'timezone' => 'Africa/Lagos',
            ),
            353 => 
            array (
                'id' => 2354,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Abia',
                'timezone' => 'Africa/Lagos',
            ),
            354 => 
            array (
                'id' => 2355,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Bauchi',
                'timezone' => 'Africa/Lagos',
            ),
            355 => 
            array (
                'id' => 2356,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Enugu',
                'timezone' => 'Africa/Lagos',
            ),
            356 => 
            array (
                'id' => 2357,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Ondo',
                'timezone' => 'Africa/Lagos',
            ),
            357 => 
            array (
                'id' => 2358,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Plateau',
                'timezone' => 'Africa/Lagos',
            ),
            358 => 
            array (
                'id' => 2359,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Rivers',
                'timezone' => 'Africa/Lagos',
            ),
            359 => 
            array (
                'id' => 2360,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Sokoto',
                'timezone' => 'Africa/Lagos',
            ),
            360 => 
            array (
                'id' => 2361,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Bayelsa',
                'timezone' => 'Africa/Lagos',
            ),
            361 => 
            array (
                'id' => 2362,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Ebonyi',
                'timezone' => 'Africa/Lagos',
            ),
            362 => 
            array (
                'id' => 2363,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Ekiti',
                'timezone' => 'Africa/Lagos',
            ),
            363 => 
            array (
                'id' => 2364,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Gombe',
                'timezone' => 'Africa/Lagos',
            ),
            364 => 
            array (
                'id' => 2365,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Nassarawa',
                'timezone' => 'Africa/Lagos',
            ),
            365 => 
            array (
                'id' => 2366,
                'country_id' => 566,
                'iso' => '',
                'name' => 'Zamfara',
                'timezone' => 'Africa/Lagos',
            ),
            366 => 
            array (
                'id' => 2367,
                'country_id' => 570,
                'iso' => '',
                'name' => 'Niue',
                'timezone' => 'Pacific/Niue',
            ),
            367 => 
            array (
                'id' => 2368,
                'country_id' => 574,
                'iso' => '',
                'name' => 'Norfolk Island',
                'timezone' => 'Pacific/Norfolk',
            ),
            368 => 
            array (
                'id' => 2369,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Svalbard',
                'timezone' => 'Europe/Oslo',
            ),
            369 => 
            array (
                'id' => 2370,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Akershus',
                'timezone' => 'Europe/Oslo',
            ),
            370 => 
            array (
                'id' => 2371,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Aust-Agder',
                'timezone' => 'Europe/Oslo',
            ),
            371 => 
            array (
                'id' => 2372,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Buskerud',
                'timezone' => 'Europe/Oslo',
            ),
            372 => 
            array (
                'id' => 2373,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Finnmark',
                'timezone' => 'Europe/Oslo',
            ),
            373 => 
            array (
                'id' => 2374,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Hedmark',
                'timezone' => 'Europe/Oslo',
            ),
            374 => 
            array (
                'id' => 2375,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Hordaland',
                'timezone' => 'Europe/Oslo',
            ),
            375 => 
            array (
                'id' => 2376,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Møre og Romsdal',
                'timezone' => 'Europe/Oslo',
            ),
            376 => 
            array (
                'id' => 2377,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Nordland',
                'timezone' => 'Europe/Oslo',
            ),
            377 => 
            array (
                'id' => 2378,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Nord-Trøndelag',
                'timezone' => 'Europe/Oslo',
            ),
            378 => 
            array (
                'id' => 2379,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Oppland',
                'timezone' => 'Europe/Oslo',
            ),
            379 => 
            array (
                'id' => 2380,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Oslo county',
                'timezone' => 'Europe/Oslo',
            ),
            380 => 
            array (
                'id' => 2381,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Østfold',
                'timezone' => 'Europe/Oslo',
            ),
            381 => 
            array (
                'id' => 2382,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Rogaland',
                'timezone' => 'Europe/Oslo',
            ),
            382 => 
            array (
                'id' => 2383,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Sogn og Fjordane',
                'timezone' => 'Europe/Oslo',
            ),
            383 => 
            array (
                'id' => 2384,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Sør-Trøndelag',
                'timezone' => 'Europe/Oslo',
            ),
            384 => 
            array (
                'id' => 2385,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Telemark',
                'timezone' => 'Europe/Oslo',
            ),
            385 => 
            array (
                'id' => 2386,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Troms',
                'timezone' => 'Europe/Oslo',
            ),
            386 => 
            array (
                'id' => 2387,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Vest-Agder',
                'timezone' => 'Europe/Oslo',
            ),
            387 => 
            array (
                'id' => 2388,
                'country_id' => 578,
                'iso' => '',
                'name' => 'Vestfold',
                'timezone' => 'Europe/Oslo',
            ),
            388 => 
            array (
                'id' => 2389,
                'country_id' => 583,
                'iso' => '',
                'name' => 'Kosrae',
                'timezone' => 'Pacific/Kosrae',
            ),
            389 => 
            array (
                'id' => 2390,
                'country_id' => 583,
                'iso' => '',
                'name' => 'Pohnpei',
                'timezone' => 'Pacific/Ponape',
            ),
            390 => 
            array (
                'id' => 2391,
                'country_id' => 583,
                'iso' => '',
                'name' => 'Chuuk',
                'timezone' => 'Pacific/Truk',
            ),
            391 => 
            array (
                'id' => 2392,
                'country_id' => 583,
                'iso' => '',
                'name' => 'Yap',
                'timezone' => 'Pacific/Truk',
            ),
            392 => 
            array (
                'id' => 2393,
                'country_id' => 584,
                'iso' => '',
                'name' => 'Marshall Islands',
                'timezone' => 'Pacific/Majuro',
            ),
            393 => 
            array (
                'id' => 2394,
                'country_id' => 585,
                'iso' => '',
                'name' => 'State of Ngeremlengui',
                'timezone' => 'Pacific/Palau',
            ),
            394 => 
            array (
                'id' => 2395,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Federally Administered Tribal Areas',
                'timezone' => 'Asia/Karachi',
            ),
            395 => 
            array (
                'id' => 2396,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Balochistān',
                'timezone' => 'Asia/Karachi',
            ),
            396 => 
            array (
                'id' => 2397,
                'country_id' => 586,
                'iso' => '',
                'name' => 'North West Frontier Province',
                'timezone' => 'Asia/Karachi',
            ),
            397 => 
            array (
                'id' => 2398,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Punjab',
                'timezone' => 'Asia/Karachi',
            ),
            398 => 
            array (
                'id' => 2399,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Sindh',
                'timezone' => 'Asia/Karachi',
            ),
            399 => 
            array (
                'id' => 2400,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Azad Kashmir',
                'timezone' => 'Asia/Karachi',
            ),
            400 => 
            array (
                'id' => 2401,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Gilgit-Baltistan',
                'timezone' => 'Asia/Karachi',
            ),
            401 => 
            array (
                'id' => 2402,
                'country_id' => 586,
                'iso' => '',
                'name' => 'Islāmābād',
                'timezone' => 'Asia/Karachi',
            ),
            402 => 
            array (
                'id' => 2403,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Bocas del Toro',
                'timezone' => 'America/Panama',
            ),
            403 => 
            array (
                'id' => 2404,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Chiriquí',
                'timezone' => 'America/Panama',
            ),
            404 => 
            array (
                'id' => 2405,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Coclé',
                'timezone' => 'America/Panama',
            ),
            405 => 
            array (
                'id' => 2406,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Colón',
                'timezone' => 'America/Panama',
            ),
            406 => 
            array (
                'id' => 2407,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Darién',
                'timezone' => 'America/Panama',
            ),
            407 => 
            array (
                'id' => 2408,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Herrera',
                'timezone' => 'America/Panama',
            ),
            408 => 
            array (
                'id' => 2409,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Los Santos',
                'timezone' => 'America/Panama',
            ),
            409 => 
            array (
                'id' => 2410,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Panamá',
                'timezone' => 'America/Panama',
            ),
            410 => 
            array (
                'id' => 2411,
                'country_id' => 591,
                'iso' => '',
                'name' => 'San Blas',
                'timezone' => 'America/Panama',
            ),
            411 => 
            array (
                'id' => 2412,
                'country_id' => 591,
                'iso' => '',
                'name' => 'Veraguas',
                'timezone' => 'America/Panama',
            ),
            412 => 
            array (
                'id' => 2413,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            413 => 
            array (
                'id' => 2414,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Gulf',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            414 => 
            array (
                'id' => 2415,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Milne Bay',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            415 => 
            array (
                'id' => 2416,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Northern',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            416 => 
            array (
                'id' => 2417,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Southern Highlands',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            417 => 
            array (
                'id' => 2418,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            418 => 
            array (
                'id' => 2419,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Bougainville',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            419 => 
            array (
                'id' => 2420,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Chimbu',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            420 => 
            array (
                'id' => 2421,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Eastern Highlands',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            421 => 
            array (
                'id' => 2422,
                'country_id' => 598,
                'iso' => '',
                'name' => 'East New Britain',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            422 => 
            array (
                'id' => 2423,
                'country_id' => 598,
                'iso' => '',
                'name' => 'East Sepik',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            423 => 
            array (
                'id' => 2424,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Madang',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            424 => 
            array (
                'id' => 2425,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Manus',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            425 => 
            array (
                'id' => 2426,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Morobe',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            426 => 
            array (
                'id' => 2427,
                'country_id' => 598,
                'iso' => '',
                'name' => 'New Ireland',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            427 => 
            array (
                'id' => 2428,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Western Highlands',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            428 => 
            array (
                'id' => 2429,
                'country_id' => 598,
                'iso' => '',
                'name' => 'West New Britain',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            429 => 
            array (
                'id' => 2430,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Sandaun',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            430 => 
            array (
                'id' => 2431,
                'country_id' => 598,
                'iso' => '',
                'name' => 'Enga',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            431 => 
            array (
                'id' => 2432,
                'country_id' => 598,
                'iso' => '',
                'name' => 'National Capital',
                'timezone' => 'Pacific/Port_Moresby',
            ),
            432 => 
            array (
                'id' => 2433,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Alto Paraná',
                'timezone' => 'America/Asuncion',
            ),
            433 => 
            array (
                'id' => 2434,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Amambay',
                'timezone' => 'America/Asuncion',
            ),
            434 => 
            array (
                'id' => 2435,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Caaguazú',
                'timezone' => 'America/Asuncion',
            ),
            435 => 
            array (
                'id' => 2436,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Caazapá',
                'timezone' => 'America/Asuncion',
            ),
            436 => 
            array (
                'id' => 2437,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'America/Asuncion',
            ),
            437 => 
            array (
                'id' => 2438,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Concepción',
                'timezone' => 'America/Asuncion',
            ),
            438 => 
            array (
                'id' => 2439,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Cordillera',
                'timezone' => 'America/Asuncion',
            ),
            439 => 
            array (
                'id' => 2440,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Guairá',
                'timezone' => 'America/Asuncion',
            ),
            440 => 
            array (
                'id' => 2441,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Itapúa',
                'timezone' => 'America/Asuncion',
            ),
            441 => 
            array (
                'id' => 2442,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Misiones',
                'timezone' => 'America/Asuncion',
            ),
            442 => 
            array (
                'id' => 2443,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Ñeembucú',
                'timezone' => 'America/Asuncion',
            ),
            443 => 
            array (
                'id' => 2444,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Paraguarí',
                'timezone' => 'America/Asuncion',
            ),
            444 => 
            array (
                'id' => 2445,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Presidente Hayes',
                'timezone' => 'America/Asuncion',
            ),
            445 => 
            array (
                'id' => 2446,
                'country_id' => 600,
                'iso' => '',
                'name' => 'San Pedro',
                'timezone' => 'America/Asuncion',
            ),
            446 => 
            array (
                'id' => 2447,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Canindeyú',
                'timezone' => 'America/Asuncion',
            ),
            447 => 
            array (
                'id' => 2448,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Asunción',
                'timezone' => 'America/Asuncion',
            ),
            448 => 
            array (
                'id' => 2449,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Departamento de Alto Paraguay',
                'timezone' => 'America/Asuncion',
            ),
            449 => 
            array (
                'id' => 2450,
                'country_id' => 600,
                'iso' => '',
                'name' => 'Boquerón',
                'timezone' => 'America/Asuncion',
            ),
            450 => 
            array (
                'id' => 2451,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Amazonas',
                'timezone' => 'America/Lima',
            ),
            451 => 
            array (
                'id' => 2452,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Ancash',
                'timezone' => 'America/Lima',
            ),
            452 => 
            array (
                'id' => 2453,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Apurímac',
                'timezone' => 'America/Lima',
            ),
            453 => 
            array (
                'id' => 2454,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Arequipa',
                'timezone' => 'America/Lima',
            ),
            454 => 
            array (
                'id' => 2455,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Ayacucho',
                'timezone' => 'America/Lima',
            ),
            455 => 
            array (
                'id' => 2456,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Cajamarca',
                'timezone' => 'America/Lima',
            ),
            456 => 
            array (
                'id' => 2457,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Callao',
                'timezone' => 'America/Lima',
            ),
            457 => 
            array (
                'id' => 2458,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Cusco',
                'timezone' => 'America/Lima',
            ),
            458 => 
            array (
                'id' => 2459,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Huancavelica',
                'timezone' => 'America/Lima',
            ),
            459 => 
            array (
                'id' => 2460,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Huanuco',
                'timezone' => 'America/Lima',
            ),
            460 => 
            array (
                'id' => 2461,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Ica',
                'timezone' => 'America/Lima',
            ),
            461 => 
            array (
                'id' => 2462,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Junín',
                'timezone' => 'America/Lima',
            ),
            462 => 
            array (
                'id' => 2463,
                'country_id' => 604,
                'iso' => '',
                'name' => 'La Libertad',
                'timezone' => 'America/Lima',
            ),
            463 => 
            array (
                'id' => 2464,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Lambayeque',
                'timezone' => 'America/Lima',
            ),
            464 => 
            array (
                'id' => 2465,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Lima',
                'timezone' => 'America/Lima',
            ),
            465 => 
            array (
                'id' => 2466,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Provincia de Lima',
                'timezone' => 'America/Lima',
            ),
            466 => 
            array (
                'id' => 2467,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Loreto',
                'timezone' => 'America/Lima',
            ),
            467 => 
            array (
                'id' => 2468,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Madre de Dios',
                'timezone' => 'America/Lima',
            ),
            468 => 
            array (
                'id' => 2469,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Moquegua',
                'timezone' => 'America/Lima',
            ),
            469 => 
            array (
                'id' => 2470,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Pasco',
                'timezone' => 'America/Lima',
            ),
            470 => 
            array (
                'id' => 2471,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Piura',
                'timezone' => 'America/Lima',
            ),
            471 => 
            array (
                'id' => 2472,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Puno',
                'timezone' => 'America/Lima',
            ),
            472 => 
            array (
                'id' => 2473,
                'country_id' => 604,
                'iso' => '',
                'name' => 'San Martín',
                'timezone' => 'America/Lima',
            ),
            473 => 
            array (
                'id' => 2474,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Tacna',
                'timezone' => 'America/Lima',
            ),
            474 => 
            array (
                'id' => 2475,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Tumbes',
                'timezone' => 'America/Lima',
            ),
            475 => 
            array (
                'id' => 2476,
                'country_id' => 604,
                'iso' => '',
                'name' => 'Ucayali',
                'timezone' => 'America/Lima',
            ),
            476 => 
            array (
                'id' => 2477,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Abra',
                'timezone' => 'Asia/Manila',
            ),
            477 => 
            array (
                'id' => 2478,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Agusan del Norte',
                'timezone' => 'Asia/Manila',
            ),
            478 => 
            array (
                'id' => 2479,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Agusan del Sur',
                'timezone' => 'Asia/Manila',
            ),
            479 => 
            array (
                'id' => 2480,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Aklan',
                'timezone' => 'Asia/Manila',
            ),
            480 => 
            array (
                'id' => 2481,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Albay',
                'timezone' => 'Asia/Manila',
            ),
            481 => 
            array (
                'id' => 2482,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Antique',
                'timezone' => 'Asia/Manila',
            ),
            482 => 
            array (
                'id' => 2483,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Bataan',
                'timezone' => 'Asia/Manila',
            ),
            483 => 
            array (
                'id' => 2484,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Batanes',
                'timezone' => 'Asia/Manila',
            ),
            484 => 
            array (
                'id' => 2485,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Batangas',
                'timezone' => 'Asia/Manila',
            ),
            485 => 
            array (
                'id' => 2486,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Benguet',
                'timezone' => 'Asia/Manila',
            ),
            486 => 
            array (
                'id' => 2487,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Bohol',
                'timezone' => 'Asia/Manila',
            ),
            487 => 
            array (
                'id' => 2488,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Bukidnon',
                'timezone' => 'Asia/Manila',
            ),
            488 => 
            array (
                'id' => 2489,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Bulacan',
                'timezone' => 'Asia/Manila',
            ),
            489 => 
            array (
                'id' => 2490,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cagayan',
                'timezone' => 'Asia/Manila',
            ),
            490 => 
            array (
                'id' => 2491,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Camarines Norte',
                'timezone' => 'Asia/Manila',
            ),
            491 => 
            array (
                'id' => 2492,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Camarines Sur',
                'timezone' => 'Asia/Manila',
            ),
            492 => 
            array (
                'id' => 2493,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Camiguin',
                'timezone' => 'Asia/Manila',
            ),
            493 => 
            array (
                'id' => 2494,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Capiz',
                'timezone' => 'Asia/Manila',
            ),
            494 => 
            array (
                'id' => 2495,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Catanduanes',
                'timezone' => 'Asia/Manila',
            ),
            495 => 
            array (
                'id' => 2496,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cebu',
                'timezone' => 'Asia/Manila',
            ),
            496 => 
            array (
                'id' => 2497,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Basilan',
                'timezone' => 'Asia/Manila',
            ),
            497 => 
            array (
                'id' => 2498,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Eastern Samar',
                'timezone' => 'Asia/Manila',
            ),
            498 => 
            array (
                'id' => 2499,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Davao del Sur',
                'timezone' => 'Asia/Manila',
            ),
            499 => 
            array (
                'id' => 2500,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Davao Oriental',
                'timezone' => 'Asia/Manila',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Ifugao',
                'timezone' => 'Asia/Manila',
            ),
            1 => 
            array (
                'id' => 2502,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Ilocos Norte',
                'timezone' => 'Asia/Manila',
            ),
            2 => 
            array (
                'id' => 2503,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Ilocos Sur',
                'timezone' => 'Asia/Manila',
            ),
            3 => 
            array (
                'id' => 2504,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Iloilo',
                'timezone' => 'Asia/Manila',
            ),
            4 => 
            array (
                'id' => 2505,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Isabela',
                'timezone' => 'Asia/Manila',
            ),
            5 => 
            array (
                'id' => 2506,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Laguna',
                'timezone' => 'Asia/Manila',
            ),
            6 => 
            array (
                'id' => 2507,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Lanao del Sur',
                'timezone' => 'Asia/Manila',
            ),
            7 => 
            array (
                'id' => 2508,
                'country_id' => 608,
                'iso' => '',
                'name' => 'La Union',
                'timezone' => 'Asia/Manila',
            ),
            8 => 
            array (
                'id' => 2509,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Leyte',
                'timezone' => 'Asia/Manila',
            ),
            9 => 
            array (
                'id' => 2510,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Marinduque',
                'timezone' => 'Asia/Manila',
            ),
            10 => 
            array (
                'id' => 2511,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Masbate',
                'timezone' => 'Asia/Manila',
            ),
            11 => 
            array (
                'id' => 2512,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Occidental Mindoro',
                'timezone' => 'Asia/Manila',
            ),
            12 => 
            array (
                'id' => 2513,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Oriental Mindoro',
                'timezone' => 'Asia/Manila',
            ),
            13 => 
            array (
                'id' => 2514,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Misamis Oriental',
                'timezone' => 'Asia/Manila',
            ),
            14 => 
            array (
                'id' => 2515,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Mountain Province',
                'timezone' => 'Asia/Manila',
            ),
            15 => 
            array (
                'id' => 2516,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Negros Oriental',
                'timezone' => 'Asia/Manila',
            ),
            16 => 
            array (
                'id' => 2517,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Nueva Ecija',
                'timezone' => 'Asia/Manila',
            ),
            17 => 
            array (
                'id' => 2518,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Nueva Vizcaya',
                'timezone' => 'Asia/Manila',
            ),
            18 => 
            array (
                'id' => 2519,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Palawan',
                'timezone' => 'Asia/Manila',
            ),
            19 => 
            array (
                'id' => 2520,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Pampanga',
                'timezone' => 'Asia/Manila',
            ),
            20 => 
            array (
                'id' => 2521,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Pangasinan',
                'timezone' => 'Asia/Manila',
            ),
            21 => 
            array (
                'id' => 2522,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Rizal',
                'timezone' => 'Asia/Manila',
            ),
            22 => 
            array (
                'id' => 2523,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Romblon',
                'timezone' => 'Asia/Manila',
            ),
            23 => 
            array (
                'id' => 2524,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Samar',
                'timezone' => 'Asia/Manila',
            ),
            24 => 
            array (
                'id' => 2525,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Maguindanao',
                'timezone' => 'Asia/Manila',
            ),
            25 => 
            array (
                'id' => 2526,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cotabato City',
                'timezone' => 'Asia/Manila',
            ),
            26 => 
            array (
                'id' => 2527,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Sorsogon',
                'timezone' => 'Asia/Manila',
            ),
            27 => 
            array (
                'id' => 2528,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Southern Leyte',
                'timezone' => 'Asia/Manila',
            ),
            28 => 
            array (
                'id' => 2529,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Sulu',
                'timezone' => 'Asia/Manila',
            ),
            29 => 
            array (
                'id' => 2530,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Surigao del Norte',
                'timezone' => 'Asia/Manila',
            ),
            30 => 
            array (
                'id' => 2531,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Surigao del Sur',
                'timezone' => 'Asia/Manila',
            ),
            31 => 
            array (
                'id' => 2532,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Tarlac',
                'timezone' => 'Asia/Manila',
            ),
            32 => 
            array (
                'id' => 2533,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Zambales',
                'timezone' => 'Asia/Manila',
            ),
            33 => 
            array (
                'id' => 2534,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Zamboanga del Norte',
                'timezone' => 'Asia/Manila',
            ),
            34 => 
            array (
                'id' => 2535,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Zamboanga del Sur',
                'timezone' => 'Asia/Manila',
            ),
            35 => 
            array (
                'id' => 2536,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Northern Samar',
                'timezone' => 'Asia/Manila',
            ),
            36 => 
            array (
                'id' => 2537,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Quirino',
                'timezone' => 'Asia/Manila',
            ),
            37 => 
            array (
                'id' => 2538,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Siquijor',
                'timezone' => 'Asia/Manila',
            ),
            38 => 
            array (
                'id' => 2539,
                'country_id' => 608,
                'iso' => '',
                'name' => 'South Cotabato',
                'timezone' => 'Asia/Manila',
            ),
            39 => 
            array (
                'id' => 2540,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Sultan Kudarat',
                'timezone' => 'Asia/Manila',
            ),
            40 => 
            array (
                'id' => 2541,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Kalinga',
                'timezone' => 'Asia/Manila',
            ),
            41 => 
            array (
                'id' => 2542,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Apayao',
                'timezone' => 'Asia/Manila',
            ),
            42 => 
            array (
                'id' => 2543,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Tawi-Tawi',
                'timezone' => 'Asia/Manila',
            ),
            43 => 
            array (
                'id' => 2544,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Angeles',
                'timezone' => 'Asia/Manila',
            ),
            44 => 
            array (
                'id' => 2545,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Bacolod City',
                'timezone' => 'Asia/Manila',
            ),
            45 => 
            array (
                'id' => 2546,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Compostela Valley',
                'timezone' => 'Asia/Manila',
            ),
            46 => 
            array (
                'id' => 2547,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Baguio',
                'timezone' => 'Asia/Manila',
            ),
            47 => 
            array (
                'id' => 2548,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Davao del Norte',
                'timezone' => 'Asia/Manila',
            ),
            48 => 
            array (
                'id' => 2549,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Butuan',
                'timezone' => 'Asia/Manila',
            ),
            49 => 
            array (
                'id' => 2550,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Guimaras',
                'timezone' => 'Asia/Manila',
            ),
            50 => 
            array (
                'id' => 2551,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Lanao del Norte',
                'timezone' => 'Asia/Manila',
            ),
            51 => 
            array (
                'id' => 2552,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Misamis Occidental',
                'timezone' => 'Asia/Manila',
            ),
            52 => 
            array (
                'id' => 2553,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Caloocan',
                'timezone' => 'Asia/Manila',
            ),
            53 => 
            array (
                'id' => 2554,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cavite',
                'timezone' => 'Asia/Manila',
            ),
            54 => 
            array (
                'id' => 2555,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cebu City',
                'timezone' => 'Asia/Manila',
            ),
            55 => 
            array (
                'id' => 2556,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cotabato',
                'timezone' => 'Asia/Manila',
            ),
            56 => 
            array (
                'id' => 2557,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Dagupan',
                'timezone' => 'Asia/Manila',
            ),
            57 => 
            array (
                'id' => 2558,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Cagayan de Oro',
                'timezone' => 'Asia/Manila',
            ),
            58 => 
            array (
                'id' => 2559,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Iligan',
                'timezone' => 'Asia/Manila',
            ),
            59 => 
            array (
                'id' => 2560,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Davao',
                'timezone' => 'Asia/Manila',
            ),
            60 => 
            array (
                'id' => 2561,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Las Piñas',
                'timezone' => 'Asia/Manila',
            ),
            61 => 
            array (
                'id' => 2562,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Malabon',
                'timezone' => 'Asia/Manila',
            ),
            62 => 
            array (
                'id' => 2563,
                'country_id' => 608,
                'iso' => '',
                'name' => 'General Santos',
                'timezone' => 'Asia/Manila',
            ),
            63 => 
            array (
                'id' => 2564,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Muntinlupa',
                'timezone' => 'Asia/Manila',
            ),
            64 => 
            array (
                'id' => 2565,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Iloilo City',
                'timezone' => 'Asia/Manila',
            ),
            65 => 
            array (
                'id' => 2566,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Navotas',
                'timezone' => 'Asia/Manila',
            ),
            66 => 
            array (
                'id' => 2567,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Parañaque',
                'timezone' => 'Asia/Manila',
            ),
            67 => 
            array (
                'id' => 2568,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Quezon City',
                'timezone' => 'Asia/Manila',
            ),
            68 => 
            array (
                'id' => 2569,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Lapu-Lapu',
                'timezone' => 'Asia/Manila',
            ),
            69 => 
            array (
                'id' => 2570,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Taguig',
                'timezone' => 'Asia/Manila',
            ),
            70 => 
            array (
                'id' => 2571,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Valenzuela',
                'timezone' => 'Asia/Manila',
            ),
            71 => 
            array (
                'id' => 2572,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Lucena',
                'timezone' => 'Asia/Manila',
            ),
            72 => 
            array (
                'id' => 2573,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Mandaue',
                'timezone' => 'Asia/Manila',
            ),
            73 => 
            array (
                'id' => 2574,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Manila',
                'timezone' => 'Asia/Manila',
            ),
            74 => 
            array (
                'id' => 2575,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Zamboanga Sibugay',
                'timezone' => 'Asia/Manila',
            ),
            75 => 
            array (
                'id' => 2576,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Naga',
                'timezone' => 'Asia/Manila',
            ),
            76 => 
            array (
                'id' => 2577,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Olongapo',
                'timezone' => 'Asia/Manila',
            ),
            77 => 
            array (
                'id' => 2578,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Ormoc',
                'timezone' => 'Asia/Manila',
            ),
            78 => 
            array (
                'id' => 2579,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Santiago',
                'timezone' => 'Asia/Manila',
            ),
            79 => 
            array (
                'id' => 2580,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Pateros',
                'timezone' => 'Asia/Manila',
            ),
            80 => 
            array (
                'id' => 2581,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Pasay',
                'timezone' => 'Asia/Manila',
            ),
            81 => 
            array (
                'id' => 2582,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Puerto Princesa',
                'timezone' => 'Asia/Manila',
            ),
            82 => 
            array (
                'id' => 2583,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Quezon',
                'timezone' => 'Asia/Manila',
            ),
            83 => 
            array (
                'id' => 2584,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Tacloban',
                'timezone' => 'Asia/Manila',
            ),
            84 => 
            array (
                'id' => 2585,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Zamboanga City',
                'timezone' => 'Asia/Manila',
            ),
            85 => 
            array (
                'id' => 2586,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Aurora',
                'timezone' => 'Asia/Manila',
            ),
            86 => 
            array (
                'id' => 2587,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Negros Occidental',
                'timezone' => 'Asia/Manila',
            ),
            87 => 
            array (
                'id' => 2588,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Biliran',
                'timezone' => 'Asia/Manila',
            ),
            88 => 
            array (
                'id' => 2589,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Makati City',
                'timezone' => 'Asia/Manila',
            ),
            89 => 
            array (
                'id' => 2590,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Sarangani',
                'timezone' => 'Asia/Manila',
            ),
            90 => 
            array (
                'id' => 2591,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Mandaluyong City',
                'timezone' => 'Asia/Manila',
            ),
            91 => 
            array (
                'id' => 2592,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Marikina',
                'timezone' => 'Asia/Manila',
            ),
            92 => 
            array (
                'id' => 2593,
                'country_id' => 608,
                'iso' => '',
                'name' => 'Pasig',
                'timezone' => 'Asia/Manila',
            ),
            93 => 
            array (
                'id' => 2594,
                'country_id' => 608,
                'iso' => '',
                'name' => 'San Juan',
                'timezone' => 'Asia/Manila',
            ),
            94 => 
            array (
                'id' => 2595,
                'country_id' => 612,
                'iso' => '',
                'name' => 'Pitcairn Islands',
                'timezone' => 'Pacific/Pitcairn',
            ),
            95 => 
            array (
                'id' => 2596,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Biala Podlaska',
                'timezone' => 'Europe/Warsaw',
            ),
            96 => 
            array (
                'id' => 2597,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Bialystok',
                'timezone' => 'Europe/Warsaw',
            ),
            97 => 
            array (
                'id' => 2598,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Bielsko',
                'timezone' => 'Europe/Warsaw',
            ),
            98 => 
            array (
                'id' => 2599,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Bydgoszcz',
                'timezone' => 'Europe/Warsaw',
            ),
            99 => 
            array (
                'id' => 2600,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Chelm',
                'timezone' => 'Europe/Warsaw',
            ),
            100 => 
            array (
                'id' => 2601,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Ciechanow',
                'timezone' => 'Europe/Warsaw',
            ),
            101 => 
            array (
                'id' => 2602,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Czestochowa',
                'timezone' => 'Europe/Warsaw',
            ),
            102 => 
            array (
                'id' => 2603,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Elblag',
                'timezone' => 'Europe/Warsaw',
            ),
            103 => 
            array (
                'id' => 2604,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Gdansk',
                'timezone' => 'Europe/Warsaw',
            ),
            104 => 
            array (
                'id' => 2605,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Gorzow',
                'timezone' => 'Europe/Warsaw',
            ),
            105 => 
            array (
                'id' => 2606,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Jelenia Gora',
                'timezone' => 'Europe/Warsaw',
            ),
            106 => 
            array (
                'id' => 2607,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Kalisz',
                'timezone' => 'Europe/Warsaw',
            ),
            107 => 
            array (
                'id' => 2608,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Katowice',
                'timezone' => 'Europe/Warsaw',
            ),
            108 => 
            array (
                'id' => 2609,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Kielce',
                'timezone' => 'Europe/Warsaw',
            ),
            109 => 
            array (
                'id' => 2610,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Konin',
                'timezone' => 'Europe/Warsaw',
            ),
            110 => 
            array (
                'id' => 2611,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Koszalin',
                'timezone' => 'Europe/Warsaw',
            ),
            111 => 
            array (
                'id' => 2612,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Krakow',
                'timezone' => 'Europe/Warsaw',
            ),
            112 => 
            array (
                'id' => 2613,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Krosno',
                'timezone' => 'Europe/Warsaw',
            ),
            113 => 
            array (
                'id' => 2614,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Legnica',
                'timezone' => 'Europe/Warsaw',
            ),
            114 => 
            array (
                'id' => 2615,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Leszno',
                'timezone' => 'Europe/Warsaw',
            ),
            115 => 
            array (
                'id' => 2616,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lodz',
                'timezone' => 'Europe/Warsaw',
            ),
            116 => 
            array (
                'id' => 2617,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lomza',
                'timezone' => 'Europe/Warsaw',
            ),
            117 => 
            array (
                'id' => 2618,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lublin',
                'timezone' => 'Europe/Warsaw',
            ),
            118 => 
            array (
                'id' => 2619,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Nowy Sacz',
                'timezone' => 'Europe/Warsaw',
            ),
            119 => 
            array (
                'id' => 2620,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Olsztyn',
                'timezone' => 'Europe/Warsaw',
            ),
            120 => 
            array (
                'id' => 2621,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Opole',
                'timezone' => 'Europe/Warsaw',
            ),
            121 => 
            array (
                'id' => 2622,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Ostroleka',
                'timezone' => 'Europe/Warsaw',
            ),
            122 => 
            array (
                'id' => 2623,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Pita',
                'timezone' => 'Europe/Warsaw',
            ),
            123 => 
            array (
                'id' => 2624,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Piotrkow',
                'timezone' => 'Europe/Warsaw',
            ),
            124 => 
            array (
                'id' => 2625,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Plock',
                'timezone' => 'Europe/Warsaw',
            ),
            125 => 
            array (
                'id' => 2626,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Poznan',
                'timezone' => 'Europe/Warsaw',
            ),
            126 => 
            array (
                'id' => 2627,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Przemysl',
                'timezone' => 'Europe/Warsaw',
            ),
            127 => 
            array (
                'id' => 2628,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Radom',
                'timezone' => 'Europe/Warsaw',
            ),
            128 => 
            array (
                'id' => 2629,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Rzeszow',
                'timezone' => 'Europe/Warsaw',
            ),
            129 => 
            array (
                'id' => 2630,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Siedlce',
                'timezone' => 'Europe/Warsaw',
            ),
            130 => 
            array (
                'id' => 2631,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Sieradz',
                'timezone' => 'Europe/Warsaw',
            ),
            131 => 
            array (
                'id' => 2632,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Skierniewice',
                'timezone' => 'Europe/Warsaw',
            ),
            132 => 
            array (
                'id' => 2633,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Slupsk',
                'timezone' => 'Europe/Warsaw',
            ),
            133 => 
            array (
                'id' => 2634,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Suwalki',
                'timezone' => 'Europe/Warsaw',
            ),
            134 => 
            array (
                'id' => 2635,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Szczecin',
                'timezone' => 'Europe/Warsaw',
            ),
            135 => 
            array (
                'id' => 2636,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Tarnobrzeg',
                'timezone' => 'Europe/Warsaw',
            ),
            136 => 
            array (
                'id' => 2637,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Tarnow',
                'timezone' => 'Europe/Warsaw',
            ),
            137 => 
            array (
                'id' => 2638,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Torufi',
                'timezone' => 'Europe/Warsaw',
            ),
            138 => 
            array (
                'id' => 2639,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Walbrzych',
                'timezone' => 'Europe/Warsaw',
            ),
            139 => 
            array (
                'id' => 2640,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Warszawa',
                'timezone' => 'Europe/Warsaw',
            ),
            140 => 
            array (
                'id' => 2641,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Wloclawek',
                'timezone' => 'Europe/Warsaw',
            ),
            141 => 
            array (
                'id' => 2642,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Wroclaw',
                'timezone' => 'Europe/Warsaw',
            ),
            142 => 
            array (
                'id' => 2643,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Zamosc',
                'timezone' => 'Europe/Warsaw',
            ),
            143 => 
            array (
                'id' => 2644,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Zielona Gora',
                'timezone' => 'Europe/Warsaw',
            ),
            144 => 
            array (
                'id' => 2645,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lower Silesian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            145 => 
            array (
                'id' => 2646,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Kujawsko-Pomorskie Voivodship',
                'timezone' => 'Europe/Warsaw',
            ),
            146 => 
            array (
                'id' => 2647,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Łódź Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            147 => 
            array (
                'id' => 2648,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lublin Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            148 => 
            array (
                'id' => 2649,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lubusz Voivodship',
                'timezone' => 'Europe/Warsaw',
            ),
            149 => 
            array (
                'id' => 2650,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Lesser Poland Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            150 => 
            array (
                'id' => 2651,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Masovian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            151 => 
            array (
                'id' => 2652,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Opole Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            152 => 
            array (
                'id' => 2653,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Subcarpathian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            153 => 
            array (
                'id' => 2654,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Podlasie Voivodship',
                'timezone' => 'Europe/Warsaw',
            ),
            154 => 
            array (
                'id' => 2655,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Pomeranian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            155 => 
            array (
                'id' => 2656,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Silesian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            156 => 
            array (
                'id' => 2657,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Świętokrzyskie Voivodship',
                'timezone' => 'Europe/Warsaw',
            ),
            157 => 
            array (
                'id' => 2658,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Warmian-Masurian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            158 => 
            array (
                'id' => 2659,
                'country_id' => 616,
                'iso' => '',
                'name' => 'Greater Poland Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            159 => 
            array (
                'id' => 2660,
                'country_id' => 616,
                'iso' => '',
                'name' => 'West Pomeranian Voivodeship',
                'timezone' => 'Europe/Warsaw',
            ),
            160 => 
            array (
                'id' => 2661,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Aveiro',
                'timezone' => 'Europe/Lisbon',
            ),
            161 => 
            array (
                'id' => 2662,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Beja',
                'timezone' => 'Europe/Lisbon',
            ),
            162 => 
            array (
                'id' => 2663,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Braga',
                'timezone' => 'Europe/Lisbon',
            ),
            163 => 
            array (
                'id' => 2664,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Bragança',
                'timezone' => 'Europe/Lisbon',
            ),
            164 => 
            array (
                'id' => 2665,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Castelo Branco',
                'timezone' => 'Europe/Lisbon',
            ),
            165 => 
            array (
                'id' => 2666,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Coimbra',
                'timezone' => 'Europe/Lisbon',
            ),
            166 => 
            array (
                'id' => 2667,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Évora',
                'timezone' => 'Europe/Lisbon',
            ),
            167 => 
            array (
                'id' => 2668,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Faro',
                'timezone' => 'Europe/Lisbon',
            ),
            168 => 
            array (
                'id' => 2669,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Madeira',
                'timezone' => 'Atlantic/Madeira',
            ),
            169 => 
            array (
                'id' => 2670,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Guarda',
                'timezone' => 'Europe/Lisbon',
            ),
            170 => 
            array (
                'id' => 2671,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Leiria',
                'timezone' => 'Europe/Lisbon',
            ),
            171 => 
            array (
                'id' => 2672,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Lisbon',
                'timezone' => 'Europe/Lisbon',
            ),
            172 => 
            array (
                'id' => 2673,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Portalegre',
                'timezone' => 'Europe/Lisbon',
            ),
            173 => 
            array (
                'id' => 2674,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Porto',
                'timezone' => 'Europe/Lisbon',
            ),
            174 => 
            array (
                'id' => 2675,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Santarém',
                'timezone' => 'Europe/Lisbon',
            ),
            175 => 
            array (
                'id' => 2676,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Setúbal',
                'timezone' => 'Europe/Lisbon',
            ),
            176 => 
            array (
                'id' => 2677,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Viana do Castelo',
                'timezone' => 'Europe/Lisbon',
            ),
            177 => 
            array (
                'id' => 2678,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Vila Real',
                'timezone' => 'Europe/Lisbon',
            ),
            178 => 
            array (
                'id' => 2679,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Viseu',
                'timezone' => 'Europe/Lisbon',
            ),
            179 => 
            array (
                'id' => 2680,
                'country_id' => 620,
                'iso' => '',
                'name' => 'Azores',
                'timezone' => 'Atlantic/Azores',
            ),
            180 => 
            array (
                'id' => 2681,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Bafatá',
                'timezone' => 'Africa/Bissau',
            ),
            181 => 
            array (
                'id' => 2682,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Quinara',
                'timezone' => 'Africa/Bissau',
            ),
            182 => 
            array (
                'id' => 2683,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Oio',
                'timezone' => 'Africa/Bissau',
            ),
            183 => 
            array (
                'id' => 2684,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Bolama',
                'timezone' => 'Africa/Bissau',
            ),
            184 => 
            array (
                'id' => 2685,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Cacheu',
                'timezone' => 'Africa/Bissau',
            ),
            185 => 
            array (
                'id' => 2686,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Tombali',
                'timezone' => 'Africa/Bissau',
            ),
            186 => 
            array (
                'id' => 2687,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Gabú',
                'timezone' => 'Africa/Bissau',
            ),
            187 => 
            array (
                'id' => 2688,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Bissau',
                'timezone' => 'Africa/Bissau',
            ),
            188 => 
            array (
                'id' => 2689,
                'country_id' => 624,
                'iso' => '',
                'name' => 'Biombo',
                'timezone' => 'Africa/Bissau',
            ),
            189 => 
            array (
                'id' => 2690,
                'country_id' => 626,
                'iso' => '',
                'name' => 'Bobonaro',
                'timezone' => 'Asia/Dili',
            ),
            190 => 
            array (
                'id' => 2691,
                'country_id' => 630,
                'iso' => '',
                'name' => 'Puerto Rico',
                'timezone' => 'America/Puerto_Rico',
            ),
            191 => 
            array (
                'id' => 2692,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Ad Dawḩah',
                'timezone' => 'Asia/Qatar',
            ),
            192 => 
            array (
                'id' => 2693,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Al Ghuwayrīyah',
                'timezone' => 'Asia/Qatar',
            ),
            193 => 
            array (
                'id' => 2694,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Al Jumaylīyah',
                'timezone' => 'Asia/Qatar',
            ),
            194 => 
            array (
                'id' => 2695,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Al Khawr',
                'timezone' => 'Asia/Qatar',
            ),
            195 => 
            array (
                'id' => 2696,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Al Wakrah Municipality',
                'timezone' => 'Asia/Qatar',
            ),
            196 => 
            array (
                'id' => 2697,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Ar Rayyān',
                'timezone' => 'Asia/Qatar',
            ),
            197 => 
            array (
                'id' => 2698,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Jarayan al Batinah',
                'timezone' => 'Asia/Qatar',
            ),
            198 => 
            array (
                'id' => 2699,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Madīnat ash Shamāl',
                'timezone' => 'Asia/Qatar',
            ),
            199 => 
            array (
                'id' => 2700,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Umm Şalāl',
                'timezone' => 'Asia/Qatar',
            ),
            200 => 
            array (
                'id' => 2701,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Al Wakrah',
                'timezone' => 'Asia/Qatar',
            ),
            201 => 
            array (
                'id' => 2702,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Jarayān al Bāţinah',
                'timezone' => 'Asia/Qatar',
            ),
            202 => 
            array (
                'id' => 2703,
                'country_id' => 634,
                'iso' => '',
                'name' => 'Umm Sa‘īd',
                'timezone' => 'Asia/Qatar',
            ),
            203 => 
            array (
                'id' => 2704,
                'country_id' => 638,
                'iso' => '',
                'name' => 'Réunion',
                'timezone' => 'Indian/Reunion',
            ),
            204 => 
            array (
                'id' => 2705,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Alba',
                'timezone' => 'Europe/Bucharest',
            ),
            205 => 
            array (
                'id' => 2706,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Arad',
                'timezone' => 'Europe/Bucharest',
            ),
            206 => 
            array (
                'id' => 2707,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Argeş',
                'timezone' => 'Europe/Bucharest',
            ),
            207 => 
            array (
                'id' => 2708,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Bacău',
                'timezone' => 'Europe/Bucharest',
            ),
            208 => 
            array (
                'id' => 2709,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Bihor',
                'timezone' => 'Europe/Bucharest',
            ),
            209 => 
            array (
                'id' => 2710,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Bistriţa-Năsăud',
                'timezone' => 'Europe/Bucharest',
            ),
            210 => 
            array (
                'id' => 2711,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Botoşani',
                'timezone' => 'Europe/Bucharest',
            ),
            211 => 
            array (
                'id' => 2712,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Brăila',
                'timezone' => 'Europe/Bucharest',
            ),
            212 => 
            array (
                'id' => 2713,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Braşov',
                'timezone' => 'Europe/Bucharest',
            ),
            213 => 
            array (
                'id' => 2714,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Bucureşti',
                'timezone' => 'Europe/Bucharest',
            ),
            214 => 
            array (
                'id' => 2715,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Buzău',
                'timezone' => 'Europe/Bucharest',
            ),
            215 => 
            array (
                'id' => 2716,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Caraş-Severin',
                'timezone' => 'Europe/Bucharest',
            ),
            216 => 
            array (
                'id' => 2717,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Cluj',
                'timezone' => 'Europe/Bucharest',
            ),
            217 => 
            array (
                'id' => 2718,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Constanţa',
                'timezone' => 'Europe/Bucharest',
            ),
            218 => 
            array (
                'id' => 2719,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Covasna',
                'timezone' => 'Europe/Bucharest',
            ),
            219 => 
            array (
                'id' => 2720,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Dâmboviţa',
                'timezone' => 'Europe/Bucharest',
            ),
            220 => 
            array (
                'id' => 2721,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Dolj',
                'timezone' => 'Europe/Bucharest',
            ),
            221 => 
            array (
                'id' => 2722,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Galaţi',
                'timezone' => 'Europe/Bucharest',
            ),
            222 => 
            array (
                'id' => 2723,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Gorj',
                'timezone' => 'Europe/Bucharest',
            ),
            223 => 
            array (
                'id' => 2724,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Harghita',
                'timezone' => 'Europe/Bucharest',
            ),
            224 => 
            array (
                'id' => 2725,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Hunedoara',
                'timezone' => 'Europe/Bucharest',
            ),
            225 => 
            array (
                'id' => 2726,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Ialomiţa',
                'timezone' => 'Europe/Bucharest',
            ),
            226 => 
            array (
                'id' => 2727,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Iaşi',
                'timezone' => 'Europe/Bucharest',
            ),
            227 => 
            array (
                'id' => 2728,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Maramureş',
                'timezone' => 'Europe/Bucharest',
            ),
            228 => 
            array (
                'id' => 2729,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Mehedinţi',
                'timezone' => 'Europe/Bucharest',
            ),
            229 => 
            array (
                'id' => 2730,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Mureş',
                'timezone' => 'Europe/Bucharest',
            ),
            230 => 
            array (
                'id' => 2731,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Neamţ',
                'timezone' => 'Europe/Bucharest',
            ),
            231 => 
            array (
                'id' => 2732,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Olt',
                'timezone' => 'Europe/Bucharest',
            ),
            232 => 
            array (
                'id' => 2733,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Prahova',
                'timezone' => 'Europe/Bucharest',
            ),
            233 => 
            array (
                'id' => 2734,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Sălaj',
                'timezone' => 'Europe/Bucharest',
            ),
            234 => 
            array (
                'id' => 2735,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Satu Mare',
                'timezone' => 'Europe/Bucharest',
            ),
            235 => 
            array (
                'id' => 2736,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Sibiu',
                'timezone' => 'Europe/Bucharest',
            ),
            236 => 
            array (
                'id' => 2737,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Suceava',
                'timezone' => 'Europe/Bucharest',
            ),
            237 => 
            array (
                'id' => 2738,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Teleorman',
                'timezone' => 'Europe/Bucharest',
            ),
            238 => 
            array (
                'id' => 2739,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Timiş',
                'timezone' => 'Europe/Bucharest',
            ),
            239 => 
            array (
                'id' => 2740,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Tulcea',
                'timezone' => 'Europe/Bucharest',
            ),
            240 => 
            array (
                'id' => 2741,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Vaslui',
                'timezone' => 'Europe/Bucharest',
            ),
            241 => 
            array (
                'id' => 2742,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Vâlcea',
                'timezone' => 'Europe/Bucharest',
            ),
            242 => 
            array (
                'id' => 2743,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Judeţul Vrancea',
                'timezone' => 'Europe/Bucharest',
            ),
            243 => 
            array (
                'id' => 2744,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Călăraşi',
                'timezone' => 'Europe/Bucharest',
            ),
            244 => 
            array (
                'id' => 2745,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Giurgiu',
                'timezone' => 'Europe/Bucharest',
            ),
            245 => 
            array (
                'id' => 2746,
                'country_id' => 642,
                'iso' => '',
                'name' => 'Ilfov',
                'timezone' => 'Europe/Bucharest',
            ),
            246 => 
            array (
                'id' => 2747,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Adygeya',
                'timezone' => 'Europe/Moscow',
            ),
            247 => 
            array (
                'id' => 2748,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Altay',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            248 => 
            array (
                'id' => 2749,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Altayskiy Kray',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            249 => 
            array (
                'id' => 2750,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Amur',
                'timezone' => 'Asia/Yakutsk',
            ),
            250 => 
            array (
                'id' => 2751,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Arkhangelskaya oblast',
                'timezone' => 'Europe/Moscow',
            ),
            251 => 
            array (
                'id' => 2752,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Astrakhan',
                'timezone' => 'Europe/Samara',
            ),
            252 => 
            array (
                'id' => 2753,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Bashkortostan',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            253 => 
            array (
                'id' => 2754,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Belgorod',
                'timezone' => 'Europe/Moscow',
            ),
            254 => 
            array (
                'id' => 2755,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Brjansk',
                'timezone' => 'Europe/Moscow',
            ),
            255 => 
            array (
                'id' => 2756,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Buryatiya',
                'timezone' => 'Asia/Irkutsk',
            ),
            256 => 
            array (
                'id' => 2757,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Chechnya',
                'timezone' => 'Europe/Moscow',
            ),
            257 => 
            array (
                'id' => 2758,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tsjeljabinsk',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            258 => 
            array (
                'id' => 2759,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Zabaïkalski Kray',
                'timezone' => 'Asia/Yakutsk',
            ),
            259 => 
            array (
                'id' => 2760,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Chukotskiy Avtonomnyy Okrug',
                'timezone' => 'Asia/Kamchatka',
            ),
            260 => 
            array (
                'id' => 2761,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Chuvashia',
                'timezone' => 'Europe/Moscow',
            ),
            261 => 
            array (
                'id' => 2762,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Dagestan',
                'timezone' => 'Europe/Moscow',
            ),
            262 => 
            array (
                'id' => 2763,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Ingushetiya',
                'timezone' => 'Europe/Moscow',
            ),
            263 => 
            array (
                'id' => 2764,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Irkutsk',
                'timezone' => 'Asia/Irkutsk',
            ),
            264 => 
            array (
                'id' => 2765,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Ivanovo',
                'timezone' => 'Europe/Moscow',
            ),
            265 => 
            array (
                'id' => 2766,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kabardino-Balkariya',
                'timezone' => 'Europe/Moscow',
            ),
            266 => 
            array (
                'id' => 2767,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kaliningrad',
                'timezone' => 'Europe/Kaliningrad',
            ),
            267 => 
            array (
                'id' => 2768,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kalmykiya',
                'timezone' => 'Europe/Moscow',
            ),
            268 => 
            array (
                'id' => 2769,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kaluga',
                'timezone' => 'Europe/Moscow',
            ),
            269 => 
            array (
                'id' => 2770,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Karachayevo-Cherkesiya',
                'timezone' => 'Europe/Moscow',
            ),
            270 => 
            array (
                'id' => 2771,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kareliya',
                'timezone' => 'Europe/Moscow',
            ),
            271 => 
            array (
                'id' => 2772,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kemerovo',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            272 => 
            array (
                'id' => 2773,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Khabarovsk Krai',
                'timezone' => 'Asia/Vladivostok',
            ),
            273 => 
            array (
                'id' => 2774,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Khakasiya',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            274 => 
            array (
                'id' => 2775,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Khanty-Mansiyskiy Avtonomnyy Okrug',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            275 => 
            array (
                'id' => 2776,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kirov',
                'timezone' => 'Europe/Samara',
            ),
            276 => 
            array (
                'id' => 2777,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Komi',
                'timezone' => 'Europe/Moscow',
            ),
            277 => 
            array (
                'id' => 2778,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kostroma',
                'timezone' => 'Europe/Moscow',
            ),
            278 => 
            array (
                'id' => 2779,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Krasnodarskiy Kray',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            279 => 
            array (
                'id' => 2780,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kurgan',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            280 => 
            array (
                'id' => 2781,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kursk',
                'timezone' => 'Europe/Moscow',
            ),
            281 => 
            array (
                'id' => 2782,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Leningradskaya Oblastʼ',
                'timezone' => 'Europe/Moscow',
            ),
            282 => 
            array (
                'id' => 2783,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Lipetsk',
                'timezone' => 'Europe/Moscow',
            ),
            283 => 
            array (
                'id' => 2784,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Magadan',
                'timezone' => 'Asia/Magadan',
            ),
            284 => 
            array (
                'id' => 2785,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Mariy-El',
                'timezone' => 'Europe/Moscow',
            ),
            285 => 
            array (
                'id' => 2786,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Mordoviya',
                'timezone' => 'Europe/Moscow',
            ),
            286 => 
            array (
                'id' => 2787,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Moskovskaya Oblastʼ',
                'timezone' => 'Europe/Moscow',
            ),
            287 => 
            array (
                'id' => 2788,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Moscow',
                'timezone' => 'Europe/Moscow',
            ),
            288 => 
            array (
                'id' => 2789,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Murmansk Oblast',
                'timezone' => 'Europe/Moscow',
            ),
            289 => 
            array (
                'id' => 2790,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Nenetskiy Avtonomnyy Okrug',
                'timezone' => 'Europe/Moscow',
            ),
            290 => 
            array (
                'id' => 2791,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Nizjnij Novgorod',
                'timezone' => 'Europe/Moscow',
            ),
            291 => 
            array (
                'id' => 2792,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Novgorod',
                'timezone' => 'Europe/Moscow',
            ),
            292 => 
            array (
                'id' => 2793,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Novosibirsk',
                'timezone' => 'Asia/Novosibirsk',
            ),
            293 => 
            array (
                'id' => 2794,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Omsk',
                'timezone' => 'Asia/Omsk',
            ),
            294 => 
            array (
                'id' => 2795,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Orenburg',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            295 => 
            array (
                'id' => 2796,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Orjol',
                'timezone' => 'Europe/Moscow',
            ),
            296 => 
            array (
                'id' => 2797,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Penza',
                'timezone' => 'Europe/Moscow',
            ),
            297 => 
            array (
                'id' => 2798,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Primorskiy Kray',
                'timezone' => 'Asia/Vladivostok',
            ),
            298 => 
            array (
                'id' => 2799,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Pskov',
                'timezone' => 'Europe/Moscow',
            ),
            299 => 
            array (
                'id' => 2800,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Rostov',
                'timezone' => 'Europe/Moscow',
            ),
            300 => 
            array (
                'id' => 2801,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Rjazan',
                'timezone' => 'Europe/Moscow',
            ),
            301 => 
            array (
                'id' => 2802,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Sakha',
                'timezone' => 'Asia/Vladivostok',
            ),
            302 => 
            array (
                'id' => 2803,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Sakhalin',
                'timezone' => 'Asia/Vladivostok',
            ),
            303 => 
            array (
                'id' => 2804,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Samara',
                'timezone' => 'Europe/Samara',
            ),
            304 => 
            array (
                'id' => 2805,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Sankt-Peterburg',
                'timezone' => 'Europe/Moscow',
            ),
            305 => 
            array (
                'id' => 2806,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Saratov',
                'timezone' => 'Europe/Samara',
            ),
            306 => 
            array (
                'id' => 2807,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Severnaya Osetiya-Alaniya',
                'timezone' => 'Europe/Moscow',
            ),
            307 => 
            array (
                'id' => 2808,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Smolensk',
                'timezone' => 'Europe/Moscow',
            ),
            308 => 
            array (
                'id' => 2809,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Stavropolʼskiy Kray',
                'timezone' => 'Europe/Moscow',
            ),
            309 => 
            array (
                'id' => 2810,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Sverdlovsk',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            310 => 
            array (
                'id' => 2811,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tambov',
                'timezone' => 'Europe/Moscow',
            ),
            311 => 
            array (
                'id' => 2812,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tatarstan',
                'timezone' => 'Europe/Moscow',
            ),
            312 => 
            array (
                'id' => 2813,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tomsk',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            313 => 
            array (
                'id' => 2814,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tula',
                'timezone' => 'Europe/Moscow',
            ),
            314 => 
            array (
                'id' => 2815,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tverskaya Oblast’',
                'timezone' => 'Europe/Moscow',
            ),
            315 => 
            array (
                'id' => 2816,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tjumen',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            316 => 
            array (
                'id' => 2817,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Tyva',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            317 => 
            array (
                'id' => 2818,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Udmurtiya',
                'timezone' => 'Europe/Samara',
            ),
            318 => 
            array (
                'id' => 2819,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Uljanovsk',
                'timezone' => 'Europe/Samara',
            ),
            319 => 
            array (
                'id' => 2820,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Vladimir',
                'timezone' => 'Europe/Moscow',
            ),
            320 => 
            array (
                'id' => 2821,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Volgograd',
                'timezone' => 'Europe/Samara',
            ),
            321 => 
            array (
                'id' => 2822,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Vologda',
                'timezone' => 'Europe/Moscow',
            ),
            322 => 
            array (
                'id' => 2823,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Voronezj',
                'timezone' => 'Europe/Moscow',
            ),
            323 => 
            array (
                'id' => 2824,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Yamalo-Nenetskiy Avtonomnyy Okrug',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            324 => 
            array (
                'id' => 2825,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Jaroslavl',
                'timezone' => 'Europe/Moscow',
            ),
            325 => 
            array (
                'id' => 2826,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Jewish Autonomous Oblast',
                'timezone' => 'Asia/Vladivostok',
            ),
            326 => 
            array (
                'id' => 2827,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Perm',
                'timezone' => 'Asia/Yekaterinburg',
            ),
            327 => 
            array (
                'id' => 2828,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Krasnoyarskiy Kray',
                'timezone' => 'Asia/Krasnoyarsk',
            ),
            328 => 
            array (
                'id' => 2829,
                'country_id' => 643,
                'iso' => '',
                'name' => 'Kamtsjatka',
                'timezone' => 'Asia/Kamchatka',
            ),
            329 => 
            array (
                'id' => 2830,
                'country_id' => 643,
                'iso' => '',
                'name' => 'RSJA',
                'timezone' => 'Europe/Moscow',
            ),
            330 => 
            array (
                'id' => 2831,
                'country_id' => 646,
                'iso' => '',
                'name' => 'Eastern Province',
                'timezone' => 'Africa/Kigali',
            ),
            331 => 
            array (
                'id' => 2832,
                'country_id' => 646,
                'iso' => '',
                'name' => 'Kigali City',
                'timezone' => 'Africa/Kigali',
            ),
            332 => 
            array (
                'id' => 2833,
                'country_id' => 646,
                'iso' => '',
                'name' => 'Northern Province',
                'timezone' => 'Africa/Kigali',
            ),
            333 => 
            array (
                'id' => 2834,
                'country_id' => 646,
                'iso' => '',
                'name' => 'Western Province',
                'timezone' => 'Africa/Kigali',
            ),
            334 => 
            array (
                'id' => 2835,
                'country_id' => 646,
                'iso' => '',
                'name' => 'Southern Province',
                'timezone' => 'Africa/Kigali',
            ),
            335 => 
            array (
                'id' => 2836,
                'country_id' => 654,
                'iso' => '',
                'name' => 'Ascension',
                'timezone' => 'Atlantic/St_Helena',
            ),
            336 => 
            array (
                'id' => 2837,
                'country_id' => 654,
                'iso' => '',
                'name' => 'Saint Helena',
                'timezone' => 'Atlantic/St_Helena',
            ),
            337 => 
            array (
                'id' => 2838,
                'country_id' => 654,
                'iso' => '',
                'name' => 'Tristan da Cunha',
                'timezone' => 'Atlantic/St_Helena',
            ),
            338 => 
            array (
                'id' => 2839,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Christ Church Nichola Town',
                'timezone' => 'America/St_Kitts',
            ),
            339 => 
            array (
                'id' => 2840,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Anne Sandy Point',
                'timezone' => 'America/St_Kitts',
            ),
            340 => 
            array (
                'id' => 2841,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint George Basseterre',
                'timezone' => 'America/St_Kitts',
            ),
            341 => 
            array (
                'id' => 2842,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint George Gingerland',
                'timezone' => 'America/St_Kitts',
            ),
            342 => 
            array (
                'id' => 2843,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint James Windwa',
                'timezone' => 'America/St_Kitts',
            ),
            343 => 
            array (
                'id' => 2844,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint John Capesterre',
                'timezone' => 'America/St_Kitts',
            ),
            344 => 
            array (
                'id' => 2845,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint John Figtree',
                'timezone' => 'America/St_Kitts',
            ),
            345 => 
            array (
                'id' => 2846,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Mary Cayon',
                'timezone' => 'America/St_Kitts',
            ),
            346 => 
            array (
                'id' => 2847,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Paul Capesterre',
                'timezone' => 'America/St_Kitts',
            ),
            347 => 
            array (
                'id' => 2848,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Paul Charlestown',
                'timezone' => 'America/St_Kitts',
            ),
            348 => 
            array (
                'id' => 2849,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Peter Basseterre',
                'timezone' => 'America/St_Kitts',
            ),
            349 => 
            array (
                'id' => 2850,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Thomas Lowland',
                'timezone' => 'America/St_Kitts',
            ),
            350 => 
            array (
                'id' => 2851,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Saint Thomas Middle Island',
                'timezone' => 'America/St_Kitts',
            ),
            351 => 
            array (
                'id' => 2852,
                'country_id' => 659,
                'iso' => '',
                'name' => 'Trinity Palmetto Point',
                'timezone' => 'America/St_Kitts',
            ),
            352 => 
            array (
                'id' => 2853,
                'country_id' => 660,
                'iso' => '',
                'name' => 'Anguilla',
                'timezone' => 'America/Anguilla',
            ),
            353 => 
            array (
                'id' => 2854,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Anse-la-Raye',
                'timezone' => 'America/St_Lucia',
            ),
            354 => 
            array (
                'id' => 2855,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Dauphin',
                'timezone' => 'America/St_Lucia',
            ),
            355 => 
            array (
                'id' => 2856,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Castries',
                'timezone' => 'America/St_Lucia',
            ),
            356 => 
            array (
                'id' => 2857,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Choiseul',
                'timezone' => 'America/St_Lucia',
            ),
            357 => 
            array (
                'id' => 2858,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Dennery',
                'timezone' => 'America/St_Lucia',
            ),
            358 => 
            array (
                'id' => 2859,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Gros-Islet',
                'timezone' => 'America/St_Lucia',
            ),
            359 => 
            array (
                'id' => 2860,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Laborie',
                'timezone' => 'America/St_Lucia',
            ),
            360 => 
            array (
                'id' => 2861,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Micoud',
                'timezone' => 'America/St_Lucia',
            ),
            361 => 
            array (
                'id' => 2862,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Soufrière',
                'timezone' => 'America/St_Lucia',
            ),
            362 => 
            array (
                'id' => 2863,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Vieux-Fort',
                'timezone' => 'America/St_Lucia',
            ),
            363 => 
            array (
                'id' => 2864,
                'country_id' => 662,
                'iso' => '',
                'name' => 'Praslin',
                'timezone' => 'America/St_Lucia',
            ),
            364 => 
            array (
                'id' => 2865,
                'country_id' => 666,
                'iso' => '',
                'name' => 'Saint-Pierre-et-Miquelon',
                'timezone' => 'America/Miquelon',
            ),
            365 => 
            array (
                'id' => 2866,
                'country_id' => 670,
                'iso' => '',
                'name' => 'Charlotte',
                'timezone' => 'America/St_Vincent',
            ),
            366 => 
            array (
                'id' => 2867,
                'country_id' => 670,
                'iso' => '',
                'name' => 'Saint Andrew',
                'timezone' => 'America/St_Vincent',
            ),
            367 => 
            array (
                'id' => 2868,
                'country_id' => 670,
                'iso' => '',
                'name' => 'Saint David',
                'timezone' => 'America/St_Vincent',
            ),
            368 => 
            array (
                'id' => 2869,
                'country_id' => 670,
                'iso' => '',
                'name' => 'Saint George',
                'timezone' => 'America/St_Vincent',
            ),
            369 => 
            array (
                'id' => 2870,
                'country_id' => 670,
                'iso' => '',
                'name' => 'Saint Patrick',
                'timezone' => 'America/St_Vincent',
            ),
            370 => 
            array (
                'id' => 2871,
                'country_id' => 670,
                'iso' => '',
                'name' => 'Grenadines',
                'timezone' => 'America/St_Vincent',
            ),
            371 => 
            array (
                'id' => 2872,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Acquaviva',
                'timezone' => 'Europe/San_Marino',
            ),
            372 => 
            array (
                'id' => 2873,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Chiesanuova',
                'timezone' => 'Europe/San_Marino',
            ),
            373 => 
            array (
                'id' => 2874,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Domagnano',
                'timezone' => 'Europe/San_Marino',
            ),
            374 => 
            array (
                'id' => 2875,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Faetano',
                'timezone' => 'Europe/San_Marino',
            ),
            375 => 
            array (
                'id' => 2876,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Fiorentino',
                'timezone' => 'Europe/San_Marino',
            ),
            376 => 
            array (
                'id' => 2877,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Borgo Maggiore',
                'timezone' => 'Europe/San_Marino',
            ),
            377 => 
            array (
                'id' => 2878,
                'country_id' => 674,
                'iso' => '',
                'name' => 'San Marino',
                'timezone' => 'Europe/San_Marino',
            ),
            378 => 
            array (
                'id' => 2879,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Montegiardino',
                'timezone' => 'Europe/San_Marino',
            ),
            379 => 
            array (
                'id' => 2880,
                'country_id' => 674,
                'iso' => '',
                'name' => 'Serravalle',
                'timezone' => 'Europe/San_Marino',
            ),
            380 => 
            array (
                'id' => 2881,
                'country_id' => 678,
                'iso' => '',
                'name' => 'Príncipe',
                'timezone' => 'Africa/Sao_Tome',
            ),
            381 => 
            array (
                'id' => 2882,
                'country_id' => 678,
                'iso' => '',
                'name' => 'Príncipe',
                'timezone' => 'Africa/Sao_Tome',
            ),
            382 => 
            array (
                'id' => 2883,
                'country_id' => 678,
                'iso' => '',
                'name' => 'São Tomé',
                'timezone' => 'Africa/Sao_Tome',
            ),
            383 => 
            array (
                'id' => 2884,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Al Bāḩah',
                'timezone' => 'Asia/Riyadh',
            ),
            384 => 
            array (
                'id' => 2885,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Al Madīnah',
                'timezone' => 'Asia/Riyadh',
            ),
            385 => 
            array (
                'id' => 2886,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Ash Sharqīyah',
                'timezone' => 'Asia/Riyadh',
            ),
            386 => 
            array (
                'id' => 2887,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Al Qaşīm',
                'timezone' => 'Asia/Riyadh',
            ),
            387 => 
            array (
                'id' => 2888,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Ar Riyāḑ',
                'timezone' => 'Asia/Riyadh',
            ),
            388 => 
            array (
                'id' => 2889,
                'country_id' => 682,
                'iso' => '',
                'name' => '‘Asīr',
                'timezone' => 'Asia/Riyadh',
            ),
            389 => 
            array (
                'id' => 2890,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Ḩāʼil',
                'timezone' => 'Asia/Riyadh',
            ),
            390 => 
            array (
                'id' => 2891,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Makkah',
                'timezone' => 'Asia/Riyadh',
            ),
            391 => 
            array (
                'id' => 2892,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Northern Borders Region',
                'timezone' => 'Asia/Riyadh',
            ),
            392 => 
            array (
                'id' => 2893,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Najrān',
                'timezone' => 'Asia/Riyadh',
            ),
            393 => 
            array (
                'id' => 2894,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Jīzān',
                'timezone' => 'Asia/Riyadh',
            ),
            394 => 
            array (
                'id' => 2895,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Tabūk',
                'timezone' => 'Asia/Riyadh',
            ),
            395 => 
            array (
                'id' => 2896,
                'country_id' => 682,
                'iso' => '',
                'name' => 'Al Jawf',
                'timezone' => 'Asia/Riyadh',
            ),
            396 => 
            array (
                'id' => 2897,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Dakar',
                'timezone' => 'Africa/Dakar',
            ),
            397 => 
            array (
                'id' => 2898,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Diourbel',
                'timezone' => 'Africa/Dakar',
            ),
            398 => 
            array (
                'id' => 2899,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Saint-Louis',
                'timezone' => 'Africa/Dakar',
            ),
            399 => 
            array (
                'id' => 2900,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Tambacounda',
                'timezone' => 'Africa/Dakar',
            ),
            400 => 
            array (
                'id' => 2901,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Thiès',
                'timezone' => 'Africa/Dakar',
            ),
            401 => 
            array (
                'id' => 2902,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Louga',
                'timezone' => 'Africa/Dakar',
            ),
            402 => 
            array (
                'id' => 2903,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Fatick',
                'timezone' => 'Africa/Dakar',
            ),
            403 => 
            array (
                'id' => 2904,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Kaolack',
                'timezone' => 'Africa/Dakar',
            ),
            404 => 
            array (
                'id' => 2905,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Kolda Region',
                'timezone' => 'Africa/Dakar',
            ),
            405 => 
            array (
                'id' => 2906,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Ziguinchor',
                'timezone' => 'Africa/Dakar',
            ),
            406 => 
            array (
                'id' => 2907,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Louga',
                'timezone' => 'Africa/Dakar',
            ),
            407 => 
            array (
                'id' => 2908,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Saint-Louis',
                'timezone' => 'Africa/Dakar',
            ),
            408 => 
            array (
                'id' => 2909,
                'country_id' => 686,
                'iso' => '',
                'name' => 'Matam',
                'timezone' => 'Africa/Dakar',
            ),
            409 => 
            array (
                'id' => 2910,
                'country_id' => 688,
                'iso' => '',
                'name' => 'Autonomna Pokrajina Vojvodina',
                'timezone' => 'Europe/Belgrade',
            ),
            410 => 
            array (
                'id' => 2911,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Anse aux Pins',
                'timezone' => 'Indian/Mahe',
            ),
            411 => 
            array (
                'id' => 2912,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Anse Boileau',
                'timezone' => 'Indian/Mahe',
            ),
            412 => 
            array (
                'id' => 2913,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Anse Etoile',
                'timezone' => 'Indian/Mahe',
            ),
            413 => 
            array (
                'id' => 2914,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Anse Louis',
                'timezone' => 'Indian/Mahe',
            ),
            414 => 
            array (
                'id' => 2915,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Anse Royale',
                'timezone' => 'Indian/Mahe',
            ),
            415 => 
            array (
                'id' => 2916,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Baie Lazare',
                'timezone' => 'Indian/Mahe',
            ),
            416 => 
            array (
                'id' => 2917,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Baie Sainte Anne',
                'timezone' => 'Indian/Mahe',
            ),
            417 => 
            array (
                'id' => 2918,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Beau Vallon',
                'timezone' => 'Indian/Mahe',
            ),
            418 => 
            array (
                'id' => 2919,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Bel Air',
                'timezone' => 'Indian/Mahe',
            ),
            419 => 
            array (
                'id' => 2920,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Bel Ombre',
                'timezone' => 'Indian/Mahe',
            ),
            420 => 
            array (
                'id' => 2921,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Cascade',
                'timezone' => 'Indian/Mahe',
            ),
            421 => 
            array (
                'id' => 2922,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Glacis',
                'timezone' => 'Indian/Mahe',
            ),
            422 => 
            array (
                'id' => 2923,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Saint Thomas Middle Island Parish',
                'timezone' => 'Indian/Mahe',
            ),
            423 => 
            array (
                'id' => 2924,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Grand Anse Praslin',
                'timezone' => 'Indian/Mahe',
            ),
            424 => 
            array (
                'id' => 2925,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Trinity Palmetto Point Parish',
                'timezone' => 'Indian/Mahe',
            ),
            425 => 
            array (
                'id' => 2926,
                'country_id' => 690,
                'iso' => '',
                'name' => 'La Riviere Anglaise',
                'timezone' => 'Indian/Mahe',
            ),
            426 => 
            array (
                'id' => 2927,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Mont Buxton',
                'timezone' => 'Indian/Mahe',
            ),
            427 => 
            array (
                'id' => 2928,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Mont Fleuri',
                'timezone' => 'Indian/Mahe',
            ),
            428 => 
            array (
                'id' => 2929,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Plaisance',
                'timezone' => 'Indian/Mahe',
            ),
            429 => 
            array (
                'id' => 2930,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Pointe Larue',
                'timezone' => 'Indian/Mahe',
            ),
            430 => 
            array (
                'id' => 2931,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Port Glaud',
                'timezone' => 'Indian/Mahe',
            ),
            431 => 
            array (
                'id' => 2932,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Saint Louis',
                'timezone' => 'Indian/Mahe',
            ),
            432 => 
            array (
                'id' => 2933,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Takamaka',
                'timezone' => 'Indian/Mahe',
            ),
            433 => 
            array (
                'id' => 2934,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Anse aux Pins',
                'timezone' => 'Indian/Mahe',
            ),
            434 => 
            array (
                'id' => 2935,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Inner Islands',
                'timezone' => 'Indian/Mahe',
            ),
            435 => 
            array (
                'id' => 2936,
                'country_id' => 690,
                'iso' => '',
                'name' => 'English River',
                'timezone' => 'Indian/Mahe',
            ),
            436 => 
            array (
                'id' => 2937,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Port Glaud',
                'timezone' => 'Indian/Mahe',
            ),
            437 => 
            array (
                'id' => 2938,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Baie Lazare',
                'timezone' => 'Indian/Mahe',
            ),
            438 => 
            array (
                'id' => 2939,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Beau Vallon',
                'timezone' => 'Indian/Mahe',
            ),
            439 => 
            array (
                'id' => 2940,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Bel Ombre',
                'timezone' => 'Indian/Mahe',
            ),
            440 => 
            array (
                'id' => 2941,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Glacis',
                'timezone' => 'Indian/Mahe',
            ),
            441 => 
            array (
                'id' => 2942,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Grand Anse Mahe',
                'timezone' => 'Indian/Mahe',
            ),
            442 => 
            array (
                'id' => 2943,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Grand Anse Praslin',
                'timezone' => 'Indian/Mahe',
            ),
            443 => 
            array (
                'id' => 2944,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Inner Islands',
                'timezone' => 'Indian/Mahe',
            ),
            444 => 
            array (
                'id' => 2945,
                'country_id' => 690,
                'iso' => '',
                'name' => 'English River',
                'timezone' => 'Indian/Mahe',
            ),
            445 => 
            array (
                'id' => 2946,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Mont Fleuri',
                'timezone' => 'Indian/Mahe',
            ),
            446 => 
            array (
                'id' => 2947,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Plaisance',
                'timezone' => 'Indian/Mahe',
            ),
            447 => 
            array (
                'id' => 2948,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Pointe Larue',
                'timezone' => 'Indian/Mahe',
            ),
            448 => 
            array (
                'id' => 2949,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Port Glaud',
                'timezone' => 'Indian/Mahe',
            ),
            449 => 
            array (
                'id' => 2950,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Takamaka',
                'timezone' => 'Indian/Mahe',
            ),
            450 => 
            array (
                'id' => 2951,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Au Cap',
                'timezone' => 'Indian/Mahe',
            ),
            451 => 
            array (
                'id' => 2952,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Les Mamelles',
                'timezone' => 'Indian/Mahe',
            ),
            452 => 
            array (
                'id' => 2953,
                'country_id' => 690,
                'iso' => '',
                'name' => 'Roche Caiman',
                'timezone' => 'Indian/Mahe',
            ),
            453 => 
            array (
                'id' => 2954,
                'country_id' => 694,
                'iso' => '',
                'name' => 'Eastern Province',
                'timezone' => 'Africa/Freetown',
            ),
            454 => 
            array (
                'id' => 2955,
                'country_id' => 694,
                'iso' => '',
                'name' => 'Northern Province',
                'timezone' => 'Africa/Freetown',
            ),
            455 => 
            array (
                'id' => 2956,
                'country_id' => 694,
                'iso' => '',
                'name' => 'Southern Province',
                'timezone' => 'Africa/Freetown',
            ),
            456 => 
            array (
                'id' => 2957,
                'country_id' => 694,
                'iso' => '',
                'name' => 'Western Area',
                'timezone' => 'Africa/Freetown',
            ),
            457 => 
            array (
                'id' => 2958,
                'country_id' => 702,
                'iso' => '',
                'name' => 'Singapore',
                'timezone' => 'Asia/Singapore',
            ),
            458 => 
            array (
                'id' => 2959,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Banskobystrický',
                'timezone' => 'Europe/Bratislava',
            ),
            459 => 
            array (
                'id' => 2960,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Bratislavský',
                'timezone' => 'Europe/Bratislava',
            ),
            460 => 
            array (
                'id' => 2961,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Košický',
                'timezone' => 'Europe/Bratislava',
            ),
            461 => 
            array (
                'id' => 2962,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Nitriansky',
                'timezone' => 'Europe/Bratislava',
            ),
            462 => 
            array (
                'id' => 2963,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Prešovský',
                'timezone' => 'Europe/Bratislava',
            ),
            463 => 
            array (
                'id' => 2964,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Trenčiansky',
                'timezone' => 'Europe/Bratislava',
            ),
            464 => 
            array (
                'id' => 2965,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Trnavský',
                'timezone' => 'Europe/Bratislava',
            ),
            465 => 
            array (
                'id' => 2966,
                'country_id' => 703,
                'iso' => '',
                'name' => 'Žilinský',
                'timezone' => 'Europe/Bratislava',
            ),
            466 => 
            array (
                'id' => 2967,
                'country_id' => 704,
                'iso' => '',
                'name' => 'An Giang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            467 => 
            array (
                'id' => 2968,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bắc Thái Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            468 => 
            array (
                'id' => 2969,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bến Tre',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            469 => 
            array (
                'id' => 2970,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Cao Bang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            470 => 
            array (
                'id' => 2971,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Cao Bằng',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            471 => 
            array (
                'id' => 2972,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ten Bai',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            472 => 
            array (
                'id' => 2973,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ðồng Tháp',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            473 => 
            array (
                'id' => 2974,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hà Bắc Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            474 => 
            array (
                'id' => 2975,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hải Hưng Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            475 => 
            array (
                'id' => 2976,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hải Phòng',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            476 => 
            array (
                'id' => 2977,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hoa Binh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            477 => 
            array (
                'id' => 2978,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ha Tay',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            478 => 
            array (
                'id' => 2979,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hồ Chí Minh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            479 => 
            array (
                'id' => 2980,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Kiến Giang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            480 => 
            array (
                'id' => 2981,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Lâm Ðồng',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            481 => 
            array (
                'id' => 2982,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Long An',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            482 => 
            array (
                'id' => 2983,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Minh Hải Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            483 => 
            array (
                'id' => 2984,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Thua Thien-Hue',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            484 => 
            array (
                'id' => 2985,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quang Nam',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            485 => 
            array (
                'id' => 2986,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Kon Tum',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            486 => 
            array (
                'id' => 2987,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quảng Nam-Ðà Nẵng Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            487 => 
            array (
                'id' => 2988,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quảng Ninh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            488 => 
            array (
                'id' => 2989,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Sông Bé Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            489 => 
            array (
                'id' => 2990,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Sơn La',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            490 => 
            array (
                'id' => 2991,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Tây Ninh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            491 => 
            array (
                'id' => 2992,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Thanh Hóa',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            492 => 
            array (
                'id' => 2993,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Thái Bình',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            493 => 
            array (
                'id' => 2994,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Nin Thuan',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            494 => 
            array (
                'id' => 2995,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Tiền Giang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            495 => 
            array (
                'id' => 2996,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Vinh Phú Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            496 => 
            array (
                'id' => 2997,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Lạng Sơn',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            497 => 
            array (
                'id' => 2998,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Binh Thuan',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            498 => 
            array (
                'id' => 2999,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Long An',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            499 => 
            array (
                'id' => 3000,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ðồng Nai',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ha Nội',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            1 => 
            array (
                'id' => 3002,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bà Rịa-Vũng Tàu',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            2 => 
            array (
                'id' => 3003,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bình Ðịnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            3 => 
            array (
                'id' => 3004,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bình Thuận',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            4 => 
            array (
                'id' => 3005,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Gia Lai',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            5 => 
            array (
                'id' => 3006,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hà Giang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            6 => 
            array (
                'id' => 3007,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hà Tây',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            7 => 
            array (
                'id' => 3008,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hà Tĩnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            8 => 
            array (
                'id' => 3009,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hòa Bình',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            9 => 
            array (
                'id' => 3010,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Khánh Hòa',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            10 => 
            array (
                'id' => 3011,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Kon Tum',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            11 => 
            array (
                'id' => 3012,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Nam Hà Tỉnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            12 => 
            array (
                'id' => 3013,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Nghệ An',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            13 => 
            array (
                'id' => 3014,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ninh Bình',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            14 => 
            array (
                'id' => 3015,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ninh Thuận',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            15 => 
            array (
                'id' => 3016,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Phú Yên',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            16 => 
            array (
                'id' => 3017,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quảng Bình',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            17 => 
            array (
                'id' => 3018,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quảng Ngãi',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            18 => 
            array (
                'id' => 3019,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quảng Trị',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            19 => 
            array (
                'id' => 3020,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Sóc Trăng',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            20 => 
            array (
                'id' => 3021,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Thừa Thiên-Huế',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            21 => 
            array (
                'id' => 3022,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Trà Vinh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            22 => 
            array (
                'id' => 3023,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Tuyên Quang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            23 => 
            array (
                'id' => 3024,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Vĩnh Long',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            24 => 
            array (
                'id' => 3025,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Yên Bái',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            25 => 
            array (
                'id' => 3026,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bắc Giang',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            26 => 
            array (
                'id' => 3027,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bắc Kạn',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            27 => 
            array (
                'id' => 3028,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bạc Liêu',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            28 => 
            array (
                'id' => 3029,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bắc Ninh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            29 => 
            array (
                'id' => 3030,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bình Dương',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            30 => 
            array (
                'id' => 3031,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Bình Phước',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            31 => 
            array (
                'id' => 3032,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Cà Mau',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            32 => 
            array (
                'id' => 3033,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ðà Nẵng',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            33 => 
            array (
                'id' => 3034,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hải Dương',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            34 => 
            array (
                'id' => 3035,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hà Nam',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            35 => 
            array (
                'id' => 3036,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Hưng Yên',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            36 => 
            array (
                'id' => 3037,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Nam Ðịnh',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            37 => 
            array (
                'id' => 3038,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Phú Thọ',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            38 => 
            array (
                'id' => 3039,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Quảng Nam',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            39 => 
            array (
                'id' => 3040,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Thái Nguyên',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            40 => 
            array (
                'id' => 3041,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Vĩnh Phúc',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            41 => 
            array (
                'id' => 3042,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Cần Thơ',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            42 => 
            array (
                'id' => 3043,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Ðắc Lắk',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            43 => 
            array (
                'id' => 3044,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Lai Châu',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            44 => 
            array (
                'id' => 3045,
                'country_id' => 704,
                'iso' => '',
                'name' => 'Lào Cai',
                'timezone' => 'Asia/Ho_Chi_Minh',
            ),
            45 => 
            array (
                'id' => 3046,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Notranjska',
                'timezone' => 'Europe/Ljubljana',
            ),
            46 => 
            array (
                'id' => 3047,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Koroška',
                'timezone' => 'Europe/Ljubljana',
            ),
            47 => 
            array (
                'id' => 3048,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Štajerska',
                'timezone' => 'Europe/Ljubljana',
            ),
            48 => 
            array (
                'id' => 3049,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Prekmurje',
                'timezone' => 'Europe/Ljubljana',
            ),
            49 => 
            array (
                'id' => 3050,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Primorska',
                'timezone' => 'Europe/Ljubljana',
            ),
            50 => 
            array (
                'id' => 3051,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Gorenjska',
                'timezone' => 'Europe/Ljubljana',
            ),
            51 => 
            array (
                'id' => 3052,
                'country_id' => 705,
                'iso' => '',
                'name' => 'Dolenjska',
                'timezone' => 'Europe/Ljubljana',
            ),
            52 => 
            array (
                'id' => 3053,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Bakool',
                'timezone' => 'Africa/Mogadishu',
            ),
            53 => 
            array (
                'id' => 3054,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Banaadir',
                'timezone' => 'Africa/Mogadishu',
            ),
            54 => 
            array (
                'id' => 3055,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Bari',
                'timezone' => 'Africa/Mogadishu',
            ),
            55 => 
            array (
                'id' => 3056,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Bay',
                'timezone' => 'Africa/Mogadishu',
            ),
            56 => 
            array (
                'id' => 3057,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Galguduud',
                'timezone' => 'Africa/Mogadishu',
            ),
            57 => 
            array (
                'id' => 3058,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Gedo',
                'timezone' => 'Africa/Mogadishu',
            ),
            58 => 
            array (
                'id' => 3059,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Hiiraan',
                'timezone' => 'Africa/Mogadishu',
            ),
            59 => 
            array (
                'id' => 3060,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Middle Juba',
                'timezone' => 'Africa/Mogadishu',
            ),
            60 => 
            array (
                'id' => 3061,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Lower Juba',
                'timezone' => 'Africa/Mogadishu',
            ),
            61 => 
            array (
                'id' => 3062,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Mudug',
                'timezone' => 'Africa/Mogadishu',
            ),
            62 => 
            array (
                'id' => 3063,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Sanaag',
                'timezone' => 'Africa/Mogadishu',
            ),
            63 => 
            array (
                'id' => 3064,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Middle Shabele',
                'timezone' => 'Africa/Mogadishu',
            ),
            64 => 
            array (
                'id' => 3065,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Shabeellaha Hoose',
                'timezone' => 'Africa/Mogadishu',
            ),
            65 => 
            array (
                'id' => 3066,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Nugaal',
                'timezone' => 'Africa/Mogadishu',
            ),
            66 => 
            array (
                'id' => 3067,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Togdheer',
                'timezone' => 'Africa/Mogadishu',
            ),
            67 => 
            array (
                'id' => 3068,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Woqooyi Galbeed',
                'timezone' => 'Africa/Mogadishu',
            ),
            68 => 
            array (
                'id' => 3069,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Awdal',
                'timezone' => 'Africa/Mogadishu',
            ),
            69 => 
            array (
                'id' => 3070,
                'country_id' => 706,
                'iso' => '',
                'name' => 'Sool',
                'timezone' => 'Africa/Mogadishu',
            ),
            70 => 
            array (
                'id' => 3071,
                'country_id' => 710,
                'iso' => '',
                'name' => 'KwaZulu-Natal',
                'timezone' => 'Africa/Johannesburg',
            ),
            71 => 
            array (
                'id' => 3072,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Free State',
                'timezone' => 'Africa/Johannesburg',
            ),
            72 => 
            array (
                'id' => 3073,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Eastern Cape',
                'timezone' => 'Africa/Johannesburg',
            ),
            73 => 
            array (
                'id' => 3074,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Gauteng',
                'timezone' => 'Africa/Johannesburg',
            ),
            74 => 
            array (
                'id' => 3075,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Mpumalanga',
                'timezone' => 'Africa/Johannesburg',
            ),
            75 => 
            array (
                'id' => 3076,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Northern Cape',
                'timezone' => 'Africa/Johannesburg',
            ),
            76 => 
            array (
                'id' => 3077,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Limpopo',
                'timezone' => 'Africa/Johannesburg',
            ),
            77 => 
            array (
                'id' => 3078,
                'country_id' => 710,
                'iso' => '',
                'name' => 'North-West',
                'timezone' => 'Africa/Johannesburg',
            ),
            78 => 
            array (
                'id' => 3079,
                'country_id' => 710,
                'iso' => '',
                'name' => 'Western Cape',
                'timezone' => 'Africa/Johannesburg',
            ),
            79 => 
            array (
                'id' => 3080,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Manicaland',
                'timezone' => 'Africa/Harare',
            ),
            80 => 
            array (
                'id' => 3081,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Midlands',
                'timezone' => 'Africa/Harare',
            ),
            81 => 
            array (
                'id' => 3082,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Mashonaland Central',
                'timezone' => 'Africa/Harare',
            ),
            82 => 
            array (
                'id' => 3083,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Mashonaland East',
                'timezone' => 'Africa/Harare',
            ),
            83 => 
            array (
                'id' => 3084,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Mashonaland West',
                'timezone' => 'Africa/Harare',
            ),
            84 => 
            array (
                'id' => 3085,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Matabeleland North',
                'timezone' => 'Africa/Harare',
            ),
            85 => 
            array (
                'id' => 3086,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Matabeleland South',
                'timezone' => 'Africa/Harare',
            ),
            86 => 
            array (
                'id' => 3087,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Masvingo',
                'timezone' => 'Africa/Harare',
            ),
            87 => 
            array (
                'id' => 3088,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Bulawayo',
                'timezone' => 'Africa/Harare',
            ),
            88 => 
            array (
                'id' => 3089,
                'country_id' => 716,
                'iso' => '',
                'name' => 'Harare',
                'timezone' => 'Africa/Harare',
            ),
            89 => 
            array (
                'id' => 3090,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Ceuta',
                'timezone' => 'Africa/Ceuta',
            ),
            90 => 
            array (
                'id' => 3091,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Balearic Islands',
                'timezone' => 'Europe/Madrid',
            ),
            91 => 
            array (
                'id' => 3092,
                'country_id' => 724,
                'iso' => '',
                'name' => 'La Rioja',
                'timezone' => 'Europe/Madrid',
            ),
            92 => 
            array (
                'id' => 3093,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Autonomous Region of Madrid',
                'timezone' => 'Europe/Madrid',
            ),
            93 => 
            array (
                'id' => 3094,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Murcia',
                'timezone' => 'Europe/Madrid',
            ),
            94 => 
            array (
                'id' => 3095,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Navarre',
                'timezone' => 'Europe/Madrid',
            ),
            95 => 
            array (
                'id' => 3096,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Asturias',
                'timezone' => 'Europe/Madrid',
            ),
            96 => 
            array (
                'id' => 3097,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Cantabria',
                'timezone' => 'Europe/Madrid',
            ),
            97 => 
            array (
                'id' => 3098,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Andalusia',
                'timezone' => 'Europe/Madrid',
            ),
            98 => 
            array (
                'id' => 3099,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Aragon',
                'timezone' => 'Europe/Madrid',
            ),
            99 => 
            array (
                'id' => 3100,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Canary Islands',
                'timezone' => 'Atlantic/Canary',
            ),
            100 => 
            array (
                'id' => 3101,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Castille-La Mancha',
                'timezone' => 'Europe/Madrid',
            ),
            101 => 
            array (
                'id' => 3102,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Castille and León',
                'timezone' => 'Europe/Madrid',
            ),
            102 => 
            array (
                'id' => 3103,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Catalonia',
                'timezone' => 'Europe/Madrid',
            ),
            103 => 
            array (
                'id' => 3104,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Extremadura',
                'timezone' => 'Europe/Madrid',
            ),
            104 => 
            array (
                'id' => 3105,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Galicia',
                'timezone' => 'Europe/Madrid',
            ),
            105 => 
            array (
                'id' => 3106,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Basque Country',
                'timezone' => 'Europe/Madrid',
            ),
            106 => 
            array (
                'id' => 3107,
                'country_id' => 724,
                'iso' => '',
                'name' => 'Valencia',
                'timezone' => 'Europe/Madrid',
            ),
            107 => 
            array (
                'id' => 3108,
                'country_id' => 732,
                'iso' => '',
                'name' => 'Western Sahara',
                'timezone' => 'Africa/El_Aaiun',
            ),
            108 => 
            array (
                'id' => 3109,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Al Wilāyah al Wusţá',
                'timezone' => 'Africa/Khartoum',
            ),
            109 => 
            array (
                'id' => 3110,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Al Wilāyah al Istiwāʼīyah',
                'timezone' => 'Africa/Khartoum',
            ),
            110 => 
            array (
                'id' => 3111,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Khartoum',
                'timezone' => 'Africa/Khartoum',
            ),
            111 => 
            array (
                'id' => 3112,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Ash Shamaliyah',
                'timezone' => 'Africa/Khartoum',
            ),
            112 => 
            array (
                'id' => 3113,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Al Wilāyah ash Sharqīyah',
                'timezone' => 'Africa/Khartoum',
            ),
            113 => 
            array (
                'id' => 3114,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Ba?r al Ghazal Wilayat',
                'timezone' => 'Africa/Khartoum',
            ),
            114 => 
            array (
                'id' => 3115,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Darfur Wilayat',
                'timezone' => 'Africa/Khartoum',
            ),
            115 => 
            array (
                'id' => 3116,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Kurdufan Wilayat',
                'timezone' => 'Africa/Khartoum',
            ),
            116 => 
            array (
                'id' => 3117,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Upper Nile',
                'timezone' => 'Africa/Khartoum',
            ),
            117 => 
            array (
                'id' => 3118,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Red Sea',
                'timezone' => 'Africa/Khartoum',
            ),
            118 => 
            array (
                'id' => 3119,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Lakes',
                'timezone' => 'Africa/Khartoum',
            ),
            119 => 
            array (
                'id' => 3120,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Al Jazirah',
                'timezone' => 'Africa/Khartoum',
            ),
            120 => 
            array (
                'id' => 3121,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Al Qadarif',
                'timezone' => 'Africa/Khartoum',
            ),
            121 => 
            array (
                'id' => 3122,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Unity',
                'timezone' => 'Africa/Khartoum',
            ),
            122 => 
            array (
                'id' => 3123,
                'country_id' => 736,
                'iso' => '',
                'name' => 'White Nile',
                'timezone' => 'Africa/Khartoum',
            ),
            123 => 
            array (
                'id' => 3124,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Blue Nile',
                'timezone' => 'Africa/Khartoum',
            ),
            124 => 
            array (
                'id' => 3125,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Northern',
                'timezone' => 'Africa/Khartoum',
            ),
            125 => 
            array (
                'id' => 3126,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Central Equatoria',
                'timezone' => 'Africa/Khartoum',
            ),
            126 => 
            array (
                'id' => 3127,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Gharb al Istiwāʼīyah',
                'timezone' => 'Africa/Khartoum',
            ),
            127 => 
            array (
                'id' => 3128,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Western Bahr al Ghazal',
                'timezone' => 'Africa/Khartoum',
            ),
            128 => 
            array (
                'id' => 3129,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Gharb Dārfūr',
                'timezone' => 'Africa/Khartoum',
            ),
            129 => 
            array (
                'id' => 3130,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Gharb Kurdufān',
                'timezone' => 'Africa/Khartoum',
            ),
            130 => 
            array (
                'id' => 3131,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Janūb Dārfūr',
                'timezone' => 'Africa/Khartoum',
            ),
            131 => 
            array (
                'id' => 3132,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Janūb Kurdufān',
                'timezone' => 'Africa/Khartoum',
            ),
            132 => 
            array (
                'id' => 3133,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Junqalī',
                'timezone' => 'Africa/Khartoum',
            ),
            133 => 
            array (
                'id' => 3134,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Kassalā',
                'timezone' => 'Africa/Khartoum',
            ),
            134 => 
            array (
                'id' => 3135,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Nahr an Nīl',
                'timezone' => 'Africa/Khartoum',
            ),
            135 => 
            array (
                'id' => 3136,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Shamāl Baḩr al Ghazāl',
                'timezone' => 'Africa/Khartoum',
            ),
            136 => 
            array (
                'id' => 3137,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Shamāl Dārfūr',
                'timezone' => 'Africa/Khartoum',
            ),
            137 => 
            array (
                'id' => 3138,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Shamāl Kurdufān',
                'timezone' => 'Africa/Khartoum',
            ),
            138 => 
            array (
                'id' => 3139,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Eastern Equatoria',
                'timezone' => 'Africa/Khartoum',
            ),
            139 => 
            array (
                'id' => 3140,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Sinnār',
                'timezone' => 'Africa/Khartoum',
            ),
            140 => 
            array (
                'id' => 3141,
                'country_id' => 736,
                'iso' => '',
                'name' => 'Warab',
                'timezone' => 'Africa/Khartoum',
            ),
            141 => 
            array (
                'id' => 3142,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Brokopondo',
                'timezone' => 'America/Paramaribo',
            ),
            142 => 
            array (
                'id' => 3143,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Commewijne',
                'timezone' => 'America/Paramaribo',
            ),
            143 => 
            array (
                'id' => 3144,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Coronie',
                'timezone' => 'America/Paramaribo',
            ),
            144 => 
            array (
                'id' => 3145,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Marowijne',
                'timezone' => 'America/Paramaribo',
            ),
            145 => 
            array (
                'id' => 3146,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Nickerie',
                'timezone' => 'America/Paramaribo',
            ),
            146 => 
            array (
                'id' => 3147,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Para',
                'timezone' => 'America/Paramaribo',
            ),
            147 => 
            array (
                'id' => 3148,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Paramaribo',
                'timezone' => 'America/Paramaribo',
            ),
            148 => 
            array (
                'id' => 3149,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Saramacca',
                'timezone' => 'America/Paramaribo',
            ),
            149 => 
            array (
                'id' => 3150,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Sipaliwini',
                'timezone' => 'America/Paramaribo',
            ),
            150 => 
            array (
                'id' => 3151,
                'country_id' => 740,
                'iso' => '',
                'name' => 'Wanica',
                'timezone' => 'America/Paramaribo',
            ),
            151 => 
            array (
                'id' => 3152,
                'country_id' => 748,
                'iso' => '',
                'name' => 'Hhohho',
                'timezone' => 'Africa/Mbabane',
            ),
            152 => 
            array (
                'id' => 3153,
                'country_id' => 748,
                'iso' => '',
                'name' => 'Lubombo',
                'timezone' => 'Africa/Mbabane',
            ),
            153 => 
            array (
                'id' => 3154,
                'country_id' => 748,
                'iso' => '',
                'name' => 'Manzini',
                'timezone' => 'Africa/Mbabane',
            ),
            154 => 
            array (
                'id' => 3155,
                'country_id' => 748,
                'iso' => '',
                'name' => 'Shiselweni',
                'timezone' => 'Africa/Mbabane',
            ),
            155 => 
            array (
                'id' => 3156,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Blekinge',
                'timezone' => 'Europe/Stockholm',
            ),
            156 => 
            array (
                'id' => 3157,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Gävleborg',
                'timezone' => 'Europe/Stockholm',
            ),
            157 => 
            array (
                'id' => 3158,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Gotland',
                'timezone' => 'Europe/Stockholm',
            ),
            158 => 
            array (
                'id' => 3159,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Halland',
                'timezone' => 'Europe/Stockholm',
            ),
            159 => 
            array (
                'id' => 3160,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Jämtland',
                'timezone' => 'Europe/Stockholm',
            ),
            160 => 
            array (
                'id' => 3161,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Jönköping',
                'timezone' => 'Europe/Stockholm',
            ),
            161 => 
            array (
                'id' => 3162,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Kalmar',
                'timezone' => 'Europe/Stockholm',
            ),
            162 => 
            array (
                'id' => 3163,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Dalarna',
                'timezone' => 'Europe/Stockholm',
            ),
            163 => 
            array (
                'id' => 3164,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Kronoberg',
                'timezone' => 'Europe/Stockholm',
            ),
            164 => 
            array (
                'id' => 3165,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Norrbotten',
                'timezone' => 'Europe/Stockholm',
            ),
            165 => 
            array (
                'id' => 3166,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Örebro',
                'timezone' => 'Europe/Stockholm',
            ),
            166 => 
            array (
                'id' => 3167,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Östergötland',
                'timezone' => 'Europe/Stockholm',
            ),
            167 => 
            array (
                'id' => 3168,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Södermanland',
                'timezone' => 'Europe/Stockholm',
            ),
            168 => 
            array (
                'id' => 3169,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Uppsala',
                'timezone' => 'Europe/Stockholm',
            ),
            169 => 
            array (
                'id' => 3170,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Värmland',
                'timezone' => 'Europe/Stockholm',
            ),
            170 => 
            array (
                'id' => 3171,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Västerbotten',
                'timezone' => 'Europe/Stockholm',
            ),
            171 => 
            array (
                'id' => 3172,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Västernorrland',
                'timezone' => 'Europe/Stockholm',
            ),
            172 => 
            array (
                'id' => 3173,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Västmanland',
                'timezone' => 'Europe/Stockholm',
            ),
            173 => 
            array (
                'id' => 3174,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Stockholm',
                'timezone' => 'Europe/Stockholm',
            ),
            174 => 
            array (
                'id' => 3175,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Skåne',
                'timezone' => 'Europe/Stockholm',
            ),
            175 => 
            array (
                'id' => 3176,
                'country_id' => 752,
                'iso' => '',
                'name' => 'Västra Götaland',
                'timezone' => 'Europe/Stockholm',
            ),
            176 => 
            array (
                'id' => 3177,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Aargau',
                'timezone' => 'Europe/Zurich',
            ),
            177 => 
            array (
                'id' => 3178,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Appenzell Innerrhoden',
                'timezone' => 'Europe/Zurich',
            ),
            178 => 
            array (
                'id' => 3179,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Appenzell Ausserrhoden',
                'timezone' => 'Europe/Zurich',
            ),
            179 => 
            array (
                'id' => 3180,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Bern',
                'timezone' => 'Europe/Zurich',
            ),
            180 => 
            array (
                'id' => 3181,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Basel-Landschaft',
                'timezone' => 'Europe/Zurich',
            ),
            181 => 
            array (
                'id' => 3182,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Kanton Basel-Stadt',
                'timezone' => 'Europe/Zurich',
            ),
            182 => 
            array (
                'id' => 3183,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Fribourg',
                'timezone' => 'Europe/Zurich',
            ),
            183 => 
            array (
                'id' => 3184,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Genève',
                'timezone' => 'Europe/Zurich',
            ),
            184 => 
            array (
                'id' => 3185,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Glarus',
                'timezone' => 'Europe/Zurich',
            ),
            185 => 
            array (
                'id' => 3186,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Graubünden',
                'timezone' => 'Europe/Zurich',
            ),
            186 => 
            array (
                'id' => 3187,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Jura',
                'timezone' => 'Europe/Zurich',
            ),
            187 => 
            array (
                'id' => 3188,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Luzern',
                'timezone' => 'Europe/Zurich',
            ),
            188 => 
            array (
                'id' => 3189,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Neuchâtel',
                'timezone' => 'Europe/Zurich',
            ),
            189 => 
            array (
                'id' => 3190,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Nidwalden',
                'timezone' => 'Europe/Zurich',
            ),
            190 => 
            array (
                'id' => 3191,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Obwalden',
                'timezone' => 'Europe/Zurich',
            ),
            191 => 
            array (
                'id' => 3192,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Kanton St. Gallen',
                'timezone' => 'Europe/Zurich',
            ),
            192 => 
            array (
                'id' => 3193,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Schaffhausen',
                'timezone' => 'Europe/Zurich',
            ),
            193 => 
            array (
                'id' => 3194,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Solothurn',
                'timezone' => 'Europe/Zurich',
            ),
            194 => 
            array (
                'id' => 3195,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Schwyz',
                'timezone' => 'Europe/Zurich',
            ),
            195 => 
            array (
                'id' => 3196,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Thurgau',
                'timezone' => 'Europe/Zurich',
            ),
            196 => 
            array (
                'id' => 3197,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Ticino',
                'timezone' => 'Europe/Zurich',
            ),
            197 => 
            array (
                'id' => 3198,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Uri',
                'timezone' => 'Europe/Zurich',
            ),
            198 => 
            array (
                'id' => 3199,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Vaud',
                'timezone' => 'Europe/Zurich',
            ),
            199 => 
            array (
                'id' => 3200,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Valais',
                'timezone' => 'Europe/Zurich',
            ),
            200 => 
            array (
                'id' => 3201,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Zug',
                'timezone' => 'Europe/Zurich',
            ),
            201 => 
            array (
                'id' => 3202,
                'country_id' => 756,
                'iso' => '',
                'name' => 'Zürich',
                'timezone' => 'Europe/Zurich',
            ),
            202 => 
            array (
                'id' => 3203,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Al-Hasakah',
                'timezone' => 'Asia/Damascus',
            ),
            203 => 
            array (
                'id' => 3204,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Latakia',
                'timezone' => 'Asia/Damascus',
            ),
            204 => 
            array (
                'id' => 3205,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Quneitra',
                'timezone' => 'Asia/Damascus',
            ),
            205 => 
            array (
                'id' => 3206,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Ar-Raqqah',
                'timezone' => 'Asia/Damascus',
            ),
            206 => 
            array (
                'id' => 3207,
                'country_id' => 760,
                'iso' => '',
                'name' => 'As-Suwayda',
                'timezone' => 'Asia/Damascus',
            ),
            207 => 
            array (
                'id' => 3208,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Daraa',
                'timezone' => 'Asia/Damascus',
            ),
            208 => 
            array (
                'id' => 3209,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Deir ez-Zor',
                'timezone' => 'Asia/Damascus',
            ),
            209 => 
            array (
                'id' => 3210,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Rif-dimashq',
                'timezone' => 'Asia/Damascus',
            ),
            210 => 
            array (
                'id' => 3211,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Aleppo',
                'timezone' => 'Asia/Damascus',
            ),
            211 => 
            array (
                'id' => 3212,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Hama Governorate',
                'timezone' => 'Asia/Damascus',
            ),
            212 => 
            array (
                'id' => 3213,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Homs',
                'timezone' => 'Asia/Damascus',
            ),
            213 => 
            array (
                'id' => 3214,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Idlib',
                'timezone' => 'Asia/Damascus',
            ),
            214 => 
            array (
                'id' => 3215,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Damascus City',
                'timezone' => 'Asia/Damascus',
            ),
            215 => 
            array (
                'id' => 3216,
                'country_id' => 760,
                'iso' => '',
                'name' => 'Tartus',
                'timezone' => 'Asia/Damascus',
            ),
            216 => 
            array (
                'id' => 3217,
                'country_id' => 762,
                'iso' => '',
                'name' => 'Gorno-Badakhshan',
                'timezone' => 'Asia/Dushanbe',
            ),
            217 => 
            array (
                'id' => 3218,
                'country_id' => 762,
                'iso' => '',
                'name' => 'Khatlon',
                'timezone' => 'Asia/Dushanbe',
            ),
            218 => 
            array (
                'id' => 3219,
                'country_id' => 762,
                'iso' => '',
                'name' => 'Sughd',
                'timezone' => 'Asia/Dushanbe',
            ),
            219 => 
            array (
                'id' => 3220,
                'country_id' => 762,
                'iso' => '',
                'name' => 'Dushanbe',
                'timezone' => 'Asia/Dushanbe',
            ),
            220 => 
            array (
                'id' => 3221,
                'country_id' => 762,
                'iso' => '',
                'name' => 'Region of Republican Subordination',
                'timezone' => 'Asia/Dushanbe',
            ),
            221 => 
            array (
                'id' => 3222,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Mae Hong Son',
                'timezone' => 'Asia/Bangkok',
            ),
            222 => 
            array (
                'id' => 3223,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chiang Mai',
                'timezone' => 'Asia/Bangkok',
            ),
            223 => 
            array (
                'id' => 3224,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chiang Rai',
                'timezone' => 'Asia/Bangkok',
            ),
            224 => 
            array (
                'id' => 3225,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nan',
                'timezone' => 'Asia/Bangkok',
            ),
            225 => 
            array (
                'id' => 3226,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Lamphun',
                'timezone' => 'Asia/Bangkok',
            ),
            226 => 
            array (
                'id' => 3227,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Lampang',
                'timezone' => 'Asia/Bangkok',
            ),
            227 => 
            array (
                'id' => 3228,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phrae',
                'timezone' => 'Asia/Bangkok',
            ),
            228 => 
            array (
                'id' => 3229,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Tak',
                'timezone' => 'Asia/Bangkok',
            ),
            229 => 
            array (
                'id' => 3230,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Sukhothai',
                'timezone' => 'Asia/Bangkok',
            ),
            230 => 
            array (
                'id' => 3231,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Uttaradit',
                'timezone' => 'Asia/Bangkok',
            ),
            231 => 
            array (
                'id' => 3232,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Kamphaeng Phet',
                'timezone' => 'Asia/Bangkok',
            ),
            232 => 
            array (
                'id' => 3233,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phitsanulok',
                'timezone' => 'Asia/Bangkok',
            ),
            233 => 
            array (
                'id' => 3234,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phichit',
                'timezone' => 'Asia/Bangkok',
            ),
            234 => 
            array (
                'id' => 3235,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phetchabun',
                'timezone' => 'Asia/Bangkok',
            ),
            235 => 
            array (
                'id' => 3236,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Uthai Thani',
                'timezone' => 'Asia/Bangkok',
            ),
            236 => 
            array (
                'id' => 3237,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Sawan',
                'timezone' => 'Asia/Bangkok',
            ),
            237 => 
            array (
                'id' => 3238,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nong Khai',
                'timezone' => 'Asia/Bangkok',
            ),
            238 => 
            array (
                'id' => 3239,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Loei',
                'timezone' => 'Asia/Bangkok',
            ),
            239 => 
            array (
                'id' => 3240,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Sakon Nakhon',
                'timezone' => 'Asia/Bangkok',
            ),
            240 => 
            array (
                'id' => 3241,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Phanom',
                'timezone' => 'Asia/Bangkok',
            ),
            241 => 
            array (
                'id' => 3242,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Khon Kaen',
                'timezone' => 'Asia/Bangkok',
            ),
            242 => 
            array (
                'id' => 3243,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Kalasin',
                'timezone' => 'Asia/Bangkok',
            ),
            243 => 
            array (
                'id' => 3244,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Maha Sarakham',
                'timezone' => 'Asia/Bangkok',
            ),
            244 => 
            array (
                'id' => 3245,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Roi Et',
                'timezone' => 'Asia/Bangkok',
            ),
            245 => 
            array (
                'id' => 3246,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chaiyaphum',
                'timezone' => 'Asia/Bangkok',
            ),
            246 => 
            array (
                'id' => 3247,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Ratchasima',
                'timezone' => 'Asia/Bangkok',
            ),
            247 => 
            array (
                'id' => 3248,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Buriram',
                'timezone' => 'Asia/Bangkok',
            ),
            248 => 
            array (
                'id' => 3249,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Surin',
                'timezone' => 'Asia/Bangkok',
            ),
            249 => 
            array (
                'id' => 3250,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Sisaket',
                'timezone' => 'Asia/Bangkok',
            ),
            250 => 
            array (
                'id' => 3251,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Narathiwat',
                'timezone' => 'Asia/Bangkok',
            ),
            251 => 
            array (
                'id' => 3252,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chai Nat',
                'timezone' => 'Asia/Bangkok',
            ),
            252 => 
            array (
                'id' => 3253,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Sing Buri',
                'timezone' => 'Asia/Bangkok',
            ),
            253 => 
            array (
                'id' => 3254,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Lop Buri',
                'timezone' => 'Asia/Bangkok',
            ),
            254 => 
            array (
                'id' => 3255,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Ang Thong',
                'timezone' => 'Asia/Bangkok',
            ),
            255 => 
            array (
                'id' => 3256,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phra Nakhon Si Ayutthaya',
                'timezone' => 'Asia/Bangkok',
            ),
            256 => 
            array (
                'id' => 3257,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Sara Buri',
                'timezone' => 'Asia/Bangkok',
            ),
            257 => 
            array (
                'id' => 3258,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nonthaburi',
                'timezone' => 'Asia/Bangkok',
            ),
            258 => 
            array (
                'id' => 3259,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Pathum Thani',
                'timezone' => 'Asia/Bangkok',
            ),
            259 => 
            array (
                'id' => 3260,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Bangkok',
                'timezone' => 'Asia/Bangkok',
            ),
            260 => 
            array (
                'id' => 3261,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phayao',
                'timezone' => 'Asia/Bangkok',
            ),
            261 => 
            array (
                'id' => 3262,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Samut Prakan',
                'timezone' => 'Asia/Bangkok',
            ),
            262 => 
            array (
                'id' => 3263,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Nayok',
                'timezone' => 'Asia/Bangkok',
            ),
            263 => 
            array (
                'id' => 3264,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chachoengsao',
                'timezone' => 'Asia/Bangkok',
            ),
            264 => 
            array (
                'id' => 3265,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chon Buri',
                'timezone' => 'Asia/Bangkok',
            ),
            265 => 
            array (
                'id' => 3266,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Rayong',
                'timezone' => 'Asia/Bangkok',
            ),
            266 => 
            array (
                'id' => 3267,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chanthaburi',
                'timezone' => 'Asia/Bangkok',
            ),
            267 => 
            array (
                'id' => 3268,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Trat',
                'timezone' => 'Asia/Bangkok',
            ),
            268 => 
            array (
                'id' => 3269,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Kanchanaburi',
                'timezone' => 'Asia/Bangkok',
            ),
            269 => 
            array (
                'id' => 3270,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Suphan Buri',
                'timezone' => 'Asia/Bangkok',
            ),
            270 => 
            array (
                'id' => 3271,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Ratchaburi',
                'timezone' => 'Asia/Bangkok',
            ),
            271 => 
            array (
                'id' => 3272,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Pathom',
                'timezone' => 'Asia/Bangkok',
            ),
            272 => 
            array (
                'id' => 3273,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Samut Songkhram',
                'timezone' => 'Asia/Bangkok',
            ),
            273 => 
            array (
                'id' => 3274,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Samut Sakhon',
                'timezone' => 'Asia/Bangkok',
            ),
            274 => 
            array (
                'id' => 3275,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phetchaburi',
                'timezone' => 'Asia/Bangkok',
            ),
            275 => 
            array (
                'id' => 3276,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Prachuap Khiri Khan',
                'timezone' => 'Asia/Bangkok',
            ),
            276 => 
            array (
                'id' => 3277,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Chumphon',
                'timezone' => 'Asia/Bangkok',
            ),
            277 => 
            array (
                'id' => 3278,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Ranong',
                'timezone' => 'Asia/Bangkok',
            ),
            278 => 
            array (
                'id' => 3279,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Surat Thani',
                'timezone' => 'Asia/Bangkok',
            ),
            279 => 
            array (
                'id' => 3280,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phangnga',
                'timezone' => 'Asia/Bangkok',
            ),
            280 => 
            array (
                'id' => 3281,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phuket',
                'timezone' => 'Asia/Bangkok',
            ),
            281 => 
            array (
                'id' => 3282,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Krabi',
                'timezone' => 'Asia/Bangkok',
            ),
            282 => 
            array (
                'id' => 3283,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Si Thammarat',
                'timezone' => 'Asia/Bangkok',
            ),
            283 => 
            array (
                'id' => 3284,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Trang',
                'timezone' => 'Asia/Bangkok',
            ),
            284 => 
            array (
                'id' => 3285,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Phatthalung',
                'timezone' => 'Asia/Bangkok',
            ),
            285 => 
            array (
                'id' => 3286,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Satun',
                'timezone' => 'Asia/Bangkok',
            ),
            286 => 
            array (
                'id' => 3287,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Songkhla',
                'timezone' => 'Asia/Bangkok',
            ),
            287 => 
            array (
                'id' => 3288,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Pattani',
                'timezone' => 'Asia/Bangkok',
            ),
            288 => 
            array (
                'id' => 3289,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Yala',
                'timezone' => 'Asia/Bangkok',
            ),
            289 => 
            array (
                'id' => 3290,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Yasothon',
                'timezone' => 'Asia/Bangkok',
            ),
            290 => 
            array (
                'id' => 3291,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nakhon Phanom',
                'timezone' => 'Asia/Bangkok',
            ),
            291 => 
            array (
                'id' => 3292,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Prachin Buri',
                'timezone' => 'Asia/Bangkok',
            ),
            292 => 
            array (
                'id' => 3293,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Ubon Ratchathani',
                'timezone' => 'Asia/Bangkok',
            ),
            293 => 
            array (
                'id' => 3294,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Udon Thani',
                'timezone' => 'Asia/Bangkok',
            ),
            294 => 
            array (
                'id' => 3295,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Amnat Charoen',
                'timezone' => 'Asia/Bangkok',
            ),
            295 => 
            array (
                'id' => 3296,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Mukdahan',
                'timezone' => 'Asia/Bangkok',
            ),
            296 => 
            array (
                'id' => 3297,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Nong Bua Lamphu',
                'timezone' => 'Asia/Bangkok',
            ),
            297 => 
            array (
                'id' => 3298,
                'country_id' => 764,
                'iso' => '',
                'name' => 'Sa Kaeo',
                'timezone' => 'Asia/Bangkok',
            ),
            298 => 
            array (
                'id' => 3299,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Amlame',
                'timezone' => 'Africa/Lome',
            ),
            299 => 
            array (
                'id' => 3300,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Aneho',
                'timezone' => 'Africa/Lome',
            ),
            300 => 
            array (
                'id' => 3301,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Atakpame',
                'timezone' => 'Africa/Lome',
            ),
            301 => 
            array (
                'id' => 3302,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Bafilo',
                'timezone' => 'Africa/Lome',
            ),
            302 => 
            array (
                'id' => 3303,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Bassar',
                'timezone' => 'Africa/Lome',
            ),
            303 => 
            array (
                'id' => 3304,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Dapaong',
                'timezone' => 'Africa/Lome',
            ),
            304 => 
            array (
                'id' => 3305,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Kante',
                'timezone' => 'Africa/Lome',
            ),
            305 => 
            array (
                'id' => 3306,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Klouto',
                'timezone' => 'Africa/Lome',
            ),
            306 => 
            array (
                'id' => 3307,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Lama-Kara',
                'timezone' => 'Africa/Lome',
            ),
            307 => 
            array (
                'id' => 3308,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Lome',
                'timezone' => 'Africa/Lome',
            ),
            308 => 
            array (
                'id' => 3309,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Mango',
                'timezone' => 'Africa/Lome',
            ),
            309 => 
            array (
                'id' => 3310,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Niamtougou',
                'timezone' => 'Africa/Lome',
            ),
            310 => 
            array (
                'id' => 3311,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Notse',
                'timezone' => 'Africa/Lome',
            ),
            311 => 
            array (
                'id' => 3312,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Kpagouda',
                'timezone' => 'Africa/Lome',
            ),
            312 => 
            array (
                'id' => 3313,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Badou',
                'timezone' => 'Africa/Lome',
            ),
            313 => 
            array (
                'id' => 3314,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Sotouboua',
                'timezone' => 'Africa/Lome',
            ),
            314 => 
            array (
                'id' => 3315,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Tabligbo',
                'timezone' => 'Africa/Lome',
            ),
            315 => 
            array (
                'id' => 3316,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Tsevie',
                'timezone' => 'Africa/Lome',
            ),
            316 => 
            array (
                'id' => 3317,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Tchamba',
                'timezone' => 'Africa/Lome',
            ),
            317 => 
            array (
                'id' => 3318,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Tchaoudjo',
                'timezone' => 'Africa/Lome',
            ),
            318 => 
            array (
                'id' => 3319,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Vogan',
                'timezone' => 'Africa/Lome',
            ),
            319 => 
            array (
                'id' => 3320,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Centrale',
                'timezone' => 'Africa/Lome',
            ),
            320 => 
            array (
                'id' => 3321,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Kara',
                'timezone' => 'Africa/Lome',
            ),
            321 => 
            array (
                'id' => 3322,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Maritime',
                'timezone' => 'Africa/Lome',
            ),
            322 => 
            array (
                'id' => 3323,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Plateaux',
                'timezone' => 'Africa/Lome',
            ),
            323 => 
            array (
                'id' => 3324,
                'country_id' => 768,
                'iso' => '',
                'name' => 'Savanes',
                'timezone' => 'Africa/Lome',
            ),
            324 => 
            array (
                'id' => 3325,
                'country_id' => 772,
                'iso' => '',
                'name' => 'Tokelau',
                'timezone' => 'Pacific/Fakaofo',
            ),
            325 => 
            array (
                'id' => 3326,
                'country_id' => 776,
                'iso' => '',
                'name' => 'Ha‘apai',
                'timezone' => 'Pacific/Tongatapu',
            ),
            326 => 
            array (
                'id' => 3327,
                'country_id' => 776,
                'iso' => '',
                'name' => 'Tongatapu',
                'timezone' => 'Pacific/Tongatapu',
            ),
            327 => 
            array (
                'id' => 3328,
                'country_id' => 776,
                'iso' => '',
                'name' => 'Vava‘u',
                'timezone' => 'Pacific/Tongatapu',
            ),
            328 => 
            array (
                'id' => 3329,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Port of Spain',
                'timezone' => 'America/Port_of_Spain',
            ),
            329 => 
            array (
                'id' => 3330,
                'country_id' => 780,
                'iso' => '',
                'name' => 'San Fernando',
                'timezone' => 'America/Port_of_Spain',
            ),
            330 => 
            array (
                'id' => 3331,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Chaguanas',
                'timezone' => 'America/Port_of_Spain',
            ),
            331 => 
            array (
                'id' => 3332,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Arima',
                'timezone' => 'America/Port_of_Spain',
            ),
            332 => 
            array (
                'id' => 3333,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Point Fortin Borough',
                'timezone' => 'America/Port_of_Spain',
            ),
            333 => 
            array (
                'id' => 3334,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Couva-Tabaquite-Talparo',
                'timezone' => 'America/Port_of_Spain',
            ),
            334 => 
            array (
                'id' => 3335,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Diego Martin',
                'timezone' => 'America/Port_of_Spain',
            ),
            335 => 
            array (
                'id' => 3336,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Penal-Debe',
                'timezone' => 'America/Port_of_Spain',
            ),
            336 => 
            array (
                'id' => 3337,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Princes Town',
                'timezone' => 'America/Port_of_Spain',
            ),
            337 => 
            array (
                'id' => 3338,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Rio Claro-Mayaro',
                'timezone' => 'America/Port_of_Spain',
            ),
            338 => 
            array (
                'id' => 3339,
                'country_id' => 780,
                'iso' => '',
                'name' => 'San Juan-Laventille',
                'timezone' => 'America/Port_of_Spain',
            ),
            339 => 
            array (
                'id' => 3340,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Sangre Grande',
                'timezone' => 'America/Port_of_Spain',
            ),
            340 => 
            array (
                'id' => 3341,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Siparia',
                'timezone' => 'America/Port_of_Spain',
            ),
            341 => 
            array (
                'id' => 3342,
                'country_id' => 780,
                'iso' => '',
                'name' => 'Tunapuna-Piarco',
                'timezone' => 'America/Port_of_Spain',
            ),
            342 => 
            array (
                'id' => 3343,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Abū Z̧aby',
                'timezone' => 'Asia/Dubai',
            ),
            343 => 
            array (
                'id' => 3344,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Ajman',
                'timezone' => 'Asia/Dubai',
            ),
            344 => 
            array (
                'id' => 3345,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Dubayy',
                'timezone' => 'Asia/Dubai',
            ),
            345 => 
            array (
                'id' => 3346,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Al Fujayrah',
                'timezone' => 'Asia/Dubai',
            ),
            346 => 
            array (
                'id' => 3347,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Raʼs al Khaymah',
                'timezone' => 'Asia/Dubai',
            ),
            347 => 
            array (
                'id' => 3348,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Ash Shāriqah',
                'timezone' => 'Asia/Dubai',
            ),
            348 => 
            array (
                'id' => 3349,
                'country_id' => 784,
                'iso' => '',
                'name' => 'Umm al Qaywayn',
                'timezone' => 'Asia/Dubai',
            ),
            349 => 
            array (
                'id' => 3350,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Tunis al Janubiyah Wilayat',
                'timezone' => 'Africa/Tunis',
            ),
            350 => 
            array (
                'id' => 3351,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Al Qaşrayn',
                'timezone' => 'Africa/Tunis',
            ),
            351 => 
            array (
                'id' => 3352,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Al Qayrawān',
                'timezone' => 'Africa/Tunis',
            ),
            352 => 
            array (
                'id' => 3353,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Jundūbah',
                'timezone' => 'Africa/Tunis',
            ),
            353 => 
            array (
                'id' => 3354,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Kef',
                'timezone' => 'Africa/Tunis',
            ),
            354 => 
            array (
                'id' => 3355,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Al Mahdīyah',
                'timezone' => 'Africa/Tunis',
            ),
            355 => 
            array (
                'id' => 3356,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Al Munastīr',
                'timezone' => 'Africa/Tunis',
            ),
            356 => 
            array (
                'id' => 3357,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Bājah',
                'timezone' => 'Africa/Tunis',
            ),
            357 => 
            array (
                'id' => 3358,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Banzart',
                'timezone' => 'Africa/Tunis',
            ),
            358 => 
            array (
                'id' => 3359,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Nābul',
                'timezone' => 'Africa/Tunis',
            ),
            359 => 
            array (
                'id' => 3360,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Silyānah',
                'timezone' => 'Africa/Tunis',
            ),
            360 => 
            array (
                'id' => 3361,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Sūsah',
                'timezone' => 'Africa/Tunis',
            ),
            361 => 
            array (
                'id' => 3362,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Bin ‘Arūs',
                'timezone' => 'Africa/Tunis',
            ),
            362 => 
            array (
                'id' => 3363,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Madanīn',
                'timezone' => 'Africa/Tunis',
            ),
            363 => 
            array (
                'id' => 3364,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Qābis',
                'timezone' => 'Africa/Tunis',
            ),
            364 => 
            array (
                'id' => 3365,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Qafşah',
                'timezone' => 'Africa/Tunis',
            ),
            365 => 
            array (
                'id' => 3366,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Qibilī',
                'timezone' => 'Africa/Tunis',
            ),
            366 => 
            array (
                'id' => 3367,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Şafāqis',
                'timezone' => 'Africa/Tunis',
            ),
            367 => 
            array (
                'id' => 3368,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Sīdī Bū Zayd',
                'timezone' => 'Africa/Tunis',
            ),
            368 => 
            array (
                'id' => 3369,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Taţāwīn',
                'timezone' => 'Africa/Tunis',
            ),
            369 => 
            array (
                'id' => 3370,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Tawzar',
                'timezone' => 'Africa/Tunis',
            ),
            370 => 
            array (
                'id' => 3371,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Tūnis',
                'timezone' => 'Africa/Tunis',
            ),
            371 => 
            array (
                'id' => 3372,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Zaghwān',
                'timezone' => 'Africa/Tunis',
            ),
            372 => 
            array (
                'id' => 3373,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Ariana',
                'timezone' => 'Africa/Tunis',
            ),
            373 => 
            array (
                'id' => 3374,
                'country_id' => 788,
                'iso' => '',
                'name' => 'Manouba',
                'timezone' => 'Africa/Tunis',
            ),
            374 => 
            array (
                'id' => 3375,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Adıyaman',
                'timezone' => 'Europe/Istanbul',
            ),
            375 => 
            array (
                'id' => 3376,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Afyonkarahisar',
                'timezone' => 'Europe/Istanbul',
            ),
            376 => 
            array (
                'id' => 3377,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Ağrı Province',
                'timezone' => 'Europe/Istanbul',
            ),
            377 => 
            array (
                'id' => 3378,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Amasya Province',
                'timezone' => 'Europe/Istanbul',
            ),
            378 => 
            array (
                'id' => 3379,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Antalya Province',
                'timezone' => 'Europe/Istanbul',
            ),
            379 => 
            array (
                'id' => 3380,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Artvin Province',
                'timezone' => 'Europe/Istanbul',
            ),
            380 => 
            array (
                'id' => 3381,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Aydın Province',
                'timezone' => 'Europe/Istanbul',
            ),
            381 => 
            array (
                'id' => 3382,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Balıkesir Province',
                'timezone' => 'Europe/Istanbul',
            ),
            382 => 
            array (
                'id' => 3383,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bilecik Province',
                'timezone' => 'Europe/Istanbul',
            ),
            383 => 
            array (
                'id' => 3384,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bingöl Province',
                'timezone' => 'Europe/Istanbul',
            ),
            384 => 
            array (
                'id' => 3385,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bitlis Province',
                'timezone' => 'Europe/Istanbul',
            ),
            385 => 
            array (
                'id' => 3386,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bolu Province',
                'timezone' => 'Europe/Istanbul',
            ),
            386 => 
            array (
                'id' => 3387,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Burdur Province',
                'timezone' => 'Europe/Istanbul',
            ),
            387 => 
            array (
                'id' => 3388,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bursa',
                'timezone' => 'Europe/Istanbul',
            ),
            388 => 
            array (
                'id' => 3389,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Çanakkale Province',
                'timezone' => 'Europe/Istanbul',
            ),
            389 => 
            array (
                'id' => 3390,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Çorum Province',
                'timezone' => 'Europe/Istanbul',
            ),
            390 => 
            array (
                'id' => 3391,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Denizli Province',
                'timezone' => 'Europe/Istanbul',
            ),
            391 => 
            array (
                'id' => 3392,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Diyarbakır',
                'timezone' => 'Europe/Istanbul',
            ),
            392 => 
            array (
                'id' => 3393,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Edirne Province',
                'timezone' => 'Europe/Istanbul',
            ),
            393 => 
            array (
                'id' => 3394,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Elazığ',
                'timezone' => 'Europe/Istanbul',
            ),
            394 => 
            array (
                'id' => 3395,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Erzincan Province',
                'timezone' => 'Europe/Istanbul',
            ),
            395 => 
            array (
                'id' => 3396,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Erzurum Province',
                'timezone' => 'Europe/Istanbul',
            ),
            396 => 
            array (
                'id' => 3397,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Eskişehir Province',
                'timezone' => 'Europe/Istanbul',
            ),
            397 => 
            array (
                'id' => 3398,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Giresun Province',
                'timezone' => 'Europe/Istanbul',
            ),
            398 => 
            array (
                'id' => 3399,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Hatay Province',
                'timezone' => 'Europe/Istanbul',
            ),
            399 => 
            array (
                'id' => 3400,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Mersin Province',
                'timezone' => 'Europe/Istanbul',
            ),
            400 => 
            array (
                'id' => 3401,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Isparta Province',
                'timezone' => 'Europe/Istanbul',
            ),
            401 => 
            array (
                'id' => 3402,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Istanbul',
                'timezone' => 'Europe/Istanbul',
            ),
            402 => 
            array (
                'id' => 3403,
                'country_id' => 792,
                'iso' => '',
                'name' => 'İzmir',
                'timezone' => 'Europe/Istanbul',
            ),
            403 => 
            array (
                'id' => 3404,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kastamonu Province',
                'timezone' => 'Europe/Istanbul',
            ),
            404 => 
            array (
                'id' => 3405,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kayseri Province',
                'timezone' => 'Europe/Istanbul',
            ),
            405 => 
            array (
                'id' => 3406,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kırklareli Province',
                'timezone' => 'Europe/Istanbul',
            ),
            406 => 
            array (
                'id' => 3407,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kırşehir Province',
                'timezone' => 'Europe/Istanbul',
            ),
            407 => 
            array (
                'id' => 3408,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kocaeli Province',
                'timezone' => 'Europe/Istanbul',
            ),
            408 => 
            array (
                'id' => 3409,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kütahya Province',
                'timezone' => 'Europe/Istanbul',
            ),
            409 => 
            array (
                'id' => 3410,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Malatya Province',
                'timezone' => 'Europe/Istanbul',
            ),
            410 => 
            array (
                'id' => 3411,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Manisa Province',
                'timezone' => 'Europe/Istanbul',
            ),
            411 => 
            array (
                'id' => 3412,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kahramanmaraş Province',
                'timezone' => 'Europe/Istanbul',
            ),
            412 => 
            array (
                'id' => 3413,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Muğla Province',
                'timezone' => 'Europe/Istanbul',
            ),
            413 => 
            array (
                'id' => 3414,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Muş Province',
                'timezone' => 'Europe/Istanbul',
            ),
            414 => 
            array (
                'id' => 3415,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Nevşehir',
                'timezone' => 'Europe/Istanbul',
            ),
            415 => 
            array (
                'id' => 3416,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Ordu',
                'timezone' => 'Europe/Istanbul',
            ),
            416 => 
            array (
                'id' => 3417,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Rize',
                'timezone' => 'Europe/Istanbul',
            ),
            417 => 
            array (
                'id' => 3418,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Sakarya Province',
                'timezone' => 'Europe/Istanbul',
            ),
            418 => 
            array (
                'id' => 3419,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Samsun Province',
                'timezone' => 'Europe/Istanbul',
            ),
            419 => 
            array (
                'id' => 3420,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Sinop Province',
                'timezone' => 'Europe/Istanbul',
            ),
            420 => 
            array (
                'id' => 3421,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Sivas Province',
                'timezone' => 'Europe/Istanbul',
            ),
            421 => 
            array (
                'id' => 3422,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Tekirdağ Province',
                'timezone' => 'Europe/Istanbul',
            ),
            422 => 
            array (
                'id' => 3423,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Tokat',
                'timezone' => 'Europe/Istanbul',
            ),
            423 => 
            array (
                'id' => 3424,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Trabzon Province',
                'timezone' => 'Europe/Istanbul',
            ),
            424 => 
            array (
                'id' => 3425,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Tunceli Province',
                'timezone' => 'Europe/Istanbul',
            ),
            425 => 
            array (
                'id' => 3426,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Şanlıurfa Province',
                'timezone' => 'Europe/Istanbul',
            ),
            426 => 
            array (
                'id' => 3427,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Uşak Province',
                'timezone' => 'Europe/Istanbul',
            ),
            427 => 
            array (
                'id' => 3428,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Van Province',
                'timezone' => 'Europe/Istanbul',
            ),
            428 => 
            array (
                'id' => 3429,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Yozgat Province',
                'timezone' => 'Europe/Istanbul',
            ),
            429 => 
            array (
                'id' => 3430,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Ankara Province',
                'timezone' => 'Europe/Istanbul',
            ),
            430 => 
            array (
                'id' => 3431,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Gümüşhane',
                'timezone' => 'Europe/Istanbul',
            ),
            431 => 
            array (
                'id' => 3432,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Hakkâri Province',
                'timezone' => 'Europe/Istanbul',
            ),
            432 => 
            array (
                'id' => 3433,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Konya Province',
                'timezone' => 'Europe/Istanbul',
            ),
            433 => 
            array (
                'id' => 3434,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Mardin Province',
                'timezone' => 'Europe/Istanbul',
            ),
            434 => 
            array (
                'id' => 3435,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Niğde',
                'timezone' => 'Europe/Istanbul',
            ),
            435 => 
            array (
                'id' => 3436,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Siirt Province',
                'timezone' => 'Europe/Istanbul',
            ),
            436 => 
            array (
                'id' => 3437,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Aksaray Province',
                'timezone' => 'Europe/Istanbul',
            ),
            437 => 
            array (
                'id' => 3438,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Batman Province',
                'timezone' => 'Europe/Istanbul',
            ),
            438 => 
            array (
                'id' => 3439,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bayburt',
                'timezone' => 'Europe/Istanbul',
            ),
            439 => 
            array (
                'id' => 3440,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Karaman Province',
                'timezone' => 'Europe/Istanbul',
            ),
            440 => 
            array (
                'id' => 3441,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kırıkkale Province',
                'timezone' => 'Europe/Istanbul',
            ),
            441 => 
            array (
                'id' => 3442,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Şırnak Province',
                'timezone' => 'Europe/Istanbul',
            ),
            442 => 
            array (
                'id' => 3443,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Adana Province',
                'timezone' => 'Europe/Istanbul',
            ),
            443 => 
            array (
                'id' => 3444,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Çankırı Province',
                'timezone' => 'Europe/Istanbul',
            ),
            444 => 
            array (
                'id' => 3445,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Gaziantep Province',
                'timezone' => 'Europe/Istanbul',
            ),
            445 => 
            array (
                'id' => 3446,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kars',
                'timezone' => 'Europe/Istanbul',
            ),
            446 => 
            array (
                'id' => 3447,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Zonguldak',
                'timezone' => 'Europe/Istanbul',
            ),
            447 => 
            array (
                'id' => 3448,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Ardahan Province',
                'timezone' => 'Europe/Istanbul',
            ),
            448 => 
            array (
                'id' => 3449,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Bartın Province',
                'timezone' => 'Europe/Istanbul',
            ),
            449 => 
            array (
                'id' => 3450,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Iğdır Province',
                'timezone' => 'Europe/Istanbul',
            ),
            450 => 
            array (
                'id' => 3451,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Karabük',
                'timezone' => 'Europe/Istanbul',
            ),
            451 => 
            array (
                'id' => 3452,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Kilis Province',
                'timezone' => 'Europe/Istanbul',
            ),
            452 => 
            array (
                'id' => 3453,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Osmaniye Province',
                'timezone' => 'Europe/Istanbul',
            ),
            453 => 
            array (
                'id' => 3454,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Yalova Province',
                'timezone' => 'Europe/Istanbul',
            ),
            454 => 
            array (
                'id' => 3455,
                'country_id' => 792,
                'iso' => '',
                'name' => 'Düzce',
                'timezone' => 'Europe/Istanbul',
            ),
            455 => 
            array (
                'id' => 3456,
                'country_id' => 795,
                'iso' => '',
                'name' => 'Ahal',
                'timezone' => 'Asia/Ashgabat',
            ),
            456 => 
            array (
                'id' => 3457,
                'country_id' => 795,
                'iso' => '',
                'name' => 'Balkan',
                'timezone' => 'Asia/Ashgabat',
            ),
            457 => 
            array (
                'id' => 3458,
                'country_id' => 795,
                'iso' => '',
                'name' => 'Daşoguz',
                'timezone' => 'Asia/Ashgabat',
            ),
            458 => 
            array (
                'id' => 3459,
                'country_id' => 795,
                'iso' => '',
                'name' => 'Lebap',
                'timezone' => 'Asia/Ashgabat',
            ),
            459 => 
            array (
                'id' => 3460,
                'country_id' => 795,
                'iso' => '',
                'name' => 'Mary',
                'timezone' => 'Asia/Ashgabat',
            ),
            460 => 
            array (
                'id' => 3461,
                'country_id' => 796,
                'iso' => '',
                'name' => 'Turks and Caicos Islands',
                'timezone' => 'America/Grand_Turk',
            ),
            461 => 
            array (
                'id' => 3462,
                'country_id' => 798,
                'iso' => '',
                'name' => 'Tuvalu',
                'timezone' => 'Pacific/Funafuti',
            ),
            462 => 
            array (
                'id' => 3463,
                'country_id' => 800,
                'iso' => '',
                'name' => 'Eastern Region',
                'timezone' => 'Africa/Kampala',
            ),
            463 => 
            array (
                'id' => 3464,
                'country_id' => 800,
                'iso' => '',
                'name' => 'Northern Region',
                'timezone' => 'Africa/Kampala',
            ),
            464 => 
            array (
                'id' => 3465,
                'country_id' => 800,
                'iso' => '',
                'name' => 'Central Region',
                'timezone' => 'Africa/Kampala',
            ),
            465 => 
            array (
                'id' => 3466,
                'country_id' => 800,
                'iso' => '',
                'name' => 'Western Region',
                'timezone' => 'Africa/Kampala',
            ),
            466 => 
            array (
                'id' => 3467,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Cherkasʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            467 => 
            array (
                'id' => 3468,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Chernihivsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            468 => 
            array (
                'id' => 3469,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Chernivetsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            469 => 
            array (
                'id' => 3470,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Dnipropetrovsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            470 => 
            array (
                'id' => 3471,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Donetsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            471 => 
            array (
                'id' => 3472,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Ivano-Frankivsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            472 => 
            array (
                'id' => 3473,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Kharkivsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            473 => 
            array (
                'id' => 3474,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Kherson Oblast',
                'timezone' => 'Europe/Kiev',
            ),
            474 => 
            array (
                'id' => 3475,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Khmelʼnytsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            475 => 
            array (
                'id' => 3476,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Kirovohradsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            476 => 
            array (
                'id' => 3477,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Avtonomna Respublika Krym',
                'timezone' => 'Europe/Kiev',
            ),
            477 => 
            array (
                'id' => 3478,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Misto Kyyiv',
                'timezone' => 'Europe/Kiev',
            ),
            478 => 
            array (
                'id' => 3479,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Kiev Oblast',
                'timezone' => 'Europe/Kiev',
            ),
            479 => 
            array (
                'id' => 3480,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Luhansʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            480 => 
            array (
                'id' => 3481,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Lʼvivsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            481 => 
            array (
                'id' => 3482,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Mykolayivsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            482 => 
            array (
                'id' => 3483,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Odessa Oblast',
                'timezone' => 'Europe/Kiev',
            ),
            483 => 
            array (
                'id' => 3484,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Poltava Oblast',
                'timezone' => 'Europe/Kiev',
            ),
            484 => 
            array (
                'id' => 3485,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Rivnensʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            485 => 
            array (
                'id' => 3486,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Misto Sevastopol',
                'timezone' => 'Europe/Kiev',
            ),
            486 => 
            array (
                'id' => 3487,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Sumy Oblast',
                'timezone' => 'Europe/Kiev',
            ),
            487 => 
            array (
                'id' => 3488,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Ternopilʼsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            488 => 
            array (
                'id' => 3489,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Vinnytsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            489 => 
            array (
                'id' => 3490,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Volynsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            490 => 
            array (
                'id' => 3491,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Zakarpatsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            491 => 
            array (
                'id' => 3492,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Zaporizʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            492 => 
            array (
                'id' => 3493,
                'country_id' => 804,
                'iso' => '',
                'name' => 'Zhytomyrsʼka Oblastʼ',
                'timezone' => 'Europe/Kiev',
            ),
            493 => 
            array (
                'id' => 3494,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Macedonia, The Former Yugoslav Republic of',
                'timezone' => 'Europe/Skopje',
            ),
            494 => 
            array (
                'id' => 3495,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Aračinovo',
                'timezone' => 'Europe/Skopje',
            ),
            495 => 
            array (
                'id' => 3496,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Bač',
                'timezone' => 'Europe/Skopje',
            ),
            496 => 
            array (
                'id' => 3497,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Belčišta',
                'timezone' => 'Europe/Skopje',
            ),
            497 => 
            array (
                'id' => 3498,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Berovo',
                'timezone' => 'Europe/Skopje',
            ),
            498 => 
            array (
                'id' => 3499,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Bistrica',
                'timezone' => 'Europe/Skopje',
            ),
            499 => 
            array (
                'id' => 3500,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Bitola',
                'timezone' => 'Europe/Skopje',
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Blatec',
                'timezone' => 'Europe/Skopje',
            ),
            1 => 
            array (
                'id' => 3502,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Bogdanci',
                'timezone' => 'Europe/Skopje',
            ),
            2 => 
            array (
                'id' => 3503,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Opstina Bogomila',
                'timezone' => 'Europe/Skopje',
            ),
            3 => 
            array (
                'id' => 3504,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Bogovinje',
                'timezone' => 'Europe/Skopje',
            ),
            4 => 
            array (
                'id' => 3505,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Bosilovo',
                'timezone' => 'Europe/Skopje',
            ),
            5 => 
            array (
                'id' => 3506,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Brvenica',
                'timezone' => 'Europe/Skopje',
            ),
            6 => 
            array (
                'id' => 3507,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Čair',
                'timezone' => 'Europe/Skopje',
            ),
            7 => 
            array (
                'id' => 3508,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Capari',
                'timezone' => 'Europe/Skopje',
            ),
            8 => 
            array (
                'id' => 3509,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Čaška',
                'timezone' => 'Europe/Skopje',
            ),
            9 => 
            array (
                'id' => 3510,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Čegrana',
                'timezone' => 'Europe/Skopje',
            ),
            10 => 
            array (
                'id' => 3511,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Centar',
                'timezone' => 'Europe/Skopje',
            ),
            11 => 
            array (
                'id' => 3512,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Centar Župa',
                'timezone' => 'Europe/Skopje',
            ),
            12 => 
            array (
                'id' => 3513,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Češinovo',
                'timezone' => 'Europe/Skopje',
            ),
            13 => 
            array (
                'id' => 3514,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Čučer-Sandevo',
                'timezone' => 'Europe/Skopje',
            ),
            14 => 
            array (
                'id' => 3515,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Debar',
                'timezone' => 'Europe/Skopje',
            ),
            15 => 
            array (
                'id' => 3516,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Delčevo',
                'timezone' => 'Europe/Skopje',
            ),
            16 => 
            array (
                'id' => 3517,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Delogoždi',
                'timezone' => 'Europe/Skopje',
            ),
            17 => 
            array (
                'id' => 3518,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Demir Hisar',
                'timezone' => 'Europe/Skopje',
            ),
            18 => 
            array (
                'id' => 3519,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Demir Kapija',
                'timezone' => 'Europe/Skopje',
            ),
            19 => 
            array (
                'id' => 3520,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Dobruševo',
                'timezone' => 'Europe/Skopje',
            ),
            20 => 
            array (
                'id' => 3521,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Dolna Banjica',
                'timezone' => 'Europe/Skopje',
            ),
            21 => 
            array (
                'id' => 3522,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Dolneni',
                'timezone' => 'Europe/Skopje',
            ),
            22 => 
            array (
                'id' => 3523,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Opstina Gjorce Petrov',
                'timezone' => 'Europe/Skopje',
            ),
            23 => 
            array (
                'id' => 3524,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Drugovo',
                'timezone' => 'Europe/Skopje',
            ),
            24 => 
            array (
                'id' => 3525,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Džepčište',
                'timezone' => 'Europe/Skopje',
            ),
            25 => 
            array (
                'id' => 3526,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Gazi Baba',
                'timezone' => 'Europe/Skopje',
            ),
            26 => 
            array (
                'id' => 3527,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Gevgelija',
                'timezone' => 'Europe/Skopje',
            ),
            27 => 
            array (
                'id' => 3528,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Gostivar',
                'timezone' => 'Europe/Skopje',
            ),
            28 => 
            array (
                'id' => 3529,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Gradsko',
                'timezone' => 'Europe/Skopje',
            ),
            29 => 
            array (
                'id' => 3530,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Ilinden',
                'timezone' => 'Europe/Skopje',
            ),
            30 => 
            array (
                'id' => 3531,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Izvor',
                'timezone' => 'Europe/Skopje',
            ),
            31 => 
            array (
                'id' => 3532,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Jegunovce',
                'timezone' => 'Europe/Skopje',
            ),
            32 => 
            array (
                'id' => 3533,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kamenjane',
                'timezone' => 'Europe/Skopje',
            ),
            33 => 
            array (
                'id' => 3534,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Karbinci',
                'timezone' => 'Europe/Skopje',
            ),
            34 => 
            array (
                'id' => 3535,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Karpoš',
                'timezone' => 'Europe/Skopje',
            ),
            35 => 
            array (
                'id' => 3536,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kavadarci',
                'timezone' => 'Europe/Skopje',
            ),
            36 => 
            array (
                'id' => 3537,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kičevo',
                'timezone' => 'Europe/Skopje',
            ),
            37 => 
            array (
                'id' => 3538,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kisela Voda',
                'timezone' => 'Europe/Skopje',
            ),
            38 => 
            array (
                'id' => 3539,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Klečevce',
                'timezone' => 'Europe/Skopje',
            ),
            39 => 
            array (
                'id' => 3540,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kočani',
                'timezone' => 'Europe/Skopje',
            ),
            40 => 
            array (
                'id' => 3541,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Konče',
                'timezone' => 'Europe/Skopje',
            ),
            41 => 
            array (
                'id' => 3542,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kondovo',
                'timezone' => 'Europe/Skopje',
            ),
            42 => 
            array (
                'id' => 3543,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Konopište',
                'timezone' => 'Europe/Skopje',
            ),
            43 => 
            array (
                'id' => 3544,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kosel',
                'timezone' => 'Europe/Skopje',
            ),
            44 => 
            array (
                'id' => 3545,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kratovo',
                'timezone' => 'Europe/Skopje',
            ),
            45 => 
            array (
                'id' => 3546,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kriva Palanka',
                'timezone' => 'Europe/Skopje',
            ),
            46 => 
            array (
                'id' => 3547,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Krivogaštani',
                'timezone' => 'Europe/Skopje',
            ),
            47 => 
            array (
                'id' => 3548,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kruševo',
                'timezone' => 'Europe/Skopje',
            ),
            48 => 
            array (
                'id' => 3549,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kukliš',
                'timezone' => 'Europe/Skopje',
            ),
            49 => 
            array (
                'id' => 3550,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kukurečani',
                'timezone' => 'Europe/Skopje',
            ),
            50 => 
            array (
                'id' => 3551,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Kumanovo',
                'timezone' => 'Europe/Skopje',
            ),
            51 => 
            array (
                'id' => 3552,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Labuništa',
                'timezone' => 'Europe/Skopje',
            ),
            52 => 
            array (
                'id' => 3553,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Opstina Lipkovo',
                'timezone' => 'Europe/Skopje',
            ),
            53 => 
            array (
                'id' => 3554,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Lozovo',
                'timezone' => 'Europe/Skopje',
            ),
            54 => 
            array (
                'id' => 3555,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Lukovo',
                'timezone' => 'Europe/Skopje',
            ),
            55 => 
            array (
                'id' => 3556,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Makedonska Kamenica',
                'timezone' => 'Europe/Skopje',
            ),
            56 => 
            array (
                'id' => 3557,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Makedonski Brod',
                'timezone' => 'Europe/Skopje',
            ),
            57 => 
            array (
                'id' => 3558,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Mavrovi Anovi',
                'timezone' => 'Europe/Skopje',
            ),
            58 => 
            array (
                'id' => 3559,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Mešeišta',
                'timezone' => 'Europe/Skopje',
            ),
            59 => 
            array (
                'id' => 3560,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Miravci',
                'timezone' => 'Europe/Skopje',
            ),
            60 => 
            array (
                'id' => 3561,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Mogila',
                'timezone' => 'Europe/Skopje',
            ),
            61 => 
            array (
                'id' => 3562,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Murtino',
                'timezone' => 'Europe/Skopje',
            ),
            62 => 
            array (
                'id' => 3563,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Negotino',
                'timezone' => 'Europe/Skopje',
            ),
            63 => 
            array (
                'id' => 3564,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Negotino-Pološko',
                'timezone' => 'Europe/Skopje',
            ),
            64 => 
            array (
                'id' => 3565,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Novaci',
                'timezone' => 'Europe/Skopje',
            ),
            65 => 
            array (
                'id' => 3566,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Novo Selo',
                'timezone' => 'Europe/Skopje',
            ),
            66 => 
            array (
                'id' => 3567,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Obleševo',
                'timezone' => 'Europe/Skopje',
            ),
            67 => 
            array (
                'id' => 3568,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Ohrid',
                'timezone' => 'Europe/Skopje',
            ),
            68 => 
            array (
                'id' => 3569,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Orašac',
                'timezone' => 'Europe/Skopje',
            ),
            69 => 
            array (
                'id' => 3570,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Orizari',
                'timezone' => 'Europe/Skopje',
            ),
            70 => 
            array (
                'id' => 3571,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Oslomej',
                'timezone' => 'Europe/Skopje',
            ),
            71 => 
            array (
                'id' => 3572,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Pehčevo',
                'timezone' => 'Europe/Skopje',
            ),
            72 => 
            array (
                'id' => 3573,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Petrovec',
                'timezone' => 'Europe/Skopje',
            ),
            73 => 
            array (
                'id' => 3574,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Plasnica',
                'timezone' => 'Europe/Skopje',
            ),
            74 => 
            array (
                'id' => 3575,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Podareš',
                'timezone' => 'Europe/Skopje',
            ),
            75 => 
            array (
                'id' => 3576,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Prilep',
                'timezone' => 'Europe/Skopje',
            ),
            76 => 
            array (
                'id' => 3577,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Probištip',
                'timezone' => 'Europe/Skopje',
            ),
            77 => 
            array (
                'id' => 3578,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Radoviš',
                'timezone' => 'Europe/Skopje',
            ),
            78 => 
            array (
                'id' => 3579,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Opstina Rankovce',
                'timezone' => 'Europe/Skopje',
            ),
            79 => 
            array (
                'id' => 3580,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Resen',
                'timezone' => 'Europe/Skopje',
            ),
            80 => 
            array (
                'id' => 3581,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Rosoman',
                'timezone' => 'Europe/Skopje',
            ),
            81 => 
            array (
                'id' => 3582,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Opština Rostuša',
                'timezone' => 'Europe/Skopje',
            ),
            82 => 
            array (
                'id' => 3583,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Samokov',
                'timezone' => 'Europe/Skopje',
            ),
            83 => 
            array (
                'id' => 3584,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Saraj',
                'timezone' => 'Europe/Skopje',
            ),
            84 => 
            array (
                'id' => 3585,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Šipkovica',
                'timezone' => 'Europe/Skopje',
            ),
            85 => 
            array (
                'id' => 3586,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Sopište',
                'timezone' => 'Europe/Skopje',
            ),
            86 => 
            array (
                'id' => 3587,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Sopotnica',
                'timezone' => 'Europe/Skopje',
            ),
            87 => 
            array (
                'id' => 3588,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Srbinovo',
                'timezone' => 'Europe/Skopje',
            ),
            88 => 
            array (
                'id' => 3589,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Staravina',
                'timezone' => 'Europe/Skopje',
            ),
            89 => 
            array (
                'id' => 3590,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Star Dojran',
                'timezone' => 'Europe/Skopje',
            ),
            90 => 
            array (
                'id' => 3591,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Staro Nagoričane',
                'timezone' => 'Europe/Skopje',
            ),
            91 => 
            array (
                'id' => 3592,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Štip',
                'timezone' => 'Europe/Skopje',
            ),
            92 => 
            array (
                'id' => 3593,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Struga',
                'timezone' => 'Europe/Skopje',
            ),
            93 => 
            array (
                'id' => 3594,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Strumica',
                'timezone' => 'Europe/Skopje',
            ),
            94 => 
            array (
                'id' => 3595,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Studeničani',
                'timezone' => 'Europe/Skopje',
            ),
            95 => 
            array (
                'id' => 3596,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Šuto Orizari',
                'timezone' => 'Europe/Skopje',
            ),
            96 => 
            array (
                'id' => 3597,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Sveti Nikole',
                'timezone' => 'Europe/Skopje',
            ),
            97 => 
            array (
                'id' => 3598,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Tearce',
                'timezone' => 'Europe/Skopje',
            ),
            98 => 
            array (
                'id' => 3599,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Tetovo',
                'timezone' => 'Europe/Skopje',
            ),
            99 => 
            array (
                'id' => 3600,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Topolčani',
                'timezone' => 'Europe/Skopje',
            ),
            100 => 
            array (
                'id' => 3601,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Valandovo',
                'timezone' => 'Europe/Skopje',
            ),
            101 => 
            array (
                'id' => 3602,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vasilevo',
                'timezone' => 'Europe/Skopje',
            ),
            102 => 
            array (
                'id' => 3603,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Veles',
                'timezone' => 'Europe/Skopje',
            ),
            103 => 
            array (
                'id' => 3604,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Velešta',
                'timezone' => 'Europe/Skopje',
            ),
            104 => 
            array (
                'id' => 3605,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vevčani',
                'timezone' => 'Europe/Skopje',
            ),
            105 => 
            array (
                'id' => 3606,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vinica',
                'timezone' => 'Europe/Skopje',
            ),
            106 => 
            array (
                'id' => 3607,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vitolište',
                'timezone' => 'Europe/Skopje',
            ),
            107 => 
            array (
                'id' => 3608,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vraneštica',
                'timezone' => 'Europe/Skopje',
            ),
            108 => 
            array (
                'id' => 3609,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vrapčište',
                'timezone' => 'Europe/Skopje',
            ),
            109 => 
            array (
                'id' => 3610,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vratnica',
                'timezone' => 'Europe/Skopje',
            ),
            110 => 
            array (
                'id' => 3611,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Vrutok',
                'timezone' => 'Europe/Skopje',
            ),
            111 => 
            array (
                'id' => 3612,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Zajas',
                'timezone' => 'Europe/Skopje',
            ),
            112 => 
            array (
                'id' => 3613,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Zelenikovo',
                'timezone' => 'Europe/Skopje',
            ),
            113 => 
            array (
                'id' => 3614,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Želino',
                'timezone' => 'Europe/Skopje',
            ),
            114 => 
            array (
                'id' => 3615,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Žitoše',
                'timezone' => 'Europe/Skopje',
            ),
            115 => 
            array (
                'id' => 3616,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Zletovo',
                'timezone' => 'Europe/Skopje',
            ),
            116 => 
            array (
                'id' => 3617,
                'country_id' => 807,
                'iso' => '',
                'name' => 'Zrnovci',
                'timezone' => 'Europe/Skopje',
            ),
            117 => 
            array (
                'id' => 3618,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Ad Daqahlīyah',
                'timezone' => 'Africa/Cairo',
            ),
            118 => 
            array (
                'id' => 3619,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Baḩr al Aḩmar',
                'timezone' => 'Africa/Cairo',
            ),
            119 => 
            array (
                'id' => 3620,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Buḩayrah',
                'timezone' => 'Africa/Cairo',
            ),
            120 => 
            array (
                'id' => 3621,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Fayyūm',
                'timezone' => 'Africa/Cairo',
            ),
            121 => 
            array (
                'id' => 3622,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Gharbīyah',
                'timezone' => 'Africa/Cairo',
            ),
            122 => 
            array (
                'id' => 3623,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Alexandria',
                'timezone' => 'Africa/Cairo',
            ),
            123 => 
            array (
                'id' => 3624,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Ismā‘īlīyah',
                'timezone' => 'Africa/Cairo',
            ),
            124 => 
            array (
                'id' => 3625,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Jīzah',
                'timezone' => 'Africa/Cairo',
            ),
            125 => 
            array (
                'id' => 3626,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Minūfīyah',
                'timezone' => 'Africa/Cairo',
            ),
            126 => 
            array (
                'id' => 3627,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Minyā',
                'timezone' => 'Africa/Cairo',
            ),
            127 => 
            array (
                'id' => 3628,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Qāhirah',
                'timezone' => 'Africa/Cairo',
            ),
            128 => 
            array (
                'id' => 3629,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Qalyūbīyah',
                'timezone' => 'Africa/Cairo',
            ),
            129 => 
            array (
                'id' => 3630,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Al Wādī al Jadīd',
                'timezone' => 'Africa/Cairo',
            ),
            130 => 
            array (
                'id' => 3631,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Eastern Province',
                'timezone' => 'Africa/Cairo',
            ),
            131 => 
            array (
                'id' => 3632,
                'country_id' => 818,
                'iso' => '',
                'name' => 'As Suways',
                'timezone' => 'Africa/Cairo',
            ),
            132 => 
            array (
                'id' => 3633,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Aswān',
                'timezone' => 'Africa/Cairo',
            ),
            133 => 
            array (
                'id' => 3634,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Asyūţ',
                'timezone' => 'Africa/Cairo',
            ),
            134 => 
            array (
                'id' => 3635,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Banī Suwayf',
                'timezone' => 'Africa/Cairo',
            ),
            135 => 
            array (
                'id' => 3636,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Būr Sa‘īd',
                'timezone' => 'Africa/Cairo',
            ),
            136 => 
            array (
                'id' => 3637,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Dumyāţ',
                'timezone' => 'Africa/Cairo',
            ),
            137 => 
            array (
                'id' => 3638,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Kafr ash Shaykh',
                'timezone' => 'Africa/Cairo',
            ),
            138 => 
            array (
                'id' => 3639,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Maţrūḩ',
                'timezone' => 'Africa/Cairo',
            ),
            139 => 
            array (
                'id' => 3640,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Qinā',
                'timezone' => 'Africa/Cairo',
            ),
            140 => 
            array (
                'id' => 3641,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Sūhāj',
                'timezone' => 'Africa/Cairo',
            ),
            141 => 
            array (
                'id' => 3642,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Janūb Sīnāʼ',
                'timezone' => 'Africa/Cairo',
            ),
            142 => 
            array (
                'id' => 3643,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Shamāl Sīnāʼ',
                'timezone' => 'Africa/Cairo',
            ),
            143 => 
            array (
                'id' => 3644,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Luxor',
                'timezone' => 'Africa/Cairo',
            ),
            144 => 
            array (
                'id' => 3645,
                'country_id' => 818,
                'iso' => '',
                'name' => 'Helwan',
                'timezone' => 'Africa/Cairo',
            ),
            145 => 
            array (
                'id' => 3646,
                'country_id' => 818,
                'iso' => '',
                'name' => '6th of October',
                'timezone' => 'Africa/Cairo',
            ),
            146 => 
            array (
                'id' => 3647,
                'country_id' => 826,
                'iso' => '',
                'name' => 'England',
                'timezone' => 'Europe/London',
            ),
            147 => 
            array (
                'id' => 3648,
                'country_id' => 826,
                'iso' => '',
                'name' => 'Northern Ireland',
                'timezone' => 'Europe/London',
            ),
            148 => 
            array (
                'id' => 3649,
                'country_id' => 826,
                'iso' => '',
                'name' => 'Scotland',
                'timezone' => 'Europe/London',
            ),
            149 => 
            array (
                'id' => 3650,
                'country_id' => 826,
                'iso' => '',
                'name' => 'Wales',
                'timezone' => 'Europe/London',
            ),
            150 => 
            array (
                'id' => 3651,
                'country_id' => 831,
                'iso' => '',
                'name' => 'Guernsey',
                'timezone' => 'Europe/Guernsey',
            ),
            151 => 
            array (
                'id' => 3652,
                'country_id' => 833,
                'iso' => '',
                'name' => 'Isle of Man',
                'timezone' => 'Europe/Isle_of_Man',
            ),
            152 => 
            array (
                'id' => 3653,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Arusha',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            153 => 
            array (
                'id' => 3654,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Pwani',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            154 => 
            array (
                'id' => 3655,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Dodoma',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            155 => 
            array (
                'id' => 3656,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Iringa',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            156 => 
            array (
                'id' => 3657,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Kigoma',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            157 => 
            array (
                'id' => 3658,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Kilimanjaro',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            158 => 
            array (
                'id' => 3659,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Lindi',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            159 => 
            array (
                'id' => 3660,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Mara',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            160 => 
            array (
                'id' => 3661,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Mbeya',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            161 => 
            array (
                'id' => 3662,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Morogoro',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            162 => 
            array (
                'id' => 3663,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Mtwara',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            163 => 
            array (
                'id' => 3664,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Mwanza',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            164 => 
            array (
                'id' => 3665,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Pemba North',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            165 => 
            array (
                'id' => 3666,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Ruvuma',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            166 => 
            array (
                'id' => 3667,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Shinyanga',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            167 => 
            array (
                'id' => 3668,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Singida',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            168 => 
            array (
                'id' => 3669,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Tabora',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            169 => 
            array (
                'id' => 3670,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Tanga',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            170 => 
            array (
                'id' => 3671,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Kagera',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            171 => 
            array (
                'id' => 3672,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Pemba South',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            172 => 
            array (
                'id' => 3673,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Zanzibar Central/South',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            173 => 
            array (
                'id' => 3674,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Zanzibar North',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            174 => 
            array (
                'id' => 3675,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Dar es Salaam',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            175 => 
            array (
                'id' => 3676,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Rukwa',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            176 => 
            array (
                'id' => 3677,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Zanzibar Urban/West',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            177 => 
            array (
                'id' => 3678,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Arusha',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            178 => 
            array (
                'id' => 3679,
                'country_id' => 834,
                'iso' => '',
                'name' => 'Manyara',
                'timezone' => 'Africa/Dar_es_Salaam',
            ),
            179 => 
            array (
                'id' => 3680,
                'country_id' => 840,
                'iso' => 'AK',
                'name' => 'Alaska',
                'timezone' => 'America/Anchorage',
            ),
            180 => 
            array (
                'id' => 3681,
                'country_id' => 840,
                'iso' => 'AL',
                'name' => 'Alabama',
                'timezone' => 'America/Chicago',
            ),
            181 => 
            array (
                'id' => 3682,
                'country_id' => 840,
                'iso' => 'AR',
                'name' => 'Arkansas',
                'timezone' => 'America/Chicago',
            ),
            182 => 
            array (
                'id' => 3683,
                'country_id' => 840,
                'iso' => 'AZ',
                'name' => 'Arizona',
                'timezone' => 'America/Phoenix',
            ),
            183 => 
            array (
                'id' => 3684,
                'country_id' => 840,
                'iso' => 'CA',
                'name' => 'California',
                'timezone' => 'America/Los_Angeles',
            ),
            184 => 
            array (
                'id' => 3685,
                'country_id' => 840,
                'iso' => 'CO',
                'name' => 'Colorado',
                'timezone' => 'America/Denver',
            ),
            185 => 
            array (
                'id' => 3686,
                'country_id' => 840,
                'iso' => 'CT',
                'name' => 'Connecticut',
                'timezone' => 'America/New_York',
            ),
            186 => 
            array (
                'id' => 3687,
                'country_id' => 840,
                'iso' => 'DC',
                'name' => 'District of Columbia',
                'timezone' => 'America/New_York',
            ),
            187 => 
            array (
                'id' => 3688,
                'country_id' => 840,
                'iso' => 'DE',
                'name' => 'Delaware',
                'timezone' => 'America/New_York',
            ),
            188 => 
            array (
                'id' => 3689,
                'country_id' => 840,
                'iso' => 'FL',
                'name' => 'Florida',
                'timezone' => 'America/New_York',
            ),
            189 => 
            array (
                'id' => 3690,
                'country_id' => 840,
                'iso' => 'GA',
                'name' => 'Georgia',
                'timezone' => 'America/New_York',
            ),
            190 => 
            array (
                'id' => 3691,
                'country_id' => 840,
                'iso' => 'HI',
                'name' => 'Hawaii',
                'timezone' => 'Pacific/Honolulu',
            ),
            191 => 
            array (
                'id' => 3692,
                'country_id' => 840,
                'iso' => 'IA',
                'name' => 'Iowa',
                'timezone' => 'America/Chicago',
            ),
            192 => 
            array (
                'id' => 3693,
                'country_id' => 840,
                'iso' => 'ID',
                'name' => 'Idaho',
                'timezone' => 'America/Denver',
            ),
            193 => 
            array (
                'id' => 3694,
                'country_id' => 840,
                'iso' => 'IL',
                'name' => 'Illinois',
                'timezone' => 'America/Chicago',
            ),
            194 => 
            array (
                'id' => 3695,
                'country_id' => 840,
                'iso' => 'IN',
                'name' => 'Indiana',
                'timezone' => 'America/New_York',
            ),
            195 => 
            array (
                'id' => 3696,
                'country_id' => 840,
                'iso' => 'KS',
                'name' => 'Kansas',
                'timezone' => 'America/Chicago',
            ),
            196 => 
            array (
                'id' => 3697,
                'country_id' => 840,
                'iso' => 'KY',
                'name' => 'Kentucky',
                'timezone' => 'America/New_York',
            ),
            197 => 
            array (
                'id' => 3698,
                'country_id' => 840,
                'iso' => 'LA',
                'name' => 'Louisiana',
                'timezone' => 'America/Chicago',
            ),
            198 => 
            array (
                'id' => 3699,
                'country_id' => 840,
                'iso' => 'MA',
                'name' => 'Massachusetts',
                'timezone' => 'America/New_York',
            ),
            199 => 
            array (
                'id' => 3700,
                'country_id' => 840,
                'iso' => 'MD',
                'name' => 'Maryland',
                'timezone' => 'America/New_York',
            ),
            200 => 
            array (
                'id' => 3701,
                'country_id' => 840,
                'iso' => 'ME',
                'name' => 'Maine',
                'timezone' => 'America/New_York',
            ),
            201 => 
            array (
                'id' => 3702,
                'country_id' => 840,
                'iso' => 'MI',
                'name' => 'Michigan',
                'timezone' => 'America/New_York',
            ),
            202 => 
            array (
                'id' => 3703,
                'country_id' => 840,
                'iso' => 'MN',
                'name' => 'Minnesota',
                'timezone' => 'America/Chicago',
            ),
            203 => 
            array (
                'id' => 3704,
                'country_id' => 840,
                'iso' => 'MO',
                'name' => 'Missouri',
                'timezone' => 'America/Chicago',
            ),
            204 => 
            array (
                'id' => 3705,
                'country_id' => 840,
                'iso' => 'MS',
                'name' => 'Mississippi',
                'timezone' => 'America/Chicago',
            ),
            205 => 
            array (
                'id' => 3706,
                'country_id' => 840,
                'iso' => 'MT',
                'name' => 'Montana',
                'timezone' => 'America/Denver',
            ),
            206 => 
            array (
                'id' => 3707,
                'country_id' => 840,
                'iso' => 'NC',
                'name' => 'North Carolina',
                'timezone' => 'America/New_York',
            ),
            207 => 
            array (
                'id' => 3708,
                'country_id' => 840,
                'iso' => 'ND',
                'name' => 'North Dakota',
                'timezone' => 'America/Chicago',
            ),
            208 => 
            array (
                'id' => 3709,
                'country_id' => 840,
                'iso' => 'NE',
                'name' => 'Nebraska',
                'timezone' => 'America/Chicago',
            ),
            209 => 
            array (
                'id' => 3710,
                'country_id' => 840,
                'iso' => 'NH',
                'name' => 'New Hampshire',
                'timezone' => 'America/New_York',
            ),
            210 => 
            array (
                'id' => 3711,
                'country_id' => 840,
                'iso' => 'NJ',
                'name' => 'New Jersey',
                'timezone' => 'America/New_York',
            ),
            211 => 
            array (
                'id' => 3712,
                'country_id' => 840,
                'iso' => 'NM',
                'name' => 'New Mexico',
                'timezone' => 'America/Denver',
            ),
            212 => 
            array (
                'id' => 3713,
                'country_id' => 840,
                'iso' => 'NV',
                'name' => 'Nevada',
                'timezone' => 'America/Los_Angeles',
            ),
            213 => 
            array (
                'id' => 3714,
                'country_id' => 840,
                'iso' => 'NY',
                'name' => 'New York',
                'timezone' => 'America/New_York',
            ),
            214 => 
            array (
                'id' => 3715,
                'country_id' => 840,
                'iso' => 'OH',
                'name' => 'Ohio',
                'timezone' => 'America/New_York',
            ),
            215 => 
            array (
                'id' => 3716,
                'country_id' => 840,
                'iso' => 'OK',
                'name' => 'Oklahoma',
                'timezone' => 'America/Chicago',
            ),
            216 => 
            array (
                'id' => 3717,
                'country_id' => 840,
                'iso' => 'OR',
                'name' => 'Oregon',
                'timezone' => 'America/Los_Angeles',
            ),
            217 => 
            array (
                'id' => 3718,
                'country_id' => 840,
                'iso' => 'PA',
                'name' => 'Pennsylvania',
                'timezone' => 'America/New_York',
            ),
            218 => 
            array (
                'id' => 3719,
                'country_id' => 840,
                'iso' => 'RI',
                'name' => 'Rhode Island',
                'timezone' => 'America/New_York',
            ),
            219 => 
            array (
                'id' => 3720,
                'country_id' => 840,
                'iso' => 'SC',
                'name' => 'South Carolina',
                'timezone' => 'America/New_York',
            ),
            220 => 
            array (
                'id' => 3721,
                'country_id' => 840,
                'iso' => 'SD',
                'name' => 'South Dakota',
                'timezone' => 'America/Chicago',
            ),
            221 => 
            array (
                'id' => 3722,
                'country_id' => 840,
                'iso' => 'TN',
                'name' => 'Tennessee',
                'timezone' => 'America/Chicago',
            ),
            222 => 
            array (
                'id' => 3723,
                'country_id' => 840,
                'iso' => 'TX',
                'name' => 'Texas',
                'timezone' => 'America/Chicago',
            ),
            223 => 
            array (
                'id' => 3724,
                'country_id' => 840,
                'iso' => 'UT',
                'name' => 'Utah',
                'timezone' => 'America/Denver',
            ),
            224 => 
            array (
                'id' => 3725,
                'country_id' => 840,
                'iso' => 'VA',
                'name' => 'Virginia',
                'timezone' => 'America/New_York',
            ),
            225 => 
            array (
                'id' => 3726,
                'country_id' => 840,
                'iso' => 'VT',
                'name' => 'Vermont',
                'timezone' => 'America/New_York',
            ),
            226 => 
            array (
                'id' => 3727,
                'country_id' => 840,
                'iso' => 'WA',
                'name' => 'Washington',
                'timezone' => 'America/Los_Angeles',
            ),
            227 => 
            array (
                'id' => 3728,
                'country_id' => 840,
                'iso' => 'WI',
                'name' => 'Wisconsin',
                'timezone' => 'America/Chicago',
            ),
            228 => 
            array (
                'id' => 3729,
                'country_id' => 840,
                'iso' => 'WV',
                'name' => 'West Virginia',
                'timezone' => 'America/New_York',
            ),
            229 => 
            array (
                'id' => 3730,
                'country_id' => 840,
                'iso' => 'WY',
                'name' => 'Wyoming',
                'timezone' => 'America/Denver',
            ),
            230 => 
            array (
                'id' => 3731,
                'country_id' => 850,
                'iso' => '',
                'name' => 'Virgin Islands',
                'timezone' => 'America/St_Thomas',
            ),
            231 => 
            array (
                'id' => 3732,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Boucle du Mouhoun',
                'timezone' => 'Africa/Ouagadougou',
            ),
            232 => 
            array (
                'id' => 3733,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Cascades',
                'timezone' => 'Africa/Ouagadougou',
            ),
            233 => 
            array (
                'id' => 3734,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Centre',
                'timezone' => 'Africa/Ouagadougou',
            ),
            234 => 
            array (
                'id' => 3735,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Centre-Est',
                'timezone' => 'Africa/Ouagadougou',
            ),
            235 => 
            array (
                'id' => 3736,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Centre-Nord',
                'timezone' => 'Africa/Ouagadougou',
            ),
            236 => 
            array (
                'id' => 3737,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Centre-Ouest',
                'timezone' => 'Africa/Ouagadougou',
            ),
            237 => 
            array (
                'id' => 3738,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Centre-Sud',
                'timezone' => 'Africa/Ouagadougou',
            ),
            238 => 
            array (
                'id' => 3739,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Est',
                'timezone' => 'Africa/Ouagadougou',
            ),
            239 => 
            array (
                'id' => 3740,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Hauts-Bassins',
                'timezone' => 'Africa/Ouagadougou',
            ),
            240 => 
            array (
                'id' => 3741,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Nord',
                'timezone' => 'Africa/Ouagadougou',
            ),
            241 => 
            array (
                'id' => 3742,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Plateau-Central',
                'timezone' => 'Africa/Ouagadougou',
            ),
            242 => 
            array (
                'id' => 3743,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Sahel',
                'timezone' => 'Africa/Ouagadougou',
            ),
            243 => 
            array (
                'id' => 3744,
                'country_id' => 854,
                'iso' => '',
                'name' => 'Sud-Ouest',
                'timezone' => 'Africa/Ouagadougou',
            ),
            244 => 
            array (
                'id' => 3745,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Deçanit',
                'timezone' => 'Europe/Belgrade',
            ),
            245 => 
            array (
                'id' => 3746,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Dragashit',
                'timezone' => 'Europe/Belgrade',
            ),
            246 => 
            array (
                'id' => 3747,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Ferizajt',
                'timezone' => 'Europe/Belgrade',
            ),
            247 => 
            array (
                'id' => 3748,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Fushë Kosovës',
                'timezone' => 'Europe/Belgrade',
            ),
            248 => 
            array (
                'id' => 3749,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Gjakovës',
                'timezone' => 'Europe/Belgrade',
            ),
            249 => 
            array (
                'id' => 3750,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Gjilanit',
                'timezone' => 'Europe/Belgrade',
            ),
            250 => 
            array (
                'id' => 3751,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Drenasit',
                'timezone' => 'Europe/Belgrade',
            ),
            251 => 
            array (
                'id' => 3752,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Istogut',
                'timezone' => 'Europe/Belgrade',
            ),
            252 => 
            array (
                'id' => 3753,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Kaçanikut',
                'timezone' => 'Europe/Belgrade',
            ),
            253 => 
            array (
                'id' => 3754,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Kamenicës',
                'timezone' => 'Europe/Belgrade',
            ),
            254 => 
            array (
                'id' => 3755,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Klinës',
                'timezone' => 'Europe/Belgrade',
            ),
            255 => 
            array (
                'id' => 3756,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Leposaviqit',
                'timezone' => 'Europe/Belgrade',
            ),
            256 => 
            array (
                'id' => 3757,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Lipjanit',
                'timezone' => 'Europe/Belgrade',
            ),
            257 => 
            array (
                'id' => 3758,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Malisheves',
                'timezone' => 'Europe/Belgrade',
            ),
            258 => 
            array (
                'id' => 3759,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Mitrovicës',
                'timezone' => 'Europe/Belgrade',
            ),
            259 => 
            array (
                'id' => 3760,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Novobërdës',
                'timezone' => 'Europe/Belgrade',
            ),
            260 => 
            array (
                'id' => 3761,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Obiliqit',
                'timezone' => 'Europe/Belgrade',
            ),
            261 => 
            array (
                'id' => 3762,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Pejës',
                'timezone' => 'Europe/Belgrade',
            ),
            262 => 
            array (
                'id' => 3763,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Podujevës',
                'timezone' => 'Europe/Belgrade',
            ),
            263 => 
            array (
                'id' => 3764,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Prishtinës',
                'timezone' => 'Europe/Belgrade',
            ),
            264 => 
            array (
                'id' => 3765,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Prizrenit',
                'timezone' => 'Europe/Belgrade',
            ),
            265 => 
            array (
                'id' => 3766,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Rahovecit',
                'timezone' => 'Europe/Belgrade',
            ),
            266 => 
            array (
                'id' => 3767,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Shtërpcës',
                'timezone' => 'Europe/Belgrade',
            ),
            267 => 
            array (
                'id' => 3768,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Shtimes',
                'timezone' => 'Europe/Belgrade',
            ),
            268 => 
            array (
                'id' => 3769,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Skenderajt',
                'timezone' => 'Europe/Belgrade',
            ),
            269 => 
            array (
                'id' => 3770,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Thërandës',
                'timezone' => 'Europe/Belgrade',
            ),
            270 => 
            array (
                'id' => 3771,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Vitisë',
                'timezone' => 'Europe/Belgrade',
            ),
            271 => 
            array (
                'id' => 3772,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Vushtrrisë',
                'timezone' => 'Europe/Belgrade',
            ),
            272 => 
            array (
                'id' => 3773,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Zubin Potokut',
                'timezone' => 'Europe/Belgrade',
            ),
            273 => 
            array (
                'id' => 3774,
                'country_id' => 855,
                'iso' => '',
                'name' => 'Komuna e Zveçanit',
                'timezone' => 'Europe/Belgrade',
            ),
            274 => 
            array (
                'id' => 3775,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Artigas Department',
                'timezone' => 'America/Montevideo',
            ),
            275 => 
            array (
                'id' => 3776,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Canelones Department',
                'timezone' => 'America/Montevideo',
            ),
            276 => 
            array (
                'id' => 3777,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Cerro Largo Department',
                'timezone' => 'America/Montevideo',
            ),
            277 => 
            array (
                'id' => 3778,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Colonia Department',
                'timezone' => 'America/Montevideo',
            ),
            278 => 
            array (
                'id' => 3779,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Durazno',
                'timezone' => 'America/Montevideo',
            ),
            279 => 
            array (
                'id' => 3780,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Flores',
                'timezone' => 'America/Montevideo',
            ),
            280 => 
            array (
                'id' => 3781,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Florida Department',
                'timezone' => 'America/Montevideo',
            ),
            281 => 
            array (
                'id' => 3782,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Lavalleja Department',
                'timezone' => 'America/Montevideo',
            ),
            282 => 
            array (
                'id' => 3783,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Maldonado Department',
                'timezone' => 'America/Montevideo',
            ),
            283 => 
            array (
                'id' => 3784,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Montevideo',
                'timezone' => 'America/Montevideo',
            ),
            284 => 
            array (
                'id' => 3785,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Paysandú',
                'timezone' => 'America/Montevideo',
            ),
            285 => 
            array (
                'id' => 3786,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Río Negro',
                'timezone' => 'America/Montevideo',
            ),
            286 => 
            array (
                'id' => 3787,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Rivera',
                'timezone' => 'America/Montevideo',
            ),
            287 => 
            array (
                'id' => 3788,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Rocha',
                'timezone' => 'America/Montevideo',
            ),
            288 => 
            array (
                'id' => 3789,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Salto',
                'timezone' => 'America/Montevideo',
            ),
            289 => 
            array (
                'id' => 3790,
                'country_id' => 858,
                'iso' => '',
                'name' => 'San José',
                'timezone' => 'America/Montevideo',
            ),
            290 => 
            array (
                'id' => 3791,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Soriano Department',
                'timezone' => 'America/Montevideo',
            ),
            291 => 
            array (
                'id' => 3792,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Tacuarembó',
                'timezone' => 'America/Montevideo',
            ),
            292 => 
            array (
                'id' => 3793,
                'country_id' => 858,
                'iso' => '',
                'name' => 'Treinta y Tres',
                'timezone' => 'America/Montevideo',
            ),
            293 => 
            array (
                'id' => 3794,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Andijon',
                'timezone' => 'Asia/Samarkand',
            ),
            294 => 
            array (
                'id' => 3795,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Buxoro',
                'timezone' => 'Asia/Samarkand',
            ),
            295 => 
            array (
                'id' => 3796,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Farg ona',
                'timezone' => 'Asia/Samarkand',
            ),
            296 => 
            array (
                'id' => 3797,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Xorazm',
                'timezone' => 'Asia/Samarkand',
            ),
            297 => 
            array (
                'id' => 3798,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Namangan',
                'timezone' => 'Asia/Samarkand',
            ),
            298 => 
            array (
                'id' => 3799,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Navoiy',
                'timezone' => 'Asia/Samarkand',
            ),
            299 => 
            array (
                'id' => 3800,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Qashqadaryo',
                'timezone' => 'Asia/Samarkand',
            ),
            300 => 
            array (
                'id' => 3801,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Karakalpakstan',
                'timezone' => 'Asia/Samarkand',
            ),
            301 => 
            array (
                'id' => 3802,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Samarqand',
                'timezone' => 'Asia/Samarkand',
            ),
            302 => 
            array (
                'id' => 3803,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Surxondaryo',
                'timezone' => 'Asia/Samarkand',
            ),
            303 => 
            array (
                'id' => 3804,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Toshkent Shahri',
                'timezone' => 'Asia/Samarkand',
            ),
            304 => 
            array (
                'id' => 3805,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Toshkent',
                'timezone' => 'Asia/Samarkand',
            ),
            305 => 
            array (
                'id' => 3806,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Jizzax',
                'timezone' => 'Asia/Samarkand',
            ),
            306 => 
            array (
                'id' => 3807,
                'country_id' => 860,
                'iso' => '',
                'name' => 'Sirdaryo',
                'timezone' => 'Asia/Samarkand',
            ),
            307 => 
            array (
                'id' => 3808,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Amazonas',
                'timezone' => 'America/Caracas',
            ),
            308 => 
            array (
                'id' => 3809,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Anzoátegui',
                'timezone' => 'America/Caracas',
            ),
            309 => 
            array (
                'id' => 3810,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Apure',
                'timezone' => 'America/Caracas',
            ),
            310 => 
            array (
                'id' => 3811,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Aragua',
                'timezone' => 'America/Caracas',
            ),
            311 => 
            array (
                'id' => 3812,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Barinas',
                'timezone' => 'America/Caracas',
            ),
            312 => 
            array (
                'id' => 3813,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Bolívar',
                'timezone' => 'America/Caracas',
            ),
            313 => 
            array (
                'id' => 3814,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Carabobo',
                'timezone' => 'America/Caracas',
            ),
            314 => 
            array (
                'id' => 3815,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Cojedes',
                'timezone' => 'America/Caracas',
            ),
            315 => 
            array (
                'id' => 3816,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Delta Amacuro',
                'timezone' => 'America/Caracas',
            ),
            316 => 
            array (
                'id' => 3817,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Distrito Federal',
                'timezone' => 'America/Caracas',
            ),
            317 => 
            array (
                'id' => 3818,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Falcón',
                'timezone' => 'America/Caracas',
            ),
            318 => 
            array (
                'id' => 3819,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Guárico',
                'timezone' => 'America/Caracas',
            ),
            319 => 
            array (
                'id' => 3820,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Lara',
                'timezone' => 'America/Caracas',
            ),
            320 => 
            array (
                'id' => 3821,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Mérida',
                'timezone' => 'America/Caracas',
            ),
            321 => 
            array (
                'id' => 3822,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Miranda',
                'timezone' => 'America/Caracas',
            ),
            322 => 
            array (
                'id' => 3823,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Monagas',
                'timezone' => 'America/Caracas',
            ),
            323 => 
            array (
                'id' => 3824,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Isla Margarita',
                'timezone' => 'America/Caracas',
            ),
            324 => 
            array (
                'id' => 3825,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Portuguesa',
                'timezone' => 'America/Caracas',
            ),
            325 => 
            array (
                'id' => 3826,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Sucre',
                'timezone' => 'America/Caracas',
            ),
            326 => 
            array (
                'id' => 3827,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Táchira',
                'timezone' => 'America/Caracas',
            ),
            327 => 
            array (
                'id' => 3828,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Trujillo',
                'timezone' => 'America/Caracas',
            ),
            328 => 
            array (
                'id' => 3829,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Yaracuy',
                'timezone' => 'America/Caracas',
            ),
            329 => 
            array (
                'id' => 3830,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Zulia',
                'timezone' => 'America/Caracas',
            ),
            330 => 
            array (
                'id' => 3831,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Dependencias Federales',
                'timezone' => 'America/Caracas',
            ),
            331 => 
            array (
                'id' => 3832,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Distrito Capital',
                'timezone' => 'America/Caracas',
            ),
            332 => 
            array (
                'id' => 3833,
                'country_id' => 862,
                'iso' => '',
                'name' => 'Vargas',
                'timezone' => 'America/Caracas',
            ),
            333 => 
            array (
                'id' => 3834,
                'country_id' => 882,
                'iso' => '',
                'name' => 'A‘ana',
                'timezone' => 'Pacific/Apia',
            ),
            334 => 
            array (
                'id' => 3835,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Aiga-i-le-Tai',
                'timezone' => 'Pacific/Apia',
            ),
            335 => 
            array (
                'id' => 3836,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Atua',
                'timezone' => 'Pacific/Apia',
            ),
            336 => 
            array (
                'id' => 3837,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Fa‘asaleleaga',
                'timezone' => 'Pacific/Apia',
            ),
            337 => 
            array (
                'id' => 3838,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Gaga‘emauga',
                'timezone' => 'Pacific/Apia',
            ),
            338 => 
            array (
                'id' => 3839,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Va‘a-o-Fonoti',
                'timezone' => 'Pacific/Apia',
            ),
            339 => 
            array (
                'id' => 3840,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Gagaifomauga',
                'timezone' => 'Pacific/Apia',
            ),
            340 => 
            array (
                'id' => 3841,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Palauli',
                'timezone' => 'Pacific/Apia',
            ),
            341 => 
            array (
                'id' => 3842,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Satupa‘itea',
                'timezone' => 'Pacific/Apia',
            ),
            342 => 
            array (
                'id' => 3843,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Tuamasaga',
                'timezone' => 'Pacific/Apia',
            ),
            343 => 
            array (
                'id' => 3844,
                'country_id' => 882,
                'iso' => '',
                'name' => 'Vaisigano',
                'timezone' => 'Pacific/Apia',
            ),
            344 => 
            array (
                'id' => 3845,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Abyan',
                'timezone' => 'Asia/Aden',
            ),
            345 => 
            array (
                'id' => 3846,
                'country_id' => 887,
                'iso' => '',
                'name' => '‘Adan',
                'timezone' => 'Asia/Aden',
            ),
            346 => 
            array (
                'id' => 3847,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Al Mahrah',
                'timezone' => 'Asia/Aden',
            ),
            347 => 
            array (
                'id' => 3848,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Ḩaḑramawt',
                'timezone' => 'Asia/Aden',
            ),
            348 => 
            array (
                'id' => 3849,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Shabwah',
                'timezone' => 'Asia/Aden',
            ),
            349 => 
            array (
                'id' => 3850,
                'country_id' => 887,
                'iso' => '',
                'name' => 'San’a’',
                'timezone' => 'Asia/Aden',
            ),
            350 => 
            array (
                'id' => 3851,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Ta’izz',
                'timezone' => 'Asia/Aden',
            ),
            351 => 
            array (
                'id' => 3852,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Al Ḩudaydah',
                'timezone' => 'Asia/Aden',
            ),
            352 => 
            array (
                'id' => 3853,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Dhamar',
                'timezone' => 'Asia/Aden',
            ),
            353 => 
            array (
                'id' => 3854,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Al Maḩwīt',
                'timezone' => 'Asia/Aden',
            ),
            354 => 
            array (
                'id' => 3855,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Dhamār',
                'timezone' => 'Asia/Aden',
            ),
            355 => 
            array (
                'id' => 3856,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Maʼrib',
                'timezone' => 'Asia/Aden',
            ),
            356 => 
            array (
                'id' => 3857,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Şa‘dah',
                'timezone' => 'Asia/Aden',
            ),
            357 => 
            array (
                'id' => 3858,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Şan‘āʼ',
                'timezone' => 'Asia/Aden',
            ),
            358 => 
            array (
                'id' => 3859,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Aḑ Ḑāli‘',
                'timezone' => 'Asia/Aden',
            ),
            359 => 
            array (
                'id' => 3860,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Omran',
                'timezone' => 'Asia/Aden',
            ),
            360 => 
            array (
                'id' => 3861,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Al Bayḑāʼ',
                'timezone' => 'Asia/Aden',
            ),
            361 => 
            array (
                'id' => 3862,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Al Jawf',
                'timezone' => 'Asia/Aden',
            ),
            362 => 
            array (
                'id' => 3863,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Ḩajjah',
                'timezone' => 'Asia/Aden',
            ),
            363 => 
            array (
                'id' => 3864,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Ibb',
                'timezone' => 'Asia/Aden',
            ),
            364 => 
            array (
                'id' => 3865,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Laḩij',
                'timezone' => 'Asia/Aden',
            ),
            365 => 
            array (
                'id' => 3866,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Ta‘izz',
                'timezone' => 'Asia/Aden',
            ),
            366 => 
            array (
                'id' => 3867,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Amanat Al Asimah',
                'timezone' => 'Asia/Aden',
            ),
            367 => 
            array (
                'id' => 3868,
                'country_id' => 887,
                'iso' => '',
                'name' => 'Muḩāfaz̧at Raymah',
                'timezone' => 'Asia/Aden',
            ),
            368 => 
            array (
                'id' => 3869,
                'country_id' => 891,
                'iso' => '',
            'name' => 'Crna Gora (Montenegro)',
                'timezone' => 'Europe/Podgorica',
            ),
            369 => 
            array (
                'id' => 3870,
                'country_id' => 891,
                'iso' => '',
            'name' => 'Srbija (Serbia)',
                'timezone' => 'Europe/Podgorica',
            ),
            370 => 
            array (
                'id' => 3871,
                'country_id' => 894,
                'iso' => '',
                'name' => 'North-Western',
                'timezone' => 'Africa/Lusaka',
            ),
            371 => 
            array (
                'id' => 3872,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Copperbelt',
                'timezone' => 'Africa/Lusaka',
            ),
            372 => 
            array (
                'id' => 3873,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Western',
                'timezone' => 'Africa/Lusaka',
            ),
            373 => 
            array (
                'id' => 3874,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Southern',
                'timezone' => 'Africa/Lusaka',
            ),
            374 => 
            array (
                'id' => 3875,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Central',
                'timezone' => 'Africa/Lusaka',
            ),
            375 => 
            array (
                'id' => 3876,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Eastern',
                'timezone' => 'Africa/Lusaka',
            ),
            376 => 
            array (
                'id' => 3877,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Northern',
                'timezone' => 'Africa/Lusaka',
            ),
            377 => 
            array (
                'id' => 3878,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Luapula',
                'timezone' => 'Africa/Lusaka',
            ),
            378 => 
            array (
                'id' => 3879,
                'country_id' => 894,
                'iso' => '',
                'name' => 'Lusaka',
                'timezone' => 'Africa/Lusaka',
            ),
        ));
        
        
    }
}

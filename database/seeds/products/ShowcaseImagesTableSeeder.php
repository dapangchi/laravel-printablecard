<?php

use Illuminate\Database\Seeder;

class ShowcaseImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('showcase_images')->delete();
        
        \DB::table('showcase_images')->insert(array (
            0 => 
            array (
                'id' => 7,
                'showcase_id' => 1,
                'image' => 'upload/showcase/c/g/duplexblack_aerodetail01.jpg',
                'label' => '',
                'sort' => 7,
                'main' => 0,
                'exclude' => 0,
            ),
            1 => 
            array (
                'id' => 8,
                'showcase_id' => 1,
                'image' => 'upload/showcase/4/o/duplexblack_aerodetail02.jpg',
                'label' => '',
                'sort' => 8,
                'main' => 0,
                'exclude' => 0,
            ),
            2 => 
            array (
                'id' => 9,
                'showcase_id' => 1,
                'image' => 'upload/showcase/g/a/duplexblack_aerodetail03.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            3 => 
            array (
                'id' => 10,
                'showcase_id' => 1,
                'image' => 'upload/showcase/2/a/duplexblack_aerodetailf01.jpg',
                'label' => '',
                'sort' => 10,
                'main' => 0,
                'exclude' => 0,
            ),
            4 => 
            array (
                'id' => 11,
                'showcase_id' => 1,
                'image' => 'upload/showcase/a/c/duplexblack_aerodetailf02.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            5 => 
            array (
                'id' => 12,
                'showcase_id' => 1,
                'image' => 'upload/showcase/m/b/duplexblack_aerodetailf03.jpg',
                'label' => '',
                'sort' => 12,
                'main' => 0,
                'exclude' => 0,
            ),
            6 => 
            array (
                'id' => 13,
                'showcase_id' => 2,
                'image' => 'upload/showcase/7/g/duplexblack_icon02.jpg',
                'label' => '',
                'sort' => 1,
                'main' => 1,
                'exclude' => 0,
            ),
            7 => 
            array (
                'id' => 14,
                'showcase_id' => 2,
                'image' => 'upload/showcase/x/c/duplexblack_icon03.jpg',
                'label' => '',
                'sort' => 2,
                'main' => 0,
                'exclude' => 0,
            ),
            8 => 
            array (
                'id' => 15,
                'showcase_id' => 2,
                'image' => 'upload/showcase/k/3/duplexblack_icon05.jpg',
                'label' => '',
                'sort' => 4,
                'main' => 0,
                'exclude' => 0,
            ),
            9 => 
            array (
                'id' => 16,
                'showcase_id' => 2,
                'image' => 'upload/showcase/0/k/duplexblack_icon06.jpg',
                'label' => '',
                'sort' => 5,
                'main' => 0,
                'exclude' => 0,
            ),
        ));
        
        
    }
}

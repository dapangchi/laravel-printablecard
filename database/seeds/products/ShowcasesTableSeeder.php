<?php

use Illuminate\Database\Seeder;

class ShowcasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('showcases')->delete();
        
        \DB::table('showcases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 1,
                'showcase_type' => 6,
                'name' => 'Black Business Card Design1',
                'description' => '',
                'meta_tag' => '',
                'meta_description' => '',
                'slug' => 'black-business-card-design1',
                'status' => 1,
                'created_at' => '2016-02-13 01:25:32',
                'updated_at' => '2016-02-13 02:02:47',
            ),
            1 => 
            array (
                'id' => 2,
                'card_id' => 1,
                'showcase_type' => 6,
                'name' => 'Black Business Card Design',
                'description' => '',
                'meta_tag' => '',
                'meta_description' => '',
                'slug' => 'black-business-card-design',
                'status' => 1,
                'created_at' => '2016-02-13 02:00:49',
                'updated_at' => '2016-03-13 05:52:07',
            ),
        ));
        
        
    }
}

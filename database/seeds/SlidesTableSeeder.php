<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slides')->delete();
        
        \DB::table('slides')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Business Card Content',
                'description' => NULL,
                'created_at' => '2016-01-30 19:25:52',
                'updated_at' => '2016-01-30 19:25:52',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Invitation Card Content',
                'description' => NULL,
                'created_at' => '2016-02-01 09:54:05',
                'updated_at' => '2016-02-01 09:54:05',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Logo design',
                'description' => NULL,
                'created_at' => '2016-02-14 11:32:48',
                'updated_at' => '2016-02-14 11:32:48',
            ),
        ));
        
        
    }
}

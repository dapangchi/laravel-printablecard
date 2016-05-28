<?php

use Illuminate\Database\Seeder;

class ShowcaseTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('showcase_tags')->delete();
        
        \DB::table('showcase_tags')->insert(array (
            0 => 
            array (
                'id' => 13,
                'showcase_id' => 1,
                'tag_id' => 3,
            ),
            1 => 
            array (
                'id' => 14,
                'showcase_id' => 1,
                'tag_id' => 4,
            ),
            2 => 
            array (
                'id' => 16,
                'showcase_id' => 2,
                'tag_id' => 5,
            ),
        ));
        
        
    }
}

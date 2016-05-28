<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'admin@rockdesign.com',
                'password' => '190ae91c421293801f870c76c535dd78',
                'passsalt' => 'LdjFDzic',
                'first_name' => 'Rock',
                'last_name' => 'Design',
                'logdate' => '2016-03-30 20:09:05',
                'lognum' => 354,
                'is_active' => 1,
                'active_code' => NULL,
                'created_at' => '2015-10-03 19:31:28',
                'updated_at' => '2016-03-30 19:09:05',
            ),
        ));
        
        
    }
}

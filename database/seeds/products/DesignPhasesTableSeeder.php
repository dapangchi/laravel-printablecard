<?php

use Illuminate\Database\Seeder;

class DesignPhasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('design_phases')->delete();
        
        \DB::table('design_phases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'design_id' => 1,
                'title' => 'Customer file',
            'text' => 'You will need to provide us your information, files such as logo, photo etc. (we only accept vector format for logo)',
                'icon_type' => 1,
                'icon_path' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'design_id' => 1,
                'title' => 'Idea + Brainstorm',
                'text' => 'We understand your target market, industry, and style you are looking for',
                'icon_type' => 2,
                'icon_path' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'design_id' => 1,
                'title' => 'Design',
                'text' => 'Our professional designer will start designing based on the customer\'s information',
                'icon_type' => 3,
                'icon_path' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'design_id' => 1,
                'title' => 'Revisions',
                'text' => 'We will modify the designs according to customer\'s request',
                'icon_type' => 4,
                'icon_path' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'design_id' => 1,
                'title' => 'Turnaround Time',
                'text' => '1-3 business days',
                'icon_type' => 5,
                'icon_path' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'design_id' => 2,
                'title' => 'Design Brief',
                'text' => 'Customer will need to provide us the a detail design brief prior to the design process',
                'icon_type' => 1,
                'icon_path' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'design_id' => 2,
                'title' => 'Idea + Brainstorm',
                'text' => 'Our designer will  research on your target market and industry',
                'icon_type' => 2,
                'icon_path' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'design_id' => 2,
                'title' => 'Design',
                'text' => 'Our designer will start designing based on the customer\'s information',
                'icon_type' => 3,
                'icon_path' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'design_id' => 2,
                'title' => 'Revisions',
            'text' => 'We will modify the designs according to customer\'s request (within the project scope)',
                'icon_type' => 4,
                'icon_path' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'design_id' => 2,
                'title' => 'Turnaround Time',
                'text' => '5 - 7 Business Days',
                'icon_type' => 5,
                'icon_path' => '',
            ),
        ));
        
        
    }
}

<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'business cards - online visiting card printing',
                'slug' => 'business-card-content',
                'meta_tag' => 'business cards, visiting card, name card, business cards online, online printing, best business cards, business card template, creative business cards, visiting cards',
                'meta_description' => 'Rockdesign is an online printing services which offers best creative business cards that will make your brand elevate to a new level.  Our visiting card ranges from luxury, metal, plastic, premium, high end name cards.  You can customize your business cards with features such as: letterpress, embossing, printing, spot UV, offset printing, thermography, laser cutting, laser engraving, digital printing and much more. ',
                'short_text' => NULL,
                'slide_id' => 1,
                'created_at' => '2016-01-30 19:23:04',
                'updated_at' => '2016-02-19 02:16:23',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Invitation Card Content',
                'slug' => 'invitation-card-content',
                'meta_tag' => 'Invitation Card Content',
                'meta_description' => 'Invitation Card Content',
                'short_text' => NULL,
                'slide_id' => 2,
                'created_at' => '2016-01-30 19:26:16',
                'updated_at' => '2016-02-01 09:54:12',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Business Card Template',
                'slug' => 'business-card-template',
                'meta_tag' => 'Business Card Template, Business Card Templates, business card design, name card design',
                'meta_description' => 'Free Business Card Templates for Rockdesign Printing customer, Order a Professional business card template online. Choose from our selection of cardstocks and design styles',
                'short_text' => NULL,
                'slide_id' => 1,
                'created_at' => '2016-01-30 19:26:28',
                'updated_at' => '2016-02-19 02:29:58',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Invitation Card Template',
                'slug' => 'invitation-card-template',
                'meta_tag' => 'Invitation Card Template',
                'meta_description' => 'Invitation Card Template',
                'short_text' => NULL,
                'slide_id' => 1,
                'created_at' => '2016-01-30 19:26:59',
                'updated_at' => '2016-01-30 19:27:08',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Rockdesign : Design Services',
                'slug' => 'design-service',
                'meta_tag' => 'Logo Design, business card design, branding, brand design, Best logo design, graphic design',
                'meta_description' => 'Let our creative designers help you build your brand - offering premium logo and business card design services.
',
                'short_text' => NULL,
                'slide_id' => 1,
                'created_at' => '2016-01-30 19:27:11',
                'updated_at' => '2016-02-26 01:23:46',
            ),
        ));
        
        
    }
}

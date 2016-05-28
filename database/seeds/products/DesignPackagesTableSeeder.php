<?php

use Illuminate\Database\Seeder;

class DesignPackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('design_packages')->delete();
        
        \DB::table('design_packages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'design_id' => 1,
                'name' => 'Simple Business Card Design',
                'price' => 50,
                'description' => '1 Business Card Design Based On Client\'s Concepts
3 Revisions
1 Customized Layout
Complete Print File Proof
Complete Print File Setup

Please Note:
This service is $150 for clients not printing with RockDesign',
                'image' => 'upload/design/category/l/o/logo-design12-2.jpg',
                'slug' => 'simple-business-card-design',
                'created_at' => '2016-02-10 22:55:23',
                'updated_at' => '2016-02-18 22:47:58',
            ),
            1 => 
            array (
                'id' => 2,
                'design_id' => 2,
                'name' => 'Simple Logo Design',
                'price' => 595,
                'description' => '3 Logo Design Concepts
5 Logo Revisions 

2 Custom Business Card Design Concepts 
4 Business Card Design Revisions
Complete PDF Proof
Complete Print File Setup 

Please Note:
This service is $795 for clients not printing with RockDesign',
                'image' => 'upload/design/category/s/c/screen shot 2016-02-12 at 11.34.05 am.png',
                'slug' => 'simple-logo-design',
                'created_at' => '2016-02-12 00:40:43',
                'updated_at' => '2016-02-18 22:45:38',
            ),
            2 => 
            array (
                'id' => 3,
                'design_id' => 2,
                'name' => 'Professional Logo Design',
                'price' => 695,
                'description' => '4 Logo Design Concepts
7 Logo Revisions 

3 Custom Business Card Design Concepts 
4 Business Card Design Revisions
Complete PDF Proof
Complete Print File Setup 

Please Note:
This service is $895 for clients not printing with RockDesign',
                'image' => 'upload/design/category/s/c/screen shot 2016-02-12 at 11.33.18 am.png',
                'slug' => 'professional-logo-design',
                'created_at' => '2016-02-12 19:33:44',
                'updated_at' => '2016-02-18 22:44:57',
            ),
            3 => 
            array (
                'id' => 4,
                'design_id' => 2,
                'name' => 'Premium Logo Design',
                'price' => 895,
                'description' => '6 Logo Design Concepts
10 Logo Revisions 

4 Custom Business Card Design Concepts 
7 Business Card Design Revisions
Complete PDF Proof
Complete Print File Setup 

Please Note:
This service is $1095 for clients not printing with RockDesign',
                'image' => 'upload/design/category/s/c/screen shot 2016-02-12 at 11.37.11 am.png',
                'slug' => 'premium-logo-design',
                'created_at' => '2016-02-12 19:38:11',
                'updated_at' => '2016-02-18 22:44:18',
            ),
            4 => 
            array (
                'id' => 5,
                'design_id' => 1,
                'name' => 'Custom Business Card Design',
                'price' => 95,
                'description' => '3 Unique Business Card Design Concepts
6 Revisions
3 Customized Layout
Complete Print File Proof
Complete Print File Setup

Please Note:
This service is $195 for clients not printing with RockDesign 
',
                'image' => 'upload/design/category/l/o/logo-design3-4.jpg',
                'slug' => 'custom-business-card-design',
                'created_at' => '2016-02-14 21:48:31',
                'updated_at' => '2016-02-18 22:47:03',
            ),
        ));
        
        
    }
}

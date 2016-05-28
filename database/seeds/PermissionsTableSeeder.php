<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'conf.setting.manage',
                'name' => 'Setting Management',
                'description' => 'can update website settings',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'conf.member.manage',
                'name' => 'Member Management',
                'description' => 'can create/update members',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'conf.content.manage',
                'name' => 'Content Management',
                'description' => 'can edit pages, slideshows and homepage slide images',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'code' => 'sales.customer.view',
                'name' => 'Customer View',
                'description' => 'can view customer list and personal info',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'code' => 'sales.customer.manage',
                'name' => 'Customer Management',
                'description' => 'can add/edit customers',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'code' => 'sales.order.view',
                'name' => 'Order View',
                'description' => 'can view order history',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'code' => 'sales.order.manage',
                'name' => 'Order Management',
                'description' => 'can assign order to stuff and edit if needed',
                'status' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'code' => 'product.template.view',
                'name' => 'Template View',
                'description' => 'can view template list and it\'s details',
                'status' => 1,
                'created_at' => '2016-04-08 15:47:56',
                'updated_at' => '2016-04-08 15:47:56',
            ),
            8 => 
            array (
                'id' => 11,
                'code' => 'product.template.manage',
                'name' => 'Template Management',
                'description' => 'can add/update templates',
                'status' => 1,
                'created_at' => '2016-04-08 15:48:40',
                'updated_at' => '2016-04-08 15:48:40',
            ),
            9 => 
            array (
                'id' => 12,
                'code' => 'product.design.view',
                'name' => 'Design Service View',
                'description' => 'can view design services',
                'status' => 1,
                'created_at' => '2016-04-08 15:49:20',
                'updated_at' => '2016-04-08 15:49:20',
            ),
            10 => 
            array (
                'id' => 13,
                'code' => 'product.design.manage',
                'name' => 'Design Service Management',
                'description' => 'can add/update design services',
                'status' => 1,
                'created_at' => '2016-04-08 15:50:02',
                'updated_at' => '2016-04-08 15:50:02',
            ),
            11 => 
            array (
                'id' => 14,
                'code' => 'product.showcase.view',
                'name' => 'Design Showcase View',
                'description' => 'can view design showcases',
                'status' => 1,
                'created_at' => '2016-04-08 15:50:36',
                'updated_at' => '2016-04-08 15:50:36',
            ),
            12 => 
            array (
                'id' => 15,
                'code' => 'product.showcase.manage',
                'name' => 'Design Showcase Management',
                'description' => 'can manage design showcases',
                'status' => 1,
                'created_at' => '2016-04-08 15:52:57',
                'updated_at' => '2016-04-08 15:52:57',
            ),
            13 => 
            array (
                'id' => 16,
                'code' => 'product.logosample.view',
                'name' => 'Logo Samples View',
                'description' => 'can view logo samples',
                'status' => 1,
                'created_at' => '2016-04-08 15:53:26',
                'updated_at' => '2016-04-08 15:53:26',
            ),
            14 => 
            array (
                'id' => 17,
                'code' => 'product.logosample.manage',
                'name' => 'Logo Sample Management',
                'description' => 'can manage logo samples',
                'status' => 1,
                'created_at' => '2016-04-08 15:53:53',
                'updated_at' => '2016-04-08 15:53:53',
            ),
            15 => 
            array (
                'id' => 18,
                'code' => 'sales.setting.view',
                'name' => 'Sales Setting View',
                'description' => 'can view coupon and taxzones',
                'status' => 1,
                'created_at' => '2016-04-08 15:54:00',
                'updated_at' => '2016-04-08 15:57:53',
            ),
            16 => 
            array (
                'id' => 19,
                'code' => 'sales.setting.manage',
                'name' => 'Sales Setting Management',
                'description' => 'can manage coupon and taxzones',
                'status' => 1,
                'created_at' => '2016-04-08 16:07:13',
                'updated_at' => '2016-04-08 16:07:13',
            ),
        ));
        
        
    }
}

<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'name' => 'email.driver',
                'module' => 'email',
                'value' => 'sendmail',
            ),
            1 => 
            array (
                'name' => 'email.host',
                'module' => 'email',
                'value' => 'http://stmp.com ',
            ),
            2 => 
            array (
                'name' => 'email.password',
                'module' => 'email',
                'value' => 'password',
            ),
            3 => 
            array (
                'name' => 'email.port',
                'module' => 'email',
                'value' => '566',
            ),
            4 => 
            array (
                'name' => 'email.saler_email',
                'module' => 'email',
                'value' => 'sales@rockdesign.com',
            ),
            5 => 
            array (
                'name' => 'email.saler_name',
                'module' => 'email',
                'value' => 'Sales Manager',
            ),
            6 => 
            array (
                'name' => 'email.sampler_email',
                'module' => 'email',
                'value' => 'sample@rockdesign.com',
            ),
            7 => 
            array (
                'name' => 'email.sampler_name',
                'module' => 'email',
                'value' => 'Sample Manager',
            ),
            8 => 
            array (
                'name' => 'email.sender_email',
                'module' => 'email',
                'value' => 'no-reply@rockdesign.com',
            ),
            9 => 
            array (
                'name' => 'email.sender_name',
                'module' => 'email',
                'value' => 'RockDesign Notification',
            ),
            10 => 
            array (
                'name' => 'email.username',
                'module' => 'email',
                'value' => 'rockdesign',
            ),
            11 => 
            array (
                'name' => 'sales.currency_rate',
                'module' => 'sales',
                'value' => '1.5',
            ),
            12 => 
            array (
                'name' => 'sales.fedex_account',
                'module' => 'sales',
                'value' => '510087240',
            ),
            13 => 
            array (
                'name' => 'sales.fedex_beta',
                'module' => 'sales',
                'value' => '1',
            ),
            14 => 
            array (
                'name' => 'sales.fedex_key',
                'module' => 'sales',
                'value' => 's1WFZ0BIZKSPKGHT',
            ),
            15 => 
            array (
                'name' => 'sales.fedex_meter',
                'module' => 'sales',
                'value' => '100276856',
            ),
            16 => 
            array (
                'name' => 'sales.fedex_pass',
                'module' => 'sales',
                'value' => 'FHSWdYj0UHVYNYH72e66zq7AE',
            ),
            17 => 
            array (
                'name' => 'sales.paypalex_mode',
                'module' => 'sales',
                'value' => '0',
            ),
            18 => 
            array (
                'name' => 'sales.paypalex_password',
                'module' => 'sales',
                'value' => ' ',
            ),
            19 => 
            array (
                'name' => 'sales.paypalex_signature',
                'module' => 'sales',
                'value' => ' ',
            ),
            20 => 
            array (
                'name' => 'sales.paypalex_username',
                'module' => 'sales',
                'value' => ' ',
            ),
            21 => 
            array (
                'name' => 'sales.paypal_email',
                'module' => 'sales',
                'value' => 'billing@rockdesign.com',
            ),
            22 => 
            array (
                'name' => 'sales.paypal_mode',
                'module' => 'sales',
                'value' => '0',
            ),
            23 => 
            array (
                'name' => 'site.author',
                'module' => 'site',
                'value' => 'RockDesign.com',
            ),
            24 => 
            array (
                'name' => 'site.description',
                'module' => 'site',
                'value' => 'High end business cards and free business cards templates!',
            ),
            25 => 
            array (
                'name' => 'site.keywords',
                'module' => 'site',
                'value' => 'Unique Business Cards, Premium Business Cards, Luxury Business cards, Business Card Designs, Visiting Cards, Name Card, Business Card Templates, Foil Stamping, Metal Business Cards, Plastic Business Cards, Black Business Cards',
            ),
            26 => 
            array (
                'name' => 'site.name',
                'module' => 'site',
                'value' => 'RockDesign',
            ),
            27 => 
            array (
                'name' => 'site.patience',
                'module' => 'site',
                'value' => '0',
            ),
            28 => 
            array (
                'name' => 'site.phone',
                'module' => 'site',
                'value' => '1-888-504-1116',
            ),
            29 => 
            array (
                'name' => 'site.status',
                'module' => 'site',
                'value' => '0',
            ),
            30 => 
            array (
                'name' => 'site.title',
                'module' => 'site',
                'value' => 'RockDesign Luxury Business Card Printing',
            ),
            31 => 
            array (
                'name' => 'social.fb_app_id',
                'module' => 'social',
                'value' => '1687009378207099',
            ),
            32 => 
            array (
                'name' => 'social.fb_app_key',
                'module' => 'social',
                'value' => 'f396a38b43f354ce50b682fe1e7578e6',
            ),
            33 => 
            array (
                'name' => 'store.address',
                'module' => 'store',
                'value' => 'Street1',
            ),
            34 => 
            array (
                'name' => 'store.city',
                'module' => 'store',
                'value' => 'Surrey',
            ),
            35 => 
            array (
                'name' => 'store.country',
                'module' => 'sotre',
                'value' => 'CA',
            ),
            36 => 
            array (
                'name' => 'store.owner',
                'module' => 'store',
                'value' => 'Albert Jei',
            ),
            37 => 
            array (
                'name' => 'store.state',
                'module' => 'store',
                'value' => 'BC',
            ),
            38 => 
            array (
                'name' => 'store.zipcode',
                'module' => 'store',
                'value' => 'V3S3C3',
            ),
        ));
        
        
    }
}

<?php

use Illuminate\Database\Seeder;

class DesignsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('designs')->delete();
        
        \DB::table('designs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slide_id' => 1,
                'name' => 'Business Card Design Services',
                'image' => 'upload/design/b/u/business-card-design-header.jpg',
                'text' => 'Rockdesign\'s professional designers will make your business card stand above the crowd.',
            'description' => 'RockDesign offers professional Design Services that will bring your business card design to the next level. Our talented team of designers are on hand to create designs for you based on your initial concept (Simple Design Service), or they can provide you with 3 original concepts (Custom Design Service). Customers wanting to include their business logo on their business card are required to provide RockDesign with a logo file in original editable vector format (ai, eps). If your logo is not in the proper format, our designers can provide you with logo tracing services for an additional fee (depending on complexity). Before discussing your business card design with our Designers, we highly recommend that you take a look at our various print products and familiarize yourself with the cardstocks and print features that you would like to incorporate into your design. Please note that if you are printing elsewhere, there will be an additional $150 charge for our Design Services. ',
                'meta_tag' => 'business card design, name card design, visiting card design, graphic design, business card designs',
                'meta_description' => 'Get a professional business card design from RockDesign.com. Choose a Design Package that’s right for you: Simple Design Service or Custom Business Card Design',
                'slug' => 'business-card-design-services',
                'status' => 1,
                'require_logo_design' => 0,
                'created_at' => '2016-02-10 20:55:56',
                'updated_at' => '2016-02-26 20:49:04',
            ),
            1 => 
            array (
                'id' => 2,
                'slide_id' => 3,
                'name' => 'Logo + Business Card Design Service',
                'image' => 'upload/design/l/o/logo-design-top-image.jpg',
                'text' => 'We design professional logo and business cards for your brand',
                'description' => 'What makes Rockdesign different is our understanding of both branding and printing. By combining our knowledge on these two aspects, we are able to create a brand strategy that can enhance your brand image above others. We start the project by understanding your brand and your target market. Our dedicated designers will do market research based on your information and come up with a few design concepts. You can also tell our designers what you are looking for specifically, whether it be a logo text, a logo mark, or any kind of corporate colour you would like to use for your brand. Our designers will then walk you through their logo concepts and based on your feedback, our designers will do iterations towards the chosen direction. We will ensure that you will receive an outstanding logo for your brand.

Once we have completed the logo design, our designer will also provide you a professional business card design that goes hand in hand your brand image. ',
                'meta_tag' => 'Logo Design, Business Card Design, Branding, Creative logo designs, best logo designs, logo mark, logo type, visiting card design',
                'meta_description' => 'RockDesign provides professional logo design + business card design services that will elevate your brand to a new level. Order a Design Package online today',
                'slug' => 'logo-business-card-design-service',
                'status' => 1,
                'require_logo_design' => 1,
                'created_at' => '2016-02-12 00:39:14',
                'updated_at' => '2016-02-26 20:47:22',
            ),
        ));
        
        
    }
}

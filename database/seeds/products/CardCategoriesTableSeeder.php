<?php

use Illuminate\Database\Seeder;

class CardCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_categories')->delete();
        
        \DB::table('card_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service_id' => 1,
                'name' => 'Luxury Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS',
                'slug' => 'luxury-business-cards',
                'image' => 'upload/category/a/r/hard-suede-business-card1.jpg',
                'meta_tag' => 'visiting card design, luxury business card, best business cards, custom business cards, name card, letterpress, foil stamping, laser engraving, laser cut, premium name card design',
                'meta_description' => 'Impress your customers with stunning luxury cards, including Triplex, Hard Suede and Soft Suede business cards. Rockdesign\'s luxury name card also comes with variety of print features, such as letterpress, embossing, deboss, foil stamping, offset printing, thermography, die cutting, laser cut, laser engraving and more . We also offer free business card templates for our customers. Get your name cards online today at Rockdesign.com',
                'created_at' => '2016-02-07 00:26:39',
                'updated_at' => '2016-02-19 02:17:56',
            ),
            1 => 
            array (
                'id' => 2,
                'service_id' => 1,
                'name' => 'Premium Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS',
                'slug' => 'premium-business-cards',
                'image' => 'upload/category/n/j/letterpress-business-cards3.jpg',
                'meta_tag' => 'high end business cards, black card, visiting card design, letterpress, cool business cards, black business cards, premium business cards, embossing, die cutting, gold foil, gold foil printing, ',
                'meta_description' => 'Order RockDesign’s Premium Business cards:  including our Black, Duplex, Smooth/Premium Uncoated, Letterpress, Brown Kraft, Silk and Gray Business cards.',
                'created_at' => '2016-02-07 01:50:09',
                'updated_at' => '2016-02-19 02:19:18',
            ),
            2 => 
            array (
                'id' => 5,
                'service_id' => 1,
                'name' => 'Metal Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS',
                'slug' => 'metal-business-cards',
                'image' => 'upload/category/m/s/stainless-metal-business-card13.jpg',
                'meta_tag' => 'metal business cards, stainless steel business cards, black metal business cards, steel business cards, name card, visiting card, business cards online, laser engraving, etching',
                'meta_description' => 'Check out RockDesign’s metal business cards - featuring Black metal, Stainless Steel, Gold Metal, and Luxury Black metal cards. ',
                'created_at' => '2016-02-07 01:55:15',
                'updated_at' => '2016-02-19 02:20:40',
            ),
            3 => 
            array (
                'id' => 6,
                'service_id' => 1,
                'name' => 'Plastic Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS',
                'slug' => 'plastic-business-cards',
                'image' => 'upload/category/k/v/frost-pvc-plastic-cards1.jpg',
                'meta_tag' => 'plastic business cards, transparent business cards, clear business cards, waterproof business cards, UV printing',
                'meta_description' => 'Order your plastic business cards. Choose from our selection of Frost, Frost PVC, or Clear Plastic business cards.',
                'created_at' => '2016-02-07 01:56:15',
                'updated_at' => '2016-02-19 02:21:10',
            ),
            4 => 
            array (
                'id' => 7,
                'service_id' => 1,
                'name' => 'Classic Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS',
                'slug' => 'classic-business-cards',
                'image' => 'upload/category/m/2/natural-cream-business-card1.jpg',
                'meta_tag' => 'business cards, name card, visiting card, business cards online, cheap business cards, free business card templates, rounded corners, offset printing, foil stamping, spot uv',
                'meta_description' => 'Order from our Classic Collection: 2 Sided Spot UV business Cards, Natural Cream Uncoated, or our Regular Suede Business Cards.',
                'created_at' => '2016-02-07 01:56:32',
                'updated_at' => '2016-02-19 02:26:33',
            ),
            5 => 
            array (
                'id' => 8,
                'service_id' => 1,
                'name' => 'Quick Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS',
                'slug' => 'quick-business-cards',
                'image' => 'upload/category/1/y/fast-business-card-tb.jpg',
                'meta_tag' => 'fast business cards, visiting card, laser engraving name card, digital printing, quick business card, business cards online, business card templates',
                'meta_description' => 'Order your Quick Business Cards today! For urgent orders, choose from our Laser Engraved black duplex cards or our Laser Engraved Black Metal business cards. ',
                'created_at' => '2016-02-07 01:57:03',
                'updated_at' => '2016-02-19 02:21:39',
            ),
            6 => 
            array (
                'id' => 11,
                'service_id' => 1,
                'name' => 'Unique Business Cards',
                'text' => 'IMPRESS YOUR CUSTOMERS WITH STUNNING CARDS1',
                'slug' => 'unique-business-cards',
                'image' => 'upload/category/1/e/acrylic-business-card12.jpg',
                'meta_tag' => 'Unique Business Cards, business card designs, creative business cards, visiting card design, business card design',
                'meta_description' => 'Checkout RockDesign\'s Unique Business Cards ! Get your creative business cards like acrylic laser engraved business cards and much more !',
                'created_at' => '2016-03-07 04:40:34',
                'updated_at' => '2016-03-24 23:11:29',
            ),
        ));
        
        
    }
}

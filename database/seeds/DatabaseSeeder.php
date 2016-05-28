<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
        $this->call('CountriesTableSeeder');
        $this->call('RegionsTableSeeder');
        $this->call('CountryIpsTableSeeder');
        $this->call('AdminsTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('SlidesTableSeeder');
        $this->call('SlideImagesTableSeeder');
        $this->call('ServicesTableSeeder');
        $this->call('HomeSlidersTableSeeder');
        $this->call('CardCategoriesTableSeeder');
        $this->call('CardDiscountsTableSeeder');
        $this->call('CardFeaturesTableSeeder');
        $this->call('CardImagesTableSeeder');
        $this->call('CardOptionsTableSeeder');
        $this->call('CardPricesTableSeeder');
        $this->call('CardQuantitiesTableSeeder');
        $this->call('CardsTableSeeder');
        $this->call('DesignPackagesTableSeeder');
        $this->call('DesignPhasesTableSeeder');
        $this->call('DesignWorksTableSeeder');
        $this->call('DesignsTableSeeder');
        $this->call('LogoSamplesTableSeeder');
        $this->call('ShowcaseImagesTableSeeder');
        $this->call('ShowcaseOptionsTableSeeder');
        $this->call('ShowcaseTagsTableSeeder');
        $this->call('ShowcasesTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('TemplateImagesTableSeeder');
        $this->call('TemplateOptionsTableSeeder');
        $this->call('TemplateTagsTableSeeder');
        $this->call('TemplatesTableSeeder');
        $this->call('PermissionsTableSeeder');
    }
}

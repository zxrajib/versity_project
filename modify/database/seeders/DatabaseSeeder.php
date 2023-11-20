<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            VendorSeeder::class,
            CategorySeeder::class,
/*            AttributeTableSeeder::class,
            AttributeValueTableSeeder::class,*/
            BrandSeeder::class,
            UnitSeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
            StockSeeder::class,
            StockDetailsSeeder::class,
            CountriesSeeder::class,
        ]);
    }
}

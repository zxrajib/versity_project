<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $product = [
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 4,
                'vendor_id' => 1,
                'category_id' => 1,
                'unit_id' => 1,
                'brand_id' => 1,
                'other_brand' => 'Other Band',
                'name' => 'This is product name',
                'description' => 'This is Description',
                'slug' => 'product-slug',
                'sku' => '12562',
                'status' => '1',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 4,
                'vendor_id' => 1,
                'category_id' => 1,
                'unit_id' => 1,
                'brand_id' => 1,
                'other_brand' => 'Other Band2',
                'name' => 'This is product name2',
                'description' => 'This is Description',
                'slug' => 'product-slug-2',
                'sku' => '125622',
                'status' => '1',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 4,
                'vendor_id' => 1,
                'category_id' => 1,
                'unit_id' => 1,
                'brand_id' => 1,
                'other_brand' => 'Other Band3',
                'name' => 'This is product name3',
                'description' => 'This is Description3',
                'slug' => 'product-slug-3',
                'sku' => '125623',
                'status' => '1',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],


        ];

        Product::insert($product);
//        Product::factory()->count(5000)->create();
    }
}

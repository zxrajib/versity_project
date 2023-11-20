<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $productImage = [
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'product_id' => 1,
                'image' => 'product1.jpg',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'product_id' => 1,
                'image' => 'product2.jpg',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'product_id' => 1,
                'image' => 'product3.jpg',
                'created_at' => $time,
                'updated_at' => $time,
            ],


        ];

        ProductImage::insert($productImage);
    }
}

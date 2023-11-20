<?php

namespace Database\Seeders;

use App\Models\StockDetail;
use Illuminate\Database\Seeder;

class StockDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $stock = [
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 1,
                'stock_id' => 1,
                'product_id' => 1,
                'price' => 500.00,
                'quantity' => 100,
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 1,
                'stock_id' => 1,
                'product_id' => 2,
                'price' => 1000.00,
                'quantity' => 100,
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 1,
                'stock_id' => 1,
                'product_id' => 3,
                'price' => 2000.00,
                'quantity' => 500,
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],


        ];

        StockDetail::insert($stock);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
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
                'product_id' => 1,                'total_in' => 100,
                'total_out' => 0,
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 1,
                'product_id' => 2,
                'total_in' => 200,
                'total_out' => 0,
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 1,
                'product_id' => 3,
                'total_in' => 500,
                'total_out' => 0,
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],


        ];

        Stock::insert($stock);
    }
}

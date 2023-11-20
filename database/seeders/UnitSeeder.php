<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Unit;
use Database\Factories\UnitFactory;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
//    public $factory;
//    public function __construct()
//    {
//        $this->factory = new UnitFactory();
//    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $unitData = [
            [
                'user_id' => '1',
                'uuid' => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'KG',
                'status' => '1',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid' => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'PCS',
                'status' => '1',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid' => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Litter',
                'status' => '1',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],

        ];

        Unit::insert($unitData);
//        Unit::factory()->count(30)->create();
    }
}
